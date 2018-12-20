<?php 
//	$db = mysqli_connect('localhost', 'root', '', 'crud');
	$con = mysqli_connect("localhost","vineet","vineet","cloud");
	// initialize variables
	$name = "";
	

	if (isset($_POST['submit'])) {
			$name = $_POST['airline'];
			

		mysqli_query($con, "INSERT INTO airline_register(airline_name) VALUES ('$name')");
		header('location: ../air_ent.php');
	}
