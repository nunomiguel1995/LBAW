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

            #about{
              background: white;
              border-style: solid;
              border-color: #bcbcbc;
              border-width: 1px;
              border-radius: 15px;
              padding: 3%;
              margin-bottom: 5%;
            }
            #contacts{
              background: white;
              border-style: solid;
              border-color: #bcbcbc;
              border-width: 1px;
              border-radius: 15px;
              padding: 3%;
              margin-top: 5%;
              margin-bottom: 5%;
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

      <div id="about" align="center" class="all-80 small-95 tiny-95 push-center">
        <h2> About us </h2>
        <p class="fw-300"> Eventerpreneur is a company with the objective of building software that helps you organize company
           events in a concise and organized manner. Our software has a local installation so it allows you to manage
           your employees and events in the way that fits your business better.
          Its many features allow users to create events, invite other people, shares documents, ideas and so much more.
          We hope you enjoy your software!</p>
      </div>
      <hr>
      <div id="contacts"  align="center" class="all-80 small-95 tiny-95 push-center">
        <h2> Contacts </h2>
        <p class="fw-300"> If you have any questions or problems, contact our team. </p>
        <ul style="list-style-type: none">
          <li> <i class="fa fa-user" aria-hidden="true"> Daniel Garrido    </i> <i class="fa fa-envelope-o" aria-hidden="true"><a href="mailto:up201403060@fe.up.pt"> up201403060@fe.up.pt</a></i></li>
          <li> <i class="fa fa-user" aria-hidden="true"> Nuno Freitas    </i> <i class="fa fa-envelope-o" aria-hidden="true"><a href="mailto:up201404739@fe.up.pt"> up201404739@fe.up.pt</a></i></li>
          <li> <i class="fa fa-user" aria-hidden="true"> Nuno Castro    </i> <i class="fa fa-envelope-o" aria-hidden="true"><a href="mailto:up201406990@fe.up.pt"> up201406990@fe.up.pt</a></i></li>
          <li> <i class="fa fa-user" aria-hidden="true"> Sara Santos    </i> <i class="fa fa-envelope-o" aria-hidden="true"><a href="mailto:up201402814@fe.up.pt"> up201402814@fe.up.pt</a></i></li>
        </ul>
      </div>
    </body>

  </html>
