<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');
  include_once($BASE_DIR .'database/events.php');

  $smarty->display('common/header.tpl');

  $id = $_GET['id'];
  $user = getUser($id);
  $info = getCompanyInfo($user['idInfo']);
  $photo = getPhotoName($id);
  if(is_null($photo) ){
      $path ="../../images/users/user.png";
  }else{
      $path = "../../images/users/".$photo;
  }
  $upcomingEvents = getUserUpcomingEvents($id);
  $smarty->assign('user',$user);
  $smarty->assign('companyInfo', $info);
  $smarty->assign('photo',$path);
  $smarty->assign('profileid',$id);
  $smarty->display('user/editUser.tpl');

  $smarty->display('common/footer.tpl');


 ?>
