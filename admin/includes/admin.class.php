<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (eregi("admin.class.php", $_SERVER['PHP_SELF'])) {die("You don't have right permission to access this file directly.");
}

/**
 * Admin action class
 * It contains all actions that belong to admin only to be executed inside admin area.
 * This action will be executed from the front in the next updata .. Mina Atif
 */
class admin extends minative {

	public function __construct() {

	}

	//---------------------------- Settings - Update ----------------------------//

	public function updatesettings($set_array = '') {
		global $minative_mysqliDB;
		$q = "UPDATE settings SET value= ? WHERE setname= ?";

		foreach ($set_array as $key => $value) {
			$values = array($value, $key);
			$update_set = $minative_mysqliDB -> update($q, 'ss', $values);
		}
		return TRUE;
	}

	//---------------------------- Get user groups ----------------------------//

	public function user_groups() {
		global $minative_mysqliDB;
		$query = "SELECT id,groupname,color FROM usergroups ORDER BY id ASC";
		$groups = $minative_mysqliDB -> selectall($query);

		return $groups;
	}

	//---------------------------- User - Add ----------------------------//

	public function add_user($name = '', $email = '', $password = '', $user = '', $dname = '', $country = '', $city = '', $sex = '', $bio = '', $face = '', $twitter = '', $google = '', $skype = '', $linkedin = '', $yahoo = '', $website = '', $group_id = '') {
		global $minative_mysqliDB;
		global $users;

		$uniqueemail = $this -> getset('uniqueemail');
		$uniqueusername = $this -> getset('uniqueusername');
		$mailconfirm = $this -> getset('mailconfirm');
		$adminconfirm = $this -> getset('adminconfirm');
		$disabledusernames = $this -> getset('disabledusernames');
		// Password encrypting -------

		$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
		$encrypted_pass = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($random_salt), $password, MCRYPT_MODE_CBC, md5(md5($random_salt))));

		// Disabled Usernames -------

		if ($disabledusernames) {$array = explode(",", $disabledusernames);
			if (in_array($user, $array)) {exit('notvalidusername');
			}
		}

		// Unique Email	-------

		if ($uniqueemail == "1") {
			$q = "SELECT id FROM users WHERE email = ? LIMIT 1";
			$check = $minative_mysqliDB -> select($q, 's', $email);

			if ($check) {exit('emailalreadyexist');
			}
		}

		// Unique Username -------

		if ($uniqueusername == "1") {
			$q = "SELECT id FROM users WHERE user = ? LIMIT 1";
			$check = $minative_mysqliDB -> select($q, 's', $user);

			if ($check) {exit('useralreadyexist');
			}
		}

		/* User Group -------

		 if ($mailconfirm == '1') {$group_id = "4";
		 } else if ($adminconfirm == '1') {$group_id = "5";
		 } else {$group_id = "2";
		 }*/

		// Registration date -------

		$reg_date = date("Y-m-d");

		// Insert new user - accept registration -------

		$q = "INSERT INTO users (name, email, password, user, dname, country, city, sex, bio, face, twitter, google, skype, 
	        						linkedin, yahoo, website, reg_date, group_id, salt) 
	        						VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$values = array($name, $email, $encrypted_pass, $user, $dname, $country, $city, $sex, $bio, $face, $twitter, $google, $skype, $linkedin, $yahoo, $website, $reg_date, $group_id, $random_salt);

		$insert = $minative_mysqliDB -> insert($q, 'sssssssssssssssssss', $values);

		if ($insert) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- User - Edit ----------------------------//

	public function edit_user($name = '', $email = '', $password = '', $user = '', $dname = '', $country = '', $city = '', $sex = '', $bio = '', $face = '', $twitter = '', $google = '', $skype = '', $linkedin = '', $yahoo = '', $website = '', $userid = '') {
		global $minative_mysqliDB;
		global $users;

		// Disabled Usernames -------
		if ($users -> disabled_names($user)) { exit('notvalidusername');
		}

		// Unique Username -------
		$uniqueusername = $this -> getset('uniqueusername');
		if ($uniqueusername == "1") {
			if ($users -> unique_username($user, $userid)) { exit('useralreadyexist');
			}
		}

		// Unique Email -------
		$uniqueemail = $this -> getset('uniqueemail');
		if ($uniqueemail == "1") {
			if ($users -> unique_email($email, $userid)) { exit('emailalreadyexist');
			}
		}

		if ($password) {

			// Password encrypting -------
			$random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true));
			$encrypted_pass = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($random_salt), $password, MCRYPT_MODE_CBC, md5(md5($random_salt))));

			// Update user profile -------
			$q = "UPDATE users SET `name` = ?, `email` = ?, `password` = ?, `user` = ?, `dname` = ?, `country` = ?, `city` = ?, `sex` = ?, `bio` = ?, 
											`face` = ?, `twitter` = ?, `google` = ?, `skype` = ?, `linkedin` = ?, `yahoo` = ?,
											 `website` = ?, `salt` = ? WHERE `id` = ? ";

			$values = array($name, $email, $encrypted_pass, $user, $dname, $country, $city, $sex, $bio, $face, $twitter, $google, $skype, $linkedin, $yahoo, $website, $random_salt, $userid);

			$update_user = $minative_mysqliDB -> update($q, 'ssssssssssssssssss', $values);
		} else {
			// Update user profile -------
			$q = "UPDATE users SET `name` = ?, `email` = ?, `user` = ?, `dname` = ?, `country` = ?, `city` = ?, `sex` = ?, `bio` = ?, 
											`face` = ?, `twitter` = ?, `google` = ?, `skype` = ?, `linkedin` = ?, `yahoo` = ?,
											 `website` = ? WHERE `id` = ? ";

			$values = array($name, $email, $user, $dname, $country, $city, $sex, $bio, $face, $twitter, $google, $skype, $linkedin, $yahoo, $website, $userid);

			$update_user = $minative_mysqliDB -> update($q, 'ssssssssssssssss', $values);
		}

		if ($update_user) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Languages - Add ----------------------------//

	public function add_lang($name = '', $filename = '', $direction = '', $langcode = '', $status = '') {
		global $minative_mysqliDB;
		$q = "INSERT INTO languages (`name`, `filename`, `direction`, `langcode`, `status`) VALUES ( ?, ?, ?,?, ?)";
		$values = array($name, $filename, $direction, $langcode, $status);
		$add_lang = $minative_mysqliDB -> insert($q, 'sssss', $values);

		if ($add_lang) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Update language----------------------------//
	/* To edit update language
	 * */
	public function update_lang($name = '', $direction = '', $langcode = '', $lang_filename = '') {
		global $minative_mysqliDB;
		$q = "UPDATE languages SET `name` = ?, `direction` = ?, `langcode` = ?  WHERE `filename` = ? ";
		$values = array($name, $direction, $langcode, $lang_filename);
		$edit_lang = $minative_mysqliDB -> update($q, 'ssss', $values);

		if ($edit_lang) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Change language status ----------------------------//

	public function change_lang_status($filename = '', $value = '') {
		global $minative_mysqliDB;
		$query = "UPDATE languages SET `status` = ? WHERE `filename` = ?";
		$values = array($value, $filename);
		$change_lang_status = $minative_mysqliDB -> update($query, 'ss', $values);

		if ($change_lang_status) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Delete language related content ----------------------------//

	public function delete_lang_($langcode = '') {
		global $minative_mysqliDB;

		$q = "DELETE FROM languages WHERE langcode = ?";
		$delete_lang = $minative_mysqliDB -> delete($q, 's', $langcode);

		if ($delete_lang) {
			$q = "DELETE FROM multi_lang WHERE lang = ?";
			$delete_content = $minative_mysqliDB -> delete($q, 's', $langcode);
			if ($delete_content) {
				return TRUE;
			}
		} else {
			return;
		}

	}

	//---------------------------- Add to multilanguage table ----------------------------//

	public function add_to_multi_lang($lang = '', $parent_id = '', $type = '', $name = '', $content = '') {
		global $minative_mysqliDB;
		$q = "INSERT INTO multi_lang (lang, parent_id, type, name, content)  VALUES (?, ?, ?, ?, ?)";
		$values = array($lang, $parent_id, $type, $name, $content);
		$add = $minative_mysqliDB -> insert($q, 'sssss', $values);

		if ($add) {
			return $add;
		} else {
			return;
		}
	}

	//---------------------------- Update multilanguage table ----------------------------//

	public function update_multi_lang($lang = '', $parent_id = '', $type = '', $name = '', $content = '', $update_name = '') {
		global $minative_mysqliDB;
		if (!$update_name) {
			$q = "UPDATE multi_lang SET `content` = ? WHERE `parent_id` = ? AND `type` = ? AND `name` = ? AND `lang` = ?";
			$values = array($content, $parent_id, $type, $name, $lang);
			$update = $minative_mysqliDB -> update($q, 'sssss', $values);
		} else {
			$q = "UPDATE multi_lang SET `name` = ?, `content` = ? WHERE `parent_id` = ? AND `type` = ? AND `lang` = ?";
			$values = array($name, $content, $parent_id, $type, $lang);
			$update = $minative_mysqliDB -> update($q, 'sssss', $values);
		}

		if ($update) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Delete Content from multi lang table ----------------------------//

	public function delete_content_mutli($type = '', $parent_id = '') {
		global $minative_mysqliDB;

		$q = "DELETE FROM multi_lang WHERE type = ? AND parent_id = ?";
		$values = array($type, $parent_id);
		$delete_content = $minative_mysqliDB -> delete($q, 'ss', $values);
		if ($delete_content) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Change user avator ----------------------------//

	public function change_avator($filename = '', $userid = '') {
		global $minative_mysqliDB;
		$q = "UPDATE users SET `avatar` = ? WHERE `id` = ? ";
		$values = array($filename, $userid);
		$change_avator = $minative_mysqliDB -> update($q, 'ss', $values);

		if ($change_avator) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Page - Add ----------------------------//

	public function page_add($pagetitle = ' ', $pagebrief = ' ', $pagecontent = ' ', $pagemetadisc = ' ', $pagemetakey = ' ', $pagetags = ' ', $pagewriter = ' ', $pagepubdate = ' ', $status = ' ', $pageprivacy = ' ', $pagerestrto = ' ', $pageattachment = ' ') {
		global $minative_mysqliDB;
		
		$q = "INSERT INTO pagemanager (pagetitle, pagebrief, pagecontent, pagemetadisc, pagemetakey, pagetags, pagewriter, pagepubdate,
		 status, pageprivacy, pagerestrto, pageattachment)  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$values = array($pagetitle, $pagebrief, $pagecontent, $pagemetadisc, $pagemetakey, $pagetags, $pagewriter, $pagepubdate, $status, $pageprivacy, $pagerestrto, $pageattachment);
		$addpage = $minative_mysqliDB -> insert($q, 'ssssssssssss', $values);

		if ($addpage) {
			return $addpage;
		} else {
			return;
		}
	}

	//---------------------------- Page - Edit ----------------------------//

	public function page_edit($pagetitle = ' ', $pagebrief = ' ', $pagecontent = ' ', $pagemetadisc = ' ', $pagemetakey = ' ', $pagetags = ' ', $pagewriter = ' ', $pagepubdate = ' ', $status = ' ', $pageprivacy = ' ', $pagerestrto = ' ', $pageattachment = ' ', $pageid = '') {
		global $minative_mysqliDB;
		$q = "UPDATE pagemanager SET `pagetitle` = ?, `pagebrief` = ?, `pagecontent` = ?, `pagemetadisc` = ?, `pagemetakey` = ?,
		`pagetags` = ?, `pagewriter` = ?, `pagepubdate` = ?, `status` = ? ,`pageprivacy` = ? ,`pagerestrto` = ? ,`pageattachment` = ?  WHERE `id` = ? ";
		$values = array($pagetitle, $pagebrief, $pagecontent, $pagemetadisc, $pagemetakey, $pagetags, $pagewriter, $pagepubdate, $status, $pageprivacy, $pagerestrto, $pageattachment, $pageid);
		$editpage = $minative_mysqliDB -> update($q, 'sssssssssssss', $values);

		if ($editpage) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Ccenter - Get Form table ----------------------------//

	public function form_table($id = '') {
		switch ($id) {

			case '1' :
				$table = 'form_contact';
				break;

			case '2' :
				$table = 'form_quota';
				break;

			case '3' :
				$table = 'form_jobs';
				break;

			default :
				$table = 'form_contact';
				break;
		}
		return $table;
	}

	//---------------------------- Ccenter - Get unreaded messages from form table ----------------------------//

	public function unreaded_mess($table = '') {
		global $minative_mysqliDB;
		$q = "SELECT * FROM $table WHERE seen = '0' ORDER BY id ASC";
		$mess = $minative_mysqliDB -> selectall($q);

		return $mess;
	}

	//---------------------------- Ccenter - Update SEEN ----------------------------//

	public function make_seen($table = '', $mssageid = '') {
		global $minative_mysqliDB;
		$seenvar = "1";
		$q = "UPDATE $table SET seen = ? WHERE id = ? ";
		$values = array($seenvar, $mssageid);
		$seen = $minative_mysqliDB -> update($q, 'ss', $values);

		if ($seen) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Change Status - common ----------------------------//

	public function change_status($table = '', $status = '', $id = '') {
		global $minative_mysqliDB;
		$q = "UPDATE $table SET `status` = ? WHERE `id` = ? ";
		$values = array($status, $id);
		$up_st = $minative_mysqliDB -> update($q, 'ss', $values);

		if ($up_st) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Change user group ----------------------------//

	public function change_user_group($userid = '', $groupid = '') {
		global $minative_mysqliDB;
		$q = "UPDATE users SET group_id = ? WHERE id = ? ";
		$values = array($groupid, $userid);
		$ch_gr = $minative_mysqliDB -> update($q, 'ss', $values);

		if ($ch_gr) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Get All ** Table ** ----------------------------//
	/* This function is to get all data inside a table from tha database by passing the
	 table name and get all data. */

	public function get_all_($table = '') {
		global $minative_mysqliDB;
		$q = "SELECT * FROM `$table` ORDER BY id ASC";
		$values = $minative_mysqliDB -> selectall($q);

		return $values;
	}

	//---------------------------- Delete function  ----------------------------//
	// To be used in general with any table, just parse the table name ant the id //

	public function delete_($table = '', $id = '') {
		global $minative_mysqliDB;
		$q = "DELETE FROM $table WHERE id = ?";
		$params = array($id);
		$delete = $minative_mysqliDB -> delete($q, 's', $params);

		if ($delete) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Plugins  ----------------------------//

	public function getPlugins() {
		global $minative_mysqliDB;
		$plugins = "SELECT filename, action FROM plugins";

		$items = $minative_mysqliDB -> selectall($plugins);
		return $items;
	}

}

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
