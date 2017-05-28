<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $id=$_GET['id'];

  $smarty->display('user/myEvents.tpl');

 ?>
