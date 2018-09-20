<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-26 23:03:55
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\pageview.html" */ ?>
<?php /*%%SmartyHeaderCode:247875653ae13546c23-45819452%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '660807de0e3837bd512f4e7e00d3ebff79e1bfa5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\pageview.html',
      1 => 1448575432,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '247875653ae13546c23-45819452',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5653ae136d5371_08230628',
  'variables' => 
  array (
    'pagetitle' => 0,
    'pageid' => 0,
    'languages' => 0,
    'language' => 0,
    'pagecontent' => 0,
    'i' => 0,
    'status' => 0,
    'pagedata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5653ae136d5371_08230628')) {function content_5653ae136d5371_08230628($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
							<form role="form" id="editpage" name="editpage" action="">
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
								</div>

								<div class="form-group">
									<label>Page content</label>
									<textarea class="form-control" rows="15" name="pagecontent" id="textareatiny0"><?php echo $_smarty_tpl->tpl_vars['pagecontent']->value;?>
</textarea>
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
										</div>

										<div class="form-group">
											<label>Page content</label>
											<textarea class="form-control" rows="15" name="pagecontent<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" id="textareatiny<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pagecontent'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>
										</div>
									</div>
									<?php }?>
									<?php } ?>
									<div class="headingcust">
											Page options
										</div>
								<div class="form-group">
									<label>Status</label>
									<select class="form-control" name="status">
										<option <?php if ($_smarty_tpl->tpl_vars['status']->value==1) {?>selected<?php }?> value="1">Enabled</option>
										<option <?php if ($_smarty_tpl->tpl_vars['status']->value==0) {?>selected<?php }?> value="0">Disabled</option>
									</select>
								</div>
								<div class="col-md-12 settingbutdiv">
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
