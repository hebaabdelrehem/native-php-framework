<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-26 11:32:27
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\languages-manager.html" */ ?>
<?php /*%%SmartyHeaderCode:113356560a0bbd4df6-58196615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e20dd69f57b9b44542567b383d081a17a402136c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\languages-manager.html',
      1 => 1448533946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '113356560a0bbd4df6-58196615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56560a0bc84aa8_99818811',
  'variables' => 
  array (
    'languages' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56560a0bc84aa8_99818811')) {function content_56560a0bc84aa8_99818811($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>
	<li class="">
		Tools
	</li>
	<li class="">
		Lanuages manager
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
						Languages

					</div>

					<div class="col-lg-9">
						<div class="panel-body">
							<div class="alert bg-info  tcenter" role="alert" style="font-size: 14px;line-height: 1">
								<i class="glyphicon glyphicon-info-sign"></i> Note: The main language of minative system is "English", You cannot edit, disable or delete it.

							</div>
							<table class="table table-condensed tablet" data-toggle="table"  data-select-item-name="toolbar1">
								<thead class="">
									<tr>
										<th>Name</th>
										<th>Filename</th>
										<th>Direction</th>
										<th>Language code</th>
										<th>Actions</th>

									</tr>
								</thead>
								<tbody>
									<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
									<tr>

										<td> <?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
 </td>
										<td> <?php echo $_smarty_tpl->tpl_vars['i']->value['filename'];?>
 </td>
										<td> <?php echo $_smarty_tpl->tpl_vars['i']->value['direction'];?>
 </td>
										<td> <?php echo $_smarty_tpl->tpl_vars['i']->value['langcode'];?>
 </td>

										<td> <?php if ($_smarty_tpl->tpl_vars['i']->value['id']!=1) {?>
										<div class="langswitch" id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
											<form role="form" action="usergroups.php?act=changeperm" method="post">
												
												<label class="switch switch-left-right">
													<input class="switch-input changelangst"  data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['i']->value['status']=="1") {?>checked<?php }?>
													value="<?php if ($_smarty_tpl->tpl_vars['i']->value['status']=="1") {?>0<?php } else { ?>1<?php }?>" onchange="langstatusaa.value=value"/>
													<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
												<input type="hidden" name="langstatus" id="langstatusaa" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['filename'];?>
" />
												<input type="hidden" name="filename" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['filename'];?>
" />

											</form>
										</div> <?php } else { ?>System main language
										<?php }?>
										<?php if ($_smarty_tpl->tpl_vars['i']->value['id']!=1) {?> <a data-filename="<?php echo $_smarty_tpl->tpl_vars['i']->value['filename'];?>
" href="languages.php?act=dellang" id="updatelang" title="update language"> <i class="glyphicon glyphicon-refresh"></i></a><a data-langcode="<?php echo $_smarty_tpl->tpl_vars['i']->value['langcode'];?>
" href="languages.php?act=dellang" id="delbuttonlang"> <i class="glyphicon glyphicon-trash deli"></i></a> <?php }?> </td>

									</tr>
									<?php } ?>
								</tbody>
							</table>
							<br>
							<div class="alert bg-primary" role="alert">
								<span class="glyphicon glyphicon-info-sign"></span> Adding new languages
								<br>
								1. Upload your language.php file to 'languages' main directory in minative system root folder.
								<br>
								2. Come to Tools > Languages manager and start adding the language.

							</div>

						</div>
					</div>

					<div class="col-lg-3">
						<h4><i class="glyphicon glyphicon-plus profilei"></i> Add new language </h4>

						<form role="form" id="addnewlang" name="addmenuchild" action="">

							<div class="form-group">
								<label>File name</label>
								<input class="form-control" placeholder="" name="filename" value="*.php">
							</div>

							<div class="form-group">
								<label>Status</label>
								<select class="form-control" name="status">
									<option value="1">Active</option>
									<option value="0">Not active</option>
								</select>
							</div>
							<div class="col-md-12 tcenter">
								<button type="submit" class="btn btn-primary" id="submit3">
									Add language
								</button>
								<button type="reset" class="btn btn-default">
									Reset
								</button>
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
	</div>
</div><!-- /.col-->

</div><?php }} ?>
