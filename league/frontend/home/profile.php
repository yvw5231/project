<?php
	include('session.php');
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
		$user_sql=mysql_query("select * from user where username='$login_session'", $connection);
		$result = mysql_fetch_assoc($user_sql);
		include("./nav.html");
	?>


	<div id="profile">
	<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
	
	<div class="content container">
	    <h2>Our Items</h2>
	    <div class="row">
	        <section class="col-md-4">
				<img class="icon" src="./images/" alt="Icon">
	        </section>
				
	        <section class="col-md-4">
		        <h2><?php echo $result['Username']; ?></h2>
		        <p><?php echo $result['Phone_num']; ?></p>
	        </section>
	    </div><!-- row -->
	</div><!-- content container -->


	<b id="logout"><a href="logout.php">Log Out</a></b>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
