<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (eregi("menus.class.php", $_SERVER['PHP_SELF'])) {die("You don't have right permission to access this file directly.");
}

/**
 * Menus class have all actions for menus maker
 */
class menus extends minative {

	public function __construct() {

	}

	//---------------------------- Menus places array ----------------------------//

	public function menus_places() {
		$menus_places = array('header', 'navbar', 'sidemenu', 'footer1', 'footer2');

		return $menus_places;
	}

	//---------------------------- Menus types ----------------------------//

	public function menus_types() {
		$menus_types = array('dropdown', 'multidropdown', 'bar', 'link', 'list', 'accordian');

		return $menus_types;
	}

	//---------------------------- Make new Menu ----------------------------//
	/* To have
	 * - Parent -> the parant menu if the parent is multidropdown.
	 * - Link The menu link if it's link type.
	 * - Type ( Dropdown - Multidropdown - Bar - Link - footerup).
	 * - Place ( Header - Navbar - Sidemenu - Footer 1 - Footer 2'copyrights').
	 * - order -> the order of the menu between other menu sharing its place.
	 * - Status -> Enabaled or Disabled.
	 * */

	public function make_menu($name = '', $parent = '', $url = '', $type = '', $place = '', $order = '', $status = '') {
		global $minative_mysqliDB;
		$q = "INSERT INTO menus (`name`, `parent`, `url`, `type`, `place`, `order`, `status`) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$values = array($name, $parent, $url, $type, $place, $order, $status);
		//print_r($values);
		$make = $minative_mysqliDB -> insert($q, 'sssssss', $values);

		if ($make) {
			return $make;
		} else {
			return;
		}
	}

	//---------------------------- Make menu childs ----------------------------//
	/* To have
	 * - Parent menu -> the menu that the child belong to.
	 * - Type ( Dropdown - Multidropdown - Bar - Link).
	 * - order -> the order of the menu between other menu sharing its place.
	 * - Status -> Enabaled or Disabled.
	 * */

	public function make_menu_child($name = '', $parent = '', $url = '', $order = '', $status = '') {
		global $minative_mysqliDB;
		$q = "INSERT INTO menus_child (`name`, `parent`, `url`, `order`, `status`) VALUES (?, ?, ?, ?, ?)";
		$values = array($name, $parent, $url, $order, $status);
		$make_child = $minative_mysqliDB -> insert($q, 'sssss', $values);

		if ($make_child) {
			return $make_child;
		} else {
			return;
		}
	}

	//---------------------------- Get all menus ----------------------------//
	/* To get all menus
	 * */
	
	public function get_menus($where = '', $type = '') {
		global $minative_mysqliDB;
		if ($where == "all" && $type) {
			$query = "SELECT * FROM menus WHERE type = ? ORDER BY `id` ASC";
			$menus = $minative_mysqliDB -> selectall($query, 's', $type);
		} 
		elseif ($where == "all" && !$type) {
			$query = "SELECT * FROM menus ORDER BY `id` ASC";
			$menus = $minative_mysqliDB -> selectall($query, 's', $type);
		}
		else {
			$query = "SELECT * FROM menus WHERE place = ? AND type = ? ORDER BY `id` ASC";
			$values = array($where, $type);
			$menus = $minative_mysqliDB -> selectall($query, 'ss', $values);
		}
		return $menus;
	}

	//---------------------------- Get Menu data ----------------------------//
	/* To get menu childs even it childs or other submenus
	 * */
	public function get_menu_data($menuid) {
		global $minative_mysqliDB;
		$query = "SELECT * FROM menus WHERE id = ?";
		$menu_data = $minative_mysqliDB -> selectone($query, 's', $menuid);

		return $menu_data;
	}

	//---------------------------- Get childs ----------------------------//
	/* To get menu childs even it childs or other submenus
	 * */
	public function get_childs($parentid) {
		global $minative_mysqliDB;
		$query = "SELECT * FROM menus_child WHERE parent = ? ORDER BY `order` ASC";
		$menus_child = $minative_mysqliDB -> selectall($query, 's', $parentid);

		return $menus_child;
	}

	//---------------------------- Get parent name ----------------------------//
	/* To get menu childs even it childs or other submenus
	 * */
	public function get_pname($parentid) {
		global $minative_mysqliDB;
		$query = "SELECT name FROM menus WHERE id = ?";
		$pname = $minative_mysqliDB -> select($query, 's', $parentid);

		return $pname;
	}

	//---------------------------- Edit menu  ----------------------------//
	/* To edit menu childs
	 * */
	public function edit_menu($name = '', $parent = '', $url = '', $type = '', $place = '', $order = '', $status = '', $id = '') {
		global $minative_mysqliDB;
		$q = "UPDATE menus SET `name` = ?, `parent` = ?, `url` = ?, `type` = ?, `place` = ?,  `order` = ?, `status` = ?  WHERE `id` = ?";
		$values = array($name, $parent, $url, $type, $place, $order, $status, $id);
		$edit_menu = $minative_mysqliDB -> update($q, 'ssssssss', $values);

		if ($edit_menu) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Edit menu childs----------------------------//
	/* To edit menu childs
	 * */
	public function edit_menu_child($name = '', $parent = '', $url = '', $order = '', $status = '', $id = '') {
		global $minative_mysqliDB;
		$q = "UPDATE menus_child SET `name` = ?, `parent` = ?, `url` = ?, `order` = ?, `status` = ?  WHERE `id` = ? ";
		$values = array($name, $parent, $url, $order, $status, $id);
		$edit_child = $minative_mysqliDB -> update($q, 'ssssss', $values);

		if ($edit_child) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Change status for menus and childs  ----------------------------//
	/* change status
	 * */
	public function chang_status($table = '', $status = '', $id = '') {
		global $minative_mysqliDB;
		$q = "UPDATE `$table` SET `status` = ?  WHERE `id` = ?";
		$values = array($status, $id);
		$chang_status = $minative_mysqliDB -> update($q, 'ss', $values);

		if ($chang_status) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Menus Rules  ----------------------------//
	/* 1- If the menu is dropdown , accordian , footerup , bar and have childs, you cannot change it to link.
	 * 2- If choose the place is : header, so the type must be : link or dropdown only.
	 * 3- If choose the place is : sidemenu, so the type must be : link or accordian only.
	 * 4- If choose the place is : footer1, so the type must be : list only.
	 * 5- If choose the place is : footer2, so the type must be : bar only.
	 * 6- If the menu place is : header, and changed to sidemenu, the type must change to accordian, it opposit change to dropdown.
	 * 7- If the menu place is : footer1, and changed to header or sidemenu, the type must change to dropdown or accordian.
	 * */
	public function menus_rules() {

	}

}

$menus = new menus();
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
