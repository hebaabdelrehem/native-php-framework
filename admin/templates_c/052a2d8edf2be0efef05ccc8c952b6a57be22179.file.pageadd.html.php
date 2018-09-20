<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-22 18:15:28
         compiled from "C:\xampp\htdocs\minative\admin\templates\pageadd.html" */ ?>
<?php /*%%SmartyHeaderCode:147705585c6c3775268-34598737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '052a2d8edf2be0efef05ccc8c952b6a57be22179' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\pageadd.html',
      1 => 1448212526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147705585c6c3775268-34598737',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5585c6c466bbb6_43150881',
  'variables' => 
  array (
    'pagedata' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5585c6c466bbb6_43150881')) {function content_5585c6c466bbb6_43150881($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				
                <li class="">Pages Manager</li>
                <li class="active">Add new page</li>
			</ol>
		
		<div class="row">
			<div class="col-lg-12">
                <?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				
			</div>
             <div class="col-lg-12">
                 <div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Adding new page</div>
					<div class="col-md-9">
					<div class="panel-body">
						
							<div class="headingcust">
								<i class="glyphicon glyphicon-user"></i> Page details
							</div>
							<form role="form" id="addnewpage" name="addnewpage" action="">
							
								<div class="form-group">
									<label>Page title</label>
									<input class="form-control" placeholder="" name="pagetitle">
								</div>
																								
								<div class="form-group">
									<label>Page content</label>
									<textarea class="form-control" rows="15" name="pagecontent" id="textareatiny"></textarea>
								</div>
                                
                                <div class="form-group">
									<label>Status</label>
									<select class="form-control" name="status">
										<option value="1">Enabled</option>
										<option value="0">Disabled</option>
									</select>
								</div>
                                <div class="col-md-12 tcenter settingbutdiv">
								<button type="submit" class="btn btn-primary" id="submit">Add page</button>
								<button type="reset" class="btn btn-default">Reset</button>
                                    </div>
                                </form>
                            </div>
                        
					</div>
					<div class="col-md-3">
							<div class="headingcust"  style="margin-top: 15px">
								<i class="glyphicon glyphicon-user"></i> Curently pages
							</div>
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

		
		
		
		
								


<?php }} ?>
