<?php
	include_once('../../config/init.php');
	include_once('../../database/get_public_events.php');
	$events = get_public_events();
	$smarty->assign('title', 'Public Events');

	$smarty->assign('events', $events);
	$smarty->display('main/public_events.tpl');
?>
