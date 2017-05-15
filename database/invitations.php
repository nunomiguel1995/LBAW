<?php
	
	function getAllInvitations(){
		global $conn;
		$stmt = $conn->prepare('SELECT *
                                FROM invitation');
		$stmt->execute();
		return $stmt->fetchAll();
		
	}
	
	function addInvitation($idEvent, $idUser, $calendar_date){
		global $conn;
		$stmt = $conn->prepare('INSERT INTO invitation
								("idEvent", "idUser", accepted, calendar_date)
								VALUES (?,?,false,?)');
		$stmt->execute(array($idEvent, $idUser, $calendar_date));
		
      
	}

?>