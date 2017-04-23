<?php
	include_once('../../config/init.php');
	
    $smarty->display('common/header.tpl');

	include_once('../../database/events.php');
	$events = getAllEvents();
	
	$smarty->assign('events', $events);
	$smarty->display('event/searchevents.tpl');

	$smarty->display('common/footer.tpl');
?>
