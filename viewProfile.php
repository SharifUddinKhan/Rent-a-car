<?php include 'includes/header.php'; ?>

   <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-10 col-md-offset-2">


                <div class="row">
                <br>
                   <p class="lead">Hello <?php echo $_SESSION['firstname'];  ?>, Welcome to Your service Profile.</p>
                   
                   <div class="table-responsive">
 <table class="table">
 
 
                          <thead>
                        	<tr> 
                        		<th>Rent ID</th>                  		                  		
                                <th>Username</th>                  		                  		
                                <th>Email</th>                  		                  		                            
                        		<th>Service Type</th>
                        		<th>Service Date</th>
                        		<th>Stutas</th>
                        		<th>Edit</th>
                                            		                  		
                        	</tr>
                          </thead>
                          
                          <tbody>
                          
                          	<?php 
                          	
                          	$username = $_SESSION['firstname'];
                
                        	$query = "SELECT * FROM car_rent WHERE user_name = '$username' ";
                          	$select_all_booking_query = mysqli_query($connection,$query);
                          	
                          	while($row = mysqli_fetch_assoc($select_all_booking_query)){
                          		
                                $rent_id = $row['rent_id'];
                          		$user_name = $row['user_name'];
                          		$user_address = $row['user_address'];
                                $user_email = $row['user_email'];
                          		$user_phone = $row['user_phone'];
                          		$service_type = $row['service_type'];
                                $number_of_car = $row['number_of_car'];
                          		$service_date = $row['service_date'];
                                $car_using_area = $row['car_using_area'];
                                $car_type = $row['car_type'];
                                $status = $row['status'];
                                
                                
                                
                          
                          		echo "<tr>";
                      
                           	    echo "<td>$rent_id</td>";
                          		echo "<td>$user_name</td>";
                          		echo "<td>$user_email</td>";
                            	echo "<td>$service_type</td>";
                          		echo "<td>$service_date</td>";
                          		echo "<td>$status</td>";
                          		echo "<td><a href='changingbooking.php?r_id={$rent_id}'>EDIT</a></td>";
                        } 
                          	?>
                         
                          </tbody>
                    </table>
                    
                    
</div>                              
            </div>
			<hr>
			
					
						
						<hr>
						
						<div class="button">
						
							<button type="button" class="btn btn-default navbar-btn"><a href="contact.php"> Canceling Booking </a></button> 
							<!--<button type="button" class="btn btn-default navbar-btn"><a href="changingbooking.php"> Changing Booking date </a></button><hr><br><br><hr>-->
						
						</div>
				
				  
				
			</div>
			
						<div class="container">
							<div class="row">
								<div class="col-xs-12 col-md-12">
								<div class="col-xs-4 col-md-4">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">
												Payment Details
											</h3>
											<div class="checkbox pull-right">
												<label>
													<input type="checkbox" />
													Remember
												</label>
											</div>
										</div>
										<div class="panel-body">
											<form role="form">
											<div class="form-group">
												<label for="cardNumber">
													CARD NUMBER</label>
												<div class="input-group">
													<input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number"
														required autofocus />
													<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
												</div>
											</div>
											<div class="row">
												<div class="col-xs-7 col-md-7">
													<div class="form-group">
														<label for="expityMonth">
															EXPIRY DATE</label>
														<div class="col-lg-6 pl-ziro">
															<input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
														</div>
														<div class="col-lg-6 pl-ziro">
															<input type="text" class="form-control" id="expityYear" placeholder="YY" required /></div>
													</div>
												</div>
												<div class="col-xs-5 col-md-5 pull-right">
													<div class="form-group">
														<label for="cvCode">
															CV CODE</label>
														<input type="password" class="form-control" id="cvCode" placeholder="CV" required />
													</div>
												</div>
											</div>
											</form>
										</div>
									</div>
									<ul class="nav nav-pills nav-stacked">
										<li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-tk"></span>2000</span> Advance Payment</a>
										</li>
									</ul>
									<br/>
									<a href="#" class="btn btn-success btn-lg btn-block" role="button">Pay</a>
								</div>
								
								
								<div class="col-xs-4 col-md-4">
									
									
									<br/>
									<a href="#" class="btn btn-success btn-lg btn-block" role="button">Payment</a>
								</div>
								
								
								
								<div class="col-xs-4 col-md-4">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">
												Payment In Bkash
											</h3>
											
										</div>
										<div class="panel-body">
											<form role="form">
											<div class="form-group">
												<label for="cardNumber">
													Bkash NUMBER
												</label>
												
											</div>
											<div class="row">
												<div class="col-xs-7 col-md-7">
												01738020985
													
												</div>
												<div class="col-xs-5 col-md-5 pull-right">
												01738020985
													
												</div>
											</div>
											</form>
										</div>
									</div>
									
									<br/>
									
									
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">
												Payment In Rocket
											</h3>
											
										</div>
										<div class="panel-body">
											<form role="form">
											<div class="form-group">
												<label for="cardNumber">
													Rocket Account NUMBER
												</label>
												
											</div>
											<div class="row">
												<div class="col-xs-7 col-md-7">
												017380209855
													
												</div>
												<div class="col-xs-5 col-md-5 pull-right">
												017380209855
													
												</div>
											</div>
											</form>
										</div>
									</div>
									<ul class="nav nav-pills nav-stacked">
										<li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-tk"></span>2000</span> Advance Payment</a>
										</li>
									</ul>
									<br/>
									
								</div>
								
								
								
								
								
							</div>
							</div>
						</div>

					
						

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

 <?php include'includes/footer.php'; ?> 