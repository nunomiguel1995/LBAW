<?php

	function getLocationByAddress($address){
		
		global $conn;
		 $stmt = $conn->prepare('SELECT "idLocation"
								FROM location
								WHERE address = ?');
		$stmt->execute(array($address));
        return $stmt->fetch();	
		
	}
	
	function getAllLocations(){
		global $conn;
		 $stmt = $conn->prepare('SELECT *
								FROM location');
		$stmt->execute();
        return $stmt->fetchAll();
	}

	function addLocation($address,$idcity){
		global $conn;
		$stmt = $conn->prepare('INSERT INTO location
								(address,"idCity")
								VALUES (?,?)');
		$stmt->execute(array($address,$idcity));
	}
?>