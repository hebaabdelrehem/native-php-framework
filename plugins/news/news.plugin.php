<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 Plugin Name: News
 Plugin URI: http://minative.com
 Author: Mina Atif
 Author URI: http://www.minative.com/
 Icon: img/news.png
 folder: news
 */

//---------------------------- Plugin class ----------------------------//

include 'includes/news.class.php';


$plugin_id = basename(__FILE__);

$data['name'] = "News plugin";
$data['folder'] = "news";
$data['author'] = "Mina Atif";
$data['url'] = "http://www.Mina Atif.com/";
$template_path = "plugins/news/templates/";

//register plugin data
register_plugin($plugin_id, $data);

global $smarty;
global $hook;

$newsSettings = $GLOBALS['news']->newsSettings();

//print_r($stickyData);

$hook -> addMenuadmin('news', 'News', '', 1, array(
				'sec1' => array('title' => 'News Sections', 'url' => PLUGINS_FOLDER . $data['folder'] . '/news.admin.php?act=sections'),
				'sec2' => array('title' => 'Add Section', 'url' => PLUGINS_FOLDER . $data['folder'] . '/news.admin.php?act=addSection'), 
				'sec3' => array('title' => 'Add news', 'url' => PLUGINS_FOLDER . $data['folder'] . '/news.admin.php?act=addContent')));
				
$hook->addSettings('1','News settings','newssettings','settings.php?setgroup=newssettings', 1);

$hook->addSettingsTpl('newssettings','../../../'.$template_path.'settings-news.html', 1);

if ($newsSettings['stickyen'] == '1') {
	$stickyData = $GLOBALS['news']->getSticky($newsSettings['stickynum']);
$smarty -> assign("stickyData", $stickyData);
$hook->addblock($template_path.'sticky.html', 1);
}

if ($newsSettings['normalen'] == '1') {
$importantData = $GLOBALS['news']->getImportant($newsSettings['normalnum']);
$smarty -> assign("importantData", $importantData);
$hook->addblock($template_path.'important.html', 2);
}

//$hook->addJs('1','news.js',$data['folder'], 1);


$hook->addMenu('news', 'News', '', 2,
 array(
 'sec1' => array('title' => 'News section 1', 'url' => 'plugins/news/news.php?section='),
 'sec2' => array('title' => 'News section 2', 'url' => '?p=documentation&section=hook-functions')
 ));
 


/*
 $hook->addblock($newspath.'videoslider.html', 2);

 $hook->addblock2($newspath.'blocks2.html', 1);
 $hook->addblock($newspath.'tabs.html', 3);

 /*class news {

 function sec() {
 global $hook;

 $hook->addMenu('documentation', 'Documentation', '?p=documentation', 6,
 array(
 'hooks' => array(
 'title' => 'Hooks',
 'url' => '?p=documentation&section=hooks'
 ),
 'hooks_functions' => array(
 'title' => 'Hooks functions',
 'url' => '?p=documentation&section=hook-functions'
 )
 ));
 }
 function other() {
 global $hook;
 $hook->addMenu('sections', 'other', '?p=documentation');

 }

 function news1() {
 global $smarty;
 global $hook;
 $smarty->display('plugins/News/templates/sticky.html');
 echo 'mina is here, mainhook1<br />';

 }
 function news0() {
 global $smarty;
 global $hook;

 echo 'Aerwfwefewook1<br />';

 }

 function news2() {
 echo "This is news plugin for my framework, mainhook2<br />";
 }

 function news3() {
 echo "Plugin2 hooks into TEST2, mainhook3<br />";
 }

 function filter1($urls) {
 $return [] = "http://www.$urls[0].com";
 $return [] = "http://www.$urls[1].com";
 return $return;
 }
 }

 $newsplg = new news ( );

 add_hook('add_Menu',array(&$newsplg,'sec'), 2);
 add_hook('add_Menu',array(&$newsplg,'other'), 1);

 add_hook ( 'mainhook1', array(&$newsplg,'news1'), 2 );
 add_hook ( 'mainhook1', array(&$newsplg,'news0'), 1 );
 add_hook ( 'mainhook2', array(&$newsplg,'news2'));
 add_hook ( 'mainhook3', array(&$newsplg,'news3'));*/

 
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////