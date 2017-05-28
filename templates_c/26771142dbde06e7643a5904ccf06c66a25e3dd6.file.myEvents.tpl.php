<?php /* Smarty version Smarty-3.1.15, created on 2017-05-28 17:30:27
         compiled from "/opt/lbaw/lbaw1635/public_html/muss/templates/user/myEvents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1831544356592afb233b74b7-61331069%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26771142dbde06e7643a5904ccf06c66a25e3dd6' => 
    array (
      0 => '/opt/lbaw/lbaw1635/public_html/muss/templates/user/myEvents.tpl',
      1 => 1495987906,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1831544356592afb233b74b7-61331069',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_592afb235326e6_43450026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_592afb235326e6_43450026')) {function content_592afb235326e6_43450026($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


		<style type="text/css">
			#advanced-search{
				background: #ccc;
			}

      #event-list {
          -webkit-border-radius: 12px;
          -moz-border-radius: 12px;
          border-radius: 12px;
      }
			.my-never-closing-datepicker {
					position: static;
					display: inline-block;
			}
    </style>

    <div class="ink-grid" style="margin-bottom:2%">
        <div class="ink-tabs top" data-prevent-url-change="true">
            <!-- If you're using 'bottom' positioning, put this div AFTER the content. -->
            <ul class="tabs-nav align-center" style="margin-bottom:0px">
                <li><a class="tabs-tab" href="#events">Events</a></li>
                <li><a class="tabs-tab" href="#calendar">Calendar</a></li>
            </ul>

            <div id="events" class="tabs-content" style="padding-top:15px;margin-top:0px;background:white">
                <div class="ink-grid my-sections">
                    <div class="column-group" style="padding-left:50px">
                        <section class="all-50 small-100 tiny-100" id="my-section-1" data-target="#my-menu">
                            <h2>My events</h2>
                            <div id="event-list" style="margin-left: 3%">
                                <ul class="unstyled">
                                    <li style="padding:10px">
                                        <a href="#">Meeting regarding cakes</a><br>
                                        <span style="margin-left: 15px"> <i class="fa fa-location-arrow" aria-hidden="true"></i> Meeting Room A </span><br>
                                        <span style="margin-left: 15px"><i class="fa fa-calendar" aria-hidden="true"></i> 09/04/2017 </span>
                                    </li>
                                    <li style="padding:10px">
                                        <a href="#">Conference regarding muffins</a><br>
                                        <span style="margin-left: 15px"> <i class="fa fa-location-arrow" aria-hidden="true"></i> Conference Room A </span><br>
                                        <span style="margin-left: 15px"><i class="fa fa-calendar" aria-hidden="true"></i> 15/06/2017 </span>
                                    </li>
                                    <li style="padding:10px">
                                        <a href="#">Social cookies</a><br>
                                        <span style="margin-left: 15px"> <i class="fa fa-location-arrow" aria-hidden="true"></i> Dinning Room A </span><br>
                                        <span style="margin-left: 15px"><i class="fa fa-calendar" aria-hidden="true"></i> 16/06/2017 </span>
                                    </li>
                                </ul>
                            </div>
                            <nav class="ink-navigation ">
                                <ul class="pagination grey">
                                    <li class="disabled"><a href="#">Previous</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </nav>
                            <br>
                        </section>
                        <section class="all-50 small-100 tiny-100" id="my-section-2" data-target="#my-menu">
                            <h2>Invitations</h2>
                            <div id="event-list" style="margin-left: 3%">
                                <ul class="unstyled">
                                    <li style="padding:10px">
                                        <a href="#">Pancake workshop</a><br>
                                        <span style="margin-left: 15px"> <i class="fa fa-location-arrow" aria-hidden="true"></i> Kitchen A </span><br>
                                        <span style="margin-left: 15px"><i class="fa fa-calendar" aria-hidden="true"></i> 19/04/2017 </span>
                                    </li>
                                    <li style="padding:10px">
                                        <a href="#">Conference regarding broccoli</a><br>
                                        <span style="margin-left: 15px"> <i class="fa fa-location-arrow" aria-hidden="true"></i> Conference Room A </span><br>
                                        <span style="margin-left: 15px"><i class="fa fa-calendar" aria-hidden="true"></i> 15/06/2017 </span>
                                    </li>
                                    <li style="padding:10px">
                                        <a href="#">Meeting about meatloaf</a><br>
                                        <span style="margin-left: 15px"> <i class="fa fa-location-arrow" aria-hidden="true"></i> Dinning Room A </span><br>
                                        <span style="margin-left: 15px"><i class="fa fa-calendar" aria-hidden="true"></i> 16/06/2017 </span>
                                    </li>
                                </ul>
                            </div>
                            <nav class="ink-navigation ">
                                <ul class="pagination grey">
                                    <li class="disabled"><a href="#">Previous</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </nav>
                            <br>
                        </section>
                    </div>
                </div>

                <style>
                #my-menu .active {
                    background: #333 !important;
                    color: yellow;
                }
                </style>
            </div>
            <div id="calendar" class="tabs-content" style="padding-top:15px;margin-top:0px;background:white">
                <div class="ink-form">
                    <fieldset>
                        <div class="control-group column-group gutters" style="margin:3%">
                            <div class="control all-20 small-100 tiny-100">
                                <label for="calendar">Pick a date:</label>
                                <input
                                    id="calendar"
                                    name="calendar"
                                    type="text"
                                    class="ink-datepicker"
                                    data-css-class="ink-calendar my-never-closing-datepicker"
                                    data-format="d-m-Y"
                                    data-shy="false"
                                    data-auto-open="true"
                                    data-show-clean="false"
                                    data-show-close="false" />
                            </div>
                            <div class="control all-80 small-100 tiny-100">
                                <table class="ink-table alternating" style="table-layout:fixed;word-wrap:break-word">
                                    <tbody>
                                        <tr>
                                            <td >
                                                <a href="#">Meeting</a>
                                                <p class="fw-300">05/03/2017-16:30</p>
                    Meetings, meetings, meetings ... you've got to have at least some to keep the team communicating, but which ones, why, and with whom in attendance? Check out one team's approach in their meeting-phobic environment; describing their critical "types" meetings in a way that portrays their practicality and value(!).
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Conference</a>
                                                <p class="fw-300">08/04/2017-10:00</p>
                                                    How difficult can it be to give a test? You’ve probably heard this from your family, friends, and perhaps even your supervisor, but as testing professionals, we know it can be challenging and stressful. In this workshop, attendees will explore stressors you might encounter in your work day and ways to handle them by way of desserts and entertaining. The presentation, a participatory format layered with stories and examples, glazed with handouts, and dipped in humor, will offer a creative view of stress, as well as, a quirky sprinkling of creativity to get you through the day. The interactive workshop will have you wanting a second helping but you’ll be ready to get back to work to try your new recipes for success.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#">Meeting</a>
                                                <p class="fw-300"> 09/07/2017-14:00</p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
    </div>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
