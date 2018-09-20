<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-08 10:32:27
         compiled from "plugins\news\templates\important.html" */ ?>
<?php /*%%SmartyHeaderCode:79155665f028b41982-51158862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b841c4935c7434308c498c2d57df7d365a9a3ff' => 
    array (
      0 => 'plugins\\news\\templates\\important.html',
      1 => 1449567144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79155665f028b41982-51158862',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5665f028bce3a1_38706470',
  'variables' => 
  array (
    'importantData' => 0,
    'newsimp' => 0,
    'scripturl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5665f028bce3a1_38706470')) {function content_5665f028bce3a1_38706470($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\minative\\includes\\smarty\\plugins\\modifier.truncate.php';
?><div class="col-sm-12 col-md-12 col-lg-12" style="margin-top: 15px">
	<div class="blocksheader">
		<h2>Important news</h2>
	</div>
<?php  $_smarty_tpl->tpl_vars['newsimp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['newsimp']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['importantData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['newsimp']->key => $_smarty_tpl->tpl_vars['newsimp']->value) {
$_smarty_tpl->tpl_vars['newsimp']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['newsimp']->key;
?>
<div class="col-md-2">
<div class="blocksheader margin25">
			
<h2><?php echo $_smarty_tpl->tpl_vars['newsimp']->value['newsTitle'];?>
</h2>
</div> 
    <div class="block margin25">
        <img src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
contents/news/<?php echo $_smarty_tpl->tpl_vars['newsimp']->value['newsFiles'];?>
" style="height: 100px;">

        <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['newsimp']->value['newsBrief'],30," ...",true);?>
</p>
        <a href="#" class="btn btn-default moreinfo">More info</a>
    </div>
</div>
<?php } ?>
<div style="clear: both"></div>
</div><?php }} ?>
