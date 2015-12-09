<?php
require_once '../comm/config.php'; //引入配置文件
/*
 * 公共方法集，访问数据库
*/
function get_Connect() {
    $connection = mysql_connect($GLOBALS["cfg"]["server"]["adds"],$GLOBALS["cfg"]["server"]["db_user"],$GLOBALS["cfg"]["server"]["db_psw"]) or  die(header("location: ../web/error.php?msg=数据库连接错误"));
    $db = @mysql_select_db($GLOBALS["cfg"]["server"]["db_name"],$connection) or die(header("location: ../web/error.php?msg=数据库名不正确"));
    mysql_query("set names utf8");
    return $connection;
}
/**
* 执行查询操作
*/
function execQuery($strQuery){
    $results = array();
    $connection = get_Connect();
    $rs = @mysql_query($strQuery,$connection);
    for ($i=0;$i<mysql_num_rows($rs);$i++)
    {
        $results[$i] = mysql_fetch_assoc($rs);//读取一条记录
    }
    mysql_free_result($rs);//释放结果集
    mysql_close();//关闭连接
    return $results;//返回查询结果
}
/**
 * 对数据表听记录执行修改、删除和插入操作 header("location: ./error.php?msg=数据表操作失败")
 * @param <type> $strUpdate  sql语句
 */
function execUpdate($strUpdate){
    $connection = get_Connect();
    //执行非结果返回操作
    $rs = @mysql_query($strUpdate,$connection);
    $result = mysql_affected_rows();
    mysql_close();
    return $result;
}

/**
 * 页面头部输出
 * @param <type> $title
 * @return <type>
 */

?>
