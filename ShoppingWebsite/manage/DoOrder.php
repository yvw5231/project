<?php

session_start();
require_once '../dao/order.dao.php';
$connn=get_Connect();
$totalprice = $_POST["total"];
date_default_timezone_set('UTC');
$date=date('Y-m-d H:i:s',time());
$username=$_SESSION['name'];
$sql="select Id from user where Username='$username'";
$rs=mysql_query($sql,$connn);
while($user=mysql_fetch_object($rs)) {
    $user_id=$user->Id;
}



//echo "---->".$Item_name."---->".$Price."---->".$item_num."---->".$date."---11---->".$username."".$user_id;
$rs1=addOrdercar($user_id, $username, $date, $totalprice);
if($rs1>0) {
    $num = $_POST["num"];
    for($i=0;$i<$num;$i++) {
        $Item_name=mysql_real_escape_string($_POST["Item_name$i"]);
        $Price=$_POST["Price$i"];
        $item_num=$_POST["item_num$i"];
        $Item_id=$_POST["Item_id$i"];
        addOrderInfomation($rs1, $Item_id, $item_num,$username,$Item_name);


$sql2="select Quantity from Item where Item_id=$Item_id";
$con=get_Connect();
$rs2=mysql_query($sql2,$con);
$ware=mysql_fetch_object($rs2);
$warenum=$ware->Quantity;
//echo "---------->".$warenum;
$nownum=$warenum-$item_num;
UpadteNum($Item_id, $nownum);
    }
    echo "<script language='javascript'>alert('添加成功！');window.location.href='../web/continue.php';</script>";
}else {
    echo   "<script language='javascript'>alert('添加失败！');window.location.href='../web/car.php';</script>";
}








?>
