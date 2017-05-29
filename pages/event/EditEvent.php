<?php
include_once('../../config/init.php');
$smarty->assign('title', 'Edit Event');

include_once($BASE_DIR .'database/events.php');
include_once($BASE_DIR .'database/users.php');


 $idEvent = $_GET['id'];
 $eventOrganizer = getEventOrganizer($idEvent)[0]['idUser'];

   if($eventOrganizer !== $_SESSION['iduser']){
      $smarty->display('main/noPermissions.tpl');
   }else{
     $event = getEvent($idEvent)[0];
     $location = getEventLocation($idEvent)[0];
     $photo = getEventPhoto($idEvent);

     if(is_null($photo) ){
         $path ="../../images/assets/event-generic.png";
     }else{
         $path = "../../images/events/".$photo;
     }

     $smarty->assign('event',$event);
     $smarty->assign('location',$location);
     $smarty->assign('photo',$path);
     $smarty->display('event/editEvent.tpl');
   }


 ?>
