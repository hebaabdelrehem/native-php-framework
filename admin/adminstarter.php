<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (eregi("adminstarter.php", $_SERVER['PHP_SELF'])) {die("You don't have right permission to access this file directly.");
}

//---------------------------- Main includes ----------------------------//

/*$url = $_SERVER['PHP_SELF'];
 $array = explode("/", $url);
 if (in_array('plugins', $array)) {
 $base = '../../';
 } elseif ($url) {
 $base = '../';
 }*/

include '../includes/minative.class.php';
include '../includes/users.class.php';
include '../includes/upload.class.php';
include '../includes/ccenter.class.php';
include '../includes/mail.class.php';
include '../includes/languages.class.php';
include '../includes/functions.php';
include 'includes/menus.class.php';
include 'includes/admin.class.php';

//---------------------------- Admin actions class ----------------------------//

$admin = new admin();

//---------------------------- Session start ----------------------------//

$minative -> sec_session_start();

//---------------------------- All System Settings ----------------------------//
//---------------------------- style ----------------------------//

$adminmainstyle = $minative -> getset('adminmainstyle');

include 'includes/smarty.init.php';

//---------------------------- Language ----------------------------//

$adminmainlang = $minative -> getset('adminmainlang');

include 'languages/' . $adminmainlang . '.php';
$dir = $lng['dir'];
$langcode = $lng['lang'];

//---------------------------- Get language for main website ----------------------------//

$languages = $minative_languages -> get_active_languages();

$smarty -> assign('languages', $languages);

// General settings

$generalsettings = $minative -> settingsarray_bygroup('generalsettings');

foreach ($generalsettings as $key => $value) {

	$smarty -> assign($value['setname'], $value['value']);
}

//  Script url //
$url = $minative -> getset('siteurl');
$folder = $minative -> getset('scriptfolder');
$script_url = $url . $folder;

//-------------------------- Date and time ----------------------------//

$datetime = $minative -> dateandtime();
$date = $datetime['0'];
$time = $datetime['1'];

//-------------------------- Hooks system ----------------------------//

include 'includes/hooks/hooks.init.php';

//$minativePlugins = new phphooks();

//---------------------------- Loged user array ----------------------------//

if ($users -> login_check() == TRUE) {
	$login = "loged";
	$userid = $_SESSION['userid'];
	$userdata = $minative -> userdata($userid);

	if (!$minative -> check_perm('log_to_control_panel')) {header('Location: ../errorpage.php');
	}

	$smarty -> assign("userid", $userid);
	$smarty -> assign("name", $userdata['name']);
	$smarty -> assign("email", $userdata['email']);
	$smarty -> assign("group", $userdata['group_id']);

} elseif ($users -> login_check() == null) {
	header('Location: login.php');
} else
	header('Location: login.php');


header('Cache-control: private');

//---------------------------- Smarty assign ----------------------------//

$smarty -> assign("login", $login);
$smarty -> assign("dir", $dir);
$smarty -> assign("langcode", $langcode);
$smarty -> assign("scripturl", $script_url);
$smarty -> assign("adminmainstyle", $adminmainstyle);
$smarty -> assign("date", $date);
$smarty -> assign("time", $time);

//Smarty assign
/*$smarty -> assign("lang", $lang);
 $smarty -> assign("dir", $dir['dir']);
 $smarty -> assign("title", $sitetitle);
 $smarty -> assign("logopath", $logopath);
 $smarty -> assign("date", $date);
 $smarty -> assign("time", $time);

 ////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
 /*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
