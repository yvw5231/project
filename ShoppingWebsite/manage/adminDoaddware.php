<?php


$conn=mysql_connect("localhost", "root", "admin") or die("数据库连接错误！");
mysql_select_db("shoppingwebsite") or die("数据库名称错误");

require_once '../dao/ware.dao.php';

$warename=$_POST['warename'];
$wareprice=$_POST['wareprice'];
$warenum=$_POST['warenum'];

$address = "../image/";
$address.=$_FILES['wareimage']["name"];
if(move_uploaded_file($_FILES["wareimage"]["tmp_name"], $address))
{
//    echo $address;
}
$wareintro=$_POST['wareintro'];
$wareid=$_POST['wareid'];
//echo $warename."<br>";
//echo $wareprice."<br>";
//echo $warenum."<br>";
//echo $address."<br>";
//echo $wareintro."<br>";
//echo $wareid;
flush();



$sql1="select ware_name from ware";
$rs1=mysql_query($sql1);
while($obj=mysql_fetch_object($rs1))
{
    $ware_name=$obj->ware_name;
    if($ware_name==$warename)
    {
      echo "<script language='javascript'>alert('已存在的商品');window.location.href='../web/admin/files/addware.php';</script>";
      exit();
    }
}





$rs=addWare($wareprice, $warenum, $address, $wareintro, $warename,$wareid);
if(count($rs)>0)
{
     echo "<script language='javascript'>alert('添加成功!');window.location.href='../web/admin/files/addware.php';</script>";
}else
    {
     echo "<script language='javascript'>alert('添加失败！');window.location.href='../web/admin/files/addware.php';</script>";
}
?>
