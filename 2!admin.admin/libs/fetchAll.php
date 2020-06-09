<?php
include_once( 'core/class.ManageDatabase.php' );
$fetch = new ManageDatabase;
$query = '';
$data = array();
$records_per_page=10;
$start_from = 0;
$current_page_number = 0;
if (isset($_POST["rowCount"])) {
  // code...
  $records_per_page=$_POST["rowCount"];
}else {
  // code...
  $records_per_page =10;
}
if (isset($_POST["current"])) {
  // code...
  $current_page_number = $_POST["current"];
}else {
  $current_page_number =1;
}
$start_from = ($current_page_number - 1) * $records_per_page;

$













?>
