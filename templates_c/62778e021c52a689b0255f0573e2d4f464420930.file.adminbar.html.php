<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-21 01:27:17
         compiled from "C:\xampp\htdocs\minative\styles\minative\adminbar.html" */ ?>
<?php /*%%SmartyHeaderCode:13946564fba655e9ed5-94061320%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '62778e021c52a689b0255f0573e2d4f464420930' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\adminbar.html',
      1 => 1447881562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13946564fba655e9ed5-94061320',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'closeadmin' => 0,
    'enablereg' => 0,
    'face' => 0,
    'twitter' => 0,
    'linkedin' => 0,
    'google' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fba656ebc10_04615703',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fba656ebc10_04615703')) {function content_564fba656ebc10_04615703($_smarty_tpl) {?><div class="adminbar">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 float02">
                    <div class="">
						<ul class="nav nav-pills">
                            <li>
								<a href="layout.php" target="_blank"><i class="glyphicon glyphicon-th"></i> Layout formation</a>
							</li>
                            <li>
								<a href="admin/" target="_blank"><i class="glyphicon glyphicon-edit"></i> Admin panel</a>
							</li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['closeadmin']->value=='On') {?>bg-primary<?php } elseif ($_smarty_tpl->tpl_vars['closeadmin']->value=='Off') {?>red<?php }?>">
								<a href="#"><i class="glyphicon glyphicon-home"></i> Your website is <?php echo $_smarty_tpl->tpl_vars['closeadmin']->value;?>
</a>
							</li>
                            <li class="<?php if ($_smarty_tpl->tpl_vars['enablereg']->value) {?>bg-primary<?php } elseif (!$_smarty_tpl->tpl_vars['enablereg']->value) {?>red<?php }?>">
								<a href="#"><i class="glyphicon glyphicon-user"></i> Regstration is <?php if ($_smarty_tpl->tpl_vars['enablereg']->value) {?>On<?php } elseif (!$_smarty_tpl->tpl_vars['enablereg']->value) {?>Off<?php }?></a>
							</li>
						</ul>
					</div>
                    
				</div>
				<div class="col-sm-6 float01">
                        
                   		<div class="social-icons float01">
                            
						<ul class="nav nav-pills">
                          
							<li>
								<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['face']->value;?>
"><i class="fa fa-facebook"></i></a>
							</li>
							<li>
								<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['twitter']->value;?>
"><i class="fa fa-twitter"></i></a>
							</li>
							<li>
								<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['linkedin']->value;?>
"><i class="fa fa-linkedin"></i></a>
							</li>
							<li>
								<a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['google']->value;?>
"><i class="fa fa-google-plus"></i></a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>
<?php }} ?>
