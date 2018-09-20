<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-24 03:03:26
         compiled from "C:\xampp\htdocs\minative\styles\minative\register.html" */ ?>
<?php /*%%SmartyHeaderCode:15261564fa28ae55202-73609097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68c7fdcd1b0a70f44cc90cd5fbe2e377f64ceb81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\register.html',
      1 => 1448313637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15261564fa28ae55202-73609097',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fa28af18731_89082896',
  'variables' => 
  array (
    'ph_home' => 0,
    'ph_registertit' => 0,
    'login' => 0,
    'enablereg' => 0,
    'ph_maininfo' => 0,
    'ph_profile' => 0,
    'ph_settings' => 0,
    'ph_name' => 0,
    'ph_email' => 0,
    'ph_username' => 0,
    'ph_displayname' => 0,
    'ph_gender' => 0,
    'ph_male' => 0,
    'ph_female' => 0,
    'ph_password' => 0,
    'ph_cpassword' => 0,
    'ph_country' => 0,
    'data' => 0,
    'i' => 0,
    'ph_citystate' => 0,
    'captchaen' => 0,
    'recaptchaen' => 0,
    'recaptchasitekey' => 0,
    'captchareloaden' => 0,
    'ph_refresh' => 0,
    'tosactivate' => 0,
    'ph_tos' => 0,
    'termspagelink' => 0,
    'ph_link' => 0,
    'termscontent' => 0,
    'ph_tosagree' => 0,
    'ph_biography' => 0,
    'ph_facebook' => 0,
    'ph_twitter' => 0,
    'ph_google' => 0,
    'ph_linkedin' => 0,
    'uploaduseravator' => 0,
    'ph_profilepic' => 0,
    'ph_website' => 0,
    'ph_skype' => 0,
    'ph_yahoo' => 0,
    'ph_submitregister' => 0,
    'ph_reset' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fa28af18731_89082896')) {function content_564fa28af18731_89082896($_smarty_tpl) {?><section>
<div class="container">

        <?php echo $_smarty_tpl->getSubTemplate ("sidemenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    
<div class="col-sm-9 col-md-9 col-lg-9 float02">
        <div class="row">
            <ol class="breadcrumb">
              <li><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['ph_home']->value;?>
</a></li>
              <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['ph_registertit']->value;?>
</a></li>
              
            </ol>
            
            <?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
            <div id="output" class="alert alert-success message">You are already registered</div>
            <?php } elseif (!$_smarty_tpl->tpl_vars['enablereg']->value) {?>
            
            <div id="output" class="alert alert-danger message">Sorry the registration is disabled now, come back later</div>
            <?php } else { ?>
            <div class="col-md-12 formtabs">
            
        <div role="tabpanel">
            
          <!-- Nav tabs -->
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#main" aria-controls="main" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['ph_maininfo']->value;?>
</a></li>
            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['ph_profile']->value;?>
</a></li>
            <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['ph_settings']->value;?>
</a></li>
          </ul>

          <!-- Tab panes -->
            <form method="post" id="register-form" enctype="multipart/form-data">
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
                <input type="name" class="form-control" id="name" placeholder="" name="name">
              </div>
              <div class="form-group">
                <label for="email"><?php echo $_smarty_tpl->tpl_vars['ph_email']->value;?>
</label>
                <input type="email" class="form-control" id="email" placeholder="" name="email">
              </div>
            <div class="form-group">
                <label for="user"><?php echo $_smarty_tpl->tpl_vars['ph_username']->value;?>
</label>
                <input type="user" class="form-control" id="user" placeholder="" name="user">
              </div>
            <div class="form-group">
                <label for="dname"><?php echo $_smarty_tpl->tpl_vars['ph_displayname']->value;?>
</label>
                <input type="dname" class="form-control" id="dname" placeholder="" name="dname">
              </div>
            <div class="form-group">
                <label for="sex"><?php echo $_smarty_tpl->tpl_vars['ph_gender']->value;?>
</label>
                <select name="sex" class="form-control">
                  <option value="1"><?php echo $_smarty_tpl->tpl_vars['ph_male']->value;?>
</option>
                  <option value="2"><?php echo $_smarty_tpl->tpl_vars['ph_female']->value;?>
</option>
                  
                </select>
              </div>
        </div>
        <div class="col-md-6 formindex">
            <div class="form-group" id="wrapper">
            	<div id="form">
                <label for="exampleInputPassword1"><?php echo $_smarty_tpl->tpl_vars['ph_password']->value;?>
</label>
                <input type="password" class="form-control passwd" autocomplete="off" placeholder="" name="password">
                </div>
              </div>
              
              
            <div class="form-group">
                <label for="cpassword"><?php echo $_smarty_tpl->tpl_vars['ph_cpassword']->value;?>
</label>
                <input type="password" class="form-control" id="cpassword" placeholder="" name="cpassword">
              </div>
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
"><?php echo $_smarty_tpl->tpl_vars['i']->value['nicename'];?>
</option>
                    <?php } ?>
                </select>
              </div>
            <div class="form-group">
                <label for="city"><?php echo $_smarty_tpl->tpl_vars['ph_citystate']->value;?>
</label>
                <input type="city" class="form-control" id="city" placeholder=""  name="city">
              </div>
              <div class="form-group">
              <?php if ($_smarty_tpl->tpl_vars['captchaen']->value) {?>
              <?php if ($_smarty_tpl->tpl_vars['recaptchaen']->value) {?>
              <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['recaptchasitekey']->value;?>
"></div>
              <?php } else { ?>
               
                <img id="captcha" src="captcha.php"/>
                <?php if ($_smarty_tpl->tpl_vars['captchareloaden']->value) {?>
                <a id='reload'><?php echo $_smarty_tpl->tpl_vars['ph_refresh']->value;?>
</a>
                <?php }?>
                <input type="city" class="form-control" id="captcha" placeholder=""  name="captcha">
             
              <?php }?>
              <?php }?>
               </div>
              
        </div>
        <?php if ($_smarty_tpl->tpl_vars['tosactivate']->value) {?>
              <div class="col-md-12 formindex">
               
                 <div class="form-group">
                <label for="exampleInputPassword1"><?php echo $_smarty_tpl->tpl_vars['ph_tos']->value;?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['termspagelink']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ph_link']->value;?>
</a> " </label>
                <textarea class="form-control" rows="12">
				<?php echo $_smarty_tpl->tpl_vars['termscontent']->value;?>

                </textarea>
              </div>
              
                  <div class="checkbox">
                <label> <?php echo $_smarty_tpl->tpl_vars['ph_tosagree']->value;?>
</label>
                      <label>
                  <input type="checkbox" name="tos" id="tos" value="c">
                </label>
              </div> 
            </div>
            <?php }?>
            </div>
          <div role="tabpanel" class="tab-pane fade" id="profile">
              <div class="formtit">
              <h4><?php echo $_smarty_tpl->tpl_vars['ph_profile']->value;?>
</h4>
              </div>
              <div class="col-md-12 formindex">
               
                 <div class="form-group">
                <label for="exampleInputPassword1"><?php echo $_smarty_tpl->tpl_vars['ph_biography']->value;?>
</label>
                <textarea class="form-control" rows="5" name="bio"></textarea>
              </div>
                  
            </div>
        <div class="col-md-6 formindex">
              <div class="form-group">
                <label for="face"><?php echo $_smarty_tpl->tpl_vars['ph_facebook']->value;?>
</label>
                <input type="face" class="form-control" id="face" placeholder="" name="face">
              </div>
              <div class="form-group">
                <label for="twitter"><?php echo $_smarty_tpl->tpl_vars['ph_twitter']->value;?>
</label>
                <input type="twitter" class="form-control" id="twitter" placeholder="" name="twitter">
              </div>
            <div class="form-group">
                <label for="google"><?php echo $_smarty_tpl->tpl_vars['ph_google']->value;?>
</label>
                <input type="google" class="form-control" id="google" placeholder="" name="google">
              </div>
            <div class="form-group">
                <label for="linkedin"><?php echo $_smarty_tpl->tpl_vars['ph_linkedin']->value;?>
</label>
                <input type="linkedin" class="form-control" id="linkedin" placeholder="" name="linkedin">
              </div>
              <?php if ($_smarty_tpl->tpl_vars['uploaduseravator']->value) {?>
             <div class="form-group">
            <label for="exampleInputFile"><?php echo $_smarty_tpl->tpl_vars['ph_profilepic']->value;?>
</label>
            <input type="file" id="avatar" name="file">
            <p class="help-block">Allawed ext.: jpg,gif,png,bmp.</p>
          </div>
            <?php }?>
        </div>
        <div class="col-md-6 formindex">
              <div class="form-group">
                <label for="website"><?php echo $_smarty_tpl->tpl_vars['ph_website']->value;?>
</label>
                <input type="website" class="form-control" id="website" placeholder="" name="website">
              </div>
              <div class="form-group">
                <label for="skype"><?php echo $_smarty_tpl->tpl_vars['ph_skype']->value;?>
</label>
                <input type="skype" class="form-control" id="skype" placeholder="" name="skype">
              </div>
            <div class="form-group">
                <label for="yahoo"><?php echo $_smarty_tpl->tpl_vars['ph_yahoo']->value;?>
</label>
                <input type="yahoo" class="form-control" id="yahoo" placeholder="" name="yahoo">
              </div>
            
           
            
        </div>
                 
        </div>
          <div role="tabpanel" class="tab-pane fade" id="settings"><?php echo $_smarty_tpl->tpl_vars['ph_settings']->value;?>
</div>
                  <div class="col-md-12 formindex  tcenter">
               
                  <button  type="submit" class="btn btn-default" id="submit"><?php echo $_smarty_tpl->tpl_vars['ph_submitregister']->value;?>
</button>
                  <button type="reset" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['ph_reset']->value;?>
</button>
            </div> 
                  
            </div>
            </form>
            </div>    
            </div>
            <?php }?>
            </div>
</div>
   
        
</section>
    



   
    <?php }} ?>
