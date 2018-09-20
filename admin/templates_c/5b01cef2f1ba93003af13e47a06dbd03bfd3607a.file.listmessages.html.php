<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-09 23:22:30
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\listmessages.html" */ ?>
<?php /*%%SmartyHeaderCode:22285668a9a696cdb7-86599799%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b01cef2f1ba93003af13e47a06dbd03bfd3607a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\listmessages.html',
      1 => 1448510640,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22285668a9a696cdb7-86599799',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'messdata' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5668a9a6a91d78_59959387',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5668a9a6a91d78_59959387')) {function content_5668a9a6a91d78_59959387($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				
                <li>Forms</li>
                <li class="active">List messages</li>
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
					<div class="panel-heading"><i class="glyphicon glyphicon-envelope"></i> Messages list </div>
					<div class="panel-body">
						<table class="table table-condensed tablet" data-toggle="table"   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="asc">
						    <thead class="">
						    <tr>
                                <th data-field="state" data-checkbox="true">ID</th>
						        <th>ID</th>
                                <th>Status</th>
                                <th>Title</th>
                                <th>Sender name</th>
                                <th>Sender email</th>
                                
                                <th>Date</th>
                                <th>Seen</th>
                                <th>Actions</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
                            <tr>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
                                <td  class="">
                                   <?php if ($_smarty_tpl->tpl_vars['i']->value['status']==1) {?><i class="glyphicon glyphicon-lock red"></i> Closed<?php } else { ?><i class="glyphicon glyphicon-flag green"></i> Open<?php }?>
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['title'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</td>
                                
                                <td><?php echo $_smarty_tpl->tpl_vars['i']->value['date'];?>
</td>
                                <td><?php if ($_smarty_tpl->tpl_vars['i']->value['seen']==1) {?><i class="glyphicon glyphicon-ok green"></i> Yes<?php } else { ?><i class="glyphicon glyphicon-remove red"></i> No<?php }?></td>
                            <td class="">
                            
                            <a href="forms.php?act=viewmessage&formid=<?php echo $_smarty_tpl->tpl_vars['i']->value['formid'];?>
&hash=<?php echo $_smarty_tpl->tpl_vars['i']->value['hash'];?>
"><i class="glyphicon glyphicon-envelope seemessag"></i></a>
                            
                            <a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-formid="<?php echo $_smarty_tpl->tpl_vars['i']->value['formid'];?>
" href="forms.php?act=dellmessage" id="dellmessage"><i class="glyphicon glyphicon-trash deli"></i></a>
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
