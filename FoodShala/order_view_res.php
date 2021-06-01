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
		<div class='container center  col-lg-12 col-md-12 col-sm-12  header' >
			<div class='container col-sm-12 col-md-12 col-lg-12 pl-5 p-2'>
				<b style="color:#ffffff;font-size: 250%;">Food</b><b style="color:#3b3b3b;font-size: 250%;">Shala</b>
				<!-- <div  class=" pt-3 pr-5 mx-3"style="float:right; font-size: 130%;color: white;">
					<p ><button class="btnn" onclick="window.location.href='add_menu.php'"><b class="mx-3">Add Item</b></button>
					<button class="btnn"><b class="mx-3">Orders</b></button>
				</p>
				</div> -->
			</div>
		</div>
		<!-- main_body -->
		 <div class="container-fuild col-lg-12 pt-1 pl-5 ">
		 	<div class='container col-lg-12 '>
		 <h1 style="color:#fc0e3d;text-decoration: underline; text-underline-offset: 8px; text-align: center;">
		 Orders
		</H1>
		</div>
    </div>


    <?php
           require "order_data_user.php" ;

           $query="SELECT * FROM order_user";
           $query_run=mysqli_query($con,$query);



           	while($row = mysqli_fetch_assoc($query_run)){
           		?>
            <form name='submitform' method="post" action="">
	<div class='container mt-4 pt-2  col-lg-6 col-sm-6 col-md-6 form'>
		<div class="row">
           		<div class="container-fuild col-lg-3 ">
				<h5  style="color:#3b3b3b;"><?php echo $row['dishname']; ?></h5>
			</div>
			<div class="container-fuild col-lg-3">
				<?php echo $row['address']; ?>
			</div>
			<div class="container-fuild col-lg-2">
				<?php echo $row['phone']; ?>
			</div>
				
			<div class="container-fuild col-lg-1">	
					
				<?php echo $row['quantity']; ?></p>
			</div>
			<div class="container-fuild col-lg-3  pb-1">
				<div class='container-fuild  '>
					<div class="container-fuild ">
						<button name='submit' class="pr-1 pl-1 pt-1 pb-1 ml-1 btnn1" >Done</button>
						<button name='submit' class="pr-1 pl-1 pt-1 pb-1 btnn" >Not Done</button>
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