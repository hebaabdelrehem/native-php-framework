<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-29 06:04:56
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\settings-pagesmanager.html" */ ?>
<?php /*%%SmartyHeaderCode:164615652ccf2a5ae15-31764759%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fae3061bba6ef8b9e3eb1912eaf2fbdaf330ce6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\settings-pagesmanager.html',
      1 => 1448773490,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164615652ccf2a5ae15-31764759',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5652ccf2c8d698_17965491',
  'variables' => 
  array (
    'pmangen' => 0,
    'pmangmenuen' => 0,
    'pmangprint' => 0,
    'pmangsaveas' => 0,
    'pmangsaveaspdf' => 0,
    'pmangattachment' => 0,
    'pmangattachmentnumber' => 0,
    'pmangattachmentsize' => 0,
    'pmangattachmenttypes' => 0,
    'pmangeditor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652ccf2c8d698_17965491')) {function content_5652ccf2c8d698_17965491($_smarty_tpl) {?><div class="headingcust">
	<i class="glyphicon glyphicon-cog"></i> General settings
</div>
<form role="form" class="form-horizontal" id="updatesettings" name="updatesettings" action="settings.php?act=edit">
	<input type="hidden" value="pmanagersettings" name="group" />
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable pages system</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['pmangen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['pmangen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="pmangen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="pmangen" id="pmangen" value="<?php echo $_smarty_tpl->tpl_vars['pmangen']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>List pages admin type</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['pmangmenuen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['pmangmenuen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="pmangmenuen.value=value"/>
				<span class="switch-label" data-on="Grid" data-off="Table"></span> <span class="switch-handle"></span> 
				<input name="pmangmenuen" id="pmangmenuen" value="<?php echo $_smarty_tpl->tpl_vars['pmangmenuen']->value;?>
" type="hidden"/>
				</label>
			<dfn>Refuse to repeat email address for more than one user during registration process.</dfn>
			
		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Pages extra
	</div>

	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable print button</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['pmangprint']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['pmangprint']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="pmangprint.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="pmangprint" id="pmangprint" value="<?php echo $_smarty_tpl->tpl_vars['pmangprint']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable save as button</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['pmangsaveas']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['pmangsaveas']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="pmangsaveas.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="pmangsaveas" id="pmangsaveas" value="<?php echo $_smarty_tpl->tpl_vars['pmangsaveas']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable save as pdf button</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['pmangsaveaspdf']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['pmangsaveaspdf']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="pmangsaveaspdf.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="pmangsaveaspdf" id="pmangsaveaspdf" value="<?php echo $_smarty_tpl->tpl_vars['pmangsaveaspdf']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Attachments
	</div>
	<div class="col-md-6 settingdiv">

		<div class="form-group" style="padding-bottom: 37px;">
			<label>Allow attachment with pages</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['pmangattachment']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['pmangattachment']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="pmangattachment.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> 
				<input name="pmangattachment" id="pmangattachment" value="<?php echo $_smarty_tpl->tpl_vars['pmangattachment']->value;?>
" type="hidden"/>
				</label>
			<dfn>Allow users to upload profile picture.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Maximum nubmer of attached files</label>
			<output id="pmangattachmentnumberaa" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['pmangattachmentnumber']->value;?>
 file
			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['pmangattachmentnumber']->value;?>
" type = "range" min="1" max="10" onchange="pmangattachmentnumberaa.value=value" name="pmangattachmentnumber"/>
			<dfn>Profile picture allowed types.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Allowed attachment size</label>
			<output id="pmangattachmentsizeaa" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['pmangattachmentsize']->value;?>
 MB
			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['pmangattachmentsize']->value;?>
" type = "range" min="1" max="20" onchange="pmangattachmentsizeaa.value=value" name="pmangattachmentsize"/>
			<dfn>Profile picture allowed types.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Allowed attachmet types</label>
			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['pmangattachmenttypes']->value;?>
" name="pmangattachmenttypes">
			<dfn>Profile picture allowed types.</dfn>

		</div>

	</div>
	<div class="col-md-12">
		<div class="alert bg-primary" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span> Pages attachment folder is: "../contents/pagesmanger"

		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Use Editor
	</div>

	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Use editor with pages</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['pmangeditor']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['pmangeditor']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="pmangeditor.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="pmangeditor" id="pmangeditor" value="<?php echo $_smarty_tpl->tpl_vars['pmangeditor']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>

	<div class="col-md-12 tcenter settingbutdiv">
		<button type="submit" class="btn btn-primary" id="submit">
			Update
		</button>
	</div>
</form>
<?php }} ?>
