<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'db_config.php';
	showFaculty();
}

function showFaculty(){
	global $connect;
	$query = "SELECT * FROM faculty;";
	$result = mysqli_query($connect,$query);
	$num_row = mysqli_num_rows($result);
	$temp = array();
	if ($num_row>0){
		while ($row = mysqli_fetch_assoc($result)){
			$temp[] = $row;
		}
	}
	header('Content-type: application/json');
	echo json_encode(["faculty"=>$temp]);
	mysqli_close($connect);
}

?>