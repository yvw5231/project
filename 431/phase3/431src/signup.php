<?php
include_once "global.php";
include_once "db_connect.php";
include "background.php";
//include "CSS/style.css";
//*********************************************receive sign up data
$name = isset($_GET["name"]) ? $_GET["name"]:null;
$gender = isset($_GET["gender"]) ? $_GET["gender"]:null;
$dateOfBirth = isset($_GET["dateOfBirth"]) ? $_GET["dateOfBirth"]:null;
$email = isset($_GET["email"]) ? $_GET["email"]:null;

$signupID = isset($_GET["signupID"]) ? $_GET["signupID"]:null;
$signupPassword = isset($_GET["signupPassword"]) ? $_GET["signupPassword"]:null;
$signup = isset($_GET["signup"]) ? $_GET["signup"]:null;

//***********************************************variable for address
$aptNumber = isset($_GET["aptNumber"]) ? $_GET["aptNumber"]:null;
$street = isset($_GET["street"]) ? $_GET["street"]:null;
$city = isset($_GET["city"]) ? $_GET["city"]:null;
$zipcode = isset($_GET["zipcode"]) ? $_GET["zipcode"]:null;

if($signup<>"")
{
	if(!($name<>"") || !($gender<>"") || !($dateOfBirth<>"") || !($email<>"") || !($signupID<>"") || !($aptNumber<>"") || !($street<>"") || !($city<>"") || !($zipcode<>""))
	{
		print "Invalid Input in sign up!!!<BR>";
	}else{
		//******************************************create a new user account
		$query = "insert into member values('$email', '$signupPassword', '$gender', '$dateOfBirth', 0 ,'$name', '$signupID')";
		$result = mysql_query($query) or die(mysql_error());
		$userFile = "userid.txt";
		file_put_contents($userFile, $signupID);
		//******************************************create as new address
		$query = "insert into address values ('$signupID','$aptNumber','$street','$city','$zipcode')";
		$result = mysql_query($query) or die(mysql_error());
		header("location:user_page.php");
	}
}
print <<< eot3
	<CENTER>
		<FORM METHOD = "GET" ACTION = "signup.php">
			<TABLE>
				<TH>PLEASE SIGN UP HERE	</TH>
				<TR><TD>NAME:</TD><TD><INPUT TYPE = "text" NAME = "name" SIZE = "30"></TD></TR>
				<TR><TD>GENDER:</TD><TD>
				<INPUT TYPE = "radio" NAME = "gender" VALUE = "male">Male<BR>
				<INPUT TYPE = "radio" NAME = "gender" VALUE = "female">Female</TD></TR>
				<TR><TD>DATEOFFBIRTH:</TD><TD><INPUT TYPE = "date" NAME = "dateOfBirth"></TD></TR>
				<TR><TD>EMAIL:</TD><TD><INPUT TYPE = "text" NAME = "email" SIZE = "50"></TD></TR>
				<TR><TD>USERID:</TD><TD><INPUT TYPE = "text" NAME = "signupID" SIZE = "30"></TD></TR>
				<TR><TD>PASSWORD:</TD><TD><INPUT TYPE = "text" NAME = "signupPassword" SIZE = "30"></TD></TR>	
				<TR><TD><BR>Enter your address</TD></TR>
				<TR><TD>APARTMENT #:</TD><TD><INPUT TYPE = "text" NAME = "aptNumber" SIZE = "30"></TD></TR>
				<TR><TD>STREET:</TD><TD><INPUT TYPE = "text" NAME = "street" SIZE = "30"></TD></TR>
				<TR><TD>CITY:</TD><TD><INPUT TYPE = "text" NAME = "city" SIZE = "30"></TD></TR>
				<TR><TD>ZIPCODE:</TD><TD><INPUT TYPE = "text" NAME = "zipcode" SIZE = "30"></TD></TR>
				
			</TABLE>
		<INPUT TYPE = "submit" NAME = "signup" VALUE = "Submit">
		</FORM>
	</CENTER>
eot3;
?>