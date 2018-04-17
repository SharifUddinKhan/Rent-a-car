<div class="table-responsive">
 <table class="table">
                          <thead>
                        	<tr>
                        		<th>ID</th>
                        		<th>User Name</th>
                        		<th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                        		<th>Update</th>
                        		<th>Delete</th>
                        		
                        		                  		
                        	</tr>
                          </thead>
                          
                          <tbody>
                          
                          	<?php 
                          	
                          	$query = "SELECT * FROM user";
                          	$user_query = mysqli_query($connection,$query);
                          	
                          	while($row = mysqli_fetch_assoc($user_query)){
                          		 
                          		$user_id = $row['user_id'];
                          		$user_name = $row['user_name'];
                          		$user_password = $row['user_password'];
                          		$user_firstname = $row['user_firstname'];
                          		$user_lastname = $row['user_lastname'];
                          		$user_email = $row['user_email'];
                                
                                $user_role = $row['user_role'];
                          	
                          
                          		echo "<tr>";
                          		echo "<td>$user_id</td>";
                          		echo "<td>$user_name</td>";
                          		echo "<td>$user_email</td>";
                                echo "<td> $user_role</td>";
                                
                                if($user_role == 'Admin'){
                                   echo "<td><a href='admins.php?change_to_user={$user_id}'>User</a></td>"; 
                                }else{
                                    echo "<td><a href='admins.php?change_to_admin={$user_id}'>Admin</a></td>";
                                }
    
                                
    
                          		echo "<td><a href='admins.php?source=editadmin&edit_admin={$user_id}'>EDIT</a></td>";
                          		echo "<td><a onClick=\"javascript:return confirm('Are You sure want to delete this User ?');\" href='admins.php?delete={$user_id}'>DELETE</a></td>";
                          		echo "</tr>";
                          	
                          	}
                          	?>
                         
                          </tbody>
                    </table>
                    
                    
</div>                              
          
                    
           <?php 
           
           	if(isset($_GET['delete'])){
           		
           		
           		$the_user_id = mysqli_real_escape_string($connection,$_GET['delete']);
           		$query = "DELETE FROM user WHERE user_id = {$the_user_id}";
           		$delete_query = mysqli_query($connection,$query);
           		header("Location:admins.php");
           	
           	}
           
           ?>
           
 
           
            <?php 
           
           	if(isset($_GET['change_to_user'])){
           		$the_user_id = $_GET['change_to_user'];
           		
           		$query = "UPDATE user SET user_role = 'User' WHERE user_id = $the_user_id";
           		$change_to_approve_query = mysqli_query($connection,$query);
           		header("Location:admins.php");
           	}
           
           ?>
          
              <?php 
           
           	if(isset($_GET['change_to_admin'])){
           		$the_user_id = $_GET['change_to_admin'];
           		
           		$query = "UPDATE user SET user_role = 'Admin' WHERE user_id = $the_user_id";
           		$change_to_unapprove_query = mysqli_query($connection,$query);
           		header("Location:admins.php");
           	}
           
           ?>