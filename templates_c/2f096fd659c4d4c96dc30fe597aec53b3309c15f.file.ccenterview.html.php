<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-21 01:28:20
         compiled from "C:\xampp\htdocs\minative\styles\minative\ccenterview.html" */ ?>
<?php /*%%SmartyHeaderCode:16454564fbaa41bde91-77702167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f096fd659c4d4c96dc30fe597aec53b3309c15f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\ccenterview.html',
      1 => 1423717290,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16454564fbaa41bde91-77702167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'status' => 0,
    'name' => 0,
    'email' => 0,
    'title' => 0,
    'date' => 0,
    'messagecont' => 0,
    'repdata' => 0,
    'mainuserid' => 0,
    'i' => 0,
    'login' => 0,
    'userid' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fbaa4311c67_85206510',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fbaa4311c67_85206510')) {function content_564fbaa4311c67_85206510($_smarty_tpl) {?><section>
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
              <div class="formtit2 <?php if ($_smarty_tpl->tpl_vars['status']->value==0) {?>col-md-6<?php } else { ?>col-md-12<?php }?>">
              <h4><i class="glyphicon glyphicon-list-alt"></i> Viewing message</h4>
              </div>
                <?php if ($_smarty_tpl->tpl_vars['status']->value==0) {?>
                <div class="replybox col-md-6">
                    <div class="head pull-right"><a href="" id="addrep"><h4>Add reply</h4></a></div>
                      </div>
                <?php }?>
        <div class="col-md-4 formindex">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="name" class="form-control" id="name" placeholder="" name="sname" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" disabled>
              </div>      
        </div>
                <div class="col-md-4 formindex">
              <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" id="email" placeholder="" name="semail" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" disabled>
              </div>
             
            
        </div>
        <div class="col-md-4 formindex">
              <div class="form-group">
                <label for="email">Message title</label>
                <input type="mtitle" class="form-control" id="mtitle" placeholder="" name="mtitle" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
" disabled>
              </div>
             
            
        </div>
              <div class="col-md-12 formindex">
               <div class="messfdiv">
                    <div class="head">Message <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
</span></div>
                    <div class="body"><?php echo $_smarty_tpl->tpl_vars['messagecont']->value;?>
</div>
                  
            </div>
                  </div>
                <div class="col-md-12">
                    <?php if (!empty($_smarty_tpl->tpl_vars['repdata']->value)) {?>
               <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['repdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                    <div <?php if ($_smarty_tpl->tpl_vars['mainuserid']->value==$_smarty_tpl->tpl_vars['i']->value['userid']) {?>class="repdiv"<?php } else { ?>class="repdiv2"<?php }?>>
                    <div class="head"><i class="glyphicon glyphicon-user"></i> <?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
  |  <?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
 <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['i']->value['date'];?>
</span></div>
                    <div class="body"><?php echo $_smarty_tpl->tpl_vars['i']->value['reply'];?>
</div>
                    </div>   
                <?php } ?>   
                    <?php } else { ?>
                    No replies
                    <?php }?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['status']->value==0) {?>
                <div class="col-md-12 replybox">
                    <div class="head"><a href="" id="addrep"><h4>Add reply</h4></a></div>
                <div class="body">
                <form method="post" id="addnewreply" name="addnewreply" action="ccenter.php?act=replysubmit">
                    <?php if ($_smarty_tpl->tpl_vars['login']->value) {?><input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
"><?php }?>
                    <input type="hidden" name="messageid" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
                    
                <div class="col-md-6">
                      <div class="form-group">
                        <label for="name">Your Name</label>
                        <input type="name" class="form-control" id="name" placeholder="" name="sname" 
                               value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
                      </div>
                </div>
                            <div class="col-md-6">
                      <div class="form-group">
                        <label for="email">Your Email</label>
                        <input type="email" class="form-control" id="email" placeholder="" name="semail" 
                               value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
">
                      </div>
                </div>
              <div class="col-md-12 formindex">
                 <div class="form-group">
                <label for="">Message</label>
                <textarea class="form-control" rows="6" name="reply" placeholder="Write your reply here.." id="elm1"></textarea>
              </div>
            </div>
                  <div class="formindex  tcenter">
                  <button  type="submit" class="btn btn-default submitfor" id="submit">Send reply</button>
            </div> 
                </form> 
                </div>
                </div>
                <?php }?>
                
                </div>
            </div>
            </div>    
            </div>
    


   
        
</section>
    



   
    <?php }} ?>
