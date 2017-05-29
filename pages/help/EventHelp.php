<?php
	include_once('../../config/init.php');
	$smarty->assign('title', 'Help - Events');

	$smarty->display('common/header.tpl');
	$smarty->display('help/EventHelp.tpl');
	$smarty->display('common/footer.tpl');


?>
