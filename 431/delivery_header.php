<?php

//*********************************read adminid from file created in the top page
$file = "deliveryid.txt";
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
		<CENTER>
			<IMG SRC = "image/logo.png">
			<BR><BR>
		</CENTER>
	</BODY>
	</HTML>
eot2;

?>