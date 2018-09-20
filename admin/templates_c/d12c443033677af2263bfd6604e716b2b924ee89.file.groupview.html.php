<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-21 05:42:18
         compiled from "C:\xampp\htdocs\minative\admin\templates\groupview.html" */ ?>
<?php /*%%SmartyHeaderCode:1165563c6fab734696-56735848%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd12c443033677af2263bfd6604e716b2b924ee89' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\groupview.html',
      1 => 1448080743,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1165563c6fab734696-56735848',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_563c6fab7c10c1_33582646',
  'variables' => 
  array (
    'groupname' => 0,
    'color' => 0,
    'groupid' => 0,
    'shortname' => 0,
    'usertitle' => 0,
    'permission' => 0,
    'i' => 0,
    'groupdata_minative' => 0,
    'groupdata_other' => 0,
    'j' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563c6fab7c10c1_33582646')) {function content_563c6fab7c10c1_33582646($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>
	<li class="">
		User groups
	</li>
	<li class="active">
		<?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>

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
						<span style="color: <?php echo $_smarty_tpl->tpl_vars['color']->value;?>
 !important"><?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
</span> Group
						<button type="button" class="btn btn-primary pull-right menus-but" onClick="location.href='usergroups.php?act=list'">
							<i class="glyphicon glyphicon-cog "></i> Manage groups
						</button>
					</div>

					<div class="col-lg-3">
						<h4><i class="glyphicon glyphicon-list profilei"></i> Group details </h4>

						<form role="form" id="editgroup" name="editgroup" action="">

							<div class="form-group">
								<label>Group id</label>
								<input name="groupid" value="<?php echo $_smarty_tpl->tpl_vars['groupid']->value;?>
" type="hidden">
								<input class="form-control" placeholder="" name="groupid" value="<?php echo $_smarty_tpl->tpl_vars['groupid']->value;?>
" disabled="">
							</div>

							<div class="form-group">
								<label>Group name</label>
								<input class="form-control" placeholder="" name="groupname" value="<?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
">
							</div>
							<div class="form-group">
								<label>Group Shortname</label>
								<input class="form-control" placeholder="" name="shortname" value="<?php echo $_smarty_tpl->tpl_vars['shortname']->value;?>
" disabled="">
							</div>
							<div class="form-group">
								<label>Group color</label>
								<input class="form-control" placeholder="" name="color" value="<?php echo $_smarty_tpl->tpl_vars['color']->value;?>
">
							</div>
							<div class="form-group">
								<label>User title</label>
								<input class="form-control" placeholder="" name="usertitle" value="<?php echo $_smarty_tpl->tpl_vars['usertitle']->value;?>
">
							</div>
							<div class="col-md-12 tcenter">
								<button type="submit" class="btn btn-primary" id="submit">
									Edit Group
								</button>
								<button type="reset" class="btn btn-default">
									Reset
								</button>
							</div>
						</form>
					</div>

					<div class="col-lg-6">
						<div class="panel-body">

							<div class="panel panel-blue">
								<div class="panel-heading dark-overlay bluehead">
									<i class="glyphicon glyphicon-cog"></i> Permissions
								</div>
								<div class="panel-body">
									<ul class="todo-list">

										<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['permission']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
										<li class="todo-list-item permlist">
											<div class="checkbox">
												<label for="checkbox" class="permpadding"><?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</label> (<?php echo $_smarty_tpl->tpl_vars['i']->value['perm_group'];?>
) | (<?php echo $_smarty_tpl->tpl_vars['i']->value['shortname'];?>
)
											</div>
											<div id="<?php echo $_smarty_tpl->tpl_vars['i']->value['shortname'];?>
" class="pull-right">
												<form role="form" id="<?php echo $_smarty_tpl->tpl_vars['i']->value['shortname'];?>
" data-shortname="<?php echo $_smarty_tpl->tpl_vars['i']->value['shortname'];?>
" action="usergroups.php?act=changeperm" method="post">
													<div class="pull-right formmarg">
														<div class="form-group">
															<label class="switch switch-left-right">
																<input class="switch-input changeperm" type="checkbox" data-shortname="<?php echo $_smarty_tpl->tpl_vars['i']->value['shortname'];?>
" <?php if ($_smarty_tpl->tpl_vars['i']->value[$_smarty_tpl->tpl_vars['shortname']->value]=="1") {?>checked<?php }?> value="<?php if ($_smarty_tpl->tpl_vars['i']->value[$_smarty_tpl->tpl_vars['shortname']->value]=="1") {?>0<?php } else { ?>1<?php }?>" onchange="premvalue.value=value"/>
																<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
															<input name="value" id="premvalue" value=" " type="hidden" />
															<input type="hidden" name="group" value="<?php echo $_smarty_tpl->tpl_vars['shortname']->value;?>
" />
															<input type="hidden" name="perm" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['shortname'];?>
" />

															

												</form>
											</div>

										</li>
										<?php } ?>

									</ul>
								</div>
								<div class="panel-footer">
									<div class="input-group">

									</div>

								</div>
							</div>

						</div>
					</div>
					<div class="col-md-3">
						<h4><i class="glyphicon glyphicon-file"></i> MiNative user groups</h4>
						<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupdata_minative']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['i']->value['groupname'];?>
<?php $_tmp1=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['groupname']->value==$_tmp1) {?> <i class="glyphicon glyphicon-hand-right"></i> <?php }?> <a href="usergroups.php?act=viewgroup&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" style="color: <?php echo $_smarty_tpl->tpl_vars['i']->value['color'];?>
 !important"> <?php echo $_smarty_tpl->tpl_vars['i']->value['groupname'];?>
 </a>
						<div class="divider2"></div>

						<?php } ?>
						<br />
						<h4><i class="glyphicon glyphicon-file"></i> Other user groups</h4>
						<?php  $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['j']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['groupdata_other']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['j']->key => $_smarty_tpl->tpl_vars['j']->value) {
$_smarty_tpl->tpl_vars['j']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['j']->key;
?>
						<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['j']->value['groupname'];?>
<?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['groupname']->value==$_tmp2) {?> <i class="glyphicon glyphicon-hand-right"></i> <?php }?> <a href="usergroups.php?act=viewgroup&id=<?php echo $_smarty_tpl->tpl_vars['j']->value['id'];?>
" style="color: <?php echo $_smarty_tpl->tpl_vars['j']->value['color'];?>
 !important"> <?php echo $_smarty_tpl->tpl_vars['j']->value['groupname'];?>
 </a>
						<div class="divider2"></div>

						<?php } ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div><!-- /.col-->

</div>

<?php }} ?>
