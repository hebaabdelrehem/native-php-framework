<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-04 13:28:29
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\settings-plugins.html" */ ?>
<?php /*%%SmartyHeaderCode:1066556611de535f0c5-73536708%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c030524968b1176e74ffa3dd2afd3e52e57864cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\settings-plugins.html',
      1 => 1449232107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1066556611de535f0c5-73536708',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56611de6c063e3_50955291',
  'variables' => 
  array (
    'setgroup' => 0,
    'hooks' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56611de6c063e3_50955291')) {function content_56611de6c063e3_50955291($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>
	<li class="">
		Settings
	</li>
	<li class="active">
		Plugins Settings
	</li>
</ol>
</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Plugins settings <i class="glyphicon glyphicon-chevron-right" style="margin-right:0px !important;font-size: 14px"></i>
						
						<?php if (isset($_smarty_tpl->tpl_vars['setgroup']->value)) {?>
						
						<?php if (!empty($_smarty_tpl->tpl_vars['hooks']->value->add_Settings)) {?>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hooks']->value->add_Settings; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value['groupname'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['setgroup']->value==$_tmp1) {?>
							<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

							<?php }?>
							<?php } ?>
							<?php }?>

						<?php } else { ?>
						Choose plugin settings
						<?php }?>

						<button type="button" class="btn btn-primary pull-right menus-but" onClick="location.href='settings.php?setgroup=all'">
							<i class="glyphicon glyphicon-cog "></i> All main settings
						</button>
						
					</div>
					<div class="col-md-3">

						<div class="headingcust" style="margin-top: 15px">
							<i class="glyphicon glyphicon-th-list"></i> Plugins settings list
						</div>
						<ul class="todo-list settinglist">
							
							<?php if (!empty($_smarty_tpl->tpl_vars['hooks']->value->add_Settings)) {?>

							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hooks']->value->add_Settings; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
">
							<li class="todo-list-item">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-font"></i><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</label>
								</div>
							</li>
							</a>
							<?php } ?>
							<?php }?>

						</ul>
					</div>

					<div class="col-md-9">
						<div class="panel-body panelbodyedit tabssty">
							<?php if (isset($_smarty_tpl->tpl_vars['setgroup']->value)) {?>
							<?php if (!empty($_smarty_tpl->tpl_vars['hooks']->value->add_SettingsTpl)) {?>

							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hooks']->value->add_SettingsTpl; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value['setgroupname'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['setgroup']->value==$_tmp2) {?>
							
							<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value['tpl'];?>
<?php $_tmp3=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp3, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							
							<?php }?>
							<?php } ?>
							
							<?php }?>
							<?php } else { ?>
							<div class="alert bg-primary" role="alert">
							<span class="glyphicon glyphicon-info-sign"></span> Choose plugin settings
			
							</div>
							<?php }?>
							

						</div>

					</div>

				</div>

			</div>
		</div>

	</div>

<?php }} ?>
