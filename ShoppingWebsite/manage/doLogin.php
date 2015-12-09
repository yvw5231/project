<?php
require_once '../dao/user.dao.php';
$username=$_POST['email'];
$password=$_POST['password'];
$user=findUser($username);
if($user!=null)
{
    if($user['Password']==$password){
        //$name=$user['user_name'];
       session_start();
       $_SESSION['name']=$username;
        echo "<script language='javascript'>window.location.href='../web/index.php';</script>";
    }else{
          echo "<script language='javascript'>alert('密码错误！');window.location.href='../web/login.php';</script>";
    }
}else{
    echo "<script language='javascript'>alert('没有这个用户，请注册后登录！');window.location.href='../web/reg.php';</script>";
}
?>
