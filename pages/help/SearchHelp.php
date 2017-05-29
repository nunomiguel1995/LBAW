<?php
	include_once('../../config/init.php');

	$smarty->assign('title', 'Help - Search');

	$smarty->display('common/header.tpl');
	$smarty->display('help/SearchHelp.tpl');
	$smarty->display('common/footer.tpl');


?>
