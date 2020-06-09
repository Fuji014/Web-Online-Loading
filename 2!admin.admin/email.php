<?php
$gmail = "loadrepublic.com@gmail.com";
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer();

  //Enable SMTP debugging.
  $mail->SMTPDebug = 1;
  //Set PHPMailer to use SMTP.
 // $mail->isSMTP();
  //Set SMTP host name
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
  $mail->Body = "bobobooo";
  $mail->AltBody = "This is the plain text version of the email content";
  if(!$mail->send())
  {
       echo "Mailer Error: " . $mail->ErrorInfo;
 //  header("location: ./admin.php");
  }
  else
  {
    //   echo "success";
  echo "success";

  }

?>
