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
    }/*else{
        $contactUsers = getContactListUsersText($idList, $searchTextOut);
    }*/
    
    foreach ($users as $key => $user) {
        unset($photo);
        $photo = getPhotoName($user["idUser"]);
        if(is_null($photo) ){
            $path ="../../images/users/user.png";
        }else{
            $path = "../../images/users/".$photo;
        }
        $users[$key]['path'] = $path;
    }

    $smarty->assign('users',$users);
    $smarty->assign('listID',$idList);
    $smarty->assign('contacts',$contactUsers);
    $smarty->assign('userID',$id);
    $smarty->display('user/contactList.tpl');

 ?>
