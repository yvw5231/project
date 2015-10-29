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
	$query = "SELECT * FROM User";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("database failed");
	}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Users</title>
  <link href="home.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>Users</h1>

<table>
	<tr>
	  <th>Id</th>
	  <th>Email_address</th>
	  <th>Phone_num</th>
	  <th>Username</th>
	  <th>Password</th>
	</tr>
	<?php
		while ($subject = mysqli_fetch_assoc($result)) {
	?>

	 <tr>
		<td><?php echo $subject["Id"]; ?></td>
		<td><?php echo $subject["Email_address"]; ?></td>
		<td><?php echo $subject["Phone_num"]; ?></td>
		<td><?php echo $subject["Username"]; ?></td>
		<td><?php echo $subject["Password"]; ?></td>
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