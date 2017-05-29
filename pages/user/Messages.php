<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/messages.php');
  include_once($BASE_DIR .'database/users.php');

  $id = $_SESSION['iduser'];
  $text = $_POST["search_user_messages"];

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
  if(strcmp($text, '') === 0){
      $contacts = getAllContactListUsers($contactListID);
  }else{
      $contacts = getContactListUsersText($contactListID, $text);
  }

  foreach ($contacts as $key => $contact) {
    $photo = getPhotoName($contacts[$key]["idUser"]);
    if(is_null($photo) ){
        $path ="../../images/users/user.png";
    }else{
        $path = "../../images/users/".$photo;
    }
    $contacts[$key]['path']= $path;
  }

  $smarty->assign('inbox',$inbox);
  $smarty->assign('sentMessages',$sentMessages);
  $smarty->assign('contacts',$contacts);
  $smarty->display('user/messages.tpl');

 ?>
