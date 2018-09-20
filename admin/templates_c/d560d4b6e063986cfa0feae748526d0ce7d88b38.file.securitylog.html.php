<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-20 16:48:12
         compiled from "C:\xampp\htdocs\minative\admin\templates\securitylog.html" */ ?>
<?php /*%%SmartyHeaderCode:12461564f3b44353e80-29327547%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd560d4b6e063986cfa0feae748526d0ce7d88b38' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\securitylog.html',
      1 => 1448034303,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12461564f3b44353e80-29327547',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564f3b44413539_04157462',
  'variables' => 
  array (
    'count' => 0,
    'securitylog' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564f3b44413539_04157462')) {function content_564f3b44413539_04157462($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<ol class="breadcrumb fixed">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="">Logs</li>
                <li class="active">Security log</li>
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
					<div class="panel-heading">Security log : You have (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 log)</div>
					<div class="panel-body">
						<table class="table table-condensed tablet" data-toggle="table"   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="asc">
						    <thead class="">
						    <tr>
						        <th>Userid</th>
						        <th>Time</th>
                                <th>IP</th>
                                <th>User agent</th>
                                <th>Date</th>
                                
                                <th>Actions</th>
						    </tr>
						    </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['securitylog']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            <tr>
                      
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['userid'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['time'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['ip'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['user_agent'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['i']->value['date'];?>
</td>
                            
                            <td>
                            <a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-logtable="login_attempts" href="logs.php?log=dodel" id="delbuttonlog"><i class="glyphicon glyphicon-trash deli"></i></a>
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
