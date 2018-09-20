<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include starter
include 'starter.php';

//---------------------------- Countries ----------------------------//

$countries = $minative -> countries();
$smarty -> assign('data', $countries);

$regsettings_get = $minative -> settingsarray_bygroup('regsettings');
foreach ($regsettings_get as $key => $value) {
	$regsettings[$value['setname']] = $value['value'];

}

//---------------------------- Edit profile data  ----------------------------//

if (isset($_POST['name'], $_POST['user'], $_POST['country'], $_POST['city'], $_POST['sex'])) {
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
	
	if ($minative -> getset('editavator')) {
	if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
		$up_path = "contents/avators/";
		$avatortypes = $minative -> getset('avatortypes');
		$avatormaxsize = $minative -> getset('avatormaxsize');
		$upload = $upload -> uploadfile($_FILES['file']['tmp_name'], $_FILES['file']['name'], $_FILES['file']['type'], $_FILES['file']['size'], $up_path,$avatortypes, $avatormaxsize);

		if ($upload['res'] == "done") {
			$filename = $upload['filename'];
			//echo $filename;
		} elseif ($upload['res'] == "invalidfile") {exit('invalidfile');
		} elseif ($upload['res'] == "maxsize") {exit('maxsize');
		} else
			echo "error upload";

	} else {
		$filename = " ";
	}
	}else {
		$filename = " ";
	}

	$update_profile = $users -> edit_profile($name, $user, $dname, $country, $city, $sex, $bio, $face, $twitter, $google, $skype, $linkedin, $yahoo, $filename, $website);
}

//---------------------------- Change password  ----------------------------//

elseif (isset($_POST['pass'], $_POST['cpass']) && $_POST['pass'] != null) {

	$password = clean_input_gpc('p', 'pass', 'STRING');
	$cpassword = clean_input_gpc('p', 'cpass', 'STRING');

	$change_pass = $users -> change_pass($password, $cpassword);
}

//---------------------------- Change email  ----------------------------//

elseif (isset($_POST['email'], $_POST['cemail'])) {

	$email = clean_input_gpc('p', 'email', 'EMAIL');
	$cemail = clean_input_gpc('p', 'cemail', 'EMAIL');
	$email_valide = var_validate($email, 'email');

	if ($email_valide == "FALSE") {
		exit('notvalidemail');
	} else
		$change_email = $users -> change_email($email, $cemail);
}

//---------------------------------------------------------------------------//

$pagetitle = "Edit profile";
$smarty -> assign("pagetitle", $pagetitle);

$smarty -> display('head.html');
$smarty -> display('header.html');

if ($users -> login_check()) {

	// Check permissions

	if (isset($_REQUEST['edit'])) {
		$edit = $_REQUEST['edit'];

		if ($edit == "security") {

			if ($minative -> check_perm('edit_pass_email')) {
				$smarty -> assign("email", $userdata['email']);
				$smarty -> display('editsecurity.html');
			} else {$smarty -> display('errorpage.html');
			}

		} elseif (!$edit || $edit == "profile") {
			if ($minative -> check_perm('edit_profile')) {
				$smarty -> assign("name", $userdata['name']);
				$smarty -> assign("user", $userdata['user']);
				$smarty -> assign("dname", $userdata['dname']);
				$smarty -> assign("country", $userdata['country']);
				$smarty -> assign("city", $userdata['city']);
				$smarty -> assign("sex", $userdata['sex']);
				$smarty -> assign("bio", $userdata['bio']);
				$smarty -> assign("face", $userdata['face']);
				$smarty -> assign("twitter", $userdata['twitter']);
				$smarty -> assign("google", $userdata['google']);
				$smarty -> assign("skype", $userdata['skype']);
				$smarty -> assign("linkedin", $userdata['linkedin']);
				$smarty -> assign("yahoo", $userdata['yahoo']);
				$smarty -> assign("website", $userdata['website']);
				$smarty -> assign("reg_date", $userdata['reg_date']);

				$smarty -> display('editprofile.html');

			} else {$smarty -> display('errorpage.html');
			}
		}
	}
} else {
	$smarty -> display('loginpage.html');
}

$smarty -> display('footer.html');
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
