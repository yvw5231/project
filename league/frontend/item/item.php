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
	$Street = $Apt_num = $Zip = $Permanent_addr = "";
	$StreetErr = $Apt_numErr = $ZipErr = $Permanent_addrErr = "";

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
   		if (empty($_POST["Street"])) {
     		$StreetErr = "Street is required";
   		} else {
     		$Street = test_input($_POST["Street"]);
   		}
   	

   
   		if (empty($_POST["Apt_num"])) {
     		$Apt_numErr = "Apt_num is required";
   		} else {
     		$Apt_num = test_input($_POST["Apt_num"]);
   		}
   	

   
   		if (empty($_POST["Zip"])) {
     		$ZipErr = "Zip is required";
   		} else {
    	  $Zip = test_input($_POST["Zip"]);
   		}
   	

   
   		if (empty($_POST["Permanent_addr"])) {
    		$Permanent_addrErr = "Permanent_addr is required";
   		} else {
     		$Permanent_addr = test_input($_POST["Permanent_addr"]);
   		}
   	
   }
   function test_input($data) {
   		$data = trim($data);
   		$data = stripslashes($data);
   		$data = htmlspecialchars($data);
   		return $data;
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
		<title>Item</title>
	</head>
	<style>
	.error {color: #FF0000;}
	</style>
	<body>
	
	<?php
		$insertquery = "INSERT INTO Address (Street, Apt_num, Zip, Permanent_addr) VALUES
						(? , ? , ? , ?);";
		$stmt = mysqli_prepare($connection, $insertquery);
		mysqli_stmt_bind_param($stmt, 'ssss', $Street, $Apt_num, $Zip, $Permanent_addr);
		//$stmt->bind_param('$Street', $Apt_num, '$Zip', $Permanent_addr);
		// $stmt->bind_param(1, $Street);
		// $stmt->bindParam(2, $Apt_num);
		// $stmt->bindParam(1, $Zip);
		// $stmt->bindParam(1, $Permanent_addr);
		if (mysqli_affected_rows($connection) == 1) {
			echo "insert success";
		}
	?> 

	<h2>Insert a row into Address</h2>
		<p><span class="error">* required field.</span></p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		Street: <input type="text" name="Street" value="<?php echo $Street;?>">
		<span class="error">* <?php echo $StreetErr; ?></span>
		<br><br>
		Apt_num: <input type="text" name="Apt_num" value="<?php echo $Apt_num;?>">
		<span class="error">* <?php echo $Apt_numErr; ?></span>
		<br><br>
		Zip: <input type="text" name="Zip" value="<?php echo $Zip;?>">
		<span class="error">* <?php echo $ZipErr; ?></span>
		<br><br>
		Permanent_addr: <input type="text" name="Permanent_addr" value="<?php echo $Permanent_addr;?>">
		<span class="error">* <?php echo $Permanent_addrErr; ?></span>
		<br><br>
		<input type="submit" name="submit" value="Submit"> 
		
	</form>

	<?php
		echo "<h2>Your Input:</h2>";
		echo $Street;
		echo "<br>";
		echo $Apt_num;
		echo "<br>";
		echo $Zip;
		echo "<br>";
		echo $Permanent_addr;
		mysqli_stmt_execute($stmt);
	?> 


		<?php
		  // 4. Release returned data
		  mysqli_free_result($result);
		?>
	</body>
</html>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>