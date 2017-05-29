<?php
  include_once('../../config/init.php');
  $eventId = $_GET['id'];
  global $conn;
  echo $eventId;
  $stmt = $conn->prepare('DELETE FROM event WHERE "idEvent" = ?');
  $stmt->execute(array($eventId));
  header('Location:../../pages/admin/adminDashboard.php#manageEvents');
?>
