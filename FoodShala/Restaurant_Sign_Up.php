<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FoodShala</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/sign_up.css">
	</head>
	<body >
		<!-- header -->
		<div class='container center p-2 col-lg-12 col-md-12 col-sm-12  header' >
			<div class='container col-sm-12 col-md-12 col-lg-12 pl-5'>
				<h1><b style="color:#ffffff">Food</b><b style="color:#3b3b3b">Shala</b></h1>
			</div>
		</div>
		<!-- main_body -->
		


       <form name='submitform' method="post" action="res_signup_data.php" enctype="multipart/form-data">
      <div class='container mt-4 pt-5  col-lg-6 col-sm-12 col-md-12 form'>
        <div class='container pr-3 pl-3'>
          <h1 style="color:#fc0e3d;text-decoration: underline; text-underline-offset: 8px;">
          	Sign Up
          </h1>
        </div>

        <!-- data -->
        <!-- data -->
        <!-- data -->

        <div class='container col-lg-9 col-md-9 col-sm-12 p-2 pt-4  content'>
         
          <!-- Name -->

          <lable><p><lable class='subject '>Name<sup style="color:#ED7D31;">*</sup> </lable> <input type="text" name="name" id='Name'   class='input_' placeholder="name" required></p></lable>

           
           <!-- Mobile No. -->

          <lable><p><lable class='subject'>Mobile No.<sup style="color:#ED7D31">*</sup> </lable> <input type="text" name="mobile" id='mob' class='input_' placeholder="Mobile No." pattern="\d*" title="Number only, please" required></p></lable>

          
          <!--Restaurant Name -->

          <lable><p><lable class='subject'>Restaurant Name<sup style="color:#ED7D31">*</sup></lable> <input type="text" name="res_name" class='input_' placeholder="restaurant name" required></p></lable>

          
           <!-- Restaurant Address -->

          <lable><p><lable class='subject'>Restaurant Address<sup style="color:#ED7D31">*</sup></lable> <input type="text" name="res_add" class='input_' placeholder="restaurant address" required></p></lable>

          <!-- email -->

          <lable><p><lable class='subject'>Email Id<sup style="color:#ED7D31">*</sup></lable> <input type="email" name="email" class='input_' placeholder="email id" required></p></lable>

          <!-- password -->

          <lable><p><lable class='subject'>Password<sup style="color:#ED7D31">*</sup></lable> <input type="password" name="password" class='input_' placeholder="password" required></p></lable>

        </div>
        <!-- submit button -->
        <div class='container pt-2 pb-3'>
          <button name='submit' class="pr-5 pl-5 pt-1 pb-1 btnn" >Sign Up</button>
        </div>
      </div>
    </form>
    

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