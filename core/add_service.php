<?php 
//	$db = mysqli_connect('localhost', 'root', '', 'crud');
	$con = mysqli_connect("localhost","cloud","cloud@123","cloud");
	// initialize variables
	$service = "";
	

	if (isset($_POST['submit'])) {
			$service = $_POST['service'];
				
				
		
		mysqli_query($con, "INSERT INTO service_register(service_name) VALUES ('$service')");
		header('location: ../ps_reg.php');
	}
