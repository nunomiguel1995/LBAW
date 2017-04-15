<?php
	if (session_status() == PHP_SESSION_NONE) {
    session_start();
	}
	//assumam q o db é a base de dados inicializada no init.php
	 $userName= htmlspecialchars($_POST['username']);
	 $password= htmlspecialchars($_POST['password']);
    $stmt = $db->prepare('SELECT * FROM user WHERE username = ?');
    $stmt->execute(array($userName));  
	$user = $stmt->fetch();
	if($user !== false && password_verify($password, $user['password'])){
		$_SESSION['username'] = $userName;
	}
	else{
		$_SESSION['username'] = "failed";
	}
	
	
	header('Location: ' . $_SERVER['HTTP_REFERER']);



?>