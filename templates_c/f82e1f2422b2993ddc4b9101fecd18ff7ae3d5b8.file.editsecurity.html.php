<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-26 13:05:46
         compiled from "C:\xampp\htdocs\minative\styles\minative\editsecurity.html" */ ?>
<?php /*%%SmartyHeaderCode:21128564fba9d815703-20085895%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f82e1f2422b2993ddc4b9101fecd18ff7ae3d5b8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\editsecurity.html',
      1 => 1448539542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21128564fba9d815703-20085895',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fba9d8e8632_29117117',
  'variables' => 
  array (
    'ph_home' => 0,
    'ph_editpasswordemail' => 0,
    'ph_passwordmail' => 0,
    'ph_passwordedit' => 0,
    'ph_password' => 0,
    'ph_cpassword' => 0,
    'ph_emailedit' => 0,
    'ph_email' => 0,
    'email' => 0,
    'ph_cemail' => 0,
    'ph_submitedit' => 0,
    'ph_reset' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fba9d8e8632_29117117')) {function content_564fba9d8e8632_29117117($_smarty_tpl) {?><section>
<div class="container">

        <?php echo $_smarty_tpl->getSubTemplate ("sidemenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
<div class="col-sm-9 col-md-9 col-lg-9 float02">
        <div class="row">
            <ol class="breadcrumb">
              <li><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['ph_home']->value;?>
</a></li>
              <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['ph_editpasswordemail']->value;?>
</a></li>
              
            </ol>
            
        <div class="col-md-12 formtabs">
            
        <div role="tabpanel">
            
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#security" aria-controls="main" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['ph_passwordmail']->value;?>
</a></li>
          </ul>

          <!-- Tab panes -->
            <form method="post" id="updatepro" name="updatepro" action="editprofile.php">
          <div class="tab-content">
  
          <div role="tabpanel" class="active" class="tab-pane fade" id="security">
              <div class="col-md-6 formindex">
              	<div class="formtit">
              <h4><?php echo $_smarty_tpl->tpl_vars['ph_passwordedit']->value;?>
</h4>
              </div>
          	<div class="form-group">
                <label for="exampleInputPassword1"><?php echo $_smarty_tpl->tpl_vars['ph_password']->value;?>
</label>
                <input type="password" class="form-control" id="password" placeholder="" name="pass">
              </div>
              
              <div class="form-group">
                <label for="exampleInputPassword1"><?php echo $_smarty_tpl->tpl_vars['ph_cpassword']->value;?>
</label>
                <input type="password" class="form-control" id="password" placeholder="" name="cpass">
              </div>
              </div>
              <div class="col-md-6 formindex">
              	<div class="formtit">
              <h4><?php echo $_smarty_tpl->tpl_vars['ph_emailedit']->value;?>
</h4>
              </div>
             <div class="form-group">
                <label for="email"><?php echo $_smarty_tpl->tpl_vars['ph_email']->value;?>
</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
              </div>
              
              <div class="form-group">
                <label for="email"><?php echo $_smarty_tpl->tpl_vars['ph_cemail']->value;?>
</label>
                <input type="email" class="form-control" id="email" placeholder="" name="cemail" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
              </div>
                 </div>
        </div>
        	
                  <div class="col-md-12 formindex  tcenter">
               
                  <button  type="submit" class="btn btn-default" id="submit"><?php echo $_smarty_tpl->tpl_vars['ph_submitedit']->value;?>
</button>
                  <button type="reset" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['ph_reset']->value;?>
</button>
            </div> 
                  
            </div></form>
            </div>    
            </div>
            </div>
</div>
   
        
</section>
    



   
    <?php }} ?>
