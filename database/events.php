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
	
	function getPostComments($idPost){
		global $conn;
		$stmt = $conn->prepare('SELECT comment_text, name, "idCreator"
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

?>
