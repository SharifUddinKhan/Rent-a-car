<?php include 'includes/header.php'; ?>


  <?php 

                        if(isset($_GET['c_id'])){
            
                            $the_car_id = $_GET['c_id'];
                
                        	$query = "SELECT * FROM cars where car_id ='$the_car_id' ";
                          	$select_all_car_query = mysqli_query($connection,$query);
                          	
                          	while($row = mysqli_fetch_assoc($select_all_car_query)){
                          		 
                          		$car_id = $row['car_id'];
                          		$car_maker_company = $row['car_maker_company'];
                          		$car_brand = $row['car_brand'];
                          		$car_model = $row['car_model'];
                          		$car_color = $row['car_color'];
                          		$car_cc = $row['car_cc'];
                          		$car_code = $row['car_code'];
                          		$car_image = $row['car_image'];
                          		$car_availability = $row['car_availability'];
                               
                   
                              
                 ?>

   <!-- Page Content -->
    <div class="container">

        <div class="row">

             

            <div class="col-md-12 col-md-offset-2">

                <div class="row carousel-holder">

                  <img class="img-responsive" style="width: 800px;height: 300px;padding-left: 20px;" src="admin/images/<?php echo $car_image; ?>"  alt="">
               
                </div>

                <div class="row">
                
                    <div class="col-md-6">
                        
                        <p class="lead">Specifications:</p>
					
                      
                        
                        <ul>
                          
                           
                            <li><strong>Make:  </strong><?php echo $car_maker_company; ?></li><br>
                            <li><strong>Brand: </strong><?php echo $car_brand; ?></li><br>
                            <li><strong>Model: </strong><?php echo $car_model; ?></li><br>
                            <li><strong>Color: </strong><?php echo $car_color; ?></li><br>
                            <li><strong>Total seat:    </strong><?php echo $car_cc; ?></li><br>
							<li><strong>Car Code: </strong><?php echo $car_code; ?></li>
                        </ul>
                        
                        
                </div>
                
                <div class="col-md-6">
                        
                        <p class="lead">Availability:</p>
                        
                        <ul>
                            
                            <li><strong><?php echo $car_availability; ?></strong></li>
                            
                        </ul>
                        
                        <?php } }?>
                        <br><br/>
                        <br><br/>
                        <br><br/>
                        <br><br/>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <?php if(isset($_SESSION['username'])){ ?>
                        <a href="booking.php"><input class="btn btn-info" type="button" name="btnOrder" value="Book Now"/></a>
                        <?php } else{ ?>
                        <a href="loginUi.php"><input class="btn btn-info" type="button" name="btnOrder" value="Login First"/></a>
                        <?php } ?>
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

 <?php include'includes/footer.php'; ?> 