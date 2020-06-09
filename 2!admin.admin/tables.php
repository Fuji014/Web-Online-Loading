<?php include_once( 'libs/listTables.php' );
include_once( 'libs/deleteData.php' );
if (isset($_SESSION['admin_username'])) {
  // code...
  $session_name = $_SESSION['admin_username'];
}else {
  header('location: login.php');
};
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Manage Tables</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Load Republic</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Dashboard</a></li>
            <li class="active"><a href="tables.php">Tables</a></li>
            <li><a href="pages.php">Pages</a></li>
            <li><a href="posts.php">Posts</a></li>
            <li><a href="users.php">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, <?php echo $session_name; ?></a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Tables <small>Manage Site Tables</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                <li><a href="#">Add Post</a></li>
                <li><a href="#">Add User</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.php">Dashboard</a></li>
          <li class="active">Tables</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
            <?php include_once('libs/sidebar.php'); ?>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Tables</h3>
              </div>
              <div class="panel-body">
                <!-- content -->
                <div class="table_switcher">
                  <form class="well form-inline" method="post" action="switch_tables.php?referrer=<?php echo $_SERVER['REQUEST_URI']; ?>">
                    <label class="table_font" for="Table Name">Table Name: </label>
                    <select id="select_table" name="table_name">
                      <?php
                        echo '<option value="'.$session_table_name.'" selected="selected">'.$session_table_name.'</option>';
                        foreach($tables_left as $key => $value){
                        echo '<option value="'.$value.'">'.$value.'</option>';
                        }
                      ?>
                    </select>
                    <input type="submit" name="switch_table" value=" Switch Table " class="btn btn-default"/>
                    <span class="right"><a href="create_new.php" class="btn btn-default pull-right"><span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span> Insert New Value </a></span>
                  </form>
                </div><!-- end table_switcher -->

                <?php
                  if(!isset($_SESSION['SESSION_TABLE_NAME']))
                  {
                     echo '<div class="alert alert-error"><p>Please select table </p></div>';
                    die;
                  }
                ?>
                <?php
                  include_once( 'libs/getData.php' );
                ?>
                  <div class="table-responsive">
                  <table class="table table-striped table-bordered table-condensed">
                    <thead>
                      <tr>
                        <?php if($data !== 0) { foreach($fields_name as $f) {
                          echo '<th>'.$f.'</th>';
                        }
                        echo '<th>Actions</th>';
                        } ?>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                          if($data !== 0) { foreach($data as $key => $value)
                          {
                            echo '<tr>';
                            foreach($fields_name as $f){

                              echo '<td>'.$value[$f].'</td>
                              ';

                            }
                            echo '<td><a href="edit.php?id='.$value['id'].'"><i class="glyphicon glyphicon-edit"></i></a> <a href="delete.php?id='.$value['id'].'"><i class="glyphicon glyphicon-trash"></i></a></td>

                            </tr>';

                          }

                          }
                        ?>
                    </tbody>
                  </table>
                  </div>
                <!-- end content -->
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>&copy; 2019 STI (RECTO) | All rights reserved. | Softwen Version 1 </p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://code.jquery.com/jquery-1.9.1.min.js" charset="utf-8"></script>
    <script src="js/datatables.js" charset="utf-8"></script>
    <!-- <script src="js/1.12.4/jquery.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('table.table').DataTable();
        })
    </script>
  </body>
</html>
