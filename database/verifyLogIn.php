<?php

function verifyLogIn($userName,$password){
	global $conn;
	$stmt = $conn->prepare('SELECT * FROM "appUser" WHERE username = ?');
	$stmt->execute(array($userName));
	$user = $stmt->fetch();
	if($user != false && password_verify($password, $user['password'])){
		
		return true;
	}else{
		
		return false;
	}
	
}

function isAdminLogIn($username, $password){
	if($username == "admin"){
		if($password == "admin123")
			return true;
	}
	return false;
}
?>
