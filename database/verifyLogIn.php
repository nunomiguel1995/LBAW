<?php

function verifyLogIn($userName,$password){
	global $conn;
	$stmt = $conn->prepare('SELECT * FROM "appUser" WHERE username = ? AND password = ?');
	$stmt->execute(array($userName,$password));
	return $stmt->fetch() == true;
}

function isAdminLogIn($username, $password){
	if($username == "admin"){
		if($password == "admin123")
			return true;
	}
	return false;
}
?>
