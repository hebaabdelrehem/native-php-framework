<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-22 18:07:04
         compiled from "C:\xampp\htdocs\minative\admin\templates\viewuser.html" */ ?>
<?php /*%%SmartyHeaderCode:320035585c72280b4a8-15006296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '835dd8b395a249b21658b5ab44b7873110619255' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\viewuser.html',
      1 => 1448212018,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '320035585c72280b4a8-15006296',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5585c722966f71_95811440',
  'variables' => 
  array (
    'userid' => 0,
    'name' => 0,
    'user' => 0,
    'dname' => 0,
    'data' => 0,
    'i' => 0,
    'country' => 0,
    'email' => 0,
    'sex' => 0,
    'city' => 0,
    'face' => 0,
    'twitter' => 0,
    'google' => 0,
    'linkedin' => 0,
    'skype' => 0,
    'yahoo' => 0,
    'website' => 0,
    'bio' => 0,
    'avatar' => 0,
    'reg_date' => 0,
    'last_login' => 0,
    'ip_add' => 0,
    'user_agent' => 0,
    'messdata' => 0,
    's' => 0,
    'datagroup' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5585c722966f71_95811440')) {function content_5585c722966f71_95811440($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>
	<li class="">
		Users
	</li>
	<li class="active">
		Viewing user
	</li>
</ol>

<div class="row">
	<div class="col-lg-12">
		<?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">

				<div class="panel panel-default">
					<div class="panel-heading">
						Viewing user: #<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>

						<button type="button" class="btn btn-primary pull-right menus-but" onClick="location.href='users.php?act=list'">
							<i class="glyphicon glyphicon-cog "></i> Manage users
						</button>

						<a data-id="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" href="users.php?act=dodel" id="delbutton" class="btn btn-danger pull-right menus-but"> <i class="glyphicon glyphicon-trash"></i> Remove user </a>
						<button type="button" class="btn btn-info pull-right menus-but" onClick="location.href='usergroups.php?act=list'">
							<i class="glyphicon glyphicon-eye-open "></i> View profile
						</button>
					</div>
					<div class="col-md-7">
						<div class="panel-body">
							<div class="headingcust">
								<i class="glyphicon glyphicon-user"></i> Basic User details
							</div>

							<form role="form" id="updateuser" name="updateuser" action="users.php">
								<input type="hidden" class="form-control" id="userid" placeholder="" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">

								<div class="col-md-6 formindex">
									<div class="form-group">
										<label for="name">Name</label>
										<input type="name" class="form-control" id="name" placeholder="" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
									</div>

									<div class="form-group">
										<label for="user">Username</label>
										<input type="user" class="form-control" id="user" placeholder="" name="user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
									</div>
									<div class="form-group">
										<label for="dname">Display name</label>
										<input type="dname" class="form-control" id="dname" placeholder="" name="dname" value="<?php echo $_smarty_tpl->tpl_vars['dname']->value;?>
">
									</div>
									<div class="form-group">
										<label for="country">Country</label>
										<select name="country" class="form-control">
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['country']->value==$_smarty_tpl->tpl_vars['i']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['nicename'];?>
</option>
											<?php } ?>
										</select>
									</div>
								</div>
								<div class="col-md-6 formindex">
									<div class="form-group">
										<label>Email</label>
										<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" name="email">
									</div>
									<div class="form-group">
										<label>Password</label>
										<input class="form-control" placeholder="" value="" name="password">

									</div>

									<div class="form-group">
										<label for="sex">Gender</label>
										<select name="sex" class="form-control">
											<option <?php if ($_smarty_tpl->tpl_vars['sex']->value==1) {?>selected<?php }?> value="1">Male</option>
											<option <?php if ($_smarty_tpl->tpl_vars['sex']->value==2) {?>selected<?php }?> value="2">Female</option>

										</select>
									</div>
									<div class="form-group">
										<label for="city">City/State</label>
										<input type="city" class="form-control" id="city" placeholder=""  name="city" value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
">
									</div>
								</div>
								<div style="clear: both"></div>
								<div class="headingcust">
									<i class="glyphicon glyphicon-zoom-in"></i> Social details
								</div>
								<div class="col-md-6 formindex">
								<div class="form-group">

									<label>Facrbook</label>

									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['face']->value;?>
" name="face">

								</div>

								<div class="form-group">

									<label>Twitter</label>

									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
" name="twitter">

								</div>

								<div class="form-group">

									<label>Google+</label>

									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['google']->value;?>
" name="google">

								</div>

								<div class="form-group">

									<label>Linkedin</label>

									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['linkedin']->value;?>
" name="linkedin">

								</div>
								</div>
								<div class="col-md-6 formindex">
								<div class="form-group">

									<label>Skype</label>

									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['skype']->value;?>
" name="skype">

								</div>
								<div class="form-group">

									<label>Yahoo</label>

									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['yahoo']->value;?>
" name="yahoo">

								</div>

								<div class="form-group">

									<label>Website</label>

									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['website']->value;?>
" name="website">

								</div>
								</div>
								<div style="clear: both"></div>
								<div class="headingcust">
									<i class="glyphicon glyphicon-book"></i> Biography
								</div>
								<div class="col-md-12 formindex">
									
								<div class="form-group">

									<label>Biography</label>
									<textarea class="form-control" rows="6" name="bio"><?php echo $_smarty_tpl->tpl_vars['bio']->value;?>
</textarea>
																																							
  

								</div>
								</div>
								<div class="col-md-12 tcenter settingbutdiv">
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

					<div class="col-md-3">

						<div class="headingcust" style="margin-top: 15px">
							<i class="glyphicon glyphicon-picture"></i> User avator
						</div>
						<img src="../contents/avators/<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" class="avatorpic">
						<form role="form" class="form-horizontal" id="changeavator">
							<div class="form-group" style="margin-bottom: 0px !important">
								<div class="col-lg-12">
									<label>Change avator</label>
								</div>

								<div class="col-lg-8 tcenter">
									<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" name="userid" />
									<input type="file" name="file" />
								</div>

								<div class="col-lg-4 tcenter">
									<button type="submit" class="btn btn-primary" id="submit5">
										Upload
									</button>
								</div>

							</div>
							<div class="changeres tcenter"></div>
						</form>

					</div>

					<div class="col-md-2">
						<div class="headingcust" style="margin-top: 15px">
							<i class="glyphicon glyphicon-flag"></i> Unchangable data
						</div>
						<div class="form-group">
							<label>Registration date</label>
							<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['reg_date']->value;?>
" disabled="">
						</div>

						<div class="form-group">
							<label>Last login</label>
							<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['last_login']->value;?>
" disabled="">
						</div>

						<div class="form-group">
							<label>IP address</label>
							<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['ip_add']->value;?>
" disabled="">
						</div>

						<div class="form-group">
							<label>User agent</label>
							<input class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['user_agent']->value;?>
" disabled="">
						</div>
					</div>
					<div class="col-md-5" style="margin-bottom: 16px">
						<div class="headingcust">
							<i class="glyphicon glyphicon-envelope"></i> User messages
						</div>
						<table class="table table-condensed tablet bluetablehead" data-toggle="table"  data-select-item-name="toolbar1">
							<thead >
								<tr>
									<th></th>
									<th>Title</th>
									<th>Date</th>
									<th>Seen</th>
									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
?>
								<tr>
									<td  class=""> <?php if ($_smarty_tpl->tpl_vars['s']->value['status']==1) {?><i class="glyphicon glyphicon-lock red"></i> <?php } else { ?><i class="glyphicon glyphicon-flag green"></i> <?php }?> </td>
									<td><?php echo $_smarty_tpl->tpl_vars['s']->value['title'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['s']->value['date'];?>
</td>
									<td><?php if ($_smarty_tpl->tpl_vars['s']->value['seen']==1) {?><i class="glyphicon glyphicon-ok green"></i> <?php } else { ?><i class="glyphicon glyphicon-remove red"></i> <?php }?></td>
									<td class=""><a href="forms.php?act=viewmessage&formid=<?php echo $_smarty_tpl->tpl_vars['s']->value['formid'];?>
&hash=<?php echo $_smarty_tpl->tpl_vars['s']->value['hash'];?>
"><i class="glyphicon glyphicon-envelope seemessag"></i></a><a data-id="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" data-formid="<?php echo $_smarty_tpl->tpl_vars['i']->value['formid'];?>
" href="forms.php?act=dellmessage" id="dellmessage"><i class="glyphicon glyphicon-trash deli"></i></a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>

					</div>
					<div class="col-md-5">
						<div class="headingcust">
							<i class="glyphicon glyphicon-cog"></i> Admin Actions
						</div>
						<form role="form" class="form-horizontal" id="changeusergroup">
							<div class="form-group">
								<div class="col-lg-12">
									<label>User Group</label>
								</div>
								<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" name="userid" />
								<div class="col-lg-8 tcenter">
									<select name="groupid" class="form-control">
										<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datagroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['group']->value==$_smarty_tpl->tpl_vars['i']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['groupname'];?>
</option>
										<?php } ?>
									</select>
								</div>

								<div class="col-lg-4 changegrdiv tcenter">
									<button type="submit" class="btn btn-primary">
										Change
									</button>
								</div>

							</div>
						</form>
					</div>
					<div class="col-md-5">
						<form role="form" class="form-horizontal" id="updateuser" name="updateuser" action="users.php">
							<div class="form-group">
								<div class="col-lg-12">
									<label>Send Message</label>
								</div>

								<div class="col-lg-8">
									<select class="form-control">
										<option value="1">Mail 1</option>
										<option value="0">Mail 2</option>
									</select>
								</div>

								<div class="col-lg-4 tcenter">
									<button type="submit" class="btn btn-primary" id="changegroup">
										Send
									</button>
								</div>
							</div>
						</form>

					</div>

				</div>

			</div>

		</div>
	</div>
</div>

<?php }} ?>
