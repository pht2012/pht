<?php
	// 定义连接数据库的配置文件

	// 定义连接数据库的常量
	define('DB_HOST',"localhost");		// 定义数据库的地址
	define('DB_USER',"root");			// 定义登录的用户名
	define('DB_PWD',"");				// 定义密码
	define('DB_NAME',"lamp");			// 定义默认操作的数据库
	define('DB_CHARSET',"utf8");		// 定义默认字符集

	// 连接数据库
	$link = @mysqli_connect(DB_HOST,DB_USER,DB_PWD) or die("数据库连接失败");

	// 设置默认操作的数据库
	mysqli_select_db($link,DB_NAME);

	// 设置默认字符集
	mysqli_set_charset($link,DB_CHARSET);