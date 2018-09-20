<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-04 16:08:10
         compiled from "C:\xampp\htdocs\minative\admin\templates\menuseditor.html" */ ?>
<?php /*%%SmartyHeaderCode:13090563a1f5a258ee9-37605357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'edfc8dbed2434891ca632598e1a12f1469323742' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\menuseditor.html',
      1 => 1446649462,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13090563a1f5a258ee9-37605357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count' => 0,
    'i' => 0,
    'menusdata' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_563a1f5a36a623_06070920',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563a1f5a36a623_06070920')) {function content_563a1f5a36a623_06070920($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="">Menus Maker</li>
                <li class="active">Menus List</li>
			</ol>
		</div>
		<div class="row">
			<div class="col-lg-12">
                <?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				
			</div>
             <div class="col-lg-12">
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Menus List : You have (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 menus)
					<a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-status="1" href="menus.php?act=addmenu" class="btn btn-primary pull-right">
                                    <i class="glyphicon glyphicon-plus "></i> Add menu</a>	
						</div>
					<div class="panel-body">
						<table class="table table-condensed tablet" data-toggle="table"   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="asc">
						    <thead class="">
						    <tr>
                                <th data-field="state" data-checkbox="true">ID</th>
						        <th data-field="id" data-sortable="true">ID</th>
						        <th>Name</th>
						        <th>Parent</th>
						        <th>Url</th>
                                <th>Type</th>
                                <th>Place</th>
                                <th>Childs</th>
                                <th>Order</th>
                                <th>Status</th>
                                
                                <th>Actions</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menusdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
                            <td><?php if ($_smarty_tpl->tpl_vars['i']->value['parent']==0) {?> No parent <?php } else { ?> <?php echo $_smarty_tpl->tpl_vars['i']->value['parent'];?>
 <?php }?></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['type'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['place'];?>
</td>
                             <td><?php if ($_smarty_tpl->tpl_vars['i']->value['type']!='link') {?><a href="menus.php?act=viewmenu&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" >
                           	<i class="glyphicon glyphicon-list" style="margin-right: 0px !important"></i></a><?php }?>
                            </td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['order'];?>
</td>
                           <td><?php if ($_smarty_tpl->tpl_vars['i']->value['status']==1) {?><i class="glyphicon glyphicon-ok green"></i> Active <?php } else { ?><i class="glyphicon glyphicon-remove red"></i> Not Active <?php }?></td>
                            <td>
                            <a data-toggle="modal" class="editmenu" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['i']->value['type'];?>
" data-place="<?php echo $_smarty_tpl->tpl_vars['i']->value['place'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" data-order="<?php echo $_smarty_tpl->tpl_vars['i']->value['order'];?>
" data-status="<?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
" href="#myModal"><i class="glyphicon glyphicon-cog"></i></a>    

                            <a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" href="menus.php?act=dodel" id="delbuttonmenu"><i class="glyphicon glyphicon-trash deli"></i></a>
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
           </div>
</div>
<?php }} ?>
