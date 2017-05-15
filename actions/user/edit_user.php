<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
$id = $_GET['id'];

include_once('../../config/init.php');
include_once('../../database/users.php');
global $conn;

$user = getUser($id);
$dbfullname = $user['name'];
$dbemail = $user['email'];

if(strcmp($dbfullname, $fullname) !== 0){
  $stmt= $conn->prepare('UPDATE "appUser" SET name= ? WHERE "idUser" = ?');
  $stmt->execute(array($fullname,$id));

  if($_SESSION['username'] != 'admin'){
    $stmt2= $conn->prepare('INSERT INTO notification("idUser",photo,email,name) VALUES (?,false,false,true)');
    $stmt2->execute(array($id));
  }
}

if(strcmp($dbemail, $email) !== 0){
  $stmt= $conn->prepare('UPDATE "appUser" SET email= ? WHERE "idUser" = ?');
  $stmt->execute(array($email,$id));

  if($_SESSION['username'] != 'admin'){
    $stmt2= $conn->prepare('INSERT INTO notification("idUser",photo,email,name) VALUES (?,false,true,false)');
    $stmt2->execute(array($id));
  }
}

if($password != NULL){
  $stmt= $conn->prepare('UPDATE "appUser" SET password= ? WHERE "idUser" = ?');
  $stmt->execute(array($password,$id));
}

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

      $stmt5 = $conn-> prepare('SELECT name FROM doc WHERE "idUser" = ?');
      $stmt5->execute(array($id));
      $result5 = $stmt5->fetch();

      if($result5 != NULL){
        $stmt6= $conn->prepare('UPDATE doc SET name= ? WHERE "idUser" = ?');
        $stmt6->execute(array($file_name,$id));
      }else{
        $stmt6= $conn->prepare('INSERT INTO doc(name, "idPost", "idUser", "idEvent") values (?, null,?, null) ');
        $stmt6->execute(array($file_name,$id));
      }

      if($_SESSION['username'] != 'admin'){
        $stmt7= $conn->prepare('INSERT INTO notification("idUser",photo,email,name) VALUES (?,true,false,false)');
        $stmt7->execute(array($id));
      }

   }
}

 if($_SESSION['username'] == 'admin'){
    header('Location: ../../pages/admin/adminDashboard.php');
  }else{
    header('Location: ../../pages/user/UserPage.php?id='.$id);
  }
?>
