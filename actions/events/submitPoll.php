<?php
session_start();

$user_id = $_SESSION['iduser'];
$event_id = $_POST['event_id'];
$poll_name = $_POST['poll_name'];
$post_text = $_POST['post_text'];
$number_options = $_POST['number_options'];
$date = date("Y-m-d");
$time = date("H:i:s");

$poll_options = []; 
for ($i = 1; $i <= $number_options; $i++) {
	array_push($poll_options, $_POST["option" . $i]);
}

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

unset($stmt);

$stmt = $conn->prepare('INSERT INTO "poll"(name, "idPost")
						VALUES(:name, :id_post)');
$stmt->bindParam(':name', $poll_name);
$stmt->bindParam(':id_post', $last_id);
$stmt->execute();
$last_id_poll = $conn->lastInsertId();

foreach($poll_options as $poll_option){
	global $stmt;
	unset($stmt);
    $stmt = $conn->prepare('INSERT INTO "pollOption"(name, votes, "idPoll")
							VALUES(:name, 0, :id_poll)');
	$stmt->bindParam(':name', $poll_option);
	$stmt->bindParam(':id_poll', $last_id_poll);
	$stmt->execute();
}

$link = 'Location: ../../pages/event/EventPage.php?id=' . $event_id . '&post=' . $last_id;
header($link);
?>