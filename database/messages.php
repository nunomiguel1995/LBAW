<?php
function getAllSentMessages($idUser){
  global $conn;
  $stmt = $conn->prepare('SELECT "idMessage", message_text, subject, calendar_date, "idSender", "idReceiver", "appUser".name as name
                          FROM message
                          INNER JOIN "appUser" ON "idUser" = "idReceiver"
                          WHERE "idSender" = ?');
  $stmt->execute(array($idUser));
  return $stmt->fetchAll();
}

function getAllReceivedMessages($idUser){
  global $conn;
  $stmt = $conn->prepare('SELECT "idMessage", message_text, subject, calendar_date, "idSender", "idReceiver", "appUser".name as name
                          FROM message
                          INNER JOIN "appUser" ON "idUser" = "idSender"
                          WHERE "idReceiver" = ?');
  $stmt->execute(array($idUser));
  return $stmt->fetchAll();
}

function getMessage($idMessage){
  global $conn;
  $stmt = $conn->prepare('SELECT *
                          FROM message
                          WHERE "idMessage"= ?');
  $stmt->execute(array($idMessage));
  $result = $stmt->fetch();
  return $result;
}

 ?>
