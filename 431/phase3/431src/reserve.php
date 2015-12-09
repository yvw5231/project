<?php
include_once "global.php";
include_once "db_connect.php";
include "header.php";

//************************************receive variables from reserve.php
$title = isset($_GET["title"])?$_GET["title"]:null;
$isbn = isset($_GET["isbn"])?$_GET["isbn"]:null;
$category = isset($_GET["category"])?$_GET["category"]:null;
$description = isset($_GET["description"])?$_GET["description"]:null;

$titleS = isset($_GET["titleS"])?$_GET["titleS"]:null;
$isbnS = isset($_GET["isbnS"])?$_GET["isbnS"]:null;
$categoryS = isset($_GET["categoryS"])?$_GET["categoryS"]:null;
$descriptionS = isset($_GET["descriptionS"])?$_GET["descriptionS"]:null;

//************************************get SQL statement if user searches
if($title<>"" && $titleS<>""){
	$query = "select * from books where title like '%$title%'";
}else if($isbn<>"" && $isbnS<>""){
	$query = "select * from books where isbn like '$isbn'";
}else if($category<>"" && $categoryS<>""){
	$query = "select * from books where category like '%$category%'";
}else if($description<>"" && $descriptionS<>""){
	$query = "select * from books where description like '%$description%'";
} else if($titleS<>"" || $isbnS<>"" || $category<>"" || $descriptionS<>""){
	print "Invalid Input!!!<BR>";
}

//*****************************************count the number of books user renting + reserving
$check = "select count(*) from reservations where memberid = '$userid'";
$return = mysql_query($check) or die(mysql_error());
$result = mysql_fetch_array($return);
$total = $result[0];

$check = "select count(*) from rents where memberid = '$userid' and returnConfirm = 0";
$return = mysql_query($check) or die(mysql_error());
$result = mysql_fetch_array($return);
$total = $total + $result[0];
//*****************************************user searches
if($titleS<>"" || $isbnS<>"" || $categoryS<>"" || $descriptionS<>""){
	//**********************************search the books
	$return = mysql_query($query) or die(mysql_error());
	
	//**********************************prints on the results
	while($result = mysql_fetch_array($return)){
		$result[5] = nl2br($result[5]);
print <<< eot2
		<TABLE>
		<HR>
		<TR><TD>ISBN:</TD><TD>$result[0]</TD><TR>
		<TR><TD>Rating:</TD><TD>$result[1]</TD><TR>
		<TR><TD>AUTHOR:</TD><TD>$result[2]</TD><TR>
		<TR><TD>TITLE:</TD><TD>$result[3]</TD><TR>
		<TR><TD>CATEGORY:</TD><TD>$result[4]</TD><TR>
		<TR><TD>DESCRIPTION:</TD><TD>$result[5]</TD><TR>
		<TR><TD>URL:</TD><TD>$result[6]</TD><TR>
		<TR><TD>PUBLISHER:</TD><TD>$result[7]</TD><TR>
		<TR><TD>STOCK:</TD><TD>$result[8]</TD><TR>
		</TABLE>
eot2;
		if($result[8] > 0 && $total >= 0 && $total < 10){
print <<< eot3
				<FORM METHOD = "get" ACTION = "finish_reserve.php">
				<INPUT TYPE = "hidden" VALUE = $result[0] NAME = "isbnR">
				<INPUT TYPE = "submit" VALUE = "Reserve" NAME = "reserve"></FORM>
eot3;
		print "<HR>";
		}
	}
}else{
print <<< eot1
	<HTML>
	<HEAD>
	</HEAD>
	<BODY>
		<CENTER>
			<TABLE>	
				<FORM METHOD = "get" ACTION = "reserve.php">
				<TR>
					<TH>Search by Title</TH>
					<TH>Search by ISBN</TH>
					<TH>Search by Category</TH>
					<TH>Search by Description</TH>
				</TR>
				<TR>
					<TD><INPUT TYPE = "text" NAME = "title"></TD>
					<TD><INPUT TYPE = "text" NAME = "isbn"></TD>
					<TD><SELECT NAME = "category">
						<OPTION VALUE = "fiction">Fiction</OPTION>
						<OPTION VALUE = "science">Science</OPTION>
						<OPTION VALUE = "mathematics">Mathematics</OPTION>
						<OPTION VALUE = "business">Business</OPTION>
						<OPTION VALUE = "art">Art</OPTION>
						<OPTION VALUE = "religion">Religion</OPTION>
						<OPTION VALUE = "medical">Medical</OPTION>
					</SELECT></TD>
					<TD><INPUT TYPE = "text" NAME = "description"></TD>
				</TR>
				<TR>
					<TD><INPUT TYPE = "submit" VALUE = "Submit" NAME = "titleS"></TD>
					<TD><INPUT TYPE = "submit" VALUE = "Submit" NAME = "isbnS"></TD>
					<TD><INPUT TYPE = "submit" VALUE = "Submit" NAME = "categoryS"></TD>
					<TD><INPUT TYPE = "submit" VALUE = "Submit" NAME = "descriptionS"></TD>
				</TR>
				</FORM>
			</TABLE>
eot1;

$query = "select * from books";
$return = mysql_query($query) or die(mysql_error());

while($result = mysql_fetch_array($return)){
print <<< eot4
			<TABLE>
			<TR><TD>ISBN:</TD><TD>$result[0]</TD></TR>
			<TR><TD>Rating:</TD><TD>$result[1]</TD></TR>
			<TR><TD>AUTHOR:</TD><TD>$result[2]</TD></TR>
			<TR><TD>TITLE:</TD><TD>$result[3]</TD></TR>
			<TR><TD>CATEGORY:</TD><TD>$result[4]</TD></TR>
			<TR><TD>DESCRIPTION:</TD><TD>$result[5]</TD></TR>
			<TR><TD>URL:</TD><TD>$result[6]</TD></TR>
			<TR><TD>PUBLISHER:</TD><TD>$result[7]</TD></TR>
			<TR><TD>STOCK:</TD><TD>$result[8]</TD></TR>
			<TD><TR><HR></TD></TR>
			</TABLE>
		</CENTER>
	</BODY>
	</HTML>
eot4;
}
}

?>