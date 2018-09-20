<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-05 21:08:56
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\head.html" */ ?>
<?php /*%%SmartyHeaderCode:17169566344586c6701-40239064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fbd4a7d9939c8928e7b57063e56c415c3c0a216' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\head.html',
      1 => 1449148523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17169566344586c6701-40239064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scripturl' => 0,
    'adminmainstyle' => 0,
    'hooks' => 0,
    'i' => 0,
    'sitename' => 0,
    'pagetitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566344587c0747_43223554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566344587c0747_43223554')) {function content_566344587c0747_43223554($_smarty_tpl) {?><!DOCTYPE html>
<html>
	<head>

		<link href="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/css/datepicker3.css" rel="stylesheet">
		<link href="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/css/styles.css" rel="stylesheet">

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/js/jquery-ui.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/chart.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/chart-data.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/easypiechart.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/easypiechart-data.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>

		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/bootstrap-table.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
js/sha512.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/JavaScript" src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
js/forms.js"><?php echo '</script'; ?>
>

		<!-- tiymcse -->
		<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>

		<link href="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/css/bootstrap-table.css" rel="stylesheet">
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/jquery.validate.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/main.js"><?php echo '</script'; ?>
>


		<?php if (!empty($_smarty_tpl->tpl_vars['hooks']->value->add_Js)) {?>
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hooks']->value->add_Js; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		
		<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['i']->value['file'];?>
"><?php echo '</script'; ?>
>
		<?php } ?>
		<?php }?>

		<!--[if lt IE 9]>
		<?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
		<![endif]-->
		<meta charset="UTF-8">
		<title><?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</title>
	</head>

	<body>
<?php }} ?>
