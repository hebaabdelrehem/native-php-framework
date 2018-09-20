<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-08 10:37:14
         compiled from "plugins\news\templates\sticky.html" */ ?>
<?php /*%%SmartyHeaderCode:19407565f0d1cbfc1a1-23007550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8fa2147c6e01239ca3ec5772afbc122da3b5651' => 
    array (
      0 => 'plugins\\news\\templates\\sticky.html',
      1 => 1449567423,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19407565f0d1cbfc1a1-23007550',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_565f0d1cf20d56_25782264',
  'variables' => 
  array (
    'stickyData' => 0,
    'i' => 0,
    'scripturl' => 0,
    'news' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565f0d1cf20d56_25782264')) {function content_565f0d1cf20d56_25782264($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\minative\\includes\\smarty\\plugins\\modifier.truncate.php';
?><div class="col-sm-9 col-md-9 col-lg-9">
	<div class="blocksheader">
		<h2>Sticky news</h2>
	</div>
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stickyData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['news']->key;
?>
			<li data-target="#carousel-example-generic" data-slide-to="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
" class="<?php if ($_smarty_tpl->tpl_vars['i']->value=='0') {?>active<?php }?>"></li>
			<?php } ?>
			
		</ol>

		
		
		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<?php  $_smarty_tpl->tpl_vars['news'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['news']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stickyData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['news']->key => $_smarty_tpl->tpl_vars['news']->value) {
$_smarty_tpl->tpl_vars['news']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['news']->key;
?>
			<div class="item <?php if ($_smarty_tpl->tpl_vars['i']->value=='0') {?>active<?php }?>">
				<img src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
contents/news/<?php echo $_smarty_tpl->tpl_vars['news']->value['newsFiles'];?>
" alt="...">
				<div class="carousel-caption">
					<h1><?php echo $_smarty_tpl->tpl_vars['news']->value['newsTitle'];?>
</h1>
					<p>
						<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['news']->value['newsBrief'],120," ...",true);?>

					</p>
				</div>
			</div>
			<?php } ?>

		</div>

		
	</div>
</div>

<?php }} ?>
