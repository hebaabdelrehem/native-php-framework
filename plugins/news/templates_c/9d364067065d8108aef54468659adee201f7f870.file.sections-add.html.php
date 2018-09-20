<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-05 21:28:12
         compiled from "C:\xampp\htdocs\minative\plugins\news\templates\sections-add.html" */ ?>
<?php /*%%SmartyHeaderCode:381256634482633903-16412093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d364067065d8108aef54468659adee201f7f870' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\plugins\\news\\templates\\sections-add.html',
      1 => 1449347289,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '381256634482633903-16412093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56634482750bc5_64172789',
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'newsattachmenten' => 0,
    'Sections' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56634482750bc5_64172789')) {function content_56634482750bc5_64172789($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("file:[11]head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
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
						Add 'News' sections
						<div class="pluginhead">News Plugin</div>
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
							<form role="form" id="addSection" name="addSection" action="" enctype="multipart/form-data">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="en">
										<div class="headingcust">
											English Page details
										</div>

										<div class="form-group">
											<label>Section name</label>
											<input class="form-control" placeholder="" name="sectionName">
											<dfn>The main title of the page that will viewed to users.</dfn>
										</div>
										<div class="form-group">
											<label>Section description</label>
											<textarea class="form-control" rows="3" name="sectionDescrip"></textarea>
											<dfn>The page content that will viewed to user</dfn>
										</div>
										<div style="clear: both"></div>
										<div class="headingcust">
											Search engine
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Meta discription</label>
												<input class="form-control" placeholder="" type="text" name="sectionMetadisc">
												<dfn>The main title of the page</dfn>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Meta Keywords</label>
												<input class="form-control" placeholder="" type="text" name="sectionMetakey">
												<dfn>The main title of the page</dfn>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<div class="form-group">
													<label>Tags</label>
													<input class="form-control" placeholder="" type="text" name="sectionTags">
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
											<label>Section name</label>
											<input class="form-control" placeholder="" name="sectionName<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
											<dfn>The main title of the page</dfn>
										</div>
										<div class="form-group">
											<label>Section description</label>
											<textarea class="form-control" rows="3" name="sectionDescrip<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"></textarea>
											<dfn>The page content that will viewed to user</dfn>
										</div>

										<div style="clear: both"></div>
										<div class="headingcust">
											Search engine
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Meta discription</label>
												<input class="form-control" placeholder="" type="text" name="sectionMetadisc<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
												<dfn>The main title of the page</dfn>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Meta Keywords</label>
												<input class="form-control" placeholder="" type="text" name="sectionMetakey<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
												<dfn>The main title of the page</dfn>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<div class="form-group">
													<label>Tags</label>
													<input class="form-control" placeholder="" type="text" name="sectionTags<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
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
										News options
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
									<?php if ($_smarty_tpl->tpl_vars['newsattachmenten']->value) {?>
									<div class="col-md-4">
										<div class="form-group">
											<label>Section picture</label>
											<input class="form-control" placeholder="" type="file" name="sectionPicture">
										</div>
									</div>

									<div class="col-md-4">
										<div class="alert bg-primary" role="alert" style="margin-top: 11px;">
											<span class="glyphicon glyphicon-info-sign"></span> News folder is: "../contents/news"

										</div>
									</div>
									<?php }?>

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
											Add section
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
					<div style="clear: both"></div>
					<div class="headingcust" style="margin-top: 15px">
						Sections You have
					</div>

					<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['Sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['i']->key;
?>

					<i class="glyphicon glyphicon-hand-right"></i>
					<a href="pagemanager.php?act=viewpage&id=<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['i']->value['sectionName'];?>
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
							List sections
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
