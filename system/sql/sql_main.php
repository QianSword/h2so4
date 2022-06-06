<?php
if(!defined('IN_XSS_PLATFORM')){
	exit('Access Denied!');
}


require "sql_options.inc.php";
require "sql_statements.inc.php";

function sql(){
	// 创建连接，设定字符集
	global $sql_host, $sql_usrn, $sql_passwd;
	$conn = mysqli_connect($sql_host, $sql_usrn, $sql_passwd);
	mysqli_set_charset($conn,'utf8'); 
	// 检测连接
	if (!$conn) {
	 die("连接失败: " . mysqli_connect_error());
	}
	// 执行数据库命令
	$sql = sql_create();
	if (mysqli_query($conn, $sql)) {
	 echo "数据库创建成功";
	} else {
	 echo "数据库创建失败: " . mysqli_error($conn);
	}
	mysqli_close($conn);
}
?>