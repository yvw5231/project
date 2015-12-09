<?php
              $conn=mysql_connect("localhost", "root", "admin") or die("数据库连接错误");
              mysql_select_db("shoppingwebsite") or die("数据库名称错误");
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>项目管理系统 by www.mycodes.net</title>
<link rel="stylesheet" rev="stylesheet" href="../css/style.css" type="text/css" media="all" />


<script language="JavaScript" type="text/javascript">
function tishi()
{
  var a=confirm('数据库中保存有该人员基本信息，您可以修改或保留该信息。');
  if(a!=true)return false;
  window.open("冲突页.htm","","depended=0,alwaysRaised=1,width=800,height=400,location=0,menubar=0,resizable=0,scrollbars=0,status=0,toolbar=0");
}

function check()
{
document.getElementById("aa").style.display="";
}

</script>
<style type="text/css">
<!--
.atten {font-size:12px;font-weight:normal;color:#F00;}
-->
</style>
</head>

<body class="ContentBody">
    <form action="../../../manage/adminUpdateUser.php" method="post" enctype="multipart/form-data" name="form" target="sypost" >
<div class="MainDiv">
<table width="99%" border="0" cellpadding="0" cellspacing="0" class="CContent">
  <tr>
      <th class="tablestyle_title" >用户信息</th>
  </tr>
  <tr>
    <td class="CPanel">

		<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
		<tr><td align="left">
                        <input type="submit" name="Submit" value="保存" class="button"/>　

			<input type="button" name="Submit2" value="返回" class="button" onclick="window.history.go(-1);"/>
		</td></tr>
				<TR>
			<TD width="100%">
				<fieldset style="height:100%;">
				<legend>员工信息</legend>
					  <table border="0" cellpadding="2" cellspacing="1" style="width:100%">
                                          <?php 
                                                $user_id=$_GET['user'];
                                                $strQuery="select * from user as u,popedom as p where u.user_id=$user_id and u.popedom_id=p.popedom_id";
                                                $rs=mysql_query($strQuery);
                                                while($obj = mysql_fetch_object($rs))
                                                {
                                                  

                                          ?>



					  <tr>
					    <td nowrap align="right" width="15%">员工ID:</td>
                                            <td width="35%"><input name='user_id' type="text" class="text" style="width:154px" value="<?php echo $obj->user_id;?>"/>
				        <span class="red">*</span></td>
					    <td width="16%" align="right" nowrap="nowrap">密码:</td>
					    <td width="34%"><input class="text" name='user_password' style="width:154px" value="<?php echo $obj->user_password;?>"></td>
					  </tr>
					  <tr>
					    <td nowrap="nowrap" align="right">真实姓名:</td>
					    <td><input class="text" name='user_name' style="width:154px" value="<?php echo $obj->user_name;?>"/></td>
					    <td align="right">用户权限</td>
					    <td><select name="select2" >
                                                    <option value="<?php echo $obj->popedom_id;?>"><?php echo $obj->popedom_name;?></option>
                                               <?php
                                                    $sql = "select * from popedom";
                                                    $arr = mysql_query($sql);
                                                    while($obj2 = mysql_fetch_object($arr))
                                                    {
                                                        if($obj2->popedom_name==$obj->popedom_name)
                                                        {
                                                            continue;
                                                        }
                                                        else
                                                        {
                                                            echo "<option value=\"$obj2->popedom_id\">$obj2->popedom_name</option>";
                                                        }
                                                    }
                                               ?>
                                                </select></td>
                                            
                                              </tr>
                                           


					  <tr> 
					    <td align="right">街道地址:</td>
					    <td><input class="text" name='user_adders' style="width:154px" value="<?php echo $obj->user_adders;?>"/></td>
                                            <td nowrap="nowrap" align="right">邮政编码:</td>
					    <td><input class="text" name='user_postalcode' style="width:154px" value="<?php echo $obj->user_postalcode;?>"/></td>
					  </tr>
					  <tr>
					    <td align="right">电子邮箱:</td>
					    <td><input class="text" name='user_email' style="width:154px" value="<?php echo $obj->user_email;?>"/></td>
					    <td align="right">电话号码:</td>
					    <td><input class="text" name='user_tel' style="width:154px" value="<?php echo $obj->user_tel;?>"/></td>
					  </tr>

                                              <?php

                                                }
                                              ?>
					  </table>
			  <br />
				</fieldset>			</TD>

		</TR>
		</TABLE>


	 </td>
  </tr>
		<TR>
			<TD colspan="2" align="center" height="50px">
                            <input type="submit" name="Submit" value="保存" class="button"/>　

			<input type="button" name="Submit2" value="返回" class="button" onclick="window.history.go(-1);"/></TD>
		</TR>
		</TABLE>
	 </td>
  </tr>
  </table>

</div>
</form>
</body>
</html>
<?php
            mysql_close($conn);
?>