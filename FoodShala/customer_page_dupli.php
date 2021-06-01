<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FoodShala</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/main__page_rc.css">
	</head>
	<body >
		<!-- header -->
		<div class='container center  col-lg-12 col-md-12 col-sm-12  header1' >
			<div class='container col-sm-12 col-md-12 col-lg-12 pl-5 p-2'>
				<b style="color:#ffffff;font-size: 250%;">Food</b><b style="color:#3b3b3b;font-size: 250%;">Shala</b>
				<div  class=" pt-3 pr-5 mx-3"style="float:right; font-size: 130%;color: white;">
					<p ><button class="btnn1" onclick=""><b class="mx-3">Order Detail</b></button>
					<button class="btnn1"><b class="mx-3">Food Cart</b></button>
				</p>
				</div>
			</div>
		</div>
		<!-- main_body -->
		 <div class="container-fuild col-lg-12 pt-1 pl-5 ">
		 	<div class='container col-lg-12 '>
		 <h1 style="color:#17ae35;text-decoration: underline; text-underline-offset: 8px; text-align: center;">
		 Menu
		</H1>
		</div>
    </div>

<!-- items add -->



       <?php
           require "main_data.php" ;

           $query="SELECT * FROM menu_add";
           $query_run=mysqli_query($con,$query);
           

          

           	while($row = mysqli_fetch_assoc($query_run)){
           		?>
            <form name='submitform' method="post" action="">
	<div class='container mt-4 pt-2  col-lg-6 col-sm-6 col-md-6 form1'>
		<div class="row">
           		<div class="container-fuild col-lg-4 ">
				<img src="menu/<?php echo $row['upload']; ?>" alt='food' style="border-radius:2em; ">
			</div>
			<div class="container-fuild col-lg-5">
				<h1  style="color:#17ae35;"><?php echo $row['dish_name']; ?></h1>
				<p><?php echo $row['meal']; ?>,<?php echo $row['cuisine']; ?><br>
					1x<?php echo $row['price']; ?>=<?php echo $row['price']; ?>₹<br>
				<?php echo $row['restaurant']; ?></p>
			</div>
			<div class="container-fuild col-lg-3 pt-5 pb-1">
				<div class='container-fuild pt-5 '>
					<div class="container-fuild pt-4">
						<a name='submit1' class="pr-1 pl-1 pt-1 pb-1 ml-1 btnn1" href='index.php'>Order</a>
						<button name='submit1' class="pr-1 pl-1 pt-1 pb-1 btnn1" >Add Cart</button>
					</div>
				</div>
			</div>
				</div>
	</div>
	
</div>
</div>
</form>

           <?php


           	}
           
       ?>


		<!-- footer -->
		<div class="container-fuild pb-5">
			<!-- icons -->
			
			<!-- footer_main -->
			<div class='footer'>
				<p>@FoodShala</p>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	</body>
</html>