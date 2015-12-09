<?php
require_once '../comm/comm.php';

function addOrdercar($user_id,$user_name,$date,$order_price)
{
    $sql="insert into ordercar (user_id,order_time,order_price,user_name) values";
    $sql.="($user_id,'$date',$order_price,'$user_name')";
    $con = get_Connect();
    $rs = mysql_query($sql,$con);
    if($rs>0)
    {
        $sql ="select @@identity as Id";
        $array = mysql_query($sql,$con);
        while($temp = mysql_fetch_array($array)) {
            $rs = $temp;
        }
    }
    mysql_close($con);
    return $rs[0];//返回执行结果
}

function addOrderInfomation($order_id,$ware_id,$order_num,$user_name,$ware_name)
{
       $sql="insert into order_information (order_id,ware_id,order_num,user_name,ware_name) values";
       $sql.="($order_id,$ware_id,$order_num,'$user_name','$ware_name')";
       $rs=execUpdate($sql);
       return $rs;
}



function updateOrder($order_type,$order_id) {
        //修改语句
        $updateSql = "update ordercar set order_type=$order_type where order_id=$order_id";
        $rs = execUpdate($updateSql);//执行操作
        return $rs;
}



   //更新数量
   function UpadteNum($ware_id,$ware_num)
   {
        $updateSq2 = "update ware set ware_num= $ware_num where ware_id=$ware_id";
        $rs = execUpdate($updateSq2);//执行操作
        return $rs;

   }

?>
