<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//---------------------------- Main includes ----------------------------//

include 'includes/minative.class.php';
include 'includes/users.class.php';
include 'includes/ccenter.class.php';
include 'includes/upload.class.php';
include 'includes/mail.class.php';
include 'includes/languages.class.php';
include 'includes/functions.php';
include 'admin/includes/menus.class.php';



//---------------------------- Session start ----------------------------//

$minative -> sec_session_start();

//---------------------------- All System Settings ----------------------------//

// Systerm style ----------------------------//

$mainstyle = $minative -> getset('mainstyle');
include 'includes/smarty.class.php';

// General settings ----------------------------//

$generalsettings = $minative -> settingsarray_bygroup('generalsettings');
foreach ($generalsettings as $key => $value) {
	$smarty -> assign($value['setname'], $value['value']);
}

// language settings ----------------------------//

$langstyle = $minative -> settingsarray_bygroup('langstyle');
foreach ($langstyle as $key => $value) {
	$smarty -> assign($value['setname'], $value['value']);
}

// Company/Website profile ----------------------------//

$compprofsettings = $minative -> settingsarray_bygroup('compprofsettings');
foreach ($compprofsettings as $key => $value) {
	$smarty -> assign($value['setname'], $value['value']);
}

// Extra settings ----------------------------//

$extrasettings = $minative -> settingsarray_bygroup('extrasettings');
foreach ($extrasettings as $key => $value) {
	$smarty -> assign($value['setname'], $value['value']);
}

// Other needed settings ----------------------------//

//  Registration //
$enablereg = $minative -> getset('enablereg');
$smarty -> assign("enablereg", $enablereg);

//  Captcha settings //
$captchaen = $minative -> getset('captchaen');
$captchasounden = $minative -> getset('captchasounden');
$captchareloaden = $minative -> getset('captchareloaden');

$recaptchaen = $minative -> getset('recaptchaen');
$recaptchasitekey = $minative -> getset('recaptchasitekey');
$recaptchasecretkey = $minative -> getset('recaptchasecretkey');
$recaptchaverifylink = $minative -> getset('recaptchaverifylink');

$smarty -> assign("recaptchaen", $recaptchaen);
$smarty -> assign("recaptchasitekey", $recaptchasitekey);
$smarty -> assign("recaptchasecretkey", $recaptchasecretkey);

$smarty -> assign("captchaen", $captchaen);
$smarty -> assign("captchasounden", $captchasounden);
$smarty -> assign("captchareloaden", $captchareloaden);

//  Closing website //
$closing = $minative -> getset('closing');

//  Script url //
$url = $minative -> getset('siteurl');
$folder = $minative -> getset('scriptfolder');
$script_url = $url . $folder;

//-------------------------- Hooks system ----------------------------//

include 'includes/hooks/hooks.init.php';

//---------------------------- System Language ----------------------------//

// Main language ----------------------------//

$mainlang = $minative -> check_lang();
$smarty -> assign("mainlang", $mainlang);

// Language file & phrases assign ----------------------------//

$lang_filename = $minative_languages -> get_language_filename($mainlang);
include 'languages/' . $lang_filename;

foreach ($lng as $key => $value) {
	$smarty -> assign("ph_" . $key, $value);
}

// Active languages ----------------------------//

$active_languages = $minative_languages -> get_active_languages();
$smarty -> assign("active_languages", $active_languages);

// Get data if language is not "English"  ----------------------------//

if ($mainlang != "en") {
	$type = "settings";
	$parent_id = "0";
	$contentdatas = $minative_languages -> get_from_multi_one_lang($type, $mainlang);
	foreach ($contentdatas as $contentdata) {
		$setname = $contentdata['name'];
		$value = $contentdata['content'];
		$smarty -> assign($setname, $value);
	}
}

// Pass Java script phrases to js file ----------------------------//

echo "<script type='text/javascript'>var js_phrases =" . json_encode($js_phrases, JSON_PRETTY_PRINT) . "</script>";

$uri = $_SERVER['REQUEST_URI'];
if (strpos($uri, '?') !== false) {
	if (strpos($uri, '&') !== false) {
		$uri = preg_replace('~(\?|&)lang=[^&]*~', '$1', $uri);
		$langswitcher = $uri;
	} else {
		$uri = preg_replace('~(\?|&)lang=[^?]*~', '$1', $uri);
		$langswitcher = $uri . "&";
	}

} else {
	$langswitcher = $uri . "?";
}
$smarty -> assign('langswitcher', $langswitcher);

//-------------------------- Date and time ----------------------------//

$datetime = $minative -> dateandtime();
$date = $datetime['0'];
$time = $datetime['1'];
//---------------------------- Hooks system ----------------------------//

//include 'includes/hooks/hooks.init.php';

//---------------------------- Menus ----------------------------//

$type_lang = 'menuchild';

$menus_places = $menus -> menus_places();

foreach ($menus_places as $place) {
	$place_menus = $minative -> menus_data($place);
	$smarty -> assign($place . '_menus', $place_menus);

	foreach ($place_menus as $id => $value) {
		if ($place_menus[$id]['type'] == "dropdown" || $place_menus[$id]['type'] == "list" || $place_menus[$id]['type'] == "accordian" || $place_menus[$id]['type'] == "bar") {
			$parentid = $place_menus[$id]['id'];
			$childs = $minative -> menus_child($parentid);
			if ($mainlang != 'en') {
				foreach ($childs as $id => $value) {
					if ($minative_languages -> check_lang_exist($type_lang, $mainlang, $childs[$id]['id']) > 0) {
						$child_data = $minative_languages -> get_from_multi($childs[$id]['id'], $type_lang, $mainlang);
						$childs[$id]['name'] = $child_data['name'];
					}
				}
			}
			$smarty -> assign($place . "_child" . $parentid, $childs);
		}
	}
}

//---------------------------- Loged user array ----------------------------//

if ($users -> login_check()) {
	$login = "loged";
	$userid = $_SESSION['userid'];
	$userdata = $minative -> userdata($userid);
	$group_id = $userdata['group_id'];
	$smarty -> assign("userid", $userid);
	$smarty -> assign("name", $userdata['name']);
	$smarty -> assign("email", $userdata['email']);
	$smarty -> assign("group", $userdata['group_id']);
	$smarty -> assign("avatar", $userdata['avatar']);
	$messdata = $ccenter -> get_user_mess($_SESSION['userid']);

	$smarty -> assign('messdata', $messdata);

} else {$login = "";
	$group_id = "4";
}

//---------------------------- Smarty assign ----------------------------//

$smarty -> assign("login", $login);
$smarty -> assign("scripturl", $script_url);
$smarty -> assign("date", $date);
$smarty -> assign("time", $time);
$closeadmin = "On";
$smarty -> assign("closeadmin", $closeadmin);

if ($closing == "1" && $group_id !== '1') {
	$smarty -> assign("pagetitle", "Closing");
	$smarty -> display('head.html');
	$smarty -> display('close.html');
	exit ;
} elseif ($closing == "1" && $group_id == '1') {
	$closeadmin = "Off";
	$smarty -> assign("closeadmin", $closeadmin);
}

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
