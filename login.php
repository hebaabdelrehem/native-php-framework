<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

include 'starter.php';

if (isset($_GET['act'])) {
	$act = $_GET['act'];

	if ($act == 'logout') {
		if ($users -> logout() == TRUE) {
			exit('<div id=\'res\'>success</div>');
		}
	}

} else {

	if (isset($_POST['user'], $_POST['pass'])) {

		if ($users -> login($_POST['user'], $_POST['pass']) == true) {exit('<div id=\'res\'>success</div>');
		} else {exit('<div id=\'res\'>error</div>');
		}
	}
}

$pagetitle = "Login";
$smarty -> assign("pagetitle", $pagetitle);

$smarty -> display('head.html');
$smarty -> display('header.html');
$smarty -> display('loginpage.html');
$smarty -> display('footer.html');

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
