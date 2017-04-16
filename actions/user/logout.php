<?php

	include_once('../../config/init.php');
	$_SESSION['username'] = NULL;

	header('Location: ' .$BASE_URL.'pages/main/homepage.php');
?>
