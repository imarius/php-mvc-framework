<?php
	define ('DS', DIRECTORY_SEPARATOR);
	define ('HOME', dirname(__FILE__));

	ini_set ('display_errors', 1);

	require_once HOME . DS . 'framework' . DS . '_app-config.php';
	require_once HOME . DS . 'framework' . DS . '_route-config.php';

	function __autoload($class)
	{
		if (file_exists(HOME . DS . 'framework' . DS . 'bootstrap' . DS . 'models' . DS . strtolower($class) . '.php'))
		{
			require_once HOME . DS . 'framework' . DS . 'bootstrap' . DS . 'models' . DS . strtolower($class) . '.php';
		}
		else if (file_exists(HOME . DS . 'framework' . DS . 'bootstrap' . DS .'controllers' . DS . strtolower($class) . '.php'))
		{
			require_once HOME . DS . 'framework' . DS . 'bootstrap' . DS .'controllers' . DS . strtolower($class) . '.php';
		}
	}
?>