<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-30 19:24:39
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\viewmenuschild.html" */ ?>
<?php /*%%SmartyHeaderCode:6681565607abd64355-83674793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af328a926caa2b8d99e52c28b6197fb12b2cbe49' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\viewmenuschild.html',
      1 => 1448907877,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6681565607abd64355-83674793',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_565607abe91021_91806623',
  'variables' => 
  array (
    'pname' => 0,
    'type' => 0,
    'url' => 0,
    'order' => 0,
    'status' => 0,
    'menuid' => 0,
    'menuchild' => 0,
    'i' => 0,
    'menusdata' => 0,
    'j' => 0,
    'languages' => 0,
    'language' => 0,
    'a' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565607abe91021_91806623')) {function content_565607abe91021_91806623($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>
	<li class="">
		Menus Maker
	</li>
	<li class="active">
		Menu <?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
 childs
	</li>
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
					<div class="panel-heading">
						Childs list for "<?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
" menu
						<button type="button" class="btn btn-primary pull-right menus-but" onClick="location.href='menus.php?act=addmenu'">
							<i class="glyphicon glyphicon-plus "></i> Add new menu
						</button>
					</div>

					<div class="panel-heading">
						<i class="glyphicon glyphicon-edit "></i> Type : <?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 | Url : <?php echo $_smarty_tpl->tpl_vars['url']->value;?>
 | Order : <?php echo $_smarty_tpl->tpl_vars['order']->value;?>
 |
						<?php if ($_smarty_tpl->tpl_vars['status']->value==1) {?>
						<i class="glyphicon glyphicon-ok green"></i> Active
						<?php } else { ?>
						<i class="glyphicon glyphicon-remove red"></i> Not Active
						<?php }?>
						<button type="button" class="btn btn-warning pull-right menus-but" onClick="location.href='menus.php?act=editmenu&menuid=<?php echo $_smarty_tpl->tpl_vars['menuid']->value;?>
'" >
							<i class="glyphicon glyphicon-edit "></i> Edit menu
						</button>
						<?php if ($_smarty_tpl->tpl_vars['status']->value==1) {?>
						<a data-id="<?php echo $_smarty_tpl->tpl_vars['menuid']->value;?>
" data-status="0" data-type="menus" href="menus.php?act=menuschangest" id="menuschangest" class="btn btn-danger pull-right menus-but"> <i class="glyphicon glyphicon-off "></i> Disable menu</a>
						<?php } else { ?>
						<a data-id="<?php echo $_smarty_tpl->tpl_vars['menuid']->value;?>
" data-status="1" data-type="menus" href="menus.php?act=menuschangest" id="menuschangest" class="btn btn-success pull-right menus-but"> <i class="glyphicon glyphicon-off "></i> Activate menu</a>
						<?php }?>
					</div>

					<div class="col-lg-9">

						<div class="panel-body">
							<table class="table table-condensed tablet" data-toggle="table"   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="order" data-sort-order="asc">
								<thead class="">
									<tr>
										<th data-field="id" data-sortable="true">ID</th>
										<th>Name</th>
										<th>Parent</th>
										<th>URL</th>
										<th>Order</th>
										<th>Status</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menuchild']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
										<td> <?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
 </td>
										<td> <?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menusdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
										<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
<?php $_tmp1=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value['parent'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_tmp1==$_tmp2) {?> <?php echo $_smarty_tpl->tpl_vars['j']->value['name'];?>
 <?php }?>
										<?php } ?> </td>
										<td> <?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
 </td>
										<td> <?php echo $_smarty_tpl->tpl_vars['i']->value['order'];?>
 </td>
										<td> <?php if ($_smarty_tpl->tpl_vars['i']->value['status']==1) {?><i class="glyphicon glyphicon-ok green"></i> Active <?php } else { ?><i class="glyphicon glyphicon-remove red"></i> Not Active <?php }?></td>
										<td><a data-toggle="modal" class="editlink" data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['i']->value['url'];?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['i']->value['parent'];?>
" data-order="<?php echo $_smarty_tpl->tpl_vars['i']->value['order'];?>
" data-status="<?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
" href="#myModal"><i class="glyphicon glyphicon-cog"></i></a><a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" href="menus.php?act=delchild" id="delbuttonchild"><i class="glyphicon glyphicon-trash deli"></i></a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>

					<div class="col-lg-3 tabssty">
						<h4><i class="glyphicon glyphicon-plus profilei"></i> Add new link </h4>
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active">
								<a href="#en" aria-controls="english" role="tab" data-toggle="tab">English</a>
							</li>
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['language']->value['langcode']!='en') {?>
							<li role="presentation">
								<a href="#<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
" aria-controls="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
 </a>
							</li>
							<?php }?>
							<?php } ?>
						</ul>
						<form role="form" id="addmenuchild" name="addmenuchild" action="">
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="en">
									<div class="form-group">
										<label>English Link title</label>
										<input class="form-control" placeholder="" name="childname">
									</div>
								</div>
								<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['language']->value['langcode']!='en') {?>
								<div role="tabpanel" class="tab-pane" id="<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
">
									<input class="form-control" placeholder="" name="lang[]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" type="hidden">
									<div class="form-group">
										<label><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
 Link title</label>
										<input class="form-control" placeholder="" name="childname<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
									</div>
								</div>
								<?php }?>
								<?php } ?>
								<div class="form-group">
									<label>Url</label>
									<input class="form-control" placeholder="" name="url" value="#">
								</div>

								<div class="form-group">
									<label>Parent</label>
									<select class="form-control" name="parent">

										<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menusdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['a']->key;
?>
										<?php if ($_smarty_tpl->tpl_vars['a']->value['url']=="#") {?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
<?php $_tmp3=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['pname']->value;?>
<?php $_tmp4=ob_get_clean();?><?php if ($_tmp3==$_tmp4) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
 ( <?php echo $_smarty_tpl->tpl_vars['a']->value['type'];?>
 ) ( <?php echo $_smarty_tpl->tpl_vars['a']->value['place'];?>
 )</option>
										<?php }?>
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
										<option value="1">Active</option>
										<option value="0">Not active</option>
									</select>
								</div>
								<div class="col-md-12 tcenter settingbutdiv">
									Other languages to add :
									<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
									<?php if ($_smarty_tpl->tpl_vars['language']->value['langcode']!='en') {?>
									<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

									<input type="checkbox" name="langup[]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
									<?php }?>
									<?php } ?>
									<button type="submit" class="btn btn-primary" id="submit3">
										Add link
									</button>

								</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
</div><!-- /.col-->

</div>

<div class="modal fade bs-example-modal-sm loginmod " id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel"><i class="glyphicon glyphicon-cog"></i> Edit link</h4>
				<div id="modelactionedit" class="tcenter"></div>
			</div>
			<div class="modal-body">
				
				<form method="post" id="editmenuchild" action="" name="">
					
							<div class="form-group">
								<label>English Link title</label>
								<input class="form-control" placeholder="" name="childname" id="childname">
								<input type="hidden" name="id" id="id">
							</div>
						
						<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['language']->value['langcode']!='en') {?>
						<div class="form-group">
							<input class="form-control" placeholder="" name="lang[]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" type="hidden">
								<label><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
 English Link title</label>
								<input class="form-control" placeholder="" name="childname<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
								
							</div>
						<?php }?>
						<?php } ?>
						<div class="form-group">
							<label>Url</label>
							<input class="form-control" placeholder="" name="url" value="#" id="url">
						</div>
						<div class="form-group">
							<label>Parent</label>
							<input type="hidden" id="parent">
							<select class="form-control" name="parent" id="parent">
								<?php  $_smarty_tpl->tpl_vars['a'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['a']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menusdata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['a']->key => $_smarty_tpl->tpl_vars['a']->value) {
$_smarty_tpl->tpl_vars['a']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['a']->key;
?>
								<?php if ($_smarty_tpl->tpl_vars['a']->value['url']=="#") {?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
" <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['a']->value['id'];?>
<?php $_tmp5=ob_get_clean();?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['menuid']->value;?>
<?php $_tmp6=ob_get_clean();?><?php if ($_tmp5==$_tmp6) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['a']->value['name'];?>
 ( <?php echo $_smarty_tpl->tpl_vars['a']->value['type'];?>
 ) ( <?php echo $_smarty_tpl->tpl_vars['a']->value['place'];?>
 )</option>
								<?php }?>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label>Order</label>
							<input class="form-control" placeholder="" name="order" id="order">
						</div>
						<div class="form-group">
							<label>Status</label>
							<select class="form-control" name="status" id="status">
								<option value="1">Active</option>
								<option value="0">Not active</option>
							</select>
						</div>
					
					<div class="modal-footer settingbutdiv">
						<div style="padding:5px;display: inline-block;">
							Other languages to edit :
							<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['language']->key;
?>

							<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

							<input type="checkbox" name="langup[]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">

							<?php } ?>
						</div>
						<button type="button" class="btn btn-default" data-dismiss="modal">
							Close
						</button>
						<button type="submit" class="btn btn-primary" id="submit2">
							Edit
						</button>
					</div>
			
			</form>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
