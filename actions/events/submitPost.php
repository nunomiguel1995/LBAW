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


$link = 'Location: ../../pages/event/EventPage.php?id=' . $event_id . '&post=' . $last_id;
header($link);

?>
