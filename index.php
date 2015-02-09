<?php
	define ('DS', DIRECTORY_SEPARATOR);
	define ('HOME', dirname(__FILE__));

	require_once HOME . DS . 'framework' . DS . '_app-config.php';
	require_once HOME . DS . 'framework' . DS . '_route-config.php';

	function setReporting() {
		if(DEVELOPMENT_ENVIROMENT == true) {
			error_reporting(E_ALL);
			ini_set('display_errors', 'On');
		}
		else 
		{
			error_reporting(E_ALL);
			ini_set('display_errors', 'Off');
			ini_set('log_errors', 'On');
			ini_set('error_log', HOME . DS . 'logs' . DS . 'error.log');
		}
	}

	function stripSlashesDeep($value) 
	{
		$value = is_array($value) ? array_map('stripSlashesDeep', $value) : stripslashes($value);
		return $value;
	}

	function removeMagicQuotes() 
	{
		if(get_magic_quotes_gpc()) 
		{
			$_GET = stripSlashesDeep($_GET);
			$_POST = stripSlashesDeep($_POST);
			$_COOKIE = stripSlashesDeep($_COOKIE);
		}
	}

	function unregisterGlobals() 
	{
		if(ini_get('register_globals')) 
		{
			$array = array('_SESSION', '_POST', '_GET', '_COOKIE', '_REQUEST', '_SERVER', '_ENV', '_FILES');

			foreach ($array as $value) 
			{
				foreach($GLOBALS[$value] as $key => $var)
				{
					if($var === $GLOBALS[$key])
					{
						unset($GLOBALS[$key]);
					}
				}
			}
		}
	}

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

	setReporting();
	removeMagicQuotes();
	unregisterGlobals();
?>