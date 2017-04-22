<?php
    include_once('../../config/init.php');
    $smarty->display('common/header.tpl');

    include_once($BASE_DIR .'database/events.php');

    $event = getEvent($_GET['id'])[0];
    $organizer = getEventOrganizer($_GET['id'])[0];
    $location = getEventLocation($_GET['id'])[0];
    $posts = getEventPosts($_GET['id']);
    $invited = getEventInvitations($_GET['id']);

    $smarty->assign('event',$event);
    $smarty->assign('organizer',$organizer);
    $smarty->assign('location',$location);
    $smarty->assign('posts',$posts);
    $smarty->assign('invited',$invited);
    $smarty->display('event/eventpage.tpl');

    $smarty->display('common/footer.tpl');
?>
