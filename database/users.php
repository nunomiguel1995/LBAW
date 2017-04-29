<?php

function getAllUsers() {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM "appUser"');
    $stmt->execute();
    return $stmt->fetchAll();
}

function getUser($id){
  global $conn;
  global $conn;
  $stmt = $conn->prepare('SELECT *
                          FROM "appUser" WHERE "idUser" = ?');
  $stmt->execute(array($id));
  return $stmt->fetch();
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

function getUserByUsername($username){
    global $conn;
    $stmt = $conn->prepare('SELECT "idUser"
                            FROM "appUser"
                            WHERE username= ?');
    $stmt->execute(array($username));
    $result = $stmt->fetch();

    return $result['idUser'];
}

function getCompanyInfo($idInfo){
  global $conn;
  $stmt = $conn->prepare('SELECT *
                          FROM "companyInfo"
                          WHERE "idInfo"= ?');
  $stmt->execute(array($idInfo));
  return $stmt->fetch();
}
?>
