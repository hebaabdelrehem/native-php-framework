<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-10-31 21:11:03
         compiled from "C:\xampp\htdocs\minative\admin\templates\formslist.html" */ ?>
<?php /*%%SmartyHeaderCode:1749054d633800c7098-68162461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2393240ed7793c12056923e8f7cfd0e5e9109df4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\formslist.html',
      1 => 1446322119,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1749054d633800c7098-68162461',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d6338022e6e4_71884350',
  'variables' => 
  array (
    'formsdata' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d6338022e6e4_71884350')) {function content_54d6338022e6e4_71884350($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				
                <li class="active">Forms</li>
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
					<div class="panel-heading"><i class="glyphicon glyphicon-envelope"></i> Manage your Contact forms</div>
					<div class="panel-body">
						<table class="table table-condensed tablet" data-toggle="table" data-search="true" data-sort-name="name"  data-sort-order="asc">
						    <thead class="">
						    <tr>
                                
						        <th>ID</th>
                                <th>Form name</th>
                                <th>Form template</th>
                                <th>Status</th>
                                <th>Actions</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['formsdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['formname'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['formtpl'];?>
</td>
                                <td  class="">
                                   <?php if ($_smarty_tpl->tpl_vars['i']->value['status']==1) {?>Active<?php } else { ?>Deactivated<?php }?>
                                </td>
                            <td class="widthforms">
                            <button type="button" class="btn btn-primary" onClick="location.href='forms.php?act=listmessages&st=un&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
'" >View Unread</button>
                            <button type="button" class="btn btn-warning" onClick="location.href='forms.php?act=listmessages&st=all&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
'" >View All</button>
                                <?php if ($_smarty_tpl->tpl_vars['i']->value['status']==1) {?>
                                <a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-status="0" href="forms.php?act=changeformstatus" id="formstatuschange" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-off "></i> Disable</a>
                                <?php } else { ?>
                                 <a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-status="1" href="forms.php?act=changeformstatus" id="formstatuschange" class="btn btn-success">
                                    <i class="glyphicon glyphicon-off "></i> Activate</a>
                             
                                <?php }?>
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
