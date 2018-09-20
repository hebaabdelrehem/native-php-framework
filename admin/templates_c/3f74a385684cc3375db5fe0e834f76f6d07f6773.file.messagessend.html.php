<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-31 13:24:16
         compiled from "C:\xampp\htdocs\New\admin\templates\messagessend.html" */ ?>
<?php /*%%SmartyHeaderCode:736254ccc970f31183-45454217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f74a385684cc3375db5fe0e834f76f6d07f6773' => 
    array (
      0 => 'C:\\xampp\\htdocs\\New\\admin\\templates\\messagessend.html',
      1 => 1422185684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '736254ccc970f31183-45454217',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ccc97103cf97_09317711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ccc97103cf97_09317711')) {function content_54ccc97103cf97_09317711($_smarty_tpl) {?><!-- Modal -->
<div class="modal fade bs-example-modal-sm loginmod " id="messages" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Send message</h4>
      </div>
      <div class="modal-body">
        <form method="post" id="loginf">
          <div class="form-group">
            <label for="recipient-name" class="control-label">Title</label>
            <input type="text" class="form-control" id="user" name="user">
          </div>
          <div class="form-group">
                    <label>Message</label>
              <textarea class="form-control" rows="6" name="bio"></textarea>
                                        
                                        
								</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="submit">Send</button>
      </div>
          </form>
    </div>
  </div>
</div><?php }} ?>
