<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-08 10:56:01
         compiled from "C:\xampp\htdocs\minative\plugins\news\templates\sections.html" */ ?>
<?php /*%%SmartyHeaderCode:14136566344585c8845-55603700%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc4634da3213fae5906fde3bcf2fe516e4b8361e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\plugins\\news\\templates\\sections.html',
      1 => 1449568543,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14136566344585c8845-55603700',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_566344586a7301_39204690',
  'variables' => 
  array (
    'Sections' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_566344586a7301_39204690')) {function content_566344586a7301_39204690($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\minative\\admin\\includes\\smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("file:[11]head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo '<script'; ?>
 src="js/news.js"><?php echo '</script'; ?>
>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>

	<li class="">
		News
	</li>
	<li class="active">
		Sections
	</li>
</ol>

<div class="row">
	<div class="col-lg-12">
		<?php echo $_smarty_tpl->getSubTemplate ('file:[11]messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


	</div>
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						'News' plugin sections
						<div class="pluginhead">News Plugin</div>
						<button type="button" class="btn btn-primary pull-right menus-but" onClick="location.href='news.admin.php?act=addSection'">
							<i class="glyphicon glyphicon-plus "></i> Add new section
						</button>
						
					</div>

					<div class="col-md-12">
						<div class="panel-body">
							<table class="table table-condensed tablet" data-toggle="table"   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="asc">
								<thead class="">
									<tr>
										<th data-field="state" data-checkbox="true">ID</th>
										<th data-field="id" data-sortable="true">ID</th>
										<th>Section Picture</th>
										<th>Section Name</th>
										<th>Section description</th>

										<th>Active</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
										<td><?php if ($_smarty_tpl->tpl_vars['i']->value['sectionPicture']!=' ') {?> <img src="../../contents/news/<?php echo $_smarty_tpl->tpl_vars['i']->value['sectionPicture'];?>
" style="width: 100px;height: 100px;" /> <?php } else { ?>No Pictures<?php }?></td>
										<td><?php echo $_smarty_tpl->tpl_vars['i']->value['sectionName'];?>
</td>
										<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['i']->value['sectionDescrip'],100," ...",true);?>
</td>
										<td>
										<div class="langswitch" id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
											<form role="form" action="usergroups.php?act=changeperm" method="post">

												<label class="switch switch-left-right">
													<input class="switch-input changepagest"  data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" type="checkbox" <?php if ($_smarty_tpl->tpl_vars['i']->value['status']=="1") {?>checked<?php }?>
													value="<?php if ($_smarty_tpl->tpl_vars['i']->value['status']=="1") {?>0<?php } else { ?>1<?php }?>" onchange="pagestatusaa.value=value"/>
													<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
												<input type="hidden" name="pagestatus" id="pagestatusaa" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['status'];?>
" />
												<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" />

											</form>
										</div></td>
										<td class="widthplu"><a href="news.admin.php?act=listSectionContent&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"> <i class="glyphicon glyphicon-list profilei"></i></a><a href="news.admin.php?act=editSection&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"> <i class="glyphicon glyphicon-cog"></i></a><a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" href="news.admin.php?act=dodel" id="delSection"> <i class="glyphicon glyphicon-trash deli"></i></a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
