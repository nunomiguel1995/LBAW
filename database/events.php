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
                                  WHERE "idEvent" = ?
								  ORDER BY calendar_date DESC, calendar_time ASC');

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

	function getPostComments($idPost){
		global $conn;
		$stmt = $conn->prepare('SELECT "idComment", comment_text, name, "idCreator"
								FROM "postComment"
								INNER JOIN "appUser"
								ON "postComment"."idCreator" = "appUser"."idUser"
								WHERE "idPost" = ?');
		$stmt->execute(array($idPost));
		return $stmt->fetchAll();
	}

	function getPostPoll($idPost){
		global $conn;
		$stmt = $conn->prepare('SELECT "idPoll", name
								FROM poll
								INNER JOIN post
								ON poll."idPost" = post."idPost"
								WHERE post."idPost" = ?');
		$stmt->execute(array($idPost));
		return $stmt->fetchAll();
	}

	function getPollOptions($idPoll){
		global $conn;
		$stmt = $conn->prepare('SELECT "idOption", "pollOption".name, votes
								FROM poll
								INNER JOIN "pollOption"
								ON poll."idPoll" = "pollOption"."idPoll"
								WHERE poll."idPoll" = ?');
		$stmt->execute(array($idPoll));
		return $stmt->fetchAll();
	}

	function isvoted($idPoll, $idUser, $idOption){
		global $conn;
		$stmt = $conn->prepare('SELECT *
								FROM vote
								INNER JOIN "pollOption"
								ON "idOption" = "idPollOption"
								INNER JOIN poll
								ON "pollOption"."idPoll" = poll."idPoll"
								WHERE "idUser" = ?
								AND poll."idPoll" = ?
								AND "idOption" = ?');
		$stmt->execute(array($idUser, $idPoll, $idOption));
		return $stmt->fetchAll();
	}

	function numberOfVotes($idOption){
		global $conn;
		$stmt = $conn->prepare('SELECT count("idUser")
								FROM vote
								WHERE "idPollOption" = ?');
		$stmt->execute(array($idOption));
		return $stmt->fetchAll();
	}

	function getPostDoc($idPost){
		global $conn;
		$stmt = $conn->prepare('SELECT name, "idDoc"
								FROM doc
								INNER JOIN post
								ON post."idPost" = doc."idPost"
								WHERE post."idPost" = ?');
		$stmt->execute(array($idPost));
		return $stmt->fetchAll();
	}

	function getNonInvitedUsers($idEvent){
		global $conn;
		$stmt = $conn->prepare('SELECT "appUser"."idUser", "appUser".name
								FROM "appUser"
								LEFT JOIN "invitation"
								ON ("appUser"."idUser" = invitation."idUser"
								AND invitation."idEvent" = ?)
								WHERE invitation.accepted is NULL');
		$stmt->execute(array($idEvent));
		return $stmt->fetchAll();
	}

    function getEventsAdmin($text, $type, $availability){
        global $conn;

        if(is_null($type)){
            $type = array('Meeting', 'Workshop', 'Lecture/Conference', 'SocialGathering', 'KickOff');
        }
        if(is_null($availability)){
            $availability = array('true','false');
        }
        $typeHolders = "'".implode("','", array_values($type))."'";
        $avalHolders = "'".implode("','", array_values($availability))."'";

        if(strcmp($text, '') != 0){
            $text = $text . ":*";
            $query = "SELECT *, ts_rank(to_tsvector(name), query, 1) AS rank
                  FROM event, to_tsquery(:name) AS query
                  WHERE \"isPublic\" IN ($avalHolders)
                  AND event_type IN ($typeHolders)
                  AND event.calendar_date >= current_date
                  ORDER BY rank DESC";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':name', $text, PDO::PARAM_STR, strlen($text));
        }else{
            $query = "SELECT *
                      FROM event
                      WHERE \"isPublic\" IN ($avalHolders)
                      AND event_type IN ($typeHolders)
                      AND event.calendar_date >= current_date";

            $stmt = $conn->prepare($query);
        }

        $stmt->execute();
        $results = $stmt->fetchAll();

        return $results;
    }

    function getEventsLoggedUser($text, $type, $availability){
        global $conn;

        $id = $_SESSION['iduser'];

        if(is_null($type)){
            $type = array('Meeting', 'Workshop', 'Lecture/Conference', 'SocialGathering', 'KickOff');
        }
        if(is_null($availability)){
            $availability = array('true','false');
        }
        $typeHolders = "'".implode("','", array_values($type))."'";
        $avalHolders = "'".implode("','", array_values($availability))."'";

        if(strcmp($text, '') != 0){
            $text = $text . ":*";

            $query = 'SELECT coalesce(i."idEvent",p."idEvent") AS "idEvent",
                             coalesce(i.name,p.name) AS name,
                             coalesce(i.calendar_date,p.calendar_date) AS calendar_date,
                             coalesce(i.calendar_time,p.calendar_time) AS calendar_time,
                             coalesce(i.location,p.location) AS location,
                             coalesce(i.description,p.description) AS description,
                             coalesce(i."isPublic",p."isPublic") AS "isPublic",
                             coalesce(i."idCreator",p."idCreator") AS "idCreator",
                             coalesce(i.event_type,p.event_type) AS event_type,
                             ts_rank(to_tsvector(coalesce(i.name,p.name)), query, 1) AS rank
                      FROM to_tsquery(:name) AS query,
                      (SELECT event.* FROM event INNER JOIN invitation ON (invitation."idEvent" = event."idEvent" AND invitation."idUser" = :id)) i
                      FULL OUTER JOIN (SELECT * FROM event WHERE "isPublic" = true) p ON (i."idEvent" = p."idEvent")
                      WHERE (i."isPublic" IN ('.$avalHolders.') OR p."isPublic" IN ('.$avalHolders.'))
                      AND (i.event_type IN ('.$typeHolders.') OR p.event_type IN ('.$typeHolders.'))
                      AND event.calendar_date >= current_date
                      ORDER BY rank DESC';

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':name', $text, PDO::PARAM_STR, strlen($text));
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        }else{
            $query = 'SELECT coalesce(i."idEvent",p."idEvent") AS "idEvent",
                             coalesce(i.name,p.name) AS name,
                             coalesce(i.calendar_date,p.calendar_date) AS calendar_date,
                             coalesce(i.calendar_time,p.calendar_time) AS calendar_time,
                             coalesce(i.location,p.location) AS location,
                             coalesce(i.description,p.description) AS description,
                             coalesce(i."isPublic",p."isPublic") AS "isPublic",
                             coalesce(i."idCreator",p."idCreator") AS "idCreator",
                             coalesce(i.event_type,p.event_type) AS event_type
                      FROM (SELECT event.* FROM event INNER JOIN invitation ON (invitation."idEvent" = event."idEvent" AND invitation."idUser" = :id)) i
                      FULL OUTER JOIN (SELECT * FROM event WHERE "isPublic" = true) p ON (i."idEvent" = p."idEvent")
                      WHERE (i."isPublic" IN ('.$avalHolders.') OR p."isPublic" IN ('.$avalHolders.'))
                      AND (i.event_type IN ('.$typeHolders.') OR p.event_type IN ('.$typeHolders.'))
                      AND event.calendar_date >= current_date';

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        }

        $stmt->execute();
        $results = $stmt->fetchAll();

        return $results;
    }

    function getEventsNotLoggedUser($text, $type){
        global $conn;
        if(is_null($type)){
            $type = array('Meeting', 'Workshop', 'Lecture/Conference', 'SocialGathering', 'KickOff');
        }
        $typeHolders = "'".implode("','", array_values($type))."'";

        if(strcmp($text, '') != 0){
            $text = $text . ":*";
            $query = "SELECT *, ts_rank(to_tsvector(name), query, 1) AS rank
                  FROM event, to_tsquery(:name) AS query
                  WHERE event_type IN ($typeHolders)
                  AND \"isPublic\" = true
                  AND event.calendar_date >= current_date
                  ORDER BY rank DESC";

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':name', $text, PDO::PARAM_STR, strlen($text));
        }else{
            $query = "SELECT *
                      FROM event
                      WHERE event_type IN ($typeHolders)
                      AND \"isPublic\" = true
                      AND event.calendar_date >= current_date";

            $stmt = $conn->prepare($query);
        }

        $stmt->execute();
        $results = $stmt->fetchAll();

        return $results;
    }

    function getEvents($text, $type, $avail){
        global $conn;
        $id_user = $_SESSION['iduser'];
        $text = $text.":*";

        //only public events
        if(is_null($id_user)){
           $query = 'SELECT *, ts_rank(to_tsvector(name), query, 1) AS rank
                     FROM event, to_tsquery(:name) AS query
                     WHERE "isPublic" = true
                     AND event.calendar_date >= current_date
                     ORDER BY rank DESC';

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':name', $text, PDO::PARAM_STR, strlen($text));
        }else{//public events AND user events
            $query = 'SELECT *, ts_rank(to_tsvector(name), query, 1) AS rank
                      FROM event, to_tsquery(:name) AS query
                      JOIN invitation ON ("idUser" = :id)
                      WHERE "isPublic" = true
                      AND event.calendar_date >= current_date
                      ORDER BY rank DESC';

            $stmt = $conn->prepare($query);
            $stmt->bindParam(':name', $text, PDO::PARAM_STR, strlen($text));
            $stmt->bindParam(':id', $id_user, PDO::PARAM_INT);
        }

        $stmt->execute();
        $results = $stmt->fetchAll();

        return $results;
    }

	function getEventByName($name){
		global $conn;
		 $stmt = $conn->prepare('SELECT "idEvent"
								FROM event
								WHERE name = ?');
		$stmt->execute(array($name));
        return $stmt->fetchAll();

	}

	function addEvent($name, $calendar_date, $calendar_time, $location, $idLocation, $description, $isPublic, $idCreator, $event_type){
		global $conn;
		if($isPublic){
			$stmt = $conn->prepare('INSERT INTO event
								(name, calendar_date, calendar_time, location, "idLocation", description, "isPublic", "idCreator", "event_type")
								VALUES (?,?,?,?,?,?,true,?,?)');
			$stmt->execute(array($name, $calendar_date, $calendar_time, $location, $idLocation, $description, $idCreator, $event_type));
		}
		else{
			$stmt = $conn->prepare('INSERT INTO event
								(name, calendar_date, calendar_time, location, "idLocation", description, "isPublic", "idCreator", "event_type")
								VALUES (?,?,?,?,?,?,true,?,?)');
			$stmt->execute(array($name, $calendar_date, $calendar_time, $location, $idLocation, $description, $idCreator, $event_type));

	}}

  function getUserCreatedEvents($id){
    global $conn;
    $stmt = $conn->prepare('SELECT * FROM event WHERE ("idCreator" = ? AND calendar_date >= current_date )ORDER BY calendar_date');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }

  function getUserInvitedEvents($id){
    global $conn;
    $stmt = $conn->prepare('SELECT event."idEvent", name, event.calendar_date as cal_date, event.calendar_time as cal_time, location
                            FROM event
                            INNER JOIN invitation
                            ON (invitation."idEvent" = event."idEvent" AND invitation."idUser"= ?)
                            WHERE event.calendar_date >= current_date ORDER BY event.calendar_date');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }

  function getInvitationsNotifications($id){
    global $conn;
    $stmt = $conn->prepare('SELECT "idNotification", "eventNotification"."idUser" as "idUser", "eventNotification"."idEvent" as "idEvent", event.name as name
                            FROM "eventNotification"
                            INNER JOIN event ON event."idEvent" = "eventNotification"."idEvent"
                            WHERE ("idUser" = ? AND solve = FALSE AND event.calendar_date >= current_date)');
    $stmt->execute(array($id));
    return $stmt->fetchAll();
  }

  function getMyEventsAtDate($date){
    global $conn;

    $id_user = $_SESSION['iduser'];

    $query = 'SELECT *
              FROM event
              INNER JOIN invitation ON (invitation."idEvent" = event."idEvent" AND invitation."idUser" = :id)
              WHERE event.calendar_date = :calendar::date';
    $stmt = $conn->prepare($query);

    $stmt->bindParam(':id', $id_user, PDO::PARAM_INT);
    $stmt->bindParam(':calendar', $date);

    $stmt->execute();
    $results = $stmt->fetchAll();

    return $results;
}
  function getEventPhoto($idEvent){
    global $conn;
    $stmt = $conn->prepare('SELECT name
                            FROM doc WHERE "idEvent"= ?');
    $stmt->execute(array($idEvent));
    $result = $stmt->fetch();

    return $result['name'];
  }
?>
