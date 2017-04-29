<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

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
  $smarty->assign('user',$user);
  $smarty->assign('companyInfo', $info);
  $smarty->assign('photo',$path);
  $smarty->display('user/userPage.tpl');

  $smarty->display('common/footer.tpl');
 ?>
