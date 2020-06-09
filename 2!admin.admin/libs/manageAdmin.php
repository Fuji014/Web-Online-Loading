<?php
/**
 *
 */
 include_once('../core/class.database.php');
class manageAdmin
{
  public $link;
  function __construct()
  {
    // code...
    $database = new database();
    $this->link = $database->connect();
    return $this->link;
  }
  function loginAdmin($gmail,$password)
  {
    $query = $this->link->query("SELECT * FROM Admin where admin_gmail = '$gmail' and admin_password = '$password'");
    $query->execute();
    $Counts = rowCount();
    return $Counts;
  }
}


?>
