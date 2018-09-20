<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Include starter
include 'init.php';

$smarty -> assign('Sections', $news -> getSections());

if (isset($_GET['act'])) {$act = $_GET['act'];

	switch ($act) {

		//---------------------------- Get all news sections ----------------------------//

		case "sections" :
			$smarty -> display('sections.html');

			break;

		//---------------------------- Add sections page ----------------------------//

		case "addSection" :
			$smarty -> display('sections-add.html');

			break;

		//---------------------------- Adding news sections ----------------------------//

		case "doAddSection" :
			$sectionName = clean_input_gpc('p', 'sectionName', 'STRING');
			$sectionDescrip = clean_input_gpc('p', 'sectionDescrip', 'STRING');
			$sectionMetadisc = clean_input_gpc('p', 'sectionMetadisc', 'STRING');
			$sectionMetakey = clean_input_gpc('p', 'sectionMetakey', 'STRING');
			$sectionTags = clean_input_gpc('p', 'sectionTags', 'STRING');
			$status = $_POST['status'];

			if ($newssettings['newsattachmenten']) {
				if (isset($_FILES["sectionPicture"]) && $_FILES["sectionPicture"]["error"] == UPLOAD_ERR_OK) {

					$upload = $upload -> uploadfile($_FILES['sectionPicture']['tmp_name'], $_FILES['sectionPicture']['name'], $_FILES['sectionPicture']['type'], $_FILES['sectionPicture']['size'], $contentsFolder, $types, $maxsize, $sectionFileStarting);

					if ($upload['res'] == "done") {
						$sectionPicture = $upload['filename'];
					} elseif ($upload['res'] == "invalidfile") {

						die('The image you trying to upload is not valid <br> Allowed files is : <b>' . $newssettings['newsattachmenttypes'] . '</b>');

					} elseif ($upload['res'] == "maxsize") {

						die('The image you trying to upload is too large <br> Allowed size is : <b>' . $newssettings['newsattachmentsize'] . ' M</b>');

					} else
						exit('Error on uploading your file');

				} elseif ($_FILES["sectionPicture"]["error"] != 4) {
					
					$uploadError = $upload -> phpFileUploadErrors($_FILES["sectionPicture"]["error"]);
					die($uploadError);
					
				} else {
					$sectionPicture = $sectionDefaultImage;
				}
			} else {
				$sectionPicture = $sectionDefaultImage;
			}

			$section_add = $news -> addSection($sectionName, $sectionDescrip, $sectionMetadisc, $sectionMetakey, $sectionTags, $status, $sectionPicture);

			if ($section_add) {$section_id = $section_add;
				if (isset($_POST['langup'])) {
					$langsups = $_POST['langup'];

					if (isset($_POST['lang'])) {

						$langs = $_POST['lang'];

						foreach ($langs as $lang) {
							foreach ($langsups as $langsup) {
								if ($langsup == $lang) {

									$sectionName = clean_input_gpc('p', 'sectionName' . $lang, 'STRING');
									$sectionDescrip = clean_input_gpc('p', 'sectionDescrip' . $lang, 'STRING');
									$sectionMetadisc = clean_input_gpc('p', 'sectionMetadisc' . $lang, 'STRING');
									$sectionMetakey = clean_input_gpc('p', 'sectionMetakey' . $lang, 'STRING');
									$sectionTags = clean_input_gpc('p', 'sectionTags' . $lang, 'STRING');

									$news_content = serialize(array('sectionDescrip' => $sectionDescrip, 'sectionMetadisc' => $sectionMetadisc, 'sectionMetakey' => $sectionMetakey, 'sectionTags' => $sectionTags));

									$add_to_multi = $admin -> add_to_multi_lang($lang, $section_id, $sectionType, $sectionName, $news_content);
								}
							}
						}
					}
				}
			}

			if ($section_add) {die('success');
			} else {die('Error adding new section');
			}

			break;

		//---------------------------- View section and edit form ----------------------------//

		case "editSection" :
			$sec_id = $_GET['id'];

			$sectionData = $news -> getSectionData($sec_id);

			$smarty -> assign("secId", $sec_id);

			foreach ($languages as $language) {
				if ($language['langcode'] != 'en') {

					if ($minative_languages -> check_lang_exist($sectionType, $language['langcode'], $sec_id)) {

						$contentdatas = $minative_languages -> get_from_multi_one_lang($sectionType, $language['langcode'], $sec_id);

						foreach ($contentdatas as $contentdata) {
							$smarty -> assign("sectionName" . $language['langcode'], $contentdata['name']);

							$contentdata_array = unserialize($contentdata['content']);

							$smarty -> assign("sectionDescrip" . $language['langcode'], $contentdata_array['sectionDescrip']);
							$smarty -> assign("sectionMetadisc" . $language['langcode'], $contentdata_array['sectionMetadisc']);
							$smarty -> assign("sectionMetakey" . $language['langcode'], $contentdata_array['sectionMetakey']);
							$smarty -> assign("sectionTags" . $language['langcode'], $contentdata_array['sectionTags']);

						}
						$smarty -> assign('langnotes' . $language['langcode'], ' ');
					} elseif (!$minative_languages -> check_lang_exist($sectionType, $language['langcode'], $sec_id)) {

						$smarty -> assign("sectionName" . $language['langcode'], $sectionData['sectionName']);
						$smarty -> assign("sectionDescrip" . $language['langcode'], $sectionData['sectionDescrip']);
						$smarty -> assign("sectionMetadisc" . $language['langcode'], $sectionData['sectionMetadisc']);
						$smarty -> assign("sectionMetakey" . $language['langcode'], $sectionData['sectionMetakey']);
						$smarty -> assign("sectionTags" . $language['langcode'], $sectionData['sectionTags']);

						$smarty -> assign('langnotes' . $language['langcode'], 'This language has no content entries, so this is the english values for showing only, not in the database');
					}
				}
			}

			foreach ($sectionData as $key => $value) {
				$smarty -> assign($key, $value);
			}

			$smarty -> display('sections-edit.html');

			break;

		//---------------------------- Edit the section ----------------------------//

		case "doEditSection" :
			$secId = $_POST['secId'];

			if (isset($_POST['langup'])) {
				$langsups = $_POST['langup'];
			} else {die('Sorry, you didn\'t choose which languages to edit');
			}
			foreach ($langsups as $langsup) {
				if ($langsup == 'en') {

					$sectionName = clean_input_gpc('p', 'sectionName', 'STRING');
					$sectionDescrip = clean_input_gpc('p', 'sectionDescrip', 'STRING');
					$sectionMetadisc = clean_input_gpc('p', 'sectionMetadisc', 'STRING');
					$sectionMetakey = clean_input_gpc('p', 'sectionMetakey', 'STRING');
					$sectionTags = clean_input_gpc('p', 'sectionTags', 'STRING');
					$status = $_POST['status'];

					if ($newssettings['newsattachmenten']) {
						if (isset($_FILES["sectionPicture"]) && $_FILES["sectionPicture"]["error"] == UPLOAD_ERR_OK) {

							$upload = $upload -> uploadfile($_FILES['sectionPicture']['tmp_name'], $_FILES['sectionPicture']['name'], $_FILES['sectionPicture']['type'], $_FILES['sectionPicture']['size'], $contentsFolder, $types, $maxsize, $sectionFileStarting);

							if ($upload['res'] == "done") {
								$sectionPicture = $upload['filename'];
							} elseif ($upload['res'] == "invalidfile") {

								die('The image you trying to upload is not valid <br> Allowed files is : <b>' . $newssettings['newsattachmenttypes'] . '</b>');

							} elseif ($upload['res'] == "maxsize") {

								die('The image you trying to upload is too large <br> Allowed size is : ' . $newssettings['newsattachmentsize'] . ' M</b>');

							} else
								exit('errorupload');

						} else {$sectionPicture = $news -> getSectionData($secId)['sectionPicture'];
						}
					} else {$sectionPicture = $news -> getSectionData($secId)['sectionPicture'];
					}

					$section_edit = $news -> editSection($sectionName, $sectionDescrip, $sectionMetadisc, $sectionMetakey, $sectionTags, $status, $sectionPicture, $secId);

				}
			}
			if (isset($_POST['lang'])) {
				$langs = $_POST['lang'];

				foreach ($langs as $lang) {
					foreach ($langsups as $langsup) {
						if ($langsup == $lang) {
							$check_lang_exist = $minative_languages -> check_lang_exist($sectionType, $lang, $secId);

							$sectionName = clean_input_gpc('p', 'sectionName' . $lang, 'STRING');
							$sectionDescrip = clean_input_gpc('p', 'sectionDescrip' . $lang, 'STRING');
							$sectionMetadisc = clean_input_gpc('p', 'sectionMetadisc' . $lang, 'STRING');
							$sectionMetakey = clean_input_gpc('p', 'sectionMetakey' . $lang, 'STRING');
							$sectionTags = clean_input_gpc('p', 'sectionTags' . $lang, 'STRING');

							$news_content = serialize(array('sectionDescrip' => $sectionDescrip, 'sectionMetadisc' => $sectionMetadisc, 'sectionMetakey' => $sectionMetakey, 'sectionTags' => $sectionTags));

							if ($check_lang_exist != 0) {

								$update_to_multi = $admin -> update_multi_lang($lang, $secId, $sectionType, $sectionName, $news_content, '1');

							} elseif ($check_lang_exist == 0) {

								$add_to_multi = $admin -> add_to_multi_lang($lang, $secId, $sectionType, $sectionName, $news_content);

							}
						}
					}
				}
			}
			exit('success');

			break;

		//---------------------------- Add content page ----------------------------//

		case 'addContent' :
			$smarty -> display('content-add.html');

			break;

		//---------------------------- Do add content ----------------------------//

		case 'doAddContent' :
			$newsTitle = clean_input_gpc('p', 'newsTitle', 'STRING');
			$newsBrief = clean_input_gpc('p', 'newsBrief', 'STRING');
			$newsContent = clean_input_gpc('p', 'newsContent', 'STRING');
			$newsMetadisc = clean_input_gpc('p', 'newsMetadisc', 'STRING');
			$newsMetakey = clean_input_gpc('p', 'newsMetakey', 'STRING');
			$newsTags = clean_input_gpc('p', 'newsTags', 'STRING');
			$newsWriter = clean_input_gpc('p', 'newsWriter', 'STRING');
			$newsPubDate = $_POST['newsPubDate'];
			$newsStatus = $_POST['newsStatus'];
			$newsParentId = $_POST['newsParentId'];
			$newsType = $_POST['newsType'];

			$newsFiles = array();

			if ($newssettings['newsattachmenten']) {
				
				if (isset($_FILES["newsFiles"])) {
					
					$files = $_FILES["newsFiles"];
					
					$newsFiles = $upload -> uploadMultifiles($files, $types, $maxsize, $limit, $contentsFolder, $contentFileStarting);

				}
				else {
					$newsFiles = $contentDefaultImage;
				}
			}else {
				$newsFiles = $contentDefaultImage;
			}
				
				
				
				/*if (isset($_FILES["newsFiles"]) && $_FILES["newsFiles"]['error']['0'] != '4') {
					
					 
				} else {
					$newsFiles = $contentDefaultImage;
				}

			*/
			
			

			$content_add = $news -> addContent($newsTitle, $newsBrief, $newsContent, $newsMetadisc, $newsMetakey, $newsTags, $newsWriter, $newsPubDate, $newsStatus, $newsParentId, $newsType, $newsFiles);

			if ($content_add) {$content_id = $content_add;
				if (isset($_POST['langup'])) {
					$langsups = $_POST['langup'];

					if (isset($_POST['lang'])) {

						$langs = $_POST['lang'];

						foreach ($langs as $lang) {
							foreach ($langsups as $langsup) {
								if ($langsup == $lang) {

									$newsTitle = clean_input_gpc('p', 'newsTitle' . $lang, 'STRING');
									$newsBrief = clean_input_gpc('p', 'newsBrief' . $lang, 'STRING');
									$newsContent = clean_input_gpc('p', 'newsContent' . $lang, 'STRING');
									$newsMetadisc = clean_input_gpc('p', 'newsMetadisc' . $lang, 'STRING');
									$newsMetakey = clean_input_gpc('p', 'newsMetakey' . $lang, 'STRING');
									$newsTags = clean_input_gpc('p', 'newsTags' . $lang, 'STRING');

									$news_content = serialize(array('newsBrief' => $newsBrief, 'newsContent' => $newsContent, 'newsMetadisc' => $newsMetadisc, 'newsMetakey' => $newsMetakey, 'newsTags' => $newsTags));

									$add_to_multi = $admin -> add_to_multi_lang($lang, $content_id, $contentsType, $newsTitle, $news_content);
								}
							}
						}
					}
				}
			}

			if ($content_add) {exit('success');
			} else {exit('error');
			}

			break;

		//---------------------------- Get section content ----------------------------//

		case 'listSectionContent' :
			$newsParentId = $_GET['id'];
			$sectionData = $news -> getSectionData($newsParentId);

			foreach ($sectionData as $key => $value) {
				$smarty -> assign($key, $value);
			}

			$contentsData = $news -> getSectionContents($newsParentId);

			$smarty -> assign("contentsData", $contentsData);

			$smarty -> display('content-list.html');

			break;

		//---------------------------- Delete section ----------------------------//

		case 'delSection' :
			$secId = $_GET['secId'];
			$sectionpicture = $news -> getSectionData($secId)['sectionPicture'];
			$delete = $admin -> delete_($sectionsDBtable, $secId);
			if ($delete) {

				if ($sectionpicture != 'default.jpg') {
					$news -> deletePictures($contentsFolder, $sectionpicture);
				}
				$delete_content_mutli = $admin -> delete_content_mutli($sectionType, $secId);

				if ($delete_content_mutli)
					exit('success');
				else
					exit('error');
			} else {exit('error');
			}

			break;
	}
} else {$smarty -> display('sections.html');
}

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
