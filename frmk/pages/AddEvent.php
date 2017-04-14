<!DOCTYPE html>
<html lang="en">
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
        		label{
        		float: left;
        		}
              #page{
                background: white;
                border-radius: 15px;
                border-style: solid;
                border-width: 2px;
                border-color: #dbdbdb;
              }
              .user{
                background: #ededed;
                padding: 1%;
                border-style: solid;
                border-color: #dbdbdb;
                border-radius: 15px;
                margin-bottom: 2%;
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

    <div class="all-80 small-100 tiny-100 push-center">
      <div id="createEvent" class="ink-carousel" data-pagination="#my-carousel-1-pagination" align="center">
        <h4> Create Event </h4>
        <form class="ink-form ink-formvalidator ">
            <ul class="stage column-group half-gutters" >
                <li class="slide all-100 small-100 tiny-100" id="page">
                        <div class="control-group all-70">
                          <h5 align="left" style="margin-top:2%">Basic Information</h5>
                          <div class="control-group required">
                            <label for="eventname" align = "left">Enter a name for the event:</label>
                            <div class="control">
                                <input id="eventname" name="eventname" type="text" data-rules="required|text[true,false]" placeholder="Event Name">
                            </div>
                          </div>
                          <div class="control-group required">
                             <label for="location" align = "left">Enter a location for the event:</label>
                            <div class="control">
                                <input  id="location" name="location" type="text" data-rules="required|text[true,false]" placeholder="Event Location">
                            </div>
                          </div>
                        <div class="control-group required">
                          <label for="date" align="left">Date</label><br>
                            <div id="stacker-container" class="column-group">
                              <div class="xlarge-40 large-40 medium-40 tiny-100 stacker-column" align="left">
                                  <input type="text" class="ink-datepicker" data-format="d-m-Y" />
                              </div>
                              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column" align="left">
                                <input type="time" name="timePicker" />
                              </div>
                            </div>
                          </div>
                            <div id="stacker-container" class="column-group">
                              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column push-middle" align="left">
                                <fieldset>
                                    <div class="control-group required">
                                      <label for="type" align="left">Type</label><br>
                                        <ul class="control unstyled">
                                            <li><input type="radio" id="rb1" name="rb" value="Meeting"><label for="rb1">Meeting</label></li>
                                            <li><input type="radio" id="rb2" name="rb" value="Workshop"><label for="rb2">Workshop</label></li>
                                            <li><input type="radio" id="rb3" name="rb" value="Social"><label for="rb3">Social Gathering</label></li>
                                            <li><input type="radio" id="rb4" name="rb" value="Lecture/Conference"><label for="rb4">Lecture/Conference</label></li>
                                            <li><input type="radio" id="rb5" name="rb" value="Kick-off"><label for="rb5">Kick-off Meeting</label></li>
                                        </ul>
                                    </div>
                                </fieldset>
                              </div>
                              <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column push-middle" align="left">
                                <fieldset>
                                    <div class="control-group" align = "left">
                                        <ul class="control unstyled">
                                            <li><input type="checkbox" id="publiv" name="public" value="Public"><label for="cb5">Make Event Public</label></li>
                                        </ul>
                                    </div>
                                </fieldset>
                              </div>
                            </div>
                        </div>
                </li>
                <li class="slide all-100 small-100 tiny-100" id="page">
                  <div class="control-group all-70">
                    <h5 for="description" align = "left" style="margin-top:2%">Description <small>(Optional)</small></h5>
                    <div class="control">
                      <textarea id="description" rows="4" cols="50"></textarea>
                    </div>
                  </div>
                  <div class="control-group all-70">
                    <div class="control">
                      <h5 for="description" align = "left">Choose Event Photo <small>(Optional)</small></h5>
                      <div class="profilepic all-55">
                        <figure class = "ink-image">
                          <img src="res/event_general.jpeg" alt="event image">
                        </figure>
                        <button class="ink-button" type="button">Choose File</button>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="slide all-100 small-100 tiny-100" id="page">
                  <div class="control-group all-70 small-95 tiny-95">
                    <h5 for="description" align = "left" style="margin-top:2%">Invite People </small></h5>
                    <div class="control" id="invited">
                      <div class="ink-shade fade">
                          <div id="myModal" class="ink-modal fade" data-trigger="#myModalTrigger" data-width="80%" data-height="80%" role="dialog" aria-hidden="true" aria-labelled-by="modal-title">
                              <div class="modal-header">
                                  <button class="modal-close ink-dismiss"></button>
                                  <h2 id="modal-title">Invite People</h2>
                              </div>
                              <div class="modal-body" id="modalContent">
                                <div class="user all-50 small-100 tiny-100 push-center">
                                  <div id="stacker-container" class="column-group">
                                    <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
                                      <img src="res/person1.jpg" width="50px" height="50px">
                                    </div>
                                    <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                                      <a href="#"> Ken Howard </a>
                                    </div>
                                      <div class="xlarge-20 large-20 medium-20 tiny-100 stacker-column push-middle" align="right">
                                        <form class="ink-form">
                                            <fieldset>
                                                <div class="control-group">
                                                    <ul class="control unstyled">
                                                        <li><input type="checkbox" id="cb5" name="cb5" value="Chimaira"></li>
                                                    </ul>
                                                </div>
                                            </fieldset>
                                        </form>
                                      </div>
                                  </div>
                                </div>
                                <div class="user all-50 small-100 tiny-100 push-center">
                                  <div id="stacker-container" class="column-group">
                                    <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
                                      <img src="res/user.png" width="50px" height="50px">
                                    </div>
                                    <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                                      <a href="#"> Andrew Richard </a>
                                    </div>
                                      <div class="xlarge-20 large-20 medium-20 tiny-100 stacker-column push-middle" align="right">
                                        <form class="ink-form">
                                            <fieldset>
                                                <div class="control-group">
                                                    <ul class="control unstyled">
                                                        <li><input type="checkbox" id="cb5" name="cb5" value="Chimaira"></li>
                                                    </ul>
                                                </div>
                                            </fieldset>
                                        </form>
                                      </div>
                                  </div>
                                </div>
                                <div class="user all-50 small-100 tiny-100 push-center">
                                  <div id="stacker-container" class="column-group">
                                    <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
                                      <img src="res/person3.jpg" width="50px" height="50px">
                                    </div>
                                    <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                                      <a href="#"> Joanne Lopez </a>
                                    </div>
                                      <div class="xlarge-20 large-20 medium-20 tiny-100 stacker-column push-middle" align="right">
                                        <form class="ink-form">
                                            <fieldset>
                                                <div class="control-group">
                                                    <ul class="control unstyled">
                                                        <li><input type="checkbox" id="cb5" name="cb5" value="Chimaira"></li>
                                                    </ul>
                                                </div>
                                            </fieldset>
                                        </form>
                                      </div>
                                  </div>
                                </div>
                              </div>
                              <div class="modal-footer">
                                  <div class="push-center">
                                      <button class="ink-button blue">Done</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div style="margin-bottom:2%">
                        <a href="#" id="myModalTrigger" class="ink-button green"><i class="fa fa-plus" aria-hidden="true" ></i>  Invite</a><br>
                      </div>
                      <div class="user xlarge-70 large-70 medium-100 tiny-100 push-center">
                        <div id="stacker-container" class="column-group">
                          <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
                            <img src="res/user.png" width="50px" height="50px">
                          </div>
                          <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                            <a href="#"> Jake Brooks </a>
                          </div>
                            <div class="xlarge-20 large-20 medium-20 tiny-100 stacker-column push-middle" align="right">
                              <span class="ink-tooltip" data-tip-text="Delete" data-tip-color="grey" style="padding:4%">
                                <i class="fa fa-times" aria-hidden="true"></i>
                              </span>
                            </div>
                        </div>
                      </div>
                      <div class="user xlarge-70 large-70 medium-100 tiny-100 push-center">
                        <div id="stacker-container" class="column-group">
                          <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
                            <img src="res/person4.jpg" width="50px" height="50px">
                          </div>
                          <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                            <a href="#"> Grace McCarthy </a>
                          </div>
                          <div class="xlarge-20 large-20 medium-20 tiny-100 stacker-column push-middle" align="right">
                            <span class="ink-tooltip" data-tip-text="Delete" data-tip-color="grey" style="padding:4%">
                              <i class="fa fa-times" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="user xlarge-70 large-70 medium-100 tiny-100 push-center">
                        <div id="stacker-container" class="column-group">
                          <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
                            <img src="res/person2.jpg" width="50px" height="50px">
                          </div>
                          <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                            <a href="#"> Lee Ryan </a>
                          </div>
                          <div class="xlarge-20 large-20 medium-20 tiny-100 stacker-column push-middle" align="right">
                            <span class="ink-tooltip" data-tip-text="Delete" data-tip-color="grey" style="padding:4%">
                              <i class="fa fa-times" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="user xlarge-70 large-70 medium-100 tiny-100 push-center">
                        <div id="stacker-container" class="column-group">
                          <div class="xlarge-10 large-10 medium-10 tiny-100 stacker-column">
                            <img src="res/user.png" width="50px" height="50px">
                          </div>
                          <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                            <a href="#"> Leo Hacket </a>
                          </div>
                          <div class="xlarge-20 large-20 medium-20 tiny-100 stacker-column push-middle" align="right">
                            <span class="ink-tooltip" data-tip-text="Delete" data-tip-color="grey" style="padding:4%">
                              <i class="fa fa-times" aria-hidden="true"></i>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div align="center" style="margin:2%">
                    <input type="submit" name="sub" value="Create Event" class="ink-button success blue"/>
                  </div>
                </li>
            </ul>
            <nav id="my-carousel-1-pagination" class="ink-navigation">
                <ul class="pagination grey"> </ul>
            </nav>
          </form>
      </div>
    </div>
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
