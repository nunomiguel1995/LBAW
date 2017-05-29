<?php

	include_once('../../config/init.php');
	include_once($BASE_DIR.'database/events.php');
	include_once($BASE_DIR.'database/users.php');
	include_once($BASE_DIR.'database/invitations.php');
	include_once($BASE_DIR.'database/cities.php');
	include_once($BASE_DIR.'database/countries.php');
	include_once($BASE_DIR.'database/locations.php');

$ev_name = $_POST['eventname'];
$ev_city = $_POST['city'];
$ev_country = $_POST['country'];
$ev_location = $_POST['location'];
$ev_room = $_POST['room'];
$ev_date = $_POST['eventdate'];
$ev_hour = $_POST['eventhour'];
$ev_type = $_POST['rb'];
$ev_public = $_POST['publicev'];
$ev_desc = $_POST['description'];

$id = $_SESSION['iduser'];
if($ev_public == NULL){
	$ev_public = FALSE;
}

if(!getCountryByName($ev_country)){
	addCountry($ev_country);
}
$countryId = end(end(getCountryByName($ev_country)));

if(!getCityByName($ev_city)){
	addCity($ev_city,$countryId);
}
$cityId = end(end(getCityByName($ev_city)));

if(!getLocationByAddress($ev_location)){
	addLocation($ev_location,$cityId);
}
$ev_loc_id = end(end(getLocationByAddress($ev_location)));

addEvent($ev_name,$ev_date,$ev_hour,$ev_room,$ev_loc_id,$ev_desc,$ev_public,$id,$ev_type);
$eventid = end(end(getEventByName($ev_name)));
$usernames = getAllUsers();
var_dump($_FILES);
if(isset($_FILES['image'])){
		var_dump($_FILES);
		 $errors= array();
		 $file_name = $_FILES['image']['name'];
		 $file_size = $_FILES['image']['size'];
		 $file_tmp = $_FILES['image']['tmp_name'];
		 $file_type = $_FILES['image']['type'];
		 $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		 $expensions= array("jpeg","jpg","png");
		 if(in_array($file_ext,$expensions)=== false){
				$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		 }
		 if(empty($errors)==true) {
				$photo_name = $BASE_DIR."images/events/".$file_name;
				move_uploaded_file($file_tmp,$photo_name);
				$stmt= $conn->prepare('INSERT INTO doc(name, "idPost", "idUser", "idEvent") values (?, null, null, ?); ');
				$stmt->execute(array($file_name,$eventid));

		 }else{
			 echo "error";
			 	var_dump($_FILES);
			 	var_dump($file_ext);
			 	var_dump($errors);
				print_r($errors);
		 }
	}
foreach($usernames as $user){


	$usercb = $_POST[$user['username']];
	if(isset($usercb)){


		addInvitation($eventid,$user['idUser'],$ev_date);
	}
}

$link = 'Location: ../../pages/main/homepage.php';
header($link);
?>
