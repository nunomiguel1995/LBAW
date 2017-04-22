<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $users = getAllUsers();

  foreach ($users as $key => $user) {
    unset($photo);
    $photo = getPhotoName($user["idUser"]);
    if(is_null($photo) ){
        $path ="../../images/users/user.png";
    }else{
        $path = "../../images/users/".$photo;
    }
    $users[$key]['photo'] = $path;
  }

  $smarty->assign('users',$users);
  $smarty->display('admin/list_users.tpl');

?>
