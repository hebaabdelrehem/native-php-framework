<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include config
require 'starter.php';

$pagetitle ="Contact center";
$smarty->assign("pagetitle", $pagetitle);

$smarty->display('head.html');
$smarty->display('header.html');

if (isset($_GET['type'])){
		$type=$_GET['type'];
	
	switch ($type) {
		
//---------------------------- Contact type  ----------------------------//
		case 'contact':
			
			$hash= $_GET['hash'];
			$message_data= $ccenter->get_contact_mess($hash);
			
	        if ($message_data['userid'] != "0") {
	            if ($login && $ccenter->check_user_mess($message_data['userid'])){ 
	                if ($minative->check_perm('view_contact_message'))
							{
	                    $smarty->assign("id", $message_data['id']);
	                    $smarty->assign("title", $message_data['title']);
	                    $smarty->assign("messagecont", $message_data['messagecont']);
	                    $smarty->assign("status", $message_data['status']);
	                    $smarty->assign("date", $message_data['date']);
						
						$replies = $ccenter->get_replies($message_data['id']);
	                    if ($replies){
	                       
	                        $smarty->assign('repdata', $replies);
	                        $mainuserid=$userid;
	                        $smarty->assign("mainuserid", $mainuserid);
	                        
	                    }else {$smarty->assign('repdata', '0');}
	        
	           			$smarty->display('ccenterview.html');
						} 
						else {$smarty->display('errorpage.html');}
	            
	        }
	        elseif ($login && !$ccenter->check_user_mess($message_data['userid'])) 
	        {
	        	die("<script>location.href = 'errorpage.php'</script>");
			}
			elseif (!$login) {
				die("<script>location.href = 'login.php'</script>");
			}
			}
			else {
	        			$smarty->assign("id", $message_data['id']);
	                    $smarty->assign("title", $message_data['title']);
	                    $smarty->assign("messagecont", $message_data['messagecont']);
	                    $smarty->assign("status", $message_data['status']);
	                    $smarty->assign("date", $message_data['date']);
						$smarty->assign("status", $message_data['name']);
	                    $smarty->assign("date", $message_data['email']);
	                    
	                    $replies = $ccenter->get_replies($message_data['id']);
	                    if ($replies > 0){
	                       $smarty->assign('repdata', $replies);
	                        $mainuserid=$userid;
	                        $smarty->assign("mainuserid", $mainuserid);
	                        
	                    }else {$smarty->assign('repdata', '0');}
	           			$smarty->display('ccenterview.html');
		}        
                      
			break;
			
//---------------------------- Job type  ----------------------------//		
		case 'job':
            $hash= bin2hex(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM));
			
			$smarty->assign("hash", $hash);
			$smarty->assign("formid", '1');
			$smarty->display('job.html');
			break;
			
//---------------------------- Qouta type  ----------------------------//		
		case 'qouta':
            $hash= bin2hex(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM));
			
			$smarty->assign("hash", $hash);
			$smarty->assign("formid", '1');
			$smarty->display('qouta.html');
			break;
		default:
			
			break;
	}
	
}
$smarty->display('footer.html');
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////