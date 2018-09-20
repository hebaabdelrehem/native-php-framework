<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-15 21:19:13
         compiled from "C:\xampp\htdocs\minative\admin\templates\header.html" */ ?>
<?php /*%%SmartyHeaderCode:1088454d51876b8c303-38286678%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93cefa66b2b2084db6fe84bf9ff85a4021ec30cf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\header.html',
      1 => 1447618750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1088454d51876b8c303-38286678',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d51876ba3a07_40709506',
  'variables' => 
  array (
    'title' => 0,
    'date' => 0,
    'time' => 0,
    'name' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d51876ba3a07_40709506')) {function content_54d51876ba3a07_40709506($_smarty_tpl) {?><header>
    <div id="output3" class="alert alert-info message2" style="display:none"></div>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 </span>Admin</a>
				
				<ul class="user-menu">
                    
                    <li><?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['time']->value;?>
</li>
                     <li> | </li>
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="users.php?act=viewuser&userid=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" id="sidelinks" target="tframe"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="#" id="logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
</header><?php }} ?>
