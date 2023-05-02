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
	$emp_id=$_GET['emp_id'];
	
	
	$str_query = "delete from employee where emp_id=".$emp_id ;
	if(mysqli_query($conn, $str_query))
	{
		echo '<script>alert("delete OK")</script>';
		header("location:index.php");
		
	}
	else
	{
		echo '<script>alert("delete Failed")</script>';
		header("location:index.php");
	}


	
?>


