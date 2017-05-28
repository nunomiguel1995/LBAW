<?php /* Smarty version Smarty-3.1.15, created on 2017-05-27 16:45:57
         compiled from "/opt/lbaw/lbaw1635/public_html/LBAW/templates/user/userPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55185245859074880b90e59-09867453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdb122dbab2ca3cce2119da4d710b1219faf419f' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/LBAW/templates/user/userPage.tpl',
      1 => 1493827213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55185245859074880b90e59-09867453',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59074880d72ef9_41995386',
  'variables' => 
  array (
    'photo' => 0,
    'user' => 0,
    'IDUSER' => 0,
    'profileid' => 0,
    'USERNAME' => 0,
    'BASE_URL' => 0,
    'companyInfo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59074880d72ef9_41995386')) {function content_59074880d72ef9_41995386($_smarty_tpl) {?>    <style type="text/css">
        #column{
          background: white;
          padding: 3%;
          border-bottom-left-radius: 15px;
          border-bottom-right-radius: 15px;
          margin-bottom: 4%;
        }
    </style>
        <div class="ink-grid">
            <div class="column-group horizontal-gutters" style="margin-bottom:5%">
                <div class="all-40 small-100 tiny-100">
                    <figure class="ink-image push-center" style="max-width:350px">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['photo']->value;?>
">
                        <figcaption class="over-bottom" style="padding-bottom:5px;padding-top:5px">
                            <h6 align="center" style="margin-bottom:0px"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</h6>
                        </figcaption>
                    </figure>
                    <br>
                    <?php if (($_smarty_tpl->tpl_vars['IDUSER']->value==$_smarty_tpl->tpl_vars['profileid']->value||$_smarty_tpl->tpl_vars['USERNAME']->value=="admin")) {?>
                    <div align="center">
                      <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/editProfile.php?id=<?php echo $_smarty_tpl->tpl_vars['profileid']->value;?>
">
                        <button class="ink-button green"> <div class="fw-300">Edit Profile</div></button>
                      </a>
                    </div>
                    <?php }?>

                </div>
                <div class="all-60 small-100 tiny-100 push-left" style="max-width:500px">
                    <div id="column">
                      <h4 align="center">Info</h4>
                        <h5 style="margin-bottom:2px"><small>Username</small></h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</p>
                        <h5 style="margin-bottom:2px"><small>Email</small></h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</p>
                        <h5 style="margin-bottom:2px"><small>Position</small></h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['position'];?>
</p>
                        <h5 style="margin-bottom:2px"><small>Department</small></h5>
                        <p><?php echo $_smarty_tpl->tpl_vars['companyInfo']->value['department'];?>
</p>
                    </div>
                </div>

            </div>
        </div>
<?php }} ?>
