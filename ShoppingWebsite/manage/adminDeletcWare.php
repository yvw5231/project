<?php
require_once '../dao/ware.dao.php';
   $wareid=$_GET['wareid'];
   $rs=deleteWare($wareid);
   if($rs>0)
   {
        echo "<script language='javascript'>alert('删除成功！');window.location.href='../web/admin/files/selectware.php';</script>";
   }else{
          echo "<script language='javascript'>alert('删除失败！');window.location.href='../web/admin/files/selectware.php';</script>";
   }
?>
