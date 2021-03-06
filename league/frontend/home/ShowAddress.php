<?php
  // 1. Create a database connection
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "league";
  $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("Database connection failed: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>

<?php
	$query = "SELECT * FROM Address";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("database failed");
	}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Address</title>
  <link href="home.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>Address</h1>

<table>
	<tr>
	  <th>Id</th>
	  <th>Street</th>
	  <th>Apt_num</th>
	 <th>Zip</th>
	  <th>Permanent_addr</th>
	</tr>
	<?php
		while ($subject = mysqli_fetch_assoc($result)) {
	?>

	 <tr>
		<td><?php echo $subject["Id"]; ?></td>
		<td><?php echo $subject["Street"]; ?></td>
		<td><?php echo $subject["Apt_num"]; ?></td>
		<td><?php echo $subject["Zip"]; ?></td>
		<td><?php echo $subject["Permanent_addr"]; ?></td>
	</tr> 

	<?php
		}
	?>

</table>

<?php
		  // 4. Release returned data
		  mysqli_free_result($result);
?>
</div>

</body>
</html>


<?php
  // 5. Close database connection
  mysqli_close($connection);
?>
