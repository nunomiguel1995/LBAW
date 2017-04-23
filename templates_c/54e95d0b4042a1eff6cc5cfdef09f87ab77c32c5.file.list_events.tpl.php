<?php /* Smarty version Smarty-3.1.15, created on 2017-04-23 15:10:50
         compiled from "/opt/lbaw/lbaw1635/public_html/LBAW/templates/event/list_events.tpl" */ ?>
<?php /*%%SmartyHeaderCode:201514144158fcb5ea84c112-04039859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54e95d0b4042a1eff6cc5cfdef09f87ab77c32c5' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/LBAW/templates/event/list_events.tpl',
      1 => 1492954707,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '201514144158fcb5ea84c112-04039859',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'events' => 0,
    'event' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_58fcb5ea9e63d4_63922967',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58fcb5ea9e63d4_63922967')) {function content_58fcb5ea9e63d4_63922967($_smarty_tpl) {?>  <div id="manageEvents" class="tabs-content" style="margin-top:0%">
    <div class="ink-grid gutters">
      <form action="#" class="ink-form">
        <div class="control-group all-70 small-100 tiny-100 push-center">
          <div class="control append-button" role="search">
            <span><input type="text" id="searchEvent" placeholder="Search for an event"></span>
            <button class="ink-button"><i class="fa fa-search"></i> Search</button>
          </div>
        </div>
      </form>
      <div style="text-align:center">
        <a class="ink-dropdown" data-target="#dropMenuEvent" data-dismiss-on-outside-click="false">Advanced search</a>
        <div id="dropMenuEvent" class="dropdown-menu">
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
      <table class="ink-table alternating" style="table-layout:fixed;word-wrap: break-word">
        <tbody>
          <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['events']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
?>

            <tr>
              <td >
                <span class="ink-tooltip push-right" data-tip-text="Delete" data-tip-color="grey">
                  <i class="fa fa-times" aria-hidden="true" onclick="onClickDeleteEvent('<?php echo $_smarty_tpl->tpl_vars['event']->value['idEvent'];?>
')"></i>
                </span><br>
                <a href="#"><?php echo $_smarty_tpl->tpl_vars['event']->value['name'];?>
</a>
                <h6 class="fw-300"><?php echo $_smarty_tpl->tpl_vars['event']->value['calendar_date'];?>
 <?php echo $_smarty_tpl->tpl_vars['event']->value['calendar_time'];?>
</h6>
                <p> <?php echo $_smarty_tpl->tpl_vars['event']->value['description'];?>
 </p>
              </td>
            </tr>

          <?php } ?>
        </tbody>
      </table>
    </div>
    </div>
    </div>
  </div>
</div>
<?php }} ?>
