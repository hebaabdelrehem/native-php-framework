<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-12 08:12:34
         compiled from "/opt/lampp/htdocs/minative/admin/templates/settings.html" */ ?>
<?php /*%%SmartyHeaderCode:56419220354dc526275ccf1-00554193%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d2600238282eb2437ccc9ddcf48d91217d4856f' => 
    array (
      0 => '/opt/lampp/htdocs/minative/admin/templates/settings.html',
      1 => 1423724195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '56419220354dc526275ccf1-00554193',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sitename' => 0,
    'siteurl' => 0,
    'scriptfolder' => 0,
    'adminmail' => 0,
    'metadisc' => 0,
    'metakey' => 0,
    'chkyes' => 0,
    'chkno' => 0,
    'closingmessage' => 0,
    'enableregyes' => 0,
    'enableregno' => 0,
    'uniqueemailyes' => 0,
    'uniqueemailno' => 0,
    'uniqueusernameyes' => 0,
    'uniqueusernameno' => 0,
    'mailconfirmyes' => 0,
    'mailconfirmno' => 0,
    'adminconfirmyes' => 0,
    'adminconfirmno' => 0,
    'disabledusernames' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54dc52628352a1_41492948',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dc52628352a1_41492948')) {function content_54dc52628352a1_41492948($_smarty_tpl) {?><head>

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
 src="http://localhost/new/admin/templates/js/chart.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://localhost/new/admin/templates/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://localhost/new/admin/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://localhost/new/admin/jquery.validate.min.js"><?php echo '</script'; ?>
>
	
</head>
			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="">Settings</li>
                <li class="active">Main Settings</li>
			</ol>
		</div><!--/.row-->
		

		<div class="row">
			<div class="col-lg-12">
                <?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				
			</div>
             <div class="col-lg-12">
            <div role="tabpanel"  class="tabssty">

      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#main" aria-controls="home" role="tab" data-toggle="tab">Main settings</a></li>
        <li role="presentation"><a href="#user" aria-controls="profile" role="tab" data-toggle="tab">User regitration</a></li>
        <li role="presentation"><a href="#lang" aria-controls="messages" role="tab" data-toggle="tab">Language & styles</a></li>
        <li role="presentation"><a href="#cache" aria-controls="settings" role="tab" data-toggle="tab">Cache and compile</a></li>
      </ul>

      <!-- Tab panes -->
                <form role="form" class="form-horizontal" id="updatesettings" name="updatesettings" action="settings.php?act=edit">
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade in active" id="main">
                   
               
				<div class="panel panel-default">
					<div class="panel-body">
            <h1 class="page-header">Main settings</h1>
						<div class="col-md-6">
								<div class="form-group">
									<div class="col-md-3"><label>Site Name</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['sitename']->value;?>
" name="sitename">
                                    <dfn>You web site main title that will be used by the script to your users.</dfn>
                                        </div>
								</div>
											 <div class="divider"></div>					
								<div class="form-group">
									<div class="col-md-3"><label>Site Url</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['siteurl']->value;?>
" name="siteurl">
                                    <dfn>You web site main title that will be used by the script to your users.</dfn>
                                        </div>
								</div>
								 <div class="divider"></div>
								<div class="form-group">
									<div class="col-md-3"><label>Script folder</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value=<?php echo $_smarty_tpl->tpl_vars['scriptfolder']->value;?>
 name="scriptfolder">
                                    <dfn>You web site main title that will be used by the script to your users.</dfn>
                                        </div>
								</div>
                                 <div class="divider"></div>
                                <div class="form-group">
									<div class="col-md-3"><label>Admin mail</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['adminmail']->value;?>
" name="adminmail">
                                    <dfn>You web site main title that will be used by the script to your users.</dfn>
                                        </div>
								</div>
                            <div class="divider"></div>
                                <div class="form-group">
									<div class="col-md-3"><label>Meta Description</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['metadisc']->value;?>
" name="metadisc">
                                    <dfn>You web site main title that will be used by the script to your users.</dfn>
                                        </div>
								</div>
                            <div class="divider"></div>
                                <div class="form-group">
									<div class="col-md-3"><label>Meta keyword</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['metakey']->value;?>
" name="metakey">
                                    <dfn>You web site main title that will be used by the script to your users.</dfn>
                                        </div>
								</div>
								
							</div>
							<div class="col-md-6">
							     <div class="form-group">
                                     <div class="col-md-3"><label>Close?</label></div>
                                    <div class="col-md-9">
									
									<select class="form-control" name="close">
										<option <?php echo $_smarty_tpl->tpl_vars['chkyes']->value;?>
 value="1">Yes</option>
										<option <?php echo $_smarty_tpl->tpl_vars['chkno']->value;?>
 value="0">No</option>
									</select>
                                        <dfn>If you want to close your website from users.</dfn>
                                        </div>
								</div>
                                
                                <div class="divider"></div>
                                
								<div class="form-group">
                                    <div class="col-md-3"><label>Closing messages</label></div>
                                    <div class="col-md-9">
									<textarea class="form-control" rows="5" name="closingmessage"><?php echo $_smarty_tpl->tpl_vars['closingmessage']->value;?>
</textarea>
                                        <dfn>Your closing message to view it to the users.</dfn>
                                        </div>
								</div>
                                <div class="divider"></div>
							</div>
                            
						
					</div>
				</div>
			  
        </div>
        <div role="tabpanel" class="tab-pane fade" id="user">
          
        <div class="panel panel-default">
					<div class="panel-body">
            
						<div class="col-md-6">
							
							
								<div class="form-group">
                                     <div class="col-md-3"><label>Enable regitration</label></div>
                                    <div class="col-md-9">
									
									<select class="form-control" name="enablereg">
										<option <?php echo $_smarty_tpl->tpl_vars['enableregyes']->value;?>
 value="1">Yes</option>
										<option <?php echo $_smarty_tpl->tpl_vars['enableregno']->value;?>
 value="0">No</option>
									</select>
                                        <dfn>If you want to close your website from users.</dfn>
                                        </div>
								</div>
								<div class="divider"></div>					
								<div class="form-group">
                                     <div class="col-md-3"><label>Unique email</label></div>
                                    <div class="col-md-9">
									
									<select class="form-control" name="uniqueemail">
										<option <?php echo $_smarty_tpl->tpl_vars['uniqueemailyes']->value;?>
 value="1">Yes</option>
										<option <?php echo $_smarty_tpl->tpl_vars['uniqueemailno']->value;?>
 value="0">No</option>
									</select>
                                        <dfn>If you want to close your website from users.</dfn>
                                        </div>
								</div>
								 <div class="divider"></div>
								<div class="form-group">
                                     <div class="col-md-3"><label>Unique ueser</label></div>
                                    <div class="col-md-9">
									
									<select class="form-control" name="uniqueusername">
										<option <?php echo $_smarty_tpl->tpl_vars['uniqueusernameyes']->value;?>
 value="1">Yes</option>
										<option <?php echo $_smarty_tpl->tpl_vars['uniqueusernameno']->value;?>
 value="0">No</option>
									</select>
                                        <dfn>If you want to close your website from users.</dfn>
                                        </div>
								</div>
                                 <div class="divider"></div>
                                <div class="form-group">
                                     <div class="col-md-3"><label>Mail confirmation</label></div>
                                    <div class="col-md-9">
									
									<select class="form-control" name="mailconfirm">
										<option <?php echo $_smarty_tpl->tpl_vars['mailconfirmyes']->value;?>
 value="1">Yes</option>
										<option <?php echo $_smarty_tpl->tpl_vars['mailconfirmno']->value;?>
 value="0">No</option>
									</select>
                                        <dfn>If you want to close your website from users.</dfn>
                                        </div>
								</div>
                            <div class="divider"></div>
                                <div class="form-group">
                                     <div class="col-md-3"><label>Admin confirm</label></div>
                                    <div class="col-md-9">
									
									<select class="form-control" name="adminconfirm">
										<option <?php echo $_smarty_tpl->tpl_vars['adminconfirmyes']->value;?>
 value="1">Yes</option>
										<option <?php echo $_smarty_tpl->tpl_vars['adminconfirmno']->value;?>
 value="0">No</option>
									</select>
                                        <dfn>If you want to close your website from users.</dfn>
                                        </div>
								</div>
                            <div class="divider"></div>
                                <div class="form-group">
									<div class="col-md-3"><label>Disabled usernames</label></div>
                                    <div class="col-md-9">
									<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['disabledusernames']->value;?>
" name="disabledusernames">
                                    <dfn>You web site main title that will be used by the script to your users.</dfn>
                                        </div>
								</div>
							</div>
					</div>
				</div>  
        </div>
        <div role="tabpanel" class="tab-pane fade" id="lang">lang</div>
        <div role="tabpanel" class="tab-pane fade" id="cache">cache</div>
          <div class="col-md-12 tcenter">
								<button type="submit" class="btn btn-primary" id="submit">Submit Button</button>
								<button type="reset" class="btn btn-default">Reset Button</button>
                                    </div>
          </form>
      </div>
                        
    </div>
           </div><!-- /.col--> 

		</div>

		
		
		
		
								


<?php }} ?>
