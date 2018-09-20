<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-12 08:10:58
         compiled from "/opt/lampp/htdocs/minative/admin/templates/footer.html" */ ?>
<?php /*%%SmartyHeaderCode:53461334754dc5202068d18-05223920%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cea379c64e6568e386c650516c9a55bfa10b074' => 
    array (
      0 => '/opt/lampp/htdocs/minative/admin/templates/footer.html',
      1 => 1423724195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53461334754dc5202068d18-05223920',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54dc5202070478_73629759',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54dc5202070478_73629759')) {function content_54dc5202070478_73629759($_smarty_tpl) {?><footer></footer>
<?php echo '<script'; ?>
 src="templates/js/jquery-1.11.1.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/js/chart.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/js/chart-data.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/js/easypiechart.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/js/easypiechart-data.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="templates/js/bootstrap-datepicker.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript" type="text/javascript" src="js/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="jquery.validate.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="main.js"><?php echo '</script'; ?>
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
</body>

</html><?php }} ?>
