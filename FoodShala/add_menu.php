<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FoodShala</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/add__menu.css">
	</head>
	<body >
		<!-- header -->
		<div class='container center p-2 col-lg-12 col-md-12 col-sm-12  header' >
			<div class='container col-sm-12 col-md-12 col-lg-12 pl-5'>
				<h1><b style="color:#ffffff">Food</b><b style="color:#3b3b3b">Shala</b></h1>
			</div>
		</div>
		<!-- main_body -->
		 <div class="container-fuild pt-1 pl-5 ">
		 	<div class='container '>
		 <h1 style="color:#fc0e3d;text-decoration: underline; text-underline-offset: 8px;">
		 Add Item
		</H1>
		</div>
    </div>

       <form name='submitform' method="post" action="main_data.php" enctype="multipart/form-data">
      <div class='container mt-4 pt-5  col-lg-6 col-sm-12 col-md-12 form'>
        <!-- <div class='container pr-3 pl-3'>
          <h1 style="color:#fc0e3d;text-decoration: underline; text-underline-offset: 8px;">
          	Sign Up
          </h1>
        </div>
 -->
        <!-- data -->
        <!-- data -->
        <!-- data -->

        <div class='container col-lg-10 col-md-9 col-sm-12 p-2 pt-2  content'>
         
          <!-- Name -->

          <lable><p><lable class='subject '>Dish Name<sup style="color:#ED7D31;">*</sup> </lable> <input type="text" name="dish_name" id='dish'   class='input_' placeholder="dish name" required></p></lable>

           
           <!-- Meal. -->

          <lable><p><lable class='subject'>Meal<sup style="color:#ED7D31">*</sup> </lable>
          	<select  name="meal" id='mob' class='input_' placeholder="meal"  required>
          		<option>BreakFast</option>
          		<option>Lunch</option>
          		<option>Dinner</option>
          	</select>
           <!-- <input type="text" name="meal" id='mob' class='input_' placeholder="meal"  required></p> -->
         </lable>

          
          <!--Cuisine -->

          <lable><p><lable class='subject'>Cuisine<sup style="color:#ED7D31">*</sup></lable>
          	<select  name="cuisine" class='input_' placeholder="Cuisine" required>
          		<option>South Indian</option>
          		<option>North Indian</option>
          		<option>Chinese</option>
          		<option>Italian</option>
          		<option>Maxican</option>
          	</select> 
          	<!-- <input type="text" name="Cuisine" class='input_' placeholder="Cuisine" required></p> -->
          </lable>

          
           <!-- price -->

          <lable><p><lable class='subject'>Price (per plate)<sup style="color:#ED7D31">*</sup></lable> <input type="text" name="price" class='input_' placeholder="price" pattern="\d*" title="Only Number" required></p></lable>

          <!-- email -->

          <lable><p><lable class='subject'>Restaurant<sup style="color:#ED7D31">*</sup></lable> <input type="text" name="restaurant" class='input_' placeholder="restaurant_name" required></p></lable>

          <!-- upload -->

          <lable><p><lable class='subject'>Upload<sup style="color:#ED7D31">*</sup></lable> <input type="file" name="upload" class='input_' placeholder="upload" required></p></lable>

        </div>
        <!-- submit button -->
        <div class='container pt-3 pb-5 pl-1'>
          <button name='submit' class="pr-5 pl-5 pt-1 pb-1 btnn" >Save</button>
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