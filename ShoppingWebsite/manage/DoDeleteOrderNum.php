<?php
session_start();				//初始化session变量
$id=$_GET["id"];				//获取要删除商品的ID
echo $id;
$arrayid=explode("@",$_SESSION["Item_id"]);		//将购物车中存储的商品ID的字符串转换到数组中
$arraynum=explode("@",$_SESSION["order_num"]);	//将购物车中存储的商品数量的字符串转换到数组中
$key=array_search($id,$arrayid);				//获取到数组中指定的数据，并返回键名
$arrayid[$key]=null;								//根据返回的键名，将数组中的数据赋值为空
$arraynum[$key]=null;								//根据返回的键名，将数组中的数据赋值为空
$_SESSION["Item_id"]=implode("@",$arrayid);		//重新将数组中的数据添加到购物车中
$_SESSION["order_num"]=implode("@",$arraynum);	//重新将数组中的数据添加到购物车中
echo "<script>alert('商品已经删除！');window.location.href='../web/car.php';</script>";

?>
