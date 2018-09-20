<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-12 08:12:51
         compiled from "/opt/lampp/htdocs/minative/admin/templates/pluginsmanager.html" */ ?>
<?php /*%%SmartyHeaderCode:1079408754dc52738b34d7-05275400%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6329003a11e66bfaf3f1ab22c3ef7e3ca7bd2268' => 
    array (
      0 => '/opt/lampp/htdocs/minative/admin/templates/pluginsmanager.html',
      1 => 1423724195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1079408754dc52738b34d7-05275400',
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
  'unifunc' => 'content_54dc52739d2f87_91112632',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dc52739d2f87_91112632')) {function content_54dc52739d2f87_91112632($_smarty_tpl) {?><head>

<link href="http://localhost/new/admin/templates/css/bootstrap.min.css" rel="stylesheet">
<link href="http://localhost/new/admin/templates/css/datepicker3.css" rel="stylesheet">
<link href="http://localhost/new/admin/templates/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<?php echo '<script'; ?>
 src="js/html5shiv.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->
<?php echo '<script'; ?>
 src="http://localhost/new/admin/templates/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://localhost/new/admin/templates/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://localhost/new/admin/templates/js/chart.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="http://localhost/new/admin/templates/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://localhost/new/admin/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://localhost/new/admin/templates/js/bootstrap-table.js"><?php echo '</script'; ?>
>
    <link href="http://localhost/new/admin/templates/css/bootstrap-table.css" rel="stylesheet">
    <?php echo '<script'; ?>
 src="http://localhost/new/admin/jquery.validate.min.js"><?php echo '</script'; ?>
>
	
</head>
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
