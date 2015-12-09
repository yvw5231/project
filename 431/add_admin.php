<?php
include_once "global.php";
include_once "db_connect.php";
include "admin_header.php";

$adminid = isset($_GET["adminid"])?$_GET["adminid"]:null;
$deliveryid = isset($_GET["deliveryid"])?$_GET["deliveryid"]:null;
$telemarketid = isset($_GET["telemarketid"])?$_GET["telemarketid"]:null;
$passwordAdmin = isset($_GET["passwordAdmin"])?$_GET["passwordAdmin"]:null;
$passwordDelivery = isset($_GET["passwordDelivery"])?$_GET["passwordDelivery"]:null;
$passwordTelemarket = isset($_GET["passwordTelemarket"])?$_GET["passwordTelemarket"]:null;
$admin = isset($_GET["admin"])?$_GET["admin"]:null;
$delivery = isset($_GET["delivery"])?$_GET["delivery"]:null;
$telemarket = isset($_GET["telemarket"])?$_GET["telemarket"]:null;

if($admin<>""){
	$query = "insert into admin values('$adminid','$passwordAdmin')";
	$return = mysql_query($query);
print <<< eot
	<CENTER>
	<FONT SIZE = 8>
		A NEW ADMINISTRATOR ACCOUNT HAS BEEN CREATED<BR>
	</FONT>
	</CENTER>
eot;
}else if($delivery<>""){
	$query = "insert into delivery values('$deliveryid','$passwordDelivery')";
	$return = mysql_query($query);
print <<< eot
	<CENTER>
	<FONT SIZE = 8>
		A NEW DELIVERY STAFF ACCOUNT HAS BEEN CREATED<BR>
	</FONT>
	</CENTER>
eot;
}else if($telemarket<>""){
	$query = "insert into telemarket values('$telemarketid','$passwordTelemarket')";
	$return = mysql_query($query);
print <<< eot
	<CENTER>
	<FONT SIZE = 8>
		A NEW TELEMARKET STAFF ACCOUNT HAS BEEN CREATED<BR>
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
				<FORM METHOD = "get" ACTION = "add_admin.php">
			<TABLE>
				<TR><TH>Create a new administrator account</TH></TR>
				<TR><TD>Administrator ID:</TD><TD><INPUT TYPE = "text" NAME = adminid></TD></TR>
				<TR><TD>Password:</TD><TD><INPUT TYPE = "text" NAME = passwordAdmin></TD></TR>
				<TR><TD><INPUT TYPE = "submit" VALUE = "Enter" NAME = "admin"></TD></TR>
				<TR><TD><BR></TR></TD>
				<TR><TH>Create a new delivery staff account</TH></TR>
				<TR><TD>Delivery staff ID:</TD><TD><INPUT TYPE = "text" NAME = deliveryid></TD></TR>
				<TR><TD>Password:</TD><TD><INPUT TYPE = "text" NAME = passwordDelivery></TD></TR>
				<TR><TD><INPUT TYPE = "submit" VALUE = "Enter" NAME = "delivery"></TD></TR>
				<TR><TD><BR></TR></TD>
				<TR><TH>Create a new temelarket staff account</TH></TR>
				<TR><TD>Telemarket staff ID:</TD><TD><INPUT TYPE = "text" NAME = telemarketid></TD></TR>
				<TR><TD>Password:</TD><TD><INPUT TYPE = "text" NAME = passwordTelemarket></TD></TR>
				<TR><TD><INPUT TYPE = "submit" VALUE = "Enter" NAME = "telemarket"></TD></TR>
			</TABLE>
				</FORM>	
		</CENTER>
	</BODY>
	</HTML>
eot3;


?>