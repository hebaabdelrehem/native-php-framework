<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include starter
include 'adminstarter.php';

if (isset($_GET['log'])) {

	$log = $_GET['log'];

	if ($log == 'log_security') {
		//---------------------------- View Security log ----------------------------//

		$securitylog_count = $minative_mysqliDB -> get_count('log_security');
		$securitylog = $admin -> get_all_('log_security');

		$smarty -> assign('securitylog', $securitylog);
		$smarty -> assign('count', $securitylog_count);

		$smarty -> display('log_security.html');
		
	} elseif ($log == 'log_mail') {
		//---------------------------- View Email log ----------------------------//

		$securitylog_count = $minative_mysqliDB -> get_count('login_attempts');
		$securitylog = $admin -> get_all_('login_attempts');

		$smarty -> assign('securitylog', $securitylog);
		$smarty -> assign('count', $securitylog_count);

		$smarty -> display('securitylog.html');

	} elseif ($log == 'log_actions') {
		//---------------------------- View Actions log ----------------------------//

		$securitylog_count = $minative_mysqliDB -> get_count('login_attempts');
		$securitylog = $admin -> get_all_('login_attempts');

		$smarty -> assign('securitylog', $securitylog);
		$smarty -> assign('count', $securitylog_count);

		$smarty -> display('securitylog.html');

	} elseif ($log == 'log_error') {
		//---------------------------- View Error log ----------------------------//

		$securitylog_count = $minative_mysqliDB -> get_count('login_attempts');
		$securitylog = $admin -> get_all_('login_attempts');

		$smarty -> assign('securitylog', $securitylog);
		$smarty -> assign('count', $securitylog_count);

		$smarty -> display('securitylog.html');

	} elseif ($log == 'dodel') {
		//---------------------------- Delete log ----------------------------//

		$id = $_GET['id'];
		$log_table = $_GET['logtable'];

		$delete = $admin -> delete_($log_table, $id);
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
