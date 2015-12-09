<?php
include_once "global.php";
include_once "db_connect.php";
include_once "delivery_header.php";

//receive variables from confirm_return.php
$select = isset($_GET["select"])?$_GET["select"]:null;
$confirm = isset($_GET["confirm"])?$_GET["confirm"]:null;
$idRent = isset($_GET["idRent"])?$_GET["idRent"]:null;
$nameRent = isset($_GET["nameRent"])?$_GET["nameRent"]:null;
$isbnRent = isset($_GET["isbnRent"])?$_GET["isbnRent"]:null;

if($confirm<>""){
	//get memberid
	//*********************************************insert a new rent tuple into rents
	$date = date("Y-m-d");
	$query = "insert into rents (memberid, isbn, returnConfirm, returnDate, rentDate) values ('$idRent','$isbnRent',0,null,'$date')";
	$return = mysql_query($query) or die(mysql_error());
	//***********************************************delete the confirmed reservation
	$query = "delete from reservations where memberid = '$idRent' and isbn = '$isbnRent'";
	$return = mysql_query($query) or die(mysql_error());
	
	$select = null;
}
if($select<>""){
	//************************************get user's name
	$query = "select name from member where memberid = '$idRent'";
	$return = mysql_query($query) or die(mysql_error());
	$nameResult = mysql_fetch_array($return);
	print "USER NAME: ".$nameResult[0];
	
	$query = "select * from reservations where memberid = '$idRent'";
	$return = mysql_query($query) or die(mysql_error());
	while($result = mysql_fetch_array($return)){
		$queryTitle = "select title from books where isbn = '$result[1]'";
		$returnTitle = mysql_query($queryTitle) or die(mysql_error());
		$resultTitle = mysql_fetch_array($returnTitle);

print <<< eot3
		<TABLE>
			<TR><TD>REVERVE ID:</TD><TD>$result[3]</TD></TR>
			<TR><TD>ISBN:</TD><TD>$result[1]</TD></TR>
			<TR><TD>TITLE:</TD><TD>$resultTitle[0]</TD></TR>
			<TR><TD>RESERVED DATE:</TD><TD>$result[2]</TD></TR>
		</TABLE>
			<FORM METHOD = "get" ACTION = "confirm_rent.php">
			<INPUT TYPE = "hidden" VALUE = $idRent NAME = "idRent">
			<INPUT TYPE = "hidden" VALUE = $nameResult[0] NAME = "nameRent">
			<INPUT TYPE = "hidden" VALUE = $result[1] NAME = "isbnRent">
			<INPUT TYPE = "submit" VALUE = "Confirm" NAME = "confirm">
			</FORM>
eot3;
	}
}else{
	
print <<< eot1
		<CENTER>
		<FONT SIZE = "6">
			Select a User from Name
		</FONT>
		
		<FORM METHOD = "get" ACTION = "confirm_rent.php">
			<SELECT NAME = "idRent">
eot1;

	//************************************************

	$query = "select distinct memberid from reservations";
	$return = mysql_query($query) or die(mysql_error());
	while($result = mysql_fetch_array($return)){
		$queryName = "select name from member where memberid = '$result[0]'";
		$returnName = mysql_query($queryName) or die(mysql_error());
		$resultName = mysql_fetch_array($returnName);
		print "<OPTION VALUE = $result[0]>$resultName[0]</OPTION>";
	}

print <<< eot2
			</SELECT></BR>
			<INPUT TYPE = "submit" VALUE = "Select" NAME = "select">
			</FORM>
			<BR><BR>
		</CENTER>
eot2;
}
?>