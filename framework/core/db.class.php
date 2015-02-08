<?php
	/*
	* Singleton data access class to handle database connections
	*/
	class dbAccess
	{
		private static $db;

		public static function init()
		{
			if (!self::$db) 
			{
				try
				{
					$dsn = 'mysql:host='.DB_HOST.';dbname='.DB_NAME.';charset=UTF-8';
					self::$db = new PDO($dsn, DB_USER, DB_PASS);
					self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
				} 
				catch (PDOException $e) 
				{
					die('Connection error, dumping exeption data : ' . $e->getMessage());
				}
			}

			return self::$db;
		}
	}
?>