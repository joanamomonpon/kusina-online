<?php

	$mysqli = new mysqli('localhost', 'root', '', 'onlinekusina') or die(mysqli($mysqli));
	
	$customer_id = 0;
	$update = false;
	$first_name = '';
	$customer_id = '';
	$last_name = '';
	$middle_initial = '';
	$pnumber = '';
	$province = '';
	$street = '';
	$barangay = '';
	$city = '';
	
	if (isset($_POST['submit'])) {
		$customer_id = $_POST['customer_id'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$middle_initial = $_POST['middle_initial'];
		$pnumber = $_POST['pnumber'];
		$province = $_POST['province'];
		$street = $_POST['street'];
		$barangay = $_POST['barangay'];
		$city = $_POST['city'];
		
		$mysqli->query("INSERT INTO customer (customer_id, first_name, last_name, middle_initial, pnumber, province, street, barangay, city) VALUES('$customer_id', '$first_name', '$last_name', '$middle_initial', '$pnumber', '$province', '$street', '$barangay', '$city')") or die($mysqli->error);
		header("location: customerview.php");
	}
	
		if (isset($_GET['delete'])) {
		$customer_id = $_GET['delete'];
		$mysqli->query("DELETE FROM customer WHERE customer_id=$customer_id") or die($mysqli->error());
		header("location: customerview.php");
	}
	
	if (isset($_GET['edit'])) {
		$customer_id = $_GET['edit'];
		$update = true;
		$result = $mysqli->query("SELECT * FROM customer WHERE customer_id=$customer_id") or die($mysqli->error());
		if (@count($result)==1) {
			$row = $result->fetch_array();
			$customer_id = $row['customer_id'];
			$first_name = $row['first_name'];
			$last_name = $row['last_name'];
			$middle_initial = $row['middle_initial'];
			$pnumber = $row['pnumber'];
			$province = $row['province'];
			$street = $row['street'];
			$barangay = $row['barangay'];
			$city = $row['city'];
		}
	}
	if (isset($_POST['update'])) {
		$customer_id = $_POST['customer_id'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$middle_initial = $_POST['middle_initial'];
		$pnumber = $_POST['pnumber'];
		$province = $_POST['province'];
		$street = $_POST['street'];
		$barangay = $_POST['barangay'];
		$city = $_POST['city'];
		
		$mysqli->query("UPDATE customer SET customer_id='$customer_id', first_name='$first_name', last_name='$last_name', middle_initial='$middle_initial', pnumber='$pnumber', province='$province', street='$street', barangay='$barangay', city='$city' WHERE customer_id=$customer_id") or die($mysqli->error);
		header("location: customerview.php");
	}

	
	
?>