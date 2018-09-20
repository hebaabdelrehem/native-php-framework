<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-31 13:24:24
         compiled from "C:\xampp\htdocs\New\admin\templates\viewuser.html" */ ?>
<?php /*%%SmartyHeaderCode:277154ccc978849408-01806444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a65a6da0cbce1161789d035f363f9c24ab342ea0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\New\\admin\\templates\\viewuser.html',
      1 => 1422348012,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '277154ccc978849408-01806444',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'userid' => 0,
    'name' => 0,
    'email' => 0,
    'dname' => 0,
    'user' => 0,
    'sex' => 0,
    'data' => 0,
    'i' => 0,
    'country' => 0,
    'city' => 0,
    'face' => 0,
    'twitter' => 0,
    'google' => 0,
    'linkedin' => 0,
    'skype' => 0,
    'yahoo' => 0,
    'website' => 0,
    'bio' => 0,
    'reg_date' => 0,
    'last_login' => 0,
    'datagroup' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ccc97896a547_09561824',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ccc97896a547_09561824')) {function content_54ccc97896a547_09561824($_smarty_tpl) {?><head>

<link href="http://localhost/new/admin/templates/css/bootstrap.min.css" rel="stylesheet">
<link href="http://localhost/new/admin/templates/css/datepicker3.css" rel="stylesheet">
<link href="http://localhost/new/admin/templates/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
 src="http://localhost/new/admin/templates/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://localhost/new/admin/templates/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 src="http://localhost/new/admin/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/JavaScript" src="http://localhost/new/admin/js/sha512.js"><?php echo '</script'; ?>
> 
        <?php echo '<script'; ?>
 type="text/JavaScript" src="http://localhost/new/admin/js/forms.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://localhost/new/admin/jquery.validate.min.js"><?php echo '</script'; ?>
>
    
	
</head>
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="">Users</li>
                <li class="active">Viewing user</li>
			</ol>

		<div class="row">
			<div class="col-lg-12">
                <?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				
			</div>
             <div class="col-lg-12">
                    <div class="row">
			<div class="col-lg-12">
                 <form role="form" class="form-horizontal" id="updateuser" name="updateuser" action="users.php?act=edituser">
				<div class="panel panel-default">
					
                    
					<div class="panel-body">
                          <div class="headingcust">Viewing user: #<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
</div><br/>
                                <input type="hidden" class="form-control" id="userid" placeholder="" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">
                        <div class="col-md-6">
							
							
								<div class="form-group">
									<div class="col-md-3"><label>Name</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="name">
                                    
                                        </div>
								</div>
																
								<div class="form-group">
									<div class="col-md-3"><label>Email</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" name="email">
                                    
                                        </div>
								</div>
                                
								
								<div class="form-group">
									<div class="col-md-3"><label>Display name</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['dname']->value;?>
" name="dname">
                                    
                                        </div>
								</div>
                            <div class="form-group">
									<div class="col-md-3"><label>User</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" name="user">
                                    
                                        </div>
								</div>
                            <div class="form-group">
									<div class="col-md-3"><label>Password</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="" name="password">
                                    
                                        </div>
								</div>
                            <div class="form-group">
                                     <div class="col-md-3"><label>Gender</label></div>
                                    <div class="col-md-9">
									
									<select class="form-control" name="sex">
										<option <?php if ($_smarty_tpl->tpl_vars['sex']->value==1) {?>selected<?php }?> value="1">Male</option>
										<option <?php if ($_smarty_tpl->tpl_vars['sex']->value==2) {?>selected<?php }?> value="2">Female</option>
									</select>
                                       
                                        </div>
								</div>
                                <div class="form-group">
                                     <div class="col-md-3"><label>Country</label></div>
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
" <?php if ($_smarty_tpl->tpl_vars['country']->value==$_smarty_tpl->tpl_vars['i']->value['id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['i']->value['nicename'];?>
</option>
                                        <?php } ?>
                                    </select>
                                       
                                        </div>
								</div>
                            <div class="form-group">
									<div class="col-md-3"><label>City</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
" name="city">
                                    
                                        </div>
								</div>
                                <div class="form-group">
									<div class="col-md-3"><label>Facrbook</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['face']->value;?>
" name="face">
                                    
                                        </div>
								</div>
                            
                                <div class="form-group">
									<div class="col-md-3"><label>Twitter</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
" name="twitter">
                                    
                                        </div>
								</div>
                            
                                <div class="form-group">
									<div class="col-md-3"><label>Google+</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['google']->value;?>
" name="google">
                                    
                                        </div>
								</div>
                            
                                <div class="form-group">
									<div class="col-md-3"><label>Linkedin</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['linkedin']->value;?>
" name="linkedin">
                                    
                                        </div>
								</div>
								<div class="form-group">
									<div class="col-md-3"><label>Skype</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['skype']->value;?>
" name="skype">
                                    
                                        </div>
								</div>
                             <div class="form-group">
									<div class="col-md-3"><label>Yahoo</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['yahoo']->value;?>
" name="yahoo">
                                    
                                        </div>
								</div>
                            
                                <div class="form-group">
									<div class="col-md-3"><label>Website</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['website']->value;?>
" name="website">
                                    
                                        </div>
								</div>
                            <div class="form-group">
                                    <div class="col-md-3"><label>Biography</label></div>
                                    <div class="col-md-9">
									<textarea class="form-control" rows="6" name="bio"><?php echo $_smarty_tpl->tpl_vars['bio']->value;?>
</textarea>
                                        
                                        </div>
								</div>
							</div>
                               
                               <div class="col-md-6">
                                   <div class="form-group">
									<div class="col-md-3"><label>Registration date</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['reg_date']->value;?>
" disabled>
                                    
                                        </div>
								</div>
                                   <div class="form-group">
									<div class="col-md-3"><label>Last login</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['last_login']->value;?>
" disabled>
                                    
                                        </div>
								</div>
                                   <div class="divider"></div>
                                   <div class="col-md-12 tcenter"><h4>Admin Actions</h4></div>
							     <div class="form-group">
                                     <div class="col-md-3"><label>User Group</label></div>
                                    <div class="col-md-9">
									
									<select name="group" class="form-control">
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
								</div>
                                   
                                   <form class="form-inline">
                                   <div class="form-group">
									<div class="col-md-3"><label>Send Message</label></div>
                                    <div class="col-md-9">
                                        <div class="col-md-8">
									<select class="form-control">
										<option value="1">Mail 1</option>
										<option value="0">Mail 2</option>
									</select>
                                            </div>
                                        <div class="col-md-1"><button type="button" class="btn btn-primary">Send</button></div>
                                        </div>
                                       
								</div>
                                       
                                </form>
                                   <div class="col-md-12 tcenter" style="margin-top:20px">
                                           <button type="button" class="btn btn-danger">Remove user</button>
                                           <button type="button" class="btn btn-info">View profile</button>
                                       </div>
                                
							</div>
                               <div class="col-md-12 tcenter">
								<button type="submit" class="btn btn-primary" id="submit"
                                        onclick="formhash(this.form, this.form.password);">Submit</button>
								<button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                               
							</div>
							</div>
						</form>
							</div>
							
                         
                               
					</div>
				</div></div>
			
 

		
		
		
		
								


<?php }} ?>
