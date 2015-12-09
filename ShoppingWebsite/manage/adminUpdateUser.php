<?php
require_once '../dao/user.dao.php';

$user_id=$_POST['user_id'];
$user_password=$_POST['user_password'];
$user_name=$_POST['user_name'];
$popedom_id=$_POST['select2'];
$user_adders=$_POST['user_adders'];
$user_email=$_POST['user_email'];
$user_tel=$_POST['user_tel'];
$user_postalcode=$_POST['user_postalcode'];

$rs=updateUser($user_id, $user_name, $user_email, $user_password, $user_postalcode, $user_adders, $user_tel, $popedom_id);
echo $rs;
if($rs>0)
{
   echo "<script language='javascript'>alert('修改成功!');window.location.href='../web/admin/files/selectuser.php';</script>";
}else{
    echo "<script language='javascript'>alert('没有做出修改！！');window.location.href='../web/admin/files/selectuser.php';</script>";
}
//echo $user_id."---".$user_password."---".$user_name."---".$popedom_id."---". $user_adders."---".$user_email."---".$user_tel."--".$user_postalcode;



?>
