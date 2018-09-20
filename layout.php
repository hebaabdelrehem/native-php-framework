<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include config
require 'includes/langfunc.php';
include "includes/config.php";

session_start();
header('Cache-control: private');

//To get script url
$script_url = $url.$folder;

//date and time
$date=date("Y-m-d");
$time=date("H:i:s");

//language

//Set site title
$sitetitle= $lng['title'];

//Set copyright
$copy= $lng['copyright'];

//Set logo path
$logopath="/templates/images/logo.png";

//lang
$menuheader = $lng['menuheader'];
$smarty->assign("menuheader", $menuheader);

//Smarty assign
$smarty->assign("lang", $lang);
$smarty->assign("lang", $lang);
$smarty->assign("dir", $dir['dir']);
$smarty->assign("title", $sitetitle);
$smarty->assign("scripturl", $script_url);
$smarty->assign("logopath", $logopath);
$smarty->assign("date", $date);
$smarty->assign("time", $time);
$smarty->assign("copyright", $copy);



//Smarty temp. display
$smarty->display('head.html');
$smarty->display('header.html');
$smarty->display('layout.html');
$smarty->display('footer.html');

?>