<?php 
//	$db = mysqli_connect('localhost', 'root', '', 'crud');
	$con = mysqli_connect("localhost","root","","cloud_travel");
	// initialize variables
	$date = "";
	$amount = "";
	$description = "";
	

	if (isset($_POST['submit'])) {
			$date = $_POST['date'];
			$amount = $_POST['amount'];
			$description = $_POST['desc'];
				
				
		
		mysqli_query($con, "INSERT INTO daily_expense(expense_date,expense_desc,expense_amount) VALUES ('$date','$description','$amount')");
		header('location: ../exp_ent.php');
	}
