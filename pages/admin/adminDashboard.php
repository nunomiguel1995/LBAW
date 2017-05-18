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

    $event_list = getAllEvents();

    $types = $_POST["eventType"];
    $avail = $_POST["availability"];

    if(count($_POST) != 1){
        $event_list = getEventsFilters($types, $avail);
        
        if(strcmp($_POST["filter"],"date") === 0){
            usort($event_list, function($a1, $a2) {
               $v1 = strtotime($a1['calendar_date']);
               $v2 = strtotime($a2['calendar_date']);
               return $v1 - $v2;
            });
        }else if(strcmp($_POST["filter"],"alphabetical") === 0) {
            usort($event_list, function($a1, $a2) {
               $v1 = $a1['name'];
               $v2 = $a2['name'];
               return $v1 > $v2;
            });
        }
    }

    $smarty->assign('events', $event_list);
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
        $notifications[$key]['path'] = $path;
    }
    $smarty->assign('notifications',$notifications);
    $smarty->display('admin/list_notifications.tpl');

    $smarty->display('common/footer.tpl');
?>
