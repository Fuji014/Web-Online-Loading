<?php
  if (isset($_POST['register'])) {
    // code...
    session_start();
    include_once('classes/class.manageUser.php');
    $manageUser = new manageUser();

    $username = $_POST['username'];
    $password = $_POST['password'];
    $gmail = $_POST['gmail'];
    $repassword= $_POST['repassword'];

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $cellphoneNumber = $_POST['cellphoneNumber'];
    $address= $_POST['address'];
    $ipAddress = $_SERVER['REMOTE_ADDR'];
    $user_date = date("Y-m-d");
    $user_time = date("H:i:s");

    if (empty($username) || empty($gmail) || empty($password) || empty($repassword) || empty($firstname) || empty($lastname) || empty($cellphoneNumber) || empty($address)) {
      // code...
      $error = 'All fields are required!';

    }elseif ($password != $repassword) {
      // code...
      $error = 'Password does not match';

    }elseif (!filter_var($gmail,FILTER_VALIDATE_EMAIL)) {
      // code...
      $error = 'Email is not valid';
    }
    else {
      $check_availability = $manageUser->getUserInfo($username);
      $check_gmailAvailability = $manageUser->getUserGmail($gmail);
      if ($check_availability == 0) {
        // code...
        if ($check_gmailAvailability == 0) {
          // code...
          $password = password_hash($password, PASSWORD_DEFAULT);
          $register_user = $manageUser->registerUser($firstname,$lastname,$cellphoneNumber,$gmail,$address,$username,$password,$ipAddress,$user_date,$user_time);
          if ($register_user == 1) {
            // code...

            $make_sessions = $manageUser->getUserInfo($username);
            foreach ($make_sessions as $userSessions) {
              // code...
              $_SESSION['todo_name'] = $userSessions['user_username'];
              if (isset($_SESSION['todo_name'])) {
                // code...
                header('location: index.php');
              }
            }

          }
        }
        else {
          $error = 'Email is already taken!';
        }


      }else {
        $error = 'Username is already taken!';
      }
    }
  }
  if (isset($_POST['login'])) {
    // code...
    session_start();
    include_once('classes/class.manageUser.php');
    $login_users = new manageUser();
    $username = $_POST['login_username'];
    $password = $_POST['login_password'];
    if (empty($username) || empty($password)) {
      // code...
      $error = 'All Fields Are Required!';

    }else {
      $auth_user = $login_users->getUserInfo($username);
      if ($auth_user != 0) {
        // code...
        $check_pass = $login_users->getUserInfo($username);
        foreach ($check_pass as $pass) {
          $hashed_password = $pass['user_password'];
        }
        if(password_verify($password, $hashed_password)){
          // code...
          $make_sessions = $login_users->getUserInfo($username);
          foreach ($make_sessions as $userSessions) {
            // code...
            $_SESSION['todo_name'] = $userSessions['user_username'];
            if (isset($_SESSION['todo_name'])) {
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

  if (isset($_POST['Mynumber'])) {
    session_start();
    include_once('../classes/class.manageUser.php');
    $wew = $_POST['Mynumber'];
    $manageUser = new manageUser;
    $checknumber = $manageUser->checkPhoneNumber($wew);
    if ($checknumber > 0) {
      foreach ($checknumber as $key => $value) {
        $_SESSION['cellnum'] = $value['user_number'];
      }
      $number = $_SESSION['cellnum'];
      $six_digit_random_number = mt_rand(100000, 999999);
      $haha = $manageUser->updateOtp($number,$six_digit_random_number);
      //##########################################################################
      // ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
      // Visit www.itexmo.com/developers.php for more info about this API
      //##########################################################################
      function itexmo($number,$message,$apicode){
      $url = 'https://www.itexmo.com/php_api/api.php';
      $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
      $param = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($itexmo),
          ),
      );
      $context  = stream_context_create($param);
      return file_get_contents($url, false, $context);}
      //##########################################################################
      //customize
      $text = $six_digit_random_number;
      $api = "TR-LOADR299064_9ZWCQ";

      $result = itexmo($wew,$text,$api);
      if ($result == ""){
      echo "iTexMo: No response from server!!!
      Please check the METHOD used (CURL or CURL-LESS). If you are using CURL then try CURL-LESS and vice versa.
      Please CONTACT US for help. ";
      }else if ($result == 0){
      $hide = "Message Sent!";
      }
      else{
      $hide = "Error Num ". $result . " was encountered!";
      }

      echo $number;
    }else {
      echo "No";
    }
  }
  if (isset($_POST['otp']) && isset($_POST['cellnum'])) {
    session_start();
    include_once('../classes/class.manageUser.php');
    $otp = $_POST['otp'];
    $cellnum = $_POST['cellnum'];
    $manageUser = new manageUser;
    $check = $manageUser->checkOtp($cellnum,$otp);
    if ($check > 0) {
      foreach ($check as $key => $value) {
        // code...
        $_SESSION['customer_name'] = $value['user_username'];
        echo 'Yes';
      }
    }else {
      echo "No";
    }
  }
  if (isset($_POST["loadnumber"]) && isset($_POST["loadoperator"]) && isset($_POST["loadamount"]) && isset($_POST["usern"])) {
    session_start();
    include_once('../classes/class.manageUser.php');
    $manageUser = new manageUser;
    $loadnumber = $_POST["loadnumber"];
    $loadoperator = $_POST["loadoperator"];
    $loadamount = $_POST["loadamount"];
    $usern = $_POST["usern"];
    $date = date("m-d-y");
    $time = date("s:i:h");
    $type = "LOAD";
    //##########################################################################
    // ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
    // Visit www.itexmo.com/developers.php for more info about this API
    //##########################################################################
    function itexmo($number,$message,$apicode){
    $url = 'https://www.itexmo.com/php_api/api.php';
    $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
    $param = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
            'method'  => 'POST',
            'content' => http_build_query($itexmo),
        ),
    );
    $context  = stream_context_create($param);
    return file_get_contents($url, false, $context);}
    //##########################################################################
    //customize
    $body = "Load".$loadnumber."Operator".$loadoperator."amount".$loadamount;
    $wew = "09051946970";
    $api = "TR-LOADR299064_9ZWCQ";

    $checkBalance = $manageUser->getUserInfo($usern);
    foreach ($checkBalance as $key => $value) {
          $balance = $value['user_balance'];
    }
    if ($balance <  $loadamount) {
        echo "3";
    }
    else {
      $result = itexmo($wew,$body,$api);
      if ($result == ""){
        $status = "failed";
      echo "0";
      }else if ($result == 0){
        $status = "success";
      echo  "1";
      }
      else{
        $status = "failed";
      echo "0";
      }
    }
    if ($status = "success") {
      $newBalance = ($balance - $loadamount);
      $transacConf="1";
      //uupdate pa yung sa class
      $updateBal = $manageUser->updateBalance($transacConf,$newBalance,$usern);
      $insertValues = $manageUser->insertHistory($usern,$type,$loadnumber,$loadoperator,$loadamount,$date,$time,$status);
    }

  }
  //SIGNUP PROCESS;
  //gmail
  //check if gmail is exist
if (isset($_POST['nameGmail'])) {
  session_start();
  //generate token
  $words = "qwertyuiopasdfghjklzxcvbnmQWTYUIOPASDJKLZXCNM";
  $words = str_shuffle($words);
  $token = substr($words, 0, 20);
  //end of generated token
  //setting up variables;
  $date = date("y-m-d");
  $time = date("h-i-m");
  $ip = $_SERVER['REMOTE_ADDR'];
  $gmailConfirmed = "0";
  $cellnumberConfirmed = "0";
  $gmail = $_POST["nameGmail"];
  //end of variable
  include_once("../classes/class.manageUser.php");
  $manageUser = new manageUser;
  $checkGmailexist = $manageUser->getUserGmail($gmail);
  if ($checkGmailexist == 0) {
      require '../PHPMailer-master/PHPMailerAutoload.php';
      $mail = new PHPMailer();
      $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPOptions = array(
                          'ssl' => array(
                              'verify_peer' => false,
                              'verify_peer_name' => false,
                              'allow_self_signed' => true
                          )
                      );
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = TRUE;
        //Provide username and password
        $mail->Username = "Arrondelacruz5@gmail.com";
        $mail->Password = "arronjohn31";
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "false";
        $mail->Port = 587;
        //Set TCP port to connect to
        $mail->From = "Arrondelacruz5@gmail.com";
        $mail->FromName = "Teacher's Evaluation System";
        $mail->addAddress($gmail);
        $mail->isHTML(true);
        $mail->Subject = "Recovery Password";
			  $mail->Body = "<html><body>";
			  $mail->Body .= "<h1 style='color:black;'>Hi!</h1>";
			  $mail->Body .= "<p style='color:black;font-size:18px;'>Your recovery password is:</p>";
			  $mail->Body .= "<p style='color:black;font-size:18px;'>Copy and paste your recovery password.<br><br>Have a great Day!</p><br>";
			  $mail->Body .= "<a href='127.0.0.1/softwenbak/AccountSetup.php?gmail=".$gmail."&token=".$token."'>click bait</a><br>";

			  $mail->Body .= "</body></html>";
			  $mail->AltBody = "This is the plain text version of the email content";
        if(!$mail->send())
        {
             $output = "1";
       //  header("location: ./admin.php");
        }
        else
        {
          //if success insert values!
          $insertVal = $manageUser->insertGmail($gmail,$ip,$date,$time,$token,$gmailConfirmed,$cellnumberConfirmed);
          //   echo "success";
          $output = "1";

        }
  }
  else {
    $output = "2";
  }
  echo $output;

}

if (isset($_POST['gmail']) && isset($_POST['number']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['username']) && isset($_POST['address']) && isset($_POST['password'])) {
  // code...
  //generate token
  //setup variables;
  //hash password
  $password = $_POST['password'];
  $password = password_hash($password, PASSWORD_DEFAULT);
  //end
  $gmail = $_POST['gmail'];
  $number  = $_POST['number'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $username = $_POST['username'];
  $address = $_POST['address'];
  $words = "qwertyuiopasdfghjklzxcvbnmQWTYUIOPASDJKLZXCNM";
  $words = str_shuffle($words);
  $token = substr($words, 0, 20);
  //end of generated token
  //setting up variables;
  $date = date("y-m-d");
  $time = date("h-i-m");
  $ipAddress = $_SERVER['REMOTE_ADDR'];
  $gmailConfirmed = "0";
  $cellnumberConfirmed = "0";
  //end of variable
  include_once("../classes/class.manageUser.php");
  $manageUser = new manageUser;
  $checkGmailexist = $manageUser->getUserGmail($gmail);
  if ($checkGmailexist == 0) {
      require '../PHPMailer-master/PHPMailerAutoload.php';
      $mail = new PHPMailer();
      $mail->IsSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPOptions = array(
                          'ssl' => array(
                              'verify_peer' => false,
                              'verify_peer_name' => false,
                              'allow_self_signed' => true
                          )
                      );
        //Set this to true if SMTP host requires authentication to send email
        $mail->SMTPAuth = TRUE;
        //Provide username and password
        $mail->Username = "Arrondelacruz5@gmail.com";
        $mail->Password = "arronjohn31";
        //If SMTP requires TLS encryption then set it
        $mail->SMTPSecure = "false";
        $mail->Port = 587;
        //Set TCP port to connect to
        $mail->From = "Arrondelacruz5@gmail.com";
        $mail->FromName = "Teacher's Evaluation System";
        $mail->addAddress($gmail);
        $mail->isHTML(true);
        $mail->Subject = "Recovery Password";
        $mail->Body = "<html><body>";
        $mail->Body .= "<h1 style='color:black;'>Hi!</h1>";
        $mail->Body .= "<p style='color:black;font-size:18px;'>Your recovery password is:</p>";
        $mail->Body .= "<p style='color:black;font-size:18px;'>Copy and paste your recovery password.<br><br>Have a great Day!</p><br>";
        $mail->Body .= "<a href='127.0.0.1/softwenbak/dashboard.php?gmail=".$gmail."&token=".$token."'>click bait</a><br>";

        $mail->Body .= "</body></html>";
        $mail->AltBody = "This is the plain text version of the email content";
        if(!$mail->send())
        {
             $output = "0";
       //  header("location: ./admin.php");
        }
        else
        {
          //if success insert values!
          $insertVal = $manageUser->insertGmail($firstname,$lastname,$number,$gmail,$address,$username,$password,$ipAddress,$date,$time,$token,$gmailConfirmed,$cellnumberConfirmed);
          //   echo "success";
          $output =  "1";

        }
  }
  else {
      $output = "2";
  }
  echo $output;

}
if(isset($_GET['gmail']) && isset($_GET['token']))
{
  $gmailConfirmed = 1;
  $gmail = $_GET['gmail'];
  $token =  $_GET['token'];
  include_once("classes/class.manageUser.php");
  $manageUser = new manageUser;
  $checkGmailexist = $manageUser->selectGmailAcc($gmail,$token);
  if ($checkGmailexist > 0) {
    foreach ($checkGmailexist as $key => $value) {
      // get id
      $id = $value['id'];
    }
    //update
    $token = "";
    $updateCheck = $manageUser->successGmailUpdate($gmail,$token,$gmailConfirmed,$id);
    if ($updateCheck > 0) {
      // code...
      $output = "<script>$(document).ready(function(){
            window.history.replaceState({}, document.title, '/' + 'softwenbak/dashboard.php');
            $('#firstTimeLogin').modal('show');alert('Account Verified You can now login!');
      })</script>";
      echo $output;
    }

  }else {
    //must be error page
    header("location: error.php");
  }

}
if(isset($_POST['usernameLogin']) && isset($_POST['passwordLogin'])) {
  session_start();
  $username = $_POST['usernameLogin'];
  $password = $_POST['passwordLogin'];
  include_once("../classes/class.manageUser.php");
  $manageUser = new manageUser;
  $checkUserExist = $manageUser->getUserInfo($username);
  if ($checkUserExist > 0) {
    $check_pass = $manageUser->getUserInfo($username);
    foreach ($check_pass as $pass => $value) {
      $hashed_password = $value['user_password'];
    }
    if(password_verify($password, $hashed_password)){
      // code...
      $make_sessions = $manageUser->getUserInfo($username);
      foreach ($make_sessions as $pass => $value) {
        // code...
        $_SESSION['customer_name'] = $value['user_username'];
      }

      $output = $_SESSION['customer_name'];
      echo $output;


    }
  }

}
//verify phone number
if (isset($_POST['verNumber']) && isset($_POST['customerName'])) {
  $number = $_POST['verNumber'];
  $customer_name = $_POST['customerName'];
  include_once("../classes/class.manageUser.php");
  $manageUser = new manageUser;
  $checkifExist = $manageUser->getUserInfo($customer_name);
  if ($checkifExist > 0) {
    foreach ($checkifExist as $key => $value) {
        $id = $value['id'];
    }
    $body = mt_rand(100000, 999999);
    $insertVal = $manageUser->updateMobileCode($body,$id);
    if ($insertVal > 0) {
      //##########################################################################
      // ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
      // Visit www.itexmo.com/developers.php for more info about this API
      //##########################################################################
      function itexmo($number,$message,$apicode){
      $url = 'https://www.itexmo.com/php_api/api.php';
      $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
      $param = array(
          'http' => array(
              'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
              'method'  => 'POST',
              'content' => http_build_query($itexmo),
          ),
      );
      $context  = stream_context_create($param);
      return file_get_contents($url, false, $context);}
      //##########################################################################
      $body = $body;
      $number = $number;
      $api = "TR-LOADR299064_9ZWCQ";

      $result = itexmo($number,$body,$api);
      if ($result == ""){
      }else if($result == 0){
      echo  $number;
      }else {
      }
    }
  }
}
if (isset($_POST['confirmNumber']) && isset($_POST['personNumHidden']) && isset($_POST['custName'])) {
   $confirmNumber = $_POST['confirmNumber'];
   $personNumHidden = $_POST['personNumHidden'];
   $custName = $_POST['custName'];
   include_once("../classes/class.manageUser.php");
   $manageUser = new manageUser;
   $checkifExist = $manageUser->optCheck($confirmNumber,$custName);
   if ($checkifExist > 0) {
     $confirmNumber = "";
     $conf = "1";
     $updateOtpNum = $manageUser->updateNumberOtp($personNumHidden,$confirmNumber,$conf,$custName);
     if ($updateOtpNum > 0) {
       echo "1";
     }
   }
}
if (isset($_POST['messageNum']) && isset($_POST['messageBody']) && isset($_POST['custName'])) {
  $messageNum = $_POST['messageNum'];
  $messageBody = $_POST['messageBody'];
  $custName = $_POST['custName'];
  $date = date("m-d-y");
  $time = date("s:i:h");
  $type = "SMS";
  //smart or globe
  $loadamount = "1";
  //loadoperator hula muna ngayon
  $loadoperator = "";
  //##########################################################################
  // ITEXMO SEND SMS API - PHP - CURL-LESS METHOD
  // Visit www.itexmo.com/developers.php for more info about this API
  //##########################################################################
  function itexmo($number,$message,$apicode){
  $url = 'https://www.itexmo.com/php_api/api.php';
  $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
  $param = array(
      'http' => array(
          'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
          'method'  => 'POST',
          'content' => http_build_query($itexmo),
      ),
  );
  $context  = stream_context_create($param);
  return file_get_contents($url, false, $context);}
  //##########################################################################
  //customize
  $body = $messageBody;
  $wew = $messageNum;
  $api = "TR-LOADR299064_9ZWCQ";
  include_once("../classes/class.manageUser.php");
  $manageUser = new manageUser;
  $checkBalance = $manageUser->getUserInfo($custName);
  foreach ($checkBalance as $key => $value) {
        $balance = $value['user_balance'];
  }
  if ($balance <  $loadamount) {
      echo "3";
  }
  else {
    $result = itexmo($wew,$body,$api);
    if ($result == ""){
      $status = "failed";
    echo "0";
    }else if ($result == 0){
      $status = "success";
    echo  "1";
    }
    else{
      $status = "failed";
    echo "0";
    }
  }
  if ($status = "success") {
    $newBalance = ($balance - $loadamount);
    $transacConf="1";
    //uupdate pa yung sa class
    $updateBal = $manageUser->updateBalance($transacConf,$newBalance,$custName);
    $insertValues = $manageUser->insertHistory($custName,$type,$messageNum,$loadoperator,$loadamount,$date,$time,$status);
  }
}


?>
