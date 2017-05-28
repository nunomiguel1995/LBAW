<?php
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$department = $_POST['department'];
	$position = $_POST['position'];
	$rb = $_POST['rb'];
	
	include_once('../config/init.php');
	global $conn;
	
    $stmt = $conn->prepare('SELECT "idInfo" FROM "companyInfo" WHERE department = :dep AND position = :pos');
	$stmt->bindParam(':dep', $department);
	$stmt->bindParam(':pos', $position);
	$stmt->execute();
    $comp_info = $stmt->fetchAll();
	
	if(count($comp_info) == 0){
		$stmt2 = $conn->prepare('INSERT INTO "companyInfo"(department, position)
								VALUES (:dep, :pos)');
		$stmt2->bindParam(':dep', $department);
		$stmt2->bindParam(':pos', $position);
		$stmt2->execute();
	}
	
	$stmt3 = $conn->prepare('SELECT  "idInfo" FROM "companyInfo" WHERE department = :dep AND position = :pos');
	$stmt3->bindParam(':dep', $department);
	$stmt3->bindParam(':pos', $position);	
	$stmt3->execute();	
	$comp_info_true = $stmt3->fetchAll();
	
	$stmt4 = $conn->prepare('INSERT INTO "appUser"(name, email, username, password, "idInfo", "user_type") VALUES (:fnm, :ema, :usr, :pss, :inf, :typ)');
	$stmt4->bindParam(':fnm', $fullname);
	$stmt4->bindParam(':ema', $email);
	$stmt4->bindParam(':usr', $username);
	$stmt4->bindParam(':pss', $password);
	$stmt4->bindParam(':inf', $comp_info_true[0]['idInfo']);
	$stmt4->bindParam(':typ', $rb);
	$stmt4->execute();
	
	header('Location: ../pages/admin/addUser.php');
?>