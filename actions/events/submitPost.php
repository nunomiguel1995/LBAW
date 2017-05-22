<?php
session_start();

$user_id = $_SESSION['iduser'];
$post_text = $_POST['post_text'];
$event_id = $_POST['event_id'];
$date = date("Y-m-d");
$time = date("H:i:s");

include_once('../../config/init.php');
global $conn;

$stmt = $conn->prepare('INSERT INTO "post"(calendar_date, calendar_time, post_text, "idCreator", "idEvent")
						VALUES(:dat, :tim, :tex, :cre, :eve)');
$stmt->bindParam(':dat', $date);
$stmt->bindParam(':tim', $time);
$stmt->bindParam(':tex', $post_text);
$stmt->bindParam(':cre', $user_id);
$stmt->bindParam(':eve', $event_id);
$stmt->execute();
$last_id = $conn->lastInsertId();

$target_dir = $BASE_DIR. "files/posts/";
$file_name = basename($_FILES['input_file']['name']);

if(basename($file_name != "")){
	$file_type = pathinfo($file_name,PATHINFO_EXTENSION);
	$target_file = $target_dir . $last_id . "." . $file_type;
	move_uploaded_file($_FILES["input_file"]["tmp_name"], $target_file);
	
	$stmt2 = $conn->prepare('INSERT INTO "doc"(name, "idPost")
							VALUES(:name, :id_post)');
	$stmt2->bindParam(':name', $file_name);
	$stmt2->bindParam(':id_post', $last_id);
	$stmt2->execute();
}


$link = 'Location: ../../pages/event/EventPage.php?id=' . $event_id . '&post=' . $last_id;
header($link);


?>
