<?php

	include_once('../../config/init.php');
	$_SESSION['username'] = NULL;
	$_SESSION['iduser'] = NULL;

	header('Location: ' .$BASE_URL.'pages/main/homepage.php');
?>
