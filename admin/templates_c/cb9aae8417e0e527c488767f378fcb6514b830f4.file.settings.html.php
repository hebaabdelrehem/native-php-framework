<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-04 06:09:11
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\settings.html" */ ?>
<?php /*%%SmartyHeaderCode:3241056528fa6d71d15-23200069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb9aae8417e0e527c488767f378fcb6514b830f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\settings.html',
      1 => 1449205651,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3241056528fa6d71d15-23200069',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56528fa6ed54f1_47605237',
  'variables' => 
  array (
    'setgroup' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56528fa6ed54f1_47605237')) {function content_56528fa6ed54f1_47605237($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>
	<li class="">
		Settings
	</li>
	<li class="active">
		Main Settings
	</li>
</ol>
</div><!--/.row-->

<div class="row">
	<div class="col-lg-12">
		<?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Main settings <i class="glyphicon glyphicon-chevron-right" style="margin-right:0px !important;font-size: 14px"></i>
						<?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="generalsettings") {?>
						General settings
						<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="regsettings") {?>
						Registration settings
						<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="langstyle") {?>
						Language & style settings
						<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="secsettings") {?>
						Security settings
						<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="mailsettings") {?>
						Mail settings
						<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="compprofsettings") {?>
						Company/Website profile settings
						<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="ccentersettings") {?>
						Contact center settings
						<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="extrasettings") {?>
						Extra settings
						<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="pmanagersettings") {?>
						Pages manager settings
						<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="settings_other_lang") {?>
						Settings for other languages
						<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="all") {?>
						All settings
						<?php }?>

						<button type="button" class="btn btn-primary pull-right menus-but" onClick="location.href='settings.php?setgroup=all'">
							<i class="glyphicon glyphicon-cog "></i> All settings
						</button>
						<button type="button" class="btn btn-info pull-right menus-but" onClick="location.href='settings.php?setgroup=settings_other_lang'">
							<i class="glyphicon glyphicon-refresh "></i> Settings for other languages
						</button>
					</div>
					<div class="col-md-3">

						<div class="headingcust" style="margin-top: 15px">
							<i class="glyphicon glyphicon-th-list"></i> MiNative settings list
						</div>
						<ul class="todo-list settinglist">
							<?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="all") {?>
							<li class="todo-list-item <?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="all") {?>selectedset<?php }?>">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-cog"></i> All settings</label> </a>
								</div>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="settings_other_lang") {?>
							<li class="todo-list-item  <?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="settings_other_lang") {?>selectedset<?php }?>">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-refresh"></i> Settings for other languages</label>
								</div>
							</li>
							<?php }?>
							<a href="settings.php?setgroup=generalsettings">
							<li class="todo-list-item <?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="generalsettings") {?>selectedset<?php }?>">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-cog"></i> General settings</label>
								</div>
							</li> </a>
							<a href="settings.php?setgroup=compprofsettings">
							<li class="todo-list-item <?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="compprofsettings") {?>selectedset<?php }?>">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-cloud"></i> Company/Website profile settings</label>
								</div>
							</li> </a>
							<a href="settings.php?setgroup=regsettings">
							<li class="todo-list-item <?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="regsettings") {?>selectedset<?php }?>">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-user"></i> User registration settings</label>
								</div>
							</li> </a>
							<a href="settings.php?setgroup=langstyle">
							<li class="todo-list-item <?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="langstyle") {?>selectedset<?php }?>">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-flash"></i> Language & Styles settings</label>
								</div>
							</li> </a>
							<a href="settings.php?setgroup=secsettings">
							<li class="todo-list-item <?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="secsettings") {?>selectedset<?php }?>">
								<div class="checkbox ">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-lock"></i> Security settings</label>
								</div>
							</li> </a>
							<a href="settings.php?setgroup=mailsettings">
							<li class="todo-list-item <?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="mailsettings") {?>selectedset<?php }?>">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-repeat"></i> Mail settings</label>
								</div>
							</li> </a>
							<a href="settings.php?setgroup=extrasettings">
							<li class="todo-list-item <?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="extrasettings") {?>selectedset<?php }?>">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-plus"></i> Extra settings</label>
								</div>
							</li> </a>
							<li class="todo-list-item">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-pencil"></i> Editor settings</label>
								</div>
							</li>
							<a href="settings.php?setgroup=ccentersettings">
							<li class="todo-list-item <?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="ccentersettings") {?>selectedset<?php }?>">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-envelope"></i> Contact center settings</label>
								</div>
							</li> </a>
							<a href="settings.php?setgroup=pmanagersettings">
							<li class="todo-list-item  <?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="pmanagersettings") {?>selectedset<?php }?>">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-file"></i> Pages manager settings</label>
								</div>
							</li> </a>
							<li class="todo-list-item">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-font"></i> Admin panal settings</label>
								</div>
							</li>

						</ul>
					</div>

					<div class="col-md-9">
						<div class="panel-body panelbodyedit tabssty">
							<?php if ($_smarty_tpl->tpl_vars['setgroup']->value=="generalsettings") {?>
							<?php echo $_smarty_tpl->getSubTemplate ("settings-general.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="regsettings") {?>
							<?php echo $_smarty_tpl->getSubTemplate ("settings-registration.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="langstyle") {?>
							<?php echo $_smarty_tpl->getSubTemplate ("settings-langstyle.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="secsettings") {?>
							<?php echo $_smarty_tpl->getSubTemplate ("settings-security.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="mailsettings") {?>
							<?php echo $_smarty_tpl->getSubTemplate ("settings-mail.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="compprofsettings") {?>
							<?php echo $_smarty_tpl->getSubTemplate ("settings-company.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="ccentersettings") {?>
							<?php echo $_smarty_tpl->getSubTemplate ("settings-ccenter.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="extrasettings") {?>
							<?php echo $_smarty_tpl->getSubTemplate ("settings-extra.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="pmanagersettings") {?>
							<?php echo $_smarty_tpl->getSubTemplate ("settings-pagesmanager.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="settings_other_lang") {?>
							<?php echo $_smarty_tpl->getSubTemplate ("settings-other_lang.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php } elseif ($_smarty_tpl->tpl_vars['setgroup']->value=="all") {?>
							<?php echo $_smarty_tpl->getSubTemplate ("settings-all.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

							<?php }?>

						</div>

					</div>

				</div>

			</div>
		</div>

	</div>

<?php }} ?>
