<?php
include_once('../core/class.manageUsers.php');
$ipAdd = $_SERVER['REMOTE_ADDR'];

if (isset($ipAdd)) {
  // code...
  $manageUsers = new manageUsers();
 $manageUsers->insertVisitors($ipAdd);
}


?>
