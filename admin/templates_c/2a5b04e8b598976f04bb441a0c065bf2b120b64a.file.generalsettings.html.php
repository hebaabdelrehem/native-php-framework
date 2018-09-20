<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-10 21:22:53
         compiled from "C:\xampp\htdocs\minative\admin\templates\generalsettings.html" */ ?>
<?php /*%%SmartyHeaderCode:98255642521d754806-58755924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a5b04e8b598976f04bb441a0c065bf2b120b64a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\generalsettings.html',
      1 => 1447186351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98255642521d754806-58755924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sitename' => 0,
    'siteurl' => 0,
    'scriptfolder' => 0,
    'adminmail' => 0,
    'metadisc' => 0,
    'metakey' => 0,
    'chkyes' => 0,
    'chkno' => 0,
    'closingmessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5642521d7a2a14_43061052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5642521d7a2a14_43061052')) {function content_5642521d7a2a14_43061052($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

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
							General settings
						<button type="button" class="btn btn-primary pull-right menus-but" onClick="location.href='users.php?act=list'">
							<i class="glyphicon glyphicon-cog "></i> All settings
						</button>
					</div>
					<div class="col-md-3">

						<div class="headingcust" style="margin-top: 15px">
							<i class="glyphicon glyphicon-th-list"></i> MiNative settings list
						</div>
						<ul class="todo-list settinglist">

							<li class="todo-list-item selectedset">
								<div class="checkbox">
									<a href="settings.php?setgroup=generalsettings">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-cog"></i> General settings</label>
									</a>
								</div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-user"></i> User registration settings</label>
								</div>
							</li>
							<li class="todo-list-item ">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-flash"></i> Language, Styles and Cache</label>
								</div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-repeat"></i> Mail settings</label>
								</div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-envelope"></i> Contact center settings</label>
								</div>
							</li>
							<li class="todo-list-item">
								<div class="checkbox">
									<label for="checkbox" class="permpadding"><i class="glyphicon glyphicon-file"></i> Pages manager settings</label>
								</div>
							</li>
						</ul>
					</div>

					<div class="col-md-9">
						<div class="panel-body">
							<div class="headingcust">
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

								<div class="form-group">
									<label>Site Url</label>

									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" name="siteurl">
									<dfn>Your website domain name, ex: http://minative.com.</dfn>

								</div>

								<div class="form-group">
									<label>Script folder</label>

									<input class="form-control" placeholder="" value=<?php echo $_smarty_tpl->tpl_vars['scriptfolder']->value;?>
 name="scriptfolder">
									<dfn>The folder contains minative script, ex: minative/.</dfn>

								</div>

								<div class="form-group">
									<label>Admin mail</label>

									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['adminmail']->value;?>
" name="adminmail">
									<dfn>Main email for the website administrator.</dfn>

								</div>

								<div class="form-group">
									<label>Meta Description</label>

									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['metadisc']->value;?>
" name="metadisc">
									<dfn>Meta description to be used by search engiens.</dfn>

								</div>

								<div class="form-group">
									<label>Meta keyword</label>

									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['metakey']->value;?>
" name="metakey">
									<dfn>Meta keyword to be used by search engiens.</dfn>

								</div>
							</div>
							<div class="col-md-6 settingdiv">
								<div class="form-group">
									<label>Close the website?</label>

									<select class="form-control" name="close">
										<option <?php echo $_smarty_tpl->tpl_vars['chkyes']->value;?>
 value="1">Yes</option>
										<option <?php echo $_smarty_tpl->tpl_vars['chkno']->value;?>
 value="0">No</option>
									</select>
									<dfn>If you want to close your website from users.</dfn>
									
								</div>

								<div class="form-group">
									<label>Closing messages</label>
									<textarea class="form-control" rows="5" name="closingmessage"><?php echo $_smarty_tpl->tpl_vars['closingmessage']->value;?>
</textarea>

									<dfn>Your closing message to view it to the users.</dfn>

								</div>

							</div>
							<div class="col-md-12 tcenter settingbutdiv">
								<button type="submit" class="btn btn-primary" id="submit">Update</button>
                                    </div>
						</div>
						</form>
					</div>

				</div>

			</div>
		</div>

	</div>

<?php }} ?>
