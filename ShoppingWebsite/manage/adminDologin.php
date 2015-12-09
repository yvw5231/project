<?php
require_once '../dao/user.dao.php';
$username=$_POST['username'];
$password=$_POST['password'];



$user=findUser($username);
if($user!=null && $user['popedom_id']==1)
{
    if($user['user_password']==$password ){
//        $name=$user['user_name'];
         session_start();
         $_SESSION['adminname']=$username;
        echo "<script language='javascript'>window.location.href='../web/admin/index.php';</script>";
    }else{
          echo "<script language='javascript'>alert('密码错误！');window.location.href='../web/admin/login.php';</script>";
    }
}else{
    echo "<script language='javascript'>alert('没有这个管理员用户，请联系管理员提升权限！');window.location.href='../web/admin/login.php';</script>";
}
?>
