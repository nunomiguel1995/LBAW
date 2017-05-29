<?php
$event_id = $_GET['idEvent'];

include_once('../../config/init.php');
global $conn;

$stmt = $conn->prepare('DELETE FROM event where "idEvent" = ?');
$stmt->execute(array($event_id));

$link = 'Location: ../../pages/main/homepage.php';
header($link);
?>