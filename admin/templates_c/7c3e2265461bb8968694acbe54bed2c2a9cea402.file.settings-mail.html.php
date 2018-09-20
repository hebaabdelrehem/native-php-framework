<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-24 23:26:08
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\settings-mail.html" */ ?>
<?php /*%%SmartyHeaderCode:51215654e400cb1a30-31498662%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c3e2265461bb8968694acbe54bed2c2a9cea402' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\settings-mail.html',
      1 => 1447963560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51215654e400cb1a30-31498662',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mailen' => 0,
    'mailmethod' => 0,
    'smtpserver' => 0,
    'smtpuser' => 0,
    'smtppass' => 0,
    'smtport' => 0,
    'smtpauthreq' => 0,
    'smtpauthrtype' => 0,
    'sendermail' => 0,
    'maildefsubj' => 0,
    'defaultmailheader' => 0,
    'defaultmailfooter' => 0,
    'defaultmailbody' => 0,
    'defaultmailcss' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5654e400dc3178_24839673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5654e400dc3178_24839673')) {function content_5654e400dc3178_24839673($_smarty_tpl) {?><div class="headingcust">
	<i class="glyphicon glyphicon-cog"></i> General mail settings
</div>

<form role="form" class="form-horizontal" id="updatesettings" name="updatesettings" action="settings.php?act=edit">
	<input type="hidden" value="mailsettings" name="group" />

	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 29px;">
			<label>Enable mail sending</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['mailen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['mailen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="mailen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="mailen" id="mailen" value="<?php echo $_smarty_tpl->tpl_vars['mailen']->value;?>
" type="hidden"/>
			<dfn>Enable sending emails from your website to mail servers.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Mail sending method</label>

			<select class="form-control" name="mailmethod">
				<option value="phpmail" <?php if ($_smarty_tpl->tpl_vars['mailmethod']->value=="phpmail") {?>selected<?php }?>>phpmail</option>
				<option value="smtp" <?php if ($_smarty_tpl->tpl_vars['mailmethod']->value=="smtp") {?>selected<?php }?>>smtp</option>
			</select>
			<dfn>The method the system will use to send emails from your website.</dfn>

		</div>
	</div>
	
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Smtp settings
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Smtp server</label>
			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['smtpserver']->value;?>
" name="smtpserver">
			<dfn>The server name of your smtp service provider.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Smtp username</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['smtpuser']->value;?>
" name="smtpuser">
			<dfn>The username system will use to log into the smtp server.</dfn>

		</div>

	</div>
	
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Smtp password</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['smtppass']->value;?>
" name="smtppass">
			<dfn>The password system will use to log into the smtp server.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Smtp port</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['smtport']->value;?>
" name="smtport">
			<dfn>The port system will use to connect to the smtp server.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 29px;">
			<label>Smtp authentication required</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['smtpauthreq']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['smtpauthreq']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="smtpauthreq.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="smtpauthreq" id="smtpauthreq" value="<?php echo $_smarty_tpl->tpl_vars['smtpauthreq']->value;?>
" type="hidden"/>
			<dfn>If the smtp server required to authenticate when connecting to it.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Smtp authentication type</label>

			<select class="form-control" name="smtpauthrtype">
				<option value="nosec" <?php if ($_smarty_tpl->tpl_vars['smtpauthrtype']->value=="nosec") {?>selected<?php }?>>No security</option>
				<option value="SSL" <?php if ($_smarty_tpl->tpl_vars['smtpauthrtype']->value=="SSL") {?>selected<?php }?>>SSL</option>
				<option value="TLS" <?php if ($_smarty_tpl->tpl_vars['smtpauthrtype']->value=="TLS") {?>selected<?php }?>>TLS</option>
				<option value="ALS" <?php if ($_smarty_tpl->tpl_vars['smtpauthrtype']->value=="ALS") {?>selected<?php }?>>ALS</option>
			</select>
			<dfn>Type of autentication the system will use to connect to smtp server.</dfn>

		</div>
	</div>
	<div class="col-md-12">
		<div class="alert bg-primary" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span> Smtp settings:
			<br> 
			You can get the values of this settings from the smtp service provider. 
			
		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Mail header information
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Sender email</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['sendermail']->value;?>
" name="sendermail" type="email">
			<dfn>The email that will appear to email reciver when viewing the email.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Mail default subject</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['maildefsubj']->value;?>
" name="maildefsubj" type="text">
			<dfn>The subject system will use when sending emails.</dfn>

		</div>
	</div>
	
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Default Mail template
	</div>
	
	<div class="col-md-7 settingdiv">
		<div class="form-group">
			<label>Default Mail header</label>

			<textarea class="form-control" rows="5" name="defaultmailheader"><?php echo $_smarty_tpl->tpl_vars['defaultmailheader']->value;?>
</textarea>		
			<dfn>The content of the default email header.</dfn>

		</div>

		<div class="form-group">
			<label>Default Mail footer</label>

			<textarea class="form-control" rows="5" name="defaultmailfooter"><?php echo $_smarty_tpl->tpl_vars['defaultmailfooter']->value;?>
</textarea>		
			<dfn>The content of the default email footer.</dfn>

		</div>

		<div class="form-group">
			<label>Default Mail body</label>
			<textarea class="form-control" rows="10" name="defaultmailbody"><?php echo $_smarty_tpl->tpl_vars['defaultmailbody']->value;?>
</textarea>									

 			<dfn>The content of the default email body.</dfn>

		</div>

	</div>
	<div class="col-md-5 settingdiv">
		<div class="form-group">
			<label>Default Mail Css</label>

			<textarea class="form-control" rows="29" name="defaultmailcss"><?php echo $_smarty_tpl->tpl_vars['defaultmailcss']->value;?>
</textarea>		
			<dfn>The style of the default email.</dfn>

		</div>

	</div>

	<div class="col-md-12 tcenter settingbutdiv">
		<button type="submit" class="btn btn-primary" id="submit">
			Update
		</button>
	</div>

</form>
<?php }} ?>
