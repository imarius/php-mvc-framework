<?php
	require HOME . DS . 'framework' . DS . 'core' . DS . 'core.include.php';
	
	class HomeController extends Controller 
	{
		public function Index() 
		{
			try 
			{
				$this->_view->set('greeting', "Hello! Everything is set up ok :D");
				$this->_view->set('title', 'Basic MVC Framework');

				return $this->_view->output();
			}
			catch(Exception $e)
			{
				echo 'Application Error : ' . $e->getMessage();
			}
		}
	}
?>