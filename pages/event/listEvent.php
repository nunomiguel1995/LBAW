<?php
    include_once('../../config/init.php');

    $smarty->display('common/header.tpl');
    include_once($BASE_DIR .'database/events.php');

    $user_events = getEvents($_POST["search_text"]);
    $public = getPublicEvents();
    $event_list = array_merge($user_events,$public);

    if(count($_POST["availability"]) == 2){
        $event_list = array_merge($user_events,$public);

        if(strcmp($_POST["filter"],"date") === 0){
            orderByName($event_list);
        }else if(strcmp($_POST["filter"],"alphabetical") === 0) {
            orderByName($event_list);
        }
    }else{
        if($_POST["availability"][0] === "public"){ //just public events
            $event_list = $public;

            if(strcmp($_POST["filter"],"date") === 0){
                orderByName($event_list);
            }else if(strcmp($_POST["filter"],"alphabetical") === 0) {
                orderByName($event_list);
            }
        }else if($_POST["availability"][0] === "private"){ //just private events
            $event_list = $user_events;

            if(strcmp($_POST["filter"],"date") === 0){
                orderByName($event_list);
            }else if(strcmp($_POST["filter"],"alphabetical") === 0) {
                orderByName($event_list);
            }
        }
    } 
    
    $smarty->assign('public', $public);
    $smarty->assign('events', $event_list);

	$smarty->display('event/list_events.tpl');
	$smarty->display('common/footer.tpl');

    function orderByDate($events){
        usort($event_list, function($a1, $a2) {
           $v1 = strtotime($a1['calendar_date']);
           $v2 = strtotime($a2['calendar_date']);
           return $v1 - $v2;
        });
    }

    function orderByName($events){
        usort($events, function($a1, $a2) {
           $v1 = $a1['name'];
           $v2 = $a2['name'];
           return $v1 > $v2;
        });
    }
?>