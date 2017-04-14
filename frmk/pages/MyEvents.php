<!DOCTYPE html>
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

		<link rel="icon" href="res/calendar-icon.png">
		<link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.10/css/ink-flex.min.css">
		<link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.10/css/font-awesome.min.css">

		<!-- load Ink's javascript files from the cdn -->
		<script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/holder.js"></script>
		<script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/ink-all.min.js"></script>
		<script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/autoload.js"></script>

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
			#advanced-search{
				background: #ccc;
			}

            #event-list {
                -webkit-border-radius: 12px;
                -moz-border-radius: 12px;
                border-radius: 12px;
            }

        </style>
	</head>
	<body>
		<div id = "header">
			<header class="vertical-space">
								<div style="margin-left:1%"> <h1>Eventerpreneur<small>Manage your business</small></h1> </div>
								<nav class="ink-navigation">
										<ul class="menu horizontal black">
												<li class="heading"><a href="homepage.html">Home</a></li>
												<li>
														<a href="#">Events</a>
														<ul class="submenu">
																<li><a href="publicEvents.html">Public Events</a></li>
																<li><a href="searchEvents.html">Search</a></li>
																<li><a href="addEvent.html">Create</a></li>
														</ul>
												</li>
												<li><a href="#">My Account</a>
														<ul class = "submenu">
															<li><a href="UserPage.html">My Profile </a></li>
															<li><a href="MyEvents.html">My Events </a></li>
														</ul>
												</li>
												<div  class="push-right">
													<div class="ink-shade fade">
															<div id="myModal" class="ink-modal fade" data-trigger="#myModalTrigger2" data-width="55%" data-height="55%" role="dialog" aria-hidden="true" aria-labelled-by="modal-title">
																	<div class="modal-header">
																			<button class="modal-close ink-dismiss"></button>
																	</div>
																	<?php if (isset($_SESSION['username']) && ($_SESSION['username']!= NULL && $_SESSION['username']!= 'failed')) { ?>
                                  <div class="modal-body" id="modalContent">
                                    <div id="login" align="center">
                                      <h2 > Log In </h1>
                                      <form class="ink-form ink-formvalidator" action="login.php" method="post">
                                          <div class="control-group required all-70">
                                              <div class="control" style="margin:5%">
                                                  <input id="username" name="username" type="text" data-rules="required|text[true,false]" placeholder="Username">
                                              </div>
                                              <div class="control" style="margin:5%">
                                                  <input  id="password" name="password" type="password" data-rules="required|min_length[8]" placeholder="Password">
                                              </div>
                                          </div>
                                          <button class="ink-button blue" type="submit">Log in</button>
                                      </form>
                                    </div>
                                  </div>
								  <?php }else { $_SESSION['username'] = NULL;?>
								  <div class="modal-body" id="modalContent">
                                    <div id="logout" align="center">
                                      <h2 > Log Out </h1>
									</div>
                                  </div>	
								  <?php } ?>
															</div>
													</div>
													<li><a href="#" id="myModalTrigger2" class="ink-button black">Log In</a></li>
												</div>
										</ul>
								</nav>
				</header>
		</div>

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
        <style>
        .my-never-closing-datepicker {
            position: static;
            display: inline-block;
        }
        </style>

				<footer class="clearfix">
								<div align="center" class="ink-grid">
										<ul class="unstyled inline half-vertical-space">
												<li class="active"><a href="aboutus.html">About</a></li>
												<li><a href="aboutus.html#contacts">Contacts</a></li>
										</ul>
										<p class="note">Identification of the owner of the copyright, either by name, abbreviation, or other designation by which it is generally known.</p>
								</div>
				</footer>
	</body>
</html>
