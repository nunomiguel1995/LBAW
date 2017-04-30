<?php /* Smarty version Smarty-3.1.15, created on 2017-04-29 18:15:30
         compiled from "/opt/lbaw/lbaw1635/public_html/LBAW/templates/admin/list_users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9443996785904ca321aaac2-21006296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d65f42c494749ea948b1d9006e03056703a65f3' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/LBAW/templates/admin/list_users.tpl',
      1 => 1493481720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9443996785904ca321aaac2-21006296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'users' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5904ca3234b5c5_58232485',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5904ca3234b5c5_58232485')) {function content_5904ca3234b5c5_58232485($_smarty_tpl) {?><script type="text/javascript" src="../../javascript/event.js"></script>
<script type="text/javascript" src="../../javascript/user.js"></script>
<script type="text/javascript" src="../../javascript/notification.js"></script>

<style type="text/css">
      #tabContent{
        background: white;
        padding: 3%;
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
        margin-bottom: 4%;
      }
      #usersearchform{
        margin-bottom: 3%;
      }
      .user{
        background: #ededed;
        padding: 1%;
        border-style: solid;
        border-color: #dbdbdb;
        border-radius: 15px;
        margin-bottom: 2%;
      }
      .notifications{
        background: #ededed;
        padding: 1%;
        border-style: solid;
        border-color: #dbdbdb;
        border-radius: 15px;
        margin-bottom: 2%;
      }
    </style>



    <div class="all-80 small-100 tiny-100 push-center">
        <div class="ink-tabs top" data-prevent-url-change="true">
            <ul class="tabs-nav" style="margin-bottom:0%">
                <li><a class="tabs-tab" href="#manageUsers">Manage Users</a></li>
                <li><a class="tabs-tab" href="#manageEvents">Manage Events</a></li>
                <li><a class="tabs-tab" href="#notifications">Notifications</a></li>
            </ul>
            <div id="tabContent">
              <div id="manageUsers" class="tabs-content" style="margin-top:0%" >
                <div class="ink-grid gutters" id="usersearchform">
                  <form action="#" class="ink-form">
                    <div class="control-group all-70 small-100 tiny-100 push-center">
                      <div class="control append-button" role="search">
                        <span><input type="text" id="searchuser" placeholder="Search for an user"></span>
                        <button class="ink-button"><i class="fa fa-search"></i> Search</button>
                      </div>
                    </div>

                  <div align="center">
                    <a class="ink-dropdown" data-target="#dropMenuUser" data-dismiss-on-outside-click="false">Advanced search</a>
                      <div id="dropMenuUser" class="dropdown-menu">
                        <div id="stacker-container" class="column-group all-60">  <!-- Stacker element -->
                          <div class="xlarge-33 large-33 medium-50 tiny-100 stacker-column push-center">
                            <div class="control-group">
                              <label for="companyinfo">Company Information</label>
                               <div class="control" style="margin:2%">
                                   <input id="companyinfo" name="companyinfo" type="text" placeholder="Department">
                               </div>
                               <div class="control" style="margin:2%">
                                    <input id="companyinfo" name="companyinfo" type="text" placeholder="Position">
                                </div>
                             </div>
                           </div>
                           <div class="xlarge-33 large-33 medium-50 tiny-100 stacker-column">
                             <div class="control-group push-left">
                               <label for="companyinfo">Type of user</label>
                                <div class="control">
                                  <ul class="control unstyled">
                                      <li><input type="checkbox" id="type1" name="type1" value="Collaborator"><label for="cb5">Collaborator</label></li>
                                      <li><input type="checkbox" id="type2" name="type2" value="Supervisor"><label for="cb4">Supervisor</label></li>
                                      <li><input type="checkbox" id="type3" name="type3" value="Director"><label for="cb3">Director</label></li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                         </div>
                      </div>

                  </div>
                    </form>
                  <div align="center" style="margin-top:3%">
                    <a href="addUser.php">
                      <button class="ink-button green"> <div class="fw-300"> <i class="fa fa-plus" aria-hidden="true"></i>  Add new User</div></button>
                    </a>
                  </div>
              </div>

                <?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>

                <div class="user xlarge-70 large-70 medium-100 tiny-100 push-center">
                  <div id="stacker-container" class="column-group">
                    <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
                      <img src= "<?php echo $_smarty_tpl->tpl_vars['user']->value['photo'];?>
" width="50px" height="50px">
                    </div>
                    <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                      <a href="#"> <?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
 </a>
                    </div>
                      <div class="xlarge-20 large-20 medium-20 tiny-100 stacker-column push-middle" align="right">
                        <span class="ink-tooltip" data-tip-text="Edit User" data-tip-color="grey" style="padding:4%">
                          <i class="fa fa-pencil-square-o" aria-hidden="true" ></i>
                        </span>
                        <span class="ink-tooltip" data-tip-text="Delete User" data-tip-color="grey" style="padding:4%" >
                          <i class="fa fa-trash" aria-hidden="true" onclick="onClickDelete('<?php echo $_smarty_tpl->tpl_vars['user']->value['idUser'];?>
')" ></i>
                        </span>
                      </div>
                  </div>
                </div>

                <?php } ?>
            </div>
<?php }} ?>
