<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (eregi("usersgroups.class.php", $_SERVER['PHP_SELF'])) {die("You don't have right permission to access this file directly.");
}

/**
 * User groups class
 * 1. list user groups
 * 2. add user groups
 * 3. User group name, permission
 * 4. Create user groups
 * 5. Edit user groups
 *
 */
class groups extends minative {

	public function __construct() {

	}

	//---------------------------- Get all user groups ----------------------------//

	public function get_groups($type) {
		global $minative_mysqliDB;
		$query = "SELECT * FROM usergroups WHERE `product` = ?";
		$params = array ($type);
		$groups = $minative_mysqliDB -> selectall($query, 's', $params);

		return $groups;
	}

	//---------------------------- Get Group data ----------------------------//

	public function get_group_data($groupid = '') {
		global $minative_mysqliDB;
		$query = "SELECT * FROM usergroups WHERE id = ?";
		$params = array ($groupid);
		$groupdata = $minative_mysqliDB -> selectone($query, 's', $params);

		return $groupdata;
	}

	//---------------------------- Get Group data ----------------------------//

	public function get_shortname($groupid = '') {
		global $minative_mysqliDB;
		$query = "SELECT shortname FROM usergroups WHERE id = ?";
		$shortname = $minative_mysqliDB -> select($query, 's', $groupid);

		return $shortname;
	}

	//---------------------------- Get permissions for user group ----------------------------//

	public function get_permission($groupname = '') {
		global $minative_mysqliDB;
		if ($groupname) {
			$query = "SELECT id,name,shortname,perm_group,`$groupname` FROM permissions ORDER BY id ASC";
		} else {
			$query = "SELECT id,name,shortname,perm_group FROM permissions ORDER BY id ASC";
		}

		$permissions = $minative_mysqliDB -> selectall($query);

		return $permissions;
	}

	//---------------------------- Change permission ----------------------------//

	public function change_permission($group = '', $perm = '', $value = '') {
		global $minative_mysqliDB;
		$query = "UPDATE permissions SET `$group` = ? WHERE `shortname` = ?";
		$values = array($value, $perm);
		$change_perm = $minative_mysqliDB -> update($query, 'ss', $values);

		if ($change_perm) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Add new group ----------------------------//

	public function add_group($groupname = '', $shortname = '', $color = '', $usertitle = '') {
		global $minative_mysqliDB;
		$query = "INSERT INTO usergroups (`groupname`, `shortname`, `color`, `usertitle`, `product`) VALUES (?, ?, ?, ?, ?)";
		$values = array($groupname, $shortname, $color, $usertitle, 'other');
		$add_group = $minative_mysqliDB -> insert($query, 'sssss', $values);

		if ($add_group) {
			$alt = "ALTER TABLE permissions ADD `$shortname` INT(1)";
			$add_col = $minative_mysqliDB -> alter($alt);
			if ($add_col) {
				return $add_group;
			} else {
				return;
			}

		} else {
			return;
		}
	}

	//---------------------------- Edit Group ----------------------------//

	public function edit_group($groupid = '', $groupname = '', $color = '', $usertitle = '') {
		global $minative_mysqliDB;
		$query = "UPDATE usergroups SET `groupname` = ?, `color` = ?, `usertitle` = ? WHERE `id` = ?";
		$values = array($groupname, $color, $usertitle, $groupid);
		$edit_group = $minative_mysqliDB -> update($query, 'ssss', $values);

		if ($edit_group) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Group users ----------------------------//

	public function groupusers($groupid = '') {
		global $minative_mysqliDB;
		$query = "SELECT id,name,email,user,reg_date FROM users WHERE `group_id` = ? ORDER BY id ASC";
		$params = array ($groupid);
		$groupusers = $minative_mysqliDB -> selectall($query, 's', $params);

		if ($groupusers) {
			return $groupusers;
		} else {
			return;
		}
	}

	//---------------------------- Group users ----------------------------//

	public function deletegroup($groupid) {
		global $minative_mysqliDB;
		$groupdata = $this -> get_group_data($groupid);
		if ($groupdata['product'] != "minative") {

			$shortname = $groupdata['shortname'];

			$query = "DELETE FROM usergroups WHERE id = ?";
			$params = array($groupid);
			$deletegroup = $minative_mysqliDB -> delete($query, 's', $params);

			if ($deletegroup) {
				$alt = "ALTER TABLE permissions DROP `$shortname`";
				$dell_col = $minative_mysqliDB -> alter($alt);
				if ($dell_col) {
					return TRUE;
				} else {
					return;
				}

			} else {
				return;
			}
		} else {
			return;
		}

	}

}

/*
 * To make user groups table to have id,name,color,usertitle
 * And make permission table to have all permission to all groups like
 * id, permision name, permission shortname, admins, managers, members, awating mail confirm, awating admin confirm, gustes, banned users
 * */

$groups = new groups();
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
