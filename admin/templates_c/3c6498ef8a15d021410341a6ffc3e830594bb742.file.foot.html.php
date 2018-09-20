<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-25 19:35:39
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\foot.html" */ ?>
<?php /*%%SmartyHeaderCode:295365655ff7b796969-86671430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c6498ef8a15d021410341a6ffc3e830594bb742' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\foot.html',
      1 => 1448476426,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '295365655ff7b796969-86671430',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'scripturl' => 0,
    'adminmainstyle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5655ff7b7d5170_52055458',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655ff7b7d5170_52055458')) {function content_5655ff7b7d5170_52055458($_smarty_tpl) {?>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/bootstrap-table.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/chart.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/chart-data.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/easypiechart.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/easypiechart-data.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/adminstyles/<?php echo $_smarty_tpl->tpl_vars['adminmainstyle']->value;?>
/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
 <!-- tiymcse -->
	<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
     <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/jquery.validate.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['scripturl']->value;?>
admin/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
		$('#calendar').datepicker({
		});

		!function ($) {
		    $(document).on("click","ul.nav li.parent > a > span.icon", function(){          
		        $(this).find('em:first').toggleClass("glyphicon-minus");      
		    }); 
		    $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
        	<?php echo '</script'; ?>
>
<?php }} ?>
