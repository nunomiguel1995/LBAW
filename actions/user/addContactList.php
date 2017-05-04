<?php
include_once('../../config/init.php');
$listId = $_GET['idList'];
$userId = $_GET['idUser'];
global $conn;
$stmt = $conn->prepare('INSERT INTO "contactListUser"("idContactList","idUser") VALUES (?,?)');
$stmt->execute(array($listId,$userId));
?>
