<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include starter
include 'adminstarter.php';


$smarty->assign("users", $minative_mysqliDB->get_count('users'));
$smarty->assign("pages", $minative_mysqliDB->get_count('pagemanager'));
$smarty->assign("contactform", $minative_mysqliDB->get_count('form_contact'));

//Smarty temp. display

$smarty->display('home.html');


////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////