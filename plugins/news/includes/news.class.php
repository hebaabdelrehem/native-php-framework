<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

/**
 *
 */
class news extends minative {

	public $newssettings = array ();
	
	function newsSettings() {
		
		$news_set = $this -> settingsarray_bygroup('newssettings');
		foreach ($news_set as $key => $value) {
			$newssettings[$value['setname']] = $value['value'];
		}
		
		return $newssettings;
	}

	//---------------------------- Edit settings ----------------------------//

	public function editSettings() {

		$stickyen = clean_input_gpc('p', 'stickyen', 'STRING');
		$stickynum = clean_input_gpc('p', 'stickynum', 'STRING');
		$normalen = clean_input_gpc('p', 'normalen', 'STRING');
		$normalnum = clean_input_gpc('p', 'normalnum', 'STRING');
		$newsprint = clean_input_gpc('p', 'newsprint', 'STRING');
		$newssaveas = clean_input_gpc('p', 'newssaveas', 'STRING');
		$newsattachmenten = clean_input_gpc('p', 'newsattachmenten', 'STRING');
		$newsattachmentnum = clean_input_gpc('p', 'newsattachmentnum', 'STRING');
		$newsattachmentsize = clean_input_gpc('p', 'newsattachmentsize', 'STRING');
		$newsattachmenttypes = clean_input_gpc('p', 'newsattachmenttypes', 'STRING');
		$newseditor = clean_input_gpc('p', 'newseditor', 'STRING');

		$set_array = array('stickyen' => $stickyen, 'stickynum' => $stickynum, 'normalen' => $normalen, 'normalnum' => $normalnum, 'newsprint' => $newsprint, 'newssaveas' => $newssaveas, 'newsattachmenten' => $newsattachmenten, 'newsattachmentnum' => $newsattachmentnum, 'newsattachmentsize' => $newsattachmentsize, 'newsattachmenttypes' => $newsattachmenttypes, 'newseditor' => $newseditor);

		return $set_array;
	}

	//---------------------------- Get all sections ----------------------------//

	public function getSections() {
		global $admin;
		global $sectionsDBtable;
		$sections = $admin -> get_all_($sectionsDBtable);

		return $sections;
	}

	//---------------------------- Get spacific section data ----------------------------//

	public function getSectionData($id = '') {

		global $minative_mysqliDB;
		global $sectionsDBtable;
		$query = "SELECT * FROM $sectionsDBtable WHERE id = ?";
		$params = array($id);
		$sectionData = $minative_mysqliDB -> selectone($query, 's', $params);

		return $sectionData;
	}

	//---------------------------- Add new section ----------------------------//

	public function addSection($sectionname = '', $sectiondescrip = '', $sectionmetadisc = '', $sectionmetakey = '', $sectiontags = '', $status = '', $sectionpicture = '') {

		global $minative_mysqliDB;
		global $sectionsDBtable;
		$q = "INSERT INTO $sectionsDBtable (sectionName, sectionDescrip, sectionMetadisc, sectionMetakey, sectionTags, status, sectionPicture) 
				VALUES (?, ?, ?, ?, ?, ?, ?)";
		$values = array($sectionname, $sectiondescrip, $sectionmetadisc, $sectionmetakey, $sectiontags, $status, $sectionpicture);
		$addSection = $minative_mysqliDB -> insert($q, 'sssssss', $values);

		if ($addSection) {
			return $addSection;
		} else {
			return;
		}
	}

	//---------------------------- Edit section ----------------------------//

	public function editSection($sectionname = '', $sectiondescrip = '', $sectionmetadisc = '', $sectionmetakey = '', $sectiontags = '', $status = '', $sectionpicture = '', $secId = '') {
		global $minative_mysqliDB;
		global $sectionsDBtable;
		$q = "UPDATE $sectionsDBtable SET `sectionName` = ?, `sectionDescrip` = ?, `sectionMetadisc` = ?, `sectionMetakey` = ?, `sectionTags` = ?,
		`status` = ?, `sectionPicture` = ?  WHERE `id` = ? ";
		$values = array($sectionname, $sectiondescrip, $sectionmetadisc, $sectionmetakey, $sectiontags, $status, $sectionpicture, $secId);
		$editSection = $minative_mysqliDB -> update($q, 'ssssssss', $values);

		if ($editSection) {
			return TRUE;
		} else {
			return;
		}
	}

	//---------------------------- Get content ----------------------------//

	public function getSectionContents($newsParentId = '') {
		global $minative_mysqliDB;
		global $contentsDBtable;

		$q = "SELECT * FROM $contentsDBtable WHERE newsParentId = ?";
		$values = array($newsParentId);

		$contentsData = $minative_mysqliDB -> selectall($q, 's', $values);

		foreach ($contentsData as $news) {
			$newsFiles = explode(',', $news['newsFiles']);
			$newsMainFile = $newsFiles['0'];

			$news['newsFiles'] = $newsMainFile;

			$contentsDataNew[] = $news;
		}
		if (isset($contentsDataNew)) {
			return $contentsDataNew;
		} else {
			return;
		}
	}

	//---------------------------- Add content ----------------------------//

	public function addContent($newsTitle = '', $newsBrief = '', $newsContent = '', $newsMetadisc = '', $newsMetakey = '', $newsTags = '', $newsWriter = '', $newsPubDate = '', $newsStatus = '', $newsParentId = '', $newsType = '', $newsFiles = '') {

		global $minative_mysqliDB;
		global $contentsDBtable;

		$q = "INSERT INTO $contentsDBtable (newsParentId, newsTitle, newsBrief, newsContent, newsMetadisc, newsMetakey, newsTags, 
		newsWriter, newsPubDate, newsStatus, newsType, newsFiles) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$values = array($newsParentId, $newsTitle, $newsBrief, $newsContent, $newsMetadisc, $newsMetakey, $newsTags, $newsWriter, $newsPubDate, $newsStatus, $newsType, $newsFiles);

		$addContent = $minative_mysqliDB -> insert($q, 'ssssssssssss', $values);

		if ($addContent) {
			return $addContent;
		} else {
			return;
		}

	}

	//---------------------------- Edit content ----------------------------//

	public function editContent() {

	}

	//---------------------------- Get sticky ----------------------------//

	public function getSticky($limit = '') {
		global $minative_mysqliDB;
		global $contentsDBtable;
		$query = "SELECT * FROM pl_news_contents WHERE newsType = 'st'  ORDER BY id DESC LIMIT $limit";
		$params = array('st');
		$stickyData = $minative_mysqliDB -> selectall($query);

		foreach ($stickyData as $news) {
			$newsFiles = explode(',', $news['newsFiles']);
			$newsMainFile = $newsFiles['0'];

			$news['newsFiles'] = $newsMainFile;

			$stickyDataNew[] = $news;
		}
		return $stickyDataNew;
	}

	//---------------------------- Get important ----------------------------//

	public function getImportant($limit = '') {
		global $minative_mysqliDB;
		global $contentsDBtable;
		$query = "SELECT * FROM pl_news_contents WHERE newsType = 'imp'  ORDER BY id DESC  LIMIT $limit";
		$params = array('st');
		$impData = $minative_mysqliDB -> selectall($query);

		foreach ($impData as $news) {
			$newsFiles = explode(',', $news['newsFiles']);
			$newsMainFile = $newsFiles['0'];

			$news['newsFiles'] = $newsMainFile;

			$impDataNew[] = $news;
		}
		return $impDataNew;
	}

	//---------------------------- Delete related pictures ----------------------------//

	public function deletePictures($contentsFolder, $sectionpicture) {

		if (file_exists($contentsFolder . $sectionpicture)) {
			unlink($contentsFolder . $sectionpicture);
		}
		return TRUE;
	}

	//---------------------------- Install plugin ----------------------------//

	public function installPlugin() {

		// Insert plugin data into plugins table
		// Create database tables
		// Insert default values
		// Insert settings
		// insert permissions
		// edit .htaccess file and add rewrite urls
		/* Create folders
		 * ../contents/news
		 * ../contents/news/sections-thumb
		 * ../contents/news/news-thumb
		 * move default pictures
		 * */
	}

}

$GLOBALS['news'] = new news();

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
