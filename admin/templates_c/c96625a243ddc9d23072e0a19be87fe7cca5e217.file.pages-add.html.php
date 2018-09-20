<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-29 06:34:05
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\pages-add.html" */ ?>
<?php /*%%SmartyHeaderCode:29533565787ec4f21f1-07945226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c96625a243ddc9d23072e0a19be87fe7cca5e217' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\pages-add.html',
      1 => 1448775179,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29533565787ec4f21f1-07945226',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_565787ec5e83b3_73586478',
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'pmangeditor' => 0,
    'i' => 0,
    'pmangattachment' => 0,
    'datagroup' => 0,
    'menus' => 0,
    'menu' => 0,
    'pagedata' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565787ec5e83b3_73586478')) {function content_565787ec5e83b3_73586478($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\xampp\\htdocs\\minative\\admin\\includes\\smarty\\plugins\\modifier.truncate.php';
?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>

	<li class="">
		Pages Manager
	</li>
	<li class="active">
		Add new page
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
						Adding new page
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
							<form role="form" id="addnewpage" name="addnewpage" action="" enctype="multipart/form-data">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="en">
										<div class="headingcust">
											English Page details
										</div>

										<div class="form-group">
											<label>Page title</label>
											<input class="form-control" placeholder="" name="pagetitle">
											<dfn>The main title of the page that will viewed to users.</dfn>
										</div>
										<div class="form-group">
											<label>Page brief</label>
											<textarea class="form-control" rows="3" name="pagebrief"></textarea>
											<dfn>The page content that will viewed to user</dfn>
										</div>
										<div class="form-group">
											<label>Page content</label>
											<textarea class="form-control" rows="15" name="pagecontent" <?php if ($_smarty_tpl->tpl_vars['pmangeditor']->value) {?>id="textareatiny0"<?php }?>></textarea>
											<dfn>The page content that will viewed to user</dfn>
										</div>
									<div style="clear: both"></div>
									<div class="headingcust">
										Search engine
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Meta discription</label>
											<input class="form-control" placeholder="" type="text" name="pagemetadisc">
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Meta Keywords</label>
											<input class="form-control" placeholder="" type="text" name="pagemetakey">
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<div class="form-group">
												<label>Tags</label>
												<input class="form-control" placeholder="" type="text" name="pagetags">
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
										</div>

										<input class="form-control" placeholder="" name="lang[]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" type="hidden">
										<div class="form-group">
											<label>Page title</label>
											<input class="form-control" placeholder="" name="pagetitle<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
											<dfn>The main title of the page</dfn>
										</div>
										<div class="form-group">
											<label>Page brief</label>
											<textarea class="form-control" rows="3" name="pagebrief<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"></textarea>
											<dfn>The page content that will viewed to user</dfn>
										</div>
										<div class="form-group">
											<label>Page content</label>
											<textarea class="form-control" rows="15" name="pagecontent<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" <?php if ($_smarty_tpl->tpl_vars['pmangeditor']->value) {?>id="textareatiny<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"<?php }?>></textarea>
											<dfn>The main title of the page</dfn>
										</div>
										<div style="clear: both"></div>
									<div class="headingcust">
										Search engine
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Meta discription</label>
											<input class="form-control" placeholder="" type="text" name="pagemetadisc<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Meta Keywords</label>
											<input class="form-control" placeholder="" type="text" name="pagemetakey<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<div class="form-group">
												<label>Tags</label>
												<input class="form-control" placeholder="" type="text" name="pagetags<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
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
											<input class="form-control" placeholder="" type="text" name="pagewriter">
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Publish date</label>
											<input class="form-control" placeholder="" type="date" name="pagepubdate">
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Status</label>
											<select class="form-control" name="status">
												<option value="1">Enabled</option>
												<option value="0">Disabled</option>
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
												<option value="pub">Public - (Visitors and users)</option>
												<option value="pri">Private - (Registered users)</option>
												<option value="ris">Ristrected - (Spacific users group)</option>
											</select>
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label>Ristrected to</label>
											<select class="form-control" name="pagerestrto">
												<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['datagroup']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>

												<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
" style="color: <?php echo $_smarty_tpl->tpl_vars['i']->value['color'];?>
 !important"><?php echo $_smarty_tpl->tpl_vars['i']->value['groupname'];?>
</option>
												<?php } ?>
											</select>
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div style="clear: both"></div>
									<div class="headingcust">
										Add a menu link
									</div>

									<div class="col-md-4">
										<div class="form-group" style="padding-bottom: 29px">
											<label>Add a link to a menu</label>
											<label class="switch switch-left-right" style="margin: 0 auto;top: 5px">
												<input class="switch-input" type="checkbox" checked value="1" onchange="pageaddlinkaa.value=value"/>
												<span class="switch-label" data-on="Yes" data-off="No"></span> <span class="switch-handle"></span> </label>
											<input name="pageaddlink" id="pageaddlinkaa" value="1" type="hidden"/>

										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Choose menu</label>
											<select class="form-control" name="pagemenu">
												<?php  $_smarty_tpl->tpl_vars['menu'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['menu']->_loop = false;
 $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['menus']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['menu']->key => $_smarty_tpl->tpl_vars['menu']->value) {
$_smarty_tpl->tpl_vars['menu']->_loop = true;
 $_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['menu']->key;
?>
												<?php if ($_smarty_tpl->tpl_vars['menu']->value['url']=='#') {?>
												<option value="<?php echo $_smarty_tpl->tpl_vars['menu']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['menu']->value['name'];?>
</option>
												<?php }?>
												<?php } ?>
											</select>
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Link title</label>
											<input class="form-control" placeholder="" type="text" name="pagelinkname">
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-12 tcenter settingbutdiv">
										<div style="padding:5px;display: inline-block;">
											Other languages to add :
											<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
											<?php if ($_smarty_tpl->tpl_vars['language']->value['langcode']!='en') {?>
											<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>

											<input type="checkbox" name="langup[]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
											<?php }?>
											<?php } ?>
										</div>

										<button type="submit" class="btn btn-primary" id="submit">
											Add page
										</button>
										<button type="reset" class="btn btn-default">
											Reset
										</button>
									</div>
							</form>
						</div>
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
