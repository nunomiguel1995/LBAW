<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $id = $_SESSION['iduser'];

  $smarty->display('user/messages.tpl');

 ?>
