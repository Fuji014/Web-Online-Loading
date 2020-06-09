<?php /**
 *
 */
 include_once('class.database.php');
class addThree
{
  public $link;
  function __construct()
  {
    // code...
    $database = new database;
    $this->link = $database->connect();
    return $this->link;
  }
  function addPage($title,$body,$tags,$description,$date,$status)
  {
    $query = $this->link->prepare("INSERT INTO SitePages (title,body,tags,description,dateCreate,status) values (?,?,?,?,?,?)");
    $values = array($title,$body,$tags,$description,$date,$status);
    $query->execute($values);
    $rowCount = $query->rowCount();
    return $rowCount;
  }
  function countUsers()
  {
    $query=$this->link->query("SELECT * FROM SitePages");
    $rowCount = $query->rowCount();
    return $rowCount;
  }

}


 ?>
