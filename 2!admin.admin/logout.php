<?php
session_start();
if (isset($_SESSION['admin_username'])) {
  // code...
  session_destroy();
  header('location: login.php');
}
?>
