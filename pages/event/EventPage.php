<?php
    include_once('../../config/init.php');
    $smarty->display('common/header.tpl');

    include_once($BASE_DIR .'database/events.php');
    include_once($BASE_DIR .'database/users.php');
	
    $event = getEvent($_GET['id'])[0];
    $organizer = getEventOrganizer($_GET['id'])[0];
    $location = getEventLocation($_GET['id'])[0];
    $posts = getEventPosts($_GET['id']);
    $invited = getEventInvitations($_GET['id']);
	
	foreach ($posts as $key => $post) {
		$comments = getPostComments($post['idPost']);
		foreach ($comments as $comment_key => $comment) {
			unset($comment_photo_path);
			$comment_photo = getPhotoName($comment['idCreator']);
			if(is_null($comment_photo) ){
				$comment_photo_path ="../../images/users/user.png";
			}else{
				$comment_photo_path = "../../images/users/".$comment_photo;
			}
			$comments[$comment_key]['photo'] = $comment_photo_path;
		}
		$posts[$key]['comments'] = $comments;
		
		unset($photo);
		$photo = getPhotoName($post['idCreator']);
		if(is_null($photo) ){
			$path ="../../images/users/user.png";
		}else{
			$path = "../../images/users/".$photo;
		}
		
		$posts[$key]['photo'] = $path;

		$poll = getPostPoll($post['idPost']);
		
		if(!sizeof($poll) == 0){
			$options = getPollOptions($poll[0]['idPoll']);
			if(!sizeof($options) == 0){
				foreach($options as $k => $option){
					$voted = isvoted($poll[0]['idPoll'], $_SESSION['iduser'], $option['idOption']);
					if(!sizeof($voted) == 0){
						$options[$k]['voted'] = "true";
					}else{
						$options[$k]['voted'] = "false";
					}
					$n_votes = numberOfVotes($option['idOption']);
					$options[$k]['votes'] = $n_votes[0]['count'];
				}
				$poll['options'] = $options;
				$posts[$key]['poll'] = $poll;
			}
		}
	}
	
	foreach ($invited as $invited_key => $inv) {
		unset($invited_photo_path);
		$invited_photo = getPhotoName($inv['idUser']);
		if(is_null($invited_photo) ){
			$invited_photo_path ="../../images/users/user.png";
		}else{
			$invited_photo_path = "../../images/users/".$invited_photo;
		}
		$invited[$invited_key]['photo'] = $invited_photo_path;
	}
	
	
    $smarty->assign('event',$event);
    $smarty->assign('organizer',$organizer);
    $smarty->assign('location',$location);
    $smarty->assign('posts',$posts);
    $smarty->assign('invited',$invited);
	$smarty->assign('event_id',$_GET['id']);
    $smarty->display('event/eventpage.tpl');

    $smarty->display('common/footer.tpl');
	
	
?>
