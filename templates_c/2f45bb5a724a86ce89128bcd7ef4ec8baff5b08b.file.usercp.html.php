<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-21 01:28:15
         compiled from "C:\xampp\htdocs\minative\styles\minative\usercp.html" */ ?>
<?php /*%%SmartyHeaderCode:17441564fba9fce0844-16076080%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f45bb5a724a86ce89128bcd7ef4ec8baff5b08b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\usercp.html',
      1 => 1447197384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17441564fba9fce0844-16076080',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'avatar' => 0,
    'name' => 0,
    'bio' => 0,
    'reg_date' => 0,
    'country' => 0,
    'city' => 0,
    'face' => 0,
    'twitter' => 0,
    'google' => 0,
    'linkedin' => 0,
    'skype' => 0,
    'messdata' => 0,
    'i' => 0,
    'website' => 0,
    'yahoo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fba9feb54b8_96170165',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fba9feb54b8_96170165')) {function content_564fba9feb54b8_96170165($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\minative\\includes\\smarty\\plugins\\modifier.truncate.php';
?><section>
<div class="container">
<div class="col-sm-3 col-md-3 col-lg-3 float02">
        
    <div class="blocksheader">
<h2>About You</h2>
</div>

<div class="left-sidebar sidemenupanel">
    <div class="tcenter">
    	<img class="tcenter p05" src="contents/avators/<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" style="height: 239px;border: 2px solid #00A7E4;margin: 10px"> 
   </div>
    <ul>
    <li>Name: <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</li>
    <li>About you: <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['bio']->value,100,"...",true);?>
</li>
    <li>Registration Date: <?php echo $_smarty_tpl->tpl_vars['reg_date']->value;?>
</li>
    <li>Country: <?php echo $_smarty_tpl->tpl_vars['country']->value;?>
</li>
    <li>City: <?php echo $_smarty_tpl->tpl_vars['city']->value;?>
</li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['face']->value;?>
"><i class="fa fa-facebook"></i> Facebook</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
"><i class="fa fa-twitter"></i> Twitter</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['google']->value;?>
"><i class="fa fa-google-plus"></i> Google+</a></li>
    <li><a href="<?php echo $_smarty_tpl->tpl_vars['linkedin']->value;?>
"><i class="fa fa-linkedin"></i> Linkedin</a></li>
    <li><i class="fa fa-skype"></i> Skype: <?php echo $_smarty_tpl->tpl_vars['skype']->value;?>
</li>
    
    </ul>
</div>
</div> 
    
<div class="col-sm-9 col-md-9 col-lg-9 float02">
        <div class="row">
            <ol class="breadcrumb">
              <li><a href="index.php">Home</a></li>
              <li><a href="#">User profile</a></li>
              
            </ol>
            
        <div class="col-md-12 formtabs">
            
        <div role="tabpanel">
            
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#messages" aria-controls="main" role="tab" data-toggle="tab">Messages</a></li>
            <li role="presentation"><a href="#notifications" aria-controls="profile" role="tab" data-toggle="tab">Notifications</a></li>
            
          </ul>

          <!-- Tab panes -->
            
          <div class="tab-content">
              
              
          <div role="tabpanel" class="tab-pane fade in active" id="messages">
              <div class="formtit">
              <h4>Contact messages</h4>
              </div>
                
              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Seen</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                      <tr>
                          <th scope="row"><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</th>
                          <td><a href="ccenterview.php?type=contact&hash=<?php echo $_smarty_tpl->tpl_vars['i']->value['hash'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></td>
                          <td><?php echo $_smarty_tpl->tpl_vars['i']->value['date'];?>
</td>
                          <td><?php if ($_smarty_tpl->tpl_vars['i']->value['status']==1) {?><i class="glyphicon glyphicon-lock red2"></i> Closed<?php } else { ?><i class="glyphicon glyphicon-flag green"></i> Opend<?php }?></td>
                          <td><?php if ($_smarty_tpl->tpl_vars['i']->value['seen']==1) {?><i class="glyphicon glyphicon-ok green"></i> Yes<?php } else { ?><i class="glyphicon glyphicon-remove red2"></i> No<?php }?></td>
                      </tr>
                      <?php } ?>
                  </tbody>
              </table>
              
              <div class="formtit">
              <h4>Quota Requests</h4>
              </div>
                
              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Seen</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                      <td></td>
                        <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                  </tbody>
              </table>
            
              <div class="formtit">
              <h4>Job Applications</h4>
              </div>
                
              <table class="table table-hover">
                  <thead>
                      <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Date</th>
                          <th>Status</th>
                          <th>Seen</th>
                      </tr>
                  </thead>
                  <tbody>
                     <tr>
                      <td></td>
                        <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                      </tr>
                  </tbody>
              </table>
            </div>
          <div role="tabpanel" class="tab-pane fade" id="notifications">
              <div class="formtit">
              <h4>Notifications</h4>
              </div>
              <div class="col-md-12 formindex">
               
                 <div class="form-group">
                <label for="exampleInputPassword1">Biography</label>
                <textarea class="form-control" rows="5" name="bio">
                    <?php echo $_smarty_tpl->tpl_vars['bio']->value;?>

                </textarea>
              </div>
                  
            </div>
        <div class="col-md-6 formindex">
              <div class="form-group">
                <label for="face">Facebook</label>
                <input type="face" class="form-control" id="face" placeholder="" name="face" value="<?php echo $_smarty_tpl->tpl_vars['face']->value;?>
">
              </div>
              <div class="form-group">
                <label for="twitter">Twitter</label>
                <input type="twitter" class="form-control" id="twitter" placeholder="" name="twitter" value="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
">
              </div>
            <div class="form-group">
                <label for="google">Google+</label>
                <input type="google" class="form-control" id="google" placeholder="" name="google" value="<?php echo $_smarty_tpl->tpl_vars['google']->value;?>
">
              </div>
            <div class="form-group">
                <label for="linkedin">Linkedin</label>
                <input type="linkedin" class="form-control" id="linkedin" placeholder="" name="linkedin" value="<?php echo $_smarty_tpl->tpl_vars['linkedin']->value;?>
">
              </div>
             <div class="form-group">
            <label for="exampleInputFile">Profile Picture</label>
            <input type="file" id="exampleInputFile" name="avatar" value="mina">
            <p class="help-block">Allawed ext.: jpg,gif,png,bmp.</p>
          </div>
            
        </div>
        <div class="col-md-6 formindex">
              <div class="form-group">
                <label for="website">Website</label>
                <input type="website" class="form-control" id="website" placeholder="" name="website" value="<?php echo $_smarty_tpl->tpl_vars['website']->value;?>
">
              </div>
              <div class="form-group">
                <label for="skype">Skype</label>
                <input type="skype" class="form-control" id="skype" placeholder="" name="skype" value="<?php echo $_smarty_tpl->tpl_vars['skype']->value;?>
">
              </div>
            <div class="form-group">
                <label for="yahoo">Yahoo</label>
                <input type="yahoo" class="form-control" id="yahoo" placeholder="" name="yahoo" value="<?php echo $_smarty_tpl->tpl_vars['yahoo']->value;?>
">
              </div>
            <div class="form-group">
                <label for="linkedin">Registration date</label>
                <input type="linkedin" class="form-control" id="linkedin" placeholder="" name="reg_date" value="<?php echo $_smarty_tpl->tpl_vars['reg_date']->value;?>
">
              </div>
           
            
        </div>
                 
        </div>
          
                  
            </div></form>
            </div>    
            </div>
            </div>
</div>
   
        
</section><?php }} ?>
