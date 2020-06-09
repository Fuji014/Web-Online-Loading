<?php session_start();
include_once('libs/actions.php');
if (!isset($_SESSION['customer_name'])) {
  // code...
  header('location: dashboard.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Load Republic</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="notifsystem/dist/alert_view.css"/>
    <link rel="stylesheet" href="css/master1.css">
  </head>
  <body>
    <!-- <div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
  </div> -->
    <?php include_once('libs/aside.php'); ?>
    <!-- header -->
    <header>
      <?php include_once('libs/nav.php'); ?>
    </header>
    <!-- content -->

      <section>
      <div class="container">
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
            <li><button  type="button" name="button"><a href="#paypalRed" role="button" data-toggle="modal" class="jeromeFont">ADD LOAD</a></button></li>
            <?php echo '<li><a class="jeromeFont">'.strtoupper($_SESSION['customer_name']).'</a></li>'; ?>
            <li><a href="#">LOAD</a></li>
          </ul>
        </div>
        <div class="clearfix"></div>
        <hr>
        <div class="row">
          <div class="col-md-8">
            <div class="transactionWalletBox1">
              <table class="table table-striped table-hover">
                  <tr>
                    <th class="jeromeFontBlue">TYPE</th>
                    <th class="jeromeFontBlue">NUMBER</th>
                    <th class="jeromeFontBlue">OPERATOR</th>
                    <th class="jeromeFontBlue">AMOUNT</th>
                    <th class="jeromeFontBlue">DATE</th>
                    <th class="jeromeFontBlue">TIME</th>
                    <th class="jeromeFontBlue">STATUS</th>
                  </tr>

                    <?php include_once('libs/trTable.php') ?>

                </table>
            </div>

          </div>
          <div class="col-md-4">
            <div class="transactionWalletBox2">
                <div class="walletHead">
                  <div class="row">
                    <div class="col-md-4">
                      <i class="fa fa-wallet fa-3x"></i>
                    </div>
                    <div class="col-md-8">
                      <p class="wallet jeromeFont">Php <?php echo $userBal; ?></p>
                     <p> <a href="#paypalRed" role="button" data-toggle="modal" class="jeromeFont">Wallet Balance</a> </p>
                    </div>
                  </div>
                  <hr>
                </div>
                <a href="#" class="jeromeFont"><b>Add wallet Balance</b><i class="fa fa-plus-square fa-lg pull-right"></i></a>

            </div>
          </div>
          <hr>
        </div>
        <div class="clearfix">

        </div>
      </div>
      <hr>
        <div class="footer">
          <div class="container">
          <ul>
            <li> <a href="#">Services</a> </li>
            <li> <a href="#">Mobile Recharge</a> </li>
            <li> <a href="#">Electricity Bill Payment</a> </li>
            <li> <a href="#">DTH Bill Payment</a> </li>
            <li> <a href="#">Gas Bill Payment</a> </li>
            <li> <a href="#">EMI Payments</a> </li>
            <li> <a href="#">Offers</a> </li>
            <li> <a href="#">Bus-Online Bus Booking</a> </li>

          </ul>
          </div>
        </div>
        <?php include_once('libs/footer.php'); ?>
      </section>
    </div>
    <div class="clearfix"></div>
        <!-- footer -->
    <footer> <p>&copy; 2019 STI (RECTO) | All rights reserved. | Softwen Version 1 </p> </footer>
    <?php include_once("modals/login.php"); ?>
    <?php include_once("modals/signup.php"); ?>
    <?php include_once("modals/sideModal.php"); ?>
    <div class="clearfix"></div>
    <script src="js/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="notifsystem/dist/alert_view.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/custom.js" charset="utf-8"></script>
  </body>
</html>
