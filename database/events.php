<?php
    include_once($BASE_DIR .'database/users.php');

    function getAllEvents() {
        global $conn;
        $stmt = $conn->prepare("SELECT *
                                FROM event");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getPublicEvents(){
        global $conn;
        $stmt = $conn->prepare('SELECT *
                                FROM event
                                WHERE "isPublic" = true');
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getAllUserEvents() {
        global $conn;
        $id_user = getUserByUsername($_SESSION['username']);

        $stmt = $conn->prepare('SELECT * FROM event
                                         WHERE "idEvent" = (SELECT "idEvent" FROM invitation
                                                            WHERE "idUser" = ?)
                                        OR "isPublic" = true');
        $stmt->execute(array($id_user));

        return $stmt->fetchAll();
    }

    function getEvent($id) {
        global $conn;

        $stmt = $conn->prepare('SELECT *
                                FROM event
                                WHERE "idEvent" = ?');
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }

    function getEventOrganizer($id) {
        global $conn;


        $stmt = $conn -> prepare('SELECT *
                                  FROM "appUser"
                                  WHERE "idUser" = (SELECT "idCreator"
                                                    FROM event
                                                    WHERE "idEvent" = ?)');
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }

    function getEventLocation($id) {
        global $conn;


        $stmt = $conn -> prepare('SELECT *
                                  FROM location
                                  WHERE "idLocation" = (SELECT "idLocation"
                                                    FROM event
                                                    WHERE "idEvent" = ?)');
        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }

    function getEventPosts($id) {
        global $conn;

        $stmt = $conn -> prepare('SELECT *
                                  FROM post
                                  LEFT OUTER JOIN "appUser"
                                  ON ("idCreator" = "idUser")
                                  WHERE "idEvent" = ?');

        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }

    function getEventInvitations($id) {
        global $conn;

        $stmt = $conn -> prepare('SELECT *
                                  FROM invitation
                                  LEFT OUTER JOIN "appUser"
                                  ON (invitation."idUser" = "appUser"."idUser")
                                  WHERE "idEvent" = ?');

        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }

    function getPostCreator($id) {
        global $conn;

        $stmt = $conn -> prepare('SELECT *
                                  FROM "appUser"
                                  WHERE "idUser" = (SELECT "idCreator"
                                                    FROM post
                                                    WHERE "idCreator" = ?)');

        $stmt->execute(array($id));
        return $stmt->fetchAll();
    }

    function getEvents($text){
        global $conn;

        $stmt = $conn->prepare('SELECT *
                                FROM event
                                WHERE to_tsvector(\'english\', name) @@ to_tsquery(\'english\', ?)
                                OR name ILIKE \'%\' || ? || \'%\'
                                OR description ILIKE \'%\' || ? || \'%\'');

        $stmt->execute(array($text,$text,$text));
        return $stmt->fetchAll();
    }

?>
