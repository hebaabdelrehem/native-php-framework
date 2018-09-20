<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-04 16:39:58
         compiled from "C:\xampp\htdocs\minative\admin\templates\addmenu.html" */ ?>
<?php /*%%SmartyHeaderCode:883056372cac6562f8-72592509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd97d5a262da69ed14a136bcbc02da2b6f62322eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\addmenu.html',
      1 => 1446566788,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '883056372cac6562f8-72592509',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56372cac6ac219_55430124',
  'variables' => 
  array (
    'menusdata' => 0,
    'i' => 0,
    'menus_places' => 0,
    'j' => 0,
    'menus_types' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56372cac6ac219_55430124')) {function content_56372cac6ac219_55430124($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				
                <li class="">Menus maker</li>
                <li class="active">Add new menu</li>
			</ol>
		
		<div class="row">
			<div class="col-lg-12">
                <?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			</div>
             <div class="col-lg-12">
                 <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Adding new menu</div>
					<div class="col-md-9">
					<div class="panel-body">
						
							<form role="form" id="addnewmenu" name="addnewmenu" action="">
							
								<div class="form-group">
									<label>Menu title</label>
									<input class="form-control" placeholder="" name="menutitle">
								</div>
								
								<div class="form-group">
									<label>Url</label>
									<input class="form-control" placeholder="" name="url" value="#">
								</div>
                                
                                <div class="form-group">
									<label>Parent</label>
									<select class="form-control" name="parent">
										<option value="0">No parent</option>
										<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menusdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
			                            <option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</option>
			                                <?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label>Place</label>
									<select class="form-control" name="place">
										<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menus_places']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
			                            <option value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</option>
			                                <?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label>Type</label>
									<select class="form-control" name="type">
										<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menus_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
			                            <option value="<?php echo $_smarty_tpl->tpl_vars['j']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</option>
			                                <?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label>Order</label>
									<input class="form-control" placeholder="" name="order">
								</div>
								 <div class="form-group">
									<label>Status</label>
									<select class="form-control" name="status">
										<option value="1">Enabled</option>
										<option value="0">Disabled</option>
									</select>
								</div>
                                <div class="col-md-12 tcenter">
								<button type="submit" class="btn btn-primary" id="submit">Add menu</button>
								<button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                </form>
                            </div>
					</div>
					<div class="col-md-3">
							<h4><i class="glyphicon glyphicon-file"></i> Dropdown menus</h4>
                                <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menusdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            
                            <i class="glyphicon glyphicon-hand-right"></i> 
                            <a href="pagemanager.php?act=viewpage&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
 </a>
                            <span class="pull-right">
                                <?php echo $_smarty_tpl->tpl_vars['i']->value['place'];?>
 | <?php if ($_smarty_tpl->tpl_vars['i']->value['status']==0) {?>
                                Not active
                                <?php } else { ?>
                                Active
                                <?php }?>
                                </span>
                            <div class="divider2"></div>
                                <?php } ?>
                            <div class="col-md-12 tcenter" style="margin-top:20px">
                                           
                                <button type="button" class="btn btn-info" onClick="location.href='menus.php?act=list'" >Manage menus</button><br><br>
                                
                                
                                       </div>
                            </div>
				</div>
			</div>
		</div>
    </div>
         </div><?php }} ?>
