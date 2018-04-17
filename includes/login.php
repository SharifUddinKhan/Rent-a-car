<?php include 'db.php'; ?>
<?php session_start(); ?>
<?php 

	if(isset($_POST['login'])){
		
		 $username = $_POST["username"];
		 $password = $_POST["password"];
		
		$username = mysqli_real_escape_string($connection,$username);
		$password = mysqli_real_escape_string($connection,$password);
		
		$query = "SELECT * FROM user WHERE user_name = '{$username}'";
		$select_admin_query = mysqli_query($connection,$query);
		
		if(!$select_admin_query){
			die("Query Failed".mysqli_error($connection));
		}
		
		while ($row = mysqli_fetch_array($select_admin_query)){
			
			 $db__user_id = $row['user_id'];
			 $db__user_firstname = $row['user_firstname'];
			 $db__user_lastname = $row['user_lastname'];
             $db__user_name = $row['user_name'];
             $db__user_email = $row['user_email'];
			 $db__user_password = $row['user_password'];
			 $db__user_role = $row['user_role'];
		}
        
        
		
		if($password == $db__user_password){
		    $_SESSION['userid'] = $db__user_id;
			$_SESSION['username'] = $db__user_name;
			$_SESSION['firstname'] = $db__user_firstname;
			$_SESSION['lastname'] = $db__user_lastname;
            $_SESSION['email'] = $db__user_email;
			$_SESSION['role'] = $db__user_role;            

		      if($_SESSION['role'] == 'Admin'){	
	           	header("Location:../admin");
                }else{
                 header("Location:../index.php"); 
                }
		}else{
		      
			header("Location:../loginUi.php");
		}
	}

?>