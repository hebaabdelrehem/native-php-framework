<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-01 08:54:28
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\menuseditor.html" */ ?>
<?php /*%%SmartyHeaderCode:20566565ca77c596263-72956105%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '31a39fa42c9886743bcb59ea983efeda855fbb9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\menuseditor.html',
      1 => 1448956463,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20566565ca77c596263-72956105',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_565ca77c697f90_88794015',
  'variables' => 
  array (
    'count' => 0,
    'i' => 0,
    'menusdata' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565ca77c697f90_88794015')) {function content_565ca77c697f90_88794015($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="">Menus Maker</li>
                <li class="active">Menus editor</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
                <?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				
			</div>
             <div class="col-lg-12">
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Menus List : You have (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 menus)
					<a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-status="1" href="menus.php?act=addmenu" class="btn btn-primary pull-right">
                                    <i class="glyphicon glyphicon-plus "></i> Add menu</a>	
						</div>
					<div class="panel-body">
						<div class="row">
						<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menusdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['i']->value['url']=='#') {?>
                           
                           
                           <div class="col-md-3">
				<div class="panel panel-default pagespanel2">
					<div class="panel-heading">
						<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>

					</div>
					<div class="panel-body">
						<ul>
							<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuschild'.($_smarty_tpl->tpl_vars['i']->value['id'])]->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
							<li><?php echo $_smarty_tpl->tpl_vars['j']->value['name'];?>
</li>
							<?php } ?>
						</ul>
					</div>
					
				</div>
			</div>
                         <?php }?>
                        <?php } ?>
					</div></div>
				</div>
			</div>
		</div>
    </div>
           </div>
</div>
<?php }} ?>
