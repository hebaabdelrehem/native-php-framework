<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-24 23:26:17
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\settings-ccenter.html" */ ?>
<?php /*%%SmartyHeaderCode:6785654e40920cee6-50763798%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e235b6cea6585aa8d49b83de767ea7a81f49978b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\settings-ccenter.html',
      1 => 1448246542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6785654e40920cee6-50763798',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ccentermenuhead' => 0,
    'ccenterlistusercp' => 0,
    'ccentermesslett' => 0,
    'attachmentmess' => 0,
    'attachmentreply' => 0,
    'ccenterattachmentnumber' => 0,
    'ccenterattachmentsize' => 0,
    'ccenterattachmenttypes' => 0,
    'ccenternotifymess' => 0,
    'ccenternotifyreply' => 0,
    'ccentereditorymess' => 0,
    'ccentereditoryreply' => 0,
    'ccenterautoreplyen' => 0,
    'ccenterautoreply' => 0,
    'ccentercloseauto' => 0,
    'ccentercloseautotime' => 0,
    'ccentercloseautoreplyen' => 0,
    'ccentercloseautoreply' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5654e4093c2747_40506509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5654e4093c2747_40506509')) {function content_5654e4093c2747_40506509($_smarty_tpl) {?><div class="headingcust">
	<i class="glyphicon glyphicon-cog"></i> Main center settings
</div>
<form role="form" class="form-horizontal" id="updatesettings" name="updatesettings" action="settings.php?act=edit">
	<input type="hidden" value="ccentersettings" name="group" />
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable messages menu in header</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ccentermenuhead']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['ccentermenuhead']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="ccentermenuhead.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="ccentermenuhead" id="ccentermenuhead" value="<?php echo $_smarty_tpl->tpl_vars['ccentermenuhead']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable messages list in usercp</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ccenterlistusercp']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['ccenterlistusercp']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="ccenterlistusercp.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> 
				<input name="ccenterlistusercp" id="ccenterlistusercp" value="<?php echo $_smarty_tpl->tpl_vars['ccenterlistusercp']->value;?>
" type="hidden"/>
				</label>
			<dfn>Refuse to repeat email address for more than one user during registration process.</dfn>
			
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Message title maximum letters</label>
			<output id="rangevalueaaa" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['ccentermesslett']->value;?>
 letter
			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['ccentermesslett']->value;?>
" type = "range" min="5" max="40" onchange="rangevalueaaa.value=value" name="ccentermesslett"/>
			<dfn>Profile picture allowed types.</dfn>

		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Attachments
	</div>
	<div class="col-md-6 settingdiv">

		<div class="form-group">
			<label>Allow attachment on message submit</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['attachmentmess']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['attachmentmess']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="attachmentmess.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> 
				<input name="attachmentmess" id="attachmentmess" value="<?php echo $_smarty_tpl->tpl_vars['attachmentmess']->value;?>
" type="hidden"/>
				</label>
			<dfn>Allow users to upload profile picture.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">

		<div class="form-group">
			<label>Allow attachment on reply submit</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['attachmentreply']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['attachmentreply']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="attachmentreply.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> 
				<input name="attachmentreply" id="attachmentreply" value="<?php echo $_smarty_tpl->tpl_vars['attachmentreply']->value;?>
" type="hidden"/>
				</label>
			<dfn>Allow users to upload profile picture.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Maximum nubmer of attached files</label>
			<output id="ccenterattachmentnumberaa" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['ccenterattachmentnumber']->value;?>
 file
			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['ccenterattachmentnumber']->value;?>
" type = "range" min="1" max="10" onchange="ccenterattachmentnumberaa.value=value" name="ccenterattachmentnumber"/>
			<dfn>Profile picture allowed types.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Allowed attachment size</label>
			<output id="ccenterattachmentsizeaa" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['ccenterattachmentsize']->value;?>
 MB
			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['ccenterattachmentsize']->value;?>
" type = "range" min="1" max="20" onchange="ccenterattachmentsizeaa.value=value" name="ccenterattachmentsize"/>
			<dfn>Profile picture allowed types.</dfn>

		</div>
	</div>
	<div class="col-md-12 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Allowed attachmet types</label>
			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['ccenterattachmenttypes']->value;?>
" name="ccenterattachmenttypes">
			<dfn>Profile picture allowed types.</dfn>

		</div>

	</div>
	<div class="col-md-12">
		<div class="alert bg-primary" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span> Contant center attachment folder is: "../contents/ccenter"

		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Notifications ( By email )
	</div>

	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Notify 'administraor' and 'user' on <b>message</b> submit</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ccenternotifymess']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['ccenternotifymess']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="ccenternotifymess.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="ccenternotifymess" id="ccenternotifymess" value="<?php echo $_smarty_tpl->tpl_vars['ccenternotifymess']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Notify 'administraor' and 'user' on <b>reply</b> submit</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ccenternotifyreply']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['ccenternotifyreply']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="ccenternotifyreply.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> 
				<input name="ccenternotifyreply" id="ccenternotifyreply" value="<?php echo $_smarty_tpl->tpl_vars['ccenternotifyreply']->value;?>
" type="hidden"/>
				</label>
			<dfn>Refuse to repeat email address for more than one user during registration process.</dfn>
			
		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Use Editor
	</div>

	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Use editor on message submit</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ccentereditorymess']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['ccentereditorymess']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="ccentereditorymess.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="ccentereditorymess" id="ccentereditorymess" value="<?php echo $_smarty_tpl->tpl_vars['ccentereditorymess']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Use editor on reply submit</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ccentereditoryreply']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['ccentereditoryreply']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="ccentereditoryreply.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> 
				<input name="ccentereditoryreply" id="ccentereditoryreply" value="<?php echo $_smarty_tpl->tpl_vars['ccentereditoryreply']->value;?>
" type="hidden"/>
				</label>
			<dfn>Refuse to repeat email address for more than one user during registration process.</dfn>
			
		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Automatic reply with new messages
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 129px">
			<label>Submit automatic reply with new messages</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ccenterautoreplyen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['ccenterautoreplyen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="ccenterautoreplyen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="ccenterautoreplyen" id="ccenterautoreplyen" value="<?php echo $_smarty_tpl->tpl_vars['ccenterautoreplyen']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Automatic new message reply</label>

			<textarea class="form-control" rows="6" name="ccenterautoreply"><?php echo $_smarty_tpl->tpl_vars['ccenterautoreply']->value;?>
</textarea>		
			<dfn>The content of the default email header.</dfn>

			
		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Message closing
	</div>
	
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 29px">
			<label>Close message automatic</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ccentercloseauto']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['ccentercloseauto']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="ccentercloseauto.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="ccentercloseauto" id="ccentercloseauto" value="<?php echo $_smarty_tpl->tpl_vars['ccentercloseauto']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Time to close message</label>
			<output id="ccentercloseautotimeaa" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['ccentercloseautotime']->value;?>
 Hour
			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['ccentercloseautotime']->value;?>
" type = "range" min="12" max="72" onchange="ccentercloseautotimeaa.value=value" name="ccentercloseautotime"/>
			<dfn>Profile picture allowed types.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 129px">
			<label>Submit automatic closing reply</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['ccentercloseautoreplyen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['ccentercloseautoreplyen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="ccentercloseautoreplyen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="ccentercloseautoreplyen" id="ccentercloseautoreplyen" value="<?php echo $_smarty_tpl->tpl_vars['ccentercloseautoreplyen']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Automatic message closing reply</label>

			<textarea class="form-control" rows="6" name="ccentercloseautoreply"><?php echo $_smarty_tpl->tpl_vars['ccentercloseautoreply']->value;?>
</textarea>		
			<dfn>The content of the default email header.</dfn>

			
		</div>
	</div>

	<div class="col-md-12 tcenter settingbutdiv">
		<button type="submit" class="btn btn-primary" id="submit">
			Update
		</button>
	</div>
</form>
<?php }} ?>
