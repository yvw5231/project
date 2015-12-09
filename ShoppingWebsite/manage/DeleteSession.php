<?php
session_start();
if($_SESSION['name']==null)
{
     echo "<script language='javascript'>alert('您尚未登录！');window.location.href='../web/index.php';</script>";
}else{
     session_destroy();
     echo "<script language='javascript'>window.location.href='../web/index.php';</script>";
}

?>
