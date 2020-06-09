<?php include_once('libs/login_user.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/master.css">
    <script src="js/jquery.min.js" charset="utf-8"></script>
    <script type="text/javascript">
      $(function(){
        $('#show_register').click(function(){
          $('.login_form').hide();
          $('.register_form').show();
          return false;
        });
        $('#show_login').click(function(){
          $('.login_form').show();
          $('.register_form').hide();
          return false;
        });
      });
    </script>
  </head>
  <body>
    <div id="mainWrapper">
      

      <div id="content">
        <?php if (isset($error)) {
          // code...
          echo '<div class="alert alert-error">'.$error.'</div>';
        } ?>
        <div class="login_form">
          <h2>Login Here</h2>
          <div id="form">
              <form action="login.php" method="post">
                <div class="form_elements">
                  <label for="Username">Username</label>
                  <input type="text" name="login_username" id="login_username">
                </div>
                <div class="form_elements">
                  <label for="Password">Password</label>
                  <input type="password" name="login_password" id="login_password">
                </div>
                <div class="form_elements">
                  <input type="submit" name="login" id="login" value="Login" class="btn btn-success">
                </div>
                <br />
                <a href="#" id="show_register"> Don't have an account ?</a>
              </form>
          </div>
        </div>
        <div class="register_form">
        <h2>Register Here</h2>
        <div id="form">
            <form action="login.php" method="post">
              <div class="form_elements">
                <label for="Firstname">Firstname</label>
                <input type="text" name="firstname" id="firstname">
              </div>
              <div class="form_elements">
                <label for="Lastname">Lastname</label>
                <input type="text" name="lastname" id="lastname">
              </div>
              <div class="form_elements">
                <label for="cellphoneNumber">Phone Number</label>
                <input type="text" name="cellphoneNumber" id="cellphoneNumber">
              </div>
              <div class="form_elements">
                <label for="Email">Email</label>
                <input type="text" name="gmail" id="gmail">
              </div>
              <div class="form_elements">
                <label for="Address">Address</label>
                <input type="text" name="address" id="address">
              </div>
              <div class="form_elements">
                <label for="Username">Username</label>
                <input type="text" name="username" id="username">
              </div>
              <div class="form_elements">
                <label for="Password">Password</label>
                <input type="password" name="password" id="password">
              </div>
              <div class="form_elements">
                <label for="Repassword">Re-password</label>
                <input type="password" name="repassword" id="repassword">
              </div>
              <div class="form_elements">
                <input type="submit" name="register" id="register" class="btn btn-success" value="Submit"/>
              </div>
              <br />
              <a href="#" id="show_login"> Already have an account ?</a>
            </form>

        </div>
        </div>
      </div> <!-- end content -->


    </div><!-- end of mainWrapper -->
  </body>
</html>
