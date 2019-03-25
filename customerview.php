<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `onlinekusina` WHERE CONCAT(`customer_id`, `first_name`, `lastname`, `middle_initial`, `pnumber`, `province`, `street`, `barangay`, `city`) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM `customer`";
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
  <title>customer view</title>
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
	  <li class="nav-item active">
        <a class="nav-link fa fa-plus" href="customerview.php">Customer <span class="sr-only">(current)</span></a>
      </li>
      
	  <li class="nav-item active">
        <a class="nav-link fa fa-plus" href="addcustomer.php">Add Customer <span class="sr-only">(current)</span></a>
      </li>
    </ul>
			<form class="form-inline">
				&nbsp;&nbsp;&nbsp;&nbsp;
					<div class="desc"><b id="logout"><a href="logout.php">Log Out</a></b></div>
			</form>
		
	
	
	
  </div>
</nav>

<br><br>

  <section class="jumbotron">
    <div class="container">
      <center>
				<font color="success"><h4><b> View Customer</b></h4></font>
				<br>
	<table class="table table-dark">
		<thead>
			<tr>
		
				<th>customer_id</th>
				<th>first_name</th>
				<th>last_name</th>
				<th>middle_initial</th>
				<th>phone_number</th>
				<th>province</th>
				<th>street</th>
				<th>barangay</th>
				<th>city</th>
				<th>Action</th>
			</tr>
		</thead>
		
					<?php while($row = mysqli_fetch_array($search_result)):?>
<tbody>
	<tr>
			<td><?php echo $row['customer_id'];?></td>
			<td><?php echo $row['first_name'];?></td>
			<td><?php echo $row['last_name'];?></td>
			<td><?php echo $row['middle_initial'];?></td>
			<td><?php echo $row['pnumber'];?></td>
			<td><?php echo $row['province'];?></td>
			<td><?php echo $row['street'];?></td>
			<td><?php echo $row['barangay'];?></td>
			<td><?php echo $row['city'];?></td>
      
	  <td>
				<div class="btn-group" role="group">
					<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					option
					</button>
						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					<a class="dropdown-item" href="customerpro.php?delete=<?php echo $row["customer_id"]; ?>" onclick="return confirm('are you sure you want to delete?')">Delete</a>
				<a class="dropdown-item" href="addcustomer.php?edit=<?php echo $row["customer_id"]; ?>" onclick="return confirm('are you sure you want to edit?')">Edit</a>
			</div>
			</div>
	  </td>
	</tr>
</tbody>

	<?php endwhile;?>
	</table>
</center>
     
     
    </div>  
</section>
 
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
</html>
