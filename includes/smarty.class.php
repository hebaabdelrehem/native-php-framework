<?php
//Smarty fun

require_once 'includes/smarty/SmartyBC.class.php';
$GLOBALS['smarty'] = new SmartyBC();
//$smartywhere = 'C:\xampp\htdocs\minative';

//$smarty->testInstall();
//$smarty->debugging = true;
//$smarty->cache_lifetime = 120;
$smarty -> caching = false;

if (PHP_OS == 'WINNT') {
	$smartywhere = 'C:\xampp\htdocs\minative';
	$smarty -> setTemplateDir($smartywhere . '\styles\/' . $mainstyle);
	$smarty -> setCompileDir($smartywhere . '\templates_c');
	$smarty -> setConfigDir($smartywhere . '\configs');
	$smarty -> setCacheDir($smartywhere . '\cache');
	$smarty -> addPluginsDir($smartywhere . '\includes\smarty\plugins');
} elseif (PHP_OS == 'Linux') {
	$smartywhere = $script_url;
	$smarty -> setTemplateDir($smartywhere . '/styles/' . $mainstyle);
	$smarty -> setCompileDir($smartywhere . '/templates_c');
	$smarty -> setConfigDir($smartywhere . '/configs');
	$smarty -> setCacheDir($smartywhere . '/cache');
	$smarty -> addPluginsDir($smartywhere . '/includes/smarty/plugins');
}
