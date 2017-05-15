<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $id = $_SESSION['iduser'];
  $idList = getContactListID($id);

  $contactUsers = getAllContactListUsers($idList);
  foreach ($contactUsers as $key => $contact) {
    unset($user);
    unset($photo);
    $photo = getPhotoName($contactUsers[$key]["idUser"]);
    if(is_null($photo) ){
        $path ="../../images/users/user.png";
    }else{
        $path = "../../images/users/".$photo;
    }
    $user = getUser($contactUsers[$key]["idUser"]);
    $contactUsers[$key]['user'] = $user;
    $contactUsers[$key]['user']['path']= $path;
  }

  $users = getRemainUsers($idList);
  foreach ($users as $key => $user) {
    unset($photo);
    $photo = getPhotoName($user["idUser"]);
    if(is_null($photo) ){
        $path ="../../images/users/user.png";
    }else{
        $path = "../../images/users/".$photo;
    }
    $users[$key]['path'] = $path;
  }

  $smarty->assign('users',$users);
  $smarty->assign('listID',$idList);
  $smarty->assign('contacts',$contactUsers);
  $smarty->display('user/contactList.tpl');

 ?>
