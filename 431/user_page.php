<?php
include_once "global.php";
include_once "db_connect.php";
include "header.php";
//***************************************************

//****************************************************show library information
print <<< eot1
	<HTML>
	<HEAD>
	<STYLE>
		table{
		border: 5px solid #a00000;
		padding: 5px;
		position: absolute;
		left: 20px;
	}
	</STYLE>
	</HEAD>
	<BODY>
		<TABLE>
			<TR>
				<TH>ADDRESS</TH>
			</TR>
				<TR><TD>Pattee Library Paterno Library,</TD></TR>
				<TR><TD>510 Patterno Library,</TD></TR>
				<TR><TD>University Park,</TD></TR>
				<TR><TD>PA 16802</TD></TR>
				<BR>
				<TR><TD>TEL: 814-865-3616</TD></TR>
				<TR><TD>FAX: 814-863-7502</TD></TR>
		</TABLE>
		<CENTER>
			<IMG SRC = "image/pattee.png">
		</CENTER>
	</BODY>
	</HTML>

eot1;


?>