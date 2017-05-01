<?php
	include_once('../../config/init.php');
	
    $smarty->display('common/header.tpl');

	include_once('../../database/events.php');
    $events = getAllUserEvents();
    $public = getPublicEvents();

    $event_list = array_merge($events, $public);

	$smarty->assign('events', $event_list);
	$smarty->assign('public', $public);

	$smarty->display('event/searchevents.tpl');

	$smarty->display('common/footer.tpl');
?>
