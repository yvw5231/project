<?php
include '../comm/comm.php';

//增加商品
function addWare($ware_price,$ware_num,$ware_image,$ware_intro,$ware_name,$type_id)
{
    $strQuery="insert into ware (ware_price,ware_num,ware_image,ware_intro,ware_name,type_id) values";
    $strQuery.="($ware_price,$ware_num,'$ware_image','$ware_intro','$ware_name',$type_id)";
    $rs = execUpdate($strQuery);//执行操作
    return $rs;//返回执行结果
}


//查看商品

//function FindByWareName($ware_name)
//{    $strQuery = "select * from ware where ware_name='$ware_name'";
//    $rs = execQuery($strQuery);
//   if(count($rs)> 0) {
//       return $rs[0];
//    }
//   return $rs;
//}




//删除商品
   function deleteWare($wareid){
       $delStr = "delete from ware where ware_id= $wareid";
       $rs = execUpdate($delStr);//执行操作
       return $rs;//返回执行结果
   }



function updateWare($ware_id,$ware_name,$ware_num,$ware_image,$ware_intro,$type_id,$ware_price) {
        //修改语句
        $updateSql = "update ware set  ware_name='$ware_name',ware_num= $ware_num,ware_image= '$ware_image',ware_intro='$ware_intro' , type_id=$type_id ,ware_price=$ware_price where ware_id=$ware_id";
        $rs = execUpdate($updateSql);//执行操作
        return $rs;
}

    //根据商品类别查询
    function Search($type_id,$search_name)
   {
        $sql="select * from ware where type_id=$type_id and ware_name like '%$search_name%'";
        $rs=execUpdate($sql);
        return $rs;
   }
   //查询所有的类别
   function SearchAll($search_name)
   {
       $sql="select * from ware where ware_name like'%$search_name%'";
       $rs=execUpdate($sql);
       return $rs;
   }





?>
