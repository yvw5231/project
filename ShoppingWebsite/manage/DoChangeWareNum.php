<?php
include '../comm/comm.php';

   $id=$_POST['id'];
   $query="select Quantity from Item where Item_id=$id";
   $array=execQuery($query);
   $itemnum=$_POST['itemnum'];

   if($itemnum==""||$itemnum<1)
   {
      echo "<script>alert('购买数量输入有误！');window.location.href='../web/car.php';</script>";
      exit();
   }

   if($itemnum>$array[0]["Quantity"])
   {
      echo "<script>alert('超过了库存量！');window.location.href='../web/car.php';</script>";
      exit();
   }else
   {
        session_start();
        $array=explode("@", $_SESSION["Item_id"]);
        $num=explode("@", $_SESSION["order_num"]);
        //遍历
        $temp;
        for($i=0;$i<count($array)-1;$i++)
        {
               if($id==$array[$i])
               {
                    $temp=$i;
                    break;
               }
        }


        $num[$temp]=$itemnum;
         $_SESSION["order_num"]="";
        for($n=0;$n<count($num)-1;$n++)
        {
             $_SESSION["order_num"].=$num[$n]."@";
        }

       echo "<script>window.location.href='../web/car.php';</script>";
   }





?>
