<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-23 05:49:27
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\settings-company.html" */ ?>
<?php /*%%SmartyHeaderCode:1845356529ad7d17752-17082833%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faef4015ea2e6f76fd6cbde804ad5b7269870389' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\settings-company.html',
      1 => 1448245918,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1845356529ad7d17752-17082833',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'compfullname' => 0,
    'compmanname' => 0,
    'compmantit' => 0,
    'compcomlice' => 0,
    'compactivities' => 0,
    'mainbrabadd' => 0,
    'mainlandlinephone' => 0,
    'mainmobilephone' => 0,
    'mainfax' => 0,
    'compskype' => 0,
    'mainemail' => 0,
    'compfacebooklink' => 0,
    'compfacebooklinken' => 0,
    'comptwitterlink' => 0,
    'comptwitterlinken' => 0,
    'compyoutubelink' => 0,
    'compyoutubelinken' => 0,
    'compgoogleplink' => 0,
    'compgoogleplinken' => 0,
    'complinkedinlink' => 0,
    'complinkedinlinken' => 0,
    'comppinterestlink' => 0,
    'comppinterestlinken' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56529ad7e8e7a8_13942988',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56529ad7e8e7a8_13942988')) {function content_56529ad7e8e7a8_13942988($_smarty_tpl) {?><div class="headingcust">
	<i class="glyphicon glyphicon-cog"></i> Company/Website data
</div>

<form role="form" class="form-horizontal" id="updatesettings" name="updatesettings" action="settings.php?act=edit">
	<input type="hidden" value="compprofsettings" name="group" />

	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Company/Website full name</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['compfullname']->value;?>
" name="compfullname">
			<dfn>Your company/website full name, ex: MiNative for information systems co.</dfn>

		</div>
		<div class="form-group">
			<label>Manager name</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['compmanname']->value;?>
" name="compmanname">
			<dfn>Your company/website manager name.</dfn>

		</div>
		<div class="form-group">
			<label>Manager title</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['compmantit']->value;?>
" name="compmantit">
			<dfn>Your company/website manager title, ex: Founder, GM, CEO.</dfn>

		</div>
		<div class="form-group">
			<label>Commercial license number</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['compcomlice']->value;?>
" name="compcomlice">
			<dfn>Your company/website Commercial license number, ex: 86385.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 25px">
			<label>Company/Website activities</label>
			<textarea class="form-control" rows="18" name="compactivities"><?php echo $_smarty_tpl->tpl_vars['compactivities']->value;?>
</textarea>									

 			<dfn>Your company/website activities that it setuped for.</dfn>

		</div>
	</div>
	
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Contact informations
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Main branch address</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['mainbrabadd']->value;?>
" name="mainbrabadd">
			<dfn>Your company main branch address.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Main landline phone</label>

			<input class="form-control" placeholder="" value=<?php echo $_smarty_tpl->tpl_vars['mainlandlinephone']->value;?>
 name="mainlandlinephone">
			<dfn>Your company main landline phone.</dfn>

		</div>

	</div>
	
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Main mobile phone</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['mainmobilephone']->value;?>
" name="mainmobilephone">
			<dfn>Your company main mobile phone.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Main fax number</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['mainfax']->value;?>
" name="mainfax">
			<dfn>Your company fax number.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Skype account/number</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['compskype']->value;?>
" name="compskype">
			<dfn>Your company account or number on skype.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Main email address</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['mainemail']->value;?>
" name="mainemail">
			<dfn>Your company main email address.</dfn>

		</div>
	</div>
	
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Social networks data
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Facebook</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['compfacebooklink']->value;?>
" name="compfacebooklink">
			

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 19px;">
			<label>Enable facebook link</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['compfacebooklinken']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['compfacebooklinken']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="compfacebooklinken.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="compfacebooklinken" id="compfacebooklinken" value="<?php echo $_smarty_tpl->tpl_vars['compfacebooklinken']->value;?>
" type="hidden"/>
			<dfn>Enable facebook link to appear to users.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Twitter</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['comptwitterlink']->value;?>
" name="comptwitterlink">
			

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group"  style="padding-bottom: 19px;">
			<label>Enable twitter link</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['comptwitterlinken']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['comptwitterlinken']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="comptwitterlinken.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="comptwitterlinken" id="comptwitterlinken" value="<?php echo $_smarty_tpl->tpl_vars['comptwitterlinken']->value;?>
" type="hidden"/>
			<dfn>Enable twitter link to appear to users.</dfn>

		</div>
	</div>
	
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Youtube</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['compyoutubelink']->value;?>
" name="compyoutubelink">
			

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group"  style="padding-bottom: 19px;">
			<label>Enable youtube link</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['compyoutubelinken']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['compyoutubelinken']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="compyoutubelinken.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="compyoutubelinken" id="compyoutubelinken" value="<?php echo $_smarty_tpl->tpl_vars['compyoutubelinken']->value;?>
" type="hidden"/>
			<dfn>Enable youtube link to appear to users.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Google+</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['compgoogleplink']->value;?>
" name="compgoogleplink">
			

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group"  style="padding-bottom: 19px;">
			<label>Enable google+ link</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['compgoogleplinken']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['compgoogleplinken']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="compgoogleplinken.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="compgoogleplinken" id="compgoogleplinken" value="<?php echo $_smarty_tpl->tpl_vars['compgoogleplinken']->value;?>
" type="hidden"/>
			<dfn>Enable google+ link to appear to users.</dfn>

		</div>
	</div>
	
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Linkedin</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['complinkedinlink']->value;?>
" name="complinkedinlink">
			

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group"  style="padding-bottom: 19px;">
			<label>Enable Linkedin link</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['complinkedinlinken']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['complinkedinlinken']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="complinkedinlinken.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="complinkedinlinken" id="complinkedinlinken" value="<?php echo $_smarty_tpl->tpl_vars['complinkedinlinken']->value;?>
" type="hidden"/>
			<dfn>Enable Linkedin link to appear to users.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Pinterest</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['comppinterestlink']->value;?>
" name="comppinterestlink">
			

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group"  style="padding-bottom: 19px;">
			<label>Enable Pinterest link</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['comppinterestlinken']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['comppinterestlinken']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="comppinterestlinken.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="comppinterestlinken" id="comppinterestlinken" value="<?php echo $_smarty_tpl->tpl_vars['comppinterestlinken']->value;?>
" type="hidden"/>
			<dfn>Enable Pinterest link to appear to users.</dfn>

		</div>
	</div>
	<div class="col-md-12 tcenter settingbutdiv">
		<button type="submit" class="btn btn-primary" id="submit">
			Update
		</button>
	</div>

</form>
<?php }} ?>
