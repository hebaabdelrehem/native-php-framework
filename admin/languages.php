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
	$act = $_GET['act'];
	if ($act == 'list') {
		//---------------------------- View languages ----------------------------//

		$languages = $minative_languages -> get_languages();

		$smarty -> assign('languages', $languages);

		$smarty -> display('languages-manager.html');

	} elseif ($act == 'addlang') {
		//---------------------------- Add new language ----------------------------//

		$filename = clean_input_gpc('p', 'filename', 'URL');

		if (file_exists('../languages/' . $filename)) {

			include '../languages/' . $filename;

			$langname = $lng['langname'];
			$langcode = $lng['langcode'];
			$direction = $lng['dir'];
			$status = $_POST['status'];

			$languages = $minative_languages -> get_languages();

			foreach ($languages as $language) {
				if ($language['langcode'] == $langcode || $language['name'] == $langname) {exit('langalreadyexist');
				}
			}

			$add_lang = $admin -> add_lang($langname, $filename, $direction, $langcode, $status);

			if ($add_lang == true) {exit('success');
			} else {exit('error');
			}

		} else {exit('filenotexist');
		}

	} elseif ($act == 'updatelang') {
		//---------------------------- Editing language  ----------------------------//

		$lang_filename = $_GET['filename'];

		if ($lang_filename == 'english.php') {exit('error');
		} elseif (file_exists('../languages/' . $lang_filename)) {

			include '../languages/' . $lang_filename;

			$langname = $lng['langname'];
			$langcode = $lng['langcode'];
			$direction = $lng['dir'];

			$update_lang = $admin -> update_lang($langname, $direction, $langcode, $lang_filename);

			if ($update_lang == true) {exit('success');
			} else {exit('error');
			}

		} else {exit('filenotexist');
		}

	} elseif ($act == 'changelangst') {
		//---------------------------- Delete language ----------------------------//

		$filename = $_POST['filename'];
		$status = $_POST['langstatus'];

		if ($filename == 'english.php') {exit('error');
		}

		$change_lang_status = $admin -> change_lang_status($filename, $status);
		if ($change_lang_status == true) {
			exit('success');
		} else {exit('error');
		}
	} elseif ($act == 'dodel') {
		//---------------------------- Delete language ----------------------------//

		$langcode = $_GET['langcode'];

		if ($langcode == 'en') {exit('error');
		}

		$delete = $admin -> delete_lang_($langcode);
		if ($delete == true) {
			exit('success');
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
