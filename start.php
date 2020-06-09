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
        <?php include_once('libs/headerToUl.php') ?>
        </div>
        <div class="clearfix"></div>
        <hr>
        <h1 class="jeromeTitle"><i class="fa fa-tachometer-alt fa-lg"></i> Start Here</h1><div id="customer_name" class="hidden"><?php echo $_SESSION['customer_name']; ?></div>
        <div class="row">
          <div class="col-md-8">
            <div class="getStart">
              <div class="row">
                <div class="col-md-4">
                  <label for="verifyGmail" class="wrap-icon-gstarted"> <i class="fa fa-paper-plane fa-2x"></i> </label>
                  <a href="#" class="jeromeFont">Email <?php echo $gmailConf; ?></a>
                </div>
                <div class="col-md-4">
                  <label for="verifyNumber" class="wrap-icon-gstarted"> <i class="fa fa-mobile-alt fa-2x"></i> </label>
                  <a href="#verifyNumber" role="button" data-toggle="modal" class="jeromeFont">Number <?php echo $numConf; ?></a>
                </div>
                <div class="col-md-4">
                  <label for="createTransaction" class="wrap-icon-gstarted"> <i class="fa fa-rocket fa-2x"></i> </label>
                  <a href="#" class="jeromeFont">Transaction <?php echo $transacConf; ?></a>
                </div>
              </div>
            </div>
            <div class="transactionWalletBox1">
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
                     <p> <a href="#walletBal" role="button" data-toggle="modal" class="jeromeFont">Wallet Balance</a> </p>
                    </div>
                  </div>
                  <hr>
                </div>
                <a href="#paypalRed" role="button" data-toggle="modal" class="jeromeFont"><b>Add wallet Balance</b><i class="fa fa-plus-square fa-lg pull-right"></i></a>

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
    <?php include_once("modals/allside.php") ?>
    <div class="clearfix"></div>
    <script src="js/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="notifsystem/dist/alert_view.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/custom.js" charset="utf-8"></script>
  </body>
</html>
