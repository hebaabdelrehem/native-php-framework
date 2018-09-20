<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-23 22:26:30
         compiled from "C:\xampp\htdocs\minative\styles\minative\editprofile.html" */ ?>
<?php /*%%SmartyHeaderCode:3627564fba9806b459-41569996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c0631db1619445531c9c2af3052719e9a987c42' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\editprofile.html',
      1 => 1448313988,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3627564fba9806b459-41569996',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fba981e24b5_42592962',
  'variables' => 
  array (
    'ph_home' => 0,
    'ph_profileedit' => 0,
    'ph_profile' => 0,
    'ph_profilepic' => 0,
    'ph_settings' => 0,
    'ph_maininfo' => 0,
    'ph_name' => 0,
    'name' => 0,
    'ph_username' => 0,
    'user' => 0,
    'ph_displayname' => 0,
    'dname' => 0,
    'ph_country' => 0,
    'data' => 0,
    'i' => 0,
    'country' => 0,
    'ph_citystate' => 0,
    'city' => 0,
    'ph_gender' => 0,
    'sex' => 0,
    'ph_biography' => 0,
    'bio' => 0,
    'ph_facebook' => 0,
    'face' => 0,
    'ph_twitter' => 0,
    'twitter' => 0,
    'ph_google' => 0,
    'google' => 0,
    'ph_linkedin' => 0,
    'linkedin' => 0,
    'ph_website' => 0,
    'website' => 0,
    'ph_skype' => 0,
    'skype' => 0,
    'ph_yahoo' => 0,
    'yahoo' => 0,
    'ph_registerdate' => 0,
    'reg_date' => 0,
    'avatar' => 0,
    'ph_submitedit' => 0,
    'ph_reset' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fba981e24b5_42592962')) {function content_564fba981e24b5_42592962($_smarty_tpl) {?><section>
<div class="container">

        <?php echo $_smarty_tpl->getSubTemplate ("sidemenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  
<div class="col-sm-9 col-md-9 col-lg-9 float02">
        <div class="row">
            <ol class="breadcrumb">
              <li><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['ph_home']->value;?>
</a></li>
              <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['ph_profileedit']->value;?>
</a></li>
              
            </ol>
            
        <div class="col-md-12 formtabs">
            
        <div role="tabpanel">
            
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#main" aria-controls="main" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['ph_profile']->value;?>
</a></li>
           
            <li role="presentation"><a href="#pic" aria-controls="pic" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['ph_profilepic']->value;?>
</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['ph_settings']->value;?>
</a></li>
          </ul>

          <!-- Tab panes -->
            <form method="post" id="updatepro" name="updatepro"  enctype="multipart/form-data">
          <div class="tab-content">
              
              
          <div role="tabpanel" class="tab-pane fade in active" id="main">
              <div class="formtit">
              <h4><?php echo $_smarty_tpl->tpl_vars['ph_maininfo']->value;?>
</h4>
              </div>
        <div class="col-md-6 formindex">
              <div class="form-group">
                <label for="name"><?php echo $_smarty_tpl->tpl_vars['ph_name']->value;?>
</label>
                <input type="name" class="form-control" id="name" placeholder="" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
">
              </div>
              
            <div class="form-group">
                <label for="user"><?php echo $_smarty_tpl->tpl_vars['ph_username']->value;?>
</label>
                <input type="user" class="form-control" id="user" placeholder="" name="user" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
">
              </div>
            <div class="form-group">
                <label for="dname"><?php echo $_smarty_tpl->tpl_vars['ph_displayname']->value;?>
</label>
                <input type="dname" class="form-control" id="dname" placeholder="" name="dname" value="<?php echo $_smarty_tpl->tpl_vars['dname']->value;?>
">
              </div>
           
        </div>
        <div class="col-md-6 formindex">
            
             <div class="form-group">
                <label for="country"><?php echo $_smarty_tpl->tpl_vars['ph_country']->value;?>
</label>
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
            <div class="form-group">
                <label for="city"><?php echo $_smarty_tpl->tpl_vars['ph_citystate']->value;?>
</label>
                <input type="city" class="form-control" id="city" placeholder=""  name="city" value="<?php echo $_smarty_tpl->tpl_vars['city']->value;?>
">
              </div>
              <div class="form-group">
                <label for="sex"><?php echo $_smarty_tpl->tpl_vars['ph_gender']->value;?>
</label>
                <select name="sex" class="form-control">
                  <option <?php if ($_smarty_tpl->tpl_vars['sex']->value==1) {?>selected<?php }?> value="1">Male</option>
                  <option <?php if ($_smarty_tpl->tpl_vars['sex']->value==2) {?>selected<?php }?> value="2">Female</option>
                  
                </select>
              </div>
        </div>
        <div class="clear"></div>
        <div class="formtit">
              <h4><?php echo $_smarty_tpl->tpl_vars['ph_profile']->value;?>
</h4>
              </div>
              <div class="col-md-12 formindex">
               
                 <div class="form-group">
                <label for="exampleInputPassword1"><?php echo $_smarty_tpl->tpl_vars['ph_biography']->value;?>
</label>
                <textarea class="form-control" rows="5" name="bio">
                    <?php echo $_smarty_tpl->tpl_vars['bio']->value;?>

                </textarea>
              </div>
                  
            </div>
        <div class="col-md-6 formindex">
              <div class="form-group">
                <label for="face"><?php echo $_smarty_tpl->tpl_vars['ph_facebook']->value;?>
</label>
                <input type="face" class="form-control" id="face" placeholder="" name="face" value="<?php echo $_smarty_tpl->tpl_vars['face']->value;?>
">
              </div>
              <div class="form-group">
                <label for="twitter"><?php echo $_smarty_tpl->tpl_vars['ph_twitter']->value;?>
</label>
                <input type="twitter" class="form-control" id="twitter" placeholder="" name="twitter" value="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
">
              </div>
            <div class="form-group">
                <label for="google"><?php echo $_smarty_tpl->tpl_vars['ph_google']->value;?>
</label>
                <input type="google" class="form-control" id="google" placeholder="" name="google" value="<?php echo $_smarty_tpl->tpl_vars['google']->value;?>
">
              </div>
            <div class="form-group">
                <label for="linkedin"><?php echo $_smarty_tpl->tpl_vars['ph_linkedin']->value;?>
</label>
                <input type="linkedin" class="form-control" id="linkedin" placeholder="" name="linkedin" value="<?php echo $_smarty_tpl->tpl_vars['linkedin']->value;?>
">
              </div>
            
            
        </div>
        <div class="col-md-6 formindex">
              <div class="form-group">
                <label for="website"><?php echo $_smarty_tpl->tpl_vars['ph_website']->value;?>
</label>
                <input type="website" class="form-control" id="website" placeholder="" name="website" value="<?php echo $_smarty_tpl->tpl_vars['website']->value;?>
">
              </div>
              <div class="form-group">
                <label for="skype"><?php echo $_smarty_tpl->tpl_vars['ph_skype']->value;?>
</label>
                <input type="skype" class="form-control" id="skype" placeholder="" name="skype" value="<?php echo $_smarty_tpl->tpl_vars['skype']->value;?>
">
              </div>
            <div class="form-group">
                <label for="yahoo"><?php echo $_smarty_tpl->tpl_vars['ph_yahoo']->value;?>
</label>
                <input type="yahoo" class="form-control" id="yahoo" placeholder="" name="yahoo" value="<?php echo $_smarty_tpl->tpl_vars['yahoo']->value;?>
">
              </div>
            <div class="form-group">
                <label for="linkedin"><?php echo $_smarty_tpl->tpl_vars['ph_registerdate']->value;?>
</label>
                <input type="text" class="form-control" placeholder="" name="reg_date" value="<?php echo $_smarty_tpl->tpl_vars['reg_date']->value;?>
" disabled>
              </div>
           
            
        </div>
              
            
            </div>
         
        	<div role="tabpanel" class="tab-pane fade" id="pic">
        		<div class="formtit">
              <h4><?php echo $_smarty_tpl->tpl_vars['ph_profilepic']->value;?>
</h4>
              </div>
              <div class="col-md-6 formindex">
        		 <div class="form-group">
            <label for="exampleInputFile"><?php echo $_smarty_tpl->tpl_vars['ph_profilepic']->value;?>
</label>
            <input type="file" id="avatar" name="file">
            <p class="help-block">Allawed ext.: jpg,gif,png,bmp.</p>

          </div>
        		</div>
        		<div class="col-md-6 formindex tcenter">
        		<img src="contents/avators/<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" class="avatorpic">
        		</div>
        		</div>
        	
          <div role="tabpanel" class="tab-pane fade" id="settings"><?php echo $_smarty_tpl->tpl_vars['ph_settings']->value;?>
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
