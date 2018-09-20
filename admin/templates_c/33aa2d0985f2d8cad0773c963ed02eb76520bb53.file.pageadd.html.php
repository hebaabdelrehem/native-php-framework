<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-31 01:00:23
         compiled from "C:\xampp\htdocs\New\admin\templates\pageadd.html" */ ?>
<?php /*%%SmartyHeaderCode:3118754cc1b1763abd2-20834496%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '33aa2d0985f2d8cad0773c963ed02eb76520bb53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\New\\admin\\templates\\pageadd.html',
      1 => 1422142078,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3118754cc1b1763abd2-20834496',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'pagedata' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54cc1b176afef6_54451537',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54cc1b176afef6_54451537')) {function content_54cc1b176afef6_54451537($_smarty_tpl) {?><head>

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
 language="javascript" type="text/javascript" src="http://localhost/new/admin/js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
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
				
                <li class="">Pages Manager</li>
                <li class="active">Add new page</li>
			</ol>
		
		<div class="row">
			<div class="col-lg-12">
                <?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				
			</div>
             <div class="col-lg-12">
                 <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Adding new page</div>
					<div class="panel-body">
						<div class="col-md-9">
							<form role="form" id="addnewpage" name="addnewpage" action="">
							
								<div class="form-group">
									<label>Page title</label>
									<input class="form-control" placeholder="" name="pagetitle">
								</div>
																								
								<div class="form-group">
									<label>Page content</label>
									<textarea class="form-control" rows="15" name="pagecontent"></textarea>
								</div>
                                
                                <div class="form-group">
									<label>Status</label>
									<select class="form-control" name="status">
										<option value="1">Enabled</option>
										<option value="0">Disabled</option>
									</select>
								</div>
                                <div class="col-md-12 tcenter">
								<button type="submit" class="btn btn-primary" id="submit">Add page</button>
								<button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                </form>
                            </div>
                        <div class="col-md-3">
							<h4><i class="glyphicon glyphicon-file"></i> Pages You have</h4>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagedata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            
                            <i class="glyphicon glyphicon-hand-right"></i> 
                            <a href="pagemanager.php?act=viewpage&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['i']->value['pagetitle'];?>
 </a>
                            <span class="pull-right">
                                <?php if ($_smarty_tpl->tpl_vars['i']->value['status']==0) {?>
                                Disabled
                                <?php } else { ?>
                                Active
                                <?php }?>
                                </span>
                            <div class="divider2"></div>
                                <?php } ?>
                            <div class="col-md-12 tcenter" style="margin-top:20px">
                                           
                                <button type="button" class="btn btn-info" onClick="location.href='pagemanager.php?act=list'" >Manage pages</button><br><br>
                                
                                
                                       </div>
                            </div>
					</div>
				</div>
			</div>
		</div>
    </div>
          </div>

		
		
		
		
								


<?php }} ?>
