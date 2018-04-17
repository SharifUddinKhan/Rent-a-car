<div class="table-responsive">
 <table class="table">
                          <thead>
                        	<tr>
                          <th>Rent ID</th>
                        		<th>User Name</th>              
                        		<th>Phone</th>
                            <th>Car Booking Date</th>
                            <th>Car Type</th>
                            <th>Cancel Date</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>View</th>
                        		<th>Delete</th>
                        		
                        		                  		
                        	</tr>
                          </thead>
                          
                          <tbody>
                          
                          	<?php 
                          	
                          	$query = "SELECT * FROM contact";
                          	$user_query = mysqli_query($connection,$query);
                          	
                          	while($row = mysqli_fetch_assoc($user_query)){
                          		 
                          	    $contact_id = $row['contact_id'];
                                $rent_id = $row['rent_id'];
                            		$user_name = $row['user_name'];
                            		$email = $row['email'];
                            		$phone = $row['phone'];
                                $date = $row['date'];
                                $booking_date = $row['booking_date'];
                                $car_type = $row['car_type'];
                                 $status = $row['status'];
                          		
                          	
                          
                          		echo "<tr>";
                              echo "<td>$rent_id</td>";
                          		echo "<td>$user_name</td>";
                          		echo "<td>$phone</td>";
                                echo "<td>$booking_date</td>";
                                echo "<td>$car_type</td>";
                                echo "<td>$date</td>";
                                echo "<td>$status</td>";
                                 if($status === 'Approve'){
                                    
                                    
                                    echo "<td><a href='message.php?change_to_unapprove={$rent_id}'>Unapprove</a></td>";
                                          $header = "From: DreamUpReantACar@gmail.com";
                                          $to= $email;
                                          $subject = 'the subject';
                                          $message = "Dear " .$user_name. " Sir/Madam,\n";
                                          $message .= "Your Car Booking is successfully canceled.We Hope you will come back.";
                                         
                                          mail($to, $subject, $message, $header);


                                 
                                }else{
                                    echo "<td><a href='message.php?change_to_approve={$rent_id}'>Approve</a></td>";
                                          // $header = "From: DreamUpReantACar@gmail.com";
                                          // $to= $user_email;
                                          // $subject = 'the subject';
                                          // $message = "Dear " .$user_name. " Sir/Madam,\n";
                                          // $message .= "Your Car Booking is successfully canceled.We Hope you will come back.";
                                         
                                          // mail($to, $subject, $message, $header);
                                }
              	                echo "<td><a href='message.php?source=viewMessage&m_id={$contact_id}'>View</a></td>";
                          		echo "<td><a onClick=\"javascript:return confirm('Are You sure want to delete this Message ?');\" href='message.php?delete={$contact_id}'>DELETE</a></td>";
                          		echo "</tr>";
                          	
                          	}
                          	?>
                         
                          </tbody>
                    </table>
                    
                    
</div>  

   <?php 
           
           	if(isset($_GET['delete'])){
           		$the_delete_car = $_GET['delete'];
           		$query = "DELETE FROM contact WHERE contact_id = {$the_delete_car}";
           		$delete_query = mysqli_query($connection,$query);
           		
           		header("Location:message.php");
           	}
           
           ?>


            <?php 
           
            if(isset($_GET['change_to_approve'])){
              $the_rent_id = $_GET['change_to_approve'];
              
              $query = "UPDATE contact SET status = 'Approve' WHERE rent_id = $the_rent_id";
              $change_to_approve_query = mysqli_query($connection,$query);
              header("Location:message.php");
            }
           
           ?>
          
              <?php 
           
            if(isset($_GET['change_to_unapprove'])){
              $the_rent_id = $_GET['change_to_unapprove'];
              
              $query = "UPDATE contact SET status = 'Unapprove' WHERE rent_id = $the_rent_id";
              $change_to_unapprove_query = mysqli_query($connection,$query);
              header("Location:message.php");
            }

           
           ?>