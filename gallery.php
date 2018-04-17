<?php include 'includes/header.php'; ?>


    <!-- Page Content -->
    <div class="container">

        <div class="row">
<br />
            <div class="col-md-9 col-md-offset-1">

                <div class="row">

                <?php

                        	$query = "SELECT * FROM cars ORDER BY car_id DESC ";
                          	$car_query = mysqli_query($connection,$query);

                          	while($row = mysqli_fetch_assoc($car_query)){

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

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img style="width: 200px;height: 85px;" src="admin/images/<?php echo $car_image; ?>"  alt="">
                            <div class="caption">

                                <h4>Brand: <?php echo $car_brand,' <br/> Model: ',$car_model ; ?>
                                </h4>

                                <p><?php echo $car_availability; ?></p>

                            </div>
                            <div class="ratings">
                                <a href="viewCar.php?c_id=<?php echo $car_id; ?>"><p class="pull-right"><button class="btn btn-primary">See Details</button></p></a>

                            </div>

                        </div>
                    </div>

                 <?php } ?>

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

 <?php include'includes/footer.php'; ?>