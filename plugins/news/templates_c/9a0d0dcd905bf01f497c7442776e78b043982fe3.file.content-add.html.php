<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-08 22:42:23
         compiled from "C:\xampp\htdocs\minative\plugins\news\templates\content-add.html" */ ?>
<?php /*%%SmartyHeaderCode:2242756634436061d70-74815830%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a0d0dcd905bf01f497c7442776e78b043982fe3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\plugins\\news\\templates\\content-add.html',
      1 => 1449610942,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2242756634436061d70-74815830',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56634436111a26_71517495',
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'newseditor' => 0,
    'i' => 0,
    'Sections' => 0,
    'newsattachmenten' => 0,
    'newsattachmenttype' => 0,
    'newsattachmentsize' => 0,
    'newsattachmentnum' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56634436111a26_71517495')) {function content_56634436111a26_71517495($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("file:[11]head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 <?php echo '<script'; ?>
 src="js/news.js"><?php echo '</script'; ?>
>
<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>

	<li class="">
		News plugin
	</li>
	<li class="active">
		Add news
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
						Adding news
						<div class="pluginhead">
							News Plugin
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
							<form role="form" id="addContent" name="addContent" action="" enctype="multipart/form-data">
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="en">
										<div class="headingcust">
											English news details
										</div>

										<div class="form-group">
											<label>News title</label>
											<input class="form-control" placeholder="" name="newsTitle">
											<dfn>The main title of the page that will viewed to users.</dfn>
										</div>
										<div class="form-group">
											<label>News brief</label>
											<textarea class="form-control" rows="3" name="newsBrief"></textarea>
											<dfn>The page content that will viewed to user</dfn>
										</div>
										<div class="form-group">
											<label>News content</label>
											<textarea class="form-control" rows="15" name="newsContent" <?php if ($_smarty_tpl->tpl_vars['newseditor']->value) {?>id="textareatiny0"<?php }?>></textarea>
											<dfn>The page content that will viewed to user</dfn>
										</div>
										<div style="clear: both"></div>
										<div class="headingcust">
											Search engine
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Meta discription</label>
												<input class="form-control" placeholder="" type="text" name="newsMetadisc">
												<dfn>The main title of the page</dfn>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Meta Keywords</label>
												<input class="form-control" placeholder="" type="text" name="newsMetakey">
												<dfn>The main title of the page</dfn>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<div class="form-group">
													<label>Tags</label>
													<input class="form-control" placeholder="" type="text" name="newsTags">
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
											<label>News title</label>
											<input class="form-control" placeholder="" name="newsTitle<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
											<dfn>The main title of the page</dfn>
										</div>
										<div class="form-group">
											<label>News brief</label>
											<textarea class="form-control" rows="3" name="newsBrief<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"></textarea>
											<dfn>The page content that will viewed to user</dfn>
										</div>
										<div class="form-group">
											<label>News content</label>
											<textarea class="form-control" rows="15" name="newsContent<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" <?php if ($_smarty_tpl->tpl_vars['newseditor']->value) {?>id="textareatiny<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
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
												<input class="form-control" placeholder="" type="text" name="newsMetadisc<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
												<dfn>The main title of the page</dfn>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Meta Keywords</label>
												<input class="form-control" placeholder="" type="text" name="newsMetakey<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
												<dfn>The main title of the page</dfn>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<div class="form-group">
													<label>Tags</label>
													<input class="form-control" placeholder="" type="text" name="newsTags<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
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
											<label>Writer name</label>
											<input class="form-control" placeholder="" type="text" name="newsWriter">
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Publish date</label>
											<input class="form-control" placeholder="" type="date" name="newsPubDate">
											<dfn>The main title of the page</dfn>
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Status</label>
											<select class="form-control" name="newsStatus">
												<option value="1">Enabled</option>
												<option value="0">Disabled</option>
											</select>
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

								</div>
						</div>

					</div>

					<div class="col-md-3">

						<div class="headingcust" style="margin-top: 15px">
							News settings
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Parent section</label>
								<select class="form-control" name="newsParentId">
									<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['Sections']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['i']->key => $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['i']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value['sectionName'];?>
</option>
									<?php } ?>
								</select>
								<dfn>The main title of the page</dfn>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>News type</label>
								<select class="form-control" name="newsType">
									<option value="st">Sticky</option>
									<option value="imp">Important</option>
									<option value="nor">Normal</option>
								</select>
								<dfn>The main title of the page</dfn>
							</div>
						</div>
						<div style="clear: both"></div>
						<div class="headingcust"  >
							News picture
						</div>
						<?php if ($_smarty_tpl->tpl_vars['newsattachmenten']->value) {?>
						<div class="col-md-12">
							
							<div class="form-group">

								<input class="form-control" placeholder="" type="file" name="newsFiles[]" style="margin-bottom: 5px" multiple>
								<dfn>* Allowed types: (<?php echo $_smarty_tpl->tpl_vars['newsattachmenttype']->value;?>
)</dfn>
								<dfn>* Allowed size: (<?php echo $_smarty_tpl->tpl_vars['newsattachmentsize']->value;?>
 MB)</dfn>
						<dfn>* Maximum files: (<?php echo $_smarty_tpl->tpl_vars['newsattachmentnum']->value;?>
 files)</dfn>
						</div>
							
						</div>
						</form>
						<?php }?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php }} ?>
