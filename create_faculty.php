<?php
 
if($_SERVER["REQUEST_METHOD"]=="POST"){
	require 'db_config.php';
	createFaculty();
}

function createFaculty(){
	global $connect;
	$name = $_POST["name"];
	$designation = $_POST["designation"];
	$contact = $_POST["contact"];

	$query = "insert into faculty(name,designation,contact) VALUES ('$name','$designation','$contact');";
	mysqli_query($connect,$query) or die(mysqli_error($connect));
	mysqli_close($connect);
}
?>