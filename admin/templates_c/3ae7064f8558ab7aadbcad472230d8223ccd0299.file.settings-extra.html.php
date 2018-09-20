<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-23 09:39:46
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\settings-extra.html" */ ?>
<?php /*%%SmartyHeaderCode:278925652d0d2db1611-33950129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ae7064f8558ab7aadbcad472230d8223ccd0299' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\settings-extra.html',
      1 => 1448064313,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278925652d0d2db1611-33950129',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'exsearchen' => 0,
    'exdatetimeen' => 0,
    'exwelmessen' => 0,
    'exwelmess' => 0,
    'exweladven' => 0,
    'exweladv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5652d0d2e883c5_65990340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652d0d2e883c5_65990340')) {function content_5652d0d2e883c5_65990340($_smarty_tpl) {?><div class="headingcust">
	<i class="glyphicon glyphicon-cog"></i> Search & Date,Time settings
</div>

<form role="form" class="form-horizontal" id="updatesettings" name="updatesettings" action="settings.php?act=edit">
	<input type="hidden" value="extrasettings" name="group" />
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 29px">
			<label>Enable search</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['exsearchen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['exsearchen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="exsearchen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="exsearchen" id="exsearchen" value="<?php echo $_smarty_tpl->tpl_vars['exsearchen']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 29px">
			<label>Enable date and time</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['exdatetimeen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['exdatetimeen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="exdatetimeen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="exdatetimeen" id="exdatetimeen" value="<?php echo $_smarty_tpl->tpl_vars['exdatetimeen']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>

		</div>
	</div>
	
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Wellcome message settings
	</div>
	<div class="col-md-6 settingdiv">

		<div class="form-group" style="padding-bottom: 29px">
			<label>Enable welcome message</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['exwelmessen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['exwelmessen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="exwelmessen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="exwelmessen" id="exwelmessen" value="<?php echo $_smarty_tpl->tpl_vars['exwelmessen']->value;?>
" type="hidden"/>
			<dfn>If you want to close your website from users.</dfn>

		</div>
	
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Welcome message</label>
			<textarea class="form-control" rows="6" name="exwelmess"><?php echo $_smarty_tpl->tpl_vars['exwelmess']->value;?>
</textarea>									

 <dfn>Your closing message to view it to the users.</dfn>

		</div>

	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Advertisement settings 
	</div>
	<div class="col-md-6 settingdiv">

		<div class="form-group" style="padding-bottom: 29px">
			<label>Enable Advertisement</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['exweladven']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['exweladven']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="exweladven.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="exweladven" id="exweladven" value="<?php echo $_smarty_tpl->tpl_vars['exweladven']->value;?>
" type="hidden"/>
			<dfn>If you want to close your website from users.</dfn>

		</div>
	
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Advertisement content</label>
			<textarea class="form-control" rows="6" name="exweladv"><?php echo $_smarty_tpl->tpl_vars['exweladv']->value;?>
</textarea>									

 <dfn>Your closing message to view it to the users.</dfn>

		</div>
	</div>
	
	<div class="col-md-12 tcenter settingbutdiv">
		<button type="submit" class="btn btn-primary" id="submit">
			Update
		</button>
	</div>

</form>
<?php }} ?>
