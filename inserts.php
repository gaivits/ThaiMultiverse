<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "thaimultiverse";

// Create connection
	$conn = mysqli_connect($servername, $username, $password,$database);

// Check connection
	if (!$conn) 
	{
  		die("Connection failed: " . mysqli_connect_error());
	}
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$position = $_POST['position'];
	$images = $_POST['images'];

	$str_query = "insert into employee(first_name,last_name,position,images) values('$first_name','$last_name','$position','$images')";
	
	if(mysqli_query($conn, $str_query))
	{
		echo '<script>alert("Insert OK")</script>';
		header("location:index.php");
		
	}
	else
	{
		echo '<script>alert("Insert Failed")</script>';
		header("location:index.php");
	}
?>


