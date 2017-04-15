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
       <link rel="icon" href="../images/assets/calendar-icon.png">
       <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.10/css/ink-flex.min.css">
       <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.1.10/css/font-awesome.min.css">

       <!-- load Ink's javascript files from the cdn -->
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/holder.js"></script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/ink-all.min.js"></script>
        <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.1.10/js/autoload.js"></script>
        <script type="text/javascript" src="../ink-3.1.10/js/ink-all.js"></script>
        <script type="text/javascript" src="../ink-3.1.10/js/autoload.js"></script>
        <script type="text/javascript" src="../ink-3.1.10/js/ink.tabs.js"></script>
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
                        <li class="heading"><a href="homepage.php">Home</a></li>
                        <li>
                            <a href="#">Events</a>
                            <ul class="submenu">
                                <li><a href="publicEvents.php">Public Events</a></li>
                                <li><a href="searchEvents.php">Search</a></li>
                                <li><a href="AddEvent.php">Create</a></li>
                            </ul>
                        </li>
                        <li><a href="#">My Account</a>
                            <ul class = "submenu">
                              <li><a href="UserPage.php">My Profile </a></li>
                              <li><a href="MyEvents.php">My Events </a></li>
                            </ul>
                        </li>
                        <?php include_once($BASE_DIR .'pages/user/login.php'); ?>
                    </ul>
                </nav>
        </header>
    </div>
