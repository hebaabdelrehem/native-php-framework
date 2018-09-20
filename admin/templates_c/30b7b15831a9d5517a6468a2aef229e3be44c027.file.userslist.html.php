<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-23 05:13:50
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\userslist.html" */ ?>
<?php /*%%SmartyHeaderCode:101525652927e039678-63184999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30b7b15831a9d5517a6468a2aef229e3be44c027' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\userslist.html',
      1 => 1447006629,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101525652927e039678-63184999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'data' => 0,
    'i' => 0,
    'datagroup' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5652927e12b9b0_10587386',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652927e12b9b0_10587386')) {function content_5652927e12b9b0_10587386($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<ol class="breadcrumb fixed">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="">Users</li>
                <li class="active">List users</li>
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
					<div class="panel-heading">Users List : You have (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 User)</div>
					<div class="panel-body">
						<table class="table table-condensed tablet" data-toggle="table"   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="asc">
						    <thead class="">
						    <tr>
                                <th data-field="state" data-checkbox="true">User ID</th>
						        <th data-field="id" data-sortable="true">User ID</th>
						        <th>Name</th>
						        <th>Email</th>
                                <th>User</th>
                                <th>Regdate</th>
                                <th>Group</th>
                                <th>Actions</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                            <td>
                            	<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datagroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
                            	<?php if ($_smarty_tpl->tpl_vars['i']->value['group_id']==$_smarty_tpl->tpl_vars['j']->value['id']) {
echo $_smarty_tpl->tpl_vars['j']->value['groupname'];
}?>
                            	<?php } ?>
                            	
                            </td>
                            <td>
                            <a href="#" data-toggle="modal" data-target="#messages" data-remote="false"><i class="glyphicon glyphicon-envelope messageadmin"></i></a>
                            <a href="profile.php?userid=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><i class="glyphicon glyphicon-eye-open profilei"></i></a>
                            <a href="users.php?act=viewuser&userid=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" href="users.php?act=dodel" id="delbutton"><i class="glyphicon glyphicon-trash deli"></i></a>
                            </td>
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
