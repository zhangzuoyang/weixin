<?php
	header('Content-Type:text/html; charset=utf-8');

	error_reporting(E_ALL & ~E_NOTICE);

	define('DB_HOST', 'rdsyvzbamyvzbam.mysql.rds.aliyuncs.com');

	define('DB_USER', 'wp_db');

	define('DB_PWD', 'wpdb123');

	define('DB_NAME', 'wp_db');

	define('DB_PREFIX', 'wemall_');

	$conn = @mysql_connect(DB_HOST, DB_USER, DB_PWD) or die('数据库链接失败：'.mysql_error());

	@mysql_select_db(DB_NAME) or die('数据库错误：'.mysql_error());

	@mysql_query('SET NAMES UTF8') or die('字符集错误：'.mysql_error());

?>
