<?php

	function getCountryByName($name){
		
		global $conn;
		 $stmt = $conn->prepare('SELECT "idCountry"
								FROM country
								WHERE name = ?');
		$stmt->execute(array($name));
        return $stmt->fetchAll();	
		
	}
	
	function getAllCountries(){
		global $conn;
		 $stmt = $conn->prepare('SELECT *
								FROM country');
		$stmt->execute();
        return $stmt->fetchAll();
	}

	function addCountry($name){
		global $conn;
		$stmt = $conn->prepare('INSERT INTO country
								(name)
								VALUES (?)');
		$stmt->execute(array($name));
	}
?>