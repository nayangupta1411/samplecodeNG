<?php
$con= mysqli_connect('localhost:3307','root','','foodshala');

if(isset($_POST['submit'])){
$dish_name = $_POST['dish_name'];
$meal = $_POST['meal'];
$cuisine = $_POST['cuisine'];
$price = $_POST['price'];
$restaurant = $_POST['restaurant'];

$imgupload=basename($_FILES['upload']['name']);
$image=str_replace(' ','|',$imgupload);
$query="INSERT INTO menu_add (dish_name,meal,cuisine,price,restaurant,imgupload) VALUES ('$dish_name','$meal','$cuisine','$price','$restaurant','$imgupload')";

mysqli_query($con,$query);
move_uploaded_file($_FILES["upload"]['tmp_name'], "menu/".$image);
header('location:restaurant_page.php');
}
?>