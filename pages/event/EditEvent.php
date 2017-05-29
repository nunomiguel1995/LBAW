<?php
include_once('../../config/init.php');

include_once($BASE_DIR .'database/events.php');
include_once($BASE_DIR .'database/users.php');


 $idEvent = $_GET['id'];
 $eventOrganizer = getEventOrganizer($idEvent)[0];

   if($eventOrganizer !== $_SESSION){
      $smarty->display('main/noPermissions.tpl');
   }else{

     $smarty->display('event/editEvent.tpl');
   }


 ?>
