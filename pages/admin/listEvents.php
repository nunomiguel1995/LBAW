<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR .'database/events.php');

  $events = getAllEvents();
  $smarty->assign('events',$events);
  $smarty->display('admin/list_events.tpl');
 ?>
