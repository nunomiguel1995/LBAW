<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/events.php');

  session_start();
  $id=$_SESSION['iduser'];

  $createdEvents = getUserCreatedEvents($id);
  $invitedEvents = getUserInvitedEvents($id);
  $invites = getInvitationsNotifications($id);

  $smarty->assign('createdEvents',$createdEvents);
  $smarty->assign('invitedEvents',$invitedEvents);
  $smarty->assign('invites',$invites);
  $smarty->display('user/myEvents.tpl');

 ?>
