<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `onlinekusina` WHERE CONCAT(`menu_id`, `menu_name`, `description`, `price`, `unit`) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM `menu`";
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
  <title>Menu View</title>
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
        <a class="nav-link fa fa-plus" href="menuview.php">Menu <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link fa fa-plus" href="addmenu.php">Add Menu <span class="sr-only">(current)</span></a>
      </li>
    </ul>
			
		
	
	
	
  </div>
</nav>

<br><br>

  
      <section class="jumbotron">
    <div class="container">
      <center>
					<font color="success"><h4><b> View Menu</b></h4></font>
					<br>
			
	<table class="table table-dark">
		
			<thead>
				<tr>
		
					<th>menu_id</th>
					<th>menu_name</th>
					<th>description</th>
					<th>price</th>
					<th>unit</th>
					<th>Action</th>
				</tr>
			</thead>
		
					<?php while($row = mysqli_fetch_array($search_result)):?>
<tbody>
	<tr>
			<td><?php echo $row['menu_id'];?></td>
			<td><?php echo $row['menu_name'];?></td>
			<td><?php echo $row['description'];?></td>
			<td><?php echo "&#8369;" .$row['price'];?></td>
			<td><?php echo $row['unit'];?></td>
			
	  <td>
				<div class="btn-group" role="group">
					<button id="btnGroupDrop1" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					option
					</button>
						<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
					<a class="dropdown-item" href="menupro.php?delete=<?php echo $row["menu_id"]; ?>" onclick="return confirm('are you sure you want to delete?')">Delete</a>
				<a class="dropdown-item" href="addmenu.php?edit=<?php echo $row["menu_id"]; ?>" onclick="return confirm('are you sure you want to edit?')">Edit</a>
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

	