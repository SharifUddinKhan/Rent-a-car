<div class="table-responsive">
 <table class="table">
 
 
                          <thead>
                        	<tr>
                                
                        		<th>Name</th>
                        		<th>Phone</th>
                        		<th>Service Type</th>
                        		<th>Service Date</th>
                                <th>Status</th>
                                <th>Action</th>
                                <th>View Order</th>
                                <th>Delete</th>
                   		                  		
                        	</tr>
                          </thead>
                          
                          <tbody>
                          
                          	<?php 
                          	
                          	$query = "SELECT * FROM car_rent";
                          	$car_rent_query = mysqli_query($connection,$query);
                          	
                          	while($row = mysqli_fetch_assoc($car_rent_query)){
                          		 
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
                                
                            ?>
                            
                            
                            
                            <?php
                            
                            
                          		echo "<td>$user_name</td>";
                          		echo "<td>$user_phone</td>";
                          		echo "<td>$service_type</td>";
                                echo "<td>$service_date</td>";
                          		echo "<td>$status</td>";
                                
                                if($status === 'Approve'){
                                    
                                    
                                    echo "<td><a href='orders.php?change_to_unapprove={$rent_id}'>Unapprove</a></td>";
                                    $header = "From: DreamUpReantACar@gmail.com";
                                    $to= $user_email;
                                    $subject = 'the subject';
                                    $message = "Dear " .$user_name. " Sir/Madam,\n";
                                    $message .= "Thank You for choosing our service".$service_type." Your rental ID: ".$rent_id. ". Service Date: ".$service_date. ". Car Type and Price: ".$car_type." Tk. We wish you a safe and comfortable journey.";
                                   
                                     mail($to, $subject, $message, $header);


                                    $myfile =  fopen("../memo\DreamUpReantACar.txt", "w") or die("Unable to open file!");
                                    $txt = "Service Date".$service_date."\n";
                                    fwrite($myfile, $txt);
                                    $txt = "Client Name: ".$user_name."\n";
                                    fwrite($myfile, $txt);
                                    $txt = "Address: ".$user_address."\n";
                                    fwrite($myfile, $txt);
                                    $txt = "Phone: ".$user_phone."\n";
                                    fwrite($myfile, $txt);
                                    $txt = "Enail Address: ".$user_email."\n";
                                    fwrite($myfile, $txt);
                                    $txt = "Service type: ".$service_type."\n";
                                    fwrite($myfile, $txt);
                                    $txt = "Car Number: ".$number_of_car."\n";
                                    fwrite($myfile, $txt);
                                    $txt = "Car Type and Price: ".$car_type." Tk \n";
                                    fwrite($myfile, $txt);
                                    $txt = "Total Price: ".$car_type * $number_of_car." Tk \n";
                                    fwrite($myfile, $txt);

                                    fclose($myfile);
                                }else{
                                    echo "<td><a href='orders.php?change_to_approve={$rent_id}'>Approve</a></td>";
                                          // $header = "From: DreamUpReantACar@gmail.com";
                                          // $to= $user_email;
                                          // $subject = 'the subject';
                                          // $message = "Dear " .$user_name. " Sir/Madam,\n";
                                          // $message .= "Your Car Booking is successfully canceled.We Hope you will come back.";
                                         
                                          // mail($to, $subject, $message, $header);
                                }

                          		echo "<td><a href='orders.php?source=viewOrder&o_id={$rent_id}'>View</a></td>";
                          		echo "<td><a onClick=\"javascript:return confirm('Are You sure want to delete this Booking ?');\" href='orders.php?delete={$rent_id}'>DELETE</a></td>";
                          		echo "</tr>";
                          	
                          	}
                          	?>
                         
                          </tbody>
                    </table>
                    
                    
</div>                              
          
                    
           <?php 
           
           	if(isset($_GET['delete'])){
           		
           		
           		$the_car_rent_id = mysqli_real_escape_string($connection,$_GET['delete']);
           		$query = "DELETE FROM car_rent WHERE rent_id = {$the_car_rent_id}";
           		$delete_query = mysqli_query($connection,$query);
           		header("Location:orders.php");
           	
           	}
           
           ?>
           
           <?php 
           
           	if(isset($_GET['change_to_approve'])){
           		$the_rent_id = $_GET['change_to_approve'];
           		
           		$query = "UPDATE car_rent SET status = 'Approve' WHERE rent_id = $the_rent_id";
           		$change_to_approve_query = mysqli_query($connection,$query);
           		header("Location:orders.php");
           	}
           
           ?>
          
              <?php 
           
           	if(isset($_GET['change_to_unapprove'])){
           		$the_rent_id = $_GET['change_to_unapprove'];
           		
           		$query = "UPDATE car_rent SET status = 'Unapprove' WHERE rent_id = $the_rent_id";
           		$change_to_unapprove_query = mysqli_query($connection,$query);
           		header("Location:orders.php");
           	}

           
           ?>

                  
        