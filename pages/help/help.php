<?php
	include_once('../../config/init.php');

	$smarty->assign('title', 'Help');

	$smarty->display('common/header.tpl');
	$smarty->display('help/helppage.tpl');
	$smarty->display('common/footer.tpl');


?>
