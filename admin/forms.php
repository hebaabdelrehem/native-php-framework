<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include starter
include 'adminstarter.php';

if (isset($_GET['act']))
{
	
	$act = $_GET['act'];
	
		$formsdata = $admin->get_all_('contactforms');
		$smarty->assign('formsdata', $formsdata);
		
	if ($act == 'list')
	{
//---------------------------- List all Forms ----------------------------//

        	$smarty->assign('formsdata', $formsdata);
			$smarty->display('formslist.html');
		
	}
	elseif ($act == 'listmessages')
	{
//---------------------------- List Form messages ----------------------------//

       $form_table = $admin->form_table($_GET['id']);
	   
       switch ($_GET ['st']) {
// UnReaded messages
		   case "un" :
	        		
				$unread = $admin->unreaded_mess($form_table);
				$smarty->assign('messdata', $unread);
				
			break;

// All messages       
	        case "all" :
	        
	                $all_mess = $admin->get_all_($form_table);
	        		$smarty->assign('messdata', $all_mess);
	       break;
        }
        	
        	$smarty->display('listmessages.html');
	}
	elseif ($act == 'viewmessage')
	{
//---------------------------- View messages ----------------------------//
		
		$form_table = $admin->form_table($_GET['formid']);
		
	//Message data
		$message_data= $ccenter->get_contact_mess($_GET['hash']);
		 
		if ($message_data)
		{
					$smarty->assign("id", $message_data['id']);
		            $smarty->assign("title", $message_data['title']);
		            $smarty->assign("messagecont", $message_data['messagecont']);
					$smarty->assign("userid", $message_data['userid']);
					$smarty->assign("name", $message_data['name']);
					$smarty->assign("email", $message_data['email']);
					$smarty->assign("hash", $message_data['hash']);
					$smarty->assign("status", $message_data['status']);
					$smarty->assign("date", $message_data['date']);
		            $smarty->assign("formid", $message_data['formid']);
		}
		else 
		{
			echo "invalied message hash";
		}
		 
	//Message Replies    
        $replies = $ccenter->get_replies($message_data['id']);
		
	    if ($replies)
	    {
	     			$smarty->assign('messrep', $replies);	                      
		}
		else{$smarty->assign('remessreppdata', '0');}
		
	//Update seen
		$upseen = $admin->make_seen($form_table,$message_data['id']);
        
				$smarty->display('viewmessage.html');
	   
	}
	elseif ($act == 'submitreply') 
	{
//---------------------------- Submit reply ----------------------------//

		$userid = $_SESSION['userid'];
        $messageid = $_POST['messageid'];
        $sname = $userdata['name'];
        $semail = $userdata['email'];
		$reply = clean_input_gpc ('p','reply','STRING');
		
		$submit_reply=$ccenter->reply_submit($reply, $messageid, $userid, $sname, $semail);
		
		if ($submit_reply == true) {exit('success');} else {exit('error');}
	   
	}
	elseif ($act == 'changeformstatus') 
	{
//---------------------------- Change Form status ----------------------------//

		$status = $_GET['status'];                    
		$formid = $_GET['id'];
		
		$change_status = $admin->change_status('contactforms',$status,$formid);
		
                    
         if ($change_status == true) {exit('success');} else {exit('error');}
	   
	}
	elseif ($act == 'changemessagestatus') 
	{
//---------------------------- Change message status ----------------------------//

		$id = $_GET['id'];
		$status = $_GET['status'];                    
		$formid=$_GET['formid'];
		
 	  	$form_table = $admin->form_table($formid);
		
		$change_status = $admin->change_status($form_table,$status,$id);
		
                    
         if ($change_status == true) {exit('success');} else {exit('error');}
	   
	}
	elseif ($act == 'dellmessage')
	{
//---------------------------- Delete messages ----------------------------//

	   $id=$_GET['id'];
	   $form_table = $admin->form_table($_GET['formid']);
	   
	   $del = $admin->delete_($form_table,$id);
       
		  if ($del == true) {exit('success');} else {exit('error');}
	}
}
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////