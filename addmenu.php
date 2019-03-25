



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
			<img style="width: 9%;height: 80px;"  src="images/logo.jpg" />
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link fa fa-home" href="index.php">Home <span class="sr-only">(current)</span></a>
					</li>
						
							
			</ul>
			
	</div>
</nav>
</form>
<br><br>
		<div class="container">
			<center>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link fa fa-eye" href="menuview.php">Menu View<span class="sr-only">(current)</span></a>
				</li> 
			</ul>
	</div>
</nav>
<br>
						
						<h4><b> Add Menu</b></h4>
					<br>	
						
				<?php require_once 'menupro.php'; ?>	
					<form action="menupro.php" style="width:700px " method="POST">
					
					<div class="row">
						<div class="col-md-3 mb-3">
							<label>menu id:</label>
								<input type="text" class="form-control" name="menu_id" placeholder="menu id" value="<?php echo $menu_id; ?>" required>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-6 mb-3">
							<label>menu name:</label>
								<input type="text"  class="form-control" name="menu_name" placeholder="menu name" value="<?php echo $menu_name; ?>" required>
						</div>
						<div class="col-md-6 mb-3">
						<label>description:</label>
							<input type="text" class="form-control" name="description" placeholder="description" value="<?php echo $description; ?>" required>	
						</div>
						</div>
					<div class="row">
						<div class="col-md-6 mb-3">
						<label>price:</label>
							<input type="text" class="form-control" name="price" placeholder="price" value="<?php echo $price; ?>" required >	
						</div>
						<div class="col-md-3 mb-3">
						<label>unit:</label>
							<select input type="text" name="unit" class="form-control" placeholder="unit" required  >
								<option placeholder=""><?php echo $unit; ?></option>
									<option placeholder=""> kg</option>
									<option placeholder=""> dozen</option>
										<option placeholder=""> pcs.</option>
									<option placeholder=""> serve</option>
								<option placeholder=""> pack</option>
								<option placeholder=""> grms</option>
								<option placeholder=""> tray</option>
								<option placeholder=""> pc.</option>
							</select>		
						</div>
					</div>
						<br>
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
			
	<br>

<footer >
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