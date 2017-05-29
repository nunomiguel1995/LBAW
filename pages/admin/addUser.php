<?php
  include_once('../../config/init.php');

  $smarty->assign('title', 'Add user');
  $smarty->display('admin/add_user.tpl');

?>
