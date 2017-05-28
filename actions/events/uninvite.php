<?php

$event_id = $_GET['idEvent'];
$user_id = $_GET['idUser'];

include_once('../../config/init.php');
global $conn;

$stmt = $conn->prepare('DELETE FROM invitation where "idUser" = ? AND "idEvent" = ?');
$stmt->execute(array($user_id, $event_id));

$link = 'Location: ../../pages/event/EventPage.php?id=' . $event_id . "#invited";
header($link);
?>