<?php
if (isset($_POST['wew'])) {
  include_once('core/class.addThree.php');
  // code...
  $prepare_title = htmlspecialchars($_POST['title']);
  $prepare_bodyModal = $_POST['bodyModal'];
  $prepare_checkbox = htmlspecialchars($_POST['checkbox']);
  $prepare_tags = htmlspecialchars($_POST['tags']);
  $prepare_description = htmlspecialchars($_POST['description']);
  $date = date("Y-m-d");

  //title check if empty
  if (!isset($prepare_title) || empty($prepare_title)) {
    // code...
    $error = 'All fields are required!';
  }else {
    $title = $prepare_title;
  }
  //title check if bodyModal
  if (!isset($prepare_bodyModal) || empty($prepare_bodyModal)) {
    // code...
    $error = 'All fields are required!';
  }else {
    $body = $prepare_bodyModal;
  }
  //title check if checkbox
  if (!isset($prepare_checkbox) || empty($prepare_checkbox)) {
    // code...
    $status = 'false';
  }else {
    $status = 'true';
  }
  //title check if tags
  if (!isset($prepare_tags) || empty($prepare_tags)) {
    // code...
    $error = 'All fields are required!';
  }else {
    $tags = $prepare_tags;
  }
  if (!isset($prepare_description) || empty($prepare_description)) {
    // code...
    $error = 'All fields are required!';
  }else {
    $description = $prepare_description;
  }
  if (!isset($error)) {
    // code...
    $addThree = new addThree;
    $result = $addThree->addPage($title,$body,$tags,$description,$date,$status);
    if ($result != 0) {
      // code...
      $message = 'Insert Successfuly';
    }
    else {
      // code...
        $message = 'Check Network Connectivity';
    }
  }
}

?>
