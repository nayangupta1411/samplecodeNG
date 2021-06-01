<?php

$con=mysqli_connect('localhost:3307','root','','foodshala');

if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$res_name=$_POST['res_name'];
	$res_add=$_POST['res_add'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$query="INSERT INTO restaurant_signup (name,mobile,res_name,res_add,email,password) VALUES ('$name','$mobile','$res_name','$res_add','$email','$password')";
	mysqli_query($con,$query);
	header('location:restaurant_login.php');

}


?>