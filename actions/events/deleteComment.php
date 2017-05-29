<?php
$comment_id = $_GET['idComment'];
$event_id = $_GET['idEvent'];

include_once('../../config/init.php');
global $conn;

$stmt = $conn->prepare('DELETE FROM "postComment" where "idComment" = ?');
$stmt->execute(array($comment_id));

$link = 'Location: ../../pages/event/EventPage.php?id=' . $event_id . "#posts";
header($link);
?>