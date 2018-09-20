<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-21 05:41:55
         compiled from "C:\xampp\htdocs\minative\admin\templates\addgroup.html" */ ?>
<?php /*%%SmartyHeaderCode:11756563e45cd75a3e3-95403980%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03f3f538247e070651fe014a2be13cbec260fb1d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\addgroup.html',
      1 => 1448080891,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11756563e45cd75a3e3-95403980',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_563e45cd7c7a09_73473070',
  'variables' => 
  array (
    'permission' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_563e45cd7c7a09_73473070')) {function content_563e45cd7c7a09_73473070($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				<li class="">User groups</li>
                <li class="active">Add group</li>
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
					<div class="panel-heading">Add group
                     <button type="button" class="btn btn-primary pull-right menus-but" onClick="location.href='usergroups.php?act=list'">
                    	<i class="glyphicon glyphicon-cog "></i> Manage groups</button>
					</div>
						
					
					<div class="col-lg-6" id="groupdata">
						<h4><i class="glyphicon glyphicon-list profilei"></i> Group details </h4>
						
							<form role="form" id="addgroup" name="addgroup" action="">

								<div class="form-group">
									<label>Group name</label>
									<input class="form-control" placeholder="" name="groupname">
								</div>
								<div class="form-group">
									<label>Group Shortname</label>
									<input class="form-control" placeholder="" name="shortname">
								</div>
								<div class="form-group">
									<label>Group color</label>
									<input class="form-control" placeholder="" name="color">
								</div>
								 <div class="form-group">
									<label>User title</label>
									<input class="form-control" placeholder="" name="usertitle">
								</div>
                                <div class="col-md-12 tcenter">
								<button type="submit" class="btn btn-primary" id="submit">Add Group</button>
								<button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                </form>
					</div>
					
					<div class="col-lg-6" id="permdata">
					<div class="panel-body">
						
						<div class="panel panel-blue" style="position: relative !important">
							
					<div class="panel-heading dark-overlay bluehead"><i class="glyphicon glyphicon-cog"></i> Group Permissions </div>
					<div class="diablelayer" id="layer"></div>
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
								<form class="formt" role="form" id="<?php echo $_smarty_tpl->tpl_vars['i']->value['shortname'];?>
" data-shortname="<?php echo $_smarty_tpl->tpl_vars['i']->value['shortname'];?>
" action="usergroups.php?act=changeperm" method="post">
								<div class="pull-right formmarg">
									<div class="form-group">
								
								<label class="switch switch-left-right">
						<input class="switch-input changeperm" type="checkbox" value="1" onchange="newgroupvaluea.value=value"/>
						<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
						<input name="value" id="newgroupvaluea" value=" " type="hidden"  data-shortname="<?php echo $_smarty_tpl->tpl_vars['i']->value['shortname'];?>
" />
						<input type="hidden" name="perm" value="<?php echo $_smarty_tpl->tpl_vars['i']->value['shortname'];?>
" />
															
								
									</div>
								</div>

								
								</form>
								</div>
								
						</li>
							<?php } ?>
							
						</ul>
					</div>
					<div class="panel-footer">

						
					</div>
				</div>
				
					
					</div>
					</div>
				</div>
			</div>
		</div>
    </div>
           </div><!-- /.col--> 

		</div>

<?php }} ?>
