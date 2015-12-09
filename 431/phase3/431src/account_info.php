<?php
include_once "global.php";
include_once "db_connect.php";
include "header.php";

$edit = isset($_GET["edit"])?$_GET["edit"]:null;
$submit = isset($_GET["submit"])?$_GET["submit"]:null;

if($submit<>""){
	$name = isset($_GET["name"]) ? $_GET["name"]:null;
	$gender = isset($_GET["gender"]) ? $_GET["gender"]:null;
	$dateOfBirth = isset($_GET["dateOfBirth"]) ? $_GET["dateOfBirth"]:null;
	$email = isset($_GET["email"]) ? $_GET["email"]:null;

	$userid = isset($_GET["userid"]) ? $_GET["userid"]:null;
	$password = isset($_GET["password"]) ? $_GET["password"]:null;
}else{
	$query = "select name, gender, dateOfBirth, email, memberid, password from member where memberid = '$userid'";
	$return = mysql_query($query) or die(mysql_error());
	$result = mysql_fetch_array($return);

	$name = $result[0];
	$gender = $result[1];
	$dateOfBirth = $result[2];
	$email = $result[3];
	$userid = $result[4];
	$password = $result[5];
	
	$query = "select * from address where addressid = '$userid'";
	$return = mysql_query($query) or die(mysql_error());
	$result = mysql_fetch_array($return);
	
	$aptNumber = $result[1];
	$street = $result[2];
	$city = $result[3];
	$zipcode = $result[4];
}
if($edit<>""){
//***********************************Edit pressed
	
print <<< eot1
	<HTML>
	<HEAD>
	</HEAD>
	<BODY>
		<CENTER>
			<TABLE>
				<FORM METHOD = "get" ACTION = "account_info.php">
				<TR><TH><BR>User Information</TH></TR>
				<TR><TD>Name:</TD><TD><INPUT TYPE = "text" VALUE = $name NAME = "name"></TD></TR>
eot1;
			if($gender == "male"){				
				print '<TR><TD>Male:</TD><TD><INPUT TYPE = "radio" NAME = "gender" VALUE = "male" checked></TD></TR>';
				print '<TR><TD>Female:</TD><TD><INPUT TYPE = "radio" NAME = "gender" VALUE = "female"></TD></TR>';
			}else{					
				print '<TR><TD>Male:</TD><TD><INPUT TYPE = "radio" NAME = "gender" VALUE = "male"></TD></TR>';
				print '<TR><TD>Female:</TD><TD><INPUT TYPE = "radio" NAME = "gender" VALUE = "female" checked></TD></TR>';
			}
print <<< eot2
				<TR><TD>Date Of Birth:</TD><TD><INPUT TYPE = "date" NAME = "dateOfBirth" VALUE = $dateOfBirth></TD></TR>
				<TR><TD>Email:</TD><TD><INPUT TYPE = "text" VALUE = $email NAME = "email"></TD></TR>
				<TR><TD>User ID:</TD><TD><INPUT TYPE = "text" VALUE = $userid NAME = "userid"></TD></TR>
				<TR><TD>Password:</TD><TD><INPUT TYPE = "text" VALUE = $password NAME = "password"></TD></TR>
				<TR><TH><BR>Address</TH></TR>
				<TR><TD>Apartment #:</TD><TD><INPUT TYPE = "text" VALUE = $aptNumber NAME = "password"></TD></TR>
				<TR><TD>Street:</TD><TD><INPUT TYPE = "text" VALUE = $street NAME = "password"></TD></TR>
				<TR><TD>City:</TD><TD><INPUT TYPE = "text" VALUE = $city NAME = "password"></TD></TR>
				<TR><TD>Zipcode:</TD><TD><INPUT TYPE = "text" VALUE = $zipcode NAME = "password"></TD></TR>
				</FORM>
			</TABLE>
			<INPUT TYPE = "submit" VALUE = "Submit" NAME = "submit">
		</CENTER>
	</BODY>
	</HTML>
eot2;

//***********************************//initialize $edit to null
$edit = null;

}else if($edit == null && $submit == null){
	//************************************print account infomation
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
				<TR><TH>Your Account Information</TH></TR>
				<TR><TD>NAME:</TD><TD>$name</TD></TR>
				<TR><TD>GENDER:</TD><TD>$gender</TD></TR>
				<TR><TD>Date Of Birth:</TD><TD>$dateOfBirth</TD></TR>
				<TR><TD>Email:</TD><TD>$email</TD></TR>
				<TR><TD>User ID:</TD><TD>$userid</TD></TR>
				<TR><TD>Password:</TD><TD>$password</TD></TR>
				<TR><TH><BR>Address</TH></TR>
				<TR><TD>Apartment #:</TD><TD>$aptNumber</TD></TR>
				<TR><TD>Street:</TD><TD>$street</TD></TR>
				<TR><TD>City:</TD><TD>$city</TD></TR>
				<TR><TD>Zipcode:</TD><TD>$zipcode</TD></TR>
			</TABLE>
			<FORM METHOD = "get" ACTION = "account_info.php">
					<INPUT TYPE = "submit" VALUE = "Edit" NAME = "edit">
				</FORM>	
		</CENTER>
	</BODY>
	</HTML>
eot3;
}else if($edit == null && $submit<>""){
	//**************************************************user changed the account info
	
	if(!($name<>"") || !($gender<>"") || !($dateOfBirth<>"") || !($email<>"") || !($userid<>"") || !($password<>""))
	{
		print "Invalid Input in sign up!!!<BR>";
	}else{
	$query = "select reserveCount from member where memberid = '$userid'";
	$return = mysql_query($query) or die(mysql_error());
	$result = mysql_fetch_array($return);
	$reserveCount = $result[0];
	
	$query = "delete from member where memberid = '$userid'";
	$return = mysql_query($query) or die(mysql_error());
	
		$query = "insert into member values('$email', '$password', '$gender', '$dateOfBirth', '$reserveCount' ,'$name', '$userid')";
		$result = mysql_query($query) or die(mysql_error());
	}
	$submit = null;
	header("location:account_info.php");
}
?>