<?php /* Smarty version Smarty-3.1.15, created on 2017-05-22 11:28:57
         compiled from "/opt/lbaw/lbaw1635/public_html/LBAW/templates/common/logIn.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40413904158fcb27977af50-55307266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd82e69d4cabaa10f3dff852e55863e80a48ebfd4' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/LBAW/templates/common/logIn.tpl',
      1 => 1495446178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40413904158fcb27977af50-55307266',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fcb27977ee60_89705504',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fcb27977ee60_89705504')) {function content_58fcb27977ee60_89705504($_smarty_tpl) {?><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/login.js"></script>
<div class="ink-shade fade">
   <div id="myModal" class="ink-modal fade" data-trigger="#myModalTrigger2" data-width="55%" data-height="55%" role="dialog" aria-hidden="true" aria-labelled-by="modal-title">
    <div class="modal-header">
      <button class="modal-close ink-dismiss"></button>
  </div>
  <div class="modal-body" id="loginModalContent">
    <div id="login" align="center">
    <h2 > Log In </h1>
    <form class="ink-form ink-formvalidator" action="../../actions/user/login_action.php" method="post" id="loginform">
      <div class="control-group required all-70">
        <div class="control" style="margin:5%">
          <input id="username" name="username" type="text" data-rules="required|text[true,false]" placeholder="Username">
        </div>
        <div class="control" style="margin:5%">
          <input  id="password" name="password" type="password" data-rules="required|min_length[8]" placeholder="Password">
        </div>
      </div>
      <button class="ink-button blue" type="submit" name="loginsub" id="loginsub">Log in</button>
    </form>
    </div>
  </div>
  </div>
</div>
<a href="#" id="myModalTrigger2" class="ink-button black">Log In</a>
<?php }} ?>
