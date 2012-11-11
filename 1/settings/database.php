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

    /*Connect Primary DB*/
	$link = mysql_connect(SAE_MYSQL_HOST_M.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
    /*Connect Sub DB*/
	//$link = mysql_connect(SAE_MYSQL_HOST_S.':'.SAE_MYSQL_PORT,SAE_MYSQL_USER,SAE_MYSQL_PASS);
	if (!$link)
		die ("<b>Cannot connect to database, check if username, password and host are correct.</b>");
    $success = mysql_select_db(SAE_MYSQL_DB,$link);
	if (!$success) {
		print "<b>Cannot choose database, check if database name is correct.";
		die();
	}
?>

