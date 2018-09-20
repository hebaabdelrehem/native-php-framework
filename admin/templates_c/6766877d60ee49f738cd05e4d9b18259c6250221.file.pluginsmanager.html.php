<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-30 21:24:58
         compiled from "C:\xampp\htdocs\New\admin\templates\pluginsmanager.html" */ ?>
<?php /*%%SmartyHeaderCode:1651854cbe89acc97a1-35271982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6766877d60ee49f738cd05e4d9b18259c6250221' => 
    array (
      0 => 'C:\\xampp\\htdocs\\New\\admin\\templates\\pluginsmanager.html',
      1 => 1422638718,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1651854cbe89acc97a1-35271982',
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
  'unifunc' => 'content_54cbe89ad52340_24240476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cbe89ad52340_24240476')) {function content_54cbe89ad52340_24240476($_smarty_tpl) {?><head>

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
