<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-08 20:37:24
         compiled from "C:\xampp\htdocs\minative\admin\templates\pageview.html" */ ?>
<?php /*%%SmartyHeaderCode:32475585c65d94a937-21392304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af3ee1a96cf1ed808fc588214d089ea05b49868b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\pageview.html',
      1 => 1447011429,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32475585c65d94a937-21392304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5585c65da34f67_53312468',
  'variables' => 
  array (
    'pagetitle' => 0,
    'pageid' => 0,
    'pagecontent' => 0,
    'status' => 0,
    'pagedata' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5585c65da34f67_53312468')) {function content_5585c65da34f67_53312468($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				
                <li class="">Pages Manager</li>
                <li>Edit page</li>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
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
					<div class="panel-heading"><i class="glyphicon glyphicon-wrench"></i> Edit page : <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
</div>
					<div class="panel-body">
						<div class="col-md-9">
                            <div class="pull-right">
                            <a href="../page.php?id=<?php echo $_smarty_tpl->tpl_vars['pageid']->value;?>
" target="_blank" class="btn btn-success">
                                    <i class="glyphicon glyphicon-eye-open"></i> Page preview</a>
                                
                                <a data-id="<?php echo $_smarty_tpl->tpl_vars['pageid']->value;?>
" href="pagemanager.php?act=dodel" id="delbuttonpage" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-trash "></i> Delete page</a>
                            </div>
                            <br>
							<form role="form" id="editpage" name="editpage" action="">
							 <input type="hidden" class="form-control" id="pageid" placeholder="" name="pageid" value="<?php echo $_smarty_tpl->tpl_vars['pageid']->value;?>
">
								<div class="form-group">
									<label>Page title</label>
									<input class="form-control" placeholder="" name="pagetitle" value="<?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
">
								</div>
																								
								<div class="form-group">
									<label>Page content</label>
									<textarea class="form-control" rows="15" name="pagecontent" id="textareatiny"><?php echo $_smarty_tpl->tpl_vars['pagecontent']->value;?>
</textarea>
								</div>
                                
                                <div class="form-group">
									<label>Status</label>
									<select class="form-control" name="status">
										<option <?php if ($_smarty_tpl->tpl_vars['status']->value==1) {?>selected<?php }?> value="1">Enabled</option>
										<option <?php if ($_smarty_tpl->tpl_vars['status']->value==0) {?>selected<?php }?> value="0">Disabled</option>
									</select>
								</div>
                                <div class="col-md-12 tcenter">
								<button type="submit" class="btn btn-primary" id="submit">Edit page</button>
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
