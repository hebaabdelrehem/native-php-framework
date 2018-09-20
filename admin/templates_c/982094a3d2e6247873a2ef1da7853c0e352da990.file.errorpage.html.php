<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-29 05:59:15
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\errorpage.html" */ ?>
<?php /*%%SmartyHeaderCode:13875565a7d98d10c89-66761114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '982094a3d2e6247873a2ef1da7853c0e352da990' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\errorpage.html',
      1 => 1448773150,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13875565a7d98d10c89-66761114',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_565a7d98d4f497_04764055',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565a7d98d4f497_04764055')) {function content_565a7d98d4f497_04764055($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<ol class="breadcrumb">
	<li>
		<a href="#"><span class="glyphicon glyphicon-home"></span></a>
	</li>

	<li class="">
		Error Page
	</li>
</ol>

<div class="row">
	<div class="col-lg-12">
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						<?php if ($_smarty_tpl->tpl_vars['error']->value=='disabled') {?>
						Action disabled
						<?php }?>
					</div>

					<div class="col-md-12 errorpagealert">

						<div class="alert alert-danger" role="alert">
							<?php if ($_smarty_tpl->tpl_vars['error']->value=='disabled') {?>
							<h3><i class="glyphicon glyphicon-remove"></i> Sorry, this action is disabled right now.</h3><br>
							
							You can activate it from settings.
							<br>
							Thank you.
							<?php }?>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php }} ?>
