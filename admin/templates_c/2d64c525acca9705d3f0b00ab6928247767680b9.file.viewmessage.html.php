<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-09 23:22:38
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\minativeadmin\viewmessage.html" */ ?>
<?php /*%%SmartyHeaderCode:155815668a9aed4ee35-02953436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d64c525acca9705d3f0b00ab6928247767680b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\viewmessage.html',
      1 => 1447011560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155815668a9aed4ee35-02953436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'id' => 0,
    'title' => 0,
    'userid' => 0,
    'name' => 0,
    'email' => 0,
    'hash' => 0,
    'status' => 0,
    'date' => 0,
    'messagecont' => 0,
    'messrep' => 0,
    'i' => 0,
    'formid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5668a9aee73df2_40135500',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5668a9aee73df2_40135500')) {function content_5668a9aee73df2_40135500($_smarty_tpl) {?> <?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


			<ol class="breadcrumb">
				<li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
				
                <li class="">Pages Manager</li>
                <li>Edit page</li>
                
			</ol>
		
		<div class="row">
			<div class="col-lg-12">
                <?php echo $_smarty_tpl->getSubTemplate ('messages.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

				
			</div>
             <div class="col-lg-12">
<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><i class="glyphicon glyphicon-wrench"></i>Viewing message #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</div>
					<div class="panel-body">
						<div class="col-md-8">
                            <div class="messdetails container">
                            <div class="col-md-4">
                        <div class="form-group">
                        <label for="name">Sender ID</label>
                        <input type="name" class="form-control" id="name" placeholder="" name="sname" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" disabled>
                        </div>      
                    </div>
                              <div class="col-md-4">
                        <div class="form-group">
                        <label for="name">Sender Name</label>
                        <input type="name" class="form-control" id="name" placeholder="" name="sname" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" disabled>
                        </div>      
                    </div>
                              <div class="col-md-4">
                        <div class="form-group">
                        <label for="name">Sender email</label>
                        <input type="name" class="form-control" id="name" placeholder="" name="sname" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" disabled>
                        </div>      
                    </div>
                            <div class="col-md-4">
                        <div class="form-group">
                        <label for="name">Hash</label>
                        <input type="name" class="form-control" id="name" placeholder="" name="sname" value="<?php echo $_smarty_tpl->tpl_vars['hash']->value;?>
" disabled>
                        </div>      
                    </div>
                            <div class="col-md-4">
                        <div class="form-group">
                        <label for="name">Status</label>
                        <input type="name" class="form-control" id="name" placeholder="" name="sname" value="<?php if ($_smarty_tpl->tpl_vars['status']->value==1) {?>Closed<?php } else { ?>Open<?php }?>
                               " disabled>
                        </div>      
                    </div>
                            <div class="col-md-4">
                        <div class="form-group">
                        <label for="name">Date</label>
                        <input type="name" class="form-control" id="name" placeholder="" name="sname" value="<?php echo $_smarty_tpl->tpl_vars['date']->value;?>
" disabled>
                        </div>      
                    </div>
                                </div>
                            <div style="clear:both"></div>
                          <div class="mesaageview">
                              
                               <div class="panel panel-primary messagepa">
                                <div class="panel-heading">
                                #<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

                                    
                                </div>
                                <div class="panel-body">
                                    <p><?php echo $_smarty_tpl->tpl_vars['messagecont']->value;?>
</p>
                                </div>
                            </div>
                              <?php if (!empty($_smarty_tpl->tpl_vars['messrep']->value)) {?>
                              <?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['messrep']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>
                            <div class="panel panel-primary reply">
                                <div class="panel-heading">
                                     <span class="pull-left">Reply #<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
</span>
                                    <span class="pull-right"><?php echo $_smarty_tpl->tpl_vars['i']->value['date'];?>
</span>
                                    
                                </div>
                                <div class="panel-body row">
                                    <div class="col-md-3 repdetails EqHeightDiv">
                                        <ul>
                                        <li><i class="glyphicon glyphicon-hand-right"></i> <?php echo $_smarty_tpl->tpl_vars['i']->value['userid'];?>
</li>
                                        <li><i class="glyphicon glyphicon-hand-right"></i> <?php echo $_smarty_tpl->tpl_vars['i']->value['name'];?>
</li>
                                        <li><i class="glyphicon glyphicon-hand-right"></i> <?php echo $_smarty_tpl->tpl_vars['i']->value['email'];?>
</li>
                                        </ul>
                                   
                                    </div>
                                    <div class="col-md-9 replaycont EqHeightDiv">
                                    <?php echo $_smarty_tpl->tpl_vars['i']->value['reply'];?>

                                    </div>
                                </div>
                            </div>     
                              <?php } ?>
                              <?php } else { ?>
                              No replies yet
                              <?php }?>
                                  
                            </div>
                            </div>
                            
							
                           
                        <div class="col-md-4">
                            <div>
                            <div class="tcenter">
                            <a target="_blank" href="../ccenterview.php?type=contact&hash=<?php echo $_smarty_tpl->tpl_vars['hash']->value;?>
" target="_blank" class="btn btn-success">
                                    <i class="glyphicon glyphicon-eye-open"></i> Message preview</a>
                               
                                <?php if ($_smarty_tpl->tpl_vars['status']->value==0) {?>
                                <a data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-status="1" data-formid="<?php echo $_smarty_tpl->tpl_vars['formid']->value;?>
" id="changemessagestatus" class="btn btn-danger">
                                    <i class="glyphicon glyphicon-lock"></i> Close message</a>
                                <?php } else { ?>
                                <a data-id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" data-status="0" data-formid="<?php echo $_smarty_tpl->tpl_vars['formid']->value;?>
" id="changemessagestatus" class="btn btn-info">
                                    <i class="glyphicon glyphicon-lock"></i> Open message</a>
                                <?php }?>
                            </div>
                            <div class="sticky">
							<h4><i class="glyphicon glyphicon-file"></i> Post new reply</h4>
                            
                            	 <form method="post" id="addreply" name="addreply" action="forms.php?act=submitreply">
							 <input type="hidden" class="form-control" id="messageid" placeholder="" name="messageid" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
								
																								
								<div class="form-group">
									<label>Reply</label>
									<textarea class="form-control" rows="10" name="reply" id="textareatiny"></textarea>
								</div>
                                
                                
                                <div class="col-md-12 tcenter">
								<button type="submit" class="btn btn-primary" id="submit">Add reply</button>
								
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>
					</div>
                    
				</div>
			</div>
		</div>
    </div>
           </div>

		
		
		
		
								


<?php }} ?>
