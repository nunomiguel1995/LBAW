<?php

function getAllUsers() {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM "appUser"');
    $stmt->execute();
    return $stmt->fetchAll();
}

function getPhotoName($idUser){
  global $conn;
  $stmt = $conn->prepare('SELECT name
                          FROM doc WHERE "idUser"= ?');
  $stmt->execute(array($idUser));
  $result = $stmt->fetch();

  return $result['name'];
}

function deleteUser($userId){
  global $conn;
  $stmt = $conn->prepare('DELETE FROM "appUser" WHERE "idUser" = ?');
  $stmt->execute(array($userId));
}
?>
