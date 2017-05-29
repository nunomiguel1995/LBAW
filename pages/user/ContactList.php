<?php
    include_once('../../config/init.php');
    include_once($BASE_DIR .'database/users.php');

    $id = $_SESSION['iduser'];
    $idList = getContactListID($id);

    $searchTextOut = $_POST["search_user_clOut"];
    $searchTextIn = $_POST["search_user_clIn"];
    if(strcmp($searchTextOut, '') === 0){
        $contactUsers = getAllContactListUsers($idList);
    }else{
        $contactUsers = getContactListUsersText($idList, $searchTextOut);
    }

    if(strcmp($searchTextIn, '') === 0){
        $users = getRemainUsers($idList);
    }else{
      $users = getRemainUsersText($idList, $searchTextIn);
    }

    $smarty->assign('users',$users);
    $smarty->assign('listID',$idList);
    $smarty->assign('contacts',$contactUsers);
    $smarty->assign('userID',$id);
    $smarty->display('user/contactList.tpl');

 ?>
