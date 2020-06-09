<?php
if (!isset($_SESSION['customer_name'])) {
  // code...
  echo '<nav>
    <ul>
      <li> <a href="#whatWedo" class="jeromeFont" style="color:#0073cf;">What we do</a> </li>
      <li> <a href="#help" class="jeromeFont" style="color:#0073cf;">Help?</a> </li>
      <li> <a href="#login_number" role="button" data-toggle="modal" class="jeromeFont" style="color:#0073cf;">Login</a> </li>
      <li> <a data-toggle="modal" href="#EnterGmail" class="jeromeFont" style="color:#0073cf;">Signup</a> </li>
      <li> <a href="#myModal2" role="button" data-toggle="modal" class="jeromeFont" style="color:#0073cf;"> <i class="fa fa-user-plus"></i></a> </li>

  </nav>';
}else {
  echo '<nav>
    <ul>
      <li> <a href="#whatWedo" class="jeromeFont" style="color:#0073cf;">What we do</a> </li>
      <li> <a href="#help" class="jeromeFont" style="color:#0073cf;">Help?</a> </li>
      <li> <a href="transaction.php" class="jeromeFont" style="color:#0073cf;">Transaction</a> </li>
      <li> <a href="#customerSide" role="button" data-toggle="modal" class="jeromeFont" style="color:#0073cf;" id="#customer_name">'.$_SESSION["customer_name"].'<i class="fa fa-user-cog"></i></a> </li>
    </ul>
  </nav>';
}
 ?>
