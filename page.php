<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include starter
include 'starter.php';
include 'includes/pages.class.php';

$smarty -> assign("pmangprint", $minative -> getset('pmangprint'));
$smarty -> assign("pmangsaveas", $minative -> getset('pmangsaveas'));
$smarty -> assign("pmangsaveaspdf", $minative -> getset('pmangsaveaspdf'));

$type = "pages";

if (isset($_GET['id'])) { $pageid = $_GET['id'];
	$pagedata = $pagesmanager -> getpagedata($pageid);
	$pageprivacy = $pagedata['pageprivacy'];

	foreach ($pagedata as $key => $value) {
		if ($key != 'pagecontent') {
			$smarty -> assign($key, $value);
		} elseif ($key == 'pagecontent') {
			$smarty -> assign("pagecontent", htmlspecialchars_decode(stripslashes($pagedata['pagecontent'])));
		}
	}

	if ($minative_languages -> check_lang_exist($type, $mainlang, $pageid) > 0) {

		$pagedata = $minative_languages -> get_from_multi($pageid, $type, $mainlang);

		$smarty -> assign("pagetitle", $pagedata['name']);

		$contentdata_array = unserialize($pagedata['content']);

		$smarty -> assign("pagebrief", $contentdata_array['pagebrief']);
		$smarty -> assign("pagecontent", htmlspecialchars_decode(stripslashes($contentdata_array['pagecontent'])));
		$smarty -> assign("pagemetadisc", $contentdata_array['pagemetadisc']);
		$smarty -> assign("pagemetakey", $contentdata_array['pagemetakey']);
		$smarty -> assign("pagetags", $contentdata_array['pagetags']);
	}

	//Smarty temp. display
	$smarty -> display('head.html');
	$smarty -> display('header.html');

	if ($minative -> check_perm('view_pages')) {

		switch ($pageprivacy) {
			case 'pub' :
				$smarty -> display('page.html');
				break;
			case 'pri' :
				if ($login == "loged") {
					$smarty -> display('page.html');
				} else {
					$smarty -> display('errorpage.html');
				}
				break;
			case 'ris' :
				if ($pagedata['pagerestrto'] == $group_id || $group_id == "1") {
					$smarty -> display('page.html');
				} else {
					$smarty -> display('errorpage.html');
				}
				break;

			default :
				break;
		}
	} else {
		$smarty -> display('errorpage.html');
	}

	$smarty -> display('footer.html');

}

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
