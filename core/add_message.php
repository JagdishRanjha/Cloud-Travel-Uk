<?php 
//	$db = mysqli_connect('localhost', 'root', '', 'crud');
	$con = mysqli_connect("localhost","root","","cloud_travel");
	// initialize variables
	$message = "";
	

	if (isset($_POST['submit'])) {
			$message = $_POST['message'];
			
				
				
		
		mysqli_query($con, "INSERT INTO messages(message) VALUES ('$date','$message')");
		header('location: ../index.php');
	}
else{
	echo "error";
}
