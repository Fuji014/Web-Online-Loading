<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="sideBox">
          <div class="row">
            <div class="col-md-4">
            <i class="fa fa-bolt"></i>
            </div>
            <div class="col-md-8">
              <p>LOAD REPUBLIC</p>
              <p>Ez Load</p>
            </div>
          </div>
          <button type="button" class="btn btn-primary pull-left" name="sideLogin" id="sideLogin">Login</button>
          <button type="button" class="btn btn-default pull-right" name="sideSignup" id="sideSignup">Signup</button>
        </div>
      </div>
      <div class="modal-body">
        <ul class="fa-ul">
          <li><span class="fa-li"><i class="fas fa-tags fa-lg"></i></span> <a href="#promoss" role="button" data-toggle="modal" class="jeromeFontBlue">PROMOS</a> </li>
          <li><span class="fa-li"><i class="fas fa-exchange-alt fa-lg"></i></span> <a href="#gmailId" role="button" data-toggle="modal" class="jeromeFontBlue">CONTACT US</a> </li>
          <li><span class="fa-li"><i class="fas fa-exchange-alt fa-lg"></i></span> <a href="#services" role="button" data-toggle="modal" class="jeromeFontBlue">SERVICES</a> </li>
          <li><span class="fa-li"><i class="fas fa-cart-plus fa-lg"></i></span> <a href="#offers" role="button" data-toggle="modal" class="jeromeFontBlue">OFFERS</a> </li>
          <li><span class="fa-li"><i class="fas fa-power-off fa-lg"></i></span><a href="logout.php" class="jeromeFontBlue">LOGOUT</a></li>
        </ul>
      </div>

    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->
<!-- end  -->
<div class="modal right fade" id="customerSide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="sideBox">
          <div class="row">
            <div class="col-md-4">
            <i class="fa fa-bolt"></i>
            </div>
            <div class="col-md-8">
            <?php if (isset($_SESSION['customer_name'])) {
              $output = '<p>'.strtoupper($_SESSION['customer_name']).'</p>';
              echo $output;
            }else {
              header("location: error.php");
            } ?>
              <p>Welcome</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <ul class="fa-ul">
          <li><span class="fa-li"><i class="fas fa-home fa-lg"></i></span> <a href="dashboard.php" class="jeromeFontBlue">DASH BOARD</a> </li>
          <li><span class="fa-li"><i class="fas fa-user fa-lg"></i></span> <a href="profile.php" class="jeromeFontBlue">PROFILE</a> </li>
          <li><span class="fa-li"><i class="fas fa-rocket fa-lg"></i></span> <a href="start.php" class="jeromeFontBlue">GET STARTED</a> </li>
          <li><span class="fa-li"><i class="fas fa-envelope fa-lg"></i></span> <a href="#" class="jeromeFontBlue">MESSAGE</a> </li>
          <li><span class="fa-li"><i class="fas fa-power-off fa-lg"></i></span><a href="logout.php" class="jeromeFontBlue">LOGOUT</a></li>
        </ul>
      </div>

    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->

<!-- mobile verify modal -->
<div class="modal right fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="sideBox">
          <div class="row">
            <div class="col-md-4">
            <i class="fa fa-bolt"></i>
            </div>
            <div class="col-md-8">
              <p>LOAD REPUBLIC</p>
              <p>Ez Load</p>
            </div>
          </div>
          <button type="button" class="btn btn-primary" name="sideLogin" id="sideLogin">Login</button>
          <button type="button" class="btn btn-default" name="sideSignup" id="sideSignup">Signup</button>
        </div>
      </div>
      <div class="modal-body">
        <ul class="fa-ul">
          <li><span class="fa-li"><i class="fas fa-home fa-lg"></i></span>Home</li>
          <li><span class="fa-li"><i class="fas fa-store-alt fa-lg"></i></span>Store</li>
          <li><span class="fa-li"><i class="fas fa-tag fa-lg"></i></span>Promos</li>
          <li><span class="fa-li"><i class="fas fa-truck-loading fa-lg"></i></span>Top up</li>
          <li><span class="fa-li"><i class="fas fa-question-circle fa-lg"></i></span>How to use?</li>
        </ul>
      </div>

    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->
<!-- end  -->
<div class="modal right fade" id="customerSide" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="sideBox">
          <div class="row">
            <div class="col-md-4">
            <i class="fa fa-bolt"></i>
            </div>
            <div class="col-md-8">
            <?php if (isset($_SESSION['customer_name'])) {
              $output = '<p>'.strtoupper($_SESSION['customer_name']).'</p>';
              echo $output;
            }else {
              header("location: error.php");
            } ?>
              <p>Welcome</p>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-body">
        <ul class="fa-ul">
          <li><span class="fa-li"><i class="fas fa-home fa-lg"></i></span>Profile</li>
          <li><span class="fa-li"><i class="fas fa-store-alt fa-lg"></i></span>Transaction</li>
          <li><span class="fa-li"><i class="fas fa-tag fa-lg"></i></span>Promos</li>
          <li><span class="fa-li"><i class="fas fa-truck-loading fa-lg"></i></span>Message</li>
          <li><span class="fa-li"><i class="fas fa-question-circle fa-lg"></i></span>Log Out</li>
        </ul>
      </div>

    </div><!-- modal-content -->
  </div><!-- modal-dialog -->
</div><!-- modal -->
<!-- mobile verify modal -->
<div id="verifyNumber" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2> <b  class="jeromeFont" style="color:#fff;">VERIFY NUMBER</b></h2>
            </div>
            <div class="modal-body">
                <form class="" action="index.html" method="post">
                  <form class="form-group">
                    <label for="verNumber" class="jeromeFont">Number</label>
                    <input class="form-control InputBottom jeromeFontBlue" type="number" id="verNumber" name="verNumber" placeholder="ex. 09xxxxxxxxx">
                  </form>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">CLOSE</button>
                <button type="button" name="verSubmit" id="verSubmit" class="btn btn-primary">SUBMIT</button>
            </div>
        </div>
    </div>
</div>

<!-- mobile clik modal -->
<div id="confirmDiv" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h2> <b  class="jeromeFont" style="color:#fff;">VERIFY NUMBER</b></h2>
            </div>
            <div class="modal-body">
                <form class="" action="index.html" method="post">
                  <form class="form-group">
                    <div id="personNumHidden" class="hidden"></div>
                    <label for="confirmNumber" class="jeromeFont">Verification Code</label>
                    <input class="form-control InputBottom jeromeFontBlue" type="number" id="confirmNumber" name="confirmNumber" placeholder="my6digit.Code">
                  </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">BACK</button>
                <button type="button" name="verSubmit" id="confirmSubmit" class="btn btn-primary">CONFIRM</button>
            </div>
        </div>
    </div>
</div>
