<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-29 21:52:00
         compiled from "C:\xampp\htdocs\minative\styles\minative\head.html" */ ?>
<?php /*%%SmartyHeaderCode:23137564fa28aa55a18-22933885%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6668affda2cbd5de1729b861375033347611c12e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\head.html',
      1 => 1448830315,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23137564fa28aa55a18-22933885',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fa28abc8bf2_26135049',
  'variables' => 
  array (
    'ph_dir' => 0,
    'ph_langcode' => 0,
    'metadisc' => 0,
    'pagemetadisc' => 0,
    'metakey' => 0,
    'pagemetakey' => 0,
    'sitename' => 0,
    'pagetitle' => 0,
    'scripturl' => 0,
    'mainstyle' => 0,
    'stylewidth' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fa28abc8bf2_26135049')) {function content_564fa28abc8bf2_26135049($_smarty_tpl) {?><!DOCTYPE html>
<html dir="<?php echo $_smarty_tpl->tpl_vars['ph_dir']->value;?>
" lang="<?php echo $_smarty_tpl->tpl_vars['ph_langcode']->value;?>
">
<head>
	<!-- Meta charset -->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Meta content -->
	<meta name="author" content="Mina Atif" />
	<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metadisc']->value;?>
 - <?php if ($_smarty_tpl->tpl_vars['pagemetadisc']->value) {
echo $_smarty_tpl->tpl_vars['pagemetadisc']->value;
}?>" />
	<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['metakey']->value;?>
 - <?php if ($_smarty_tpl->tpl_vars['pagemetadisc']->value) {
echo $_smarty_tpl->tpl_vars['pagemetakey']->value;
}?>" />
	
	<!-- Meta IE Compatible -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<!-- Meta Moblie Compatible -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Site title and page title -->
	<title><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
    
	<!-- Bootstrap and CSS -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
styles/<?php echo $_smarty_tpl->tpl_vars['mainstyle']->value;?>
/css/bootstrap.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
styles/<?php echo $_smarty_tpl->tpl_vars['mainstyle']->value;?>
/css/font-awesome.min.css" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<?php echo '<script'; ?>
 src='https://www.google.com/recaptcha/api.js'><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
styles/<?php echo $_smarty_tpl->tpl_vars['mainstyle']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
styles/<?php echo $_smarty_tpl->tpl_vars['mainstyle']->value;?>
/js/style.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
js/sha512.js"><?php echo '</script'; ?>
> 
	
    
	<!-- tiymcse -->
	<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
	
	<!-- Main script -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
js/script.js"><?php echo '</script'; ?>
>
	
	<!-- Main CSS -->
	<style>
		.container {
			position: relative;
			width : <?php echo $_smarty_tpl->tpl_vars['stylewidth']->value;?>
px !important;
			}
	</style>
					
				
	<?php if ($_smarty_tpl->tpl_vars['ph_langcode']->value=='ar') {?>
	<!-- Bootstrap RTL Theme -->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
styles/<?php echo $_smarty_tpl->tpl_vars['mainstyle']->value;?>
/css/bootstrap-rtl.css">
	<?php }?>
	<link href="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
styles/<?php echo $_smarty_tpl->tpl_vars['mainstyle']->value;?>
/css/style-<?php echo $_smarty_tpl->tpl_vars['ph_langcode']->value;?>
.css" rel="stylesheet">
	
	<!-- Include all compiled plugins (below), or include individual files as needed and JS files -->
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
styles/<?php echo $_smarty_tpl->tpl_vars['mainstyle']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    
    
   
	<!-- Royal slider -->
	<link href="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
styles/<?php echo $_smarty_tpl->tpl_vars['mainstyle']->value;?>
/royalslider/royalslider.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
styles/<?php echo $_smarty_tpl->tpl_vars['mainstyle']->value;?>
/royalslider/rs-default.css" rel="stylesheet">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
styles/<?php echo $_smarty_tpl->tpl_vars['mainstyle']->value;?>
/royalslider/jquery.easing-1.3.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
styles/<?php echo $_smarty_tpl->tpl_vars['mainstyle']->value;?>
/royalslider/jquery.royalslider.min.js"><?php echo '</script'; ?>
>
</head>
<body id="page-cover">
	<?php }} ?>
