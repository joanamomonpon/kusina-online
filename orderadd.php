<!DOCTYPE html>
<html>
<head>
  <title>online_kusina</title>
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

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link fa fa-home" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link fa fa-plus" href="orderadd.php">Add Order<span class="sr-only">(current)</span></a>
      </li>
	  </nav>
     </form>
<br>
			<div class="container">
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
   <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link fa fa-eye" href="orderviewcus.php"> View Order<span class="sr-only">(current)</span></a>
				</li> 
			</ul>
	</div>
</nav>
<br><br>

		<h4><b> Add Order Item</b></h4>
					<br>	
						<div class="container">
				<?php require_once 'OrderCuspro.php'; ?>
				
					<form action="OrderCuspro.php" style="width:700px " method="POST">
					<center>
					<div class="row">
						<div class="col-md-6 mb-3">
							<label>Order ID:</label>
								<select name="order_id" class="form-control" required>
									<?php
										$con = new mysqli("localhost", "root", "", "onlinekusina");
										$sql = "SELECT * FROM customer_order";
										$query = mysqli_query($con,$sql);
									?>
									<?php while($row = mysqli_fetch_array($query)):?>
									<option value="<?php echo $row['order_id'];?>"><?php echo $row['order_id'];?></option>
									<?php endwhile;?>
							</select>
						</div>
						<div class="col-md-6 mb-3">
							<label>Menu ID:</label>
								<select name="menu_id" class="form-control" required>
									<?php
										$con = new mysqli("localhost", "root", "", "onlinekusina");
										$sql = "SELECT * FROM menu";
										$query = mysqli_query($con,$sql);
									?>
									<?php while($row = mysqli_fetch_array($query)):?>
									<option value="<?php echo $row['menu_id'];?>"><?php echo $row['menu_name'];?></option>
									<?php endwhile;?>
							</select>
						</div>
						</div>
					<div class="row">
						<div class="col-md-6 mb-3">
						<label>price:</label>
							<input type="text" class="form-control" name="price" placeholder="price" value="<?php echo $price; ?>" required >	
						</div>
						<div class="col-md-6 mb-3">
						<label>Quantity:</label>
							<input type="text" class="form-control" name="quantity" placeholder="quantity" value="<?php echo $quantity; ?>" required >			
						</div>
					</div>
						<br>
								<?php 
								   if ($update == true):
								?>
									<input class="btn btn-info" type="submit" name="update" value="update" >
								<?php else: ?>
									<input class="btn btn-info" type="submit" name="add" value="save" >
								<?php endif ;?>
			</center>	
	</form>
	</div>
</body>
</html>

