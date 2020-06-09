<?php session_start();
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
    <span class="loader"><span class="loader-inner"></span></span> -->
  </div>
<?php include_once('libs/aside.php'); ?>
    <!-- header -->
    <header>
      <?php include_once('libs/nav.php'); ?>
    </header>
    <!-- content -->

      <section>
      <div class="contain">
      <div class="custom_box">
        <h1>Load Republic V.1</h1>
        <p>How it works?</p>
        <div class="custom_option">
          <ul>
            <li><i class="fa fa-mobile-alt fa-lg"></i></li>
            <li><i class="fa fa-phone fa-lg"></i></li>
            <li><i class="fa fa-envelope-open-text fa-lg"></i></li>
            <li><i class="fa fa-sim-card fa-lg"></i></li>
            <li><i class="fa fa-broadcast-tower fa-lg"></i></li>
            <li><i class="fa fa-store-alt fa-lg"></i></li>
            <li><i class="fa fa-cash-register fa-lg"></i></li>
            <li><i class="fa fa-tags fa-lg"></i></li>
            <li><i class="fa fa-ad fa-lg"></i></li>
          </ul>
          <ul>
            <li> <a>Mobile</a> </li>
            <li> <a>Phone</a> </li>
            <li> <a>Message</a> </li>
            <li> <a>Datacard</a> </li>
            <li> <a >Signal</a> </li>
            <li> <a>Store</a> </li>
            <li> <a>Register</a> </li>
            <li> <a>Promos</a> </li>
            <li> <a>Advertisment</a> </li>
          </ul>
        </div>
        <div class="box2">
          <div class="custom_label">
            <ul>
              <li>Mobile Number(+63)</li>
              <li>Operator</li>
              <li>Amount</li>
            </ul>
          </div>
          <div class="custom_input">
            <div id="customer_name" class="hidden"><?php if (isset($_SESSION['customer_name'])) {
              echo $_SESSION['customer_name'];
            } ?></div>

              <form class="form-inline" id="IdCustom">
                <input type="number" name="number" id="loadnumber" placeholder="Ex. 09xxxxxxxxx" class="formerror_error"  onkeydown="javascript: return event.keyCode == 69 ? false : true" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength = "11">
                <!-- <input type="text" name="operator" id="loadoperator" placeholder="Ex. Globe" class="btn-lg formerror_error form-control" maxlength="20"> -->
                <div class="form-group">
                  <select id="loadoperator">
                    <option value="" disabled selected>Select your option</option>
                    <option>Globe</option>
                    <option>Smart</option>
                  </select>
                </div>
                <input type="number" name="amount" id="loadamount" placeholder="Ex. 10.00" class="formerror_error">
                <button type="submit" name="loadbutton" id="loadbutton">Go</button>
              </form>
          </div>
        </div>
      </div>
        <div class="section1">
          <h4>Featured Offers</h4>
          <div class="image_ads">
              <a href="#" class="thumbnail">
                <img src="images/Payback-250219.jpg" alt="...">
              </a>
        </div>
        <div class="image_ads">
            <a href="#" class="thumbnail">
              <img src="images/ola.png" alt="...">
            </a>
      </div>
      <div class="image_ads">
          <a href="#" class="thumbnail">
            <img src="images/New-User.png" alt="...">
          </a>
    </div>
    <div class="image_ads">
        <a href="#" class="thumbnail">
          <img src="images/KYC.png" alt="...">
        </a>
  </div>
  <div class="image_ads">
      <a href="#" class="thumbnail">
        <img src="images/MGM-250219.jpg" alt="...">
      </a>
</div>
<div class="image_ads">
    <a href="#" class="thumbnail">
      <img src="images/MoneyTransfer.png" alt="...">
    </a>
</div>
</div>
        <div class="section1" id="whatWedo">
          <h2>What We Do</h2>
      <p>Simple, fast and Hassle Free payments</p>
        </div>
        <div class="section1" id="whatWedo">
          <h2>Mobile Recharge</h2>
<p>
  Mobile phones are an intrinsic part of our lives and with association so is mobile recharge. Online mobile recharge gives you the liberty to recharge your mobile phone number anytime and from anywhere - be it from home, office, restaurant or holiday and all you need is internet access. When you think of easy recharge options,load is the best.

Mobikwik is India's No. 1 Online Recharge site for Airtel, Vodafone, Idea, Tata Indicom,Reliance, Bsnl, Aircel, Tata Docomo.load does not charge you over any online mobile recharges done and you can save your time, effort and money. Browse for the cheapest talk time & data plans usingload.com
.

You can do prepaid online recharge and bill payments for any number, recharge for your friends and family with ease usingload. Recharge through Net Banking, Debit Card, Credit Card, Visa or Master Card andload wallet. HDFC, SBI, CITI & ICICI banks and a host of other banks supports Net Banking online recharge with ease.
</p>
      </div>
      <hr>
      <div class="section1" id="help">
        <h2>Secure Online DTH RechargeMake Your Electricity Bill Payment Online Without Any Hassles!</h2>
        <p>
          MobiKwik provides you with a secure way to make your electricity bill online payments much easier, without worrying about the hassles of online security and authenticity. It provides you with a convenient medium for all of your electricity bill payments online, facilitated through partnerships with various electricity providers to ensure that you can pay electricity bills without any worries. Why go through the trouble of tracking down and making payments in crowded outlets, when you can pay your electricity bill online easily in seconds. MobiKwik provides you with the perfect blend of secure online payment methods and accessibility to ensure that you pay your electricity bills on time, without worrying about loss of personal information or other discrepancies.
        </p>
      </div>
      </div>
      <hr>
        <div class="footer">
          <div class="contain">


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
        <?php include_once('libs/footer.php');
        if (isset($_GET['gmail']) && isset($_GET['token'])) {
          $gmail=$_GET['gmail'];
          $token=$_GET['token'];
          echo "<script>$('#firstTimeLogin').modal('show')</script>";
        }


        ?>
      </section>
    </div>
    <div class="clearfix"></div>
        <!-- footer -->
    <footer> <p>&copy; 2019 STI (RECTO) | All rights reserved. | Softwen Version 1 </p> </footer>
    <?php include_once("modals/login.php"); ?>
    <?php include_once("modals/signup.php"); ?>
    <?php include_once("modals/sideModal.php"); ?>
    <?php include_once("modals/allside.php"); ?>
    <div class="clearfix"></div>
    <script src="js/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="notifsystem/dist/alert_view.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="js/custom.js" charset="utf-8"></script>
  </body>
</html>
