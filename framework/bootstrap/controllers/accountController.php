<?php
	require HOME . DS . 'framework' . DS . 'core' . DS . 'core.include.php';
	
	class AccountController extends Controller 
	{
		public function __construct($model, $action)
		{
			parent::__construct($model, $action);
			$this->_setModel($model);
		}

		public function LogIn()
		{
			
		}
	}
?>