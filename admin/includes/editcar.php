	<?php 
	
	
	  if(isset($_GET['c_id'])){
	  	
	  	$the_car_id = $_GET['c_id'];
	  }
                          	
                          	$query = "SELECT * FROM cars WHERE car_id = {$the_car_id} ";
                          	$car_query = mysqli_query($connection,$query);
                          	
                          	while($row = mysqli_fetch_assoc($car_query)){
                          		 
                          		$car_id = $row['car_id'];
                                $car_maker_company = $row['car_maker_company'];
                                $car_brand = $row['car_brand'];
                                $car_model = $row['car_model'];
                                $car_color = $row['car_color'];
                                $car_cc = $row['car_cc'];
                                $car_code = $row['car_code'];
                               
                                $car_availability = $row['car_availability'];
                                $car_image = $row['car_image'];
                          		
                          	}
                          	
                          	
                          	if(isset($_POST['update_car_details'])){
				
								 
							        $car_maker_company = $_POST['car_maker_company'];
									$car_brand = $_POST['car_brand'];
									$car_model = $_POST['car_model'];
									$car_color = $_POST['car_color'];
									$car_cc = $_POST['car_cc'];
									$car_code = $_POST['car_code'];
                                    
									$car_availability = $_POST['car_availability'];
                                    
									$car_image = $_FILES['image']['name'];
									$car_temp_image = $_FILES['image']['tmp_name'];
									
									
									
									
									move_uploaded_file($car_temp_image, "images/$car_image");
									
									if(empty($car_image)){
										
										$query = "SELECT * FROM cars WHERE car_id = {$the_car_id}";
										$select_image = mysqli_query($connection,$query);
										
										while ($row = mysqli_fetch_array($select_image)){
											$car_image = $row['car_image'];
										}
									}
									
									
									$query = "UPDATE cars SET ";
									$query .= "car_id = '{$car_id}', ";
									$query .= "car_maker_company = '{$car_maker_company}', ";									
									$query .= "car_brand = '{$car_brand}', ";
									$query .= "car_model = '{$car_model}', ";
									$query .= "car_color = '{$car_color}', ";
									$query .= "car_cc = '{$car_cc}', ";
									$query .= "car_code = '{$car_code}', ";
								
        	                        $query .= "car_availability = '{$car_availability}', ";
									$query .= "car_image = '{$car_image}' ";
									$query .= "WHERE car_id = {$the_car_id} ";
									
									$update_query = mysqli_query($connection,$query);
									comfirmQuery($update_query);
									
									echo "<p class='bg-success'>Car Updated. </p>";
							}
     ?>
     
     
<form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="maker">Maker</label>
            <input type="text" class="form-control" name="car_maker_company" value="<?php echo $car_maker_company; ?>">
          </div>
          <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" name="car_brand" value="<?php echo $car_brand; ?>">
          </div>
           <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" name="car_model" value="<?php echo $car_model; ?>">
          </div>
           <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" name="car_color" value="<?php echo $car_color; ?>">
          </div>
           <div class="form-group">
            <label for="CC">CC</label>
            <input type="text" class="form-control" name="car_cc" value="<?php echo $car_cc; ?>">
          </div>
           <div class="form-group">
            <label for="code">Code Number</label>
            <input type="text" class="form-control" name="car_code" value="<?php echo $car_code; ?>">
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <img width="100" src="./images/<?php echo $car_image; ?>"/>
            <input type="file" class="form-control" name="image">
          </div>
         
           <div class="form-group">
            <label for="car_availability">Availability</label>
                <select name="car_availability" id="">
        		 <option value='<?php echo $car_availability;?>'><?php echo $car_availability; ?></option>	
                   
			
			<?php 
				if($car_availability == 'Available'){
					echo "<option value='Unavailable'>Unavailable</option>";
				}else{
					echo "<option value='Available'>Available</option>";
				}
			?>
    		    </select>
          </div>
         <div class="form-group">
              <input class="btn btn-primary" type="submit" name="update_car_details" value="Update Car Details">
         </div>
</form>