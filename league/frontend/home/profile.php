<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
<?php
$user_sql=mysql_query("select * from user where username='$login_session'", $connection);
$result = mysql_fetch_assoc($user_sql);

echo $result['Username'];
echo $result['Phone_num'];


?>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>