<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/**
 * This class dealing with everything belong to languages
 */
class minative_languages extends minative {

	function __construct() {

	}

	//---------------------------- Get all languages from languages table ----------------------------//

	public function get_languages() {
		global $minative_mysqliDB;
		$query = "SELECT * FROM languages";
		$languages = $minative_mysqliDB -> selectall($query);

		return $languages;
	}

	//---------------------------- Get file name ----------------------------//

	public function get_language_filename($mainlang) {
		$languages = $this -> get_languages();

		foreach ($languages as $language) {
			if ($language['langcode'] == $mainlang) {
				$filename = $language['filename'];
			}
		}

		return $filename;
	}

	//---------------------------- Get active languages ----------------------------//

	public function get_active_languages() {
		global $minative_mysqliDB;
		$query = "SELECT * FROM languages WHERE status = ?";
		$languages = $minative_mysqliDB -> selectall($query, 's', '1');

		return $languages;
	}

	//---------------------------- Get single row from mutli language table ----------------------------//

	public function get_from_multi($parent_id, $type, $mainlang) {

		global $minative_mysqliDB;
		$query = "SELECT name,content FROM `multi_lang` WHERE lang = ? AND parent_id = ? AND type = ?";
		$values = array($mainlang, $parent_id, $type);
		$contentdata = $minative_mysqliDB -> selectone($query, 'sss', $values);
		return $contentdata;

	}

	//---------------------------- Get all rows for type from mutli language table ----------------------------//

	public function get_all_from_multi($type) {

		global $minative_mysqliDB;
		$query = "SELECT lang,name,content FROM `multi_lang` WHERE type = ?";
		$values = array($type);
		$contentdata = $minative_mysqliDB -> selectall($query, 's', $values);
		return $contentdata;

	}

	//---------------------------- Get all rows for type and lang from mutli language table ----------------------------//

	public function get_from_multi_one_lang($type = '', $lang = '', $parent_id = '') {

		global $minative_mysqliDB;
		$query = "SELECT name,content FROM `multi_lang` WHERE type = ? AND lang = ? AND parent_id = ?";
		$values = array($type, $lang, $parent_id);
		$contentdata = $minative_mysqliDB -> selectall($query, 'sss', $values);
		return $contentdata;

	}

	//---------------------------- Get all rows for tyle from mutli language table ----------------------------//

	public function check_lang_exist($type = '', $lang = '', $parent_id = '') {

		global $minative_mysqliDB;

		$query = "SELECT * FROM `multi_lang` WHERE type = ? AND lang = ? AND parent_id = ?";
		$values = array($type, $lang, $parent_id);
		$contentdata = $minative_mysqliDB -> get_count_q($query, 'sss', $values);
		return $contentdata;

	}

}

$minative_languages = new minative_languages();
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
