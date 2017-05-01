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

	$stmt5 = $conn->prepare('SELECT "idUser" FROM "appUser" WHERE username=?');
	$stmt5->execute(array($username));
	$resultID = $stmt5->fetch();

	if(isset($_FILES['image'])){
		 $errors= array();
		 $file_name = $_FILES['image']['name'];
		 $file_size = $_FILES['image']['size'];
		 $file_tmp = $_FILES['image']['tmp_name'];
		 $file_type = $_FILES['image']['type'];
		 $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		 $expensions= array("jpeg","jpg","png");
		 if(in_array($file_ext,$expensions)=== false){
				$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		 }
		 if(empty($errors)==true) {
				$photo_name = $BASE_DIR."images/users/".$file_name;
				move_uploaded_file($file_tmp,$photo_name);
				$stmt6= $conn->prepare('INSERT INTO doc(name, "idPost", "idUser", "idEvent") values (?, null,?, null); ');
				$stmt6->execute(array($file_name,$resultID["idUser"]));
		 }else{
			 	var_dump($_FILES);
			 	var_dump($file_ext);
			 	var_dump($errors);
				print_r($errors);
		 }
	}

	header('Location: ../pages/admin/adminDashboard.php');
?>
