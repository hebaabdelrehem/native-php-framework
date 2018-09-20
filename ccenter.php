<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include config
require 'starter.php';

if (isset($_GET['act']))
{
	$act=$_GET['act'];
    
    if ($act == 'contactsubmit')
    {
        if (isset($_SESSION['userid'])){  $userid=$_SESSION['userid']; } else $userid=" ";
        $hash=$_POST['hash'];
        $sname=$_POST['sname'];
        $semail=$_POST['semail'];
		$mtitle = clean_input_gpc ('p','mtitle','STRING');
		$messagecont = clean_input_gpc ('p','messagecont','STRING');
		$submit_message=$ccenter->contact_submit($mtitle, $messagecont, $userid, $sname, $semail, $hash);
    
    }
	elseif ($act == 'jobsubmit'){
        
        
    }elseif ($act == 'quotasubmit'){
        
        
    }
    elseif ($act == 'replysubmit')
    {
    	if (isset($_SESSION['userid'])){  $userid=$_SESSION['userid']; } else $userid=" ";
        $messageid=$_POST['messageid'];
        $sname=$_POST['sname'];
        $semail=$_POST['semail'];
		$reply = clean_input_gpc ('p','reply','STRING');
		
		$submit_reply=$ccenter->reply_submit($reply, $messageid, $userid, $sname, $semail);
		
		if ($submit_reply == true) {exit('success');} else {exit('error');}
        
    }
}

	$pagetitle ="Contact center";
	$smarty->assign("pagetitle", $pagetitle);
	
	$smarty->display('head.html');
	$smarty->display('header.html');

	$hash= gen_hash();
	
	$smarty->assign("hash", $hash);

if (isset($_GET['type']))
{
	$type=$_GET['type'];
	switch ($type) {
		case 'contact':
			if ($minative->check_perm('submit_contact_message'))
			{
			$smarty->assign("formid", '1');
			$smarty->display('contact.html');
			} 
			else {$smarty->display('errorpage.html');}
			break;
			
		case 'job':

			$smarty->assign("formid", '1');
			$smarty->display('errorpage.html');
			//$smarty->display('job.html');
			break;
			
		case 'qouta':

			$smarty->assign("formid", '1');
			$smarty->display('errorpage.html');
			//$smarty->display('qouta.html');
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
