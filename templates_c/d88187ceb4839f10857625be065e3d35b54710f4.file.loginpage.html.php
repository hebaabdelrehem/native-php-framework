<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-23 10:41:19
         compiled from "C:\xampp\htdocs\minative\styles\minative\loginpage.html" */ ?>
<?php /*%%SmartyHeaderCode:251175652df3fa91d60-36188568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd88187ceb4839f10857625be065e3d35b54710f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\loginpage.html',
      1 => 1446991938,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251175652df3fa91d60-36188568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'login' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5652df3fb26488_91509149',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652df3fb26488_91509149')) {function content_5652df3fb26488_91509149($_smarty_tpl) {?><section>
<div class="container">

        <?php echo $_smarty_tpl->getSubTemplate ("sidemenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
<div class="col-sm-9 col-md-9 col-lg-9 float02">
        <div class="row">
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Login</a></li>
              
            </ol>
            <div class="col-md-12">
                <?php if (!$_smarty_tpl->tpl_vars['login']->value) {?>
                <div class="tcenter">
                    
            <form  id="" name="login_form" method="post" action="login.php">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Username</label>
            <input type="text" class="form-control" id="user" name="user">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Password</label>
            <input type="password" class="form-control" id="password" name="pass">
          </div>
        
        <button type="submit" class="btn btn-primary" id="submit" onclick="formhash(this.form, this.form.password);">Login</button>
                </form>
                    
                </div>
                <?php } else { ?>
                <div id="output" class="alert alert-success message3">You are already loged</div>
                <?php }?>
            </div>
                </div>
          
    
            </div>
</div>
        
</section>
    



   
    <?php }} ?>
