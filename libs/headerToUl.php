<div class="headerleft">
    <ul>
      <li><i class="fa fa-broadcast-tower fa-3x"></i></li>
      <li><a href="dashboard.php">DASHBOARD</a></li>
      <li><a href="profile.php">PROFILE</a></li>
      <li><a href="start.php">GET STARTED</a></li>
    </ul>
</div>
<div class="headerRight">
  <ul>
    <li><button type="button" name="button"> <a href="#paypalRed" role="button" data-toggle="modal" class="jeromeFontBlue">ADD LOAD</a> </button></li>
    <li><a href="#messages" role="button" data-toggle="modal" class="jeromeFontBlue">MESSAGE</a></li>
    <?php echo '<li><a class="jeromeFont">'.strtoupper($_SESSION['customer_name']).'</a></li>'; ?>
  </ul>
