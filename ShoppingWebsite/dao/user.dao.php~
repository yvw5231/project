<?php
require_once '.././comm/comm.php';

//查找用户
function findUser($username)
{
    $strQuery = "select * from user where Username= '$username' ";
    $rs=execQuery($strQuery);
    if(count($rs)> 0)
    {
     return $rs[0];
    }
    return $rs;
}


//根据编号查询用户信息
function findUserById($userid)
{
     $strQuery="select * from user where Id='$user_id'";
     $rs=execQuery($strQuery);
     if(count($rs)>0){
         return $rs[0];
     }
     return $rs;
}




//新增用户
function  addUser($Username,$Email_address,$Password,$user_postalcode,$user_adders,$Phone_num)
{
    $strQuery="insert into user (Username,Email_address,Password,user_postalcode,user_adders,Phone_num) values";
    $strQuery.="('$Username','$Email_address','$Password','$user_postalcode','$user_adders','$Phone_num')";
    $rs = execUpdate($strQuery);//执行操作
    return $rs;//返回执行结果
}

function updateUser($user_id,$Username,$Email_address,$Password,$user_postalcode,$user_adders,$Phone_num,$popedom_id)
{
        //修改语句
        $updateSql = "update user set  Username='$Username',Email_address= '$Email_address',Password= '$Password',user_postalcode=$user_postalcode , user_adders='$user_adders' ,Phone_num=$Phone_num, popedom_id=$popedom_id  where Id=$user_id";
        $rs = execUpdate($updateSql);//执行操作
        return $rs;
}
function updateUserBy($user_id,$Username,$Email_address,$Password,$user_postalcode,$user_adders,$Phone_num)
{
        //修改语句
        $updateSql = "update user set  Username='$Username',Email_address= '$Email_address',Password= '$Password',user_postalcode=$user_postalcode , user_adders='$user_adders' ,Phone_num=$Phone_num  where Id=$user_id";
        $rs = execUpdate($updateSql);//执行操作
        return $rs;
}
?>
