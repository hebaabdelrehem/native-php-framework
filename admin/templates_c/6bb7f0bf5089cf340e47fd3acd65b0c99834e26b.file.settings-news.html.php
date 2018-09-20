<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-09 22:45:58
         compiled from "C:\xampp\htdocs\minative\plugins\news\templates\settings-news.html" */ ?>
<?php /*%%SmartyHeaderCode:20064566155f855e871-56380562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bb7f0bf5089cf340e47fd3acd65b0c99834e26b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\plugins\\news\\templates\\settings-news.html',
      1 => 1449697556,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20064566155f855e871-56380562',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566155f859d088_52438771',
  'variables' => 
  array (
    'stickyen' => 0,
    'normalen' => 0,
    'stickynum' => 0,
    'normalnum' => 0,
    'newsprint' => 0,
    'newssaveas' => 0,
    'newsattachmenten' => 0,
    'newsattachmentnum' => 0,
    'newsattachmentsize' => 0,
    'newsattachmenttypes' => 0,
    'newseditor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566155f859d088_52438771')) {function content_566155f859d088_52438771($_smarty_tpl) {?><div class="headingcust">
	<i class="glyphicon glyphicon-cog"></i> General settings
</div>
<form role="form" class="form-horizontal" id="updatesettings" name="updatesettings" action="settings.php?act=edit">
	<input type="hidden" value="news" name="group" />
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable sticky news</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['stickyen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['stickyen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="stickyen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="stickyen" id="stickyen" value="<?php echo $_smarty_tpl->tpl_vars['stickyen']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable normal news</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['normalen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['normalen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="normalen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> 
				<input name="normalen" id="normalen" value="<?php echo $_smarty_tpl->tpl_vars['normalen']->value;?>
" type="hidden"/>
				</label>
			<dfn>Refuse to repeat email address for more than one user during registration process.</dfn>
			
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Maximum number of sticky news</label>
			<output id="stickynumaa" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['stickynum']->value;?>

			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['stickynum']->value;?>
" type = "range" min="1" max="20" onchange="stickynumaa.value=value" name="stickynum"/>
			<dfn>Profile picture allowed types.</dfn>

		</div>
	</div>
	
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Maximum number of normal news</label>
			<output id="normalnumaa" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['normalnum']->value;?>

			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['normalnum']->value;?>
" type = "range" min="1" max="20" onchange="normalnumaa.value=value" name="normalnum"/>
			<dfn>Profile picture allowed types.</dfn>

		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> News extra
	</div>

	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable print button</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['newsprint']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['newsprint']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="newsprint.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="newsprint" id="newsprint" value="<?php echo $_smarty_tpl->tpl_vars['newsprint']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable save as button</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['newssaveas']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['newssaveas']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="newssaveas.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="newssaveas" id="newssaveas" value="<?php echo $_smarty_tpl->tpl_vars['newssaveas']->value;?>
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
			<label>Allow pictures upload</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['newsattachmenten']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['newsattachmenten']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="newsattachmenten.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> 
				<input name="newsattachmenten" id="newsattachmenten" value="<?php echo $_smarty_tpl->tpl_vars['newsattachmenten']->value;?>
" type="hidden"/>
				</label>
			<dfn>Allow users to upload profile picture.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Maximum nubmer of pictures</label>
			<output id="newsattachmentnumaa" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['newsattachmentnum']->value;?>
 file
			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['newsattachmentnum']->value;?>
" type = "range" min="1" max="10" onchange="newsattachmentnumaa.value=value" name="newsattachmentnum"/>
			<dfn>Profile picture allowed types.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Allowed pictures size</label>
			<output id="newsattachmentsizeaa" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['newsattachmentsize']->value;?>
 MB
			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['newsattachmentsize']->value;?>
" type = "range" min="1" max="20" onchange="newsattachmentsizeaa.value=value" name="newsattachmentsize"/>
			<dfn>Profile picture allowed types.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Allowed pictures types</label>
			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['newsattachmenttypes']->value;?>
" name="newsattachmenttypes">
			<dfn>Profile picture allowed types.</dfn>

		</div>

	</div>
	<div class="col-md-12">
		<div class="alert bg-primary" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span> News attachment folder is: "../contents/news/"

		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Use Editor
	</div>

	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Use editor with news</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['newseditor']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['newseditor']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="newseditor.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="newseditor" id="newseditor" value="<?php echo $_smarty_tpl->tpl_vars['newseditor']->value;?>
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
