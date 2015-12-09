<?php
  include_once '../dao/order.dao.php';
  $order_id=$_GET['order_id'];
  $order_type=$_GET['order_type'];
  $temp;
  if($order_type==1)
  {
     $temp=2;
  }else
  {
     $temp=1;
  }



  $rs=updateOrder($temp, $order_id);
  if($rs>0)
  {
       echo "<script language='javascript'>alert('更改成功！');window.location.href='../web/admin/files/order.php';</script>";
  }else
  {
       echo "<script language='javascript'>alert('更新失败！');window.location.href='../web/admin/files/order.php';</script>";
  }





?>
