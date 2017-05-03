<?php
  include_once('../../config/init.php');
  $userId = $_GET['id'];
  global $conn;
  $stmt = $conn->prepare('DELETE FROM "appUser" WHERE "idUser" = ?');
  $stmt->execute(array($userId));
  header('Location:../../pages/admin/adminDashboard.php');
?>
