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

function getUserType($username){
	global $conn;
	$stmt = $conn->prepare('SELECT "user_type"
							FROM "appUser"
							WHERE "username"= ?');
	$stmt->execute(array($username));
	$result = $stmt->fetch();
	
	return $result['user_type'];
	
}

function getUsersByName($name){
    global $conn;

    $stmt = $conn->prepare("SELECT *, ts_rank(to_tsvector(name), query, 1) AS rank
                            FROM \"appUser\", to_tsquery(:name) AS query
                            ORDER BY rank DESC");
    $name = $name.":*";
    $stmt->bindParam(':name', $name, PDO::PARAM_STR, strlen($name));
    $stmt->execute();
    $results = $stmt->fetchAll();

    return $results;
}

function getUserFilters($name, $department, $position, $typeUsers){
    global $conn;
    
    if(is_null($typeUsers)){
        $typeUsers = array('Collaborator', 'Supervisor', 'Director');   
    }
    $typeHolders = "'".implode("','", array_values($typeUsers))."'";
    
    $query = "SELECT DISTINCT \"idUser\", name, \"appUser\".\"idInfo\"
                FROM \"appUser\"
                JOIN \"companyInfo\" ON (\"appUser\".\"idInfo\" = \"companyInfo\".\"idInfo\")
                WHERE name ILIKE '%' || ? || '%'
                AND \"companyInfo\".department ILIKE '%' || ? || '%'
                AND \"companyInfo\".position ILIKE '%' || ? || '%'
                AND user_type IN ($typeHolders)";
    $stmt = $conn->prepare($query); 
    $stmt->execute(array($name, $department, $position));

    $results = $stmt->fetchAll();

    return $results;
}
?>
