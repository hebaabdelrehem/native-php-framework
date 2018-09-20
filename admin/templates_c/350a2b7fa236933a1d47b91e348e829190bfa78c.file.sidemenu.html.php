<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-20 20:51:17
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\sidemenu.html" */ ?>
<?php /*%%SmartyHeaderCode:310356528db5e896b4-32529844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '350a2b7fa236933a1d47b91e348e829190bfa78c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\sidemenu.html',
      1 => 1450641072,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '310356528db5e896b4-32529844',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56528db60e5419_75052991',
  'variables' => 
  array (
    'hooks' => 0,
    'i' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56528db60e5419_75052991')) {function content_56528db60e5419_75052991($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_sortby')) include 'C:\\xampp\\htdocs\\minative\\admin\\includes\\smarty\\plugins\\modifier.sortby.php';
?><div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
	<div class="logo">
						<a href="index.php">
							<img src="img/logo.png" />
						</a>
					</div>
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
			<li class=" "><a href="home.php" data-link="" id="sidelinks" target="tframe"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
            
            <li class="parent">
				<a data-toggle="collapse" href="#Settings" >
					<span class="glyphicon glyphicon-cog"></span> Settings 
					
					<span class="icon pull-right">
						<em class="glyphicon glyphicon-s glyphicon-plus"></em>
					</span> 
				</a>
				<ul class="children collapse" id="Settings">
					<li>
						<a class="" href="settings.php?setgroup=generalsettings" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-share-alt"></span> Main settings
						</a>
					</li>
					<li>
						<a class="" href="settings.php" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-share-alt"></span> Plugins settings 
						</a>
					</li>
                </ul>
			</li>
            <li class="parent">
				<a href="#">
					<span class="glyphicon glyphicon-user"></span> Users managment <span data-toggle="collapse" href="#users" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="users">
					<li>
						<a class="" href="users.php?act=list" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-share-alt"></span> List users
						</a>
					</li>
                    <li>
						<a class="" href="users.php?act=adduser" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-share-alt"></span> Add user 
						</a>
					</li>
                </ul>
			</li>
            <li class="parent">
				<a href="#">
					<span class="glyphicon glyphicon-asterisk"></span> Users Groups <span data-toggle="collapse" href="#usersg" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="usersg">
					<li>
						<a class="" href="usergroups.php?act=list" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-share-alt"></span> List users groups
						</a>
					</li>
					<li>
						<a class="" href="usergroups.php?act=addgroup" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-share-alt"></span> Add users group 
						</a>
					</li>
                </ul>
			</li>
			            <li class="parent">
				<a href="#">
					<span class="glyphicon glyphicon-retweet"></span> Plugins <span data-toggle="collapse" href="#Plugins" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="Plugins">
                    <?php if (empty($_smarty_tpl->tpl_vars['hooks']->value->add_Menu_admin)) {?>
                    
                    <?php } else { ?>
					<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = smarty_modifier_sortby($_smarty_tpl->tpl_vars['hooks']->value->add_Menu_admin,"#prio"); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>     
                            
                    <?php if (isset($_smarty_tpl->tpl_vars['i']->value['panal'])) {?>
<li class="parent">
				<a href="#">
					<span class="glyphicon glyphicon-list"></span> <?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
 <span data-toggle="collapse" href="#<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
" class="icon pull-right" style="margin-right:37px"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="<?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
">
                    <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['i']->value['panal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
?>
					<li>
						<a class="" href="<?php echo $_smarty_tpl->tpl_vars['j']->value['url'];?>
" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-share-alt"></span> <?php echo $_smarty_tpl->tpl_vars['j']->value['title'];?>

						</a>
					</li>
                    <?php } ?>
				</ul>
			</li>
                    

  <?php }?> 
                                
                <?php } ?>   
                    <?php }?>

				</ul>
			</li>
			<li class="parent">
				<a href="#">
					<span class="glyphicon glyphicon-envelope"></span> Contact center <span data-toggle="collapse" href="#contact" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="contact">
					<li>
						<a class="" href="forms.php?act=list" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-th-list"></span> Forms
						</a>
					</li>
					
					<li>
						<a class="" href="pagemanager.php?act=addpage" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-plus"></span> Send messages
						</a>
					</li>
				</ul>
			</li>
            <li class="parent">
				<a href="#">
					<span class="glyphicon glyphicon-file"></span> Pages manager <span data-toggle="collapse" href="#pageman" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="pageman">
					<li>
						<a class="" href="pagemanager.php?act=list" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-th-list"></span> List pages
						</a>
					</li>
					<li>
						<a class="" href="pagemanager.php?act=addpage" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-pencil"></span> Add new page
						</a>
					</li>
				</ul>
			</li>
			
			<li class="parent">
				<a href="#">
					<span class="glyphicon glyphicon-pencil"></span> Menus maker <span data-toggle="collapse" href="#menuman" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="menuman">
					<li>
						<a class="" href="menus.php?act=list" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-pencil"></span> List menus
						</a>
					</li>
					<li>
						<a class="" href="menus.php?act=addmenu" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-th-list"></span> Add menu
						</a>
					</li>
					<li>
						<a class="" href="menus.php?act=menuseditor" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-edit"></span> Menus Editor
						</a>
					</li>
				</ul>
			</li>
			<li class="parent">
				<a href="#">
					<span class="glyphicon glyphicon-info-sign"></span> Blocks maker <span data-toggle="collapse" href="#blockseman" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="blockseman">
					<li>
						<a class="" href="pagemanager.php?act=addpage" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-pencil"></span> List blocks
						</a>
					</li>
					<li>
						<a class="" href="pagemanager.php?act=list" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-th-list"></span> Add block
						</a>
					</li>
				</ul>
			</li>
			<li class="parent">
				<a href="#">
					<span class="glyphicon glyphicon-info-sign"></span> System logs <span data-toggle="collapse" href="#systemlogs" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span> 
				</a>
				<ul class="children collapse" id="systemlogs">
					<li>
						<a class="" href="pagemanager.php?act=addpage" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-minus"></span> Actions log
						</a>
					</li>
					<li>
						<a class="" href="pagemanager.php?act=list" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-minus"></span> Error log
						</a>
					</li>
					<li>
						<a class="" href="pagemanager.php?act=list" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-minus"></span> Email log
						</a>
					</li>
					<li>
						<a class="" href="logs.php?log=log_security" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-minus"></span> Security log
						</a>
					</li>
				</ul>
			</li>
            
			<li><a class="" href="pluginsmanager.php?act=list" data-link="" id="sidelinks" target="tframe"><span class="glyphicon glyphicon-stats"></span> Plugins manager</a></li>
			<li class="parent">
				<a data-toggle="collapse" href="#Tools" >
					<span class="glyphicon glyphicon-cog"></span> Tools 
					
					<span class="icon pull-right">
						<em class="glyphicon glyphicon-s glyphicon-plus"></em>
					</span> 
				</a>
				<ul class="children collapse" id="Tools">
					<li>
						<a class="" href="languages.php?act=list" data-link="" id="sidelinks" target="tframe">
							<span class="glyphicon glyphicon-share-alt"></span> Language manager
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Backup manager 
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> System test manager 
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Server information 
						</a>
					</li>
                </ul>
			</li>
			
			<li><a href="#" id="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
		</ul>
		
	</div><?php }} ?>
