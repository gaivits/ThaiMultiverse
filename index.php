
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
	
?>
<style>
	body {
		margin: 5%;
	}
</style>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action='inserts.php' method="post">
	<input type='text' name='first_name' placeholder="ชื่อจริง">
	<input type='text' name='last_name' placeholder="นามสกุล">
	<input type='text' name='position' placeholder="ตำแหน่ง">
	<input type='file' name='images' placeholder="รูป">
	<br>
	<input type='submit'>
</form>
<table border="1">
		<tr>
			<th>FirstName</th>
			
			<th>LastName</th>

			<th>ตำแหน่ง</th>

			<th>รูป</th>
		</tr>
		<tr>
			<td>
			<?php
				$query = mysqli_query($conn , "select * from employee");
				while($row = mysqli_fetch_assoc($query))	 
				{
					echo $row['first_name'] ."<br>";
				}
			?>
			</td>
			<td>
			<?php
				$query = mysqli_query($conn , "select * from employee");
				while($row = mysqli_fetch_assoc($query))	 
				{
					echo $row['last_name'] ."<br>";
				}
			?>
			</td>
			<td>
			<?php
				$query = mysqli_query($conn , "select * from employee");
				while($row = mysqli_fetch_assoc($query))	 
				{
					echo $row['position'] ."<br>";
				}
			?>
			</td>
			<td>
			<?php
				$query = mysqli_query($conn , "select * from employee");
				while($row = mysqli_fetch_assoc($query))	 
				{
					echo $row['images'] ."<br>";
				}
			?>
			</td>
			<td>
			<?php
				$query = mysqli_query($conn , "select * from employee");
				while($row = mysqli_fetch_assoc($query))	 
				{
					echo "<td><a onClick=\"javascript: return confirm('ต้องการลบ?');\" href='deletes.php?emp_id=".$row['emp_id']."'>Del</a></td><tr>";
				}
			?>
			</td>
		</tr>
		
	</table>
	
</body>
</html>