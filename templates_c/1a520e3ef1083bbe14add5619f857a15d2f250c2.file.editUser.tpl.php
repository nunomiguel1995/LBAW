<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 15:58:40
         compiled from "/opt/lbaw/lbaw1635/public_html/muss/templates/user/editUser.tpl" */ ?>
<?php /*%%SmartyHeaderCode:516182174592842a00c6192-10093343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a520e3ef1083bbe14add5619f857a15d2f250c2' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/muss/templates/user/editUser.tpl',
      1 => 1493893243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '516182174592842a00c6192-10093343',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'profileid' => 0,
    'photo' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592842a025b920_37393819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592842a025b920_37393819')) {function content_592842a025b920_37393819($_smarty_tpl) {?><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/user.js"></script>

<div class="ink-grid" style="margin-bottom:5%">
      <div class="formulario all-80 small-100 tiny-100 push-center">
      <div class="column-group push-center">
        <div class="xlarge-70 large-70 medium-100 tiny-100">
        	<form name="edit_form" class="ink-form ink-formvalidator" method="post" action="../../actions/user/edit_user.php?id=<?php echo $_smarty_tpl->tpl_vars['profileid']->value;?>
" enctype="multipart/form-data"  onsubmit="return checkEditForm()">
              <h5> Personal Information</h5>
               <div class="profilepic all-30">
                 <figure class = "ink-image">
                   <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
" alt="user image">
                 </figure>
                 <input type="file" name="image"  />
               </div>
                <div class="control-group">
                     <label for="fullname">Full Name</label>
                     <div class="control">
                         <input id="fullname" name="fullname" type="text"  data-rules="required|text[true,false]" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
">
                     </div>
                 </div>
                 <div id="stacker-container" class="column-group">
                    <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                      <div class="control-group xlarge-95 large-95 medium-95 tiny-100">
                         <label for="email">Email</label>
                         <div class="control">
                             <input id="email" name="email" type="text" data-rules="required|email" value="<?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
">
                         </div>
                      </div>
                     </div>
                 </div>

          <div id="stacker-container" class="column-group">
              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                  <div class="control-group xlarge-95 large-95 medium-95 tiny-100">
                      <label for="password">New Password</label>
                      <div class="control">
                          <input type="password" name="newpassword" id="newpassword" placeholder="Old Password">
                      </div>
                  </div>
              </div>
              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                  <div class="control-group xlarge-95 large-95 medium-95 tiny-100">
                      <label for="retypepass">Confirm New Password</label>
                      <div class="control">
                          <input type="password" name="newpasswordretype" id="newpasswordretype" placeholder="Retype the password">
                      </div>
                  </div>
              </div>
              <p id="warnings" style="color: red"></p>
          </div>

            <div align="center">
              <input type="submit" name="sub" value="Submit" class="ink-button success blue" />
            </div>
        	</form>
        </div>
      </div>
    </div>
  </div>
<?php }} ?>
