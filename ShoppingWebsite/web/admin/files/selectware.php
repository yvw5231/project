<?php
           $conn=mysql_connect("localhost", "root", "") or die("数据库连接错误");
           mysql_select_db("league") or die("数据库名称错误");

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>查看商品</title>
        <style type="text/css">
            <!--
            body {
                margin-left: 0px;
                margin-top: 0px;
                margin-right: 0px;
                margin-bottom: 0px;
            }
            .tabfont01 {
                font-family: "宋体";
                font-size: 9px;
                color: #555555;
                text-decoration: none;
                text-align: center;
            }
            .font051 {font-family: "宋体";
                      font-size: 12px;
                      color: #333333;
                      text-decoration: none;
                      line-height: 20px;
            }
            .font201 {font-family: "宋体";
                      font-size: 12px;
                      color: #FF0000;
                      text-decoration: none;
            }
            .button {
                font-family: "宋体";
                font-size: 14px;
                height: 37px;
            }
            html { overflow-x: auto; overflow-y: auto; border:0;}
            -->
        </style>

        <link href="../css/css.css" rel="stylesheet" type="text/css" />
        <script type="text/JavaScript" language="JavaScript">

        </script>
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <SCRIPT language=JavaScript>
        function sousuo(){
            window.open("gaojisousuo.htm","","depended=0,alwaysRaised=1,width=800,height=510,location=0,menubar=0,resizable=0,scrollbars=0,status=0,toolbar=0");
        }
        function selectAll(){
            var obj = document.fom.elements;
            for (var i=0;i<obj.length;i++){
                if (obj[i].name == "delid"){
                    obj[i].checked = true;
                }
            }
        }

        function unselectAll(){
            var obj = document.fom.elements;
            for (var i=0;i<obj.length;i++){
                if (obj[i].name == "delid"){
                    if (obj[i].checked==true) obj[i].checked = false;
                    else obj[i].checked = true;
                }
            }
        }

        function link(){
            document.getElementById("fom").action="../files/addware.php";
            document.getElementById("fom").submit();
        }

    </SCRIPT>

    <body>
        <form name="fom" id="fom" method="post" action="">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">

                <tr>
                    <td height="30">      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td height="62" background="../images/nav04.gif">

                                    <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td width="21"><img src="../images/ico07.gif" width="20" height="18" /></td>
                                            <td width="538">查看内容：
                                                按商品名称查询：
                                                <input type="text" name="textfield2" />
                                                <input name="Submit4" type="submit" class="right-button02" value="查 询" />



                                            </td>
                                            <td width="144" align="left"><a href="#" onclick="sousuo()">
                                                    <input name="Submit3" type="button" class="right-button07" value="高级搜索" />
                                                </a></td>
                                        </tr>
                                    </table></td>
                            </tr>

                        </table></td></tr>
                <tr>
                    <td><table id="subtree1" style="DISPLAY: " width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="20"><span class="newfont07">选择：<a href="#" class="right-font08" onclick="selectAll();">全选</a>-<a href="#" class="right-font08" onclick="unselectAll();">反选</a></span>
                                                <input name="Submit2" type="button" class="right-button08" value="添加商品" onclick="return link(Submit2);"/></td>
                                        </tr>
                                        <tr>
                                            <td height="40" class="font42">
                                                <table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">
                                                    <tr class="CTitle" >
                                                        <td height="22" colspan="8" align="center" style="font-size:16px">商品详细信息</td>
                                                    </tr>
                                                    <tr bgcolor="#EEEEEE">
                                                        <td width="4%" align="center" height="30">选择</td>
                                                        <td width="10%">商品ID</td>
                                                        <td width="10%">商品名称</td>
                                                        <td width="10%">商品价格</td>
                                                        <td width="10%">商品数量</td>
                                                        <td width="10%">商品介绍</td>
                                                        <td width="5%">商品类别</td>
                                                        <td width="12%">操作</td>
                                                    </tr>
                                                    <?php
                                                    //根据商品的名称进行查询
                                                    if(@$_POST['Submit4']!=""&&@$_POST['textfield2']!="") {
                                                        $ware_name=$_POST['textfield2'];
                                                        $strQuery = "select * from ware where ware_name like '%$ware_name%'";
                                                        $result=mysql_query($strQuery);
                                                        while($find=mysql_fetch_object($result)) {
                                                            $ware_id=$find->ware_id;
                                                            echo "<tr bgcolor=\"#FFFFFF\">";
                                                            echo "<td height=\"20\"><input type=\"checkbox\" name=\"delid\"/></td>";
                                                            echo "<td><a href=\"listgongnenmingxi.htm\" onclick=\"\">$find->ware_id</a></td>";
                                                            echo "<td bgcolor=\"#FFFFFF\">$find->ware_name</td>";
                                                            echo " <td bgcolor=\"#FFFFFF\">$find->ware_price</td>";
                                                            echo "<td bgcolor=\"#FFFFFF\">$find->ware_num</td>";
                                                            echo "<td bgcolor=\"#FFFFFF\">$find->ware_intro</td>";
                                                            ?>
                                                            <?php
                                                            $sql1= "SELECT * FROM type where type_id=$find->type_id;";
                                                            $rs2=mysql_query($sql1);
                                                            while($obj1 = mysql_fetch_object($rs2)) {
                                                                echo "<td bgcolor=\"#FFFFFF\">$obj1->type_sort</td>";
                                                                echo " <td bgcolor=\"#FFFFFF\"><a href=\"edit.php?wareid=$ware_id\">编辑|</a><a href=\"../../../manage/adminDeletcWare.php?wareid=$ware_id\">删除|</a></td>";
                                                                echo "</tr>";
                                                            }
                                                        }
                                                    }else {
                                                        ?>
                                                        <?php
                                                        //查询所有的信息
                                                        $sql= "SELECT * FROM ware";
                                                        $rs=mysql_query($sql);
                                                        while($obj = mysql_fetch_object($rs)) {
                                                            $ware_id=$obj->ware_id;
                                                            echo "<tr bgcolor=\"#FFFFFF\">";
                                                            echo "<td height=\"20\"><input type=\"checkbox\" name=\"delid\"/></td>";
                                                            echo "<td><a href=\"listgongnenmingxi.htm\" onclick=\"\">$obj->ware_id</a></td>";
                                                            echo "<td bgcolor=\"#FFFFFF\">$obj->ware_name</td>";
                                                            echo " <td bgcolor=\"#FFFFFF\">$obj->ware_price</td>";
                                                            echo "<td bgcolor=\"#FFFFFF\">$obj->ware_num</td>";
                                                            echo "<td bgcolor=\"#FFFFFF\">$obj->ware_intro</td>";
                                                            ?>
                                                            <?php
                                                            $sql1= "SELECT * FROM type where type_id=$obj->type_id;";
                                                            $rs2=mysql_query($sql1);
                                                            while($obj1 = mysql_fetch_object($rs2)) {
                                                                echo "<td bgcolor=\"#FFFFFF\">$obj1->type_sort</td>";
                                                                echo " <td bgcolor=\"#FFFFFF\"><a href=\"edit.php?wareid=$ware_id\">编辑|</a><a href=\"../../../manage/adminDeletcWare.php?wareid=$ware_id\">删除|</a></td>";
                                                                echo "</tr>";
                                                            }
                                                        }
                                            }
                                                    mysql_close();
                                                    ?>




                                                </table></td>
                                        </tr>
                                    </table>
                                    <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0">
                                        <tr>
                                            <td height="6"><img src="../images/spacer.gif" width="1" height="1" /></td>
                                        </tr>
                                        <tr>
                                            <td height="33"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="right-font08">
                                                    <tr>
                                                        <td width="50%">共 <span class="right-text09">5</span> 页 | 第 <span class="right-text09">1</span> 页</td>
                                                        <td width="49%" align="right">[<a href="#" class="right-font08">首页</a> | <a href="#" class="right-font08">上一页</a> | <a href="#" class="right-font08">下一页</a> | <a href="#" class="right-font08">末页</a>] 转至：</td>
                                                        <td width="1%"><table width="20" border="0" cellspacing="0" cellpadding="0">
                                                                <tr>
                                                                    <td width="1%"><input name="textfield3" type="text" class="right-textfield03" size="1" /></td>
                                                                    <td width="87%"><input name="Submit23222" type="submit" class="right-button06" value=" " />
                                                                    </td>
                                                                </tr>
                                                            </table></td>
                                                    </tr>
                                                </table></td>
                                        </tr>
                                    </table></td>
                            </tr>
                        </table>
                        </form>
                        </body>
                        </html>
<?php

  mysql_close($conn);


?>
