<?php
if (isset($_SESSION['customer_name'])) {
  $username = $_SESSION['customer_name'];
}else {
  header('location: dashboard.php');
  exit();
}
include_once('classes/class.manageUser.php');
$manageUsers = new manageUser;
$res = $manageUsers->trTable($username);
?>

  <?php
    if ($res > 0) {
      ?>
        <?php
      foreach ($res as $key => $value) {
        // code...
        ?>
        <tr>
        <td class="jeromeFont"><?php echo $value['tr_type']; ?></td>
        <td class="jeromeFont"><?php echo $value['tr_mobileNumber']; ?></td>
        <td class="jeromeFont"><?php echo $value['tr_operator']; ?></td>
        <td class="jeromeFont"><?php echo $value['tr_amount']; ?></td>
        <td class="jeromeFont"><?php echo $value['tr_date']; ?></td>
        <td class="jeromeFont"><?php echo $value['tr_time']; ?></td>
        <td class="jeromeFont"><?php echo $value['tr_status']; ?></td>

</tr>
<?php
}
}
?>
