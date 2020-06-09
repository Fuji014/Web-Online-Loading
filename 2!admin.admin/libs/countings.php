<?php
include_once('../core/class.manageUsers.php');
function getUsers()
{

  $manageUsers = new manageUsers;
  return $manageUsers->countUsers();

}


?>
