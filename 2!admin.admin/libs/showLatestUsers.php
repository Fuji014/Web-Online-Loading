<?php
include_once('core/class.manageUsers.php');
$manageUsers = new manageUsers;
$res = $manageUsers->countLatestUsers();
?>

  <?php
    if ($res > 0) {
      ?>
        <?php
      foreach ($res as $key => $value) {
        // code...
        ?>
        <tr>
        <td><?php echo $value['user_username']; ?></td>
        <td><?php echo $value['user_gmail']; ?></td>
        <td><?php echo $value['user_date']; ?></td>

</tr>
<?php
}
}
?>
