<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-16 22:49:04
         compiled from "C:\xampp\htdocs\minative\admin\templates\footer.html" */ ?>
<?php /*%%SmartyHeaderCode:1003554d51876c38122-82176562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2b6761dc78f884cd602c6887f2141cc5767dcb9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\templates\\footer.html',
      1 => 1447710539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1003554d51876c38122-82176562',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d51876c43ca6_04903144',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d51876c43ca6_04903144')) {function content_54d51876c43ca6_04903144($_smarty_tpl) {?><footer></footer>
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
