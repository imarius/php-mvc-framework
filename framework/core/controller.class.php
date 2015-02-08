<?php
	/*
	* Controller Class. All future controllers will extend this class.
	*/
	class Controller 
	{
		protected $_model;
		protected $_controller;
		protected $_action;
		protected $_view;
		protected $_modelBaseName;
		protected $_frameworkStruct;
		
		public function __construct($model, $action)
		{
			$this->_controller = ucwords(__CLASS__);
			$this->_action = $action;
			$this->_modelBaseName = $model;
			$this->_frameworkStruct = 'framework' . DS . 'bootstrap' . DS . 'templates';

			$this->_view = new View(HOME . DS . $this->_frameworkStruct . DS . strtolower($this->_modelBaseName) . DS . $action . '.tpl');
		}

		protected function _setModel($modelName)
		{
			$modelName .= 'Model';
			$this->_model = new $modelName();
		}

		protected function _setView($viewName)
		{
			$this->_view = new View(HOME . DS . $this->_frameworkStruct . DS . strtolower($this->_modelBaseName) . DS . $viewName . '.tpl');
		}
	}
?>