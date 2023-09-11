<?php

	define ('db_nome', 'fm_tcc');
	define ('db_user', 'root');
	define ('db_pass', '');
	define ('db_host', 'localhost');

	if (!defined('abspath'))
		define('abspath', dirname(__FILE__) . '/');
	
	if (!defined("baseurl"))
		define("baseurl", "/tcc_enrico");

	if (!defined('dbpath'))
		define('dbpath', abspath . "src/inc/funcoes.php");
	
	define('header_template', abspath . "src/inc/header.php");
	define('footer_template', abspath . "src/inc/footer.php");

?>