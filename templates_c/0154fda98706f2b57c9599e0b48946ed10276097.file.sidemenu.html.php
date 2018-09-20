<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-08 10:38:56
         compiled from "C:\xampp\htdocs\minative\styles\minative\sidemenu.html" */ ?>
<?php /*%%SmartyHeaderCode:26642564fa28af3b9b0-29984594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0154fda98706f2b57c9599e0b48946ed10276097' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\sidemenu.html',
      1 => 1449567534,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26642564fa28af3b9b0-29984594',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fa28b0bcae3_00254809',
  'variables' => 
  array (
    'hooks' => 0,
    'i' => 0,
    'j' => 0,
    'sidemenu_menus' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fa28b0bcae3_00254809')) {function content_564fa28b0bcae3_00254809($_smarty_tpl) {?><div class="col-sm-3 col-md-3 col-lg-3">
	<div class="blocksheader">
			<h2>Side menu</h2>
			</div>
			<?php if (!empty($_smarty_tpl->tpl_vars['hooks']->value->add_Menu)) {?>
			<div class="left-sidebar sidemenupanel">
						<div class="panel-group" id="accordian"><!--category-productsr-->
							
                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hooks']->value->add_Menu; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>     
                            
                    <?php if (isset($_smarty_tpl->tpl_vars['i']->value['panal'])) {?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
									<h4 class="panel-title">
										<a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
">
											<span class="badge pull-right"><i class="fa fa-plus"></i></span>
											<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>

										</a>
									</h4>
								</div>
                                <div id="<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
" class="panel-collapse collapse">
									<div class="panel-body">
										<ul>
				                <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['panal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
                                 <li><a href="<?php echo $_smarty_tpl->tpl_vars['j']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['j']->value['title'];?>
</a></li>
                                 <?php } ?>
										</ul>
									</div>
								</div>
                                </div>
                              <?php } else { ?>
                            <div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></h4>
								</div>
							</div>
                                
                    <?php }?> 
                                
                <?php } ?>   
							
						</div><!--/category-products-->					
					</div>
			<?php }?>		
					
			<div class="left-sidebar sidemenupanel">
		<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidemenu_menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['i']->value['status']=="1") {?>
        <?php if ($_smarty_tpl->tpl_vars['i']->value['type']=="accordian") {?>
        <div class="panel-group" id="accordian">
						<div class="panel panel-default">
							<div class="panel-heading">
							<h4 class="panel-title">
								<a data-toggle="collapse" data-parent="#accordian" href="#<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
									<span class="badge pull-right"><i class="fa fa-plus"></i></span>
									<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>

								</a>
							</h4>
							</div>
							<div id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" class="panel-collapse collapse">
									<div class="panel-body" id="">
								<ul>
				                <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sidemenu_child'.($_smarty_tpl->tpl_vars['i']->value['id'])]->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
				                <?php if ($_smarty_tpl->tpl_vars['j']->value['status']=="1") {?>
                                 <li><a href="<?php echo $_smarty_tpl->tpl_vars['j']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['j']->value['name'];?>
</a></li>
                                   <?php }?>
    		<?php } ?>
                                 
										</ul>
									</div>
							</div>
						</div>
		</div>		
         			
        <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['type']=="link") {?>
        <div class="panel panel-default">
							<div class="panel-heading">
								<h4 class="panel-title"><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a></h4>
							</div>
					</div>
        <?php }?>
        <?php }?>
		<?php } ?>
		
			</div>
			    
 
            </div> 
<?php }} ?>
