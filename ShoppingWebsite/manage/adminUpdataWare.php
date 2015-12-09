<?php
require_once '../dao/ware.dao.php';


$warename=$_POST['warename'];//商品名称
$wareprice=$_POST['wareprice'];//商品价格
$warenum=$_POST['warenum'];//商品数量
$wareintro=$_POST['wareintro'];//商品介绍
$wareid=$_GET['wareid'];//商品的ID
$typeid=$_POST['ware_type'];//商品的类别
$image;
if($_FILES["wareimage"]["name"]==null)
{
    $image=$_POST["image"];
}
else
{
    $address = "../image/";
    $address.=$_FILES['wareimage']["name"];
    if(move_uploaded_file($_FILES["wareimage"]["tmp_name"], $address))
    {
        $image = $address;
    }
}


$rs=updateWare($wareid, $warename, $warenum, $image, $wareintro, $typeid, $wareprice);
if($rs>0){
//        echo "fuck you every day!!";
     echo "<script language='javascript'>alert('修改成功!');window.location.href='../web/admin/files/selectware.php';</script>";
}else{
    echo "<script language='javascript'>alert('没有做出修改！！');window.location.href='../web/admin/files/selectware.php';</script>";
}

//echo $warename."==".$wareprice."==".$warenum."==".$wareintro."==".$wareid."==".$typename."==".$image;
flush();
?>
