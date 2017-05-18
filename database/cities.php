<?php

	function getCityByName($name){
		
		global $conn;
		 $stmt = $conn->prepare('SELECT "idCity"
								FROM city
								WHERE name = ?');
		$stmt->execute(array($name));
        return $stmt->fetchAll();	
		
	}
	
	function getAllCities(){
		global $conn;
		 $stmt = $conn->prepare('SELECT *
								FROM city');
		$stmt->execute();
        return $stmt->fetchAll();
	}

	function addCity($name,$countryid){
		global $conn;
		$stmt = $conn->prepare('INSERT INTO city
								(name,"idCountry")
								VALUES (?,?)');
		$stmt->execute(array($name,$countryid));
	}
?>