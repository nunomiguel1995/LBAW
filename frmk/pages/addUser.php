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
       <link rel="stylesheet" href="styles/createUser.css">

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

  <h2 align="center"> Create new User </h2>

  <div class="ink-grid" style="margin-bottom:5%">
    <div class="formulario all-80 small-100 tiny-100 push-center">
    <div class="column-group push-center">
      <div class="xlarge-70 large-70 medium-100 tiny-100">
      	<form class="ink-form ink-formvalidator" method="post" action="#">
            <h5> Personal Information</h5>
             <div class="profilepic all-30">
               <figure class = "ink-image">
                 <img src="res/user.png" alt="user image">
               </figure>
               <button class="ink-button" type="button" style="margin:2%">Choose File</button>
             </div>
              <div class="control-group required ">
                   <label for="fullname">Full Name</label>
                   <div class="control">
                       <input id="fullname" name="fullname" type="text"  data-rules="required|text[true,false]" placeholder="User Full Name">
                   </div>
               </div>
               <div id="stacker-container" class="column-group required">
                 <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                   <div class="control-group xlarge-95 large-95 medium-95 tiny-100 required">
                      <label for="username">Username</label>
                      <div class="control">
                          <input id="username" name="username" type="text"  data-rules="required|text[true,false]" placeholder="New Username">
                      </div>
                    </div>
                  </div>
                  <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                    <div class="control-group xlarge-95 large-95 medium-95 tiny-100 required">
                       <label for="email">Email</label>
                       <div class="control">
                           <input id="email" name="email" type="text" data-rules="required|email" placeholder="E-mail">
                       </div>
                    </div>
                   </div>
               </div>

        <div id="stacker-container" class="column-group required">
            <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                <div class="control-group xlarge-95 large-95 medium-95 tiny-100 required">
                    <label for="password">Password</label>
                    <div class="control">
                        <input type="password" name="password" id="password" data-rules="required|min_length[8]" placeholder="New Password">
                    </div>
                </div>
            </div>
            <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
                <div class="control-group xlarge-95 large-95 medium-95 tiny-100 required">
                    <label for="retypepass">Retype</label>
                    <div class="control">
                        <input type="password" name="retype" id="retypepass" data-rules="matches[password]" placeholder="Retype the password">
                    </div>
                </div>
            </div>
        </div>

          <h5> Company Information </h5>
          <div id="stacker-container" class="column-group required">
            <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
              <div class="control-group xlarge-95 large-95 medium-95 tiny-100 required">
                  <label for="department">Department</label>
                  <div class="control">
                      <input type="text" name="department" id="department" data-rules="required|text[true,false]" placeholder="Department">
                  </div>
              </div>
            </div>
            <div class="xlarge-50 large-50 medium-50 tiny-100 stacker-column">
              <div class="control-group xlarge-95 large-95 medium-95 tiny-100 required">
                  <label for="position">Position</label>
                  <div class="control">
                      <input type="text" name="position" id="position" data-rules="required|text[true,false]" placeholder="Position">
                  </div>
              </div>
            </div>
          </div>
      	  <fieldset>
              <div class="control-group required">
                  <label class="type">Type of User
                    <span class="ink-tooltip" data-tip-html="<h6> The different types of users have different permissions:</h6> <ul> <li>Collaborator: can't create events</li>
                      <li>Supervisor: can create low level events</li> <li>Director: can create every type of event</li> </ul> "
                      data-tip-where="right" data-tip-color="grey">
                          <i class="fa fa-info-circle" aria-hidden="true"></i>
                    </span>
                  </label>
                  <ul class="control unstyled">
                      <li><input type="radio" id="rb1" name="rb" value="Collaborator"><label for="rb1">Collaborator</label></li>
                      <li><input type="radio" id="rb2" name="rb" value="Manager"><label for="rb2">Manager</label></li>
                      <li><input type="radio" id="rb3" name="rb" value="Director"><label for="rb3">Director</label></li>
                  </ul>
              </div>
          </fieldset>
          <div align="center">
            <input type="submit" name="sub" value="Submit" class="ink-button success blue" />
          </div>
      	</form>
      </div>
    </div>
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
