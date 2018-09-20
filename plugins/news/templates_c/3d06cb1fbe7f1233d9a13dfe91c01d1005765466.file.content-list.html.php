<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-08 22:02:04
         compiled from "C:\xampp\htdocs\minative\plugins\news\templates\content-list.html" */ ?>
<?php /*%%SmartyHeaderCode:163545666a8e85bfc77-67796935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d06cb1fbe7f1233d9a13dfe91c01d1005765466' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\plugins\\news\\templates\\content-list.html',
      1 => 1449608520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163545666a8e85bfc77-67796935',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5666a8e86a25a1_23248314',
  'variables' => 
  array (
    'sectionName' => 0,
    'contentsData' => 0,
    'i' => 0,
    'sectionPicture' => 0,
    'sectionDescrip' => 0,
    'sectionMetadisc' => 0,
    'sectionMetakey' => 0,
    'sectionTags' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5666a8e86a25a1_23248314')) {function content_5666a8e86a25a1_23248314($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\minative\\admin\\includes\\smarty\\plugins\\modifier.truncate.php';
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
						'<?php echo $_smarty_tpl->tpl_vars['sectionName']->value;?>
' Contents
						<div class="pluginhead">
							News Plugin
						</div>
						<button type="button" class="btn btn-primary pull-right menus-but" onClick="location.href='news.admin.php?act=addSection'">
							<i class="glyphicon glyphicon-plus "></i> Add new content
						</button>

					</div>
					<div class="col-md-9">
						<div class="panel-body">
							
							<table class="table table-condensed tablet" data-toggle="table" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="id" data-sort-order="asc">
								<thead class="">
									<tr>
										<th data-field="state" data-checkbox="true">ID</th>
										
										<th>News picture</th>
										<th>Title</th>
										<th>Brief</th>
										
										<th>Publish date</th>
										<th>Type</th>
										<th>Actions</th>

									</tr>
								</thead>
								<tbody>
									<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['contentsData']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</td>
										
										<td><?php if ($_smarty_tpl->tpl_vars['i']->value['newsFiles']!=' ') {?> <img src="../../contents/news/<?php echo $_smarty_tpl->tpl_vars['i']->value['newsFiles'];?>
" style="width:100px;height: 70px;" /> <?php } else { ?>No Pictures<?php }?></td>

										<td><?php echo $_smarty_tpl->tpl_vars['i']->value['newsTitle'];?>
</td>
										<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['i']->value['newsBrief'],100," ...",true);?>
</td>
										
										<td><?php echo $_smarty_tpl->tpl_vars['i']->value['newsPubDate'];?>
</td>
										<td><?php if ($_smarty_tpl->tpl_vars['i']->value['newsType']=='st') {?>Sticky<?php } elseif ($_smarty_tpl->tpl_vars['i']->value['newsType']=='imp') {?>Important<?php } else { ?>Normal<?php }?></td>
										<td class="widthplu"><a href="news.admin.php?act=editSection&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"> <i class="glyphicon glyphicon-cog"></i></a><a data-id="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" href="news.admin.php?act=dodel" id="delSection"> <i class="glyphicon glyphicon-trash deli"></i></a></td>
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>

					</div>
					<div class="col-md-3">

						<div class="headingcust"   style="margin-top: 15px">
							Section details
						</div>

						<div class="col-md-12 panalinfodata">
							<span><h4>Section Picture</h4></span>
							<div class="tcenter">
								<?php if ($_smarty_tpl->tpl_vars['sectionPicture']->value!=' ') {?>

								<img src="../../contents/news/<?php echo $_smarty_tpl->tpl_vars['sectionPicture']->value;?>
"/>

								<?php } else { ?>No Pictures<?php }?>
							</div>

							<span><h4>Section description</h4></span> <?php echo $_smarty_tpl->tpl_vars['sectionDescrip']->value;?>
 
							<span><h4>Meta discription</h4></span> <?php echo $_smarty_tpl->tpl_vars['sectionMetadisc']->value;?>
 
							<span><h4>Meta Keywords</h4></span> <?php echo $_smarty_tpl->tpl_vars['sectionMetakey']->value;?>
 
							<span><h4>Tags</h4></span> <?php echo $_smarty_tpl->tpl_vars['sectionTags']->value;?>

							
							<div class="tcenter actions">
								<button type="button" class="btn btn-primary menus-but" onClick="location.href='news.admin.php?act=editSection&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'">
									<i class="glyphicon glyphicon-cog  "></i> Edit section
								</button>
							</div>
							
						</div>
						
					</div>

				</div>
			</div>

		</div>
	</div>
</div>
<?php }} ?>
