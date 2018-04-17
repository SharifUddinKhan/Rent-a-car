<?php include'includes/header.php'; ?>


<?php 
  
  
    if(isset($_GET['r_id'])){
      
      $the_rent_id = $_GET['r_id'];
  
                            
                            $query = "SELECT * FROM car_rent WHERE rent_id = {$the_rent_id} ";
                            $car_query = mysqli_query($connection,$query);
                            
                            while($row = mysqli_fetch_assoc($car_query)){
                               
                                $rent_id = $row['rent_id'];
                                $user_name = $row['user_name'];                              
                                $service_date = $row['service_date'];
                            }
                            
                           // print_r($_POST);

                            if(isset($_POST['submit'])){

                              $service_date = $_POST['service_date'];
                              
        
                                $query = "UPDATE car_rent SET ";  
                                $query .= "service_date = '{$service_date}' ";                               
                                $query .= "WHERE rent_id = {$the_rent_id} ";
                                
                                $update_query = mysqli_query($connection,$query);
                                comfirmQuery($update_query);
                                header('Location: viewProfile.php');
                                
                                //echo "<p class='bg-success'>Rent Updated. </p>";
                            }
              }
     ?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
        <div class="col-md-12">
         
        </div>

            
          
			<div class="col-sm-12 col-md-6 col-sm-offset-3 ">
			<h2>Changing Booking date</h2>

			<form action="" method="post">

	      <div class="form-group">
                    <label for="name">Rent Id</label>
                    <input type="text" class="form-control" name="rent_id" value="<?php echo $rent_id; ?>" required>
                  </div>
        <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" class="form-control" name="user_name" value="<?php echo  $user_name; ?>" required>
                  </div> 
			
			<div class="form-group">
                    <label for="serviceDate">Current Booking Date:</label>
                    <input id="datepicker" class="form-control" type="date"  value="<?php echo $service_date; ?>" name="service_date" required/>
                  </div>
			
                 
				  <div class="form-group">
                     
                     <input type="submit" name="submit" value="Booking Update">
                  </div>
				</form>  
				
			</div>
  

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

 <?php include'includes/footer.php'; ?> 