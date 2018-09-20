<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-18 23:36:49
         compiled from "C:\xampp\htdocs\minative\admin\templates\settings-registration.html" */ ?>
<?php /*%%SmartyHeaderCode:1958564258eb10d860-53956431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c8ec3b69b5b37949da6ca7f3c6518664764b984' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\settings-registration.html',
      1 => 1447886207,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1958564258eb10d860-53956431',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564258eb157bf2_84027261',
  'variables' => 
  array (
    'enablereg' => 0,
    'uniqueemail' => 0,
    'uniqueusername' => 0,
    'disabledusernames' => 0,
    'mailconfirm' => 0,
    'adminconfirm' => 0,
    'sendwellcommail' => 0,
    'datagroup' => 0,
    'i' => 0,
    'newusersgroup' => 0,
    'uploaduseravator' => 0,
    'avatortypes' => 0,
    'editavator' => 0,
    'avatormaxsize' => 0,
    'tosactivate' => 0,
    'termspagelink' => 0,
    'termscontent' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564258eb157bf2_84027261')) {function content_564258eb157bf2_84027261($_smarty_tpl) {?>
<div class="headingcust">
	<i class="glyphicon glyphicon-cog"></i> Main registration settings
</div>
<form role="form" class="form-horizontal" id="updatesettings" name="updatesettings" action="settings.php?act=edit">
	<input type="hidden" value="regsettings" name="group" />
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable registration</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['enablereg']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['enablereg']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="enableregvalue.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="enablereg" id="enableregvalue" value="<?php echo $_smarty_tpl->tpl_vars['enablereg']->value;?>
" type="hidden"/>
			</label>
			<dfn>Enable new users to access to register page and sign up an account in you site.</dfn>
		</div>

		<div class="form-group">
			<label>Unique email</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['uniqueemail']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['uniqueemail']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="uniqueemail.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<dfn>Refuse to repeat email address for more than one user during registration process.</dfn>
			<input name="uniqueemail" id="uniqueemail" value="<?php echo $_smarty_tpl->tpl_vars['uniqueemail']->value;?>
" type="hidden"/>
		</div>

		<div class="form-group">
			<label>Unique username</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['uniqueusername']->value=="1") {?>checked<?php }?> value="1" name="uniqueusername"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<dfn>Refuse to repeat username for more than one user during registration process.</dfn>

		</div>

		<div class="form-group">
			<label>Disabled usernames</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['disabledusernames']->value;?>
" name="disabledusernames">
			<dfn>Usernames that not allawed to be registered with.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">

		<div class="form-group">
			<label>Mail confirmation</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['mailconfirm']->value=="1") {?>checked<?php }?> value="1" name="mailconfirm"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<dfn>Force new users to confirm the email address they entered before activating the new account.</dfn>

		</div>

		<div class="form-group">
			<label>Administration confirmation</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['adminconfirm']->value=="1") {?>checked<?php }?> value="1" name="adminconfirm"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<dfn>New users will be activated after administration confirmation from admin panel.</dfn>

		</div>
		<div class="form-group">
			<label>Send wellcome mail</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['sendwellcommail']->value=="1") {?>checked<?php }?> value="1" name="sendwellcommail"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<dfn>Send a wellcome mail to wellcome new users after registration process.</dfn>

		</div>
		<div class="form-group">
			<label>New users group</label>

			<select class="form-control" name="newusersgroup">
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datagroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['newusersgroup']->value==$_smarty_tpl->tpl_vars['i']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['groupname'];?>
</option>
				<?php } ?>
			</select>
			<dfn>User group assigned to new users.</dfn>

		</div>

	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Users images upload
	</div>
	<div class="col-md-6 settingdiv">

		<div class="form-group">
			<label>Upload user avator</label>
				<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['uploaduseravator']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['uploaduseravator']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="uploaduseravator.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="uploaduseravator" id="uploaduseravator" value="<?php echo $_smarty_tpl->tpl_vars['uploaduseravator']->value;?>
" type="hidden"/>
			<dfn>Allow users to upload profile picture.</dfn>

		</div>

		<div class="form-group" style="padding-bottom: 14px">
			<label>Allowed avator types</label>
			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['avatortypes']->value;?>
" name="avatortypes">
			<dfn>Profile picture allowed types.</dfn>

		</div>

	</div>
	<div class="col-md-6 settingdiv">

		<div class="form-group">
			<label>Edit user avator</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['editavator']->value=="1") {?>checked<?php }?> value="1" name="editavator"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<dfn>Allow users to upload profile picture.</dfn>

		</div>

		<div class="form-group">
			<label>Allowed avator max size (MB)</label>
			<output id="rangevalue" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['avatormaxsize']->value;?>
 MB
			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['avatormaxsize']->value;?>
" type = "range" min="0" max="100" onchange="rangevalue.value=value" name="avatormaxsize"/>

			<dfn>Profile picture allowed size.</dfn>

		</div>
	</div>
	<div class="col-md-12">
		<div class="alert bg-primary" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span> Avators images folder is: "../contents/avators"
			
		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Registration terms
	</div>

	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 29px">
			<label>Activate registration terms </label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['tosactivate']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['tosactivate']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="tosactivate.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span>
				<input name="tosactivate" id="tosactivate" value="<?php echo $_smarty_tpl->tpl_vars['tosactivate']->value;?>
" type="hidden"/>
			</label>
			<dfn>The terms user will agree when registration to be able to use the website.</dfn>
		</div>
	</div>

	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Registration terms page link</label>
			<input class="form-control" name="termspagelink" value="<?php echo $_smarty_tpl->tpl_vars['termspagelink']->value;?>
">
			<dfn>Meta keyword to be used by search engiens.</dfn>
		</div>
	</div>
	<div class="col-md-12 settingdiv">
		<div class="form-group">
			<label>Or write registration terms here</label>
			<textarea class="form-control" rows="12" name="termscontent">
			<?php echo $_smarty_tpl->tpl_vars['termscontent']->value;?>

			</textarea>
			<dfn>Meta keyword to be used by search engiens.</dfn>
		</div>
	</div>
	
	<div class="col-md-12 tcenter settingbutdiv">
		<button type="submit" class="btn btn-primary" id="submit">
			Update
		</button>
	</div>
</form>
<?php }} ?>
