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

function getContactListID($idUser){
  global $conn;
  $stmt = $conn->prepare('SELECT "idList"
                          FROM "contactList"
                          WHERE "idOwner"= ?');
  $stmt->execute(array($idUser));
  $result = $stmt->fetch();
  return $result["idList"];
}

function getAllContactListUsers($idList){
  global $conn;
  $stmt = $conn->prepare('SELECT *
                          FROM "contactListUser"
                          WHERE "idContactList"= ?');
  $stmt->execute(array($idList));
  return $stmt->fetchAll();
}

function getRemainUsers($idList){
  global $conn;
  $stmt = $conn->prepare('SELECT "appUser"."idUser" as "idUser", name
                          FROM "appUser"
                          LEFT JOIN "contactListUser" ON ("idContactList" = ? AND "contactListUser"."idUser" = "appUser"."idUser")
                          WHERE "idContactList" is NULL');
  $stmt->execute(array($idList));
  return $stmt->fetchAll();
}
?>
