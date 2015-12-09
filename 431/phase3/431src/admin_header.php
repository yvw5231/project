<?php

//*********************************read adminid from file created in the top page
$file = "adminid.txt";
$userid = file_get_contents($file);

//*****************************************************
print <<< eot2
	<HTML>
	<HEAD>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<TITLE>MY MONGO MARIA</TITLE>
	</HEAD>
	<BODY>
		<BODY BGCOLOR = "AliceBlue">
		<div class="adminNavbar">
			<ul>
				<li><a href="admin_page.php">Home</a></li>
				<li><a href="add_books.php">Add Books</a></li>
				<li><a href="delete_books.php">Delete Books</a></li>
				<li><a href="confirm_rent.php">Confirm Rent</a></li>
				<li><a href="confirm_return.php">Confirm Return</a></li>
				<li><a href="blacklist.php">BlackList</a></li>
				<li><a href="add_admin.php">Add Administrator</a></li>
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