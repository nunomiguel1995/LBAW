<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'templates/common/header.tpl');
?>
    <style type="text/css">
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
