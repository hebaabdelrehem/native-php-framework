<?php
//Include starter
include 'adminstarter.php';


$pagetitle ="Admin panel";

$smarty->assign("pagetitle", $pagetitle);

//Smarty temp. display
$smarty->display('head.html');
$smarty->display('header.html');
$smarty->display('index.html');
$smarty->display('footer.html');


?>