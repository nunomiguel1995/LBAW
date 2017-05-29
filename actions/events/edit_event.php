<?php
$idEvent= $_GET['id'];
$name = $_POST['eventName'];
$idLocation = $_POST['idLocation'];
$address = $_POST['location'];
$description = $_POST['description'];
$ev_date = $_POST['eventdate'];
$ev_hour = $_POST['eventhour'];

include_once('../../config/init.php');
include_once('../../database/users.php');
include_once('../../database/events.php');

$event = getEvent($idEvent)[0];
$location = getEventLocation($idEvent)[0];

global $conn;

if(strcmp($name, $event['name']) !== 0){
  $stmt= $conn->prepare('UPDATE event SET name= ? WHERE "idEvent" = ?');
  $stmt->execute(array($name,$idEvent));
}

if(strcmp($address, $location['address']) !== 0){
  $stmt2= $conn->prepare('UPDATE location SET address= ? WHERE "idLocation" = ?');
  $stmt2->execute(array($address,$idLocation));
}

if(strcmp($description, $event['description']) !== 0){
  $stmt3= $conn->prepare('UPDATE location SET address= ? WHERE "idLocation" = ?');
  $stmt3->execute(array($address,$idLocation));
}

if(strcmp($ev_date, $event['calendar_date']) !== 0){
  $stmt4= $conn->prepare('UPDATE event SET calendar_date= ? WHERE "idEvent" = ?');
  $stmt4->execute(array($ev_date,$idEvent));
}

if(strcmp($ev_hour, $event['calendar_time']) !== 0){
  $stmt5= $conn->prepare('UPDATE event SET calendar_time= ? WHERE "idEvent" = ?');
  $stmt5->execute(array($ev_hour,$idEvent));
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
      $photo_name = $BASE_DIR."images/events/".$file_name;
      move_uploaded_file($file_tmp,$photo_name);

      $stmt6 = $conn-> prepare('SELECT name FROM doc WHERE "idEvent" = ?');
      $stmt6->execute(array($idEvent));
      $result = $stmt6->fetch();

      if($result != NULL){
        $stmt7= $conn->prepare('UPDATE doc SET name= ? WHERE "idEvent" = ?');
        $stmt7->execute(array($file_name,$idEvent));
      }else{
        $stmt8= $conn->prepare('INSERT INTO doc(name, "idPost", "idUser", "idEvent") values (?, null,null, ?) ');
        $stmt8->execute(array($file_name,$idEvent));
      }
   }
}

header('Location: ../../pages/event/EventPage.php?id='.$idEvent);

?>
