<?php /* Smarty version Smarty-3.1.15, created on 2017-04-23 15:05:03
         compiled from "/opt/lbaw/lbaw1635/public_html/LBAW/templates/event/searchevents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:428045958fcb27b989f92-79183464%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d8f185bcfe6d555dbbdfee7cf0588aba0cce54b' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/LBAW/templates/event/searchevents.tpl',
      1 => 1492956298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '428045958fcb27b989f92-79183464',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fcb27bb44af4_67517206',
  'variables' => 
  array (
    'events' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fcb27bb44af4_67517206')) {function content_58fcb27bb44af4_67517206($_smarty_tpl) {?><style type="text/css">
    #advanced-search{
        background: #ccc;
    }
</style>

<div class="ink-grid gutters">
<form class="ink-form" action="listEvent.php" method="GET">
<div class="control-group all-50 small-100 tiny-100 push-center">
    <div class="control append-button" role="search">
        <span><input type="text" name="search_text" id="name5" placeholder="Search for an event"></span>
        <button class="ink-button"><i class="fa fa-search"></i> Search</button>
    </div>
</div>
</form>
<div class="ink-grid align-center">
    <a class="ink-dropdown" data-target="#my-menu-dropdown" data-dismiss-on-outside-click="false">Advanced search</a>
    <div id="my-menu-dropdown" class="dropdown-menu"><br>
        <form class="ink-form">
            <div class="column-group gutters">
                <div class="control-group all-33 small-100 tiny-100">
                    <fieldset>
                        <legend>Type of event</legend>
                        <ul class="control unstyled align-center inline">
                            <li><input type="checkbox" id="cb1" name="cb" value="Meeting"><label for="cb">Meeting </label></li>
                            <li><input type="checkbox" id="cb2" name="cb" value="Workshop"><label for="cb">Workshop </label></li>
                            <li><input type="checkbox" id="cb3" name="cb" value="Conference"><label for="cb">Conference </label></li>
                            <li><input type="checkbox" id="cb4" name="cb" value="Social Gathering"><label for="cb">Social Gathering </label></li>
                            <li><input type="checkbox" id="cb5" name="cb" value="Lecture"><label for="cb">Lecture </label></li>
                        </ul>
                    </fieldset>
                </div>
                <div class="control-group all-33 small-100 tiny-100">
                    <fieldset>
                        <legend>Availability</legend>
                        <ul class="control unstyled">
                            <li><input type="checkbox" id="cb6" name="cb" value="Meeting"><label for="cb">Public </label></li>
                            <li><input type="checkbox" id="cb7" name="cb" value="Workshop"><label for="cb">Private </label></li>
                        </ul>
                    </fieldset>
                </div>
                <div class="control-group all-33 small-100 tiny-100">
                    <fieldset>
                        <legend for="filter">Order by</legend>
                        <select name="filter" id="filter">
                            <option value="date">Date</option>
                            <option value="alphabetical">Alphabetical</option>
                        </select>
                    </fieldset>
                </div>
            </div>
            <div class="control-group all-100 small-100 tiny-100 push-center">
                <input type="submit" value="Filter" class="ink-button">
            </div>
        </form>
    </div>
</div>
<br>
    <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word">
        <tbody>

        <?php  $_smarty_tpl->tpl_vars['e'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['e']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['e']->key => $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->_loop = true;
?>
            <tr>
                <td>
                    <a href="EventPage.php?id=<?php echo $_smarty_tpl->tpl_vars['e']->value['idEvent'];?>
"> <?php echo $_smarty_tpl->tpl_vars['e']->value['name'];?>
 </a>
                    <p class="fw-300"><?php echo $_smarty_tpl->tpl_vars['e']->value['calendar_date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['e']->value['calendar_time'];?>
</p>
                    <?php echo $_smarty_tpl->tpl_vars['e']->value['description'];?>

                </td>
            </tr>
        <?php } ?>

        </tbody>
    </table>
</div><?php }} ?>
