<?php

class Hooksfunction  {

	#	internal variables
    var $add_Menu = array();
    var $add_mainsidebar = array();
    
	#	Constructor
	function __construct () {
	}
	###################
	# Settings
	###################
	public function addSettings($id, $title, $groupname, $url, $p=5) {
				$this->add_Settings[$id]['id'] = $id;
                $this->add_Settings[$id]['title'] = $title;
				$this->add_Settings[$id]['groupname'] = $groupname;
                $this->add_Settings[$id]['url'] = $url;
                $this->add_Settings[$id]['prio'] = $p;

	}
	###
	###################
	# Add blook
	###################
	public function addSettingsTpl($setgroupname,$tpl, $p=5) {
				$this->add_SettingsTpl[$tpl]['setgroupname'] = $setgroupname;
				$this->add_SettingsTpl[$tpl]['tpl'] = $tpl;
                $this->add_SettingsTpl[$tpl]['prio'] = $p;
    			
	}
	###
	###################
	# Add menu
	###################
	public function addMenu($id, $title, $url, $p=5, $panal = 'NULL') {
				$this->add_Menu[$id]['id'] = $id;
                $this->add_Menu[$id]['title'] = $title;
                $this->add_Menu[$id]['url'] = $url;
                $this->add_Menu[$id]['prio'] = $p;
    			if (is_array($panal) && $panal!='NULL') 
                $this->add_Menu[$id]['panal'] = $panal;	
	}
	###
    ###################
	# Add admin menu
	###################
	public function addMenuadmin($id, $title, $url, $p=5, $panal = 'NULL') {
				$this->add_Menu_admin[$id]['id'] = $id;
                $this->add_Menu_admin[$id]['title'] = $title;
                $this->add_Menu_admin[$id]['url'] = $url;
                $this->add_Menu_admin[$id]['prio'] = $p;
    			if (is_array($panal) && $panal!='NULL') 
                $this->add_Menu_admin[$id]['panal'] = $panal;	
	}
	###
	###################
	# Add blook
	###################
	public function addblock($tpl, $p=5) {
				$this->mainpage[$tpl]['tpl'] = $tpl;
                $this->mainpage[$tpl]['prio'] = $p;
    			
	}
	###
	###################
	# Add blook
	###################
	public function addblock2($tpl, $p=5) {
				$this->sidemenu[$tpl]['tpl'] = $tpl;
                $this->sidemenu[$tpl]['prio'] = $p;
    			
	}
	###
	public function remove_addMenu($id) {
		unset($this->add_Menu[$id]);
	}
	###################
	# Add main sidebar
	###################
	public function addMainsidebar($id, $title, $url, $p=5) {
				$this->add_Mainsidebar[$id]['id'] = $id;
                $this->add_Mainsidebar[$id]['title'] = $title;
                $this->add_Mainsidebar[$id]['url'] = $url;
                $this->add_Mainsidebar[$id]['prio'] = $p;
	}
	###
	public function remove_addMainsidebar($id) {
		unset($this->add_Mainsidebar[$id]);
	}
	###################
	# Add js
	###################
	public function addJs($id, $file, $plugin_name, $p=5) {
		global $script_url;
		//global $plugin_name;
			if(!preg_match('|^http(s)?://[a-z0-9-]+(.[a-z0-9-]+)*(:[0-9]+)?(/.*)?$|i', $file))
				$file = $script_url.'plugins/'.$plugin_name.'/js/'.$file;
				//echo $file;
				$this->add_Js[$id]['id'] = $id;
                $this->add_Js[$id]['file'] = $file;
                $this->add_Js[$id]['prio'] = $p;
	}
	###
	public function remove_addJs($id) {
		unset($this->add_Js[$id]);
	}
	###################
	# Add css
	###################
	public function addCss($id, $file, $p=5) {
				$this->add_Css[$id]['id'] = $id;
                $this->add_Css[$id]['file'] = $file;
                $this->add_Css[$id]['prio'] = $p;
	}
	###
	public function remove_addCss($id) {
		unset($this->add_Css[$id]);
	}
	###################
	# Add new page
	###################
    public function add_page( $plugin_name, $strip ) {       	
                global $smarty,$path;
                $get_page = (isset($_GET["p"])?$_GET["p"]:"");
                $pagesdir = dirname(__FILE__).'/../plugins/'.$plugin_name.'/php/';          
                $files = glob($pagesdir.'*.php');
                if ($get_page === $plugin_name) {
                        if(in_array($pagesdir.$plugin_name.'.php',$files)) {  
                                         require($pagesdir.$get_page.'.php');
                                         $smarty->display(dirname(__FILE__).'/../plugins/'.$plugin_name.'/html/'.$get_page.'.html');
                         } else 
                         		die('Check the configuration of your plugin!');
                 } else 
                 		die('404');
    } 
}


