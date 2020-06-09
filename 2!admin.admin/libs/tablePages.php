<?php
include_once('../core/class.allTables.php');
$alltables = new alltables;
$res = $alltables->displayPages();
?>

  <?php
    if ($res > 0) {
      ?>
        <?php
      foreach ($res as $key => $value) {
        if ($value['status'] = 'true') {
          // code...
          $stat = '<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>';
        }else {
          $stat = '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>';
        }
        ?>
        <tr>
        <td><?php echo $value['title']; ?></td>
        <td><?php echo $stat; ?></td>
        <td><?php echo $value['dateCreate']; ?></td>
        <td><a class="btn btn-default" href="edit.php?id=<?php echo $value['id']; ?>">Edit</a> <a class="btn btn-danger" href="delete.php?id=<?php echo $value['id']; ?>">Delete</a></td>
</tr>
<?php
}
}
?>
