<?php

function getAllEvents() {
    global $conn;
    $stmt = $conn->prepare("SELECT * 
                            FROM event");
    $stmt->execute();
    return $stmt->fetchAll();
}

function getEvents($text){
    global $conn;
    $stmt = $conn->prepare("SELECT *
                            FROM event
                            WHERE name ILIKE '".$text."%'");
    $stmt->execute();
    return $stmt->fetchAll();
}

?>