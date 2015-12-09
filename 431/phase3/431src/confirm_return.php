<?php
include_once "global.php";
include_once "db_connect.php";
include "admin_header.php";

//receive variables from confirm_return.php
$select = isset($_GET["select"])?$_GET["select"]:null;
$confirm = isset($_GET["confirm"])?$_GET["confirm"]:null;
$idReturn = isset($_GET["idReturn"])?$_GET["idReturn"]:null;
$nameReturn = isset($_GET["nameReturn"])?$_GET["nameReturn"]:null;
$isbnReturn = isset($_GET["isbnReturn"])?$_GET["isbnReturn"]:null;
$rating = isset($_GET["rating"])?$_GET["rating"]:null;
$transactionid = isset($_GET["transactionid"])?$_GET["transactionid"]:null;

if($confirm<>""){
	//*********************************************update the return information
	$date = date("Y-m-d");
	$query = "update rents set returnDate = '$date' where memberid = '$idReturn' and isbn = '$isbnReturn'";
	$return = mysql_query($query) or die(mysql_error());
	
	$query = "update rents set returnConfirm = 1 where memberid = '$idReturn' and isbn = '$isbnReturn'";
	$return = mysql_query($query) or die(mysql_error());
	
	$query = "insert into userrating (rating, transactionid) values ('$rating','$transactionid')";
	$return = mysql_query($query) or die(mysql_error());
	//increment stock by 1 in books
	$query = "update books set stock = stock + 1 where isbn = '$isbnR' and stock > 0";
	$return = mysql_query($query) or die(mysql_error());
print <<< eot
	<HTML>
	<HEAD>
	</HEAD>
	<BODY>
		<CENTER>
			<FONT SIZE = 8>
				The return is confirmed<BR>
			</FONT>
		</CENTER>
	</BODY>
	</HTML>

eot;
	$select = null;
}
if($select<>""){
		//************************************get user's name
	$query = "select name from member where memberid = '$idReturn'";
	$return = mysql_query($query) or die(mysql_error());
	$nameResult = mysql_fetch_array($return);
	print "USER NAME: ".$nameResult[0]."<BR><BR>";
	
	$query = "select * from rents where memberid = '$idReturn' and returnConfirm = 0";
	$return = mysql_query($query) or die(mysql_error());
	while($result = mysql_fetch_array($return)){
		$queryTitle = "select title from books where isbn = '$result[2]'";
		$returnTitle = mysql_query($queryTitle) or die(mysql_error());
		$resultTitle = mysql_fetch_array($returnTitle);

print <<< eot3
		<TABLE>
			<TR><TD>TRANSACTION ID:</TD><TD>$result[0]</TD></TR>
			<TR><TD>ISBN:</TD><TD>$result[2]</TD></TR>
			<TR><TD>TITLE:</TD><TD>$resultTitle[0]</TD></TR>
			<TR><TD>RENT DATE:</TD><TD>$result[5]</TD></TR>
		</TABLE>
			<FORM METHOD = "get" ACTION = "confirm_return.php">
			<INPUT TYPE = "hidden" VALUE = $idReturn NAME = "idReturn">
			<INPUT TYPE = "hidden" VALUE = $nameResult[0] NAME = "nameReturn">
			<INPUT TYPE = "hidden" VALUE = $result[2] NAME = "isbnReturn">
			<INPUT TYPE = "hidden" VALUE = $result[0] NAME = "transactionid">
			
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
			
			<INPUT TYPE = "submit" VALUE = "Confirm" NAME = "confirm">
			</FORM>
eot3;
	}
}else{
	//****************************************first page when admin click confirm return
print <<< eot1
		<CENTER>
		<FONT SIZE = "6">
			Select a User to confirm book returned
		</FONT>
		
		<FORM METHOD = "get" ACTION = "confirm_return.php">
			<SELECT NAME = "idReturn">
eot1;
	//************************************************

	$query = "select memberid from rents where returnConfirm = 0";
	$return = mysql_query($query) or die(mysql_error());
	while($result = mysql_fetch_array($return)){
		$queryName = "select name from member where memberid = '$result[0]'";
		$returnName = mysql_query($queryName) or die(mysql_error());
		$resultName = mysql_fetch_array($returnName);
		print	"<OPTION VALUE = $result[0]>$resultName[0]</OPTION>";
	}

print <<< eot2
			</SELECT></BR>
			<INPUT TYPE = "submit" VALUE = "Select" NAME = "select">
			</FORM>
			</CENTER>
			<BR><BR>
eot2;
}
?>