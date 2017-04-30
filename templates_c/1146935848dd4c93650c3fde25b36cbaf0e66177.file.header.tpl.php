<?php /* Smarty version Smarty-3.1.15, created on 2017-04-29 17:14:40
         compiled from "/opt/lbaw/lbaw1635/public_html/LBAW/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63814631458fcb27958ea68-54254485%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1146935848dd4c93650c3fde25b36cbaf0e66177' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/LBAW/templates/common/header.tpl',
      1 => 1493481720,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63814631458fcb27958ea68-54254485',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fcb279772266_59648260',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
    'userid' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fcb279772266_59648260')) {function content_58fcb279772266_59648260($_smarty_tpl) {?><!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <title>Eventerpreneur</title>
       <meta name="description" content="">
       <meta name="HandheldFriendly" content="True">
       <meta name="MobileOptimized" content="320">
       <meta name="mobile-web-app-capable" content="yes">
       <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
       <link rel="icon" href="../../images/assets/calendar-icon.png">
       <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.10/css/ink-flex.min.css">
       <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.10/css/font-awesome.min.css">

       <!-- load Ink's javascript files from the cdn -->
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/holder.js"></script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/ink-all.min.js"></script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/autoload.js"></script>
        <script type="text/javascript" src="../ink-3.1.10/js/ink-all.js"></script>
        <script type="text/javascript" src="../ink-3.1.10/js/autoload.js"></script>
        <script type="text/javascript" src="../ink-3.1.10/js/ink.tabs.js"></script>
        <script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/main.js"></script>
        <script>
          var imagequery = new Ink.UI.ImageQuery('.imagequery', {
            src: 'res/company.jpg',
            queries: [
              {
                  label: 'tiny',
                  width: 320
              },
              {
                  label: 'medium',
                  width: 960
              },
              {
                  label: 'large',
                  width: 1200
              },
              {
                  label: 'xlarge',
                  width: 1400
              }
            ]
          });
        </script>
        <style type="text/css">
          header h1 small:before  {
                content: "|";
                margin: 0 0.5em;
                font-size: 1.6em;
            }
            body {
                background: #ededed;
            }
            footer {
                background: #ccc;
            }
        </style>
  </head>

  <body>
    <div id = "header">
      <header class="vertical-space">
                <div style="margin-left:1%"> <h1>Eventerpreneur<small>Manage your business</small></h1> </div>
                <nav class="ink-navigation">
                    <ul class="menu horizontal black">
                      <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value!='admin') {?>
                        <li class="heading">
                          <a href= "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
"> Home </a>
                        </li>
                        <li>
                            <a href="#">Events</a>
                            <ul class="submenu">
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/main/publicEvents.php">Public Events</a></li>
                                <li><a href= "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/event/searchEvents.php">Search</a></li>
                                <li><a href= <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?> "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/event/addEvent.php" <?php } else { ?> "#" <?php }?> >Create</a></li>
                            </ul>
                        </li>
                        <li><a href="#">My Account</a>
                            <ul class = "submenu">
                              <?php echo var_dump($_smarty_tpl->tpl_vars['userid']->value);?>

                              <li><a href= <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>  "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/UserPage.php?id=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" <?php } else { ?> "#" <?php }?> >My Profile </a></li>
                              <li><a href=  <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?> "<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/user/MyEvents.php" <?php } else { ?> "#" <?php }?> >My Events </a></li>
                            </ul>
                        </li>
                        <?php }?>
                        <div  class="push-right">
                          <?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
                            <?php echo $_smarty_tpl->getSubTemplate ('common/logOut.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                          <?php } else { ?>
                            <?php echo $_smarty_tpl->getSubTemplate ('common/logIn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                          <?php }?>
                        </div>

                    </ul>
                </nav>


        </header>
    </div>
<?php }} ?>
