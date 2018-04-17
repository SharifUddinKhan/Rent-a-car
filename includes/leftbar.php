<?php

    if(isset($_POST['submit'])){

        $user_name = $_SESSION['firstname'];
        $user_address = $_POST['user_address'];
        $user_email = $_SESSION['email'];
        $user_phone = $_POST['user_phone'];
        $service_type = $_POST['service_type'];
        $car_type = $_POST['car_type'];
        $number_of_car = $_POST['number_of_car'];
        $service_date = $_POST['service_date'];
        $car_using_area = $_POST['car_using_area'];
        $status = $_POST['status'];
        $address = $_POST['address'];
        $user_NID = $_POST['user_NID'];
        

        if(strtotime($service_date) < strtotime(date('Y-m-d'))){

        	echo '<script>alert("Please Provide right date.")</script>';
            
        }else{

        $query = "INSERT INTO car_rent (user_name,user_address,user_email,user_phone,service_type,car_type,number_of_car,service_date,car_using_area,status,address,user_NID)  ";
        $query .= "VALUES ('$user_name','$user_address','$user_email','$user_phone','$service_type','$car_type','$number_of_car','$service_date','$car_using_area','$status','$address','$user_NID')";

        $create_rentcar_query = mysqli_query($connection,$query);

		comfirmQuery($create_rentcar_query);
        echo "<script>alert('Thank You to Booking our Car.We will Call you soon to confirm your booking.We will E-mail after confirm your booking. ')</script>";
        

		}
    }

?>




<div class="col-md-6 col-md-offset-3">
       <p class="lead">Car Rental Inquiry</p>

      <form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="permanentAddress ">Permanent Address :</label>
            <input type="text" class="form-control" name="address" required>
          </div>
          <div class="form-group">
            <label for="namtionalID ">National ID :</label>
            <input id="NID" type="text" class="form-control" name="user_NID"  pattern="^\d{4}\d{3}\d{4}\d{2}$" required title="You need to enter 0-9 and At lest 13 Digit">
          </div>
          <div class="form-group">
            <label for="userAddress">Pickup Location:</label>
            <input type="text" class="form-control" name="user_address" required>
          </div>
           <div class="form-group">
            <label for="userPhone">Your Phone no:</label>
            <input type="text" id="phone" class="form-control" name="user_phone" pattern="^\d{4}\d{3}\d{4}$" required title="You need to enter 0-9 and At lest 11 Digit">
          </div>
           <div class="form-group">

            <input type="hidden" name="service_type" value="Day Rental" />
          </div>
          <div class="form-group">
            <label for="carType">Car Type and Daily Price:</label><br />
            <select class="form-control" name="car_type" required>
        			<option value="">Select option</option>
        			<option value="Sendan Car 4000">Toyota (4000 Tk)</option>
        			<option value="Noah Van 4500">Noah Car (4500 Tk)</option>
                    <option value="Hiace Van 5000">Hiace Van (5000 Tk)</option>
    		    </select>
          </div>
          <div class="form-group">
            <label for="numberOfCar">Number of Car:</label>

            <select name="number_of_car" class="form-control" required>
           	    <option value="">Select option</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
          </div>


           <div class="form-group">
            <label for="serviceDate">Service Date:</label>
            <input id="datepicker" class="form-control" type="date" value="" name="service_date" required/>
          </div>


           <div class="form-group">
            <label for="carUsingArea">Destination</label>
            <input type="text" class="form-control" name="car_using_area" required>
          </div>
           <div class="form-group">

            <input type="hidden" class="form-control" name="status" value="Unapprove">
          </div>

         <div class="form-group">
            <input class="btn btn-primary" type="submit" name="submit" value="Booking Now">
         </div>
    </form>
</div>