<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-02 16:57:28
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\pluginsmanager.html" */ ?>
<?php /*%%SmartyHeaderCode:12769565f14e87fa9e4-22102934%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9bb4cdf932fda786a61a825dd470fe56b691895' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\pluginsmanager.html',
      1 => 1445886930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12769565f14e87fa9e4-22102934',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'api' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_565f14e8b2efa7_81185217',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565f14e8b2efa7_81185217')) {function content_565f14e8b2efa7_81185217($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				
                <li class="active">Plugins Manager</li>
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
					<div class="panel-heading">Manage your plugins</div>
					<div class="panel-body">
						<table class="table table-condensed tablet" data-toggle="table" data-search="true" data-sort-name="name"  data-sort-order="asc">
						    <thead class="">
						    <tr>
                                <th></th>
						        <th data-field="name" data-sortable="true">Plugin Name</th>
                                <th>Description</th>
                                <th>Version</th>
                                <th>Status</th>
                                <th>Actions</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['api']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                            <tr>
                            
                            <td class="widthplu"><img src="../plugins/<?php echo $_smarty_tpl->tpl_vars['i']->value['Name'];?>
/<?php echo $_smarty_tpl->tpl_vars['i']->value['Icon'];?>
 " width="100px" height="100px"></td>
                                <td class="boldplu"><?php echo $_smarty_tpl->tpl_vars['i']->value['Name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['Description'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['Version'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['Status'];?>
</td>
                            <td>
                                <?php echo $_smarty_tpl->tpl_vars['i']->value['linkAdd'];?>

                                <br><br>
                            <a class="btn btn-danger" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" href="users.php?act=dodel" id="delbutton">Delete</a>
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
