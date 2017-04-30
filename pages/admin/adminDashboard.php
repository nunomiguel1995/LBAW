<?php
  include_once('../../config/init.php');
  $smarty->display('common/header.tpl');

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

  include_once($BASE_DIR .'database/events.php');

  $events = getAllEvents();
  $smarty->assign('events',$events);
  $smarty->display('admin/list_events.tpl');

  include_once($BASE_DIR.'database/notifications.php');

  $notifications = getAllNotifications();
  foreach ($notifications as $key => $notification) {
    unset($photo);
    $photo = getPhotoName($notification["idUser"]);
    if(is_null($photo) ){
        $path ="../../images/users/user.png";
    }else{
        $path = "../../images/users/".$photo;
    }
    $notifications[$key]['photo'] = $path;
  }
  $smarty->assign('notifications',$notifications);
  $smarty->display('admin/list_notifications.tpl');

  $smarty->display('common/footer.tpl');
?>
