<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-12-08 22:20:53
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\settings-other_lang.html" */ ?>
<?php /*%%SmartyHeaderCode:123145654ab664233e3-11435629%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8fb77232ae3a0b8b472e06d4d0df4760f3dd463' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\settings-other_lang.html',
      1 => 1449609648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123145654ab664233e3-11435629',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5654ab66427269_57746862',
  'variables' => 
  array (
    'languages' => 0,
    'language' => 0,
    'i' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5654ab66427269_57746862')) {function content_5654ab66427269_57746862($_smarty_tpl) {?><ul class="nav nav-tabs " role="tablist">
	<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
	<?php if ($_smarty_tpl->tpl_vars['language']->value['langcode']!='en') {?>
	<li role="presentation"  class="<?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?> active <?php }?>">
		<a href="#<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" aria-controls="<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" role="tab" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a>
	</li>
	<?php }?>
	<?php } ?>
</ul>
<form role="form" class="form-horizontal" id="updatesettings" name="updatesettings" action="settings.php?act=edit">
	<div class="tab-content">
		<?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['languages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
 $_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['language']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['language']->value['langcode']!='en') {?>
		<div role="tabpanel" class="tab-pane fade <?php if ($_smarty_tpl->tpl_vars['i']->value==1) {?>in active <?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">

			<div class="headingcust">
				<i class="glyphicon glyphicon-cog"></i> <?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
 General settings 
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['langnotes'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
<?php $_tmp1=ob_get_clean();?><?php if ($_tmp1!=" ") {?><span class="label label-danger labelsett"><?php echo $_smarty_tpl->tpl_vars['langnotes'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</span><?php }?>
			</div>

			<input type="hidden" value="settings_other_lang" name="group" />
			<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" name="lang[]" />

			<div class="col-md-6 settingdiv">
				<div class="form-group">
					<label>Site Name</label>

					<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['sitename_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
" name="sitename<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
					<dfn>Your website/company name, ex: MiNative Ltd.</dfn>

				</div>
			</div>
			<div class="col-md-6 settingdiv">
				<div class="form-group">
					<label>Site sLogn</label>

					<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['siteslogn_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
" name="siteslogn<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
					<dfn>Your website/company slogn, ex: Exeeding limits.</dfn>

				</div>
			</div>

			<div class="col-md-6 settingdiv">
				<div class="form-group">
					<label>Copyrights</label>

					<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['copyright_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
" name="copyright<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
					<dfn>The copyrights of your website.</dfn>

				</div>
			</div>

			<div class="col-md-6 settingdiv">
				<div class="form-group">
					<label>Meta Description</label>

					<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['metadisc_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
" name="metadisc<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
					<dfn>Meta description to be used by search engiens.</dfn>

				</div>
			</div>
			<div class="col-md-6 settingdiv">
				<div class="form-group">
					<label>Meta keyword</label>

					<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['metakey_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
" name="metakey<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
					<dfn>Meta keyword to be used by search engiens.</dfn>

				</div>
			</div>

			<div class="col-md-6 settingdiv">
				<div class="form-group">
					<label>Closing messages</label>
					<textarea class="form-control" rows="6" name="closingmessage<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"><?php echo $_smarty_tpl->tpl_vars['closingmessage_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>																					

 <dfn>Your closing message to view it to the users.</dfn>

				</div>

			</div>
			<div style="clear:both "></div>
			<div class="headingcust">
				<i class="glyphicon glyphicon-cog"></i> Company profile informations
			</div>
			<div class="col-md-6 settingdiv">
				<div class="form-group">
					<label>Company/Website full name</label>

					<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['compfullname_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
" name="compfullname<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
					<dfn>Company/website name, ex: MiNative for information systems co.</dfn>

				</div>
				<div class="form-group">
					<label>Manager name</label>

					<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['compmanname_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
" name="compmanname<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
					<dfn>Your company/website manager name.</dfn>

				</div>
				</div>
				<div class="col-md-6 settingdiv">
				<div class="form-group">
					<label>Manager title</label>

					<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['compmantit_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
" name="compmantit<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
					<dfn>Your company/website manager title, ex: Founder, GM, CEO.</dfn>

				</div>

				<div class="form-group">
					<label>Main branch address</label>

					<input class="form-control" placeholder="" value="<?php echo $_smarty_tpl->tpl_vars['mainbrabadd_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
" name="mainbrabadd<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
">
					<dfn>Your company main branch address.</dfn>

				</div>
			</div>
			<div class="col-md-12 settingdiv">
				<div class="form-group" style="padding-bottom: 25px">
					<label>Company/Website activities</label>
					<textarea class="form-control" rows="13" name="compactivities<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" id="textareatiny<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['compactivities_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>														

 <dfn>Your company/website activities that it setuped for.</dfn>

				</div>
			</div>

			<div style="clear:both "></div>
			<div class="headingcust">
				<i class="glyphicon glyphicon-cog"></i> Registration terms
			</div>
			<div class="col-md-12 settingdiv">
				<div class="form-group">
					<label>Registration terms</label>
					<textarea class="form-control" rows="12" name="termscontent<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"><?php echo $_smarty_tpl->tpl_vars['termscontent_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>
					<dfn>Meta keyword to be used by search engiens.</dfn>
				</div>
			</div>
			<div style="clear:both "></div>
			<div class="headingcust">
				<i class="glyphicon glyphicon-cog"></i> Mail settings
			</div>

			<div class="col-md-7 settingdiv">
				<div class="form-group">
					<label>Default Mail header</label>
					<textarea class="form-control" rows="5" name="defaultmailheader<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"><?php echo $_smarty_tpl->tpl_vars['defaultmailheader_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>

					<dfn>The content of the default email header.</dfn>

				</div>

				<div class="form-group">
					<label>Default Mail footer</label>
					<textarea class="form-control" rows="5" name="defaultmailfooter<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"><?php echo $_smarty_tpl->tpl_vars['defaultmailfooter_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>

					<dfn>The content of the default email footer.</dfn>

				</div>

				<div class="form-group">
					<label>Default Mail body</label>
					<textarea class="form-control" rows="10" name="defaultmailbody<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"><?php echo $_smarty_tpl->tpl_vars['defaultmailbody_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>														

 <dfn>The content of the default email body.</dfn>

				</div>

			</div>
			<div class="col-md-5 settingdiv">
				<div class="form-group">
					<label>Default Mail Css</label>
					<textarea class="form-control" rows="29" name="defaultmailcss<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"><?php echo $_smarty_tpl->tpl_vars['defaultmailcss_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>

					<dfn>The style of the default email.</dfn>

				</div>

			</div>
			<div style="clear:both "></div>
			<div class="headingcust">
				<i class="glyphicon glyphicon-cog"></i> Extra settings
			</div>
			<div class="col-md-6 settingdiv">
				<div class="form-group">
					<label>Welcome message</label>
					<textarea class="form-control" rows="6" name="exwelmess<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"><?php echo $_smarty_tpl->tpl_vars['exwelmess_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>														

 <dfn>Your closing message to view it to the users.</dfn>

				</div>

			</div>
			<div class="col-md-6 settingdiv">
				<div class="form-group">
					<label>Advertisement content</label>
					<textarea class="form-control" rows="6" name="exweladv<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"><?php echo $_smarty_tpl->tpl_vars['exweladv_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>														

 <dfn>Your closing message to view it to the users.</dfn>

				</div>
			</div>
			<div style="clear:both "></div>
			<div class="headingcust">
				<i class="glyphicon glyphicon-cog"></i> Contact center settings
			</div>
			<div class="col-md-6 settingdiv">
				<div class="form-group">
					<label>Automatic new message reply</label>
					<textarea class="form-control" rows="6" name="ccenterautoreply<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"><?php echo $_smarty_tpl->tpl_vars['ccenterautoreply_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>

					<dfn>The content of the default email header.</dfn>

				</div>
			</div>
			<div class="col-md-6 settingdiv">
				<div class="form-group">
					<label>Automatic message closing reply</label>
					<textarea class="form-control" rows="6" name="ccentercloseautoreply<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
"><?php echo $_smarty_tpl->tpl_vars['ccentercloseautoreply_other'.($_smarty_tpl->tpl_vars['language']->value['langcode'])]->value;?>
</textarea>

					<dfn>The content of the default email header.</dfn>

				</div>
			</div>
		</div>
		<?php }?>
		<?php } ?>
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
	<?php if ($_smarty_tpl->tpl_vars['language']->value['langcode']!='en') {?>
	<?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
 <input type="checkbox" name="langup[]" value="<?php echo $_smarty_tpl->tpl_vars['language']->value['langcode'];?>
" checked>
	<?php }?>
	<?php } ?>
			</div> 
			<button type="submit" class="btn btn-primary" id="submit">
				Update
			</button>
		</div>
	</div>
</form>
<?php }} ?>
