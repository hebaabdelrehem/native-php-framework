<?php
////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//Include config
include 'starter.php';

$pagetitle ="User control panel";

$smarty->assign("pagetitle", $pagetitle);

$smarty->display('head.html');
$smarty->display('header.html');
    
	if ($minative->check_perm('use_user_panel'))
		{
        if (isset($_SESSION['userid']))
        {
        
        $userdata = $minative->userdata($_SESSION['userid']);
        
        $smarty->assign("name", $userdata['name']);
        $smarty->assign("email", $userdata['email']);
        $smarty->assign("user", $userdata['user']);
        $smarty->assign("dname", $userdata['dname']);
        $smarty->assign("country", $userdata['country']);
        $smarty->assign("city", $userdata['city']);
        $smarty->assign("sex", $userdata['sex']);
        $smarty->assign("bio", $userdata['bio']);
        $smarty->assign("face", $userdata['face']);
        $smarty->assign("twitter", $userdata['twitter']);
        $smarty->assign("google", $userdata['google']);
        $smarty->assign("skype", $userdata['skype']);
        $smarty->assign("linkedin", $userdata['linkedin']);
        $smarty->assign("yahoo", $userdata['yahoo']);
        $smarty->assign("website", $userdata['website']);
        $smarty->assign("reg_date", $userdata['reg_date']);
		$smarty->assign("avatar", $userdata['avatar']);
        
        $smarty->display('usercp.html');
        
        }
		} 
		else {$smarty->display('errorpage.html');}        

$smarty->display('footer.html');


////////////////////////////////////////////      MiNative V. 1.0.0      ////////////////////////////////////////////
/*                                                                                                                */
/*                                           This is not a free script                                            */
/*                              All rightes reserved to minative.net and minative.com                               */
/*                                                                                                                */
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



