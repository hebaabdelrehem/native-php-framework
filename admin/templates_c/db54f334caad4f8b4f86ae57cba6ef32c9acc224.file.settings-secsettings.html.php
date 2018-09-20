<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-16 18:40:47
         compiled from "C:\xampp\htdocs\minative\admin\templates\settings-secsettings.html" */ ?>
<?php /*%%SmartyHeaderCode:53985649d709f133e5-60470671%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db54f334caad4f8b4f86ae57cba6ef32c9acc224' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\settings-secsettings.html',
      1 => 1447695645,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53985649d709f133e5-60470671',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5649d70a0cb026_83800404',
  'variables' => 
  array (
    'captchaen' => 0,
    'captchanumen' => 0,
    'captchaleten' => 0,
    'captchasounden' => 0,
    'captchareloaden' => 0,
    'captchabackcol' => 0,
    'captchafontcol' => 0,
    'passgen' => 0,
    'passlett' => 0,
    'passuplett' => 0,
    'passnum' => 0,
    'passsym' => 0,
    'passlength' => 0,
    'cbruteforceen' => 0,
    'cbruteip' => 0,
    'attemptsn' => 0,
    'attemptsblock' => 0,
    'cbrutemailadmin' => 0,
    'cbrutemailowner' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649d70a0cb026_83800404')) {function content_5649d70a0cb026_83800404($_smarty_tpl) {?><div class="headingcust">
	<i class="glyphicon glyphicon-cog"></i> Captcha settings
</div>

<form role="form" class="form-horizontal" id="updatesettings" name="updatesettings" action="settings.php?act=edit">
	<input type="hidden" value="secsettings" name="group" />

	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable captcha</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['captchaen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['captchaen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="captchaen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="captchaen" id="captchaen" value="<?php echo $_smarty_tpl->tpl_vars['captchaen']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable captcha numburs</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['captchanumen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['captchanumen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="captchanumen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="captchanumen" id="captchanumen" value="<?php echo $_smarty_tpl->tpl_vars['captchanumen']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable captcha letters</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['captchaleten']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['captchaleten']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="captchaleten.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="captchaleten" id="captchaleten" value="<?php echo $_smarty_tpl->tpl_vars['captchaleten']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable captcha sound</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['captchasounden']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['captchasounden']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="captchasounden.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="captchasounden" id="captchasounden" value="<?php echo $_smarty_tpl->tpl_vars['captchasounden']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 29px;">
			<label>Enable captcha reload</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['captchareloaden']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['captchareloaden']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="captchareloaden.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="captchareloaden" id="captchareloaden" value="<?php echo $_smarty_tpl->tpl_vars['captchareloaden']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Captcha background color</label>
			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['captchabackcol']->value;?>
" name="captchabackcol">
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>
		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Captcha font color</label>
			<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['captchafontcol']->value;?>
" name="captchafontcol">
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>
		</div>
	</div>
	<div class="col-md-6">
		<div class="alert bg-primary" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span> What is captcha?
			<br> 
			 It is a type of challenge-response test used in computing to determine whether or not the user is human.
			
		</div>
	</div>

	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Password security
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable password generator</label>

			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['passgen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['passgen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="passgen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="passgen" id="passgen" value="<?php echo $_smarty_tpl->tpl_vars['passgen']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Force password to have letters</label>

			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['passlett']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['passlett']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="passlett.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="passlett" id="passlett" value="<?php echo $_smarty_tpl->tpl_vars['passlett']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Force password to have upercase letters</label>

			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['passuplett']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['passuplett']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="passuplett.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="passuplett" id="passuplett" value="<?php echo $_smarty_tpl->tpl_vars['passuplett']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Force password to have numbers</label>

			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['passnum']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['passnum']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="passnum.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="passnum" id="passnum" value="<?php echo $_smarty_tpl->tpl_vars['passnum']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group" style="padding-bottom: 28px">
			<label>Force password to have symbols</label>

			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['passsym']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['passsym']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="passsym.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="passsym" id="passsym" value="<?php echo $_smarty_tpl->tpl_vars['passsym']->value;?>
" type="hidden"/>
			<dfn>Enable the copyrights of your website to be showed to your users.</dfn>

		</div>
	</div>
	
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Password length</label>
			<output id="aapasslength" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['passlength']->value;?>

			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['passlength']->value;?>
" type = "range" min="6" max="24" onchange="aapasslength.value=value" name="passlength"/>
			
			<dfn>The folder contains minative script, ex: minative/.</dfn>

		</div>

	</div>
	<div style="clear:both "></div>
	<div class="headingcust">
		<i class="glyphicon glyphicon-cog"></i> Check brute force attack
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Enable Check brute force attack</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['cbruteforceen']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['cbruteforceen']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="cbruteforceen.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="cbruteforceen" id="cbruteforceen" value="<?php echo $_smarty_tpl->tpl_vars['cbruteforceen']->value;?>
" type="hidden"/>
			<dfn>Changing the url of your website pages to match serch engines.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Record ip</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['cbruteip']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['cbruteip']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="cbruteip.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="cbruteip" id="cbruteip" value="<?php echo $_smarty_tpl->tpl_vars['cbruteip']->value;?>
" type="hidden"/>
			<dfn>Changing the url of your website pages to match serch engines.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Number of attempts before blocking</label>
			<output id="aaattemptsn" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['attemptsn']->value;?>
 attempt
			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['attemptsn']->value;?>
" type = "range" min="2" max="10" onchange="aaattemptsn.value=value" name="attemptsn"/>
			<dfn>By enabling cache you website will be cached in the server.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Block for (time in hours)</label>
			<output id="aaattemptsblock" style="display: inline;float: right">
				<?php echo $_smarty_tpl->tpl_vars['attemptsblock']->value;?>
 hours
			</output>
			<input value="<?php echo $_smarty_tpl->tpl_vars['attemptsblock']->value;?>
" type = "range" min="2" max="48" onchange="aaattemptsblock.value=value" name="attemptsblock"/>
			<dfn>By enabling cache you website will be cached in the server.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Send email to administrator</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['cbrutemailadmin']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['cbrutemailadmin']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="cbrutemailadmin.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="cbrutemailadmin" id="cbrutemailadmin" value="<?php echo $_smarty_tpl->tpl_vars['cbrutemailadmin']->value;?>
" type="hidden"/>
			<dfn>By enabling cache you website will be cached in the server.</dfn>

		</div>
	</div>
	<div class="col-md-6 settingdiv">
		<div class="form-group">
			<label>Send email to account owner</label>
			<label class="switch switch-left-right pull-right">
				<input class="switch-input" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['cbrutemailowner']->value=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['cbrutemailowner']->value=="1") {?>0<?php } else { ?>1<?php }?>" onchange="cbrutemailowner.value=value"/>
				<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
			<input name="cbrutemailowner" id="cbrutemailowner" value="<?php echo $_smarty_tpl->tpl_vars['cbrutemailowner']->value;?>
" type="hidden"/>
			<dfn>By enabling cache you website will be cached in the server.</dfn>

		</div>
	</div>
	<div class="col-md-12">
		<div class="alert bg-primary" role="alert">
			<span class="glyphicon glyphicon-info-sign"></span> What is brute force attack?
			<br> 
			 It's a way, hackers using it to guss the passwords of an account to hack it, and you can protect you self from this by activating 
			 "Check brute force attack". <br>
			 Also you can read more details from <a href="https://www.owasp.org/index.php/Blocking_Brute_Force_Attacks" target="_blank">here</a>
			
		</div>
	</div>

	<div class="col-md-12 tcenter settingbutdiv">
		<button type="submit" class="btn btn-primary" id="submit">
			Update
		</button>
	</div>

</form>
<?php }} ?>
