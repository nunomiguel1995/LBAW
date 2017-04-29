<?php

function getAllNotifications() {
    global $conn;
    $stmt = $conn->prepare('SELECT "idNotification", notification."idUser", "appUser".name as username, photo, notification.email, notification.name
                            FROM notification
                            INNER JOIN "appUser"
                            ON "appUser"."idUser" = notification."idUser"');
    $stmt->execute();
    return $stmt->fetchAll();
}

?>
