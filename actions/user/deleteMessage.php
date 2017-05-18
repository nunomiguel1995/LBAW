<?php
  include_once('../../config/init.php');
  $messageId = $_GET['id'];
  global $conn;
  $stmt = $conn->prepare('DELETE FROM message WHERE "idMessage"= ?');
  $stmt->execute(array($messageId));
  header('Location:../../pages/user/Messages.php');
?>
