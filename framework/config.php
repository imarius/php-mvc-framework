<?php
	/*
	* DB Connection Strings
	*/
	define ('DB_HOST', 'localhost');
	define ('DB_NAME', 'northwind');
	define ('DB_USER', 'root');
	define ('DB_PASS', '');

	/*
	* Default Route Values
	* TODO: Think of a better place to have this.
	*/

	$controller = "home";
	$action = "index";
	$query = null;

	if(isset($_GET['load']))
	{
		$params = array();
		$params = explode("/", $_GET['load']);

		$controller = ucwords($params[0]);

		if(isset($params[1]) && !empty(params[1]))
		{
			$action = $params[1];
		}

		if(isset($params[2]) && !empty($params[2]))
		{
			$query = $params[2];
		}
	}

	$modelName = $controller;
	$controller .= 'Controller';
	$load = new $Controller($modelName, $action);

	if(method_exists($load, $action))
	{
		$load->$action($query);
	}
	else 
	{
		//TODO: Do this more elegantly.
		die('Invalid method name.');
	}
?>