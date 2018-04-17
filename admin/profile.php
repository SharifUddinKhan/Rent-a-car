<?php include'includes/admin_header.php'; ?>

    <div id="wrapper">

<?php include'includes/navigation.php'; ?> 

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Profile
                            
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->
                
                
                <div class="row">
                         <?php 
                
                	if(isset($_SESSION['userid'])){
                		$userid = $_SESSION['userid'];
                		
                		$query = "SELECT * FROM user WHERE user_id = '{$userid}' ";
                		$select_user_profile_query = mysqli_query($connection,$query);
                		
                		while($row = mysqli_fetch_array($select_user_profile_query)){
                			
                			$user_id = $row['user_id'];
                			$user_name = $row['user_name'];
                			$user_password = $row['user_password'];
                			$user_firstname = $row['user_firstname'];
                			$user_lastname = $row['user_lastname'];
                			$user_email = $row['user_email'];
                			$user_role = $row['user_role'];
                		}
                	}
                    ?>
                    
                    <div class="table-responsive">
                      <table class="table">
                         <tr>
                            <td><h4>First Name: </h4></td>
                            <td><?php echo $user_firstname; ?></td>
                        </tr>
                         <tr>
                            <td><h4>Last Name: </h4></td>
                            <td><?php echo $user_lastname; ?></td>
                        </tr>
                        <tr>
                            <td><h4>Email Address: </h4></td>
                            <td><?php echo $user_email; ?></td>
                        </tr>
                        <tr>
                            <td><h4>User Name: </h4></td>
                            <td><?php echo $user_name; ?></td>
                        </tr>
                       
                        <tr>
                            <td><h4>Role: </h4></td>
                            <td><?php echo $user_role; ?></td>
                        </tr>
                       
                        
                      </table>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<?php include 'includes/admin_footer.php'; ?>

   