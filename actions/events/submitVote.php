<?php
session_start();

$user_id = $_SESSION['iduser'];
$poll_id = $_POST['poll_id'];
$option_id = $_POST['option_id'];
$post_id = $_POST['post_id'];
$event_id = $_POST['event_id'];

echo $user_id;
echo $poll_id;
echo $option_id;



include_once('../../config/init.php');
global $conn;

$stmt = $conn->prepare('SELECT "idOption"
						FROM vote
						INNER JOIN "pollOption"
						ON "idOption" = "idPollOption"
						INNER JOIN poll
						ON "pollOption"."idPoll" = poll."idPoll"
						WHERE "idUser" = ? 
						AND poll."idPoll" = ?');
$stmt->execute(array($user_id, $poll_id));
$previous_option =  $stmt->fetch()['idOption'];


$stmt2 = $conn->prepare('DELETE FROM VOTE
						WHERE "idUser" = ?
						AND "idPollOption" = ?');
$stmt2->execute(array($user_id, $previous_option));


$stmt3 = $conn->prepare('INSERT INTO vote("idUser", "idPollOption")
						VALUES (:iduser, :idoption)');
$stmt3->bindParam(':iduser', $user_id);
$stmt3->bindParam(':idoption', $option_id);
$stmt3->execute();

$link = 'Location: ../../pages/event/EventPage.php?id=' . $event_id . '&post=' . $post_id;
header($link);

?>
