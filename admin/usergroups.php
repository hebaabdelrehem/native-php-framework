<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include starter
include 'adminstarter.php';
include 'includes/usergroups.class.php';

if (isset($_GET['act'])) {

	$groupsminative = $groups -> get_groups('minative');
	$groups_other = $groups -> get_groups('other');

	$smarty -> assign('groupdata_minative', $groupsminative);
	$smarty -> assign('groupdata_other', $groups_other);

	$act = $_GET['act'];

	if ($act == 'list') {
		//---------------------------- List all groups ----------------------------//

		$smarty -> display('groupslist.html');
	} elseif ($act == 'viewgroup') {
		//---------------------------- View group ----------------------------//

		$groupid = $_GET['id'];
		$groupdata = $groups -> get_group_data($groupid);

		$smarty -> assign("groupid", $groupid);
		$smarty -> assign("groupname", $groupdata['groupname']);
		$smarty -> assign("shortname", $groupdata['shortname']);
		$smarty -> assign("color", $groupdata['color']);
		$smarty -> assign("usertitle", $groupdata['usertitle']);

		$group_shortname = $groups -> get_shortname($groupid);
		$permission = $groups -> get_permission($group_shortname);

		$smarty -> assign("permission", $permission);

		$smarty -> display('groupview.html');

	} elseif ($act == 'changeperm') {
		//---------------------------- Change permission ----------------------------//

		$group = $_POST['group'];
		$perm = $_POST['perm'];
		$value = $_POST['value'];

		$change_perm = $groups -> change_permission($group, $perm, $value);

		if ($change_perm == true) {exit('success');
		} else {exit('error');
		}

	} elseif ($act == 'addgroup') {

		//---------------------------- Add group ----------------------------//

		$permission = $groups -> get_permission();
		$smarty -> assign("permission", $permission);
		$smarty -> display('addgroup.html');

	} elseif ($act == 'doaddgroup') {
		//---------------------------- Add new group - Insert action ----------------------------//

		$groupname = clean_input_gpc('p', 'groupname', 'STRING');
		$shortname = clean_input_gpc('p', 'shortname', 'STRING');
		$color = clean_input_gpc('p', 'color', 'STRING');
		$usertitle = clean_input_gpc('p', 'usertitle', 'STRING');

		$add_group = $groups -> add_group($groupname, $shortname, $color, $usertitle);
		if ($add_group) {
			$shortname = $groups -> get_shortname($add_group);
			echo $shortname;
		} else {exit('error');
		}

	} elseif ($act == 'doeditgroup') {
		//---------------------------- Edit group ----------------------------//

		$groupid = $_POST['groupid'];
		$groupname = clean_input_gpc('p', 'groupname', 'STRING');
		$color = clean_input_gpc('p', 'color', 'STRING');
		$usertitle = clean_input_gpc('p', 'usertitle', 'STRING');

		$edit_group = $groups -> edit_group($groupid, $groupname, $color, $usertitle);

		if ($edit_group == true) {exit('success');
		} else {exit('error');
		}

	} elseif ($act == 'groupusers') {
		//---------------------------- Adding new user action "Insert" ----------------------------//

		$groupid = $_GET['groupid'];

		$groupdata = $groups -> get_group_data($groupid);
		$smarty -> assign("groupid", $groupid);
		$smarty -> assign("groupname", $groupdata['groupname']);
		$smarty -> assign("shortname", $groupdata['shortname']);
		$smarty -> assign("color", $groupdata['color']);
		$smarty -> assign("usertitle", $groupdata['usertitle']);

		$groupusers = $groups -> groupusers($groupid);

		$smarty -> assign("groupusers", $groupusers);

		$smarty -> display('groupusers.html');
	} elseif ($act == 'dodel') {
		//---------------------------- Delete user ----------------------------//

		$groupid = $_GET['groupid'];

		$groupusers = $groups -> groupusers($groupid);

		if (!$groupusers) {
			$delete = $groups -> deletegroup($groupid);
			if ($delete == true) {exit('success');
			} else {exit('error');
			}
		} else {exit('groupcontainsusers');
		}

	}
}
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
