<?php
  include_once('../../config/init.php');

  $smarty->assign('title', 'Eventerpreneur');

  $smarty->display('common/header.tpl');
  $smarty->display('main/homepage.tpl');
  $smarty->display('common/footer.tpl');
?>
