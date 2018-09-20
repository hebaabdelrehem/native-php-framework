<?php

require('includes/hooks/Hooks.functions.class.php');
include_once "includes/hooks/hooks.class.php";

$hook = new phphooks ( );

$q = "SELECT filename FROM plugins WHERE action = ?";
$plug = $minative_mysqliDB->selectall($q,'s','1');

/*$sql = "SELECT filename FROM plugins WHERE action = 1";
$result=mysqli_query($mysqli,$sql);
$result_rows= mysqli_fetch_all($result,MYSQLI_ASSOC);*/
if($plug){
	foreach ( $plug as $plug )
	$plugins [] = $plug ['filename'];
}
else {$plugins ='';}

$hook->active_plugins = $plugins;

$hook->set_hooks ( array ('add_Menu','mainpage','sidemenu', 'mainhook1','mainhook2', 'mainhook3', 'with_args', 'filter','add_Menu_admin' ) );

$hook->load_plugins ();

function add_hook($tag, $function, $priority = 10) {
	global $hook;
	$hook->add_hook ( $tag, $function, $priority );
}

function register_plugin($plugin_id, $data) {
	global $hook;
	$hook->register_plugin ( $plugin_id, $data );
}
$smarty->assign('hooks',$hook);

?>