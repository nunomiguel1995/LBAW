<?php
	include_once('../../config/init.php');

	$smarty->assign('title', 'Help - User');

	$smarty->display('common/header.tpl');
	$smarty->display('help/UserHelp.tpl');
	$smarty->display('common/footer.tpl');


?>
