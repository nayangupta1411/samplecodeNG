<?php

$con=mysqli_connect('localhost:3307','root','','foodshala');

if(isset($_POST['submit'])){

	$name=$_POST['name'];
	$mobile=$_POST['mobile'];
	$address=$_POST['address'];
	$preferences=$_POST['preferences'];
	$email=$_POST['email'];
	$password=$_POST['password'];

	$query="INSERT INTO customer_signup (name,mobile,address,preferences,email,password) VALUES ('$name','$mobile','$address','$preferences','$email','$password')";
	mysqli_query($con,$query);
	header('location:customer_login.php');

}


?>