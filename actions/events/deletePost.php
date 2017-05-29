<?php
$post_id = $_GET['idPost'];
$event_id = $_GET['idEvent'];

include_once('../../config/init.php');
global $conn;

$stmt = $conn->prepare('DELETE FROM post where "idPost" = ?');
$stmt->execute(array($post_id));

$link = 'Location: ../../pages/event/EventPage.php?id=' . $event_id . "#posts";
header($link);
?>