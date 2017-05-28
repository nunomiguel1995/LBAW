<?php
  include_once('../../config/init.php');
  $idNotification = $_GET['idNotification'];
  $idEvent = $_GET['idEvent'];
  $idUser = $_GET['idUser'];
  global $conn;
  $stmt =  $conn->prepare('UPDATE "eventNotification" SET solve = TRUE WHERE "idNotification" = ?');
  $stmt->execute(array($idNotification));

  $stmt2 =  $conn->prepare('UPDATE invitation SET accepted = TRUE WHERE "idUser"=? AND "idEvent"= ?');
  $stmt2->execute(array($idUser,$idEvent));

  header('Location:../../pages/user/MyEvents.php#invitations');
 ?>
