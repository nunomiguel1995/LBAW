<?php

function get_public_events() {
    global $conn;
    $stmt = $conn->prepare('SELECT * 
                            FROM event
							WHERE "isPublic" = TRUE
							ORDER BY calendar_date ASC,
							calendar_time ASC');
    $stmt->execute();
    return $stmt->fetchAll();
}
?>