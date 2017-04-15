<?php

function verifyLogIn($userName,$password){
	global $conn;
	$stmt = $conn->prepare('SELECT * FROM "appUser" WHERE username = ? AND password = ?');
	$stmt->execute(array($userName,$password));  
	return $stmt->fetch() == true;
}

?>