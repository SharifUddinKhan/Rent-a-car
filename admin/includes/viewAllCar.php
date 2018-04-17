<?php 

include 'deleteModal.php'; 

	if(isset($_POST['checkBoxArray'])){
		
		foreach ($_POST['checkBoxArray'] as $carValueId){
			 $bulk_options = $_POST['bulk_options'];
			 
			 switch ($bulk_options){
			 	  
			 		    case 'Available':
			 	  	
			 			$query = "UPDATE cars SET car_availability = '{$bulk_options}' WHERE car_id = {$carValueId} ";
			 			$update_draft_post = mysqli_query($connection,$query);
			 			comfirmQuery($update_draft_post);
			 		
			 			break;
			 		
                    	case 'Unavailable':
			 		
			 			$query = "UPDATE cars SET car_availability = '{$bulk_options}' WHERE car_id = {$carValueId} ";
			 			$update_draft_post = mysqli_query($connection,$query);
			 			comfirmQuery($update_draft_post);
			 		
			 			break;
			 			
			 			case 'delete':
			 			
			 				$query = "DELETE FROM cars WHERE car_id = {$carValueId} ";
			 				$update_delete_car = mysqli_query($connection,$query);
			 				comfirmQuery($update_delete_car);
			 			
			 				break;
			 					
			 	
			 }
		}
	}


 
?>

<form action="" method="post">

<div class="table-responsive">                       
                          		
 <table class="table">
 
     <div id="bulkOptionsContainer" class="col-xs-4">
 			
 			<select class="form-control" name="bulk_options" id="">			
 				<option value="">Select Option</option>
 				<option value="Available">Available</option>
 				<option value="Unavailable">Unavailable</option>
 				<option value="delete">Delete</option>
 			</select>
 		
 		</div>
 		
 		<div class="col-xs-4">
 		
 			<input type="submit" name="submit" class="btn btn-success" value="Apply">
 			<a class="btn btn-primary" href="cars.php?source=addcar">Add New</a>
 		
 		</div>
 
                          <thead>
                        	<tr>
                                <th></th>
                        		<th>ID</th>
                        		<th>Brand</th>
                        		<th>Model</th>
                        		<th>CC</th>
                        		<th>Code</th>
                        		<th>Image</th>
                        		<th>Situation</th>
                                <th>Action</th> 
                        		<th>Edit</th>    
                        		<th>Delete</th>                        		
                        	</tr>
                          </thead>
                          
                          <tbody>
                          
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
                          		
                               
   
                          		echo "<tr>";
                          		
                          		?>
                          <td><input type='checkbox' class="checkBoxes" name='checkBoxArray[]' value='<?php echo $car_id;  ?>'></td>
                          		<?php 
                          		
                          		echo "<td>$car_id</td>";       		
                          		echo "<td>$car_brand</td>";
                          		echo "<td>$car_model</td>";
                          		echo "<td>$car_cc</td>";
                                echo "<td>$car_code</td>";
                          		echo "<td><img  width='100' src='./images/$car_image' alt=''></td>";
                                
                              
                                echo "<td>$car_availability</td>";
                                
                                if($car_availability == 'Unavailable'){
                                    echo "<td><a href='cars.php?change_to_available={$car_id}'>Available</a></td>";
                                }else{
                                    echo "<td><a href='cars.php?change_to_unavailable={$car_id}'>Unavailable</a></td>";
                                }
 		                         
                          		
                                echo "<td><a href='cars.php?source=editCar&c_id={$car_id}'>EDIT</a></td>";
                          		//echo "<td><a rel='$car_id' href='javascript:void(0)' class='delete_link'>DELETE</a></td>";
                          		echo "<td><a onClick=\"javascript:return confirm('Are You sure want to delete this car ?');\" href='cars.php?delete={$car_id}'>DELETE</a></td>";
                          		echo "</tr>";
                          	
                          	}
                            
                                                     
                          	?>
                         
                          </tbody>
                    </table>
 </div>
 </form>
 
 
            
           <?php 
           
           	if(isset($_GET['delete'])){
           		$the_delete_car = $_GET['delete'];
           		$query = "DELETE FROM cars WHERE car_id = {$the_delete_car}";
           		$delete_query = mysqli_query($connection,$query);
           		
           		header("Location:cars.php");
           	}
           
           ?>
           
            <?php 
           
           	if(isset($_GET['change_to_available'])){
           		$the_car_id = $_GET['change_to_available'];
           		
           		$query = "UPDATE cars SET car_availability = 'Available' WHERE car_id = $the_car_id";
           		$change_to_available_query = mysqli_query($connection,$query);
           		header("Location:cars.php");
           	}
           
           ?>
           
             <?php 
           
           	if(isset($_GET['change_to_unavailable'])){
           		$the_car_id = $_GET['change_to_unavailable'];
           		
           		$query = "UPDATE cars SET car_availability = 'Unavailable' WHERE car_id = $the_car_id";
           		$change_to_unavailable_query = mysqli_query($connection,$query);
           		header("Location:cars.php");
           	}
           
           ?>
           
           
<script>

	$(document).ready(function(){

		$(".delete_link").on('click',function(){
			var id = $(this).attr("rel");
			var delete_url = "cars.php?delete="+ id +"";
			$(".modal_delete_link").attr("href",delete_url);
			$("#myModal").modal('show');
			});

		});

</script>
 