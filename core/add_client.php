<?php 
//	$db = mysqli_connect('localhost', 'root', '', 'crud');
	$con = mysqli_connect("localhost","root","","cloud_travel");
	// initialize variables
	$surname = "";
	$address= ""; 
	$city= ""; 
	$region= ""; 
	$code= ""; 
	$country= ""; 
	$contact_no= ""; 
	$fax= ""; $dob= ""; 
	$email = "";

	if (isset($_POST['submit'])) {
			$name = $_POST['name'];
				$surname = $_POST['surname'];
                $address = $_POST['address'];
                $city = $_POST['city'];
                $region = $_POST['region'];
                $code = $_POST['code'];
				$country = $_POST['country'];
				$contact_no = $_POST['contact_no'];
				$fax = $_POST['fax'];
				$dob = $_POST['dob'];
				$email = $_POST['email'];
				
		
		mysqli_query($con, "INSERT INTO client_register(name, surname, address, city, region, code, country, contact_no, fax, dob, email) VALUES ('$name','$surname','$address','$city','$region','$code','$country','$contact_no','$fax','$dob','$email')");
		header('location: ../cli_reg.php');
	}
