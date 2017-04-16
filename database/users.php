<?php

function getAllUsers() {
    global $conn;
    $stmt = $conn->prepare('SELECT *
                            FROM "appUser"');
    $stmt->execute();
    return $stmt->fetchAll();
}

?>
