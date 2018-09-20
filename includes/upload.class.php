<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/**
 * Upload class to have all function that belong to upload
 * 1. Upload function
 * 2. Check mime type
 * 3. Check ext.
 * 4. Check size
 *
 */
class upload extends minative {

	public $requestUploadFiles = array();
	public $uploadFilesArray = array();
	public $checkMultifilesArray = array();

	public function __construct() {

	}

	//---------------------------- Upload function - single file ----------------------------//

	public function uploadfile($File_tmp_name = '', $File_Name = '', $File_Type = '', $File_Size = '', $up_path = '', $allowed_types = '', $maxsize = '', $fie_starting = '') {

		$File_Name = strtolower($File_Name);
		$File_Type = strtolower($File_Type);
		$File_Ext = substr($File_Name, strrpos($File_Name, '.'));

		if ($this -> check_mimeType($File_Type, $allowed_types) == "yes") {

			if ($this -> check_file_size($File_Size, $maxsize)) {

				$change_file_name = $this -> change_file_name($File_Ext, $fie_starting);
				if (move_uploaded_file($File_tmp_name, $up_path . $change_file_name)) {
					$upload = array('res' => 'done', 'filename' => $change_file_name);

				} else {
					$upload = array('res' => 'error');
				}
			} else
				$upload = array('res' => 'maxsize');

		} else
			$upload = array('res' => 'invalidfile');

		return $upload;
	}

	//---------------------------- Upload function - Multi files ----------------------------//

	public function uploadMultifiles($files, $types, $maxsize, $limit, $up_path = '', $fie_starting = '') {

		if (count($files['name']) <= $limit) {

			for ($i = 0; $i < count($files['name']); ++$i) {

				$requestUploadFiles[] = array('tmp_name' => $files['tmp_name'][$i], 'name' => $files['name'][$i], 'type' => $files['type'][$i], 'size' => $files['size'][$i], 'error' => $files['error'][$i]);

			}

			foreach ($this ->checkMultifiles($requestUploadFiles, $types, $maxsize) as $checkMultifile) {

				if (isset($checkMultifile['checkTypeSize'])) {

					if ($checkMultifile['checkTypeSize'] == "ok") {
						$filescheck = "ok";
					}

				} elseif ($checkMultifile['checkType'] == "invalidfile") {

					die('The file : ' . $checkMultifile['filename'] . ' is invalied <br> Allowed files is : <b>' . $types . '</b>');

				} elseif ($checkMultifile['checkSize'] == "maxsize") {

					die('The file : ' . $checkMultifile['filename'] . ' exceding the maximum size <br> Allowed size is : ' . $maxsize . ' M</b>');

				}
			}

			foreach ($requestUploadFiles as $file) {

				if ($file['error'] != '0') {
					echo $file['error'];
					die($this -> phpFileUploadErrors($file['error']));
					
				} else {

					$File_Name = strtolower($file['name']);
					$File_Type = strtolower($file['type']);
					$File_Ext = substr($file['name'], strrpos($file['name'], '.'));

					$change_file_name = $this -> change_file_name($File_Ext, $fie_starting);

					if (move_uploaded_file($file['tmp_name'], $up_path . $change_file_name)) {

						$uploadFilesArray[] = $change_file_name;

					} else {
						die('Error on uploading');
					}

				}

			}
			if (is_array($uploadFilesArray)) {
				$uploadFilesString = implode(',', $uploadFilesArray);
			}
		} else {
			die('You exceding the number of allowed files to upload <br> Allowed limit is : ' . $limit . ' files</b>');
		}
		return $uploadFilesString;
	}

	//---------------------------- Check Multi files upload ----------------------------//

	public function checkMultifiles($files, $allowed_types = '', $maxsize = '') {

		foreach ($files as $file) {
			if ($this -> check_mimeType($file['type'], $allowed_types) == "no" && !$this -> check_file_size($file['size'], $maxsize)) {

				$checkMultifilesArray[] = array('filename' => $file['name'], 'checkType' => 'invalidfile', 'checkSize' => 'maxsize');

			} elseif ($this -> check_mimeType($file['type'], $allowed_types) == "no") {

				$checkMultifilesArray[] = array('filename' => $file['name'], 'checkType' => 'invalidfile', 'checkSize' => '');

			} elseif (!$this -> check_file_size($file['size'], $maxsize)) {

				$checkMultifilesArray[] = array('filename' => $file['name'], 'checkType' => ' ', 'checkSize' => 'maxsize');

			} elseif ($this -> check_mimeType($file['type'], $allowed_types) == "yes" && $this -> check_file_size($file['size'], $maxsize)) {

				$checkMultifilesArray[] = array('filename' => $file['name'], 'checkTypeSize' => 'ok');
			}
		}
		return $checkMultifilesArray;
	}

	//---------------------------- Check mime type ----------------------------//

	public function check_mimeType($type = '', $allowed_types = '') {
		$allowed_types_array = explode(",", $allowed_types);

		/*$finfo = finfo_open(FILEINFO_MIME_TYPE);
		 $mime = finfo_file($finfo, $file['tmp_name']);
		 if (!in_array($mime, $allowed_types_array)) {$check = "yes";
		 } else {$check = "no";
		 }*/

		if (in_array($type, $allowed_types_array)) {$check = "yes";
		} else {$check = "no";
		}

		/*switch($type) {
		 //allowed file types
		 case 'image/png' :
		 case 'image/gif' :
		 case 'image/jpeg' :
		 case 'image/pjpeg' :
		 case 'text/plain' :
		 case 'text/html' :
		 case 'application/x-zip-compressed' :
		 case 'application/pdf' :
		 case 'application/msword' :
		 case 'application/vnd.ms-excel' :
		 case 'video/mp4' :
		 $check = "yes";
		 break;
		 default :
		 $check = "no";
		 }*/

		return $check;
	}

	//---------------------------- Check file size ----------------------------//
	/* Check if file is exeeding the limit size of minative system or php.ini
	 * 1. MiNative file size limit
	 * 2. memory_limit
	 * 3. upload_max_filesize
	 * 4. post_max_size
	 * */
	public function check_file_size($File_Size = ' ', $maxsize = ' ') {
		$maxsize = $maxsize * 1024 * 1024;
		if ($File_Size > $maxsize) {
			return;
		} else
			return TRUE;
	}

	//---------------------------- Change file name ----------------------------//

	public function change_file_name($File_Ext = ' ', $fie_starting = ' ') {

		$Random_Number = rand(0, 9999999999);
		$New_File_name = $fie_starting . $Random_Number . $File_Ext;

		return $New_File_name;
	}

	//---------------------------- Php upload errors ----------------------------//

	public function phpFileUploadErrors($errorno) {

		$phpFileUploadErrors = array(0 => 'There is no error, the file uploaded with success', 1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini', 2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form', 3 => 'The uploaded file was only partially uploaded', 4 => 'No file was uploaded', 6 => 'Missing a temporary folder', 7 => 'Failed to write file to disk.', 8 => 'A PHP extension stopped the file upload.', );

		return $phpFileUploadErrors[$errorno];
	}

}

$upload = new upload();
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
