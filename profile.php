<?php
session_start();
if (!isset($_SESSION['customer_name'])) {
  // code...
  header('location: dashboard.php');
}
include_once('libs/actions.php');

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
    <aside class="sidebar">
      <ul>
        <li> <a href="#"> <h1>Load Republic</h1> </a> </li>
        <li> <a href="#"> <span class="glyphicon glyphicon-tags"></span> Promos</a> </li>
        <li> <a href="#"> <span class="glyphicon glyphicon-share-alt"></span> Transfer Load</a> </li>
        <li> <a href="#"> <span class="glyphicon glyphicon-envelope"></span> Message</a> </li>
        <li> <a href="#"> <span class="glyphicon glyphicon-shopping-cart"></span> Local Stores</a> </li>
        <li> <a href="#"> <span class="glyphicon glyphicon-bullhorn"></span> Offers</a> </li>
      </ul>
      <hr>
      <ul>
        <li> <a href="#"> <span class="glyphicon glyphicon-lock"></span>Payment Gateway</a> </li>
        <li> <a href="#"> <span class="glyphicon glyphicon-star-empty"></span> Magic</a> </li>
      </ul>
    </aside>
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
        <div class="boxshadow">
          <h2> <i class="fa fa-user fa-lg"></i> <b  class="jeromeFont" style="color:#0073cf;">  Profile</b></h2>
          <hr>
          <form class="form-group" action="index.html" method="post">
          <div class="row">
            <div class="col-md-2">
                <h2> <b  class="jeromeFont" style="color:#0073cf;">ACCOUNT</b></h2>
            </div>
            <div class="col-md-5">
                <label for="email" class="jeromeFont">Email</label>
                <input class="form-control InputBottom jeromeFontBlue" type="text" name="email" placeholder="myEmail" value ="<?php if(isset($gmail)){echo $gmail;}?>">
            </div>
            <div class="col-md-5">
                <label for="number" class="jeromeFont">Number</label>
                <input class="form-control InputBottom jeromeFontBlue" type="number" name="number" placeholder="myNumber" value="<?php if(isset($gmail)){echo $number;}?>">
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-5">
                <label for="password" class="jeromeFont">New Password</label>
                <input class="form-control InputBottom jeromeFontBlue" type="password" name="password" placeholder="myPasswod" value="">
            </div>
            <div class="col-md-5">
                <label for="repassword" class="jeromeFont">Retype Password</label>
                <input class="form-control InputBottom jeromeFontBlue" type="password" name="repassword" placeholder="myNewpassword" value="">
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <h2> <b  class="jeromeFont" style="color:#0073cf;">PROFILE</b></h2>
            </div>
            <div class="col-md-5">
                <label for="firstname" class="jeromeFont">First Name</label>
                <input class="form-control InputBottom jeromeFontBlue" type="text" placeholder="myFirstname" name="firstname" value="<?php if(isset($gmail)){echo $firstname;}?>">
            </div>
            <div class="col-md-5">
                <label for="lastname" class="jeromeFont">Last Name</label>
                <input class="form-control InputBottom jeromeFontBlue" type="text" placeholder="myLastname" name="lastname" value="<?php if(isset($gmail)){echo $lastname;}?>">
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-5">
                <label for="username" class="jeromeFont">Username</label>
                <input class="form-control InputBottom jeromeFontBlue" type="text" name="username" placeholder="myUsername" value="<?php if(isset($gmail)){echo $username;}?>">
            </div>
            <div class="col-md-5">
                <label for="address" class="jeromeFont">Address</label>
                <input class="form-control InputBottom jeromeFontBlue" type="text" name="address" placeholder="myAddress" value="<?php if(isset($gmail)){echo $address;}?>">
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <h2> <b  class="jeromeFont" style="color:#0073cf;">PASSWORD</b></h2>
            </div>
            <div class="col-md-10">
                <label for="currentpassword" class="jeromeFont">Current Password</label>
                <input class="form-control InputBottom jeromeFontBlue" type="password" name="currentpassword" placeholder="myCurrentpassword" value="">
            </div>
          </div>
          <br>
          <br>
          <div class="clearfix">
            <!-- <button type="button" class="pull-right" name="button">Back</button>
            <input type="submit" class="pull-right" name="" value="Submit"> -->
            <button type="button" class="btn btn-primary pull-right">SUBMIT</button>
            <button type="button" class="btn btn-default pull-right" data-dismiss="modal">BACK</button>

          </div>

        </div>
          </form>
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
