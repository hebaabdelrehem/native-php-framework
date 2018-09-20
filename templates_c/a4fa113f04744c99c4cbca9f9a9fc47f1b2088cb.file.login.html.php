<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-24 16:39:32
         compiled from "C:\xampp\htdocs\minative\styles\minative\login.html" */ ?>
<?php /*%%SmartyHeaderCode:19060564fa28ae31f83-62937846%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4fa113f04744c99c4cbca9f9a9fc47f1b2088cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\login.html',
      1 => 1448379372,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19060564fa28ae31f83-62937846',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fa28ae35e01_43188832',
  'variables' => 
  array (
    'ph_logintit' => 0,
    'ph_username' => 0,
    'ph_password' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fa28ae35e01_43188832')) {function content_564fa28ae35e01_43188832($_smarty_tpl) {?><!-- Modal -->
<div class="modal fade bs-example-modal-sm loginmod " id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?php echo $_smarty_tpl->tpl_vars['ph_logintit']->value;?>
</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="loginf" action="login.php" name="login_form">
          <div class="form-group">
            <label for="recipient-name" class="control-label"><?php echo $_smarty_tpl->tpl_vars['ph_username']->value;?>
</label>
            <input type="text" class="form-control" id="user" name="user">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="control-label"><?php echo $_smarty_tpl->tpl_vars['ph_password']->value;?>
</label>
            <input type="password" class="form-control" id="password" name="pass">
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="submit" onclick="formhash(this.form, this.form.password);">Login</button>
      </div>
          </form>
    </div>
  </div>
</div><?php }} ?>
