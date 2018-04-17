<?php include'includes/header.php'; ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">
        <div class="col-md-12">
        </div>

            
            <div class="col-sm-5 col-md-6 col-sm-offset-3 ">
                
                <h1>Login</h1><br />              
                <form action="includes/login.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="User Name">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <div class="form-group">
                     <input class="btn btn-primary" type="submit" name="login" value="Submit">
                     <a style="float: right;" href="registrationUi.php">Regisration</a>
                  </div>
               </form>
            </div>
  

        </div>

    </div>
    <!-- /.container -->
 