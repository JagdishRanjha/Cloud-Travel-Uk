<?php 
//	$db = mysqli_connect('localhost', 'root', '', 'crud');
	$con = mysqli_connect("localhost","cloud","cloud@123","cloud");
	// initialize variables
			$name = "";
			$middle_name = "";
            $surname = "";
            $father_name = "";
			$mother_name = "";
			$gender = "";
			$dob = "";
			$passport = "";
			$visa = "";
			$visa_valid = "";
			$marital_status = "";
			$country = "";
			$disability = "";
			$blood = "";
			$permanent_address = "";
			$temporary_address = "";
			$home_phone = "";
			$mobile_phone = "";
			$fax = "";
			$email = "";
			$qualification = "";
			$experience = "";
			$department = "";
			$hired_department = "";
			$hiring_date = "";
			$currency = "";
			$rate = "";
			$per = "";
			$contact_name = "";
			$contact_address = "";
			$contact_phone = "";
			$contact_email = "";
			$relation = "";
			$sort_code = "";
			$account_no = "";
			$bank_name = "";
			$bank_address = "";
			$tax_no = "";
			$national_insurance_no = "";
			$employee_id = "";
	if (isset($_POST['submit'])) {
			$name = $_POST['name'];
			$middle_name = $_POST['middle_name'];
            $surname = $_POST['surname'];
            $father_name = $_POST['father_name'];
			$mother_name = $_POST['mother_name'];
			$gender = $_POST['gender'];
			$dob = $_POST['dob'];
			$passport = $_POST['passport'];
			$visa = $_POST['visa'];
			$visa_valid = $_POST['visa_valid'];
			$marital_status = $_POST['marital_status'];
			$country = $_POST['country'];
			$disability = $_POST['disability'];
			$blood = $_POST['blood'];
			$permanent_address = $_POST['permanent_address'];
			$temporary_address = $_POST['temporary_address'];
			$home_phone = $_POST['home_phone'];
			$mobile_phone = $_POST['mobile_phone'];
			$fax = $_POST['fax'];
			$email = $_POST['email'];
			$qualification = $_POST['qualification'];
			$experience = $_POST['experience'];
			$department = $_POST['department'];
			$hired_department = $_POST['hired_department'];
			$hiring_date = $_POST['hiring_date'];
			$currency = $_POST['currency'];
			$rate = $_POST['rate'];
			$per = $_POST['per'];
			$contact_name = $_POST['contact_name'];
			$contact_address = $_POST['contact_address'];
			$contact_phone = $_POST['contact_phone'];
			$contact_email = $_POST['contact_email'];
			$relation = $_POST['relation'];
			$sort_code = $_POST['sort_code'];
			$account_no = $_POST['account_no'];
			$bank_name = $_POST['bank_name'];
			$bank_address = $_POST['bank_address'];
			$tax_no = $_POST['tax_no'];
			$national_insurance_no = $_POST['nat_ins_no'];
			$employee_id = "CLDTRVL";
			
		
		mysqli_query($con, "INSERT INTO employee(employee_id, name, middle_name, surname, father_name, mother_name, passport, visa, visa_valid, dob, gender, marital_status, country, disability, blood, permanent_address, temporary_address, home_phone, mobile_phone, fax, email, qualification, experience, department, hired_department, hiring_date, currency, rate, per, contact_name, contact_address, contact_phone, contact_email, relation, sort_code, account_no, bank_name, bank_address, tax_no, national_insurance_no, status) VALUES ('$employee_id','$name', '$middle_name', '$surname', '$father_name', '$mother_name', '$passport', '$visa', '$visa_valid', '$dob', '$gender', '$marital_status', '$country', '$disability', '$blood', '$permanent_address', '$temporary_address', '$home_phone', '$mobile_phone', '$fax', '$email', '$qualification', '$experience', '$department', '$hired_department', '$hiring_date', '$currency', '$rate', '$per', '$contact_name', '$contact_address', '$contact_phone', '$contact_email', '$relation', '$sort_code', '$account_no', '$bank_name', '$bank_address', '$tax_no', '$national_insurance_no')"); 
		 echo "Success";
		header('location: ../emp_reg.php');
	}
