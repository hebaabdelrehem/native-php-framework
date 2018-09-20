<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

include '../includes/minative.class.php';
include '../includes/users.class.php';

//---------------------------- Session start ----------------------------//

$minative -> sec_session_start();

//---------------------------- All System Settings ----------------------------//

//---------------------------- style ----------------------------//

$adminmainstyle = $minative -> getset('adminmainstyle');

include 'includes/smarty.init.php';

$smarty -> assign("adminmainstyle", $adminmainstyle);

//---------------------------- Language ----------------------------//

$adminmainlang = $minative -> getset('adminmainlang');

include 'languages/' . $adminmainlang . '.php';
$dir = $lng['dir'];
$langcode = $lng['lang'];

//  Script url //
$url = $minative -> getset('siteurl');
$folder = $minative -> getset('scriptfolder');
$script_url = $url . $folder;

$smarty -> assign("scripturl", $script_url);

if (isset($_GET['act'])) {
	$act = $_GET['act'];

	if ($act == 'logout') {
		if ($users -> logout() == TRUE) {
			exit('success');
		}
	}

} elseif (isset($_POST['user'], $_POST['p'])) {

	if ($users -> login($_POST['user'], $_POST['pass']) == TRUE) {exit('success');
	} else {exit('error');
	}
} elseif ($users -> login_check() == TRUE) {
	header('Location: index.php');
}

$smarty -> display('login.html');

if (isset($_GET['error'])) {
	echo '<p class="error">Error Logging In!</p>';
}

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
