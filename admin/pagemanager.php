<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include starter
include 'adminstarter.php';
include '../includes/pages.class.php';

// Pages settings ----------------------------//

$pmanager_set = $minative -> settingsarray_bygroup('pmanagersettings');
foreach ($pmanager_set as $key => $value) {
	$pmanagersettings[$value['setname']] = $value['value'];

}

if ($pmanagersettings['pmangen'] == '0'){
	header('Location: errorpage.php?error=disabled');
}
$smarty -> assign('pmangattachment', $pmanagersettings['pmangattachment']);
$smarty -> assign('pmangmenuen', $pmanagersettings['pmangmenuen']);
$smarty -> assign('pmangeditor', $pmanagersettings['pmangeditor']);

$menusaa = $menus -> get_menus('all');
$smarty -> assign('menus', $menusaa);

$user_groups = $admin -> user_groups();
$smarty -> assign('datagroup', $user_groups);

if (isset($_GET['act'])) {

	$act = $_GET['act'];
	$type = 'pages';

	$all_pages = $admin -> get_all_('pagemanager');
	$count = $minative_mysqliDB -> get_count('pagemanager');

	$smarty -> assign('pagedata', $all_pages);
	$smarty -> assign('count', $count);

	if ($act == 'list') {
		//---------------------------- List all Pages ----------------------------//

		$smarty -> display('pages-list.html');

	} elseif ($act == 'viewpage') {
		//---------------------------- View page details ----------------------------//

		$pageid = $_GET['id'];

		$pagedata = $pagesmanager -> getpagedata($pageid);
		$smarty -> assign("pageid", $pageid);

		foreach ($languages as $language) {
			if ($language['langcode'] != 'en') {
				if ($minative_languages -> check_lang_exist($type, $language['langcode'], $pageid)) {

					$contentdatas = $minative_languages -> get_from_multi_one_lang($type, $language['langcode'], $pageid);

					foreach ($contentdatas as $contentdata) {
						$smarty -> assign("pagetitle" . $language['langcode'], $contentdata['name']);

						$contentdata_array = unserialize($contentdata['content']);
						//print_r($contentdata_array);
						$smarty -> assign("pagebrief" . $language['langcode'], $contentdata_array['pagebrief']);
						$smarty -> assign("pagecontent" . $language['langcode'], $contentdata_array['pagecontent']);
						$smarty -> assign("pagemetadisc" . $language['langcode'], $contentdata_array['pagemetadisc']);
						$smarty -> assign("pagemetakey" . $language['langcode'], $contentdata_array['pagemetakey']);
						$smarty -> assign("pagetags" . $language['langcode'], $contentdata_array['pagetags']);

					}
					$smarty -> assign('langnotes' . $language['langcode'], ' ');
				} elseif (!$minative_languages -> check_lang_exist($type, $language['langcode'], $pageid)) {

					$smarty -> assign("pagetitle" . $language['langcode'], $pagedata['pagetitle']);
					$smarty -> assign("pagecontent" . $language['langcode'], $pagedata['pagecontent']);
					$smarty -> assign("pagebrief" . $language['langcode'], $pagedata['pagebrief']);
					$smarty -> assign("pagemetadisc" . $language['langcode'], $pagedata['pagemetadisc']);
					$smarty -> assign("pagemetakey" . $language['langcode'], $pagedata['pagemetakey']);
					$smarty -> assign("pagetags" . $language['langcode'], $pagedata['pagetags']);

					$smarty -> assign('langnotes' . $language['langcode'], 'This language has no content entries, so this is the english values for showing only, not in the database');
				}
			}
		}
		$smarty -> assign("pagetitle", $pagedata['pagetitle']);
		$smarty -> assign("pagecontent", $pagedata['pagecontent']);
		$smarty -> assign("pagebrief", $pagedata['pagebrief']);
		$smarty -> assign("pagemetadisc", $pagedata['pagemetadisc']);
		$smarty -> assign("pagemetakey", $pagedata['pagemetakey']);
		$smarty -> assign("pagetags", $pagedata['pagetags']);
		$smarty -> assign("status", $pagedata['status']);
		$smarty -> assign("pagewriter", $pagedata['pagewriter']);
		$smarty -> assign("pagepubdate", $pagedata['pagepubdate']);
		$smarty -> assign("pageattachment", $pagedata['pageattachment']);
		$smarty -> assign("pageprivacy", $pagedata['pageprivacy']);
		$smarty -> assign("pagerestrto", $pagedata['pagerestrto']);

		$smarty -> display('pages-view.html');

	} elseif ($act == 'editpage') {
		//---------------------------- Edit page ----------------------------//
		$pageid = $_POST['pageid'];

		if (isset($_POST['langup'])) {
			$langsups = $_POST['langup'];
		} else {exit('nothingtobeedited');
		}
		foreach ($langsups as $langsup) {
			if ($langsup == 'en') {
				$pagetitle = clean_input_gpc('p', 'pagetitle', 'STRING');
				$pagebrief = clean_input_gpc('p', 'pagebrief', 'STRING');
				$pagecontent = htmlspecialchars($_POST['pagecontent']);
				$pagemetadisc = clean_input_gpc('p', 'pagemetadisc', 'STRING');
				$pagemetakey = clean_input_gpc('p', 'pagemetakey', 'STRING');
				$pagetags = clean_input_gpc('p', 'pagetags', 'STRING');
				$pagewriter = clean_input_gpc('p', 'pagewriter', 'STRING');
				$pagepubdate = clean_input_gpc('p', 'pagepubdate', 'STRING');
				$status = $_POST['status'];

				$pageprivacy = clean_input_gpc('p', 'pageprivacy', 'STRING');
				$pagerestrto = $_POST['pagerestrto'];

				if ($pmanagersettings['pmangattachment']) {
					if (isset($_FILES["pagefile"]) && $_FILES["pagefile"]["error"] == UPLOAD_ERR_OK) {
						$up_path = "../contents/pages/";
						$types = $pmanagersettings['pmangattachmenttypes'];
						$maxsize = $pmanagersettings['pmangattachmentsize'];
						$upload = $upload -> uploadfile($_FILES['pagefile']['tmp_name'], $_FILES['pagefile']['name'], $_FILES['pagefile']['type'], $_FILES['pagefile']['size'], $up_path, $types, $maxsize);

						if ($upload['res'] == "done") {
							$pageattachment = $upload['filename'];
							//echo $page_attachment;
						} elseif ($upload['res'] == "invalidfile") {exit('invalidfile');
						} elseif ($upload['res'] == "maxsize") {exit('maxsize');
						} else
							exit('errorupload');

					}else {$pageattachment = $pagesmanager -> getpagedata($pageid)['pageattachment'];}
				}else {$pageattachment = $pagesmanager -> getpagedata($pageid)['pageattachment'];}

				$editpage = $admin -> page_edit($pagetitle, $pagebrief, $pagecontent, $pagemetadisc, $pagemetakey, $pagetags, $pagewriter, $pagepubdate, $status, $pageprivacy, $pagerestrto, $pageattachment, $pageid);
			}
		}
		if (isset($_POST['lang'])) {
			$langs = $_POST['lang'];

			foreach ($langs as $lang) {
				foreach ($langsups as $langsup) {
					if ($langsup == $lang) {
						$check_lang_exist = $minative_languages -> check_lang_exist($type, $lang, $pageid);
						$pagetitle = clean_input_gpc('p', 'pagetitle' . $lang, 'STRING');
						$pagebrief = clean_input_gpc('p', 'pagebrief' . $lang, 'STRING');
						$pagecontent = htmlspecialchars($_POST['pagecontent' . $lang]);
						$pagemetadisc = clean_input_gpc('p', 'pagemetadisc' . $lang, 'STRING');
						$pagemetakey = clean_input_gpc('p', 'pagemetakey' . $lang, 'STRING');
						$pagetags = clean_input_gpc('p', 'pagetags' . $lang, 'STRING');

						$page_content = serialize(array('pagebrief' => $pagebrief, 'pagecontent' => $pagecontent, 'pagemetadisc' => $pagemetadisc, 'pagemetakey' => $pagemetakey, 'pagetags' => $pagetags));

						if ($check_lang_exist != 0) {

							$update_to_multi = $admin -> update_multi_lang($lang, $pageid, $type, $pagetitle, $page_content, '1');

						} elseif ($check_lang_exist == 0) {

							$add_to_multi = $admin -> add_to_multi_lang($lang, $pageid, $type, $pagetitle, $page_content);

						}
					}
				}
			}
		}
		exit('success');

	} elseif ($act == 'addpage') {
		//---------------------------- Add new page " Adding form " ----------------------------//

		$smarty -> display('pages-add.html');

	} elseif ($act == 'doadd') {
		//---------------------------- Adding new page action "Insert" ----------------------------//

		//var_dump($_POST);
		$pagetitle = clean_input_gpc('p', 'pagetitle', 'STRING');
		$pagebrief = clean_input_gpc('p', 'pagebrief', 'STRING');
		$pagecontent = htmlspecialchars($_POST['pagecontent']);
		$pagemetadisc = clean_input_gpc('p', 'pagemetadisc', 'STRING');
		$pagemetakey = clean_input_gpc('p', 'pagemetakey', 'STRING');
		$pagetags = clean_input_gpc('p', 'pagetags', 'STRING');
		$pagewriter = clean_input_gpc('p', 'pagewriter', 'STRING');
		$pagepubdate = clean_input_gpc('p', 'pagepubdate', 'STRING');
		$status = $_POST['status'];

		$pageprivacy = clean_input_gpc('p', 'pageprivacy', 'STRING');
		$pagerestrto = $_POST['pagerestrto'];

		$pageaddlink = clean_input_gpc('p', 'pageaddlink', 'STRING');

		if ($pmanagersettings['pmangattachment']) {
			if (isset($_FILES["pagefile"]) && $_FILES["pagefile"]["error"] == UPLOAD_ERR_OK) {
				$up_path = "../contents/pages/";
				$types = $pmanagersettings['pmangattachmenttypes'];
				$maxsize = $pmanagersettings['pmangattachmentsize'];
				$upload = $upload -> uploadfile($_FILES['pagefile']['tmp_name'], $_FILES['pagefile']['name'], $_FILES['pagefile']['type'], $_FILES['pagefile']['size'], $up_path, $types, $maxsize);

				if ($upload['res'] == "done") {
					$pageattachment = $upload['filename'];
					//echo $page_attachment;
				} elseif ($upload['res'] == "invalidfile") {exit('invalidfile');
				} elseif ($upload['res'] == "maxsize") {exit('maxsize');
				} else
					exit('errorupload');

			} else {
				$pageattachment = " ";
			}
		} else {
			$pageattachment = " ";
		}
		$page_add = $admin -> page_add($pagetitle, $pagebrief, $pagecontent, $pagemetadisc, $pagemetakey, $pagetags, $pagewriter, $pagepubdate, $status, $pageprivacy, $pagerestrto, $pageattachment);

		if ($page_add) {$page_id = $page_add;
			if (isset($_POST['langup'])) {
				$langsups = $_POST['langup'];

				if (isset($_POST['lang'])) {

					$langs = $_POST['lang'];

					foreach ($langs as $lang) {
						foreach ($langsups as $langsup) {
							if ($langsup == $lang) {
								//$name = clean_input_gpc('p', 'pagetitle' . $lang, 'STRING');
								//$content = htmlspecialchars($_POST['pagecontent' . $lang]);

								$pagetitle = clean_input_gpc('p', 'pagetitle' . $lang, 'STRING');
								$pagebrief = clean_input_gpc('p', 'pagebrief' . $lang, 'STRING');
								$pagecontent = htmlspecialchars($_POST['pagecontent' . $lang]);
								$pagemetadisc = clean_input_gpc('p', 'pagemetadisc' . $lang, 'STRING');
								$pagemetakey = clean_input_gpc('p', 'pagemetakey' . $lang, 'STRING');
								$pagetags = clean_input_gpc('p', 'pagetags' . $lang, 'STRING');

								$page_content = serialize(array('pagebrief' => $pagebrief, 'pagecontent' => $pagecontent, 'pagemetadisc' => $pagemetadisc, 'pagemetakey' => $pagemetakey, 'pagetags' => $pagetags));

								$add_to_multi = $admin -> add_to_multi_lang($lang, $page_id, $type, $pagetitle, $page_content);
							}
						}
					}
				}
			}

			if ($pageaddlink == '1') {
				$pagemenu = $_POST['pagemenu'];
				$pagelinkname = clean_input_gpc('p', 'pagelinkname', 'STRING');
				$url = "page.php?id=".$page_add;
				$order = " ";
				$status = "1";
				$make_child = $menus -> make_menu_child($pagelinkname, $pagemenu, $url, $order, $status);
			}

		}
		if ($page_add == true) {exit('success');
		} else {exit('error');
		}

	} elseif ($act == 'changepagest') {

		//---------------------------- Change page status ----------------------------//

		$page_id = $_POST['id'];
		$status = $_POST['pagestatus'];
		$table = "pagemanager";

		$change_page_status = $admin -> change_status($table, $status, $page_id);

		if ($change_page_status == true) {
			exit('success');
		} else {exit('error');
		}

	} elseif ($act == 'dodel') {
		//---------------------------- Delete page ----------------------------//

		$pageid = $_GET['pageid'];

		$delete = $admin -> delete_('pagemanager', $pageid);
		if ($delete == true) {

			$delete_content_mutli = $admin -> delete_content_mutli($type, $pageid);

			if ($delete_content_mutli)
				exit('success');
			else
				exit('error');
		} else {exit('error');
		}

	}
}
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
