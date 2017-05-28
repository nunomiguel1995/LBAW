<?php /* Smarty version Smarty-3.1.15, created on 2017-05-26 16:01:17
         compiled from "/opt/lbaw/lbaw1635/public_html/muss/templates/user/contactList.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6898485135928433d137329-68748970%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85f80bafdb7414095433bd18b386f0d49b04b46d' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/muss/templates/user/contactList.tpl',
      1 => 1495437846,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6898485135928433d137329-68748970',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
    'userID' => 0,
    'BASE_URL' => 0,
    'listID' => 0,
    'contacts' => 0,
    'contact' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5928433d3543d4_47076438',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5928433d3543d4_47076438')) {function content_5928433d3543d4_47076438($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script type="text/javascript" src="../../javascript/contactList.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>


<div class="push-center all-80">
<form action="#" class="ink-form">
  <div class="control-group all-50 small-100 tiny-100 push-center">
    <div class="control append-button" role="search">
      <span><input type="text" id="searchuser" placeholder="Search in Contact List"></span>
      <button class="ink-button"><i class="fa fa-search"></i> Search</button>
    </div>
  </div>
</form>

<div class="ink-shade fade push-center">
    <div id="myModal" class="ink-modal fade" data-trigger="#contactListTrigger" data-width="80%" data-height="80%" role="dialog" aria-hidden="true" aria-labelled-by="modal-title">
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
          
          <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="5" data-pagination="#myTablePagination">
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
                  <?php if ($_smarty_tpl->tpl_vars['user']->value['idUser']!=$_smarty_tpl->tpl_vars['userID']->value) {?>
                  <tr>
                    <td >
                      <div id="stacker-container" class="column-group push-center">
                        <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column" style="margin:2%">
                          <img src="<?php echo $_smarty_tpl->tpl_vars['user']->value['path'];?>
" width="50px" height="50px">
                        </div>
                        <div class="xlarge-60 large-60 medium-60 tiny-100 stacker-column" style="margin-top:3%">
                          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/UserPage.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value['idUser'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</a>
                          <div class="xlarge-20 large-20 medium-20 tiny-100 push-right">
                              <span class="ink-tooltip" data-tip-text="Add Contact" data-tip-color="grey" style="padding:4%">
                                <i class="fa fa-plus-square-o" aria-hidden="true" onclick="addUser(<?php echo $_smarty_tpl->tpl_vars['listID']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['user']->value['idUser'];?>
)"></i>
                              </span>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <?php }?>
                <?php } ?>
              </tbody>
            </table>
        </div>
    </div>
</div>
<div align="center" style="margin:3%">
  <a href="#" id="contactListTrigger" class="ink-button green">Add Contacts</a>
</div>


<div class="push-center all-60">
  <?php if ((count($_smarty_tpl->tpl_vars['contacts']->value))==0) {?>
    <div align="center">   <p> You have no contacts yet </p> </div>
  <?php }?>
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
                    <div class="ink-dropdown" data-target="#my-menu-dropdown-<?php echo $_smarty_tpl->tpl_vars['contact']->value['idUser'];?>
" data-dismiss-after="5">
                        <span><i class="fa fa-bars" aria-hidden="true"></i></span>
                        <ul id="my-menu-dropdown-<?php echo $_smarty_tpl->tpl_vars['contact']->value['idUser'];?>
" class="dropdown-menu">
                            <li ><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/newMessage.php?id=<?php echo $_smarty_tpl->tpl_vars['contact']->value['user']['idUser'];?>
">Send Message</a></li>
                            <li ><a href="javascript:deleteContactListUser(<?php echo $_smarty_tpl->tpl_vars['listID']->value;?>
,<?php echo $_smarty_tpl->tpl_vars['contact']->value['idUser'];?>
);">Delete Contact</a></li>
                        </ul>
                    </div>
                  </div>
                </div>
              </div>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>

<br><br><br>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
