<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-29 06:55:16
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\pages-list.html" */ ?>
<?php /*%%SmartyHeaderCode:1031565787e55f64a8-07270651%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '475ab5dc47c3340364c67fb1a1ab7a4295d9c312' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\pages-list.html',
      1 => 1448776514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1031565787e55f64a8-07270651',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_565787e57d2e10_81581865',
  'variables' => 
  array (
    'count' => 0,
    'pmangmenuen' => 0,
    'pagedata' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565787e57d2e10_81581865')) {function content_565787e57d2e10_81581865($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\minative\\admin\\includes\\smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>

	<li class="">
		Pages Manager
	</li>
	<li class="active">
		Pages list
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
						Pages Manager List : You have (<?php echo $_smarty_tpl->tpl_vars['count']->value;?>
 page/s)
						<button type="button" class="btn btn-primary pull-right menus-but" onClick="location.href='pagemanager.php?act=addpage'">
							<i class="glyphicon glyphicon-plus "></i> Add new page
						</button>
						<button type="button" class="btn btn-info pull-right menus-but" onClick="location.href='settings.php?setgroup=pmanagersettings'">
							<i class="glyphicon glyphicon-cog "></i> Pages manager settings
						</button>
					</div>
				</div>
				<?php if ($_smarty_tpl->tpl_vars['pmangmenuen']->value=='1') {?>
				<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagedata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
			<div class="col-md-3">
				<div class="panel panel-default pagespanel">
					<div class="panel-heading">
						<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['i']->value['pagetitle'],25,"...",true);?>

						<?php if ($_smarty_tpl->tpl_vars['i']->value['pageattachment']!=0) {?>
						<i class="glyphicon glyphicon-file pull-right" style="top:-5px;"></i>
						<?php }?>
					</div>
					<div class="panel-body">
						<p style="margin-bottom: 157px;"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['i']->value['pagebrief'],220,"...",true);?>

							</p>
							<div class="pagedatebottomdiv">
							<p style="display: inline">Active : 
								<div class="langswitch2" id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" style="display: inline">
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
								</div>
							</p>
							
							<p class="panelbodycust">Writer : <?php echo $_smarty_tpl->tpl_vars['i']->value['pagewriter'];?>

							</p>
							<p class="panelbodycust">Date : <?php echo $_smarty_tpl->tpl_vars['i']->value['pagepubdate'];?>

							</p>
							
							<div class="panel-footer">
						<div class="pull-left">
							<?php if ($_smarty_tpl->tpl_vars['i']->value['pageprivacy']=='pub') {?><i class="glyphicon glyphicon-globe"></i> Public<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['pageprivacy']=='pri') {?>
							<i class="glyphicon glyphicon-user"></i> Private<?php } else { ?><i class="glyphicon glyphicon-lock"></i>  Ristrected<?php }?>
						</div>
						<div class="pull-right">
							
							<a href="../page.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" target="_blank">
										<i class="glyphicon glyphicon-eye-open profilei"></i></a>
										<a href="pagemanager.php?act=viewpage&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
											<i class="glyphicon glyphicon-cog"></i></a>
											<a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" href="pagemanager.php?act=dodel" id="delbuttonpage">
												<i class="glyphicon glyphicon-trash deli"></i></a>
						</div>
						
					</div>
					</div>
					</div>
					
				</div>
			</div>
			
			<?php } ?>
			<?php } else { ?>
				
				<div class="panel-body">
					<table class="table table-condensed tablet" data-toggle="table"   data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="asc">
						<thead class="">
							<tr>
								<th data-field="state" data-checkbox="true">ID</th>
								<th data-field="id" data-sortable="true">ID</th>
								<th>Page Name</th>

								<th>Active</th>
								<th>Actions</th>
							</tr>
						</thead>
						<tbody>
							<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['pagedata']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
								<td><?php echo $_smarty_tpl->tpl_vars['i']->value['pagetitle'];?>
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
								<td class="widthplu">
									<a href="../page.php?id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" target="_blank">
										<i class="glyphicon glyphicon-eye-open profilei"></i></a>
										<a href="pagemanager.php?act=viewpage&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
">
											<i class="glyphicon glyphicon-cog"></i></a>
											<a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" href="pagemanager.php?act=dodel" id="delbuttonpage">
												<i class="glyphicon glyphicon-trash deli"></i></a>
												</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>
</div><!-- /.col-->

</div>

<?php }} ?>
