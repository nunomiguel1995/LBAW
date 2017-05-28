<?php /* Smarty version Smarty-3.1.15, created on 2017-05-22 09:46:16
         compiled from "/opt/lbaw/lbaw1635/public_html/muss/templates/event/list_events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8720869575922a55809d360-46864984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14a91247685a3f81f002fb76a588463469e1265e' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/muss/templates/event/list_events.tpl',
      1 => 1494862094,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8720869575922a55809d360-46864984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'e' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5922a558259750_76805783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5922a558259750_76805783')) {function content_5922a558259750_76805783($_smarty_tpl) {?><style type="text/css">
    #advanced-search{
        background: #ccc;
    }
</style>

<div class="ink-grid gutters">
<form class="ink-form" action="listEvent.php" method="POST">
    <div class="control-group all-50 small-100 tiny-100 push-center">
        <div class="control append-button" role="search">
            <span><input type="text" name="search_text" id="name5" placeholder="Search for an event"></span>
            <button class="ink-button"><i class="fa fa-search"></i> Search</button>
        </div>
    </div>
    <div class="ink-grid align-center">
        <a class="ink-dropdown" data-target="#my-menu-dropdown" data-dismiss-on-outside-click="false">Advanced search</a>
        <div id="my-menu-dropdown" class="dropdown-menu"><br>
            <div class="column-group gutters">
                <div class="control-group all-33 small-100 tiny-100">
                    <fieldset>
                        <legend>Type of event</legend>
                        <ul class="control unstyled align-center inline">
                            <li><input type="checkbox" id="cb1" name="eventType[]" value="Meeting"><label for="cb">Meeting </label></li>
                            <li><input type="checkbox" id="cb2" name="eventType[]" value="Workshop"><label for="cb">Workshop </label></li>
                            <li><input type="checkbox" id="cb3" name="eventType[]" value="Lecture/Conference"><label for="cb">Lecture/Conference </label></li>
                            <li><input type="checkbox" id="cb4" name="eventType[]" value="SocialGathering"><label for="cb">Social Gathering </label></li>
                            <li><input type="checkbox" id="cb5" name="eventType[]" value="KickOff"><label for="cb">Kickoff </label></li>
                        </ul>
                    </fieldset>
                </div>
                <div class="control-group all-33 small-100 tiny-100">
                    <fieldset>
                        <legend>Availability</legend>
                        <ul class="control unstyled">
                            <li><input type="checkbox" name="availability[]" value="true"><label for="cb">Public </label></li>
                            <li><input type="checkbox" name="availability[]" value="false"><label for="cb">Private </label></li>
                        </ul>
                    </fieldset>
                </div>
                <div class="control-group all-33 small-100 tiny-100">
                    <fieldset>
                        <legend for="filter">Order by</legend>
                        <select name="filter">
                            <option disabled selected value> -- select an option -- </option>
                            <option value="date">Date</option>
                            <option value="alphabetical">Alphabetical</option>
                        </select>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>
</form>
<br>
    <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word" data-page-size="5" data-pagination="#myTablePagination">
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
                    <?php if ($_smarty_tpl->tpl_vars['e']->value['isPublic']) {?>
                        <p class="fw-300"><?php echo $_smarty_tpl->tpl_vars['e']->value['calendar_date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['e']->value['calendar_time'];?>
 - Public Event</p>
                    <?php } else { ?>
                        <p class="fw-300"><?php echo $_smarty_tpl->tpl_vars['e']->value['calendar_date'];?>
 - <?php echo $_smarty_tpl->tpl_vars['e']->value['calendar_time'];?>
</p>
                    <?php }?>
                    <?php echo $_smarty_tpl->tpl_vars['e']->value['description'];?>

                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div><?php }} ?>
