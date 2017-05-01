<?php /* Smarty version Smarty-3.1.15, created on 2017-05-01 15:38:56
         compiled from "/opt/lbaw/lbaw1635/public_html/LBAW/templates/user/userPage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:55185245859074880b90e59-09867453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cdb122dbab2ca3cce2119da4d710b1219faf419f' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/LBAW/templates/user/userPage.tpl',
      1 => 1493646057,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '55185245859074880b90e59-09867453',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'photo' => 0,
    'user' => 0,
    'IDUSER' => 0,
    'profileid' => 0,
    'USERNAME' => 0,
    'BASE_URL' => 0,
    'companyInfo' => 0,
    'upcomingEvents' => 0,
    'count' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_59074880d72ef9_41995386',
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
            <div class="column-group horizontal-gutters">
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
pages/user/editProfile.php?id=<?php echo $_smarty_tpl->tpl_vars['IDUSER']->value;?>
">
                        <button class="ink-button green"> <div class="fw-300">Edit Profile</div></button>
                      </a>
                    </div>
                    <?php }?>
                    <div id="column" class="push-center" style="max-width:350px">
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
                <div class="all-60 small-100 tiny-100 push-left" style="max-width:500px">
                    <div id="column">
                        <h4 align="center">Upcoming Events</h4>
                        <div class="ink-grid">
                            <div class="column-group">
                              <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(4, null, 0);?>
                              <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['upcomingEvents']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>
                                <?php if ($_smarty_tpl->tpl_vars['count']->value>0) {?>
                                <p class="all-60"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/event/EventPage.php?id=<?php echo $_smarty_tpl->tpl_vars['event']->value['idEvent'];?>
"><big><?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
</big></a></p>
                                <h6 align="right" class="all-40" style="padding-top:6px"><small><?php echo $_smarty_tpl->tpl_vars['event']->value['calendar_date'];?>
</small></h6>
                                <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value-1, null, 0);?>
                                <?php }?>
                              <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php }} ?>
