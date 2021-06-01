<?php

$con=mysqli_connect('localhost:3307','root','','foodshala');


if(isset($_POST['submit'])){

	$dishname=$_POST['dishname'];
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$quantity=$_POST['quantity'];

	$query="INSERT INTO order_user (dishname,address,phone,quantity) VALUES ('$dishname','$address','$phone','$quantity')";
	mysqli_query($con,$query);
	echo "$query";
	header('location:customer_page.php');
}


?>