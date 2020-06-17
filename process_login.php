<?php 
session_start();
$msg = isset($_SESSION['user_id']) ? "http://woodhomesinteriors.com/index.php" : "";
$con = mysqli_connect("localhost","wood_homes_db","wood_homes_db","wood_homes_db");
 
 if(empty($msg))
 {
  $user_email = $_POST['email'];
  $password = $_POST['password'];  
  $user_password = md5($password);
 
$sql1="SELECT * FROM customer_info WHERE email = '$user_email' AND password = '$user_password' LIMIT 1"; 
$result1=mysqli_query($con,$sql1);
if(mysqli_num_rows($result1) > 0)
	{
	    foreach($result1 as $aa)
	    {
	        $_SESSION['user_id'] = $aa['customer_id'];
	    }
     $msg = "Successfully LoggedIn";
   }
   else
   {
       $msg = "Username Password Didnt Match";
   }
 }
echo "<script LANGUAGE='JavaScript'>
    window.alert('$msg');
    window.location.href='http://woodhomesinteriors.com/index.php';
    </script>";
 
 ?>
 