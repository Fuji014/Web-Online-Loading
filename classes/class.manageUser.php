<?php
  include_once('class.databaseConnect.php');

  class manageUser
  {
    public $link;

    function __construct()
    {
      $databaseConnect = new databaseConnect();
      $this->link = $databaseConnect->connect();
      return $this->link;
    }

    function viewAll()
    {
      $query = $this->link->query("SELECT * from Register_User");
      $rowCount = $query->rowCount();
      return $rowCount;
    }

    function registerUser($user_firstname,$user_lastname,$user_cellphoneNumber,$user_gmail,$user_address,$user_username,$user_password,$user_ipAddress,$date,$time)
    {

      $query = $this->link->prepare("INSERT INTO Register_User (user_firstname,user_lastname,user_cellphoneNumber,user_gmail,user_address,user_username,user_password,user_ipAddress,user_date,user_time) values (?,?,?,?,?,?,?,?,?,?)");
      $values = array($user_firstname,$user_lastname,$user_cellphoneNumber,$user_gmail,$user_address,$user_username,$user_password,$user_ipAddress,$date,$time);
      $query->execute($values);
      $rowCount = $query->rowCount();
      return $rowCount;
    }
    function loginUser($user_username,$user_password)
    {
      $query = $this->link->query("SELECT * FROM Register_User where user_username = '$user_username' AND user_password = '$user_password'");
      $rowCount = $query->rowCount();
      return $rowCount;
    }
    function getUserInfo($username)
    {
      $query = $this->link->query("SELECT * FROM Register_User where user_username = '$username'");
      $rowCount = $query->rowCount();
      if ($rowCount > 0) {
        // code...
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $result = $query->fetchAll();
        return $result;
      }
      else {
        // code...
        return $rowCount;
      }
    }
      function getUserGmail($gmail)
      {
        $query = $this->link->query("SELECT * FROM Register_User where user_gmail = '$gmail' and user_gmailConfirmed = '1'");
        $rowCount = $query->rowCount();
        if ($rowCount == 1) {
          // code...
          $result = $query->fetchAll();
          return $result;
        }
        else {
          // code...
          return $rowCount;
        }

    }
    function checkPhoneNumber($user_cellphoneNumber)
    {
        $query = $this->link->query("SELECT * FROM Register_User where user_number = '$user_cellphoneNumber'");
        $rowCount = $query->rowCount();
        if ($rowCount == 1) {
          // code...
            $query->setFetchMode(PDO::FETCH_ASSOC);
            $result = $query->fetchAll();
            return $result;
        }else{
            return $rowCount;
        }
    }
    function updateOtp($cpnumber,$otp)
    {
        $query = $this->link->query("update Register_User set user_otp = '$otp' where user_number = '$cpnumber'");
        if(!$query)
        {
            trigger_error('Invalid query: ' . $this->link->error);
        }else if (is_object($query))
        {
            $sqlRowCount = $query->rowCount();
            return $sqlRowCount;
        }
        else
        {
            $sqlRowCount = 0;
            return $sqlRowCount;

        }

    }
    function checkOtp($number,$checkOtp)
    {
      $query = $this->link->query("SELECT * FROM Register_User where user_number = '$number' and user_otp = '$checkOtp'");
      $rowCount = $query->rowCount();
      if ($rowCount == 1) {
        // code...
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $fetch = $query->fetchAll();
        return $fetch;
      }else {
        return $rowCount;
      }

    }
    //for sign up process;
    function insertGmail($user_firstname,$user_lastname,$user_number,$user_gmail,$user_address,$user_username,$user_password,$user_ipAddress,$user_date,$user_time,$user_token,$user_gmailConfirmed,$user_cellnumberConfirmed)
    {
      $query = $this->link->prepare("insert into Register_User (user_firstname,user_lastname,user_number,user_gmail,user_address,user_username,user_password,user_ipAddress,user_date,user_time,user_token,user_gmailConfirmed,user_cellnumberConfirmed) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
      // $query->bind_param('sssssii',$gmail,$ipAddress,$date,$time,$token,$gmailConfirmed,$cellnumberConfirmed);
      $values = array($user_firstname,$user_lastname,$user_number,$user_gmail,$user_address,$user_username,$user_password,$user_ipAddress,$user_date,$user_time,$user_token,$user_gmailConfirmed,$user_cellnumberConfirmed);
      $query->execute($values);
      $rowCount = $query->rowCount();
      return $rowCount;
    }
    function successGmailUpdate($gmail,$token,$gmailConfirmed,$id)
    {
      $query = $this->link->prepare("UPDATE Register_User SET user_gmail=?, user_token = ? , user_gmailConfirmed = ? WHERE id=?");
      // $query->bind_param('sssssii',$gmail,$ipAddress,$date,$time,$token,$gmailConfirmed,$cellnumberConfirmed);
      $query->execute([$gmail, $token, $gmailConfirmed, $id]);
      $rowCount = $query->rowCount();
      return $rowCount;
    }
    function selectGmailAcc($gmail,$token){
      $query = $this->link->query("SELECT id FROM Register_User where user_gmail ='$gmail' and user_token='$token' and user_gmailConfirmed=0");
      $rowCount = $query->rowCount();
			if($rowCount >= 1)
			{
				$query->setFetchMode(PDO::FETCH_ASSOC);
				$result = $query->fetchAll();
			}
			else
			{
				$result = 0;
			}
			return $result;
    }
    function updateMobileCode($otpCode,$id)
    {
      $query = $this->link->prepare("UPDATE Register_User SET user_otp=? WHERE id=?");
      // $query->bind_param('sssssii',$gmail,$ipAddress,$date,$time,$token,$gmailConfirmed,$cellnumberConfirmed);
      $query->execute([$otpCode, $id]);
      $rowCount = $query->rowCount();
      return $rowCount;
    }
    function optCheck($confirmNumber,$custName){
    $query = $this->link->query("SELECT * from Register_User where user_otp = '$confirmNumber' and user_username='$custName' and user_cellnumberConfirmed='0'");
    $rowCount = $query->rowCount();
    if ($rowCount > 0) {
      // code...
      $query->setFetchMode(PDO::FETCH_ASSOC);
      $result = $query->fetchAll();
      return $result;
    }
    else {
      // code...
      return $rowCount;
    }
}
function updateNumberOtp($personNumHidden,$confirmNumber,$conf,$custName)
{
  $query = $this->link->prepare("UPDATE Register_User SET user_number=?,user_otp=?,user_cellnumberConfirmed=? WHERE user_username=?");
  // $query->bind_param('sssssii',$gmail,$ipAddress,$date,$time,$token,$gmailConfirmed,$cellnumberConfirmed);
  $query->execute([$personNumHidden,$confirmNumber,$conf,$custName]);
  $rowCount = $query->rowCount();
  return $rowCount;
}
function updateBalance($transacConf,$newBalance,$username)
{
  $query = $this->link->prepare("UPDATE Register_User SET user_transactConfirmed=?, user_balance=? WHERE user_username=?");
  // $query->bind_param('sssssii',$gmail,$ipAddress,$date,$time,$token,$gmailConfirmed,$cellnumberConfirmed);
  $query->execute([$transacConf,$newBalance,$username]);
  $rowCount = $query->rowCount();
  return $rowCount;
}
function insertHistory($usern,$type,$loadnumber,$loadoperator,$loadamount,$date,$time,$status)
{

  $query = $this->link->prepare("INSERT INTO Transac_History (user_username,tr_type,tr_mobileNumber,tr_operator,tr_amount,tr_date,tr_time,tr_status) values (?,?,?,?,?,?,?,?)");
  $values = array($usern,$type,$loadnumber,$loadoperator,$loadamount,$date,$time,$status);
  $query->execute($values);
  $rowCount = $query->rowCount();
  return $rowCount;
}
function trTable($username)
{
  $query = $this->link->query("SELECT * FROM Transac_History where user_username = '$username'");
  $rowCount = $query->rowCount();
  if ($rowCount > 0) {
    $query->setFetchMode(PDO::FETCH_ASSOC);
    $result = $query->fetchAll();
    return $result;
  }
  else {
    return $rowCount;
  }
}
}
  // testing method
  // $manageUser = new manageUser;
  // $var = $manageUser->getUserInfo("username");
  // print_r($var);
  // echo $manageUser->registerUser("APPLE","GARCIA","09051946970","jerome@gmail.com","1524 Sandiego St.","jerome","admin","admin","127.0.0.1");

 ?>
