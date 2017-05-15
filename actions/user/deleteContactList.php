<?php
  include_once('../../config/init.php');
  $listId = $_GET['idList'];
  $userId = $_GET['idUser'];
  global $conn;
  $stmt = $conn->prepare('DELETE FROM "contactListUser" WHERE "idContactList"= ? AND "idUser" = ?');
  $stmt->execute(array($listId,$userId));
  header('Location:../../pages/user/ContactList.php');
?>
