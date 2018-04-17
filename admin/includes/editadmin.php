<?php 

if(isset($_GET['edit_admin'])){
	
   $the_user_id = $_GET['edit_admin'];
  
   $query = "SELECT * FROM user WHERE user_id = {$the_user_id}";
   $select_user_query = mysqli_query($connection,$query);
    
   while($row = mysqli_fetch_assoc($select_user_query)){
   	 
   	$user_id = $row['user_id'];
   	$user_name = $row['user_name'];
   	$user_password = $row['user_password'];
   	$user_firstname = $row['user_firstname'];
   	$user_lastname = $row['user_lastname'];
   	$user_email = $row['user_email'];

    $user_role = $row['user_role'];

}


if(isset($_POST['update_admin'])){

	$user_name = $_POST['username'];
	$user_password = $_POST['user_password'];
	$user_firstname = $_POST['user_firstname'];
	$user_lastname = $_POST['user_lastname'];
	$user_email = $_POST['user_email'];

    $user_role = $row['user_role'];


		
		$query = "UPDATE user SET ";
		$query .= "user_firstname = '{$user_firstname}', ";
		$query .= "user_lastname = '{$user_lastname}', ";
       	$query .= "user_name = '{$user_name}', ";
		$query .= "user_email = '{$user_email}', ";
		$query .= "user_password = '{$user_password}' ";
		$query .= "WHERE user_id = {$the_user_id} ";
		
		$update_user_query = mysqli_query($connection,$query);
		comfirmQuery($update_user_query);
		
		
        echo "<script>alert('User Updated')</script>";
	    echo "<script>window.open('admins.php','_self')</script>";
  }

}else{
	
	header("Location:index.php");
}
							
 ?>

<form action="" method="post" enctype="multipart/form-data">

	<div class="form-group">
		<label for="userFirstName">First Name</label>
		<input value="<?php echo $user_firstname; ?>" type="text" class="form-control" name="user_firstname">
	</div>
	
	<div class="form-group">
		<label for="userLastName">Last Name</label>
		<input value="<?php echo $user_lastname; ?>" type="text" class="form-control" name="user_lastname">
	</div>


	<div class="form-group">
		<label for="Username">Username</label>
		<input value="<?php echo $user_name; ?>" type="text" class="form-control" name="username">
	</div>


	<div class="form-group">
		<label for="userEmail">Email</label>
		<input value="<?php echo $user_email; ?>" type="email" class="form-control" name="user_email">
	</div>
	
    
	<div class="form-group">
		<label for="userPassword">Password</label>
		<input value="<?php echo $user_password; ?>" type="password" class="form-control" name="user_password">
	</div>

	
	<div class="form-group">
        <input class="btn btn-primary" type="submit" name="update_admin" value="Update Details">
     </div>

</form>