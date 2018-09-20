<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-21 01:19:44
         compiled from "C:\xampp\htdocs\minative\styles\minative\contact.html" */ ?>
<?php /*%%SmartyHeaderCode:22404564fb8a0dd5bc9-82899295%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b827f58452922ae6c4c00ef411f11c6be368776' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\contact.html',
      1 => 1445855301,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22404564fb8a0dd5bc9-82899295',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'hash' => 0,
    'formid' => 0,
    'login' => 0,
    'name' => 0,
    'email' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fb8a0ea4c84_63320557',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fb8a0ea4c84_63320557')) {function content_564fb8a0ea4c84_63320557($_smarty_tpl) {?><section>
<div class="container">

        <?php echo $_smarty_tpl->getSubTemplate ("sidemenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
<div class="col-sm-9 col-md-9 col-lg-9 float02">
        <div class="row">
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">Contact center</a></li>
                <li><a href="#">Contact Us</a></li>
              
            </ol>
            <div class="tcenter alert alert-info" id="res" style="display:none"></div>
            <div class="col-md-12" id="formdiv">
              <div class="formtit">
              <h4><i class="glyphicon glyphicon-envelope"></i> Send Us a message</h4>
              </div>
                <form method="post" id="contactsubmit" name="contactsubmit" action="ccenter.php?act=contactsubmit">
                    
                    <input type="hidden" name="hash" value="<?php echo $_smarty_tpl->tpl_vars['hash']->value;?>
">
                    <input type="hidden" name="formid" value="<?php echo $_smarty_tpl->tpl_vars['formid']->value;?>
">
        <div class="col-md-12 formindex">
              <div class="form-group">
                <label for="name">Your Name</label>
                <input type="name" class="form-control" id="name" placeholder="" name="sname" 
                       <?php if ($_smarty_tpl->tpl_vars['login']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" <?php }?>>
              </div>
              <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" id="email" placeholder="" name="semail" <?php if ($_smarty_tpl->tpl_vars['login']->value) {?>value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" <?php }?>>
              </div>
             <div class="form-group">
                <label for="email">Message title</label>
                <input type="mtitle" class="form-control" id="mtitle" placeholder="" name="mtitle">
              </div>
            
        </div>
        
              <div class="col-md-12 formindex">
               
                 <div class="form-group">
                <label for="">Message</label>
                <textarea class="form-control" rows="12" name="messagecont" placeholder="Write your message here.." id="elm1"></textarea>
              </div>
                  
            </div>
            
            
                  <div class="formindex  tcenter">
               
                  <button  type="submit" class="btn btn-default submitfor" id="submit">Submit</button>
                  <button type="reset" class="btn btn-default">Reset</button>
            </div> 
                </form> 
                </div>
            </div>
            </div>    
            </div>


   
        
</section>
    



   
    <?php }} ?>
