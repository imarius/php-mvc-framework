<?php
	/*
	* Base Ecommerce class handling products / categories
	*/
	class eCommerce
	{
		protected $_db;

		public function __construct()
		{
			$this->_db = Db::init();
		}

		
	}
?>