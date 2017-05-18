<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  session_start();
  $idSender =  $_SESSION['iduser'];
  $idReceiver = $_GET['id'];

  $user = getUser($idReceiver);
  $smarty->assign('user',$user);
  $smarty->assign('idSender',$idSender);
  $smarty->assign('idReceiver',$idReceiver);
  $smarty->display('user/newMessage.tpl');

 ?>
