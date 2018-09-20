<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-26 07:06:33
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\settings-langstyle.html" */ ?>
<?php /*%%SmartyHeaderCode:22421565297fbef8780-31340863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca30cf34bba54056a58a754142c7c68e02780a74' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\settings-langstyle.html',
      1 => 1448517989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22421565297fbef8780-31340863',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_565297fc129551_79867525',
  'variables' => 
  array (
    'languages' => 0,
    'i' => 0,
    'mainlang' => 0,
    'allowlangswit' => 0,
    'stylesdirs' => 0,
    'f' => 0,
    'mainstyle' => 0,
    'stylewidth' => 0,
    'allowstyleswit' => 0,
    'overrideuserlangcache' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565297fc129551_79867525')) {function content_565297fc129551_79867525($_smarty_tpl) {?><form role="form" class="form-horizontal" id="updatesettings" name="updatesettings" action="settings.php?act=edit">
	<input type="hidden" value="langstyle" name="group" />
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Language settings
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Default language</label>

			<select class="form-control" name="mainlang">

				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['langcode'];?>
" <?php if ($_smarty_tpl->tpl_vars['mainlang']->value==$_smarty_tpl->tpl_vars['i']->value['langcode']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
				<?php } ?>
			</select>
			<dfn>The main language your website run with, from languages folder.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 29px">
			<label>Allow language switching</label>
			<label class="switch switch-left-right pull-right" s>
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['allowlangswit']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['allowlangswit']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="allowlangswit.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="allowlangswit" id="allowlangswit" value="<?php echo $_smarty_tpl->tpl_vars['allowlangswit']->value;?>
" type="hidden"/>
			<dfn>Allow users to switch bettween languages avaliable in languages folder.</dfn>

		</div>
	</div>
	<div class="col-md-12">
		<div class="alert bg-primary" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span> Uploading new language:
			<br> 
			You can upload new language by uploading the language *.php 
			file to <b>"languages folder"</b> in your script path, and go to the settings to activate it. 
			
		</div>
	</div>
	<div style="clear: both"></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Style settings
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 14px">
			<label>Default style</label>

			<select class="form-control" name="mainstyle">
				<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['stylesdirs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['mainstyle']->value==$_smarty_tpl->tpl_vars['f']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['f']->value;?>
</option>
				<?php } ?>
			</select>
			<dfn>The default style that the system will use when loading.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">

			<label>Style width (in pixels)</label>
			<output id="rangevalue" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['stylewidth']->value;?>
 PX
			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['stylewidth']->value;?>
" type = "range" min="700" max="1200" onchange="rangevalue.value=value" name="stylewidth"/>

			<dfn>The width of the style used as default style.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group"  style="padding-bottom: 20px">

			<label>Allow style switching</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['allowstyleswit']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['allowstyleswit']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="allowstyleswit.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="allowstyleswit" id="allowstyleswit" value="<?php echo $_smarty_tpl->tpl_vars['allowstyleswit']->value;?>
" type="hidden"/>
			<dfn>Allow users to switch bettween styles avaliable in styles folder.</dfn>

		</div>
	</div>
	<div class="col-md-12">
		<div class="alert bg-primary" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span> Uploading new style:
			<br> 
			You can upload new style by uploading the new style folder 
			to <b>"styles folder"</b> in your script path, and go to the settings to activate it. 
			
		</div>
	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Users action with language and styles
	</div>
	<div class="col-md-6 settingdiv">

		<div class="form-group"  style="padding-bottom: 39px">

			<label>Override user settings</label>

			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['overrideuserlangcache']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['overrideuserlangcache']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="overrideuserlangcache.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="overrideuserlangcache" id="overrideuserlangcache" value="<?php echo $_smarty_tpl->tpl_vars['overrideuserlangcache']->value;?>
" type="hidden"/>
			<dfn>Ignoring the users settings and force to use default language and style.</dfn>

		</div>
	</div>
	<div class="col-md-12 tcenter settingbutdiv">
		<button type="submit" class="btn btn-primary" id="submit">
			Update
		</button>
	</div>
</form>
<?php }} ?>
