<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include starter
include 'adminstarter.php';

if (isset($_REQUEST['act'])) { $act = $_REQUEST['act'];


	//---------------------------- Update Settings  ----------------------------//
	if ($act == 'edit') {
		if ($_POST['group'] == "generalsettings") {

			//General settings
			if (check_blank_value($_POST['sitename']) || check_blank_value($_POST['siteurl']) || check_blank_value($_POST['scriptfolder']) || check_blank_value($_POST['siteurl'])) {

				die('missingfields');
			}
			if ($_POST['close'] == "1") {
				if (check_blank_value($_POST['closingmessage'])) {
					die('missingfields');
				}
			}

			$sitename = clean_input_gpc('p', 'sitename', 'STRING');
			$siteurl = clean_input_gpc('p', 'siteurl', 'URL');
			$scriptfolder = clean_input_gpc('p', 'scriptfolder', 'STRING');
			$adminmail = clean_input_gpc('p', 'adminmail', 'EMAIL');
			$close = clean_input_gpc('p', 'close', 'STRING');
			$closingmessage = clean_input_gpc('p', 'closingmessage', 'STRING');
			$metadisc = clean_input_gpc('p', 'metadisc', 'STRING');
			$metakey = clean_input_gpc('p', 'metakey', 'STRING');
			$siteslogn = clean_input_gpc('p', 'siteslogn', 'STRING');
			$sitelogopath = clean_input_gpc('p', 'sitelogopath', 'STRING');
			$modreweiteen = clean_input_gpc('p', 'modreweiteen', 'STRING');
			$closeurl = clean_input_gpc('p', 'closeurl', 'URL');
			$copyright = clean_input_gpc('p', 'copyright', 'STRING');
			$copyrighten = clean_input_gpc('p', 'copyrighten', 'STRING');
			$cacheen = clean_input_gpc('p', 'cacheen', 'STRING');

			$general_set_array = array('sitename' => $sitename, 'siteurl' => $siteurl, 'scriptfolder' => $scriptfolder, 'adminmail' => $adminmail, 'closing' => $close, 'closingmessage' => $closingmessage, 'metadisc' => $metadisc, 'siteslogn' => $siteslogn, 'metakey' => $metakey, 'sitelogopath' => $sitelogopath, 'modreweiteen' => $modreweiteen, 'closeurl' => $closeurl, 'copyright' => $copyright, 'copyrighten' => $copyrighten, 'cacheen' => $cacheen);

			if ($admin -> updatesettings($general_set_array)) {
				exit('success');
			} else
				exit('error');

			//Registration settings
		} elseif ($_POST['group'] == "regsettings") {

			if ($_POST['uploaduseravator'] == "1") {
				if (check_blank_value($_POST['avatortypes']) || check_blank_value($_POST['avatormaxsize'])) {
					die('missingfields');
				}
			}

			if ($_POST['tosactivate'] == "1") {
				if (check_blank_value($_POST['termspagelink'])) {
					if (check_blank_value($_POST['termscontent'])) {
						die('missingfields');
					}
				}
			}

			$enablereg = clean_input_gpc('p', 'enablereg', 'STRING');
			$uniqueemail = clean_input_gpc('p', 'uniqueemail', 'STRING');
			$uniqueusername = clean_input_gpc('p', 'uniqueusername', 'STRING');
			$mailconfirm = clean_input_gpc('p', 'mailconfirm', 'STRING');
			$adminconfirm = clean_input_gpc('p', 'adminconfirm', 'STRING');
			$sendwellcommail = clean_input_gpc('p', 'sendwellcommail', 'STRING');
			$disabledusernames = clean_input_gpc('p', 'disabledusernames', 'STRING');
			$newusersgroup = clean_input_gpc('p', 'newusersgroup', 'STRING');
			$uploaduseravator = clean_input_gpc('p', 'uploaduseravator', 'STRING');
			$avatortypes = clean_input_gpc('p', 'avatortypes', 'STRING');
			$avatormaxsize = clean_input_gpc('p', 'avatormaxsize', 'STRING');
			$editavator = clean_input_gpc('p', 'editavator', 'STRING');
			$tosactivate = clean_input_gpc('p', 'tosactivate', 'STRING');
			$termspagelink = clean_input_gpc('p', 'termspagelink', 'URL');
			$termscontent = trim(clean_input_gpc('p', 'termscontent', 'STRING'));

			$reg_set_array = array('enablereg' => $enablereg, 'uniqueemail' => $uniqueemail, 'uniqueusername' => $uniqueusername, 'mailconfirm' => $mailconfirm, 'adminconfirm' => $adminconfirm, 'disabledusernames' => $disabledusernames, 'newusersgroup' => $newusersgroup, 'uploaduseravator' => $uploaduseravator, 'avatortypes' => $avatortypes, 'avatormaxsize' => $avatormaxsize, 'tosactivate' => $tosactivate, 'termspagelink' => $termspagelink, 'termscontent' => $termscontent, 'sendwellcommail' => $sendwellcommail, 'editavator' => $editavator);

			if ($admin -> updatesettings($reg_set_array)) {
				exit('success');
			} else
				exit('error');

			//Language settings
		} elseif ($_POST['group'] == "langstyle") {

			$mainlang = clean_input_gpc('p', 'mainlang', 'STRING');
			$allowlangswit = clean_input_gpc('p', 'allowlangswit', 'STRING');
			$mainstyle = clean_input_gpc('p', 'mainstyle', 'STRING');
			$stylewidth = clean_input_gpc('p', 'stylewidth', 'STRING');
			$allowstyleswit = clean_input_gpc('p', 'allowstyleswit', 'STRING');
			$overrideuserlangcache = clean_input_gpc('p', 'overrideuserlangcache', 'STRING');

			$langstyle_set_array = array('mainlang' => $mainlang, 'allowlangswit' => $allowlangswit, 'mainstyle' => $mainstyle, 'stylewidth' => $stylewidth, 'allowstyleswit' => $allowstyleswit, 'overrideuserlangcache' => $overrideuserlangcache);

			if ($admin -> updatesettings($langstyle_set_array)) {
				exit('success');
			} else
				exit('error');

			//Security settings
		} elseif ($_POST['group'] == "secsettings") {

			if ($_POST['recaptchaen'] == "1") {
				if (check_blank_value($_POST['recaptchasitekey']) && check_blank_value($_POST['recaptchasecretkey']) && check_blank_value($_POST['recaptchaverifylink'])) {

					die('missingfields');

				}
			}

			$captchaen = clean_input_gpc('p', 'captchaen', 'STRING');
			$captchanumen = clean_input_gpc('p', 'captchanumen', 'STRING');
			$captchaupleten = clean_input_gpc('p', 'captchaupleten', 'STRING');
			$captchasounden = clean_input_gpc('p', 'captchasounden', 'STRING');
			$captchareloaden = clean_input_gpc('p', 'captchareloaden', 'STRING');
			$captchabackcol = clean_input_gpc('p', 'captchabackcol', 'STRING');
			$captchafontcol = clean_input_gpc('p', 'captchafontcol', 'STRING');

			$recaptchaen = clean_input_gpc('p', 'recaptchaen', 'STRING');
			$recaptchasitekey = clean_input_gpc('p', 'recaptchasitekey', 'STRING');
			$recaptchasecretkey = clean_input_gpc('p', 'recaptchasecretkey', 'STRING');
			$recaptchaverifylink = clean_input_gpc('p', 'recaptchaverifylink', 'STRING');

			$passgen = clean_input_gpc('p', 'passgen', 'STRING');
			$passlett = clean_input_gpc('p', 'passlett', 'STRING');
			$passuplett = clean_input_gpc('p', 'passuplett', 'STRING');
			$passnum = clean_input_gpc('p', 'passnum', 'STRING');
			$passsym = clean_input_gpc('p', 'passsym', 'STRING');
			$passlength = clean_input_gpc('p', 'passlength', 'STRING');

			$cbruteforceen = clean_input_gpc('p', 'cbruteforceen', 'STRING');
			$cbruteip = clean_input_gpc('p', 'cbruteip', 'STRING');
			$attemptsn = clean_input_gpc('p', 'attemptsn', 'STRING');
			$attemptsblock = clean_input_gpc('p', 'attemptsblock', 'STRING');
			$cbrutemailadmin = clean_input_gpc('p', 'cbrutemailadmin', 'STRING');
			$cbrutemailowner = clean_input_gpc('p', 'cbrutemailowner', 'STRING');

			$secsettings_set_array = array('captchaen' => $captchaen, 'captchanumen' => $captchanumen, 'captchaupleten' => $captchaupleten, 'captchasounden' => $captchasounden, 'captchareloaden' => $captchareloaden, 'captchabackcol' => $captchabackcol, 'captchafontcol' => $captchafontcol, 'passgen' => $passgen, 'passlett' => $passlett, 'passuplett' => $passuplett, 'passnum' => $passnum, 'passsym' => $passsym, 'passlength' => $passlength, 'cbruteforceen' => $cbruteforceen, 'cbruteip' => $cbruteip, 'attemptsn' => $attemptsn, 'attemptsblock' => $attemptsblock, 'cbrutemailadmin' => $cbrutemailadmin, 'cbrutemailowner' => $cbrutemailowner, 'recaptchaen' => $recaptchaen, 'recaptchasitekey' => $recaptchasitekey, 'recaptchasecretkey' => $recaptchasecretkey, 'recaptchaverifylink' => $recaptchaverifylink);

			if ($admin -> updatesettings($secsettings_set_array)) {
				exit('success');
			} else
				exit('error');

			//Mail settings
		} elseif ($_POST['group'] == "mailsettings") {

			if ($_POST['mailmethod'] == "smtp") {
				if (check_blank_value($_POST['smtpserver']) && check_blank_value($_POST['smtpuser']) && check_blank_value($_POST['smtppass']) && check_blank_value($_POST['smtport'])) {
					die('missingfields');
				}
			}

			if (check_blank_value($_POST['sendermail']) && check_blank_value($_POST['maildefsubj'])) {
				die('missingfields');
			}

			$mailen = clean_input_gpc('p', 'mailen', 'STRING');
			$mailmethod = clean_input_gpc('p', 'mailmethod', 'STRING');
			$smtpserver = clean_input_gpc('p', 'smtpserver', 'STRING');
			$smtpuser = clean_input_gpc('p', 'smtpuser', 'STRING');
			$smtppass = clean_input_gpc('p', 'smtppass', 'STRING');
			$smtport = clean_input_gpc('p', 'smtport', 'STRING');

			$smtpauthreq = clean_input_gpc('p', 'smtpauthreq', 'STRING');

			$smtpauthrtype = clean_input_gpc('p', 'smtpauthrtype', 'STRING');
			$sendermail = clean_input_gpc('p', 'sendermail', 'STRING');
			$maildefsubj = clean_input_gpc('p', 'maildefsubj', 'STRING');

			$defaultmailheader = htmlspecialchars($_POST['defaultmailheader']);
			$defaultmailfooter = htmlspecialchars($_POST['defaultmailfooter']);
			$defaultmailbody = htmlspecialchars($_POST['defaultmailbody']);
			$defaultmailcss = clean_input_gpc('p', 'defaultmailcss', 'STRING');

			$mailsettings_set_array = array('mailen' => $mailen, 'mailmethod' => $mailmethod, 'smtpserver' => $smtpserver, 'smtpuser' => $smtpuser, 'smtppass' => $smtppass, 'smtport' => $smtport, 'smtpauthreq' => $smtpauthreq, 'smtpauthrtype' => $smtpauthrtype, 'sendermail' => $sendermail, 'maildefsubj' => $maildefsubj, 'defaultmailheader' => $defaultmailheader, 'defaultmailfooter' => $defaultmailfooter, 'defaultmailbody' => $defaultmailbody, 'defaultmailcss' => $defaultmailcss);

			if ($admin -> updatesettings($mailsettings_set_array)) {
				exit('success');
			} else
				exit('error');

			//Extra settings
		} elseif ($_POST['group'] == "extrasettings") {

			if ($_POST['exwelmessen'] == "1") {
				if (check_blank_value($_POST['exwelmess'])) {
					die('missingfields');
				}
			}
			if ($_POST['exweladven'] == "1") {
				if (check_blank_value($_POST['exweladv'])) {
					die('missingfields');
				}
			}

			$exsearchen = clean_input_gpc('p', 'exsearchen', 'STRING');
			$exdatetimeen = clean_input_gpc('p', 'exdatetimeen', 'STRING');
			$exwelmessen = clean_input_gpc('p', 'exwelmessen', 'STRING');
			$exwelmess = clean_input_gpc('p', 'exwelmess', 'STRING');
			$exweladven = clean_input_gpc('p', 'exweladven', 'STRING');
			$exweladv = clean_input_gpc('p', 'exweladv', 'STRING');

			$extrasettings_set_array = array('exsearchen' => $exsearchen, 'exdatetimeen' => $exdatetimeen, 'exwelmessen' => $exwelmessen, 'exwelmess' => $exwelmess, 'exweladven' => $exweladven, 'exweladv' => $exweladv);

			if ($admin -> updatesettings($extrasettings_set_array)) {
				exit('success');
			} else
				exit('error');

			//Company profile settings
		} elseif ($_POST['group'] == "compprofsettings") {

			$compfullname = clean_input_gpc('p', 'compfullname', 'STRING');
			$compmanname = clean_input_gpc('p', 'compmanname', 'STRING');
			$compmantit = clean_input_gpc('p', 'compmantit', 'STRING');
			$compcomlice = clean_input_gpc('p', 'compcomlice', 'STRING');
			$compactivities = clean_input_gpc('p', 'compactivities', 'STRING');
			$mainbrabadd = clean_input_gpc('p', 'mainbrabadd', 'STRING');
			$mainlandlinephone = clean_input_gpc('p', 'mainlandlinephone', 'STRING');
			$mainmobilephone = clean_input_gpc('p', 'mainmobilephone', 'STRING');
			$mainfax = clean_input_gpc('p', 'mainfax', 'STRING');
			$compskype = clean_input_gpc('p', 'compskype', 'STRING');
			$mainemail = clean_input_gpc('p', 'mainemail', 'EMAIL');

			$compfacebooklink = clean_input_gpc('p', 'compfacebooklink', 'URL');
			$compfacebooklinken = clean_input_gpc('p', 'compfacebooklinken', 'STRING');
			$comptwitterlink = clean_input_gpc('p', 'comptwitterlink', 'URL');
			$comptwitterlinken = clean_input_gpc('p', 'comptwitterlinken', 'STRING');
			$compyoutubelink = clean_input_gpc('p', 'compyoutubelink', 'URL');
			$compyoutubelinken = clean_input_gpc('p', 'compyoutubelinken', 'STRING');
			$compgoogleplink = clean_input_gpc('p', 'compgoogleplink', 'URL');
			$compgoogleplinken = clean_input_gpc('p', 'compgoogleplinken', 'STRING');
			$complinkedinlink = clean_input_gpc('p', 'complinkedinlink', 'URL');
			$complinkedinlinken = clean_input_gpc('p', 'complinkedinlinken', 'STRING');
			$comppinterestlink = clean_input_gpc('p', 'comppinterestlink', 'URL');
			$comppinterestlinken = clean_input_gpc('p', 'comppinterestlinken', 'STRING');

			$compprofsettings_set_array = array('compfullname' => $compfullname, 'compmanname' => $compmanname, 'compmantit' => $compmantit, 'compcomlice' => $compcomlice, 'compactivities' => $compactivities, 'mainbrabadd' => $mainbrabadd, 'mainlandlinephone' => $mainlandlinephone, 'mainmobilephone' => $mainmobilephone, 'mainfax' => $mainfax, 'compskype' => $compskype, 'mainemail' => $mainemail, 'compfacebooklink' => $compfacebooklink, 'compfacebooklinken' => $compfacebooklinken, 'comptwitterlink' => $comptwitterlink, 'comptwitterlinken' => $comptwitterlinken, 'compyoutubelink' => $compyoutubelink, 'compyoutubelinken' => $compyoutubelinken, 'compgoogleplink' => $compgoogleplink, 'compgoogleplinken' => $compgoogleplinken, 'complinkedinlink' => $complinkedinlink, 'complinkedinlinken' => $complinkedinlinken, 'comppinterestlink' => $comppinterestlink, 'comppinterestlinken' => $comppinterestlinken);

			if ($admin -> updatesettings($compprofsettings_set_array)) {
				exit('success');
			} else
				exit('error');

			//Contact center settings
		} elseif ($_POST['group'] == "ccentersettings") {

			$ccentermenuhead = clean_input_gpc('p', 'ccentermenuhead', 'STRING');
			$ccenterlistusercp = clean_input_gpc('p', 'ccenterlistusercp', 'STRING');
			$ccentermesslett = clean_input_gpc('p', 'ccentermesslett', 'STRING');
			$attachmentmess = clean_input_gpc('p', 'attachmentmess', 'STRING');
			$attachmentreply = clean_input_gpc('p', 'attachmentreply', 'STRING');
			$ccenterattachmentnumber = clean_input_gpc('p', 'ccenterattachmentnumber', 'STRING');
			$ccenterattachmentsize = clean_input_gpc('p', 'ccenterattachmentsize', 'STRING');
			$ccenterattachmenttypes = clean_input_gpc('p', 'ccenterattachmenttypes', 'STRING');
			$ccenternotifymess = clean_input_gpc('p', 'ccenternotifymess', 'STRING');
			$ccenternotifyreply = clean_input_gpc('p', 'ccenternotifyreply', 'STRING');
			$ccentereditorymess = clean_input_gpc('p', 'ccentereditorymess', 'STRING');
			$ccentereditoryreply = clean_input_gpc('p', 'ccentereditoryreply', 'STRING');
			$ccenterautoreplyen = clean_input_gpc('p', 'ccenterautoreplyen', 'STRING');
			$ccenterautoreply = clean_input_gpc('p', 'ccenterautoreply', 'STRING');
			$ccentercloseauto = clean_input_gpc('p', 'ccentercloseauto', 'STRING');
			$ccentercloseautotime = clean_input_gpc('p', 'ccentercloseautotime', 'STRING');
			$ccentercloseautoreplyen = clean_input_gpc('p', 'ccentercloseautoreplyen', 'STRING');
			$ccentercloseautoreply = clean_input_gpc('p', 'ccentercloseautoreply', 'STRING');

			$ccentersettings_set_array = array('ccentermenuhead' => $ccentermenuhead, 'ccenterlistusercp' => $ccenterlistusercp, 'ccentermesslett' => $ccentermesslett, 'attachmentmess' => $attachmentmess, 'attachmentreply' => $attachmentreply, 'ccenterattachmentnumber' => $ccenterattachmentnumber, 'ccenterattachmentsize' => $ccenterattachmentsize, 'ccenterattachmenttypes' => $ccenterattachmenttypes, 'ccenternotifymess' => $ccenternotifymess, 'ccenternotifyreply' => $ccenternotifyreply, 'ccentereditorymess' => $ccentereditorymess, 'ccentereditoryreply' => $ccentereditoryreply, 'ccenterautoreplyen' => $ccenterautoreplyen, 'ccenterautoreply' => $ccenterautoreply, 'ccentercloseauto' => $ccentercloseauto, 'ccentercloseautotime' => $ccentercloseautotime, 'ccentercloseautoreplyen' => $ccentercloseautoreplyen, 'ccentercloseautoreply' => $ccentercloseautoreply);

			if ($admin -> updatesettings($ccentersettings_set_array)) {
				exit('success');
			} else
				exit('error');

			//Pages manager settings
		} elseif ($_POST['group'] == "pmanagersettings") {

			$pmangen = clean_input_gpc('p', 'pmangen', 'STRING');
			$pmangmenuen = clean_input_gpc('p', 'pmangmenuen', 'STRING');
			$pmangprint = clean_input_gpc('p', 'pmangprint', 'STRING');
			$pmangsaveas = clean_input_gpc('p', 'pmangsaveas', 'STRING');
			$pmangsaveaspdf = clean_input_gpc('p', 'pmangsaveaspdf', 'STRING');
			$pmangattachment = clean_input_gpc('p', 'pmangattachment', 'STRING');
			$pmangattachmentnumber = clean_input_gpc('p', 'pmangattachmentnumber', 'STRING');
			$pmangattachmentsize = clean_input_gpc('p', 'pmangattachmentsize', 'STRING');
			$pmangattachmenttypes = clean_input_gpc('p', 'pmangattachmenttypes', 'STRING');
			$pmangeditor = clean_input_gpc('p', 'pmangeditor', 'STRING');

			$pmanagersettings_set_array = array('pmangen' => $pmangen, 'pmangmenuen' => $pmangmenuen, 'pmangprint' => $pmangprint, 'pmangsaveas' => $pmangsaveas, 'pmangsaveaspdf' => $pmangsaveaspdf, 'pmangattachment' => $pmangattachment, 'pmangattachmentnumber' => $pmangattachmentnumber, 'pmangattachmentsize' => $pmangattachmentsize, 'pmangattachmenttypes' => $pmangattachmenttypes, 'pmangeditor' => $pmangeditor);

			if ($admin -> updatesettings($pmanagersettings_set_array)) {
				exit('success');
			} else
				exit('error');

		} elseif ($_POST['group'] == "settings_other_lang") {
					$type = "settings";
					$parent_id = "0";
					
			if (isset($_POST['lang'])) {
				if (isset($_POST['langup'])) {
				$langsups = $_POST['langup'];
				
				}else exit('nothingtobeedited');

				$langs = $_POST['lang'];

				foreach ($langs as $lang) {
					foreach ($langsups as $langsup) {
						if ($langsup == $lang) {
					// General settings
					$sitename = clean_input_gpc('p', 'sitename' . $lang, 'STRING');
					$closingmessage = clean_input_gpc('p', 'closingmessage' . $lang, 'STRING');
					$metadisc = clean_input_gpc('p', 'metadisc' . $lang, 'STRING');
					$metakey = clean_input_gpc('p', 'metakey' . $lang, 'STRING');
					$siteslogn = clean_input_gpc('p', 'siteslogn' . $lang, 'STRING');
					$copyright = clean_input_gpc('p', 'copyright' . $lang, 'STRING');

					// Company profile settings
					$compfullname = clean_input_gpc('p', 'compfullname' . $lang, 'STRING');
					$compmanname = clean_input_gpc('p', 'compmanname' . $lang, 'STRING');
					$compmantit = clean_input_gpc('p', 'compmantit' . $lang, 'STRING');
					$compactivities = clean_input_gpc('p', 'compactivities' . $lang, 'STRING');
					$mainbrabadd = clean_input_gpc('p', 'mainbrabadd' . $lang, 'STRING');

					// Register terms settings
					$termscontent = trim(clean_input_gpc('p', 'termscontent' . $lang, 'STRING'));

					// Mail settings
					$defaultmailheader = htmlspecialchars($_POST['defaultmailheader' . $lang]);
					$defaultmailfooter = htmlspecialchars($_POST['defaultmailfooter' . $lang]);
					$defaultmailbody = htmlspecialchars($_POST['defaultmailbody' . $lang]);
					$defaultmailcss = clean_input_gpc('p', 'defaultmailcss' . $lang, 'STRING');

					// Extra settings
					$exwelmess = clean_input_gpc('p', 'exwelmess' . $lang, 'STRING');
					$exweladv = clean_input_gpc('p', 'exweladv' . $lang, 'STRING');

					// Contact center settings
					$ccenterautoreply = clean_input_gpc('p', 'ccenterautoreply' . $lang, 'STRING');
					$ccentercloseautoreply = clean_input_gpc('p', 'ccentercloseautoreply' . $lang, 'STRING');

					$sets = array('sitename' => $sitename, 'closingmessage' => $closingmessage, 'metadisc' => $metadisc, 'metakey' => $metakey, 'siteslogn' => $siteslogn, 'copyright' => $copyright, 'compfullname' => $compfullname, 'compmanname' => $compmanname, 'compmantit' => $compmantit, 'compactivities' => $compactivities, 'mainbrabadd' => $mainbrabadd, 'termscontent' => $termscontent, 'defaultmailheader' => $defaultmailheader, 'defaultmailfooter' => $defaultmailfooter, 'defaultmailbody' => $defaultmailbody, 'defaultmailcss' => $defaultmailcss, 'exwelmess' => $exwelmess, 'exweladv' => $exweladv, 'ccenterautoreply' => $ccenterautoreply, 'ccentercloseautoreply' => $ccentercloseautoreply);

					$check_lang_exist = $minative_languages -> check_lang_exist($type, $lang);

					if ($check_lang_exist != 0) {

						foreach ($sets as $key => $value) {

							$update_to_multi = $admin -> update_multi_lang($lang, $parent_id, $type, $key, $value,'0');

						}
					} elseif ($check_lang_exist == 0) {

						foreach ($sets as $key => $value) {

							$add_to_multi = $admin -> add_to_multi_lang($lang, $parent_id, $type, $key, $value);

						}
					}
				}
				}
				}
			}
			exit('success');
		}else {
			$group = $_POST['group'];
			
			//include_once '../plugins/'.$group.'/includes/'.$group.'.class.php';
			
			$set_array = $GLOBALS[$group]->editSettings();
			
			if ($admin -> updatesettings($set_array)) {
				exit('success');
			} else
				exit('error');
			
		}

	}
} elseif (isset($_REQUEST['setgroup'])) { $setgroup = $_REQUEST['setgroup'];


	/*if(!preg_match("/^[A-Fa-f0-9]{32}$/", $setgroup) > 0) {
    die ('aaa');
	}*/

	//---------------------------- Get Settings [Get any group]  ----------------------------//

	$setgroup_data = $minative_languages -> settingsarray_bygroup($setgroup);

	foreach ($setgroup_data as $key => $value) {

		$smarty -> assign($value['setname'], $value['value']);
	}
	
	//---------------------------- Get languages and styles  ----------------------------//
	
	if ($setgroup == "langstyle") {

		$languages = $minative_languages -> get_active_languages();

		$smarty -> assign('languages', $languages);

		$stylesdir = "../styles/";
		$stylesdirs = array();

		$styles = glob($stylesdir . "*");

		foreach ($styles as $style) {
			$stylesdirs[] = (str_replace($stylesdir, "", $style));
		}

		$smarty -> assign('stylesdirs', $stylesdirs);
	}
	
	//---------------------------- Get settings for other languages "not english language"  ----------------------------//
	
	elseif ($setgroup == "settings_other_lang") {
		$languages = $minative_languages -> get_languages();
		//print_r($languages);
		$type = "settings";

		foreach ($languages as $language) {
			if ($language['langcode'] != 'en') {
				if ($minative_languages -> check_lang_exist($type, $language['langcode'])) {

					$contentdatas = $minative_languages -> get_from_multi_one_lang($type,$language['langcode']);

					foreach ($contentdatas as $contentdata) {
						$setname = $contentdata['name'];
						$value = $contentdata['content'];
						$smarty -> assign($setname . "_other" . $language['langcode'], $value);
					}
					$smarty -> assign('langnotes' . $language['langcode'], ' ');
				} elseif (!$minative_languages -> check_lang_exist($type, $language['langcode'])) {

					$sets_names = array('sitename', 'closingmessage', 'metadisc', 'metakey', 'siteslogn', 'copyright', 'compfullname', 'compmanname', 'compmantit', 'compactivities', 'mainbrabadd', 'termscontent', 'defaultmailheader', 'defaultmailfooter', 'defaultmailbody', 'defaultmailcss', 'exwelmess', 'exweladv', 'ccenterautoreply', 'ccentercloseautoreply');

					foreach ($sets_names as $sets_name) {

						$set_data = $minative -> getset($sets_name);
						$smarty -> assign($sets_name . "_other" . $language['langcode'], $set_data);
					}
					$smarty -> assign('langnotes' . $language['langcode'], 'This language has no settings entries, so this is the default values for showing only, not in the database');

				}
			}
		}

	}
	
	//---------------------------- Get comman data  ----------------------------//
	
	$user_groups = $admin -> user_groups();
	$smarty -> assign('datagroup', $user_groups);
	
	$smarty -> assign('setgroup', $setgroup);
	
	$mainSettingsGroups = array ('generalsettings','regsettings','langstyle','secsettings','mailsettings','extrasettings','compprofsettings',
							'ccentersettings','pmanagersettings','settings_other_lang','all');
							
	
		if (in_array($_REQUEST['setgroup'], $mainSettingsGroups)) {
			$smarty -> display('settings.html');
			
		}else
			$smarty -> display('settings-plugins.html');
	

}else $smarty -> display('settings-plugins.html');

////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
