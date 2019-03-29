<?php


$mysqli = new mysqli('localhost', 'root', '', 'onlinekusina') or die(mysqli($mysqli));
	
	$order_id = 0;
	$update = false;
	$order_id = '';
	$customer_id = '';
	$timestamp = '';
	$menu_id = '';
	$price = '';
	$quantity = '';
	
	
//customer oder
	if (isset($_POST['submit'])) {
		$order_id = $_POST['order_id'];
		$customer_id = $_POST['customer_id'];
		$timestamp = $_POST['timestamp'];
		
		$mysqli->query("INSERT INTO customer_order(order_id, customer_id, timestamp) VALUES('$order_id', '$customer_id', '$timestamp')") or die($mysqli->error);
		header("location: orderviewcus.php");
	}
	if (isset($_GET['delete'])) {
		$order_id = $_GET['delete'];
		$mysqli->query("DELETE FROM customer_order WHERE order_id=$order_id") or die($mysqli->error());
		header("location: orderviewcus.php");
	}
	
	if (isset($_GET['edit_customerorder'])) {
		$order_id = $_GET['edit_customerorder'];
		$update = true;
		$sql = "SELECT * FROM customer_order WHERE order_id='".$order_id."'";
		$result = $mysqli->query($sql) or die($mysqli->error());
		if (@count($result)==1) {
			$row = $result->fetch_array();
			$order_id = $row['order_id'];
			$customer_id = $row['customer_id'];
			$timestamp = $row['timestamp'];
			
		}
	}
	if (isset($_POST['update_order'])) {
		$order_id = $_POST['order_id'];
		$customer_id = $_POST['customer_id'];
		$timestamp = $_POST['timestamp'];
		$mysqli->query("UPDATE customer_order SET order_id='$order_id', customer_id='$customer_id', timestamp='$timestamp' WHERE order_id=$order_id") or die($mysqli->error);
		header("location: orderviewcus.php");
	}
	
	
//order items
	if (isset($_POST['add'])) {
		$order_id = $_POST['order_id'];
		$menu_id = $_POST['menu_id'];
		$price = $_POST['price'];
		$quantity= $_POST['quantity'];
		
		$mysqli->query("INSERT INTO order_item(order_id, menu_id, price, quantity) VALUES('$order_id', '$menu_id', '$price', '$quantity')") or die($mysqli->error);
		header("location: orderviewcus.php");
	}
<<<<<<< HEAD
	

=======
	if (isset($_GET['deleteitem'])) {
		$hidden_id = $_GET['deleteitem'];
		$mysqli->query("DELETE FROM order_item WHERE hidden_id=$hidden_id") or die($mysqli->error());
		header("location: orderviewcus.php");
	}

	if (isset($_GET['edit_orderitem'])) {
		$hidden_id = $_GET['edit_orderitem'];
		$update = true;
		$sql = "SELECT * FROM order_item WHERE hidden_id='".$hidden_id."'";
		$result = $mysqli->query($sql) or die($mysqli->error());
		if (@count($result)==1) {
			$row = $result->fetch_array();
			$menu_id = $row['menu_id'];
			$price = $row['price'];
			$quantity = $row['quantity'];
			
		}
	}
	if (isset($_POST['update_orderitem'])) {
		$hidden_id = $_POST['hidden_id'];
		$menu_id = $_POST['menu_id'];
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$mysqli->query("UPDATE order_item SET hidden_id='$hidden_id', menu_id='$menu_id', price='$price', quantity='$quantity' WHERE hidden_id='".$hidden_id."'") or die($mysqli->error);
		header("location: orderviewcus.php");
	}
>>>>>>> oderadd/Orderviewcus
	
	
	?>