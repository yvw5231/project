<?php
              $conn=mysql_connect("localhost", "root", "admin") or die("数据库连接错误");
              mysql_select_db("shoppingwebsite") or die("数据库名称错误");

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>项目管理系统 by www.mycodes.net</title>
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
<script type="text/JavaScript">

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
    document.getElementById("fom").action="../../manage/adminDologin.php";
   document.getElementById("fom").submit();
}

</SCRIPT>

<body>
<form name="fom" id="fom" method="post">
<table width="100%" border="0" cellspacing="0" cellpadding="0">

  <tr>
    <td height="30">      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td height="62" background="../images/nav04.gif">

		   <table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
		    <tr>
			  <td width="24"><img src="../images/ico07.gif" width="20" height="18" /></td>
			  <td width="519">按照用户姓名：
			    <input name="textfield" type="text" size="12"/>
                            <input name="Submit" type="submit" class="right-button02" value="查 询" /> </td>
			   <td width="679" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="#" onclick="sousuo()">
			     <input name="Submit2" type="button" class="right-button07" value="高级搜索" />
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
		           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	              </td>
          </tr>
              <tr>
                <td height="40" class="font42">
                    <table width="100%" border="0" cellpadding="4" cellspacing="1" bgcolor="#464646" class="newfont03">

					                  <tr>
                    <td height="20" colspan="14" align="center" bgcolor="#EEEEEE"class="tablestyle_title"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;         用户详细信息查看</td>
                    </tr>
                  <tr>
				         <td width="6%" align="center" bgcolor="#EEEEEE">选择</td>
					 <td width="9%" height="20" align="center" bgcolor="#EEEEEE">用户ID</td>
                                         <td width="9%" align="center" bgcolor="#EEEEEE">用户名称</td>
					 <td width="9%" align="center" bgcolor="#EEEEEE">联系电话</td>
					 <td width="10%" align="center" bgcolor="#EEEEEE">邮箱</td>
					 <td align="center" bgcolor="#EEEEEE">街道地址</td>
                                         <td width="9%" align="center" bgcolor="#EEEEEE">用户权限</td>
                    <td width="19%" align="center" bgcolor="#EEEEEE">操作</td>
                  </tr>
                        <?php
                        if(@$_POST['Submit']!=""&&@$_POST['textfield']!="")
                        {
                          $user_name=$_POST['textfield'];
                          $strQuery = "select * from user where user_name like '%$user_name%'";
                          $result=mysql_query($strQuery);
                          while($find=mysql_fetch_object($result))
                          {
                                  echo "<tr>";
                                  echo "<td bgcolor=\"#FFFFFF\"><input type=\"checkbox\" name=\"delid\"/></td>";
                                  echo "<td height=\"20\" bgcolor=\"#FFFFFF\"><a href=\"edituser.php?user=$find->user_id\">$find->user_id</a></td>";
                                  echo "<td bgcolor=\"#FFFFFF\"><a href=\"edituser.php?user=$find->user_id\">$find->user_name</a></td>";
                                  echo "<td bgcolor=\"#FFFFFF\">$find->user_tel</td>";
                                  echo "<td bgcolor=\"#FFFFFF\">$find->user_postalcode</td>";
                                  echo "<td align=\"center\" bgcolor=\"#EEEEEE\">$find->user_adders</td>";            
                        ?>
                        <?php
                         $sql5= "SELECT * FROM popedom where popedom_id=$find->popedom_id;";
                         $rs2=mysql_query($sql5);
                         while ($obj5=mysql_fetch_object($rs2))
                              {
                              echo "<td bgcolor=\"#FFFFFF\">$obj5->popedom_name</td>";
                              echo "<td bgcolor=\"#FFFFFF\"><a href=\"edituser.php?user=$find->user_id\">编辑</a>&nbsp;|&nbsp;<a href=\"yuangongxiangmu.html\">删除</a></td>";
                              echo "</tr>";
                              }
                              }
                        }else{
                        ?>
                        <?php
                             $sql= "SELECT * FROM user";
                             $rs=mysql_query($sql);
                             while($obj = mysql_fetch_object($rs))
                              {
                                  echo "<tr>";
                                  echo "<td bgcolor=\"#FFFFFF\"><input type=\"checkbox\" name=\"delid\"/></td>";
                                  echo "<td height=\"20\" bgcolor=\"#FFFFFF\"><a href=\"edituser.php?user=$obj->user_id\">$obj->user_id</a></td>";
                                  echo "<td bgcolor=\"#FFFFFF\"><a href=\"edituser.php?user=$obj->user_id\">$obj->user_name</a></td>";
                                  echo "<td bgcolor=\"#FFFFFF\">$obj->user_tel</td>";
                                  echo "<td bgcolor=\"#FFFFFF\">$obj->user_postalcode</td>";
                                  echo "<td align=\"center\" bgcolor=\"#EEEEEE\">$obj->user_adders</td>";
                        ?>
                       <?php
                             $sql1= "SELECT popedom_name FROM popedom where popedom_id=$obj->popedom_id";
                             $rs1=mysql_query($sql1);
                              while ($obj1=mysql_fetch_object($rs1))
                              {
                              echo "<td bgcolor=\"#FFFFFF\">$obj1->popedom_name</td>";
                              echo "<td bgcolor=\"#FFFFFF\"><a href=\"edituser.php?user=$obj->user_id\">编辑</a>&nbsp;|&nbsp;<a href=\"yuangongxiangmu.html\">删除</a></td>";
                              echo "</tr>";
                              }
                              }
                        }
                       ?>

             
                </table></td>
              </tr>
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