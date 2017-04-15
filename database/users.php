<?php

function getAllUsers() {
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM event");
    $stmt->execute();
    return $stmt->fetchAll();
}

?>
