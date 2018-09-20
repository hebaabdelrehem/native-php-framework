<?php

require ('includes/hooks/Hooks.functions.class.php');
include_once "includes/hooks/hooks.class.php";

$hook = new phphooks();

$sql = "SELECT filename FROM plugins WHERE action = 1";
$active_plugins = $minative_mysqliDB -> selectall($sql);


if ($active_plugins) {
	foreach ($active_plugins as $active_plugin)
		$plugins[] = $active_plugin['filename'];
} else {$plugins = '';
}

$hook -> active_plugins = $plugins;

$hook -> set_hooks(array('add_Js','add_Menu', 'mainpage', 'sidemenu', 'add_Settings', 'add_SettingsTpl', 'mainhook3', 'with_args', 'filter', 'add_Menu_admin'));

$hook -> load_plugins();

function add_hook($tag, $function, $priority = 10) {
	global $hook;
	$hook -> add_hook($tag, $function, $priority);
}

function register_plugin($plugin_id, $data) {
	global $hook;
	$hook -> register_plugin($plugin_id, $data);
}

$smarty -> assign('hooks', $hook);
