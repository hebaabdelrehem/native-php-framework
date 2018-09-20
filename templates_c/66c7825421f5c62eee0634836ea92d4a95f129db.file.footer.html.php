<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-30 22:41:17
         compiled from "C:\xampp\htdocs\minative\styles\minative\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:31715564fa28b1c26a3-40618043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66c7825421f5c62eee0634836ea92d4a95f129db' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\footer.html',
      1 => 1448919674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31715564fa28b1c26a3-40618043',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fa28b252f48_42464626',
  'variables' => 
  array (
    'exdatetimeen' => 0,
    'date' => 0,
    'time' => 0,
    'footer1_menus' => 0,
    'i' => 0,
    'j' => 0,
    'scripturl' => 0,
    'sitelogopath' => 0,
    'compfacebooklinken' => 0,
    'compfacebooklink' => 0,
    'comptwitterlinken' => 0,
    'comptwitterlink' => 0,
    'complinkedinlinken' => 0,
    'complinkedinlink' => 0,
    'compgoogleplinken' => 0,
    'compgoogleplink' => 0,
    'compyoutubelinken' => 0,
    'compyoutubelink' => 0,
    'comppinterestlinken' => 0,
    'comppinterestlink' => 0,
    'copyrighten' => 0,
    'copyright' => 0,
    'mainstyle' => 0,
    'login' => 0,
    'group' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fa28b252f48_42464626')) {function content_564fa28b252f48_42464626($_smarty_tpl) {?><footer id="footer">
<div class="container ">
    <div class="row datedev">
    <?php if ($_smarty_tpl->tpl_vars['exdatetimeen']->value) {?><h5 class="tcenter">Today is <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 and the time is <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
.</h5><?php }?>
    
        </div>
			<div class="row footertop">
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footer1_menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
		        <?php if ($_smarty_tpl->tpl_vars['i']->value['status']=="1") {?>
		        <?php if ($_smarty_tpl->tpl_vars['i']->value['type']=="link") {?>
		        <li class=""><a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a></li>
		        <?php } elseif ($_smarty_tpl->tpl_vars['i']->value['type']=="list") {?>
		        <div class="col-sm-3">
                 
                        <div class="footerlinks">
                             <div class="">
                    <h2><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</h2>
                    </div> 
                           <ul class="nav nav-pills nav-stacked">
                  <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['footer1_child'.($_smarty_tpl->tpl_vars['i']->value['id'])]->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                
		        
		        <?php }?>
		        <?php }?>
				<?php } ?>
				
                   
               
                <div class="col-sm-3 tcenter float01">
                        <div class="logo">
						<a href="index.php">
							<img src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;
echo $_smarty_tpl->tpl_vars['sitelogopath']->value;?>
" />
						</a> 
					</div>
                    <div class="social-icons tcenter">
						<ul class="nav nav-pills">
							<?php if ($_smarty_tpl->tpl_vars['compfacebooklinken']->value) {?>
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['compfacebooklink']->value;?>
"><i class="fa fa-facebook"></i></a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['comptwitterlinken']->value) {?>
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['comptwitterlink']->value;?>
"><i class="fa fa-twitter"></i></a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['complinkedinlinken']->value) {?>
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['complinkedinlink']->value;?>
"><i class="fa fa-linkedin"></i></a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['compgoogleplinken']->value) {?>
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['compgoogleplink']->value;?>
"><i class="fa fa-google-plus"></i></a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['compyoutubelinken']->value) {?>
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['compyoutubelink']->value;?>
"><i class="fa fa-youtube"></i></a>
							</li>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['comppinterestlinken']->value) {?>
							<li>
								<a href="<?php echo $_smarty_tpl->tpl_vars['comppinterestlink']->value;?>
"><i class="fa fa-pinterest"></i></a>
							</li>
							<?php }?>
							
						</ul>
					</div>
                    </div>
                
                </div>
        <div class="row copyright">
        <div class="col-md-6 float02"><?php if ($_smarty_tpl->tpl_vars['copyrighten']->value) {?><h4 class=""><?php echo $_smarty_tpl->tpl_vars['copyright']->value;?>
</h4><?php }?></div>
        <div class="col-md-6"><h4 class="float01">Home | Terms of services | Blog | Contact Us</h3></div>
        </div>
</div>
    </footer>
    <?php echo '<script'; ?>
 src="styles/<?php echo $_smarty_tpl->tpl_vars['mainstyle']->value;?>
/js/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
js/jquery.password_strength.js"><?php echo '</script'; ?>
>
	

    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
js/jquery.validate.min.js"><?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript">
$(function()
{
	$('.passwd').password_strength(); 
});
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['login']->value&&$_smarty_tpl->tpl_vars['group']->value==1) {?>
<?php echo $_smarty_tpl->getSubTemplate ("adminbar.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
</body>
</html><?php }} ?>
