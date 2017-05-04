<?php
session_start();

$user_id = $_SESSION['iduser'];
$comment_text = $_POST['comment_text'];
$post_id = $_POST['post_id'];
$event_id = $_POST['event_id'];

include_once('../../config/init.php');
global $conn;

$stmt = $conn->prepare('INSERT INTO "postComment"(comment_text, "idCreator", "idPost")
						VALUES(:tex, :cre, :pos)');
$stmt->bindParam(':tex', $comment_text);
$stmt->bindParam(':cre', $user_id);
$stmt->bindParam(':pos', $post_id);
$stmt->execute();
$last_id = $conn->lastInsertId();


$link = 'Location: ../../pages/event/EventPage.php?id=' . $event_id . '&post=' . $post_id;
header($link);

?>
