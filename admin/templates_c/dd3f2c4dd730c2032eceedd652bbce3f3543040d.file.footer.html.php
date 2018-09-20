<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-25 19:39:53
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1930856528db6104817-54265050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dd3f2c4dd730c2032eceedd652bbce3f3543040d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\footer.html',
      1 => 1448476694,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1930856528db6104817-54265050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_56528db6110392_85646849',
  'variables' => 
  array (
    'scripturl' => 0,
    'adminmainstyle' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56528db6110392_85646849')) {function content_56528db6110392_85646849($_smarty_tpl) {?>
	
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
<footer></footer>        	
</body>

</html><?php }} ?>
