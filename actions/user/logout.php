<?php

	include_once('../../config/init.php');
	$_SESSION['username'] = NULL;

	header('Location: ' . $_SERVER['HTTP_REFERER']);
?>