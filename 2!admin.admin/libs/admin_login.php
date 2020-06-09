<?php
if (isset($_POST['login'])) {
  session_start();
  include_once('core/class.manageUsers.php');
  $login_users = new manageUsers;
  $gmail = $_POST['gmail'];
  $password = $_POST['password'];
  if (empty($gmail) || empty($password)) {
    // code...
    $error = 'All Fields Are Required!';

  }else {
    $auth_user = $login_users->getEmailLogin($gmail);
    if ($auth_user != 0) {
      // code...
      $check_pass = $login_users->getEmailLogin($gmail);
      foreach ($check_pass as $pass => $value) {
        $hashed_password = $value['admin_password'];
      }
      if(password_verify($password, $hashed_password)){
        // code...
        $make_sessions = $login_users->getEmailLogin($gmail);
        foreach ($make_sessions as $userSessions) {
          // code...
          $_SESSION['admin_username'] = $userSessions['admin_username'];
          if (isset($_SESSION['admin_username'])) {
            // code...
            header('location: index.php');
          }
        }

      }
      else {
        $error = 'Invalid Credentials!';
      }

    }else {
      $error = 'Invalid Credentials!';
    }
  }
}
?>
