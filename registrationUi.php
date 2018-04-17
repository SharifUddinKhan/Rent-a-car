<?php 

    include 'includes/header.php';

	if(isset($_POST['registration'])){


	    $user_firstname = $_POST['user_firstname'];
		$user_lastname = $_POST['user_lastname'];
		$user_name = $_POST['user_name'];		
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];
        
        $user_role = $_POST['role'];
        
        if($user_firstname == '' OR $user_lastname == '' OR $user_name == '' OR $user_email == '' OR $user_password == ''){
			echo "<script>alert('Please fillup all fileds')</script>";
		}else{
		
		
		$query = "INSERT INTO user(user_firstname,user_lastname,user_name,user_email,user_password,user_role) ";
		$query .= "VALUES ('{$user_firstname}','{$user_lastname}','{$user_name}','{$user_email}','{$user_password}','{$user_role}' )";
		
		$create_user_query = mysqli_query($connection,$query);
		
		comfirmQuery($create_user_query);
 	    echo "<script>alert('Thank You to registration to our site')</script>";
			
		}
	}
 ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">
        <div class="col-md-12">
        </div>

            
            <div class="col-sm-5 col-md-6 col-sm-offset-3 ">
                
                <h1>Registration</h1><br />
                 <form action="" method="post" class="form col-md-12 center-block">
            <div class="form-group">
		<label for="userFirstName">First Name</label>
		<input type="text" class="form-control" name="user_firstname" required>
	</div>
	
	<div class="form-group">
		<label for="userLastName">Last Name</label>
		<input type="text" class="form-control" name="user_lastname" required>
	</div>
	

	<div class="form-group">
		<label for="Username">Username</label>
		<input type="text" class="form-control" name="user_name" required>
	</div>


	<div class="form-group">
		<label for="userEmail">Email</label>
		<input type="email" class="form-control" name="user_email" required>
	</div>
	
	
	<div class="form-group">
		<label for="userPassword">Password</label>
		<input type="password" class="form-control" name="user_password" required>
	</div>
            <div class="form-group">
              
                <input type="hidden" class="form-control" name="role" value="User">
                
              <button class="btn btn-primary" name="registration">Submit</button><br />
            </div>
          </form>
            </div>
  

        </div>

    </div>
    <!-- /.container -->
 