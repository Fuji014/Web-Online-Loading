<?php /**
 *
 */
 include_once('class.database.php');
class manageUsers
{
  public $link;
  function __construct(){
    // code...
    $database = new database;
    $this->link = $database->connect();
    return $this->link;
  }
  function getEmailLogin($gmail)
  {
    $query = $this->link->query("SELECT * FROM Admin where admin_gmail = '$gmail'");
    $rowCount = $query->rowCount();
    if ($rowCount != 0) {
      // code...
      $result = $query->fetchAll();
      return $result;
    }else {
      return $rowCount;
    }
  }
  function countUsers()
  {
    $query=$this->link->query("SELECT * FROM Register_User");
    $rowCount = $query->rowCount();
    return $rowCount;
  }
  function countLatestUsers()
  {
    $query=$this->link->query("SELECT user_username,user_gmail,user_date FROM Register_User limit 5");
    $rowcount = $query->rowCount();
    if ($rowcount != 0) {
      $result = $query->fetchAll();
      return $result;
    }else {
      // code...
      return $rowcount;
    }


  }
  function countPages()
  {
    $query=$this->link->query("SELECT * FROM SitePages");
    $rowCount = $query->rowCount();
    return $rowCount;
  }
  function forEditUsers()
  {
    $query=$this->link->query("SELECT user_firstname,user_lastname,user_username,user_gmail,user_date FROM Register_User");
    $rowcount = $query->rowCount();
    if ($rowcount != 0) {
      $result = $query->fetchAll();
      return $result;
    }else {
      // code...
      return $rowcount;
    }


  }
  function insertVisitors($ipAdd)
  {
      $query = $this->link->prepare("INSERT INTO SiteVisitors (ip_address) values (?)");
      $values = array($ipAdd);
      $query->execute($values);
      $rowCount = $query->rowCount();
      return $rowCount;

  }
  function viewVisitors()
  {
      $query = $this->link->query("SELECT * FROM SiteVisitors");
      $rowCount = $query->rowCount();
      return $rowCount;

  }
}

 ?>
