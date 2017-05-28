<?php
  include_once('../../config/init.php');
  $idNotification = $_GET['idNotification'];
  global $conn;
  $stmt =  $conn->prepare('UPDATE "eventNotification" SET solve = TRUE WHERE "idNotification" = ?');
  $stmt->execute(array($idNotification));

  header('Location:../../pages/user/MyEvents.php#invitations');
 ?>
