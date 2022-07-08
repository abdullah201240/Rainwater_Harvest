
<?php 
session_start() ;

    include("connection.php");
   // include("functions.php");

   if($_SERVER['REQUEST_METHOD'] === 'POST'){
       //something was posted
      
       $taskDetails = $_POST['addressDetails'];
       
        echo $taskTitle ;

	   $query = "insert into employee_task (Task_Title , Task_Details , Task_City , Task_Road , Task_Bill) values ('$taskTitle','$taskDetails','$city','$road','$bill')";
	   $result = mysqli_query($con,$query);

	   
    }

?>







<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/userreview.css">
    <link rel="stylesheet" href="css/styless.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <article style="background-color: #A3D0F3; padding-left: 50px;" data-wow-delay=".15s">
<Br>


<Br><Br>

<form method="POST" action = "">
  
    
  
  
 
  <div class="form-group">
    <label for="exampleFormControlTextarea1" ><h5>Delivery Address Details</h5></label><br><br>
    <textarea aria-label="Default select example" name = "addressDetails" style="height:200px; width: 400px"> </textarea> <br>
  </div>
  
    <button class='button button-xs button-primary button-winona' type ="submit" href="ataskList.php">Set Address</button>
</form>










    
<Br><Br>

</article>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>



  </body>
</html>


















