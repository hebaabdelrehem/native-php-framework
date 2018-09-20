<?php
/*
//Smarty fun

require_once 'includes/smarty/SmartyBC.class.php';
$GLOBALS['smarty'] = new SmartyBC();
$smartywhere = 'C:\xampp\htdocs\minative\admin';

//$smarty->testInstall();
//$smarty->debugging = true;
//$smarty->cache_lifetime = 120;
$smarty->caching = false;

$smarty->setTemplateDir($smartywhere.'\templates');
$smarty->setCompileDir($smartywhere.'\templates_c');
$smarty->setConfigDir($smartywhere.'\configs');
$smarty->setCacheDir($smartywhere.'\cache');
$smarty->addPluginsDir($smartywhere.'\includes\smarty\plugins');
*/


//Smarty fun

require_once 'includes/smarty/SmartyBC.class.php';
$GLOBALS['smarty'] = new SmartyBC();
$smartywhere = 'C:\xampp\htdocs\minative\admin';

//$smarty->testInstall();
//$smarty->debugging = true;
//$smarty->cache_lifetime = 120;
$smarty->caching = false;

$smarty->setTemplateDir($smartywhere.'\adminstyles\/'.$adminmainstyle);
$smarty->setCompileDir($smartywhere.'\templates_c');
$smarty->setConfigDir($smartywhere.'\configs');
$smarty->setCacheDir($smartywhere.'\cache');
$smarty->addPluginsDir($smartywhere.'\includes\smarty\plugins');
