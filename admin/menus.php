<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include starter
include 'adminstarter.php';

if (isset($_GET['act'])) {

	$menus_places = $menus -> menus_places();
	$smarty -> assign('menus_places', $menus_places);

	$menus_types = $menus -> menus_types();
	$smarty -> assign('menus_types', $menus_types);
	$type_lang = "menu";
	$act = $_GET['act'];

	if ($act == 'list') {
		//---------------------------- List all Menus ----------------------------//

		$menus_count = $minative_mysqliDB -> get_count('menus');
		$all_menus = $admin -> get_all_('menus');

		$smarty -> assign('menusdata', $all_menus);
		$smarty -> assign('count', $menus_count);

		$smarty -> display('menuslist.html');
	} elseif ($act == 'viewmenu') {
		//---------------------------- View Menu child ----------------------------//

		$menuid = $_GET['id'];

		$menu_child = $menus -> get_childs($menuid);

		$menu_data = $menus -> get_menu_data($menuid);

		$pname = $menus -> get_pname($menuid);

		$smarty -> assign('menuid', $menuid);
		$smarty -> assign('menutitle', $menu_data['name']);
		$smarty -> assign('pname', $pname);
		$smarty -> assign('type', $menu_data['type']);
		$smarty -> assign('url', $menu_data['url']);
		$smarty -> assign('place', $menu_data['place']);
		$smarty -> assign('type', $menu_data['type']);
		$smarty -> assign('order', $menu_data['order']);
		$smarty -> assign('status', $menu_data['status']);

		$smarty -> assign('menuchild', $menu_child);

		$menus = $menus -> get_menus('all');

		$smarty -> assign('menusdata', $menus);

		$smarty -> display('viewmenuschild.html');

	} elseif ($act == 'addmenu') {
		//---------------------------- Add new Menu ----------------------------//

		$menus = $menus -> get_menus('all');

		$smarty -> assign('menusdata', $menus);

		$smarty -> display('addmenu.html');

	} elseif ($act == 'doadd') {
		//---------------------------- Adding new menu action "Insert" ----------------------------//

		$name = clean_input_gpc('p', 'menutitle', 'STRING');
		$url = clean_input_gpc('p', 'url', 'URL');
		$order = clean_input_gpc('p', 'order', 'STRING');
		$type = $_POST['type'];
		$parent = $_POST['parent'];
		$place = $_POST['place'];
		$status = $_POST['status'];

		$make_menu = $menus -> make_menu($name, $parent, $url, $type, $place, $order, $status);

		if ($make_menu) {
			$menu_id = $make_menu;
			if (isset($_POST['langup'])) {
				$langsups = $_POST['langup'];

				if (isset($_POST['lang'])) {

					$langs = $_POST['lang'];

					foreach ($langs as $lang) {
						foreach ($langsups as $langsup) {
							if ($langsup == $lang) {

								$name = clean_input_gpc('p', 'menutitle' . $lang, 'STRING');

								$content = "";

								$add_to_multi = $admin -> add_to_multi_lang($lang, $menu_id, $type_lang, $name, $content);
							}
						}
					}
				}
			}
		}
		if ($make_menu) {exit('success');
		} else {exit('error');
		}
	} elseif ($act == 'editmenu') {
		//---------------------------- Edit menu ----------------------------//

		$menuid = $_GET['menuid'];
		$menu_data = $menus -> get_menu_data($menuid);

		$smarty -> assign('menuid', $menu_data['id']);
		$smarty -> assign('menutitle', $menu_data['name']);
		$smarty -> assign('url', $menu_data['url']);
		$smarty -> assign('parent', $menu_data['parent']);
		$smarty -> assign('type', $menu_data['type']);
		$smarty -> assign('place', $menu_data['place']);
		$smarty -> assign('type', $menu_data['type']);
		$smarty -> assign('order', $menu_data['order']);
		$smarty -> assign('status', $menu_data['status']);

		foreach ($languages as $language) {
			if ($language['langcode'] != 'en') {
				if ($minative_languages -> check_lang_exist($type_lang, $language['langcode'], $menuid)) {
					$menu_data_lang = $minative_languages -> get_from_multi_one_lang($type_lang, $language['langcode'], $menuid);
					$smarty -> assign('menutitle' . $language['langcode'], $menu_data_lang['0']['name']);
					$smarty -> assign('langnotes' . $language['langcode'], ' ');

				} elseif (!$minative_languages -> check_lang_exist($type_lang, $language['langcode'], $menuid)) {

					$smarty -> assign('menutitle' . $language['langcode'], $menu_data['name']);

					$smarty -> assign('langnotes' . $language['langcode'], 'This language has no content entries, so this is the english values for showing only, not in the database');
				}
			}
		}

		$menus = $menus -> get_menus('all');

		$smarty -> assign('menusdata', $menus);

		$smarty -> display('menuview.html');

	} elseif ($act == 'doeditmenu') {
		//---------------------------- Edit menu action ----------------------------//
		if (isset($_POST['langup'])) {
			$langsups = $_POST['langup'];
		} else {exit('nothingtobeedited');
		}

		$menuid = $_POST['menuid'];
		$name = clean_input_gpc('p', 'menutitle', 'STRING');
		$url = clean_input_gpc('p', 'url', 'URL');
		$order = clean_input_gpc('p', 'order', 'STRING');
		$type = $_POST['type'];
		$parent = $_POST['parent'];
		$place = $_POST['place'];
		$status = $_POST['status'];

		$edit_menu = $menus -> edit_menu($name, $parent, $url, $type, $place, $order, $status, $menuid);

		if (isset($_POST['lang'])) {
			$langs = $_POST['lang'];

			foreach ($langs as $lang) {
				foreach ($langsups as $langsup) {
					if ($langsup == $lang) {
						$check_lang_exist = $minative_languages -> check_lang_exist($type_lang, $lang, $menuid);

						$name = clean_input_gpc('p', 'menutitle' . $lang, 'STRING');
						$content = "";

						if ($check_lang_exist != 0) {

							$update_to_multi = $admin -> update_multi_lang($lang, $menuid, $type_lang, $name, $content, '1');

						} elseif ($check_lang_exist == 0) {

							$add_to_multi = $admin -> add_to_multi_lang($lang, $menuid, $type_lang, $name, $content);

						}
					}
				}
			}
		}

		if ($edit_menu == true) {exit('success');
		} else {exit('error');
		}

	} elseif ($act == 'addmenuchild') {
		//---------------------------- Adding child  ----------------------------//

		$name = clean_input_gpc('p', 'childname', 'STRING');
		$url = clean_input_gpc('p', 'url', 'URL');
		$order = clean_input_gpc('p', 'order', 'STRING');
		$parent = $_POST['parent'];
		$status = $_POST['status'];
		$type_lang = 'menuchild';

		$make_child = $menus -> make_menu_child($name, $parent, $url, $order, $status);

		if ($make_child) {
			$child_id = $make_child;
			if (isset($_POST['langup'])) {
				$langsups = $_POST['langup'];

				if (isset($_POST['lang'])) {

					$langs = $_POST['lang'];

					foreach ($langs as $lang) {
						foreach ($langsups as $langsup) {
							if ($langsup == $lang) {

								$name = clean_input_gpc('p', 'childname' . $lang, 'STRING');

								$content = "";

								$add_to_multi = $admin -> add_to_multi_lang($lang, $child_id, $type_lang, $name, $content);
							}
						}
					}
				}
			}
		}

		if ($make_child) {exit('success');
		} else {exit('error');
		}
	} elseif ($act == 'editmenuchild') {
		//---------------------------- Editing child  ----------------------------//

		if (isset($_POST['langup'])) {
			$langsups = $_POST['langup'];
		} else {exit('nothingtobeedited');
		}

		$id = $_POST['id'];
		$name = clean_input_gpc('p', 'childname', 'STRING');
		$url = clean_input_gpc('p', 'url', 'URL');
		$order = clean_input_gpc('p', 'order', 'STRING');
		$parent = $_POST['parent'];
		$status = $_POST['status'];
		$type_lang = 'menuchild';

		$edit_child = $menus -> edit_menu_child($name, $parent, $url, $order, $status, $id);

		if (isset($_POST['lang'])) {
			$langs = $_POST['lang'];

			foreach ($langs as $lang) {
				foreach ($langsups as $langsup) {
					if ($langsup == $lang) {
						$check_lang_exist = $minative_languages -> check_lang_exist($type_lang, $lang, $id);

						$name = clean_input_gpc('p', 'childname' . $lang, 'STRING');
						$content = "";

						if ($check_lang_exist != 0) {

							$update_to_multi = $admin -> update_multi_lang($lang, $id, $type_lang, $name, $content, '1');

						} elseif ($check_lang_exist == 0) {

							$add_to_multi = $admin -> add_to_multi_lang($lang, $id, $type_lang, $name, $content);

						}
					}
				}
			}
		}

		if ($edit_child == true) {exit('success');
		} else {exit('error');
		}
	} elseif ($act == 'menuseditor') {
		
		//---------------------------- Menus editor  ----------------------------//

		$menus_count = $minative_mysqliDB -> get_count('menus');
		$all_menus = $admin -> get_all_('menus');
		
		foreach ($all_menus as $all_menu) {
			$menu_child = $menus -> get_childs($all_menu['id']);
			$smarty -> assign('menuschild'.$all_menu['id'], $menu_child);
		}

		$smarty -> assign('menusdata', $all_menus);
		$smarty -> assign('count', $menus_count);

		$smarty -> display('menuseditor.html');
		
	} elseif ($act == 'menuschangest') {
		
		//---------------------------- Delete menu ----------------------------//

		$id = $_GET['id'];
		$status = $_GET['status'];
		$type = $_GET['type'];

		$update_st = $menus -> chang_status($type, $status, $id);

		if ($update_st == true) {exit('success');
		} else {exit('error');
		}
		
	} elseif ($act == 'dodel') {
		
		//---------------------------- Delete menu ----------------------------//

		$menuid = $_GET['menuid'];

		$delete = $admin -> delete_('menus', $menuid);

		// Add to delete the child of the the menu when deleting a parent have childs

		if ($delete == true) {exit('success');
		} else {exit('error');
		}
	} elseif ($act == 'delchild') {
		//---------------------------- Delete child ----------------------------//

		$childid = $_GET['childid'];

		$delete = $admin -> delete_('menus_child', $childid);
		if ($delete == true) {exit('success');
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
