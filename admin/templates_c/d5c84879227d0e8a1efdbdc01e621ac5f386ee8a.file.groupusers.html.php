<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-08 15:46:28
         compiled from "C:\xampp\htdocs\minative\admin\templates\groupusers.html" */ ?>
<?php /*%%SmartyHeaderCode:1594563f037a5c9625-28812841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5c84879227d0e8a1efdbdc01e621ac5f386ee8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\groupusers.html',
      1 => 1446974763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1594563f037a5c9625-28812841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_563f037a62ef49_47112765',
  'variables' => 
  array (
    'groupname' => 0,
    'groupusers' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563f037a62ef49_47112765')) {function content_563f037a62ef49_47112765($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>
	<li class="">
		Groups
	</li>
	<li class="active">
		List group users
	</li>
</ol>
</div><!--/.row-->
<div class="row">
	<div class="col-lg-12">
		<?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Users list in group "<?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
"
					</div>
					<div class="panel-body">
						<table class="table table-condensed tablet" data-toggle="table"   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="asc">
							<thead class="">
								<tr>
									<th data-field="state" data-checkbox="true">ID</th>
									<th data-field="id" data-sortable="true">ID</th>
									<th>Name</th>
									<th>Email</th>
									<th>User</th>
									<th>Regdate</th>

									<th>Actions</th>
								</tr>
							</thead>
							<tbody>
								<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupusers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['user'];?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['i']->value['reg_date'];?>
</td>

									<td><a href="#" data-toggle="modal" data-target="#messages" data-remote="false"><i class="glyphicon glyphicon-envelope messageadmin"></i></a><a href="profile.php?userid=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><i class="glyphicon glyphicon-eye-open profilei"></i></a><a href="users.php?act=viewuser&userid=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><i class="glyphicon glyphicon-cog"></i></a><a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" href="users.php?act=dodel" id="delbutton"><i class="glyphicon glyphicon-trash deli"></i></a></td>
								</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- /.col-->

</div>
<?php echo $_smarty_tpl->getSubTemplate ("messagessend.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<?php }} ?>
