<?php /* Smarty version Smarty-3.1.15, created on 2017-04-23 15:00:03
         compiled from "/opt/lbaw/lbaw1635/public_html/LBAW/templates/event/eventpage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:170993116658fcb3638c10d1-63830691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5721eb7e04775bbdae82fdbe08f849558eb0556a' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/LBAW/templates/event/eventpage.tpl',
      1 => 1492954707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170993116658fcb3638c10d1-63830691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'event' => 0,
    'organizer' => 0,
    'location' => 0,
    'posts' => 0,
    'post' => 0,
    'invited' => 0,
    'inv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fcb363ab4911_16775203',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fcb363ab4911_16775203')) {function content_58fcb363ab4911_16775203($_smarty_tpl) {?>
        <style type="text/css">
           #tabContent{
             background: white;
             padding: 3%;
             border-bottom-left-radius: 15px;
             border-bottom-right-radius: 15px;
             margin-bottom: 4%;
           }
        </style>

        <div style="padding:5%px" class="ink-grid all-70 medium-100 small-100 tiny-100">
            <div class="column-group">
                <div>
                    <h2><?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
</h2>
                    <figure class="ink-image bottom-space">
                        <img src="../../images/events/event%20page.png" class="imagequery">
                    </figure>

                    <div class="ink-tabs top" data-prevent-url-change="true" >
                        <ul class="tabs-nav" style="margin-bottom:0px">
                            <li><a class="tabs-tab" href="#info">Information</a></li>
                            <li><a class="tabs-tab" href="#posts">Posts</a></li>
                            <li><a class="tabs-tab" href="#invited">Invited</a></li>
                        </ul>
                        <div id="tabContent">
                            <div id="info" class="tabs-content">
                                <div class="ink-grid">
                                    <div class="column-group horizontal-gutters">
                                        <div class="all-50 small-100 tiny-100">
                                            <h3>Organizer</h3>
                                            <a href="#"><p href="#"><?php echo $_smarty_tpl->tpl_vars['organizer']->value['name'];?>
</p></a>
                                            <h3>Type of Event</h3>
                                            <p><?php echo $_smarty_tpl->tpl_vars['event']->value['event_type'];?>
</p>
                                        </div>
                                        <div class="all-50 small-100 tiny-100">
                                            <h3>Description</h3>
                                            <p align="justify"><?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>
</p>
                                            <h3>Location</h3>
                                            <p> <?php echo $_smarty_tpl->tpl_vars['location']->value['address'];?>
 , <?php echo $_smarty_tpl->tpl_vars['event']->value['location'];?>
</p>
                                            <h3>Data and Time</h3>
                                            <p><?php echo $_smarty_tpl->tpl_vars['event']->value['calendar_date'];?>
 at <?php echo $_smarty_tpl->tpl_vars['event']->value['calendar_time'];?>
</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="posts" class="tabs-content">
                                <div class="ink-grid">
                                    <div class="column-group">
                                        <form class="ink-form all-90 push-center">
                                            <textarea class="all-100" type="text" name="name" id="name" rows="" placeholder="Write something about the event..." style="margin-bottom:1%"></textarea>
                                            <button class="ink-button blue push-right" >Submit</button>
                                            <button class="ink-button push-right" >Add File</button>
                                            <button class="ink-button push-right" >Create Poll</button>
                                        </form>
                                    </div>
                                        <?php  $_smarty_tpl->tpl_vars['post'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['post']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['posts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['post']->key => $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
?>
                                            <hr class="all-90 push-center">
                                            <div class="post column-group all-90 push-center">
                                              <div class="column-group all-100">
                                                <img class="all-20" src="../../images/users/user.png" style="height:50px;width:50px">

                                                <h6 class="all-80" style="padding-left:1%;padding-top:1%"><a><?php echo $_smarty_tpl->tpl_vars['post']->value['name'];?>
</a><br><small><?php echo $_smarty_tpl->tpl_vars['post']->value['calendar_date'];?>
 <?php echo $_smarty_tpl->tpl_vars['post']->value['calendar_time'];?>
</small></h6>
                                              </div>
                                              <div class="all-100">
                                                <p align="justify"><?php echo $_smarty_tpl->tpl_vars['post']->value['post_text'];?>
</p>
                                              </div>
                                            </div>
                                        <?php } ?>
                                </div>
                            </div>
                            <div id="invited" class="tabs-content">
                                <div class="ink-grid" >
                                    <div class="column-group horizontal-gutters">
                                            <?php if (empty($_smarty_tpl->tpl_vars['invited']->value)) {?>
                                                <div class="column-group all-50 small-100 tiny-100">
                                                  <p> There are no invited users </p>
                                                </div>
                                            <?php } else { ?>
                                                <?php  $_smarty_tpl->tpl_vars['inv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['inv']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['invited']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['inv']->key => $_smarty_tpl->tpl_vars['inv']->value) {
$_smarty_tpl->tpl_vars['inv']->_loop = true;
?>
                                                    <div class="column-group all-50 small-100 tiny-100">
                                                      <img class="all-20" src="../../images/users/user.png" style="height:50px;width:50px">
                                                      <h6 class="all-65" style="padding-left:2%;padding-top:5%"><a><?php echo $_smarty_tpl->tpl_vars['inv']->value['name'];?>
</a></h6>
                                                    </div>
                                                <?php } ?>
                                            <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php }} ?>
