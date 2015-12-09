<?php
include_once "global.php";
include_once "db_connect.php";
include_once "telemarket_header.php";

$query = "select * from member order by reserveCount desc";
$return = mysql_query($query) or die(mysql_error());
while($result = mysql_fetch_array($return)){
print <<< eot
	
	<CENTER>
		<TABLE>
			<TR><TD>NAME:</TD><TD>$result[6]</TD></TR>
			<TR><TD>GENDER:</TD><TD>$result[2]</TD></TR>
			<TR><TD>DATE OF BIRTH:</TD><TD>$result[3]</TD></TR>
			<TR><TD>EMAIL:</TD><TD>$result[0]</TD></TR>
			<TR><TD>ACTIVITY COUNT:</TD><TD>$result[4]</TD></TR>
			<TD><TR><HR></TD></TR>
		</TABLE>
	</CENTER>

eot;
}

?>