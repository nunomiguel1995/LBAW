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

            #pEvent{
              background: white;
              padding: 1%;
              border-style: solid;
              border-color: #dbdbdb;
              border-radius: 15px;
              margin-bottom: 2%;            }


        </style>
  </head>

  <body>

    <div id = "header" >
      <header class="vertical-space" style="margin-bottom:0%">
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
  <div id="top-image">
    <figure class="ink-image bottom-space all-75 small-100 tiny-100 push-center">
      <img src="res/public_events.jpg" class="imagequery">
      <figcaption class="over-bottom">
        Events for all the community
      </figcaption>
    </figure>
  </div>

	<div id="title" align="middle" style="margin-top:1%">
		<h3> Public Events </h3>
	</div>

	<div id="pEvent" align= "left" class="all-75 small-100 tiny-100 push-center" >

		<a href="#" class="large" >August Product Showcase </a>
        <p class="small"> <i class="fa fa-calendar-o" aria-hidden="true"></i>  2/08/2017 17:30 <i class="fa fa-map-marker" aria-hidden="true"></i> Main Presentation Area</p>
		<hr>
		<p> Showcase of all new products the company will release in the next months. Anyone can attend.</p>


	</div>
      <div id="pEvent" align= "left" class="all-75 small-100 tiny-100 push-center" >

		<a href="#" class="large" >27 Years Anniversary Celebration </a>
          <p class="small"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 17/12/2017 22:00 <i class="fa fa-map-marker" aria-hidden="true"></i> Canteen </p>
		<hr>
		<p> Our esteemed company is going to become one year older! Come celebrate with us!</p>


	</div>
      <div id="pEvent" align= "left" class="all-75 small-100 tiny-100 push-center" >

		<a href="#" class="large" >Charity Event</a>
        <p class="small"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 24/02/2018 21:30 <i class="fa fa-map-marker" aria-hidden="true"></i> Canteen</p>
		<hr>
		<p>Event to raise funds to send to several organizations battling the ebola spread in Central Africa. </p>


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
