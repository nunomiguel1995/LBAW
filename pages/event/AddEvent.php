<?php
  include_once('../../config/init.php');
  
  
  include_once($BASE_DIR.'database/users.php');
  $allusers = getAllUsers();
  $type;
  if(isset($_SESSION['username'])){
	$allusers = getAllUsers();
	
	foreach ($allusers as $key => $user) {
    unset($photo);
    $photo = getPhotoName($user["idUser"]);
    if(is_null($photo) ){
        $path ="../../images/users/user.png";
    }else{
        $path = "../../images/users/".$photo;
    }
    $allusers[$key]['photo'] = $path;
  }
	
	$type = getUserType($_SESSION['username']);
	$smarty->display('common/header.tpl');
	$smarty->assign('type',$type);
	$smarty->assign('allusers',$allusers);
	$smarty->display('event/addevent.tpl');
	$smarty->display('common/footer.tpl'); 
  
  }else{
	  $link = $BASE_URL + '/pages/main/homepage.php';
	   header('Location: ' . $link);
  }
  
  
  
  
  ?>
