<?php


session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include("connection.php");
    $email=$_POST["email_address"];
    $i=$_POST["password"];
	$name=$_POST["employee_name"];
	$address=$_POST["adrs"];
	$number=$_POST["phone_no"];
	$checkUser = "select * from employee where email = '".$email."' AND Employee_Name = '".$name."' limit 1";
	   $res = mysqli_query($con,$checkUser);
	   $count = mysqli_num_rows($res);
	   if($count>0){
		echo "Email or Employee Name Already Exists!!" ;
	   }
	   else{

		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
      
			
	
	$number=$_POST["phone_no"];
	$sql = "insert into employee (Employee_Name,pass,Address,Phone_No,email) values ('$name','$i','$address','$number','$email')";

             mysqli_query($con,$sql) ;
			

            header("Location: empLogin.php");
            die;
	   }
	   else{
		echo "Please Enter Valid Information" ;
	   }
	
}
}







?>












<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>RegistrationForm_v1 by Colorlib</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

		<!-- STYLE CSS -->
		<link rel="stylesheet" href="css/st.css">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('images/Loginbackground.jpg');">
			<div class="inner">
				<div class="image-holder">
					<img src="images/LogoSign.PNG" alt="">
				</div>
				<form method = "POST" action="">
					<h3>EMPLOYEE REGISTRATION FORM</h3>
					
					<div class="form-wrapper">
						<input type="text" placeholder="Employee Name" class="form-control" name="employee_name">
						<i class="zmdi zmdi-account"></i>
					</div>
                    
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control" name="email_address">
						<i class="zmdi zmdi-email"></i>
</div>
<div class="form-wrapper">
						<input type="text" placeholder="Contact No" class="form-control" name="phone_no">
						<i class="zmdi zmdi-phone"></i>
</div>
<div class="form-wrapper">
						<input type="text" placeholder="Address" class="form-control" name="adrs">
						<i class="zmdi zmdi-home"></i>
</div>

					<div class="form-wrapper">
						<input type="password" placeholder="Password" class="form-control" name="password">
						<i class="zmdi zmdi-lock"></i>
					</div>
					
                    <div style="padding-bottom: 20px;">
					<button>Register
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
</div>
                    <div style="Text-Align: Center;" >
                    <a href="empLogin.php"><h4>Already Registered? Click Here To Log In</h4></a>
</div>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>