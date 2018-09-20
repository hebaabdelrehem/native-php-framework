<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include starter
include 'adminstarter.php';

if (isset($_GET['act'])) {

	$act = $_GET['act'];

	if ($act == 'list') {
		//---------------------------- List all users ----------------------------//

		$users_count = $minative_mysqliDB -> get_count('users');
		$all_users = $admin -> get_all_('users');

		$smarty -> assign('data', $all_users);
		$smarty -> assign('count', $users_count);

		$user_groups = $admin -> user_groups();
		$smarty -> assign('datagroup', $user_groups);

		$smarty -> display('userslist.html');
	} elseif ($act == 'viewuser') {
		//---------------------------- View user details ----------------------------//

		$countries = $minative -> countries();
		$user_groups = $admin -> user_groups();

		$userid = $_GET['userid'];
		$userdetails = $users -> get_userdata($userid);

		$smarty -> assign('data', $countries);
		$smarty -> assign('datagroup', $user_groups);

		$smarty -> assign("userid", $userid);
		$smarty -> assign("name", $userdetails['name']);
		$smarty -> assign("email", $userdetails['email']);
		$smarty -> assign("user", $userdetails['user']);
		$smarty -> assign("dname", $userdetails['dname']);
		$smarty -> assign("country", $userdetails['country']);
		$smarty -> assign("city", $userdetails['city']);
		$smarty -> assign("sex", $userdetails['sex']);
		$smarty -> assign("bio", $userdetails['bio']);
		$smarty -> assign("face", $userdetails['face']);
		$smarty -> assign("twitter", $userdetails['twitter']);
		$smarty -> assign("google", $userdetails['google']);
		$smarty -> assign("skype", $userdetails['skype']);
		$smarty -> assign("linkedin", $userdetails['linkedin']);
		$smarty -> assign("yahoo", $userdetails['yahoo']);
		$smarty -> assign("website", $userdetails['website']);
		$smarty -> assign("reg_date", $userdetails['reg_date']);
		$smarty -> assign("ip_add", $userdetails['ip_add']);
		$smarty -> assign("user_agent", $userdetails['user_agent']);
		$smarty -> assign("group", $userdetails['group_id']);
		$smarty -> assign("last_login", $userdetails['last_login']);
		$smarty -> assign("avatar", $userdetails['avatar']);
		
		$messdata = $ccenter->get_user_mess($userid);

		$smarty->assign('messdata', $messdata);

		$smarty -> display('viewuser.html');

	} elseif ($act == 'edituser') {
		//---------------------------- Edit user ----------------------------//

		$userid = $_POST['userid'];
		$name = clean_input_gpc('p', 'name', 'STRING');
		$email = clean_input_gpc('p', 'email', 'EMAIL');
		$user = clean_input_gpc('p', 'user', 'STRING');
		$country = clean_input_gpc('p', 'country', 'STRING');
		$dname = clean_input_gpc('p', 'dname', 'STRING');
		$city = clean_input_gpc('p', 'city', 'STRING');
		$sex = clean_input_gpc('p', 'sex', 'STRING');
		$bio = clean_input_gpc('p', 'bio', 'STRING');
		$face = clean_input_gpc('p', 'face', 'URL');
		$twitter = clean_input_gpc('p', 'twitter', 'URL');
		$google = clean_input_gpc('p', 'google', 'URL');
		$skype = clean_input_gpc('p', 'skype', 'STRING');
		$linkedin = clean_input_gpc('p', 'linkedin', 'URL');
		$yahoo = clean_input_gpc('p', 'yahoo', 'STRING');
		$website = clean_input_gpc('p', 'website', 'URL');
		$password = $_POST['password'];

		$edit = $admin -> edit_user($name, $email, $password, $user, $dname, $country, $city, $sex, $bio, $face, $twitter, $google, $skype, $linkedin, $yahoo, $website, $userid);

		if ($edit == true) {exit('success');
		} else {exit('error');
		}

	} elseif ($act == 'adduser') {
		//---------------------------- Add new user " Adding form " ----------------------------//

		$countries = $minative -> countries();
		$user_groups = $admin -> user_groups();

		$smarty -> assign('data', $countries);
		$smarty -> assign('datagroup', $user_groups);

		$smarty -> display('adduser.html');

	} elseif ($act == 'doadd') {
		//---------------------------- Adding new user action "Insert" ----------------------------//
		// Normal data -------
		$name = clean_input_gpc('p', 'name', 'STRING');
		$user = clean_input_gpc('p', 'user', 'STRING');
		$country = clean_input_gpc('p', 'country', 'STRING');
		$dname = clean_input_gpc('p', 'dname', 'STRING');
		$city = clean_input_gpc('p', 'city', 'STRING');
		$sex = clean_input_gpc('p', 'sex', 'STRING');
		$bio = clean_input_gpc('p', 'bio', 'STRING');
		$face = clean_input_gpc('p', 'face', 'STRING');
		$twitter = clean_input_gpc('p', 'twitter', 'STRING');
		$google = clean_input_gpc('p', 'google', 'STRING');
		$skype = clean_input_gpc('p', 'skype', 'STRING');
		$linkedin = clean_input_gpc('p', 'linkedin', 'STRING');
		$yahoo = clean_input_gpc('p', 'yahoo', 'STRING');
		$website = clean_input_gpc('p', 'website', 'STRING');
		$group_id = clean_input_gpc('p', 'group', 'STRING');

		// Email -------
		$email = clean_input_gpc('p', 'email', 'EMAIL');
		$email_valide = var_validate($email, 'email');

		if ($email_valide == "FALSE") {exit('notvalidemail');
		}

		// Password	-------
		$password = clean_input_gpc('p', 'password', 'STRING');

		//if (strlen($password) != 128) {exit ('notvalidpassword');}

		$add_user = $admin -> add_user($name, $email, $password, $user, $dname, $country, $city, $sex, $bio, $face, $twitter, $google, $skype, $linkedin, $yahoo, $website, $group_id);

		if ($add_user == true) {exit('success');
		} else {exit('error');
		}
	} elseif ($act == 'changeavator') {
		//---------------------------- Change user avator ----------------------------//

		$userid = $_POST['userid'];

		if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
			$up_path = "../contents/avators/";
			$upload = $upload -> uploadfile($_FILES['file']['tmp_name'], $_FILES['file']['name'], $_FILES['file']['type'], $_FILES['file']['size'], $up_path);

			if ($upload['res'] == "done") {
				$filename = $upload['filename'];
				$change_avator = $admin -> change_avator($upload['filename'], $userid);
				if ($change_avator == true) {exit('success');
				} else {exit('error');
				}
			} elseif ($upload['res'] == "invalidfile") {exit('invalidfile');
			} elseif ($upload['res'] == "maxsize") {exit('maxsize');
			} else {exit('error');
			}

		} else {exit('error');
		}

	} elseif ($act == 'changegroup') {
		//---------------------------- Change user group ----------------------------//

		$userid = $_POST['userid'];
		$groupid = $_POST['groupid'];

		$change_group = $admin -> change_user_group($userid, $groupid);
		if ($change_group == true) {exit('success');
		} else {exit('error');
		}
	} elseif ($act == 'dodel') {
		//---------------------------- Delete user ----------------------------//

		$userid = $_GET['userid'];

		$delete = $admin -> delete_('users', $userid);
		if ($delete == true) {exit('success');
		} else {exit('error');
		}
	}
}
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
