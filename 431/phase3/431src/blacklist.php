<?php
include_once "global.php";
include_once "db_connect.php";
include "admin_header.php";

$query = "select m.name, avg(u.rating), r.memberid from member as m, rents as r, userrating as u where m.memberid = r.memberid and r.transactionid = u.transactionid group by r.memberid";
$return = mysql_query($query)or die(mysql_error());
while($result = mysql_fetch_array($return)){
print <<< eot
	<CENTER>
			<TABLE>
				<TR><TH>User Rating Order by Ascending</TH></TR>
				<TR><TD>NAME:</TD><TD>$result[0]</TD></TR>
				<TR><TD>MEMBER ID:</TD><TD>$result[2]</TD></TR>
				<TR><TD>RATING:</TD><TD>$result[1]</TD></TR>
				<TR><TD><BR></TR></TD>
			</TABLE>
	</CENTER>
eot;
}


?>