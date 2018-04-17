<?php

//To prevent sql injection

function escape($string){
	global $connection;
	
	return mysqli_real_escape_string($connection,trim($string));
	
}


function comfirmQuery($result){
	global $connection;
	if(!$result){
		die("Query Failed." . mysqli_error($connection));
	}
	
	
}

function recordCount($table){
	
	global $connection;
	
	$query = "SELECT * FROM ".$table;
	$select_all_car_query = mysqli_query($connection,$query);    
	$car_count = mysqli_num_rows($select_all_car_query);	
	return $car_count;
	
}



function checkStatus($table,$column,$status){
	
	global $connection;
	
	$query = "SELECT * FROM $table WHERE $column = '$status'";
	$result = mysqli_query($connection,$query);
	return mysqli_num_rows($result);
}


?>