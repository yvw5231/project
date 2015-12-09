<?php
session_start();
//session_register('Item_id');
//session_register('order_num');
if($_SESSION["Item_id"]==""&&$_SESSION["order_num"]=="")
{
    //如果购物车为空，则构建一个
     $_SESSION["Item_id"]=$_GET["Item_id"]."@";
     $_SESSION["order_num"]="1@";

 }ELSE
 {
         $array=explode("@", $_SESSION["Item_id"]);
         if(in_array($_GET["Item_id"], $array))
         {
              echo "<script>alert('您选择的商品在购物车中已经存在！');history.back();</script>";
         }
         else{
             $_SESSION["Item_id"].=$_GET["Item_id"]."@";
             $_SESSION["order_num"].="1@";
         }
 }

echo "<script>window.location.href='../web/car.php';</script>";


?>
