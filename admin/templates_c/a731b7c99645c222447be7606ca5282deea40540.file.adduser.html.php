<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-08 23:07:08
         compiled from "C:\xampp\htdocs\minative\admin\templates\adduser.html" */ ?>
<?php /*%%SmartyHeaderCode:134495585c6440f3f59-51655008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a731b7c99645c222447be7606ca5282deea40540' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\adduser.html',
      1 => 1447020426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '134495585c6440f3f59-51655008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5585c644190389_31652115',
  'variables' => 
  array (
    'data' => 0,
    'i' => 0,
    'datagroup' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5585c644190389_31652115')) {function content_5585c644190389_31652115($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>
	<li class="">
		Users
	</li>
	<li class="active">
		Add new user
	</li>
</ol>

<div class="row">
	<div class="col-lg-12">
		<?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">
				<form role="form" class="form-horizontal" id="addnewuser" name="addnewuser" action="users.php?act=doadd">

					<div class="panel panel-default">
						<div class="panel-heading">
							Add new user
							<button type="button" class="btn btn-primary pull-right menus-but" onClick="location.href='users.php?act=list'">
								<i class="glyphicon glyphicon-cog "></i> Manage users
							</button>
						</div>
						<div class="col-md-8">
						<div class="panel-body">
							

								<div class="headingcust">
									<i class="glyphicon glyphicon-user"></i> User details
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label>Name</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="name">

									</div>
								</div>

								<div class="form-group">
									<div class="col-md-3">
										<label>Email</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="email">

									</div>
								</div>

								<div class="form-group">
									<div class="col-md-3">
										<label>Display name</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="dname">

									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label>User</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="user">

									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label>Password</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="password">

									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label>Gender</label>
									</div>
									<div class="col-md-9">

										<select class="form-control" name="sex">
											<option value="1">Male</option>
											<option value="2">Female</option>
										</select>

									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label>Country</label>
									</div>
									<div class="col-md-9">
										<select name="country" class="form-control">
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['nicename'];?>
</option>
											<?php } ?>
										</select>

									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label>City</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="city">

									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label>Facrbook</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="face">

									</div>
								</div>

								<div class="form-group">
									<div class="col-md-3">
										<label>Twitter</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="twitter">

									</div>
								</div>

								<div class="form-group">
									<div class="col-md-3">
										<label>Google+</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="google">

									</div>
								</div>

								<div class="form-group">
									<div class="col-md-3">
										<label>Linkedin</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="linkedin">

									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label>Skype</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="skype">

									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label>Yahoo</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="yahoo">

									</div>
								</div>

								<div class="form-group">
									<div class="col-md-3">
										<label>Website</label>
									</div>
									<div class="col-md-9">
										<input class="form-control" placeholder="" value="" name="website">

									</div>
								</div>
								<div class="form-group">
									<div class="col-md-3">
										<label>Biography</label>
									</div>
									<div class="col-md-9">
										<textarea class="form-control" rows="6" name="bio"></textarea>										
                                        

									</div>
								</div>

							</div>
							

			</div>
			<div class="col-md-4">

								<div class="headingcust"  style="margin-top: 15px">
							<i class="glyphicon glyphicon-cog"></i> Admin Actions
						</div>
								<div class="form-group">
									<div class="col-md-4">
										<label>User Group</label>
									</div>
									<div class="col-md-8">

										<select name="group" class="form-control">
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datagroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value['id']=="5") {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['groupname'];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-6">
										<label>Send welcome mail</label>
									</div>
									<div class="col-md-6">

										<input type="checkbox" class="form-group" />
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-md-6">
										<label>Send password mail</label>
									</div>
									<div class="col-md-6">

										<input type="checkbox" class="form-group" />
									</div>
								</div>

							
							<div class="col-md-12 tcenter">
								<button type="submit" class="btn btn-primary" id="submit">
									Submit
								</button>
								<button type="reset" class="btn btn-default">
									Reset
								</button>
							</div>

				</form>
				</div>
		</div>

	</div>
</div></div></div>
<?php }} ?>
