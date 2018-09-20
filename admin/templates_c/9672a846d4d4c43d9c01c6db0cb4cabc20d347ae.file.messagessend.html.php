<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-11-23 05:13:50
         compiled from "C:\xampp\htdocs\minative\admin\adminstyles\miNativeAdmin\messagessend.html" */ ?>
<?php /*%%SmartyHeaderCode:170895652927e166334-56080022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9672a846d4d4c43d9c01c6db0cb4cabc20d347ae' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minative\\admin\\adminstyles\\miNativeAdmin\\messagessend.html',
      1 => 1423717271,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170895652927e166334-56080022',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5652927e16e045_22791822',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652927e16e045_22791822')) {function content_5652927e16e045_22791822($_smarty_tpl) {?><!-- Modal -->
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
