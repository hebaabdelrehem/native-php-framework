<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

include 'database.class.php';

/*
 * MiNative class is the MOTHER class of the program, and all other classes get its extendes from it
 */

class minative {

	//minative starter

	public function __construct() {
		//$this->sec_session_start();
	}

	//---------------------------- minative All settings *** Array *** ----------------------------//

	public function settingsarray_bygroup($grouptitle = '') {
		global $minative_mysqliDB;
		if ($grouptitle == "all") {
			$product = "minative";
			$query = "SELECT setname,value FROM `settings` WHERE `product` = ?";
			$params = array ($product);
			$settingsarray_bygroup = $minative_mysqliDB -> selectall($query, 's', $params);
		} else {
			$query = "SELECT setname,value FROM `settings` WHERE `grouptitle` = ?";
			$params = array ($grouptitle);
			$settingsarray_bygroup = $minative_mysqliDB -> selectall($query, 's', $params);
		}

		return $settingsarray_bygroup;
	}

	//---------------------------- Get one setting value ----------------------------//

	public function getset($setname) {
		global $minative_mysqliDB;
		$query = "SELECT value FROM `settings` WHERE setname= ?";
		$value = $minative_mysqliDB -> select($query, 's', $setname);
		return $value;
	}

	//---------------------------- Loged user *** Array *** ----------------------------//

	public function userdata($id = "") {
		global $minative_mysqliDB;
		$query = "SELECT * FROM `users` WHERE id = ?";
		$params = array($id);
		$userdata = $minative_mysqliDB -> selectone($query, 's', $params);
		return $userdata;
	}

	//---------------------------- Loged user *** Array *** ----------------------------//

	public function check_lang() {
		if (isset($_GET['lang'])) {

			$mainlang = $_GET['lang'];
			$_SESSION['lang'] = $mainlang;
			/*setcookie('lang', $lang, time() + (3600 * 40 *30));*/

		} elseif (isset($_SESSION['lang'])) {
			$mainlang = $_SESSION['lang'];

		} elseif (isset($_COOKIE['lang'])) {
			$mainlang = $_COOKIE['lang'];

		} else {
			$mainlang = $this -> getset('mainlang');
		}

		if ($this -> getset('overrideuserlangcache')) {
			$mainlang = $this -> getset('mainlang');
		}
		return $mainlang;
	}

	//---------------------------- Secure session start ----------------------------//

	public function sec_session_start() {
		$session_name = 'sec_session_user';
		$secure = SECURE;
		$httponly = true;
		if (ini_set('session.use_only_cookies', 1) === FALSE) {
			header("Location: login.php");
			exit();
		}
		$cookieParams = session_get_cookie_params();
		session_set_cookie_params($cookieParams["lifetime"], $cookieParams["path"], $cookieParams["domain"], $secure, $httponly);
		session_name($session_name);
		session_start();
		session_regenerate_id(true);
	}

	//---------------------------- Get countries ----------------------------//

	public function countries() {
		global $minative_mysqliDB;
		$query = "SELECT id,nicename FROM country ORDER BY id ASC";
		$countries = $minative_mysqliDB -> selectall($query);

		return $countries;
	}

	//---------------------------- Get Date and Time ----------------------------//

	public function dateandtime() {
		$date = date("Y-m-d");
		$time = date("H:i:s");

		return array($date, $time);
	}

	//---------------------------- Menus ----------------------------//

	public function menus($where = '') {
		global $minative_mysqliDB;
		$query = "SELECT * FROM menus WHERE place = ? ORDER BY `order` ASC";
		$params = array ($where);
		$menus = $minative_mysqliDB -> selectall($query, 's', $params);

		return $menus;
	}

	//---------------------------- Menus ----------------------------//

	public function menus_data($where = '') {
		$menus = $this -> menus($where);
		global $mainlang;
		global $minative_languages;
		$type_lang = 'menu';
		if ($mainlang != 'en') {
			foreach ($menus as $id => $value) {
				if ($minative_languages -> check_lang_exist($type_lang, $mainlang, $menus[$id]['id']) > 0) {
					$menu_data = $minative_languages -> get_from_multi($menus[$id]['id'], $type_lang, $mainlang);
					$menus[$id]['name'] = $menu_data['name'];
				}
			}
		}

		return $menus;
	}

	//---------------------------- Menus Child ----------------------------//

	public function menus_child($parentid) {
		global $minative_mysqliDB;
		$query = "SELECT * FROM menus_child WHERE parent = ? ORDER BY `order` ASC";
		$params = array ($parentid);
		$menus_child = $minative_mysqliDB -> selectall($query, 's', $params);

		return $menus_child;
	}

	//---------------------------- Get Group data ----------------------------//

	public function get_group_data($groupid = '') {
		global $minative_mysqliDB;
		$query = "SELECT * FROM usergroups WHERE id = ?";
		$params = array($groupid);
		$groupdata = $minative_mysqliDB -> selectone($query, 's', $params);

		return $groupdata;
	}

	//---------------------------- Check permissions ----------------------------//

	public function check_perm($perm = '') {
		global $minative_mysqliDB;
		global $users;
		if ($users -> login_check() == TRUE) {
			$user = $this -> userdata($_SESSION['userid']);
			$groupdata = $this -> get_group_data($user['group_id']);

		} else {$groupdata = $this -> get_group_data('4');
		}

		$gshortname = $groupdata['shortname'];

		$query = "SELECT `$gshortname` FROM permissions WHERE `shortname` = ?";
		$permissions = $minative_mysqliDB -> select($query, 's', $perm);

		if ($permissions == "1") {
			return TRUE;
		} else
			return;

	}

}

$minative = new minative();

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
