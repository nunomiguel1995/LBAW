<?php
    include_once('../../config/init.php');

    $smarty->display('common/header.tpl');
    include_once($BASE_DIR .'database/events.php');

    $event_list = [];

    $types = $_POST["eventType"];
    $avail = $_POST["availability"];

    if(count($_POST) == 1){
        $event_list = getEvents($_POST["search_text"]);
        
        var_dump($event_list);
    }else{
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


    $smarty->assign('public', $public);
    $smarty->assign('events', $event_list);

	$smarty->display('event/list_events.tpl');
	$smarty->display('common/footer.tpl');
?>