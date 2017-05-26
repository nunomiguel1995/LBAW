<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 16:01:09
         compiled from "/opt/lbaw/lbaw1635/public_html/muss/templates/user/messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144204741759284335210c40-24640119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2583c085d9df6eb1f8f192256784d5ce9516a5f5' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/muss/templates/user/messages.tpl',
      1 => 1495437846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144204741759284335210c40-24640119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'contacts' => 0,
    'contact' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5928433544b1b9_82883540',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5928433544b1b9_82883540')) {function content_5928433544b1b9_82883540($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<style type="text/css">
    .tabs-content{
        background: white;
    }
</style>

<div class="ink-shade fade push-center">
    <div id="myModal" class="ink-modal fade" data-trigger="#newMessageTrigger" data-width="80%" data-height="80%" role="dialog" aria-hidden="true" aria-labelled-by="modal-title">
      <div class="modal-header">
            <button class="modal-close ink-dismiss"></button>
        </div>

        <div class="modal-body" id="modalContent">
          <form action="#" class="ink-form">
            <div class="control-group all-50 small-100 tiny-100 push-center">
              <div class="control append-button" role="search">
                <span><input type="text" id="searchuser" placeholder="Search in Contact List"></span>
                <button class="ink-button"><i class="fa fa-search"></i> Search</button>
              </div>
            </div>
          </form>
          <?php if ((count($_smarty_tpl->tpl_vars['contacts']->value))==0) {?>
            <div align="center">   <p> You have no contacts yet </p> </div>
          <?php } else { ?>
          <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="5" data-pagination="#myTablePagination">
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['contact'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['contact']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['contacts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['contact']->key => $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->_loop = true;
?>
                  <tr>
                    <td >
                      <div id="stacker-container" class="column-group push-center">
                        <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column" style="margin:2%">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['contact']->value['user']['path'];?>
" width="50px" height="50px">
                        </div>
                        <div class="xlarge-60 large-60 medium-60 tiny-100 stacker-column" style="margin-top:3%">
                          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/UserPage.php?id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['user']['idUser'];?>
"><?php echo $_smarty_tpl->tpl_vars['contact']->value['user']['name'];?>
</a>
                          <div class="xlarge-20 large-20 medium-20 tiny-100 push-right">
                            <a  href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/newMessage.php?id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['user']['idUser'];?>
" style="color: inherit">
                              <span class="ink-tooltip" data-tip-text="Send Message" data-tip-color="grey" style="padding:4%">
                                <i class="fa fa-envelope" aria-hidden="true" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/newMessage.php?id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['user']['idUser'];?>
"></i>
                              </span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
            <?php }?>
        </div>
    </div>
</div>
<div align="center" style="margin:3%">
  <a href="#" id="newMessageTrigger" class="ink-button green">New Message</a>
</div>

<div id="messagepage" style="margin-bottom:5%">
  <div class="all-65 small-100 tiny-100 push-center">
    <div class="ink-tabs top" data-prevent-url-change="true">
      <ul class="tabs-nav" style="margin-bottom:0%">
          <li><a class="tabs-tab" href="#inbox">Inbox</a></li>
          <li><a class="tabs-tab" href="#sentMessages">Sent Messages</a></li>
      </ul>
      <div id="tabContent">
        <?php echo $_smarty_tpl->getSubTemplate ('user/inbox.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php echo $_smarty_tpl->getSubTemplate ('user/sentMessages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      </div>
    </div>
  </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
