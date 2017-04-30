<?php
    include_once('../../config/init.php');

    $smarty->display('common/header.tpl');
    include_once($BASE_DIR .'database/events.php');
  
    $events = getEvents($_GET["search_text"]);
    $public = getPublicEvents();
    
    if($_GET["filter"] === "date"){
        usort($events, function($a1, $a2) {
           $v1 = strtotime($a1['calendar_date']);
           $v2 = strtotime($a2['calendar_date']);
           return $v1 - $v2;
        });
        usort($public, function($a1, $a2) {
           $v1 = strtotime($a1['calendar_date']);
           $v2 = strtotime($a2['calendar_date']);
           return $v1 - $v2;
        });
    }

    $smarty->assign('events', $events);
    $smarty->assign('public', $public);

	$smarty->display('event/list_events.tpl');

	$smarty->display('common/footer.tpl');
?>