if ($newssettings['newsattachmenten']) {
				
				
				if (isset($_FILES["newsFiles"]) && $_FILES["newsFiles"]['error']['0'] != '4') {

					if (count($_FILES["newsFiles"]['name']) <= $newssettings['newsattachmentnum']) {

						$files = array();

						for ($i = 0; $i < count($_FILES["newsFiles"]['name']); ++$i) {

							$files[] = array('tmp_name' => $_FILES["newsFiles"]['tmp_name'][$i], 'name' => $_FILES["newsFiles"]['name'][$i], 'type' => $_FILES["newsFiles"]['type'][$i], 'size' => $_FILES["newsFiles"]['size'][$i]);

						}

						foreach ($upload ->checkMultifiles($files, $types, $maxsize) as $checkMultifile) {

							if (isset($checkMultifile['checkTypeSize'])) {

								if ($checkMultifile['checkTypeSize'] == "ok") {
									$newsFilescheck = "ok";
								}

							} elseif ($checkMultifile['checkType'] == "invalidfile") {

								die('The file : ' . $checkMultifile['filename'] . ' is invalied <br> Allowed files is : <b>' . $newssettings['newsattachmenttypes'] . '</b>');

							} elseif ($checkMultifile['checkSize'] == "maxsize") {

								die('The file : ' . $checkMultifile['filename'] . ' exceding the maximum size <br> Allowed size is : ' . $newssettings['newsattachmentsize'] . ' M</b>');

							}
						}

						$uploadedFiles = $upload -> uploadMultifiles($files, $contentsFolder, $contentFileStarting);

						foreach ($uploadedFiles as $uploadedFile) {

							if ($uploadedFile['res'] == "done") {

								$newsFiles[] = $uploadedFile['filename'];

							} else {
								die('Error on uploading');
							}
						}
					} else {
						die('You exceding the number of allowed files to upload');
					}
				} else {
					$newsFiles = $contentDefaultImage;
				}

			} else {
				$newsFiles = $contentDefaultImage;
			}