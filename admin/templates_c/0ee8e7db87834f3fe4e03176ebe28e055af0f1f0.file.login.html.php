<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-02 11:43:03
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:396756529038eea363-90552130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ee8e7db87834f3fe4e03176ebe28e055af0f1f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\login.html',
      1 => 1449052980,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '396756529038eea363-90552130',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5652903906f316_55131990',
  'variables' => 
  array (
    'scripturl' => 0,
    'adminmainstyle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652903906f316_55131990')) {function content_5652903906f316_55131990($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin panel - Login</title>

    <link href="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/css/styles.css" rel="stylesheet">
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/JavaScript" src="js/sha512.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 type="text/JavaScript" src="js/forms.js"><?php echo '</script'; ?>
> 
    <?php echo '<script'; ?>
 src="main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//code.jquery.com/ui/1.11.2/jquery-ui.js"><?php echo '</script'; ?>
>


<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->

</head>

<body class="loginpagebody">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			
			<div class="login-panel loginform loginform-default">
				<div class="logo" style="text-align: center;margin-bottom: 30px !important;margin-left: 0!important;margin-top: 0!important">
						<a href="index.php">
							<img src="img/logo.png" />
						</a>
					</div>
				<div class="loginform-heading"><i class="glyphicon glyphicon-lock"></i> Login to your Admin panel</div>
				<div class="loginform-body">
					<form role="form" action="login.php" name="login_form" id="loginadmin">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Username" name="user" type="user" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="pass" type="password" value="">
							</div>
							<div class="checkbox">
								<label>
									<input name="remember" type="checkbox" value="Remember Me">Remember Me
								</label>
							</div>
							<div class="col-md-12 tcenter">
								<button type="submit" class="btn btn-primary" style="border-radius:0px;" id="submit"
                                onclick="formhash(this.form, this.form.password);">Login</button>
				            </div>
						</fieldset>
					</form>
				</div>
                <div class="errorlogin" style="display: none;"></div>
                <div class="successlogin" style="display: none;"></div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	   
</body>

</html><?php }} ?>
