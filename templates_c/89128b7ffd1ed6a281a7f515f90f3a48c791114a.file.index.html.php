<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-07 19:24:34
         compiled from "C:\xampp\htdocs\minative\styles\minative\index.html" */ ?>
<?php /*%%SmartyHeaderCode:6624564fa28d5455a3-93450218%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89128b7ffd1ed6a281a7f515f90f3a48c791114a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\index.html',
      1 => 1449512672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6624564fa28d5455a3-93450218',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fa28d73d496_54869670',
  'variables' => 
  array (
    'hooks' => 0,
    'ph_noplugins' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fa28d73d496_54869670')) {function content_564fa28d73d496_54869670($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include 'C:\\xampp\\htdocs\\minative\\includes\\smarty\\plugins\\modifier.sortby.php';
?><section>
	<div class="container">
		<div class="row">
			<?php echo $_smarty_tpl->getSubTemplate ("sidemenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


			<?php if (empty($_smarty_tpl->tpl_vars['hooks']->value->mainpage)) {?>
			<div class="col-md-9">
				<div id="output" class="alert alert-success message3">
					<?php echo $_smarty_tpl->tpl_vars['ph_noplugins']->value;?>

				</div>
				
			</div>

			<?php } else { ?>
			<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->mainpage,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
			<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['i']->value['tpl']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<?php } ?>
			<?php }?>
			<div style="clear: both"></div>
			<?php echo $_smarty_tpl->getSubTemplate ("compprof.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>

	</div>
</section>

<?php }} ?>
