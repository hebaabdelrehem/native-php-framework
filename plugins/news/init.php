<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
include '../../includes/minative.class.php';
include '../../includes/users.class.php';
include '../../includes/upload.class.php';
include '../../includes/mail.class.php';
include '../../includes/languages.class.php';
include '../../includes/functions.php';
include '../../admin/includes/admin.class.php';

//---------------------------- Admin actions class ----------------------------//

$admin = new admin();

//---------------------------- Session start ----------------------------//

$minative -> sec_session_start();

//---------------------------- Plugin class ----------------------------//

include 'includes/news.class.php';

//---------------------------- Plugin variables ----------------------------//

$contentsFolder = "../../contents/news/";
$contentsSectionsThumb = "../../contents/news/sectins-th";
$contentsContentsThumb = "../../contents/news/contents-th";

$sectionDefaultImage = "default.jpg";
$contentDefaultImage = "default.jpg";

$sectionFileStarting = "sec_";
$contentFileStarting = "news_";

$sectionType = "newsSection";
$contentsType = "newsContent";

$sectionsDBtable = "pl_news_sections";
$contentsDBtable = "pl_news_contents";

//---------------------------- Plugin settings ----------------------------//

$newssettings = $news->newsSettings();

$types = $newssettings['newsattachmenttypes'];
$maxsize = $newssettings['newsattachmentsize'];
$limit = $newssettings['newsattachmentnum'];

//---------------------------- System Settings ----------------------------//

//  Script url //
$url = $minative -> getset('siteurl');
$folder = $minative -> getset('scriptfolder');
$script_url = $url . $folder;

$adminmainstyle = $minative -> getset('adminmainstyle');

$languages = $minative_languages -> get_active_languages();

require_once '../../admin/includes/smarty/Smarty.class.php';

$GLOBALS['smarty'] = new Smarty();

//$smarty->testInstall();
//$smarty->debugging = true;
//$smarty->cache_lifetime = 120;
$smarty -> caching = false;

$smarty -> setTemplateDir(array('00' => 'C:\xampp\htdocs\minative\plugins\news\templates', '11' => 'C:\xampp\htdocs\minative\admin\adminstyles\minativeadmin'));

$smarty -> assign("scripturl", $script_url);
$smarty -> assign("adminmainstyle", $adminmainstyle);
$smarty -> assign('languages', $languages);
$smarty -> assign('newsattachmenten', $newssettings['newsattachmenten']);
$smarty -> assign('newsattachmentnum', $newssettings['newsattachmentnum']);
$smarty -> assign('newsattachmenttype', $types);
$smarty -> assign('newsattachmentsize', $maxsize);
$smarty -> assign('newseditor', $newssettings['newseditor']);

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
