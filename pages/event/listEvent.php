<?php
    include_once('../../config/init.php');

    $smarty->display('common/header.tpl');
    include_once($BASE_DIR .'database/events.php');
  
    $events = getEvents($_GET["search_text"]);
    $public = getPublicEvents();

    $smarty->assign('events', $events);
	$smarty->display('event/list_events.tpl');

	$smarty->display('common/footer.tpl');
?>