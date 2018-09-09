
<!DOCTYPE html>
<html lang="en">
<head>
  <title>BIB for ตุ๊ดตู่</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>

<body>
<table class="table table-hover">
	<thead>
		<tr>
			<th>Firstname</th>
			<th>Lastname</th>
			<th>E-mail</th>
			<th>Password</th>
			<th>Tel</th>
			<th>Size</th>
			<th>Age</th>
			<th>Gender</th>

		</tr>
	</thead>
<tbody>
<?php
include("conn/mysqlcon.php");
$sql = "SELECT * FROM userprofile";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) 
	{
		
?>
 
	<tr>
	
			<td><?php echo $row["firstname"];?></td>
			<td><?php echo $row["lastname"];?></td>
			<td><?php echo $row["email"];?></td>
			<td><?php echo $row["password"];?></td>
			<td><?php echo $row["tel"];?></td>
			<td><?php echo $row["size"];?></td>
			<td><?php echo $row["age"];?></td>
			<td><?php echo $row["gender"];?></td>
	</tr>

<?php
	}
} else {
    echo "0 results";
	
}
?>
</tbody>
</table>
</body>
</html>