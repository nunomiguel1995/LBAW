<?php
    include_once('../../config/init.php');

    $smarty->display('common/header.tpl');
    include_once($BASE_DIR .'database/events.php');

    $event_list = [];
    
    unset($text);
    $text = $_POST["search_text_event"];
    $types = $_POST["eventType"];
    $avail = $_POST["availability"];

    var_dump($_SESSION);

    if(count($_POST) == 1){
        if(is_null($_SESSION["iduser"])){    
            echo 'nulo';

            $event_list = getEventsNotLoggedUser($text, null);
        }else{
            $event_list = getEventsLoggedUser($text, null, null);
        } 
    }else{
        if(is_null($_SESSION["iduser"])){
            echo 'nulo';
            $event_list = getEventsNotLoggedUser($text, $types);
        }else{
            $event_list = getEventsLoggedUser($text, $types, $avail);
        } 
    }

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

    $smarty->assign('public', $public);
    $smarty->assign('events', $event_list);

	$smarty->display('event/list_events.tpl');
	$smarty->display('common/footer.tpl');
?>