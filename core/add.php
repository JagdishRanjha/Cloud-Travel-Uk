<?php 
//	$db = mysqli_connect('localhost', 'root', '', 'crud');
	$con = mysqli_connect("localhost","root","","test");
	// initialize variables
	$service = "";
	

	if (isset($_POST['submit'])) {
			$service = $_POST['delete'];
//				echo $service;

        $query = "DELETE FROM client_register WHERE id ='" . $service . "'";
        echo $query;
		mysqli_query($con, $query);
//		header('location: ../cli_reg.php');
	}
