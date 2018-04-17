<?php include'includes/header.php'; ?>

<?php

    if(isset($_POST['contact'])){
        
        $rentID = $_POST['rentID'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        $date = date('d-m-y');
        $car_type = $_POST['car_type'];
        $booking_date = $_POST['booking_date'];
        
   	    $query = "INSERT INTO contact(rent_id,user_name,email,phone,message,date,booking_date,car_type) ";
		$query .= "VALUES ('$rentID','$name','$email','$phone','$message',now(),'$booking_date','$car_type')";
		
		$contact_query = mysqli_query($connection,$query);
		
		comfirmQuery($contact_query);
		echo "<script>alert('Your Message has been send')</script>";
    }

?>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
        <div class="col-md-12">
         
        </div>

            
            <div class="col-sm-5 col-md-6 col-sm-offset-3 ">
			<h3>Canceling Booking</h3>
                
                
                <form action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="name">Rent Id</label>
                    <input type="text" class="form-control" name="rentID" required>
                  </div>
      
                  <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" class="form-control" name="name" required>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" name="phone" required>
                  </div>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" name="email" required>
                  </div>
                   <div class="form-group">
                    <label for="carType">Car Type and Daily Price:</label><br />
                    <select class="form-control" name="car_type" required>
                      <option value="">Select option</option>
                      <option value="Sendan Car 4000">Sedan Car (4000 Tk)</option>
                      <option value="Noah Van 4500">Noah Car (4500 Tk)</option>
                            <option value="Hiace Van 5000">Hiace Van (5000 Tk)</option>
                    </select>
                  </div>
                   <div class="form-group">
            <label for="serviceDate">Service Date:</label>
            <input id="datepicker" class="form-control" type="date" value="" name="booking_date" required/>
          </div>

                  <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea class="form-control" rows="3" name="message"></textarea>
                  </div>
                  
                  <div class="form-group">
                     <input class="btn btn-primary" type="submit" name="contact" value="Submit">
                  </div>
              
            </div>
                  
                 
                  
                 
               </form>
            </div>
			

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

 <?php include'includes/footer.php'; ?> 