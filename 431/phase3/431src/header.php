<?php
//*******************************************read userid from file created in top page
$file = "userid.txt";
$userid = file_get_contents($file);
//************************************************************
print <<< eot2
	<HTML>
	<HEAD>
		<link rel="stylesheet" type="text/css" href="style.css">
		<TITLE>MY MONGO MARIA</TITLE>
	</HEAD>
	<BODY>
		<BODY BGCOLOR = "AliceBlue">
		<div class="adminNavbar">
			<ul>
				<li><a href="user_page.php">Home</a></li>
				<li><a href="about.php">About</a></li>
				<li><a href="reserve.php">Reserve</a></li>
				<li><a href="history.php">History</a></li>
				<li><a href="account_info.php">Account Info</a></li>
			</ul>
		</div>
		<CENTER>
			<IMG SRC = "image/logo.png">
			<BR><BR>
		</CENTER>
	</BODY>
	</HTML>
eot2;

?>