<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `customer_order` WHERE Concat(`order_id`, `customer_id`, `timestamp`) LIKE '%".$search."%'";
		$search_result = filterTable($query);	
    
	}
	else {
		$query = "SELECT * FROM `customer_order`";
		$search_result = filterTable($query);
		
		
	}

	// function to connect and execute the query
	function filterTable($query)
	{
		$connect = mysqli_connect("localhost", "root", "", "onlinekusina");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
	}
?>

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
				<button class="navbar-toggler" type="butt7on" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
							<a class="nav-link fa fa-home" href="index.php">Home <span class="sr-only">(current)</span></a>
						</li>
					<li class="nav-item active">
							<a class="nav-link fa fa-plus" href="CustomerOrder.php">Add Customer Order<span class="sr-only">(current)</span></a>
						</li>
					<li class="nav-item active">
							<a class="nav-link fa fa-plus" href="orderadd.php">Add Order Items<span class="sr-only">(current)</span></a>
					</li>
			</div>
		</nav>
 </form>
<br>
			
			<center>
				<div class="row">
					<div class="col-md-8">
						<div class="thumbnail">
							<img src="images/t1.jpeg" alt="Lights" style="width:100%" height="250">
						<div class="caption">
					</div>
				</div>
			</div>
			<div class="col-md-4">
			<h1><u>All Total</u></h1>
			<?php
							$con = new mysqli("localhost", "root", "", "onlinekusina");
							$sql = "SELECT SUM(price*quantity) as `total` FROM order_item ";
							$querytotal = mysqli_query($con,$sql);
					?>
					
					<?php while($row = mysqli_fetch_array($querytotal)):?><br><br>
					<h1><span><?php echo "&#8369;".$row['total'];?></span></h1>
			<?php endwhile; ?>
		</div>
		</div>
<br> 
			<div class = "row">
			<div class="col-sm-6">
		<h4><b>  Customer Order</b></h4>
			
				<div class="table-responsive">
					<table class="table table-hover table-primary">
					<thead>
						<tr>
							<th>order_id</th>
							<th>customer_id</th>
							<th>timestamp</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php
							$con = new mysqli("localhost", "root", "", "onlinekusina");
							$sql = "SELECT * FROM customer,customer_order where customer.customer_id = customer_order.customer_id";
							$querycustomer = mysqli_query($con,$sql);
					?>
					
				<?php while($row = mysqli_fetch_array($querycustomer)):?>
<tbody>
	<tr>
			<td><?php echo $row['order_id'];?></td>
			<td><?php echo $row['first_name'];?></td>
			<td><?php echo $row['timestamp'];?></td>
			
	  <td>
			<div class="btn-group" role="group">
				<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					option
						</button>
						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					<a class="dropdown-item" href="OrderCuspro.php?delete=<?php echo $row["order_id"]; ?>" onclick="return confirm('are you sure you want to delete?')">Delete</a>
				<a class="dropdown-item" href="CustomerOrder.php?edit_customerorder=<?php echo $row["order_id"]; ?>" onclick="return confirm('are you sure you want to edit?')">Edit</a>
			</div>
		</div>
	  </td>
	</tr>
</tbody>			
<?php endwhile;?>		
</table>
</div>
</div>
<div class="col-sm-6">
<h4><b> Order Items</b></h4>
		
			<div class="table-responsive">
				<table class="table table-hover table-primary">
					<thead>
						<tr>
							<th>order_id</th>
							<th>menu_id</th>
							<th>price<th>
							<th>quantity</th>
							<th>total</th>
							<th>Action</th>
						</tr>
					</thead>
					<?php
							$con = new mysqli("localhost", "root", "", "onlinekusina");
<<<<<<< HEAD
							$sql = "SELECT * FROM order_item ";
=======
							$sql = "SELECT * FROM order_item,menu where order_item.menu_id= menu.menu_id ";
>>>>>>> oderadd/Orderviewcus
							$queryorderitem = mysqli_query($con,$sql);
					?>
					
				<?php while($row = mysqli_fetch_array($queryorderitem)):?>
				<?php
						$x=$row['order_id'];
<<<<<<< HEAD
						$y=$row['menu_id'];
=======
						$y=$row['menu_name'];
>>>>>>> oderadd/Orderviewcus
						$j=$row['price'];
						$k=$row['quantity'];
						$m= $j*$k;
						
				
				?>
<tbody>			
	<tr>
			<td><?php echo $x;?></td>
			<td><?php echo $y;?></td>
			<td><?php echo "&#8369;" .$j;?></td>
			<td></td>
			<td><?php echo $k;?></td>
			<td><?php echo "&#8369;" .$m;?></td>
	  <td>
			<div class="btn-group" role="group">
					<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						option
					  </button>
						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
<<<<<<< HEAD
					<a class="dropdown-item" href="menupro.php?delete=<?php echo $row["menu_id"]; ?>" onclick="return confirm('are you sure you want to delete?')">Delete</a>
				<a class="dropdown-item" href="addmenu.php?edit=<?php echo $row["menu_id"]; ?>" onclick="return confirm('are you sure you want to edit?')">Edit</a>
=======
					<a class="dropdown-item" href="OrderCuspro.php?deleteitem=<?php echo $row["hidden_id"]; ?>" onclick="return confirm('are you sure you want to delete?')">Delete</a>
				<a class="dropdown-item" href="orderadd.php?edit_orderitem=<?php echo $row["hidden_id"]; ?>" onclick="return confirm('are you sure you want to edit?')">Edit</a>
>>>>>>> oderadd/Orderviewcus
			</div>
			</div>
	  </td>
	</tr>
</tbody>
<?php endwhile;?>
</table>
			</div>
	</div>
	

</div>
</body>
</html>

