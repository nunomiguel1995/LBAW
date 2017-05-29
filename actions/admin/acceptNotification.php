<?php
  include_once('../../config/init.php');
  $notificationId = $_GET['id'];
  global $conn;
  $stmt = $conn->prepare('DELETE FROM notification WHERE "idNotification" = ?');
  $stmt->execute(array($notificationId));
  header('Location:../../pages/admin/adminDashboard.php#notifications');
?>
