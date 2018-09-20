<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-08 21:57:02
         compiled from "C:\xampp\htdocs\minative\admin\templates\menuview.html" */ ?>
<?php /*%%SmartyHeaderCode:88563b99db5de505-81789689%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27f4cd759f1809fad748174fedccf2fe36343645' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\menuview.html',
      1 => 1446974785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88563b99db5de505-81789689',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_563b99db6576a0_51441119',
  'variables' => 
  array (
    'menuid' => 0,
    'menutitle' => 0,
    'url' => 0,
    'parent' => 0,
    'menusdata' => 0,
    's' => 0,
    'menus_places' => 0,
    'j' => 0,
    'place' => 0,
    'menus_types' => 0,
    'f' => 0,
    'type' => 0,
    'order' => 0,
    'status' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563b99db6576a0_51441119')) {function content_563b99db6576a0_51441119($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>

	<li class="">
		Menus maker
	</li>
	<li class="active">
		Edit menu
	</li>
</ol>

<div class="row">
	<div class="col-lg-12">
		<?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Edit menu
					</div>
					<div class="col-md-9">
						<div class="panel-body">

							<form role="form" id="editmenu" name="editmenu" action="">
								<input type="hidden" name="menuid" value="<?php echo $_smarty_tpl->tpl_vars['menuid']->value;?>
">
								<div class="form-group">
									<label>Menu title</label>
									<input class="form-control" placeholder="" name="menutitle" value="<?php echo $_smarty_tpl->tpl_vars['menutitle']->value;?>
">
								</div>

								<div class="form-group">
									<label>Url</label>
									<input class="form-control" placeholder="" name="url" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">
								</div>

								<div class="form-group">
									<label>Parent</label>
									<select class="form-control" name="parent">
										<option value="0" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1=='0') {?> selected <?php }?>>No parent</option>
										<?php  $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['s']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menusdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['s']->key => $_smarty_tpl->tpl_vars['s']->value) {
$_smarty_tpl->tpl_vars['s']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['s']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['parent']->value;?>
<?php $_tmp2=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['s']->value['id'];?>
<?php $_tmp3=ob_get_clean();?><?php if ($_tmp2==$_tmp3) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['s']->value['name'];?>
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
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['place']->value;?>
<?php $_tmp4=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['j']->value;?>
<?php $_tmp5=ob_get_clean();?><?php if ($_tmp4==$_tmp5) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['j']->value;?>
</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label>Type</label>
									<select class="form-control" name="type">
										<?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menus_types']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value) {
$_smarty_tpl->tpl_vars['f']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['f']->key;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['f']->value;?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php $_tmp6=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['f']->value;?>
<?php $_tmp7=ob_get_clean();?><?php if ($_tmp6==$_tmp7) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['f']->value;?>
</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group">
									<label>Order</label>
									<input class="form-control" placeholder="" name="order" value="<?php echo $_smarty_tpl->tpl_vars['order']->value;?>
">
								</div>
								<div class="form-group">
									<label>Status</label>
									<select class="form-control" name="status">
										<option value="1" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
<?php $_tmp8=ob_get_clean();?><?php if ($_tmp8=='1') {?> selected <?php }?>>Active</option>
										<option value="0" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
<?php $_tmp9=ob_get_clean();?><?php if ($_tmp9=='0') {?> selected <?php }?>>Not active</option>
									</select>
								</div>
								<div class="col-md-12 tcenter">
									<button type="submit" class="btn btn-primary" id="submit">
										Edit menu
									</button>
									<button type="reset" class="btn btn-default">
										Reset
									</button>
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
						<span class="pull-right"> <?php echo $_smarty_tpl->tpl_vars['i']->value['place'];?>
 | <?php if ($_smarty_tpl->tpl_vars['i']->value['status']==0) {?>
							Not active
							<?php } else { ?>
							Active
							<?php }?> </span>
						<div class="divider2"></div>
						<?php } ?>
						<div class="col-md-12 tcenter" style="margin-top:20px">

							<button type="button" class="btn btn-info" onClick="location.href='menus.php?act=list'" >
								Manage menus
							</button>
							<br>
							<br>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }} ?>
