<?php
session_start();
if(!$_GET){
	die("PAGE Not Found");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Bootstrap</title>
</head>
<body>

<?php
	include('./../nav.html');
	include('./../dbsetup.php');
	$itemid = (int) $_GET['itemid'];
	$query = "SELECT * FROM Item WHERE Item_id=$itemid";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("Not Found");
	}
	$subject = mysqli_fetch_assoc($result);
?>
<div class="content container" width="100%" height="100%" >
    <h2> <?php echo $subject['Item_name']; ?> </h2>
    <div class="row" >

        <section class="col-md-4">
	<img class="icon" src="./../images/<?php echo $subject['Image']; ?>" alt="Icon" width="300" height="315">
	<p><b>Description: </b> <?php echo $subject['Description']; ?> </p>
	<p>Price: $ <?php echo $subject['Price']; ?> </p>
        </section>
	<section class="col-md-4">
		<input type="button" name="addItem" value="Add to Card"/>
	</section>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
