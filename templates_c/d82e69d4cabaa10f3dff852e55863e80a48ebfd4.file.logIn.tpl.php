<?php /* Smarty version Smarty-3.1.15, created on 2017-04-23 14:56:09
         compiled from "/opt/lbaw/lbaw1635/public_html/LBAW/templates/common/logIn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40413904158fcb27977af50-55307266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd82e69d4cabaa10f3dff852e55863e80a48ebfd4' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/LBAW/templates/common/logIn.tpl',
      1 => 1492954707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40413904158fcb27977af50-55307266',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fcb27977ee60_89705504',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fcb27977ee60_89705504')) {function content_58fcb27977ee60_89705504($_smarty_tpl) {?><div class="ink-shade fade">
   <div id="myModal" class="ink-modal fade" data-trigger="#myModalTrigger2" data-width="55%" data-height="55%" role="dialog" aria-hidden="true" aria-labelled-by="modal-title">
    <div class="modal-header">
      <button class="modal-close ink-dismiss"></button>
  </div>
  <div class="modal-body" id="modalContent">
    <div id="login" align="center">
    <h2 > Log In </h1>
    <form class="ink-form ink-formvalidator" action="../../actions/user/login_action.php" method="post">
      <div class="control-group required all-70">
        <div class="control" style="margin:5%">
          <input id="username" name="username" type="text" data-rules="required|text[true,false]" placeholder="Username">
        </div>
        <div class="control" style="margin:5%">
          <input  id="password" name="password" type="password" data-rules="required|min_length[8]" placeholder="Password">
        </div>
      </div>
      <button class="ink-button blue" type="submit">Log in</button>
    </form>
    </div>
  </div>
  </div>
</div>
<a href="#" id="myModalTrigger2" class="ink-button black">Log In</a>
<?php }} ?>
