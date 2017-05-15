<?php
	include_once('../../config/init.php');
	
    $smarty->display('common/header.tpl');

	include_once('../../database/events.php');
    $events = getAllUserEvents();
    $public = getPublicEvents();
    
	$smarty->assign('events', $events);
	$smarty->assign('public', $public);

	$smarty->display('event/searchevents.tpl');

	$smarty->display('common/footer.tpl');
?>
