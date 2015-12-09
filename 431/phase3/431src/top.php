<?php

//*************************read info for db****************************//
//require_once("library/login_info.php");
//$session = mysql_connect($server, $user, $password) or die(mysql_error());
//print "CONNECTED";
//mysql_select_db("lib_system");
include_once "global.php";
include_once "db_connect.php";
include "background.php";


//*****************************************delete old userid.txt or adminid.txt
$deleteUser = "userid.txt";
$deleteAdmin = "adminid.txt";
$deliveryAdmin = "deliveryid.txt";
$telemarketAdmin = "telemarketid.txt";
@unlink($deleteUser);
@unlink($deleteAdmin);
@unlink($deliveryAdmin);
@unlink($telemarketAdmin);
//*************************get client's IP****************************//
//$ip = getenv("REMOTE_ADDR");
//********************************************************************//
//********************************************receive log in data
$loginType = isset($_GET["loginType"]) ? $_GET["loginType"]:null;
$id = isset($_GET["id"]) ? $_GET["id"]:null;
$password = isset($_GET["password"]) ? $_GET["password"]:null;
$login = isset($_GET["login"]) ? $_GET["login"]:null;
$signup = isset($_GET["signup"]) ? $_GET["signup"]:null;

//$tName = isset($_GET["sName"]) ? htmlspecialchars($_GET["sName"]):null;
if(($login<>""))
{
	if((!($loginType<>"") || !($id<>"") || !($password<>"")))
	{
		print "Invalid Input in Log in<BR>";
		//header("location:top.php");
	}else if($loginType == "user"){
		$query = "select * from member where memberid = '$id'";
		$result = mysql_query($query) or die(mysql_error());
		$num_row = mysql_num_rows($result);
		if($num_row > 0){
			$query = "select * from member where password = '$password'";
			$result = mysql_query($query) or die(mysql_error());
			$num_row = mysql_num_rows($result);
			if($num_row > 0){
				//**********************************user successfully loged in
				print "User Loged in<BR>";
				$userFile = "userid.txt";
				file_put_contents($userFile, $id);
				header("location:user_page.php ? userid = $id");
				}else{
				//**********************************user fail to log in
				print "User failed to log in<BR>";
			}
		}else{
			//**********************************user fail to log in
			print "User failed to log in<BR>";
		}
	}else if($loginType == "admin"){
		$query = "select * from admin where adminid = '$id'";
		$result = mysql_query($query) or die(mysql_error());
		$num_row = mysql_num_rows($result);
		if($num_row > 0)
		{
			$query = "select * from admin where password = '$password'";
			$result = mysql_query($query) or die(mysql_error());
			$num_row = mysql_num_rows($result);
			if($num_row > 0){
				//**********************************admin successfully loged in
				print "Admin Loged in<BR>";
				$adminFile = "adminid.txt";
				file_put_contents($adminFile, $id);
				header("location:admin_page.php ? adminid = $id");
				}else{
				//**********************************admin fail to log in
				print "Admin failed to log in<BR>";
			}
			//**********************************admin successfully loged in
			
		}else{
			//**********************************admin fail to log in
			print "Admin failed to log in<BR>";
		}
	}else if($loginType == "delivery"){
		$query = "select * from delivery where deliveryid = '$id'";
		$result = mysql_query($query) or die(mysql_error());
		$num_row = mysql_num_rows($result);
		if($num_row > 0)
		{
			$query = "select * from delivery where password = '$password'";
			$result = mysql_query($query) or die(mysql_error());
			$num_row = mysql_num_rows($result);
			if($num_row > 0){
				//**********************************delivery successfully loged in
				print "Delivery staff Loged in<BR>";
				$deliveryFile = "deliveryid.txt";
				file_put_contents($deliveryFile, $id);
				header("location:delivery_page.php ? deliveryid = $id");
			}else{
				//**********************************delivery fail to log in
				print "Delivery staff failed to log in<BR>";
			}
		}else{
			//**********************************delivery fail to log in
			print "Delivery staff failed to log in<BR>";
		}
	}else if($loginType == "telemarket"){
		$query = "select * from telemarket where telemarketid = '$id'";
		$result = mysql_query($query) or die(mysql_error());
		$num_row = mysql_num_rows($result);
		if($num_row > 0)
		{
			$query = "select * from delivery where password = '$password'";
			$result = mysql_query($query) or die(mysql_error());
			$num_row = mysql_num_rows($result);
			if($num_row > 0){
				//**********************************telemarket successfully loged in
				print "Telemarket staff Loged in<BR>";
				$telemarketFile = "telemarketid.txt";
				file_put_contents($telemarketFile, $id);
				header("location:telemarket_page.php ? telemarketid = $id");
			}else{
				//**********************************telemarket fail to log in
				print "Telemarket staff failed to log in<BR>";
			}
		}else{
			//**********************************telemarket fail to log in
			print "Telemarket staff failed to log in<BR>";
		}
	}
}else if($signup<>"")
{
	header("location:signup.php");
}
mysql_close($session);

//********************Input Thread Name, Link to top*******************//

print <<< eot3
			<CENTER>
				<!-- user log in-->
				<STYLE>
					TABLE, TH, TD{border: solid black;}
				</STYLE>
				<TABLE>
					<TR>
					<TD>
					<FONT SIZE = "5">
						PLEASE LOG IN HERE
					</FONT>
					</TD>
					<TD>
					<FONT SIZE = "5">
						USER SIGN UP<BR>
					</FONT>
					</TD>
					</TR>
					<TR>
					<TD>
						<FORM METHOD = "GET" ACTION = "top.php"><BR>
						<INPUT TYPE = "radio" NAME = "loginType" VALUE = "user">User<BR>
						<INPUT TYPE = "radio" NAME = "loginType" VALUE = "admin">Admin<BR>
						<INPUT TYPE = "radio" NAME = "loginType" VALUE = "delivery">Delivery<BR>
						<INPUT TYPE = "radio" NAME = "loginType" VALUE = "telemarket">Telemarket<BR>
						ID:<BR><INPUT TYPE = "text" NAME = "id" SIZE = "30"><BR>
						PASSWORD:<BR><INPUT TYPE = "text" NAME = "password" SIZE = "30"><BR>
						<INPUT TYPE = "submit" NAME = "login" VALUE = "log in">
					</TD>
					<TD>
						<INPUT TYPE = "submit" NAME = "signup" VALUE = "sign up"><BR>
						</FORM>
					</TD>
					</TR>
				</TABLE>
			</CENTER>
		</BODY>
	</HTML>
eot3;

?>