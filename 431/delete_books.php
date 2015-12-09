<?php
include_once "global.php";
include_once "db_connect.php";
include "admin_header.php";

$isbn = isset($_GET["isbn"])?$_GET["isbn"]:null;
$delete = isset($_GET["delete"])?$_GET["delete"]:null;
if($delete<>""){
	$query = "delete from books where isbn like '$isbn'";
	$return = mysql_query($query) or die(mysql_error());
	
print <<< eot
	<CENTER>
	<FONT SIZE = 8>
		THE BOOK IS SUCCESSFULLY DELETED<BR>
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
				<FORM METHOD = "get" ACTION = "delete_books.php">
				<TR><TH>Enter the ISBN of the book to delete</TH></TR>
				<TR><TD>ISBN:</TD><TD><INPUT TYPE = "text" NAME = isbn></TD></TR>
			</TABLE>
					<INPUT TYPE = "submit" VALUE = "Delete" NAME = "delete">
				</FORM>	
		</CENTER>
	</BODY>
	</HTML>
eot3;


?>