<?php
	$database = SAE_MYSQL_DB;
	$mysql_user = SAE_MYSQL_USER;
	$mysql_password = SAE_MYSQL_PASS; 
	$mysql_host = SAE_MYSQL_HOST_M;
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
	�����û��ʹ��SaeMysql��������ݿ⣬����ʹ������Ԥ���峣���������ӣ�
	�û����� :  SAE_MYSQL_USER
	�ܡ����� :  SAE_MYSQL_PASS
	�������� :  SAE_MYSQL_HOST_M
	�ӿ����� :  SAE_MYSQL_HOST_S
	�ˡ����� :  SAE_MYSQL_PORT
	���ݿ��� :  SAE_MYSQL_DB
    ʹ�÷�������mysqlģ��Ϊ��:
	*/

    /* ������ */
	$link = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
    /* ���ӿ� */
	//$link = mysql_connect(SAE_MYSQL_HOST_S.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if (!$link)
		die ("<b>Cannot connect to database, check if username, password and host are correct.</b>");
    $success = mysql_select_db(SAE_MYSQL_DB,$link);
	if (!$success) {
		print "<b>Cannot choose database, check if database name is correct.";
		die();
	}
?>

