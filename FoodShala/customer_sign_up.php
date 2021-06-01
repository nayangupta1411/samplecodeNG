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
		<div class='container center p-2 col-lg-12 col-md-12 col-sm-12  header1' >
			<div class='container col-sm-12 col-md-12 col-lg-12 pl-5'>
				<h1><b style="color:#ffffff">Food</b><b style="color:#3b3b3b">Shala</b></h1>
			</div>
		</div>
		<!-- main_body -->
		


       <form name='submitform' method="post" action="cus_signup_data.php">
      <div class='container mt-4 pt-5  col-lg-6 col-sm-12 col-md-12 form1'>
        <div class='container pr-3 pl-3'>
          <h1 style="color:#17ae35;text-decoration: underline; text-underline-offset: 8px;">
          	Sign Up
          </h1>
        </div>

        <!-- data -->
        <!-- data -->
        <!-- data -->

        <div class='container col-lg-9 col-md-9 col-sm-12 p-2 pt-4  content1'>
          
          <!-- name -->

          <lable><p><lable class='subject1 '>Name<sup style="color:#ED7D31;">*</sup> </lable> <input type="text" name="name" id='Name'   class='input_1' placeholder="name" required></p></lable>

           
           <!-- mobile -->

          <lable><p><lable class='subject1'>Mobile No.<sup style="color:#ED7D31">*</sup> </lable> <input type="text" name="mobile" id='mob' class='input_1' placeholder="Mobile No." pattern="\d*" title="Number only, please" required></p></lable>

        
          <!--address  -->

          <lable><p><lable class='subject1'>Address<sup style="color:#ED7D31">*</sup></lable> <input type="text" name="address" class='input_1' placeholder="address" required></p></lable>

          
           <!-- Preferences -->

          <lable><p><lable class='subject1'>Preferences<sup style="color:#ED7D31">*</sup></lable>
          	<select value='add' name="preferences" class='input_1' placeholder="Preferences" required>
          		<option >Vegetarian</option>
          		<option >Non-Vegetarian</option>
          	</select>
           
         </lable>

         <!-- email -->

          <lable><p><lable class='subject1'>Email Id<sup style="color:#ED7D31">*</sup></lable> <input type="email" name="email" class='input_1' placeholder="email id" required></p></lable>

          <!-- password -->

          <lable><p><lable class='subject1'>Password<sup style="color:#ED7D31">*</sup></lable> <input type="password" name="password" class='input_1' placeholder="password" required></p></lable>

        </div>
        <!-- submit button -->
        <div class='container pt-2 pb-3'>
          <button name='submit' class="pr-5 pl-5 pt-1 pb-1 btnn1" >Sign Up</button>
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