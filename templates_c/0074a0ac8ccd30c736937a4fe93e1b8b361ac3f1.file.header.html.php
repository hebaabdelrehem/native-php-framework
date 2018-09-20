<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-30 21:50:37
         compiled from "C:\xampp\htdocs\minative\styles\minative\header.html" */ ?>
<?php /*%%SmartyHeaderCode:14726564fa28ac55614-80433512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0074a0ac8ccd30c736937a4fe93e1b8b361ac3f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\header.html',
      1 => 1448916634,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14726564fa28ac55614-80433512',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564fa28adf3776_38738219',
  'variables' => 
  array (
    'login' => 0,
    'avatar' => 0,
    'ph_hello' => 0,
    'name' => 0,
    'ph_editprofilesettings' => 0,
    'ph_editpasswordemail' => 0,
    'ph_usercp' => 0,
    'ph_logout' => 0,
    'ph_notifications' => 0,
    'scripturl' => 0,
    'ph_messages' => 0,
    'messdata' => 0,
    'i' => 0,
    'ph_logintit' => 0,
    'enablereg' => 0,
    'ph_registertit' => 0,
    'allowlangswit' => 0,
    'active_languages' => 0,
    'mainlang' => 0,
    'langswitcher' => 0,
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
    'mainmobilephone' => 0,
    'mainemail' => 0,
    'sitelogopath' => 0,
    'header_menus' => 0,
    'navbar_menus' => 0,
    'j' => 0,
    'exsearchen' => 0,
    'exwelmessen' => 0,
    'ph_welcometit' => 0,
    'exwelmess' => 0,
    'exweladven' => 0,
    'ph_advtit' => 0,
    'exweladv' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564fa28adf3776_38738219')) {function content_564fa28adf3776_38738219($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("messages.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<header id="header">
	<div class="topherader">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 float02">
					<div class="midheadermenu float02">
						<ul class="nav nav-pills">
							<?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
							<img src="contents/avators/<?php echo $_smarty_tpl->tpl_vars['avatar']->value;?>
" style="height: 37px;width: 35px;" class="float02">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle float2" data-toggle="dropdown" role="button" aria-expanded="false"> <?php echo $_smarty_tpl->tpl_vars['ph_hello']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</a>
								<ul class="dropdown-menu midheadermenu2" role="menu">

									<li>
										<a href="editprofile.php?edit=profile"><i class="glyphicon glyphicon-wrench"></i> <?php echo $_smarty_tpl->tpl_vars['ph_editprofilesettings']->value;?>
</a>
									</li>
									<li>
										<a href="editprofile.php?edit=security"><i class="glyphicon glyphicon-wrench"></i> <?php echo $_smarty_tpl->tpl_vars['ph_editpasswordemail']->value;?>
</a>
									</li>
									<li>
										<a href="usercp.php"><i class="glyphicon glyphicon-flash"></i> <?php echo $_smarty_tpl->tpl_vars['ph_usercp']->value;?>
</a>
									</li>
									<li>
										<a href="#" id="logout"><i class="glyphicon glyphicon-off"></i> <?php echo $_smarty_tpl->tpl_vars['ph_logout']->value;?>
</a>
									</li>
								</ul>
							</li>

							<li class="dropdown">
								<a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-expanded="false"> <i class="glyphicon glyphicon-bell"></i> <?php echo $_smarty_tpl->tpl_vars['ph_notifications']->value;?>
</a>

								<ul class="dropdown-menu" role="menu">
									<li>

										<img src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
contents/avators/1.jpg">
										You have one new folower.
										<span  class="action float01"> <a href="#"><i class="glyphicon glyphicon-ok"></i> <i class="glyphicon glyphicon-remove"></i></a> </span>
									</li>

									<li>

										<img src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
contents/avators/2.jpg">
										One New edited content.

										<span  class="action float01"> <a href="#"><i class="glyphicon glyphicon-ok"></i> <i class="glyphicon glyphicon-remove"></i></a> </span>
									</li>

									<li>

										<img src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
contents/avators/3.jpg">
										Another User registered.
										<span  class="action float01"> <a href="#"><i class="glyphicon glyphicon-ok"></i> <i class="glyphicon glyphicon-remove"></i></a> </span>
									</li>
									<li>

										<img src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
contents/avators/4.jpg">
										Request to folow.
										<span  class="action float01"> <a href="#"><i class="glyphicon glyphicon-ok"></i> <i class="glyphicon glyphicon-remove"></i></a> </span>
									</li>
								</ul>

							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <i class="glyphicon glyphicon-envelope"></i> <?php echo $_smarty_tpl->tpl_vars['ph_messages']->value;?>
</a>
								<ul class="dropdown-menu" role="menu">
									<table class="table table-hover" style="width: 300px">
										<thead>
											<tr>

												<th>Title</th>
												<th>Date</th>

											</tr>
										</thead>
										<tbody>
											<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
											<tr>

												<td><a href="ccenterview.php?type=contact&hash=<?php echo $_smarty_tpl->tpl_vars['i']->value['hash'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</a></td>
												<td><?php echo $_smarty_tpl->tpl_vars['i']->value['date'];?>
</td>
											</tr>
											<?php } ?>
										</tbody>
									</table>
								</ul>

							</li>
							<?php } else { ?>
							<li class="float02">
								<a href="#" data-toggle="modal" data-target="#myModal" data-remote="false"><i class="fa fa-lock"></i> <?php echo $_smarty_tpl->tpl_vars['ph_logintit']->value;?>
</a>
							</li>
							<?php if ($_smarty_tpl->tpl_vars['enablereg']->value) {?>
							<li>
								<a href="register.php"><i class="glyphicon glyphicon-user"></i> <?php echo $_smarty_tpl->tpl_vars['ph_registertit']->value;?>
</a>
							</li>
							<?php }?>
							<?php }?>

						</ul>
					</div>

				</div>
				<div class="col-sm-7 float01">

					<?php if ($_smarty_tpl->tpl_vars['allowlangswit']->value) {?>
					<div class="lang float01">
						
						<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['active_languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['i']->value['langcode']!=$_smarty_tpl->tpl_vars['mainlang']->value) {?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['langswitcher']->value;?>
lang=<?php echo $_smarty_tpl->tpl_vars['i']->value['langcode'];?>
"><img src="img/flags/<?php if ($_smarty_tpl->tpl_vars['i']->value['langcode']=='ar') {?>eg<?php } else {
echo $_smarty_tpl->tpl_vars['i']->value['langcode'];
}?>.png" /></a> 
						<?php }?>
						<?php } ?>
					</div>
					<?php }?>
					<div class="social-icons float01">
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
					<div class="contactinfohead">
						<ul class="nav nav-pills">
							<li>
								<a href="#"><i class="fa fa-phone"></i> <?php echo $_smarty_tpl->tpl_vars['mainmobilephone']->value;?>
</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-envelope"></i> <?php echo $_smarty_tpl->tpl_vars['mainemail']->value;?>
</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="midheader">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 float02">
					<div class="logo float02">
						<a href="index.php"> <img src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;
echo $_smarty_tpl->tpl_vars['sitelogopath']->value;?>
" /> </a>
					</div>
				</div>
				<div class="col-sm-9">
					<?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
					<div class="headerst float01">
						<ul class="nav nav-pills">
						<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['header_menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value['status']=="1") {?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value['type']=="link") {?>
							<li class="">
								<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
							</li>

							<?php }?>
							<?php }?>
							<?php } ?>
						</ul>
					</div>
					<?php }?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<nav class="navbar navbar-default lastmenu">
				<div class="container-fluid navback">

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

						<ul class="nav navbar-nav float02">
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navbar_menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value['status']=="1") {?>
							<?php if ($_smarty_tpl->tpl_vars['i']->value['type']=="link") {?>
							<li class="">
								<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</a>
							</li>
							<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['type']=="dropdown") {?>
							<li class="dropdown">
								<a href="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
 <i class="fa fa-angle-down"></i></a>
								<ul class="dropdown-menu" role="menu">
									<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['navbar_child'.($_smarty_tpl->tpl_vars['i']->value['id'])]->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['j']->value['status']=="1") {?>
									<li>
										<a href="<?php echo $_smarty_tpl->tpl_vars['j']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['j']->value['name'];?>
</a>
									</li>
									<?php }?>
									<?php } ?>

								</ul>
							</li>
							<?php }?>
							<?php }?>
							<?php } ?>
						</ul>
						<?php if ($_smarty_tpl->tpl_vars['exsearchen']->value) {?>
						<form class="navbar-form navbar-right float01" role="search">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="What's in your mind?">
							</div>

						</form>
						<?php }?>
						<div class="clear"></div>
						<?php if ($_smarty_tpl->tpl_vars['exwelmessen']->value) {?>
						<div class="headerbars">
							<span class="welcome float02"><?php echo $_smarty_tpl->tpl_vars['ph_welcometit']->value;?>
</span> <?php echo $_smarty_tpl->tpl_vars['exwelmess']->value;?>

						</div>
						<?php }?>

						<?php if ($_smarty_tpl->tpl_vars['exweladven']->value) {?>
						<div class="headerbars">
							<span class="adv float02"><?php echo $_smarty_tpl->tpl_vars['ph_advtit']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['exweladv']->value;?>

						</div>
						<?php }?>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>

			<?php echo $_smarty_tpl->getSubTemplate ("login.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		</div>
	</div>
</header>

<?php }} ?>
