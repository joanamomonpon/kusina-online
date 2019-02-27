<?php

	
	
?>




<!DOCTYPE html>
<html>
<head>
  <title>kusinaonline</title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="main.css">
	<script type="text/javascript" src="bootstrap/js/jquery-slim.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
  <link rel ="stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
  
  
  
</head>
<body>   

<form action="logout.php" method="POST">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
				<img style="width: 9%;height: 60px;"  src="images/logo.jpg" />
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link fa fa-home" href="index.php">Home <span class="sr-only">(current)</span></a>
				</li>
		</div>
	</nav>
</form>		
	<br><br>
			
	<div class="container">
	
<form action="logout.php" method="POST">
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
		<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active"> &nbsp;&nbsp;&nbsp;&nbsp;
					<a class="nav-link fa fa-plus" href="customerview.php">Customer view<span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>
</form>		<br>
				<h4><b> Add Customer</b></h4>
			<center>
				<?php require_once 'customerpro.php'; ?>	
					<form action="customerpro.php" style="width:700px " method="POST">
					
					 <div class="row">
						<div class="col-md-3 mb-3">
							<label>customer_id:</label>
								<input type="text"  class="form-control" name="customer_id" placeholder="customer_id" value="<?php echo $customer_id; ?>" required>
						</div> 				<br><br>
						</div>
						
				<div class="row">
						<div class="col-md-3 mb-3">
							<label>first name:</label>
								<input type="text"  class="form-control" name="first_name" placeholder="first name" value="<?php echo $first_name; ?>" required>
						</div> 					
						<div class="col-md-6 mb-3">
							<label>last name:</label>
								<input type="text" class="form-control" name="last_name" placeholder="last name" value="<?php echo $first_name; ?>" required >
						</div>    		
						<div class="col-md-3 mb-3">
							<label>M.I:</label>			
								<input type="text" class="form-control" name="middle_initial" placeholder="middle initial" value="<?php echo $first_name; ?>" required>
						</div>
					</div>
					
				<div class="row">
					<div class="col-md-6 mb-3">
						<label>phone number:</label>
							<input type="text" class="form-control" name="pnumber" placeholder="phone number" value="<?php echo $pnumber; ?>" required>
					</div>
					<div class="col-md-6 mb-3">
						<label>province:</label>
							<input type="text" class="form-control" name="province" placeholder="province" value="<?php echo $province; ?>" required>
					</div>	
				</div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label>street:</label>
							<input type="text" class="form-control" name="street" placeholder="street" value="<?php echo $street; ?>" required>
					</div>	
					<div class="col-md-6 mb-3">
						<label>barangay:</label>
							<input type="text" class="form-control" name="barangay" placeholder="barangay" value="<?php echo $barangay; ?>" required>
					</div>	
				</div>
					<div class="col-md-6 mb-3">
						<label>city:</label>
							<input type="text" class="form-control" name="city" placeholder="city" value="<?php echo $city; ?>" required><br>
						</div>		
						<?php 
							if ($update == true):
						?>	
							<input class="btn btn-info" type="submit" name="update" value="update" >
						<?php else: ?>
							<input class="btn btn-info" type="submit" name="submit" value="save" >
						<?php endif ;?>
					</form>
			</center>	
		</div>
	<br><br>

<footer>
	<div class="row">
			<h4 class="col-sm-4"> &copy2018; Amomonpon Joan S.</h4>
		<ul class="col-sm-8">
			<ul class="col-sm-8">
					<li class="col-sm-2"><img src="Images/img6.png"></li>
						<li class="col-sm-2"><img src="Images/img9.png"></li>
					<li class="col-sm-2"> <img src="Images/img2.jpg"></li>
				<li class="col-sm-2"> <img src="Images/img5.jpg"></li>
			</ul>
		</ul>
	</div>
</footer>
</body>
</html>