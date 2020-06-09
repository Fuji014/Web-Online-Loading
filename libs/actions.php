<?php
if(isset($_SESSION['customer_name'])) {
  $username = $_SESSION['customer_name'];
  include_once("classes/class.manageUser.php");
  $manageUser = new manageUser;
  $checkExist = $manageUser->getUserInfo($username);
  if ($checkExist > 0) {
    foreach ($checkExist as $key => $value) {
      // code...
      $id = $value['id'];
      $firstname = $value['user_firstname'];
      $lastname = $value['user_lastname'];
      $number = $value['user_number'];
      $gmail = $value['user_gmail'];
      $address= $value['user_address'];
      $username = $value['user_username'];
      $gmailConf = $value['user_gmailConfirmed'];
      $numConf = $value['user_cellnumberConfirmed'];
      $transacConf = $value['user_transactConfirmed'];
      $userBal = $value['user_balance'];
    }
    if ($gmailConf == 0) {
      $gmailConf = '<span class="label label-danger">Verify</span>';
    }else {
      $gmailConf = '<span class="label label-success">Success</span>';
    }
    if ($numConf == 0) {
      $numConf = '<span class="label label-danger">Verify</span>';
    }else {
      $numConf = '<span class="label label-success">Success</span>';
    }
    if ($transacConf == 0) {
      $transacConf = '<span class="label label-danger">Verify</span>';
    }else {
      $transacConf = '<span class="label label-success">Success</span>';
    }

  }
}


?>
