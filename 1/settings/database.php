<?php
	$database="sphider";
	$mysql_user = "root";
	$mysql_password = ""; 
	$mysql_host = "localhost";
	$mysql_table_prefix = "";

	/*
	$success = mysql_pconnect ($mysql_host, $mysql_user, $mysql_password);
	if (!$success)
		die ("<b>Cannot connect to database, check if username, password and host are correct.</b>");
    $success = mysql_select_db ($database);
	if (!$success) {
		print "<b>Cannot choose database, check if database name is correct.";
		die();
	}
	*/

	/*
	如果您没有使用SaeMysql类操作数据库，可以使用以下预定义常量进行连接：
	用户名　 :  SAE_MYSQL_USER
	密　　码 :  SAE_MYSQL_PASS
	主库域名 :  SAE_MYSQL_HOST_M
	从库域名 :  SAE_MYSQL_HOST_S
	端　　口 :  SAE_MYSQL_PORT
	数据库名 :  SAE_MYSQL_DB
    使用方法，以mysql模块为例:
	*/

    /* 连主库 */
	$success = mysql_pconnect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
    /* 连从库 */
	//$success = mysql_connect(SAE_MYSQL_HOST_S.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if (!$success)
		die ("<b>Cannot connect to database, check if username, password and host are correct.</b>");
    $success = mysql_select_db (SAE_MYSQL_DB);
	if (!$success) {
		print "<b>Cannot choose database, check if database name is correct.";
		die();
	}
?>

