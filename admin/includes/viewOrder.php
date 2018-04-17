	<?php 
	
	
	  if(isset($_GET['o_id'])){
	  	
	  	$the_order_id = $_GET['o_id'];
	 }
                          	
                          	$query = "SELECT * FROM car_rent WHERE rent_id = {$the_order_id} ";
                          	$order_query = mysqli_query($connection,$query);
                          	
                          	while($row = mysqli_fetch_assoc($order_query)){
                          		 
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
                                $address = $row['address'];
                                $user_NID = $row['user_NID'];
                                
                          		
 }
   
     ?>
     
     
     
<div class="table-responsive">
  <table class="table">
    <tr>
        <td><h4>Clinet Name: </h4></td>
        <td><?php echo $user_name; ?></td>
    </tr>
    <tr>
        <td><h4>Permanent Address: </h4></td>
        <td><?php echo $address; ?></td>
    </tr>
     <tr>
        <td><h4>National ID: </h4></td>
        <td><?php echo $user_NID; ?></td>
    </tr>
    <tr>
        <td><h4>Phone: </h4></td>
        <td><?php echo $user_phone; ?></td>
    </tr>
    <tr>
        <td><h4>Email: </h4></td>
        <td><?php echo $user_email; ?></td>
    </tr>
     <tr>
        <td><h4>Pick up Address: </h4></td>
        <td><?php echo $user_address; ?></td>
    </tr>
     <tr>
        <td><h4>Service Area: </h4></td>
        <td><?php echo $car_using_area; ?></td>
    </tr>
    
    <tr>
        <td><h4>Service Type: </h4></td>
        <td><?php echo $service_type; ?></td>
    </tr>
    <tr>
        <td><h4>Service Date: </h4></td>
        <td><?php echo $service_date; ?></td>
    </tr>
    <tr>
        <td><h4>Car Type: </h4></td>
        <td><?php echo $car_type; ?></td>
    </tr>
    <tr>
        <td><h4>Number of car: </h4></td>
        <td><?php echo $number_of_car; ?></td>
    </tr>
   
  
  </table>
</div>

