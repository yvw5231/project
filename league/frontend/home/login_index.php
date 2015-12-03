<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>Please log in:</h1>
<div id="login">
<h2>Login </h2>
<form action="" method="post">
<label>UserName :</label>
<input id="username" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<?php
?>
<b id="logout"><a href="./signup.php">Sign Up</a></b>
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>
