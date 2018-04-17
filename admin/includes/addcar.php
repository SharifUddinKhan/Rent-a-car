<script>
    
     var regex = /^(\$|)([1-9]\d{0,2}(\,\d{3})*|([1-9]\d*))(\.\d{2})?$/;
     var passed = textVal.match(regex);
    
</script>
<?php

    if(isset($_POST['submit'])){
        
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
        
      
        
        $query = "INSERT INTO cars (car_maker_company,car_brand,car_model,car_color,car_cc,car_code,car_availability,car_image)  ";
        $query .= "VALUES ('$car_maker_company','$car_brand','$car_model','$car_color','$car_cc','$car_code','$car_availability','$car_image')";
		
        $create_car_query = mysqli_query($connection,$query);
		
		comfirmQuery($create_car_query);
        
        
        echo "<script>alert('Car Details Successfully Added.')</script>";
        echo "<p><a href='cars.php'>View all Cars</a></p>";
        
        
    }

?>

<form action="" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <label for="maker">Maker</label>
            <input type="text" class="form-control" name="car_maker_company" required>
          </div>
          <div class="form-group">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" name="car_brand" required>
          </div>
           <div class="form-group">
            <label for="model">Model</label>
            <input type="text" class="form-control" name="car_model" required>
          </div>
           <div class="form-group">
            <label for="color">Color</label>
            <input type="text" class="form-control" name="car_color" required>
          </div>
           <div class="form-group">
            <label for="CC">Total seat</label>
            <input type="text" class="form-control" name="car_cc" required>
          </div>
           <div class="form-group">
            <label for="code">Code Number</label>
            <input type="text" class="form-control" name="car_code" required>
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image" required>
          </div>
          
          
         <div class="form-group">
              <input type="hidden" class="form-control" name="car_availability" value="Available">
              <input class="btn btn-primary" type="submit" name="submit" value="Publish Car">
         </div>
</form>