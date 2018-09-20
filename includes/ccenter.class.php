<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/*
 * Contact center front class 
 * 
  */
 class contactcenter extends minative {
     
	     public function __construct() 
		     {
		         
		     }
		 
//---------------------------- Get Form ----------------------------//
		 
		public function get_form($value='')
			{
				
			}
		
//---------------------------- Submit form - Type : ** Contact ** ----------------------------//

		public function contact_submit($mtitle='', $messagecont='', $userid='', $sname='', $semail='', $hash='')
			{
				global $minative_mysqliDB;
				$type= "contact";
		        $status= "0";
				$formid="1";
		        $date=date ("Y-m-d H:i:s");
				
				$q = "INSERT INTO form_contact (formid,type,title,messagecont,userid,name,email,status,date) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?,?)";
					
				$values=array($formid, $type, $mtitle, $messagecont, $userid, $sname, $semail, $status, $date);
				$submit=$minative_mysqliDB->insert($q,'sssssssss',$values);
				
				if ($submit) {
					$message_id=$submit;
					$update_hash=$this->update_hash($hash,$message_id);
					
					if ($update_hash) {exit('success');} else {exit('error');}
				}	
			}

//---------------------------- Submit form - Type : ** Quota ** ----------------------------//

		public function quota_submit($value='')
			{
				
			}

//---------------------------- Submit form - Type : ** Job ** ----------------------------//

		public function job_submit($value='')
			{
				
			}

//---------------------------- Submit Reply ----------------------------//

		public function reply_submit($reply='', $messageid='', $userid='', $sname='', $semail='')
			{
				global $minative_mysqliDB;
		        $date=date ("Y-m-d H:i:s");
		        
		        $q = "INSERT INTO form_replies (reply,messageid,userid,name,email,date) VALUES (?, ?, ?, ?, ?, ?)";
				$values=array($reply, $messageid, $userid, $sname, $semail, $date);
				$submit=$minative_mysqliDB->insert($q,'ssssss',$values);
				
				if ($submit) {return TRUE;} else {return;}
			}

//---------------------------- Get Message - Type : ** Contact ** ----------------------------//

		public function get_contact_mess($hash='')
			{
				global $minative_mysqliDB;
				$q = "SELECT * FROM form_contact WHERE hash = ?";
				$params = array ($hash);
				$message_data = $minative_mysqliDB->selectone($q,'s',$params);
				
				return $message_data;
			}

//---------------------------- Get Message - Type : ** Quota ** ----------------------------//

		public function get_quota_mess($value='')
			{
				
			}

//---------------------------- Get Message - Type : ** Job ** ----------------------------//

		public function get_job_mess($value='')
			{
				
			}

//---------------------------- Get Replies ----------------------------//

		public function get_replies($id='')
			{
				global $minative_mysqliDB;
				$q="SELECT id,reply,userid,name,email,date FROM form_replies WHERE messageid = ? ORDER BY id ASC";
				$replies=$minative_mysqliDB->selectall($q,'s',$id);
				
				return $replies;
			}
			
//---------------------------- Get User messages ----------------------------//

		public function get_user_mess($userid='')
			{
				global $minative_mysqliDB;
				$q ="SELECT * FROM form_contact WHERE userid = ? ORDER BY id ASC";
				$params = array ($userid);
    			$messdata = $minative_mysqliDB->selectall($q,'s',$params);
				
				return $messdata;
			}
			
//---------------------------- Update Hash ----------------------------//

		public function update_hash($hash='',$id='')
			{
				global $minative_mysqliDB;
				$hash=$id.$hash;
				$q="UPDATE form_contact SET hash = ? WHERE id = ?";
				$values=array($hash,$id);
            	$up_hash=$minative_mysqliDB->update($q,'ss',$values);
				
				if ($up_hash) { return TRUE; }else return;
			}
			
//---------------------------- Check user ----------------------------//

		public function check_user_mess($userid='')
			{
				if ($userid == $_SESSION['userid'])
				{
					return TRUE;
				}else return;
			}

 }
 

$ccenter = new contactcenter();
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////