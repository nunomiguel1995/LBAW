<?php
session_start();

$idReceiver = $_POST['idReceiver'];
$idSender = $_SESSION['iduser'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$date = date("Y-m-d");

include_once('../../config/init.php');
global $conn;

$stmt4 = $conn->prepare('INSERT INTO message(calendar_date,message_text,subject,"idSender","idReceiver") VALUES (:cd, :m, :s, :ids, :idr)');
$stmt4->bindParam(':cd', $date);
$stmt4->bindParam(':m', $message);
$stmt4->bindParam(':s', $subject);
$stmt4->bindParam(':ids', $idSender);
$stmt4->bindParam(':idr', $idReceiver);
$stmt4->execute();

header('Location: ../../pages/user/Messages.php');
 ?>
