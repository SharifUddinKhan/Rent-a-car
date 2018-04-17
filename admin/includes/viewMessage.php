	<?php 
	
	
	  if(isset($_GET['m_id'])){
	  	
	  	$the_message_id = $_GET['m_id'];
	  }
                          	
                          	$query = "SELECT * FROM contact WHERE contact_id = {$the_message_id} ";
                          	$message_query = mysqli_query($connection,$query);
                          	
                          		while($row = mysqli_fetch_assoc($message_query)){
                          		 
                          	    $contact_id = $row['contact_id'];
                                $rent_id = $row['rent_id'];
                                $user_name = $row['user_name'];
                                $email = $row['email'];
                                $phone = $row['phone'];
                                $date = $row['date'];
                                $booking_date = $row['booking_date'];
                                $car_type = $row['car_type'];
                                $message = $row['message'];
                                $status = $row['status'];
                              
                          		
                            }
   
     ?>
     
     
     
<div class="table-responsive">
  <table class="table">
    <tr>
        <td><h4>Date: </h4></td>
        <td><?php echo $date; ?></td>
    </tr>
    <tr>
        <td><h4>User Name: </h4></td>
        <td><?php echo $user_name; ?></td>
    </tr>
    <tr>
        <td><h4>Email: </h4></td>
        <td><?php echo $email; ?></td>
    </tr>
    <tr>
        <td><h4>Phone: </h4></td>
        <td><?php echo $phone; ?></td>
    </tr>
    <tr>
        <td><h4>Rent ID: </h4></td>
        <td><?php echo $rent_id; ?></td>
    </tr>
     <tr>
        <td><h4>Bookin Date: </h4></td>
        <td><?php echo $booking_date; ?></td>
    </tr>
     <tr>
        <td><h4>Car Type: </h4></td>
        <td><?php echo $car_type; ?></td>
    </tr>
    <tr>
        <td><h4>Status: </h4></td>
        <td><?php echo $status; ?></td>
    </tr>
    <tr>
        <td><h4>Message: </h4></td>
        <td><?php echo $message; ?></td>
    </tr>
   
    
  </table>
</div>

