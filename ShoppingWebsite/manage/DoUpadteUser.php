<?php
require_once '../dao/user.dao.php';
session_start();
print_r($_GET);
print_r($_POST);
$user_id=$_GET['user_id'];
$user_name=$_POST['user_name'];
$user_email=$_POST['user_email'];
$user_postalcode=$_POST['user_postalcode'];
$user_adders=$_POST['user_adders'];
$user_tel=$_POST['user_tel'];
$user_password=$_POST['user_password'];
$user_password1=$_POST['user_password1'];
if($user_password!=$user_password1)
{
    echo "<script>alert('您两次输入的密码不一值');history.back();</script>";
    echo "CC";
}

$rs1=updateUserBy($user_id, $user_name, $user_email, $user_password, $user_postalcode, $user_adders, $user_tel);
echo $rs1;
if($rs1>0)
{
    echo "<script>alert('修改成功！！');window.location.href='../web/index.php';</script>";
}else
{
    echo "<script>alert('修改失败！');history.back();</script>";
}

?>
