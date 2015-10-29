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
	$query = "SELECT * FROM Category";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("database failed");
	}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Category</title>
  <link href="home.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>Category</h1>

<table>
	<tr>
	  <th>Category_id</th>
	  <th>Category_name</th>
	  <th>Super_category</th>
	</tr>
	<?php
		while ($subject = mysqli_fetch_assoc($result)) {
	?>

	 <tr>
		<td><?php echo $subject["Category_id"]; ?></td>
		<td><?php echo $subject["Category_name"]; ?></td>
		<td><?php echo $subject["Super_category"]; ?></td>
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