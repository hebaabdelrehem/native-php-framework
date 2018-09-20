<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-23 10:08:43
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\pagelist.html" */ ?>
<?php /*%%SmartyHeaderCode:213395652d79b598694-21705200%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83995a1fb71b58c6713b771a4e848171f8117218' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\pagelist.html',
      1 => 1445886868,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213395652d79b598694-21705200',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'pagedata' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5652d79b9f5a97_75569486',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652d79b9f5a97_75569486')) {function content_5652d79b9f5a97_75569486($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\minative\\admin\\includes\\smarty\\plugins\\modifier.truncate.php';
?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				
                <li class="">Pages Manager</li>
                <li class="active">Pages list</li>
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
					<div class="panel-heading">Pages Manager List : You have (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 page/s)</div>
					<div class="panel-body">
						<table class="table table-condensed tablet" data-toggle="table"   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="asc">
						    <thead class="">
						    <tr>
                                <th data-field="state" data-checkbox="true">ID</th>
						        <th data-field="id" data-sortable="true">ID</th>
						        <th>Page Name</th>
						        <th>Page content</th>
                                <th>Status</th>
                                <th>Actions</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagedata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['pagetitle'];?>
</td>
                            <td class="tabletext"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['i']->value['pagecontent'],200,"...",true);?>
</td>
                            <td>
                                <?php if ($_smarty_tpl->tpl_vars['i']->value['status']==0) {?>
                                Disabled
                                <?php } else { ?>
                                Active
                                <?php }?>
                                
                            </td>
                            <td class="widthplu">
                            <a href="../page.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" target="_blank"><i class="glyphicon glyphicon-eye-open profilei"></i></a>
                            <a href="pagemanager.php?act=viewpage&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><i class="glyphicon glyphicon-cog"></i></a>
                            <a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" href="pagemanager.php?act=dodel" id="delbuttonpage"><i class="glyphicon glyphicon-trash deli"></i></a>
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

		
		
		
		
								


<?php }} ?>
