<?php

$con=mysqli_connect('localhost:3307','root','','foodshala');

if(isset($_POST['submit'])){

	
	$email=$_POST['email'];
	$password=$_POST['password'];

	$query="SELECT * FROM customer_signup WHERE Email='$email' AND Password='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){

    	while($row=mysqli_fetch_assoc($result)){
    		$id=$row["id"];
    		$email=$row["email"];
    		session_start();
    		$_SESSION['id']=$id;
    		$_SESSION['email']=$email;
    	}
    	header('location:customer_page.php');
    }
	else{
		echo "<script> alert('Wrong Email ID and password'); window.location='customer_login.php' </script>";
		

	}

}


?>