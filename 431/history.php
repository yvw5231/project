<?php
include_once "global.php";
include_once "db_connect.php";
include "header.php";

//*******************************************get variable from history.php
$rate = isset($_GET["rate"])?$_GET["rate"]:null;
$rating = isset($_GET["rating"])?$_GET["rating"]:null;
$isbn = isset($_GET["isbn"])?$_GET["isbn"]:null;
$comment = isset($_GET["comment"])?$_GET["comment"]:null;

if($rate<>""){
	$query = "select count(*) from rating where memberid = '$userid' and isbn = '$isbn'";
	$return = mysql_query($query) or die(mysql_error());
	$num_row = mysql_fetch_array($return);
	//create a new rating if it doesn's exist
	if($num_row[0] == 0){
		print "NEW";
		$query = "insert into rating(isbn, starPoint, comment, memberid) values ('$isbn','$rating','$comment','$userid')";
		$return = mysql_query($query) or die(mysql_error());
		$result = mysql_fetch_array($return);
	}else{
		print "OLD";
		//*************************************************if the rating exists, update it
		$query = "update rating set starPoint = '$rating' where memberid = '$userid' and isbn = '$isbn'";
		$return = mysql_query($query) or die(mysql_error());
		$query = "update rating set comment = '$comment' where memberid = '$userid' and isbn = '$isbn'";
		$return = mysql_query($query) or die(mysql_error());
		
	}
}

print <<< eot4
	<FONT SIZE = "6">Books Rented</FONT>
eot4;

//******************************************receive data from history.php
$query = "select distinct isbn from rents where memberid = '$userid'";
$return = mysql_query($query) or die(mysql_error());

	while($result = mysql_fetch_array($return)){
	//***********************************get book title
	$queryTitle = "select title from books where isbn = '$result[0]'";
	$returnTitle = mysql_query($queryTitle) or die(mysql_error());
	$resultTitle = mysql_fetch_array($returnTitle);
	
	$query = "select transactionid, rentDate, returnDate from rents where memberid = '$userid' and isbn = '$result[0]'";
	$returnExtra = mysql_query($query) or die(mysql_error());
	$resultExtra = mysql_fetch_array($returnExtra);
	//***********************************get book rating
	$queryRate = "select starPoint, comment from rating where memberid = '$userid' and isbn = '$result[0]'";
	$returnRate = mysql_query($queryRate) or die(mysql_error());
	$resultRate = mysql_fetch_array($returnRate);
	$comment = $resultRate[1];
	if($resultRate[0] == null){
		$rating = 0;
	}else{
		$rating = $resultRate[0];
	}
	
print <<< eot1
			<TABLE>
				<FONT SIZE = "5">
					<TR><TD>Transaction ID:</TD><TD>$resultExtra[0]</TD></TR>
					<TR><TD>TITLE:</TD><TD>$resultTitle[0]</TD></TR>
					<TR><TD>ISBN:</TD><TD>$result[0]</TD></TR>
					<TR><TD>Rent Date:</TD><TD>$resultExtra[1]</TD></TR>
					<TR><TD>Return Date:</TD><TD>$resultExtra[2]</TD></TR>
					<TR><TD>Rate:</TD><TD>$rating</TD></TR>
				</FONT>
			</TABLE>
			<FORM METHOD = "get" ACTION = "history.php">
				<input id="rating10" type="radio" name="rating" value="10">
				<label for="rating10">10</label>
				<input id="rating9" type="radio" name="rating" value="9">
				<label for="rating9">9</label>
				<input id="rating8" type="radio" name="rating" value="8">
				<label for="rating8">8</label>
				<input id="rating7" type="radio" name="rating" value="7">
				<label for="rating7">7</label>
				<input id="rating6" type="radio" name="rating" value="6">
				<label for="rating6">6</label>
				<input id="rating5" type="radio" name="rating" value="5">
				<label for="rating5">5</label>
				<input id="rating4" type="radio" name="rating" value="4">
				<label for="rating4">4</label>
				<input id="rating3" type="radio" name="rating" value="3">
				<label for="rating3">3</label>
				<input id="rating2" type="radio" name="rating" value="2">
				<label for="rating2">2</label>
				<input id="rating1" type="radio" name="rating" value="1">
				<label for="rating1">1</label>
				<BR>
				COMMENT	:<BR><textarea NAME = comment ROWS = 10 COLS = 100>$comment</textarea>
				<BR>
				<INPUT TYPE = "hidden" VALUE = $result[0] NAME = "isbn">
				<INPUT TYPE = "submit" VALUE = "Rate" NAME = "rate">
			</FORM>
			<BR><BR>
eot1;
}
print "<BR><HR><BR>";

print <<< eot4
	<FONT SIZE = "6">Books Reserved</FONT>
eot4;

//***************************************print all the reserved books
$query = "select distinct isbn from reservations where memberid = '$userid'";
$return = mysql_query($query) or die(mysql_error());

while($result = mysql_fetch_array($return)){
	//***********************************get book title
	$queryTitle = "select title from books where isbn = '$result[1]'";
	$returnTitle = mysql_query($queryTitle) or die(mysql_error());
	$resultTitle = mysql_fetch_array($returnTitle);
	
	$query = "select reserveid, date from reservations where userid = '$userid' and isbn = '$result[0]'";
	$return = mysql_query($query) or die(mysql_error());
	$idDate = mysql_fetch_array($return);
	
print <<< eot2
			<TABLE>
				<FONT SIZE = "5">
					<TR><TD>TRANSACTION ID:</TD><TD>$idDate[0]</TD></TR>
					<TR><TD>TITLE:</TD><TD>$resultTitle[0]</TD></TR>
					<TR><TD>ISBN:</TD><TD>$result[1]</TD></TR>
					<TR><TD>Reservation Date:</TD><TD>$idDate[1]</TD></TR>
					<TR><TD>Rate:</TD><TD>Not Available</TD></TR>
				</FONT>
				<BR><BR>
			</TABLE>
eot2;
}
?>