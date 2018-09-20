<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include starter
include 'starter.php';

$pagetitle ="Home";
$smarty->assign("pagetitle", $pagetitle);


	/*
if ($hook->hook_exist ( 'mainpage' )) {
	$hook->execute_hook ( 'mainpage' );
}

if ($hook->hook_exist ( 'with_args' )) {
	$hook->execute_hook ( 'with_args', time() );
}
if ($hook->hook_exist ( 'mainhook1' )) {
	$hook->execute_hook ( 'mainhook1' );
} 

if ($hook->hook_exist ( 'mainhook2' )) {
	$hook->execute_hook ( 'mainhook2' );
} 

if ($hook->hook_exist ( 'mainhook3' )) {
	$hook->execute_hook ( 'mainhook3' );
}
*/
//Smarty temp. display
$smarty->display('head.html');
$smarty->display('header.html');

			if ($minative->check_perm('view_home'))
				{
				$smarty->display('index.html');
				} 
				else {$smarty->display('errorpage.html');}


$smarty->display('footer.html');


////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////