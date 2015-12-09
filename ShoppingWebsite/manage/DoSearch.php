<?php
//require_once '../dao/ware.dao.php';
mysql_connect("localhost", "root", "admin")or die("数据库连接错误");
mysql_select_db("shoppingwebsite") or die("数据库名称错误");



$type_id=$_POST['type_id'];
$ware_name=$_POST['field-keywords'];
//echo $type_id."------".$ware_name;
//Search($type_id, $ware_name);

$mean;



if($_POST['type_id']!="all")
{
      $sql="select * from ware where type_id=$type_id and ware_name like '%$search_name%'";
      $rs=mysql_query($sql);
      echo "222222";
     while($search=mysql_fetch_object($rs))
    {
        echo "111111111";
    }
}else
{
    $sql1="select * from ware where ware_name like'%$search_name%'";
    $rs1=mysql_query($sql1);
    echo "1111";
    while($search1=mysql_fetch_object($rs1))
    {
        echo "3";
    }
}



?>
