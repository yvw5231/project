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


function link(fom){
//   document.getElementById("fom").action="../../../manage/adminDoaddware.php";
//   document.getElementById("fom").submit();
   if(fom.warename.value=="")
   {
       alert("请输入商品的名称");fom.warename.focus();return false;
   }
   if(fom.warename.value.length>15){
       alert("商品的名称字符不能大于15");fom.warename.focus();return false;
   }

   if(fom.wareprice.value==""){
       alert("请输入商品的价格！");fom.wareprice.focus();return false;
   }
   if(fom.wareprice.value.length>10){
       alert("价格不能字符不能大于10");fom.wareprice.focus();return false;
   }
//   if(fom.wareprice.value!="^([+-]?)\\d*\\.?\\d+$")
//   {
//       alert("价格必须为数字");fom.wareprice.focus();return false;
//   }
   if(fom.wareid.value=="==请选择=="){
       alert("请选择商品的类别");fom.wareid.focus();return false;
   }
   if(fom.wareintro.value==""){
       alert("请输出商品的简介");fom.wareintro.focus();return false;
   }
   if(fom.wareintro.value.length>150){
       alert("字符长度不能超过150");fom.wareintro.focus();return false;
   }

   if(fom.wareimage.value==""){
       alert("请选择商品的图片");fom.wareimage.focus();return false;
   }
   if(fom.warenum.value==""){
       alert("请输出商品的数量");fom.warenum.focus();return false;
   }
   if(fom.warenum.value.length>10)
   {
       alert("字符最大长度不能超过10");fom.warenum.focus();return false;

   }
//
//   if(fom.warenum.value=="^([+-]?)\\d*\\.?\\d+$")
//   {
//       alert("数量必须为数字");fom.warenum.focus();return false;
//   }





}
function fanhui(Submit2){
       window.location.href='../index.php'; return true;
}



</script>
<style type="text/css">
<!--
.atten {font-size:12px;font-weight:normal;color:#F00;}
-->
</style>
</head>

<body class="ContentBody">
  <form action="../../../manage/adminDoaddware.php" method="post" enctype="multipart/form-data" name="fom" id="fom" target="sypost" >
<div class="MainDiv">
<table width="99%" border="0" cellpadding="0" cellspacing="0" class="CContent">
  <tr>
      <th class="tablestyle_title" >商品添加</th>
  </tr>
  <tr>
    <td class="CPanel">

		<table border="0" cellpadding="0" cellspacing="0" style="width:100%">
		<tr><td align="left">
		<input type="button" name="Submit" value="保存" class="button" onclick=" return link(fom);"/>　

                <input type="button" name="Submit2" value="返回" class="button" onclick="return fanhui(Submit2)"/>
		</td></tr>

		<TR>
			<TD width="100%">
				<fieldset style="height:100%;">
				<legend>添加商品</legend>
					  <table border="0" cellpadding="2" cellspacing="1" style="width:100%">

					  <tr>
					    <td nowrap align="right" width="13%">商品名称:</td>
					    <td width="41%"><input name="warename" class="text" style="width:250px" type="text" size="40" />
				        <span class="red"> *</span></td>
					    <td align="right" width="19%">&nbsp;</td>
					    <td width="27%">&nbsp;</td>
					  </tr>
					  <tr>
					    <td nowrap align="right">商品价格:</td>
					    <td><input name="wareprice" id="" class="wareprice" style="width:154px" /></td>
					    <td align="right">&nbsp;</td>
					    <td>&nbsp;</td>
					  </tr>
					   <tr>
					    <td nowrap align="right">商品类别:</td>
					    <td><select name="wareid" >
                          <option>==请选择==</option>
                          <?php
                             $sql= "SELECT * FROM type";
                             $rs=mysql_query($sql);
                             while($obj = mysql_fetch_object($rs))
                                 {
                                    echo "<option value=\"$obj->type_id\">$obj->type_sort</option>";
                                 }

                         ?>
                        </select></td>
					    <td align="right">&nbsp;</td>
					    <td>&nbsp;</td>
					   </tr>
					  <tr>
					    <td nowrap align="right" height="120px">商品介绍:</td>
					    <td colspan="3"><textarea id="textarea" name="wareintro" rows="5" cols="80"></textarea></td>
					    </tr>
					  <tr>
					    <td nowrap align="right" height="31">商品图片：</td>
					    <td colspan="3"><input type="file" name="wareimage"/>
						&nbsp;</td>
					    </tr>
					  <tr>
					    <td nowrap align="right" height="31">商品数量：</td>
					    <td colspan="3"><input name="warenum" id="Input" class="text" style="width:154px" /></td>
					    </tr>
					  </table>
			 <br />
				</fieldset>			</TD>
		</TR>

		</TABLE>


	 </td>
  </tr>






		<TR>
			<TD colspan="2" align="center" height="50px">
                            <input type="submit" name="Submit" value="保存" class="button" onclick=" return link(fom);"/>　

			<input type="button" name="Submit2" value="返回" class="button" onclick="return fanhui(Submit2);"/></TD>
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