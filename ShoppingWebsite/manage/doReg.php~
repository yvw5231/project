<?php
$conn=mysql_connect("localhost", "root", "") or die("数据库连接错误！");
mysql_select_db("league") or die("数据库名称错误");
require_once '../dao/user.dao.php';
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$adders=$_POST['adders'];//地址
$postalcode=$_POST['postalcode'];//邮编
$tel=$_POST['tel'];
//echo $username.$password.$email.$adders.$postalcode.$tel;

$sql="select Username from user";
$rs1=mysql_query($sql);
while($obj=mysql_fetch_object($rs1))
{
     $Username=$obj->Username;
     //echo $Username;
     if($username==$Username)
     {
      echo "<script language='javascript'>alert('已存在的用户名');window.location.href='../web/login.php';</script>";
      exit();
     }

}
$rs=addUser($username, $email, $password, $postalcode, $adders, $tel);
if(count($rs)>0)
{
     echo "<script language='javascript'>alert('注册成功！返回登录界面');window.location.href='../web/login.php';</script>";
}else
    {
     echo "<script language='javascript'>alert('注册失败！');window.location.href='../web/reg.php';</script>";
}

?>
