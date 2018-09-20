<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-25 05:07:53
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\groupslist.html" */ ?>
<?php /*%%SmartyHeaderCode:863356553419d06bf9-02351015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1e244730f8d1c5f901d318a9f1d2dc612110a24' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\groupslist.html',
      1 => 1446972794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '863356553419d06bf9-02351015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groupdata_minative' => 0,
    'i' => 0,
    'groupdata_other' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5655341a054c84_58711695',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655341a054c84_58711695')) {function content_5655341a054c84_58711695($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="">Users</li>
                <li class="active">List user groups</li>
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
					<div class="panel-heading">MiNative groups list
						 <button type="button" class="btn btn-primary pull-right menus-but" onClick="location.href='usergroups.php?act=addgroup'">
                    	<i class="glyphicon glyphicon-cog "></i> Add group</button>
						</div>
					<div class="panel-body">
						
						<table class="table table-condensed tablet" data-toggle="table"  data-sort-order="asc">
						    <thead class="">
						    <tr>
                                <th data-field="state" data-checkbox="true">ID</th>
						        <th data-field="id" data-sortable="true">ID</th>
						        <th>Group name</th>
						        <th>Group color</th>
                                <th>User title</th>
                                <th>Actions</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupdata_minative']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                            <td><span style="color: <?php echo $_smarty_tpl->tpl_vars['i']->value['color'];?>
 !important"><?php echo $_smarty_tpl->tpl_vars['i']->value['groupname'];?>
</span></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['color'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['usertitle'];?>
</td>
                            <td>
                            <a href="usergroups.php?act=groupusers&groupid=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><i class="glyphicon glyphicon-user profilei"></i></a>
                            <a href="usergroups.php?act=viewgroup&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><i class="glyphicon glyphicon-cog"></i></a>
                            
                            </td>
                            </tr>
                                <?php } ?>
                            </tbody>
						</table>
					</div>
				</div>
				
				<div class="panel panel-default">
					<div class="panel-heading">Other groups List </div>
					<div class="panel-body">
						
						<table class="table table-condensed tablet" data-toggle="table" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="asc">
						    <thead class="">
						    <tr>
                                <th data-field="state" data-checkbox="true">ID</th>
						        <th data-field="id" data-sortable="true">ID</th>
						        <th>Group name</th>
						        <th>Group color</th>
                                <th>User title</th>
                                <th>Actions</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupdata_other']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
                            <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
</td>
                            <td><span style="color: <?php echo $_smarty_tpl->tpl_vars['j']->value['color'];?>
 !important"><?php echo $_smarty_tpl->tpl_vars['j']->value['groupname'];?>
</span></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['j']->value['color'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['j']->value['usertitle'];?>
</td>
                            <td>
                            <a href="usergroups.php?act=groupusers&groupid=<?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
"><i class="glyphicon glyphicon-user profilei"></i></a>
                            <a href="usergroups.php?act=viewgroup&id=<?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-id="<?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
" href="usergroups.php?act=dodel" id="delbuttongroup"><i class="glyphicon glyphicon-trash deli"></i></a>
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
