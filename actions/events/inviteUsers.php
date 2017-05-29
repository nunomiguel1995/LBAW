<?php

	$users_to_invite = $_POST['invite'];
	$event = $_POST['idEvent'];
	
	include_once('../../config/init.php');
	global $conn;

	foreach($users_to_invite as $user){
		var_dump($user);
		$stmt = $conn->prepare('INSERT INTO "invitation"("idEvent", "idUser", accepted, calendar_date)
								VALUES(:eve, :user, FALSE, current_date)');
		$stmt->bindParam(':eve', $event);
		$stmt->bindParam(':user', $user);
		$stmt->execute();
	}
	
	$link = 'Location: ../../pages/event/EventPage.php?id=' . $event . "#invited";
	header($link);

?>