<?php 

	if(isset($_POST['create_user'])){


	    $user_firstname = $_POST['user_firstname'];
		$user_lastname = $_POST['user_lastname'];
		$user_name = $_POST['user_name'];		
		$user_email = $_POST['user_email'];
		$user_password = $_POST['user_password'];
        
        $user_role = $_POST['user_role'];
		
		$query = "INSERT INTO user(user_firstname,user_lastname,user_name,user_email,user_password,user_role) ";
		$query .= "VALUES ('{$user_firstname}','{$user_lastname}','{$user_name}','{$user_email}','{$user_password}','{$user_role}' )";
		
		$create_user_query = mysqli_query($connection,$query);
		
		comfirmQuery($create_user_query);
		
        echo "<script>alert('New User Created.')</script>";
        echo "<a href='admins.php'>View All Users</a><br/><br/><br/>";
	}
 ?>


<form action="" method="post" enctype="multipart/form-data">

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
		<label for="userRole">Role</label>
		<select name="user_role" required>
 	        <option value="">Select option</option>
            <option value="User">User</option>
            <option value="Admin">Admin</option>
        </select>
	</div>

	
	<div class="form-group">
		<label for="userPassword">Password</label>
		<input type="password" class="form-control" name="user_password" required>
	</div>
 
	<div class="form-group" required>
        
        <input class="btn btn-primary" type="submit" name="create_user" value="Add New User">
     </div>

</form>