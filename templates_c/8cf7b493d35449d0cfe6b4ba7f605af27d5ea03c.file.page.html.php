<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-30 00:45:17
         compiled from "C:\xampp\htdocs\minative\styles\minative\page.html" */ ?>
<?php /*%%SmartyHeaderCode:11864564ff766a05b61-66437747%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cf7b493d35449d0cfe6b4ba7f605af27d5ea03c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\styles\\minative\\page.html',
      1 => 1448840714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11864564ff766a05b61-66437747',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_564ff766df5941_11443160',
  'variables' => 
  array (
    'pagetitle' => 0,
    'status' => 0,
    'pagewriter' => 0,
    'pagepubdate' => 0,
    'pagecontent' => 0,
    'pagetags' => 0,
    'pageattachment' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564ff766df5941_11443160')) {function content_564ff766df5941_11443160($_smarty_tpl) {?><section>
	<div class="container">
		<div class="row">
			<?php echo $_smarty_tpl->getSubTemplate ("sidemenu.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


			<div class="col-sm-9 col-md-9 col-lg-9 float02">
				<div class="row">
					
					<div class="pagecontents">
						<div class="panel panel-default">
							<div class="panel-heading">
								<?php echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>

								<div class="float01">
								<button class="btn btn-default" onClick="window.print('.panel-body')">
									Print this page
								</button>
								<button class="btn btn-default" onClick="window.print()">
									Save as html
								</button>
								<button class="btn btn-default" onClick="window.print()">
									Save as pdf
								</button>
								</div>
							</div>
							<div class="panel-body">
								<?php if ($_smarty_tpl->tpl_vars['status']->value==0) {?>
								<div class="col-md-12">
									<div id="output" class="alert alert-success message3">
										Ooops, This page is disabled!
									</div>
								</div>
								<?php } else { ?>
								With : <?php echo $_smarty_tpl->tpl_vars['pagewriter']->value;?>
 | At : <?php echo $_smarty_tpl->tpl_vars['pagepubdate']->value;?>

								<?php echo $_smarty_tpl->tpl_vars['pagecontent']->value;?>

								<?php }?>
							</div>
							<div class="panel-footer">
								Tags : <?php echo $_smarty_tpl->tpl_vars['pagetags']->value;?>

								<?php if ($_smarty_tpl->tpl_vars['pageattachment']->value!=0) {?>
								<br>
								Attachments : <a href="contents/pages/<?php echo $_smarty_tpl->tpl_vars['pageattachment']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pageattachment']->value;?>
</a>
								<?php }?>
								</div>
						</div>

					</div>

				</div>
			</div>
		</div>

</section>

<?php }} ?>
