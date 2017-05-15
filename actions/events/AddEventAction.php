<?php

	include_once('../../config/init.php');
	include_once($BASE_DIR.'database/events.php');
	include_once($BASE_DIR.'database/users.php');
	include_once($BASE_DIR.'database/invitations.php');
	include_once($BASE_DIR.'database/cities.php');
	include_once($BASE_DIR.'database/countries.php');
	include_once($BASE_DIR.'database/locations.php');
$ev_name = $_POST[eventname];
$ev_city = $_POST[city];
$ev_country = $_POST[country];
$ev_location = $_POST[location];
$ev_room = $_POST[room];
$ev_date = $_POST[eventdate];
$ev_hour = $_POST[eventhour];
$ev_type = $_POST[rb];
$ev_public = $_POST[publicev];
$ev_desc = $_POST[description];

$id = $_SESSION['iduser'];
if($ev_public == NULL){
	$ev_public = FALSE;
}

if(!getCountryByName($ev_country)){
	addCountry($ev_country);
}
$countryId = end(getCountryByName($ev_country));

if(!getCityByName($ev_city)){
	addCity($ev_city,$countryId);
}
$cityId = end(getCityByName($ev_city));

if(!getLocationByAddress($ev_location)){
	addLocation($ev_location,$cityId);
}
$ev_loc_id = end(getLocationByAddress($ev_location));

addEvent($ev_name,$ev_date,$ev_hour,$ev_room,$ev_loc_id,$ev_desc,$ev_public,$id,$ev_type);
$eventid = end(getEventByName($ev_name));
$usernames = getAllUsers();
var_dump($eventid);

foreach($usernames as $user){
	$aiai = "YEAHHHHBOYYYYYYY";
	 
	var_dump($_POST[$user['username']]);
	
	$usercb = $_POST[$user['username']];
	if(isset($usercb)){
		var_dump($aiai);
		addInvitation($eventid,$id,$ev_date);
	}
}
header('Location: ' . $_SERVER['HTTP_REFERER']);
//MERDAS PA FAZER INSERT E O CRL


?>