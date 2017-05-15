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
                                         WHERE "idEvent" IN  (SELECT "idEvent" FROM invitation
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
        $id_user = getUserByUsername($_SESSION['username']);

        $stmt = $conn->prepare('SELECT *
                                FROM event
                                WHERE "idEvent" IN (SELECT "idEvent" FROM invitation WHERE "idUser" = ?)
                                AND (to_tsvector(\'english\', name) @@ to_tsquery(\'english\', ?)
                                OR name ILIKE \'%\' || ? || \'%\'
                                OR description ILIKE \'%\' || ? || \'%\')');

        $stmt->execute(array($id_user,$text,$text,$text));
        return $stmt->fetchAll();
    }

    function getUserUpcomingEvents($idUser){
      global $conn;
      $stmt = $conn->prepare('SELECT *
                              FROM event
                              WHERE  "idEvent" IN (SELECT "idEvent" FROM invitation WHERE "idUser" = ?)
                              OR "idCreator" = ?
                              AND calendar_date >= CURRENT_DATE
                              ORDER BY calendar_date');
      $stmt->execute(array($idUser,$idUser));
      return $stmt->fetchAll();
    }
    
    function getEventByType($type){
        global $conn;
        $id_user = getUserByUsername($_SESSION['username']);
    
        $stmt = $conn->prepare('SELECT *
                                FROM event
                                WHERE ("idEvent" IN (SELECT "idEvent" FROM invitation WHERE "idUser" = ?)
                                OR "isPublic" = true)
                                AND event_type = ?');
        
        $stmt->execute(array($id_user, $type));
        $results = $stmt->fetchAll();

        return $results;
    }

    function getEventsFilters($type, $availability){
        global $conn;
        $id_user = getUserByUsername($_SESSION['username']);

        
        if(is_null($availability)){
            $availability = array('true','false');
        }
        if(is_null($type)){
            $type = array('Meeting', 'Workshop', 'Lecture/Conference', 'SocialGathering', 'KickOff');
        }
        
        $typeHolders = "'".implode("','", array_values($type))."'";
        $avalHolders = "'".implode("','", array_values($availability))."'";
        
        $queryWithoutSession = "SELECT * FROM event WHERE event_type IN ($typeHolders) AND \"isPublic\"=true";
        $queryWithSession = "SELECT * FROM event WHERE (\"idEvent\" IN (SELECT \"idEvent\" FROM invitation WHERE \"idUser\" = ?)) OR \"isPublic\" IN ($avalHolders) AND event_type IN ($typeHolders)";
        
        if(is_null($id_user)){
            $stmt = $conn->prepare($queryWithoutSession);
            $stmt->execute();
        }else{
            $stmt = $conn->prepare($queryWithSession);
            $stmt->execute(array($id_user));
        }
        
        $result = $stmt->fetchAll();
        
        return $result;
    }
?>
