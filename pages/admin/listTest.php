<?php
  include_once('../config/init.php');
  include_once($BASE_DIR .'database/users.php');

  $users = getAllUsers();
  foreach ($users as $key => $value) {
    echo $value['username'];
  }
  echo "Hello";
 ?>
