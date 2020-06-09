<?php
include_once('class.database.php');
class alltables
{
  public $link;
  function __construct()
  {
    // code...
    $database = new database;
    $this->link = $database->connect();
    return $this->link;
  }
  function displayPages()
  {
    $query=$this->link->query("SELECT * FROM SitePages");
    $rowcount = $query->rowCount();
    if ($rowcount != 0) {
      $result = $query->fetchAll();
      return $result;
    }else {
      // code...
      return $rowcount;
    }


  }

}

 ?>
