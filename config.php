<?php

	define ('db_name', 'fm_tcc');
	define ('db_user', 'root');
	define ('db_pass', '');
	define ('db_host', 'localhost');

	if (!defined('abspath'))
		define('abspath', dirname(__FILE__) . '/');
	
	if (!defined("baseurl"))
		define("baseurl", "/instituto-f-meira");

	if (!defined('dbpath'))
		define('dbpath', abspath . "src/inc/database.php");
	
	define('header_template', abspath . "src/inc/header.php");
	define('footer_template', abspath . "src/inc/footer.php");

?>