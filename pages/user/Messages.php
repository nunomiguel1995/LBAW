<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/messages.php');
  include_once($BASE_DIR .'database/users.php');

  $id = $_SESSION['iduser'];
  $inbox = getAllReceivedMessages($id);
  foreach ($inbox as $key => $imsg) {
    unset($photo);
    $photo = getPhotoName($imsg["idSender"]);
    if(is_null($photo) ){
        $path ="../../images/users/user.png";
    }else{
        $path = "../../images/users/".$photo;
    }
    $inbox[$key]['photo'] = $path;
  }

  $sentMessages = getAllSentMessages($id);
  foreach ($sentMessages as $key => $msg) {
    unset($photo);
    $photo = getPhotoName($msg["idReceiver"]);
    if(is_null($photo) ){
        $path ="../../images/users/user.png";
    }else{
        $path = "../../images/users/".$photo;
    }
    $sentMessages[$key]['photo'] = $path;
  }

  $contactListID = getContactListID($id);
  $contacts = getAllContactListUsers($contactListID);
  foreach ($contacts as $key => $contact) {
    unset($user);
    unset($photo);
    $photo = getPhotoName($contacts[$key]["idUser"]);
    if(is_null($photo) ){
        $path ="../../images/users/user.png";
    }else{
        $path = "../../images/users/".$photo;
    }
    $user = getUser($contacts[$key]["idUser"]);
    $contacts[$key]['user'] = $user;
    $contacts[$key]['user']['path']= $path;
  }

  $smarty->assign('inbox',$inbox);
  $smarty->assign('sentMessages',$sentMessages);
  $smarty->assign('contacts',$contacts);
  $smarty->display('user/messages.tpl');

 ?>
