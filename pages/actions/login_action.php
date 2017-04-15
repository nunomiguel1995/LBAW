<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/verifyLogIn.php');
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
	}
	 $userName= htmlspecialchars($_POST['username']);
	 $password= htmlspecialchars($_POST['password']);
	if(verifyLogin($userName,$password)){
		$_SESSION['username'] = $userName;
	}
	else{
		$_SESSION['username'] = "failed";
	}
	
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);



?>