<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-09 23:18:18
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\pages-view.html" */ ?>
<?php /*%%SmartyHeaderCode:2356565787e82f17b5-82062733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e98053bbab23fa6ded62da8bca2b73dfda9b60ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\pages-view.html',
      1 => 1449699401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2356565787e82f17b5-82062733',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_565787e8460b07_74096346',
  'variables' => 
  array (
    'pagetitle' => 0,
    'pageid' => 0,
    'languages' => 0,
    'language' => 0,
    'pagebrief' => 0,
    'pagecontent' => 0,
    'pagemetadisc' => 0,
    'pagemetakey' => 0,
    'pagetags' => 0,
    'i' => 0,
    'pagewriter' => 0,
    'pagepubdate' => 0,
    'status' => 0,
    'pmangattachment' => 0,
    'pageprivacy' => 0,
    'pagerestrto' => 0,
    'datagroup' => 0,
    'pageattachment' => 0,
    'pagedata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565787e8460b07_74096346')) {function content_565787e8460b07_74096346($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\minative\\admin\\includes\\smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>

	<li class="">
		Pages Manager
	</li>
	<li>
		Edit page
	</li>
	<li class="active">
		<?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>

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
					<div class="panel-heading">
						<i class="glyphicon glyphicon-wrench"></i> Edit page : <?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>

						<div class="pull-right">
							<a href="../page.php?id=<?php echo $_smarty_tpl->tpl_vars['pageid']->value;?>
" target="_blank" class="btn btn-success"> <i class="glyphicon glyphicon-eye-open"></i> Page preview</a>

							<a data-id="<?php echo $_smarty_tpl->tpl_vars['pageid']->value;?>
" href="pagemanager.php?act=dodel" id="delbuttonpage" class="btn btn-danger"> <i class="glyphicon glyphicon-trash "></i> Delete page</a>
						</div>
					</div>

					<div class="col-md-9">
						<div class="panel-body tabssty">

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
							<form role="form" id="editpage" name="editpage" action="" enctype="multipart/form-data">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="en">
										<div class="headingcust">
											English Page details

										</div>
										<input type="hidden" class="form-control" id="pageid" placeholder="" name="pageid" value="<?php echo $_smarty_tpl->tpl_vars['pageid']->value;?>
">
										<div class="form-group">
											<label>Page title</label>
											<input class="form-control" placeholder="" name="pagetitle" value="<?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
">
											<dfn>The main title of the page</dfn>
										</div>
										<div class="form-group">
											<label>Page brief</label>
											<textarea class="form-control" rows="3" name="pagebrief"><?php echo $_smarty_tpl->tpl_vars['pagebrief']->value;?>
</textarea>
											<dfn>The page content that will viewed to user</dfn>
										</div>
										<div class="form-group">
											<label>Page content</label>
											<textarea class="form-control" rows="15" name="pagecontent" id="textareatiny0"><?php echo $_smarty_tpl->tpl_vars['pagecontent']->value;?>
</textarea>
										</div>
										<div style="clear: both"></div>
										<div class="headingcust">
											Search engine
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Meta discription</label>
												<input class="form-control" placeholder="" type="text" name="pagemetadisc" value="<?php echo $_smarty_tpl->tpl_vars['pagemetadisc']->value;?>
">
												<dfn>The main title of the page</dfn>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Meta Keywords</label>
												<input class="form-control" placeholder="" type="text" name="pagemetakey" value="<?php echo $_smarty_tpl->tpl_vars['pagemetakey']->value;?>
">
												<dfn>The main title of the page</dfn>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<div class="form-group">
													<label>Tags</label>
													<input class="form-control" placeholder="" type="text" name="pagetags" value="<?php echo $_smarty_tpl->tpl_vars['pagetags']->value;?>
">
													<dfn>The main title of the page</dfn>
												</div>
											</div>
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
										<div class="headingcust">
											<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
 Page details
											<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['langnotes'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=" ") {?><span class="label label-danger labelsett"><?php echo $_smarty_tpl->tpl_vars['langnotes'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</span><?php }?>
										</div>

										<input class="form-control" placeholder="" name="lang[]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" type="hidden">
										<div class="form-group">
											<label>Page title</label>
											<input class="form-control" placeholder="" name="pagetitle<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['pagetitle'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
">
											<dfn>The main title of the page</dfn>
										</div>
										<div class="form-group">
											<label>Page brief</label>
											<textarea class="form-control" rows="3" name="pagebrief<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"><?php echo $_smarty_tpl->tpl_vars['pagebrief'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>											

 <dfn>The page content that will viewed to user</dfn>
										</div>
										<div class="form-group">
											<label>Page content</label>
											<textarea class="form-control" rows="15" name="pagecontent<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" id="textareatiny<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pagecontent'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>
										</div>
										<div style="clear: both"></div>
										<div class="headingcust">
											Search engine
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Meta discription</label>
												<input class="form-control" placeholder="" type="text" value="<?php echo $_smarty_tpl->tpl_vars['pagemetadisc'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
" name="pagemetadisc<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
												<dfn>The main title of the page</dfn>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Meta Keywords</label>
												<input class="form-control" placeholder="" type="text" value="<?php echo $_smarty_tpl->tpl_vars['pagemetakey'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
" name="pagemetakey<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
												<dfn>The main title of the page</dfn>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<div class="form-group">
													<label>Tags</label>
													<input class="form-control" placeholder="" type="text" value="<?php echo $_smarty_tpl->tpl_vars['pagetags'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
" name="pagetags<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
													<dfn>The main title of the page</dfn>
												</div>
											</div>
										</div>
									</div>
									<?php }?>
									<?php } ?>
									<div style="clear: both"></div>
									<div class="headingcust">
										Page options
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Writer name</label>
											<input class="form-control" placeholder="" type="text" name="pagewriter" value="<?php echo $_smarty_tpl->tpl_vars['pagewriter']->value;?>
">
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Publish date</label>
											<input class="form-control" placeholder="" type="date" name="pagepubdate" value="<?php echo $_smarty_tpl->tpl_vars['pagepubdate']->value;?>
">
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Status</label>
											<select class="form-control" name="status">
												<option <?php if ($_smarty_tpl->tpl_vars['status']->value==1) {?>selected<?php }?> value="1">Enabled</option>
												<option <?php if ($_smarty_tpl->tpl_vars['status']->value==0) {?>selected<?php }?> value="0">Disabled</option>
											</select>
											<dfn>The main title of the page</dfn>
										</div>

									</div>
									<?php if ($_smarty_tpl->tpl_vars['pmangattachment']->value) {?>
									<div class="col-md-4">
										<div class="form-group">
											<label>Attach file</label>
											<input class="form-control" placeholder="" type="file" name="pagefile">
										</div>
									</div>

									<div class="col-md-8">
										<div class="alert bg-primary" role="alert" style="margin-top: 11px;">
											<span class="glyphicon glyphicon-info-sign"></span> Pages attachment folder is: "../contents/pages"

										</div>
									</div>
									<?php }?>
									<div style="clear: both"></div>
									<div class="headingcust">
										Page privacy
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Page privacy</label>
											<select class="form-control" name="pageprivacy">
												<option <?php if ($_smarty_tpl->tpl_vars['pageprivacy']->value=='pub') {?>selected<?php }?> value="pub">Public - (Visitors and users)</option>
												<option <?php if ($_smarty_tpl->tpl_vars['pageprivacy']->value=='pri') {?>selected<?php }?> value="pri">Private - (Registered users)</option>
												<option <?php if ($_smarty_tpl->tpl_vars['pageprivacy']->value=='ris') {?>selected<?php }?> value="ris">Ristrected - (Spacific users group)</option>
											</select>
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Ristrected to</label>
											<select class="form-control" name="pagerestrto">
												<option value="0" <?php if ($_smarty_tpl->tpl_vars['pagerestrto']->value=='0') {?>selected<?php }?>>None</option>
												
												<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datagroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>

												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['pagerestrto']->value==$_smarty_tpl->tpl_vars['i']->value['id']) {?>selected<?php }?> style="color: <?php echo $_smarty_tpl->tpl_vars['i']->value['color'];?>
 !important"><?php echo $_smarty_tpl->tpl_vars['i']->value['groupname'];?>
</option>
												<?php } ?>
											</select>
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-12 settingbutdiv">
										<div style="padding:5px;display: inline-block;">
											Languages to update :
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
										<button type="submit" class="btn btn-primary" id="submit">
											Edit page
										</button>
										<button type="reset" class="btn btn-default">
											Reset
										</button>
									</div>
								</div>
							</form>
						</div>

					</div>
					<div class="col-md-3">
						<div style="clear: both"></div>
						<div class="headingcust"   style="margin-top: 15px">
							Files attached
						</div>
						<div class="alert bg-info attachedfiles" role="alert" style="margin-top: 11px;">
							<?php if ($_smarty_tpl->tpl_vars['pageattachment']->value!=' ') {?>
						 <i class="glyphicon glyphicon-file"></i>	<a href="../contents/pages/<?php echo $_smarty_tpl->tpl_vars['pageattachment']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pageattachment']->value;?>
</a>
							<?php } else { ?>No files attached<?php }?>
						</div>

						
						<div class="headingcust">
							Pages You have
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
"> <?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['i']->value['pagetitle'],25,"...",true);?>
 </a>
						<span class="pull-right"> <?php if ($_smarty_tpl->tpl_vars['i']->value['status']==0) {?>
							Disabled
							<?php } else { ?>
							Active
							<?php }?> </span>
						<div class="divider2"></div>
						<?php } ?>
						<div class="col-md-12 tcenter" style="margin-top:20px">

							<button type="button" class="btn btn-info" onClick="location.href='pagemanager.php?act=list'" >
								Manage pages
							</button>
							<br>
							<br>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php }} ?>
