<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include config
include 'starter.php';

//---------------------------- Registration settings ----------------------------//

$regsettings_get = $minative -> settingsarray_bygroup('regsettings');
foreach ($regsettings_get as $key => $value) {
	$regsettings[$value['setname']] = $value['value'];

}

$smarty -> assign("uploaduseravator", $regsettings['uploaduseravator']);
$smarty -> assign("tosactivate", $regsettings['tosactivate']);
$smarty -> assign("termspagelink", $regsettings['termspagelink']);
$smarty -> assign("termscontent", $regsettings['termscontent']);

//---------------------------- Register action ----------------------------//

if ($_POST) {
	if (check_blank_value($_POST['name']) || check_blank_value($_POST['user']) || check_blank_value($_POST['password']) || check_blank_value($_POST['cpassword']) || check_blank_value($_POST['email'])) {
		die('missingfields');
	}

	// Check captcha
	if ($captchaen) {
		if ($recaptchaen) {

			$captcha = $_POST['g-recaptcha-response'];
			if (!$captcha) {
				exit('<div id=\'res\'>captchawrong</div>');
			}

			$response = file_get_contents($recaptchaverifylink . "?secret=" . $recaptchasecretkey . "&response=" . $captcha . "&remoteip=" . $_SERVER['REMOTE_ADDR']);
			if ($response . 'success' == false) {
				exit('<div id=\'res\'>captchawrong</div>');
			}
		} elseif (strtolower($_POST['captcha']) != $_SESSION['captcha'] && !check_blank_value($_POST['captcha'])) {
			exit('<div id=\'res\'>captchawrong</div>');
		}
	}

	//---------------------------- Filter And Validate User inputs before registration  ----------------------------//

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

	// Email -------
	echo $name;
	$email = clean_input_gpc('p', 'email', 'EMAIL');
	$email_valide = var_validate($email, 'email');

	if ($email_valide == "FALSE") {exit('<div id=\'res\'>notvalidemail</div>');
	}

	// Password	-------

	$password = clean_input_gpc('p', 'password', 'STRING');
	$cpassword = clean_input_gpc('p', 'cpassword', 'STRING');

	if (check_password($password)) {
		if (strlen($password) < $minative -> getset('passlength')) {exit('<div id=\'res\'>passlenth</div>');
		}
		if ($password != $cpassword) {exit('<div id=\'res\'>passdonotmatch</div>');
		}

	} else {exit('<div id=\'res\'>passismissing</div>');
	}

	// Password encrypting -------

	$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
	$encrypted_pass = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($random_salt), $password, MCRYPT_MODE_CBC, md5(md5($random_salt))));

	// Disabled Usernames -------

	if ($regsettings['disabledusernames']) {
		if ($users -> disabled_names($user)) {exit('<div id=\'res\'>notvalidusername</div>');
		}
	}

	// Unique Email	-------

	if ($regsettings['uniqueemail']) {
		if ($users -> unique_email($email)) {exit('<div id=\'res\'>emailalreadyexist</div>');
		}
	}

	// Unique Username -------

	if ($regsettings['uniqueusername']) {
		if ($users -> unique_username($user)) {exit('<div id=\'res\'>useralreadyexist</div>');
		}
	}

	// User Group -------
	

	// Account confirmation
	/* If mail confirm is enabled, it will sent email to new user email to confirm it and move him to 'admin confirm' group if adminconfirm is enabled.
	 * if admin confirm is not enabled he will be moved to members group
	 * */

	if ($regsettings['mailconfirm']) {$group_id = "5";
	} else if ($regsettings['adminconfirm']) {$group_id = "6";
	} else {$group_id = $regsettings['newusersgroup'];;
	}

	// Upload avatar -------
	if ($sex == '1') {
		$default_user = "default_user_male.jpg";
	} elseif ($sex == '2') {
		$default_user = "default_user_female.jpg";
	}

	if ($regsettings['uploaduseravator']) {
		if (isset($_FILES["file"]) && $_FILES["file"]["error"] == UPLOAD_ERR_OK) {
			$up_path = "contents/avators/";
			$avatortypes = $regsettings['avatortypes'];
			$avatormaxsize = $regsettings['avatormaxsize'];
			$upload = $upload -> uploadfile($_FILES['file']['tmp_name'], $_FILES['file']['name'], $_FILES['file']['type'], $_FILES['file']['size'], $up_path, $avatortypes, $avatormaxsize);

			if ($upload['res'] == "done") {
				$filename = $upload['filename'];
				//echo $filename;
			} elseif ($upload['res'] == "invalidfile") {exit('<div id=\'res\'>invalidfile</div>');
			} elseif ($upload['res'] == "maxsize") {exit('<div id=\'res\'>maxsize</div>');
			} else
				echo "error upload";

		} else {
			$filename = $default_user;
		}
	} else {
		$filename = $default_user;
	}

	// Registration date -------

	$reg_date = date("Y-m-d");

	// Insert new user - accept registration -------

	$q = "INSERT INTO users (name, email, password, user, dname, country, city, sex, bio, face, twitter, google, skype, 
        						linkedin, yahoo, avatar, website, reg_date, group_id, salt) 
        						VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

	$values = array($name, $email, $encrypted_pass, $user, $dname, $country, $city, $sex, $bio, $face, $twitter, $google, $skype, $linkedin, $yahoo, $filename, $website, $reg_date, $group_id, $random_salt);

	$insert = $minative_mysqliDB -> insert($q, 'ssssssssssssssssssss', $values);

	if ($insert) {
		$userid = $insert;
		$user_browser = $_SERVER['HTTP_USER_AGENT'];
		$user_ip = $_SERVER['REMOTE_ADDR'];
		$userid = preg_replace("/[^0-9]+/", "", $userid);
		$_SESSION['userid'] = $userid;
		$user = preg_replace("/[^a-zA-Z0-9_\-]+/", "", $user);

		$_SESSION['user'] = $user;
		$_SESSION['loginstring'] = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($user_browser), $encrypted_pass, MCRYPT_MODE_CBC, md5(md5($user_browser))));

		// Update user

		$last_login = date("Y-m-d H:i:s");
		$login_values = array($last_login, $user_ip, $user_browser, $userid);
		$updateq = "UPDATE users SET `last_login` = ?, `ip_add` = ?, `user_agent` = ? WHERE `id` = ? ";
		$update = $minative_mysqliDB -> update($updateq, 'ssss', $login_values);

		exit('<div id=\'res\'>success</div>');
	} else {exit('<div id=\'res\'>error</div>');
	}
}

//---------------------------- Countries ----------------------------//

$countries = $minative -> countries();
$smarty -> assign('data', $countries);

//----------------------- Registration page view -----------------------//

$pagetitle = "Registration";

$smarty -> assign("pagetitle", $pagetitle);

$smarty -> display('head.html');
$smarty -> display('header.html');
$smarty -> display('register.html');
$smarty -> display('footer.html');

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
