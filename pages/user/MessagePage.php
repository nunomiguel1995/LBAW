<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/messages.php');
  include_once($BASE_DIR .'database/users.php');

  $id = $_GET['id'];
  $userID = $_GET['user'];
  $message = getMessage($id);
  $user = getUser($userID);
  $photo = getPhotoName($user["idUser"]);
  if(is_null($photo) ){
      $path ="../../images/users/user.png";
  }else{
      $path = "../../images/users/".$photo;
  }
  $user['photo'] = $path;

  $smarty->assign('title', 'Message Page');

  $smarty->assign('user', $user);
  $smarty->assign('message',$message);
  $smarty->display('user/messagePage.tpl');

 ?>
