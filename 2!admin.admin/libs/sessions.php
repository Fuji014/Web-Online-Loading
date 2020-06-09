<?php
session_start();
if (isset($_SESSION['admin_username'])) {
  // code...
  $session_name = $_SESSION['admin_username'];
}else {
  header('location: login.php');
}


?>
