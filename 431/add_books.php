<?php
include_once "global.php";
include "admin_header.php";
include_once "db_connect.php";

//********************************receive book info from add_book.php
$isbn = isset($_GET["isbn"])?$_GET["isbn"]:null;
$author = isset($_GET["author"])?$_GET["author"]:null;
$title = isset($_GET["title"])?$_GET["title"]:null;
$category = isset($_GET["category"])?$_GET["category"]:null;
$description = isset($_GET["description"])?$_GET["description"]:null;
$url = isset($_GET["url"])?$_GET["url"]:null;
$publisher = isset($_GET["publisher"])?$_GET["publisher"]:null;
$stock = isset($_GET["stock"])?$_GET["stock"]:null;
$enter = isset($_GET["enter"])?$_GET["enter"]:null;

$rating = 0;

//admin entered add book
if($enter<>""){
	//***************************************insert escape character before all the ' char
	$description = addslashes($description);
	$query = "insert into books values('$isbn','$rating','$author','$title','$category','$description','$url','$publisher','$stock')";
	$return = mysql_query($query) or die(mysql_error());
print <<< eot
	<CENTER>
	<FONT SIZE = 8>
		THE BOOK IS SUCCESSFULLY ADDED<BR>
	</FONT>
	</CENTER>
eot;
}
print <<< eot3
		<HTML>
	<HEAD>
	<STYLE>
		table, TR{
			border: 3px solid #a00000;
			padding: 5px;
	}
	</STYLE>
	</HEAD>
	<BODY>
		<CENTER>
			<TABLE>
				<FORM METHOD = "get" ACTION = "add_books.php">
				<TR><TH>Fill out the book information</TH></TR>
				<TR><TD>ISBN:</TD><TD><INPUT TYPE = "text" NAME = isbn></TD></TR>
				<TR><TD>AUTHOR:</TD><TD><textarea NAME = author ROWS = 1 COLS = 100></textarea></TD></TR>
				<TR><TD>TITLE:</TD><TD><textarea NAME = title ROWS = 5 COLS = 100></textarea></TD></TR>
				<TR><TD>CATEGORY:</TD><TD><SELECT NAME = "category">
						<OPTION VALUE = "art">Art</OPTION>
						<OPTION VALUE = "business">Business</OPTION>
						<OPTION VALUE = "children">Children</OPTION>
						<OPTION VALUE = "fiction">Fiction</OPTION>
						<OPTION VALUE = "history">History</OPTION>
						<OPTION VALUE = "medicines">Medicines</OPTION>
						<OPTION VALUE = "religion">Religion</OPTION>
						<OPTION VALUE = "science">Science</OPTION>
					</SELECT></TD></TR>
				<TR><TD>DESCRIPTION:</TD><TD><textarea NAME = description ROWS = 15 COLS = 100></textarea></TD></TR>
				<TR><TD>URL:</TD><TD><textarea NAME = url ROWS = 5 COLS = 100></textarea></TD></TR>
				<TR><TD>PUBLISHER:</TD><TD><textarea NAME = publisher ROWS = 3 COLS = 100></textarea></TD></TR>
				<TR><TD>STOCK:</TD><TD><INPUT TYPE = "text" NAME = stock></TD></TR>
			</TABLE>
					<INPUT TYPE = "submit" VALUE = "Enter" NAME = "enter">
				</FORM>	
		</CENTER>
	</BODY>
	</HTML>
eot3;

?>