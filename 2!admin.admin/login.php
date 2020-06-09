<?php include_once('libs/admin_login.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/ckeditor.js"></script>
  </head>
  <body>

    <!-- <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">AdminStrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div>
      </div>
    </nav> -->

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Admin Area <small>Account Login</small></h1>
          </div>
        </div>
      </div>
    </header>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">

            <?php if (isset($error)) {
              // code...
              echo '

    <div class="alert alert-danger">

        <a href="#" class="close" data-dismiss="alert">&times;</a>

        <strong>Invalid! </strong>'.$error.'</div>'

;
            } ?>


            <div id="reg">

              <h4>Authorize Person Only!</h4>


            </div>
            <div id="mainreg">


            <form id="login" action="login.php" class="well" method="post">
                  <div class="form-group">
                    <label>Email Address</label>
                    <input type="text" name="gmail" id="gmail" class="form-control" placeholder="Enter Email">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-danger btn-block" name="login" id="login">Login</button>
                  <br>
                  <center><a href="#"> Forgot Password? </a></center>
              </form>
              </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>&copy; 2019 STI (RECTO) | All rights reserved. | Softwen Version 1 </p>
    </footer>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
