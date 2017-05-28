<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 16:01:09
         compiled from "/opt/lbaw/lbaw1635/public_html/muss/templates/user/sentMessages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:547175741592843354be915-28872781%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7858e78617540839c61b9802b6b6de85a7b947ba' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/muss/templates/user/sentMessages.tpl',
      1 => 1495437846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '547175741592843354be915-28872781',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sentMessages' => 0,
    'BASE_URL' => 0,
    'imessage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5928433551b8e9_78939756',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5928433551b8e9_78939756')) {function content_5928433551b8e9_78939756($_smarty_tpl) {?><style type="text/css">
.message_text{
  text-overflow: ellipsis;
  white-space: nowrap;
  overflow: hidden;
}
</style>
<div id="sentMessages" class="tabs-content" style="margin-top:0%" >
  <?php if ((count($_smarty_tpl->tpl_vars['sentMessages']->value))==0) {?>
    <div align="center" style="margin:5%">   <p> You have no messages </p> </div>
  <?php } else { ?>
  <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="5" data-pagination="#myTablePagination">
    <tbody>
        <?php  $_smarty_tpl->tpl_vars['imessage'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['imessage']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sentMessages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['imessage']->key => $_smarty_tpl->tpl_vars['imessage']->value) {
$_smarty_tpl->tpl_vars['imessage']->_loop = true;
?>
          <tr>
              <td >
                    <div id="stacker-container" class="column-group push-center" onclick="location.href='<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/MessagePage.php?id=<?php echo $_smarty_tpl->tpl_vars['imessage']->value['idMessage'];?>
&user=<?php echo $_smarty_tpl->tpl_vars['imessage']->value['idReceiver'];?>
'" style="cursor:pointer" >
                      <div class="xlarge-15 large-15 medium-15 tiny-100 stacker-column" style="margin-top:3%">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/UserPage.php?id=<?php echo $_smarty_tpl->tpl_vars['imessage']->value['idReceiver'];?>
"><?php echo $_smarty_tpl->tpl_vars['imessage']->value['name'];?>
</a>
                      </div>
                      <div class="xlarge-60 large-60 medium-60 tiny-100 stacker-column" style="margin-top:3%">
                        <div id="stacker-container" class="column-group push-center">
                          <div class="xlarge-30 large-30 medium-30 tiny-100 stacker-column">
                              <p class="message_text slab-300"><medium><strong><?php echo $_smarty_tpl->tpl_vars['imessage']->value['subject'];?>
</strong></medium></p>
                          </div>
                          <div class="xlarge-60 large-60 medium-60 tiny-100 stacker-column" style="margin-left:1%" >
                              <p class="message_text"> <small> <?php echo $_smarty_tpl->tpl_vars['imessage']->value['message_text'];?>
 </small> </p>
                          </div>
                        </div>
                      </div>
                      <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column" style="margin-top:3%" >
                        <p><small> <?php echo $_smarty_tpl->tpl_vars['imessage']->value['calendar_date'];?>
 </small></p>
                      </div>
                    </div>
              </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php }?>
</div>
<?php }} ?>
