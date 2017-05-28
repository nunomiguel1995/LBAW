<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR .'database/verifyLogIn.php');
	include_once($BASE_DIR.'database/users.php');
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
	}
	 $userName= htmlspecialchars($_POST['username']);
	 $password= htmlspecialchars($_POST['password']);

	 if(isAdminLogIn($userName, $password)){
	 	$_SESSION['username'] = $userName;
		echo "ok2";
	 	//header('Location: ' . $BASE_URL.'pages/admin/adminDashboard.php');
	}else if(verifyLogin($userName,$password)){
		$userid = getUserByUsername($userName);
		$_SESSION['username'] = $userName;
		$_SESSION['iduser']= $userid;
		echo "ok";
		//header('Location: ' . $_SERVER['HTTP_REFERER']);
	}else{
		//header('Location: ' . $_SERVER['HTTP_REFERER']);
	}

?>
