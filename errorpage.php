<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

include 'starter.php';

$pagetitle ="Error page";
$smarty->assign("pagetitle", $pagetitle);

$smarty->display('head.html');
$smarty->display('header.html');
$smarty->display('errorpage.html');
$smarty->display('footer.html');

?>