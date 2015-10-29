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
	$query = "SELECT * FROM Item";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("database failed");
	}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Items</title>
  <link href="home.css" rel="stylesheet">
</head>

<body>

<div id="main">
<h1>Items</h1>

<table>
	<tr>
	  <th>Id</th>
	  <th>Item_name</th>
	  <th>Category_id</th>
	  <th>Supplier_id</th>
	  <th>Price</th>
	  <th>Description</th>
	  <th>Combine_id1</th>
	  <th>Combine_id2</th>
	  <th>Combine_id3</th>
	</tr>
	<?php
		while ($subject = mysqli_fetch_assoc($result)) {
	?>

	 <tr>
		<td><?php echo $subject["Id"]; ?></td>
		<td><?php echo $subject["Item_name"]; ?></td>
		<td><?php echo $subject["Category_id"]; ?></td>
		<td><?php echo $subject["Supplier_id"]; ?></td>
		<td><?php echo $subject["Price"]; ?></td>
		<td><?php echo $subject["Combine_id1"]; ?></td>
		<td><?php echo $subject["Combine_id2"]; ?></td>
		<td><?php echo $subject["Combine_id3"]; ?></td>
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