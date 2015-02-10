<?php
	require HOME . DS . 'framework' . DS . 'core' . DS . 'core.include.php';
	
	class AccountController extends Controller 
	{
		public function __construct($model, $action)
		{
			parent::__construct($model, $action);
			$this->_setModel($model);
		}

		public function Manage()
		{
			if(!isset($_SESSION['uid']))
			{
				header('Location: /account/login');
			}

			try
			{
				$this->_view->set("title", "Account Control Panel");

				$this->_view->output();
			}
			catch (Exception $e)
			{
				echo 'Application error : ' . $e->getMessage();
			}

		}

		public function LogIn()
		{
			if (isset($_SESSION['uid']))
			{
				header('Location: /account/manage');
			}

			if(isset($_POST['loginSubmit']))
			{
				$errors = array();
				$check = true;

				$username = isset($_POST['username']) ? trim($_POST['username']) : NULL;
				$password = isset($_POST['password']) ? trim($_POST['password']) : NULL;

				if (empty($username))
				{
					$check = false;
					array_push($errors, "Username is required!");
				}

				if (empty($username))
				{
					$check = false;
					array_push($errors, "Password is required!");
				}

				if($check)
				{
					try
					{
						$account = new AccountModel();
						$account->setUsername($username);
						$account->setPassword($password);

						$userData = $account->getUserLogin();

						if(!$userData)
						{
							array_push($errors, "Invalid Login Details");
							$this->_setView('login');
							$this->_view->set('title', 'Invalid Log In');
							$this->_view->set('errorDisplay', 'block');
							$this->_view->set('errors', $errors);

							return $this->_view->output();
						}

						$_SESSION['uid'] = $userData['id'];
						$_SESSION['username'] = $userData['username'];
						$_SESSION['email'] = $userData['email'];

						if(isset($_POST['formLocation']))
						{
							header('Location: ' . $_POST['formLocation']);
							exit;
						}

						header('Location: /account/manage');
						exit;

					}
					catch(Exception $e)
					{
						echo 'Application error: ' . $e->getMessage();
					}
				} 
				else 
				{
					$this->_setView('login');
					$this->_view->set('title', 'Invalid Log In');
					$this->_view->set('errorDisplay', 'block');
					$this->_view->set('errors', $errors);

					return $this->_view->output();
				}
			}

			try 
			{
				$this->_view->set("title", "Log In");
				$this->_view->set('errorDisplay', 'none');


				$this->_view->output();
			}
			catch (Exception $e)
			{
				echo 'Application Error : ' . $e->getMessage();
			}
		}

		public function LogOut()
		{
			session_unset();
			session_destroy();

			header("Location: " . $_SERVER['HTTP_REFERER']);
			exit;
		}

		public function Register()
		{
			if (isset($_SESSION['uid']))
			{
				header('Location: /account/manage');
				exit;
			}

			if (isset($_POST['registerSubmit']))
			{
				$errors = array();
				$check = true;

				$username = isset($_POST['username']) ? trim($_POST['username']) : NULL;
				$email = isset($_POST['email']) ? trim($_POST['email']) : NULL;
				$displayName = isset($_POST['display_name']) ? trim($_POST['display_name']) : NULL;
				$password = isset($_POST['password']) ? trim($_POST['password']) : NULL;
				$confirmPwd = isset($_POST['password_confirmation']) ? trim($_POST['password_confirmation']) : NULL;

				if (empty($username))
				{
					$check = false;
					array_push($errors, "Username is required!");
				} 
				if (!filter_var( $email, FILTER_VALIDATE_EMAIL ))
				{
					$check = false;
        			array_push($errors, "Invalid E-mail!");
				}

				if(empty($password) || empty($confirmPwd))
				{
					if($password != $confirmPwd) 
					{
						$check = false;
        				array_push($errors, "Passwords dont match");
					}

					$check = false;
    				array_push($errors, "Fill password fields");
				}

				if(!$check)
				{
					$this->_setView('register');
					$this->_view->set('title', 'Invalid Form Data');
					$this->_view->set('errors', $errors);
					$this->_view->set('formData', $_POST);
					$this->_view->set('errorDisplay', 'block');
					$this->_view->set('formDisplay', 'block');

					return $this->_view->output();
				}

				try 
				{
					$account = new AccountModel();
					$account->setUsername($username);
					$account->setEmail($email);
					$account->setPassword($password);
					$account->setDisplayName($displayName);

					$userCheck = $account->getUser();

					if($userCheck == '')
					{
						$account->registerUser();

						$userData = $account->getUser();

						$_SESSION['uid'] = $userData['id'];
						$_SESSION['username'] = $userData['username'];
						$_SESSION['email'] = $userData['email'];
						$_SESSION['allUserData'] = $userData;

						$message = "Your are now registered " . $userData['username'] . ". Your email is " . $userData['email'];
					} 
					else 
					{
						array_push($errors, "Username / email already exists");

						$this->_setView('register');
						$this->_view->set('title', 'Username / Email Exists');
						$this->_view->set('errors', $errors);
						$this->_view->set('errorDisplay', 'block');
						$this->_view->set('formDisplay', 'block');

						return $this->_view->output();
					}

					$this->_setView('register');
					$this->_view->set('title', 'Success');
					$this->_view->set('errorDisplay', 'none');
					$this->_view->set('GreetMessage', $message);
					$this->_view->set('formDisplay', 'none');

					header("refresh:3;url=/account/manage");
					return $this->_view->output();

				}
				catch(Exception $e)
				{
					throw new Exception($e->getMessage());
				}
			} 
			else 
			{
				try 
				{
					$this->_setView('register');
					$this->_view->set('title', 'Register for a Account');
					$this->_view->set('errorDisplay', 'none');
					$this->_view->set('formDisplay', 'block');

					return $this->_view->output();
				}
				catch (Exception $e)
				{
					throw new Exception($e->getMessage());
				}
			}
		}
	}
?>