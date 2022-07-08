

<?php 
session_start() ;

    include("connection.php");

   if($_SERVER['REQUEST_METHOD'] === 'POST'){
       //something was posted
       $email = $_POST['email'];
       $password = md5($_POST['password']);
	

       if(!empty($email)&& !empty($password)){
			
		$query = "select * from user_data where Email = '".$email."' AND User_Password = '".$password."' limit 1";
	 	//$query1 = "select Address from user_data where Email = '".$email."' limit 1";
		$result = mysqli_query($con,$query) ;
		//$address = mysqli_query($con,$query1);
		$data = $result->fetch_assoc() ;
			
		 if($result && mysqli_num_rows($result) > 0){
			 $_SESSION['company_name'] = $data['Company_Name'] ;
			 $_SESSION['address']=$data['Address'] ;
			 $_SESSION['User_ID']=$data['User_ID'];
			 $_SESSION['user_email'] =$data['Email'];
			 header("Location: home.php");
			 die;
		 }





			// $query = "select * from user_data where Email='".$email."' AND User_Password ='".$password."' limit 1";

			// $result = mysqli_query($con,$query) ;

			// if(mysqli_num_rows($result)==1){
			// 	header("Location: home.php");
			// 	die ;
			// }

    //         $query = "select * from user_data where Email = '".$email."' limit 1";
	// 		$result = mysqli_query($con,$query) ;
	// 		if($result){
	// 			if(mysqli_num_rows($result)>0){
	// 				$user_data = mysqli_fetch_assoc($result);
	// 				if($user_data['password']=== $password){
	// 					$_SESSION['User_ID'] = $user_data['User_ID'];
	// 					header("Location: home.php");
	// 					die;
	// 				}
	// 			}
	// 		}


			echo "Wrong Email or Password" ;
       }else
       {
           echo "Please Enter Valid information!" ;
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

		<div class="wrapper" style="background-image: url('Images/Loginbackground.jpg');">
			<div class="inner">
				<div style="height: 30px; weight: 30px;" class="image-holder">
					<img src="Images/LogoLOG.PNG" alt="">
				</div>
				<form action="" method="POST">
                <br>
					
					<br><br>
				<h2 style="text-align: center;">USER PASSWORD RESET</h2>
                <br><br><br><br>
					
					
					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" class="form-control" name="email">
						<i class="zmdi zmdi-email"></i>

					</div>
			<br><br><br>
					
                    <div  >
					<a  href="userPass.php">Click Here To Get Setup Code</a>

                    <br><br><br><br><br><br>

				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>