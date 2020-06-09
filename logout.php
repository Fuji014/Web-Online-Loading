<?php
session_start();
if (isset($_SESSION['customer_name'])) {
  // code...
  session_destroy();
  header('location: dashboard.php');
}
?>
