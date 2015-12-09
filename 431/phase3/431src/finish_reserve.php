<?php
include_once "global.php";
include_once "db_connect.php";
include "header.php";
 
 //***********************************receive isbn from reserve.php
$date = date("Y-m-d");
 
$isbnR = isset($_GET["isbnR"])?$_GET["isbnR"]:null;
$query = "insert into reservations(memberid, isbn, date) values ('$userid', '$isbnR', '$date')";
$return = mysql_query($query) or die(mysql_error());

//************************************increment by 1 for reserveCount in member
$query = "update member set reserveCount = reserveCount + 1 where memberid = '$userid'";
$return = mysql_query($query) or die(mysql_error());

//************************************decrement 1 from stock in books
$query = "update books set stock = stock - 1 where isbn = '$isbnR' and stock > 0";
$return = mysql_query($query) or die(mysql_error());
print <<< eot
	<HTML>
	<HEAD>
	</HEAD>
	<BODY>
		<CENTER>
			<FONT SIZE = 8>
				You successfully reserved the book!<BR>
				Please pick it up in a week from "$date"
			</FONT>
		</CENTER>
	</BODY>
	</HTML>

eot;
?>