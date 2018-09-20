<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-23 03:25:54
         compiled from "C:\xampp\htdocs\minative\admin\templates\settings-general.html" */ ?>
<?php /*%%SmartyHeaderCode:3329564252b47187c5-16319588%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b3ca4d620cecb28358131e4a64cff17fbb8f2b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\settings-general.html',
      1 => 1448245552,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3329564252b47187c5-16319588',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564252b477e0e7_47169701',
  'variables' => 
  array (
    'sitename' => 0,
    'siteslogn' => 0,
    'copyright' => 0,
    'copyrighten' => 0,
    'sitelogopath' => 0,
    'siteurl' => 0,
    'scriptfolder' => 0,
    'adminmail' => 0,
    'modreweiteen' => 0,
    'cacheen' => 0,
    'metadisc' => 0,
    'metakey' => 0,
    'closing' => 0,
    'closeurl' => 0,
    'closingmessage' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564252b477e0e7_47169701')) {function content_564252b477e0e7_47169701($_smarty_tpl) {?><div class="headingcust">
	<i class="glyphicon glyphicon-cog"></i> General settings
</div>

<form role="form" class="form-horizontal" id="updatesettings" name="updatesettings" action="settings.php?act=edit">
	<input type="hidden" value="generalsettings" name="group" />

	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Site Name</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
" name="sitename">
			<dfn>Your website/company name, ex: MiNative Ltd.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Site sLogn</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['siteslogn']->value;?>
" name="siteslogn">
			<dfn>Your website/company slogn, ex: Exeeding limits.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Copyrights</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>
" name="copyright">
			<dfn>The copyrights of your website.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 29px">
			<label>Enable Copyrights</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['copyrighten']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['copyrighten']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="copyrighten.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="copyrighten" id="copyrighten" value="<?php echo $_smarty_tpl->tpl_vars['copyrighten']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Website Logo</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['sitelogopath']->value;?>
" name="sitelogopath">
			<dfn>Your website/company logo to be used in your website.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px;">
			<div class="logo2">
				<a href="index.php"> <img src="..<?php echo $_smarty_tpl->tpl_vars['sitelogopath']->value;?>
" /> </a>
			</div>
		</div>
	</div>
	
	
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Url and email settings
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Site Url</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" name="siteurl">
			<dfn>Your website domain name, ex: http://minative.com.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Script folder</label>

			<input class="form-control" placeholder="" value=<?php echo $_smarty_tpl->tpl_vars['scriptfolder']->value;?>
 name="scriptfolder">
			<dfn>The folder contains minative script, ex: minative/.</dfn>

		</div>

	</div>
	
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Administrator mail</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['adminmail']->value;?>
" name="adminmail" type="email">
			<dfn>Main email for the website administrator.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="alert bg-danger" role="alert">
					<span class="glyphicon glyphicon-exclamation-sign"></span> 
					Becarfull when you editing the "Site url" and "Script folder" because if they are wrong or blank the website will
					not work probebly.
				</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Mod rewrite and cache
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable Mod Rewrite</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['modreweiteen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['modreweiteen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="modreweiteen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="modreweiteen" id="modreweiteen" value="<?php echo $_smarty_tpl->tpl_vars['modreweiteen']->value;?>
" type="hidden"/>
			<dfn>Changing the url of your website pages to match serch engines.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable cache</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['cacheen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['cacheen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="cacheen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="cacheen" id="cacheen" value="<?php echo $_smarty_tpl->tpl_vars['cacheen']->value;?>
" type="hidden"/>
			<dfn>By enabling cache you website will be cached in the server.</dfn>

		</div>
	</div>
	
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Search engine meta
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Meta Description</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['metadisc']->value;?>
" name="metadisc">
			<dfn>Meta description to be used by search engiens.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Meta keyword</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['metakey']->value;?>
" name="metakey">
			<dfn>Meta keyword to be used by search engiens.</dfn>

		</div>
	</div>

	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Web site closing
	</div>
	<div class="col-md-6 settingdiv">

		<div class="form-group" style="padding-bottom: 29px">
			<label>Close the website?</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['closing']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['closing']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="closvalue.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="close" id="closvalue" value="<?php echo $_smarty_tpl->tpl_vars['closing']->value;?>
" type="hidden"/>
			<dfn>If you want to close your website from users.</dfn>

		</div>
	
		<div class="form-group">
			<label>Closing redirect url</label>

			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['closeurl']->value;?>
" name="closeurl">
			<dfn>If you want your users to go to another website during closing.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Closing messages</label>
			<textarea class="form-control" rows="6" name="closingmessage"><?php echo $_smarty_tpl->tpl_vars['closingmessage']->value;?>
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
