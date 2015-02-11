<?php
	class AccountModel extends Model 
	{
		private $_uid;
		private $_username;
		private $_email;
		private $_password;
		private $_displayName;

		public function setUserName($username)
		{
			$this->_username = $username;
		}

		public function setEmail($email)
		{
			$this->_email = $email;
		}

		public function setPassword($password)
		{
			$this->_password = $password;
		}

		public function setDisplayName($displayName)
		{
			$this->_displayName = $displayName;
		}

		public function setUid($uid)
		{
			$this->_uid = $uid;
		}

		public function getUserLogin()
		{
			$sql = "SELECT * 
					FROM northwind_membership 
					WHERE username = '" . $this->_username ."' LIMIT 1";

			$this->_setSql($sql);

			$user = $this->getRow(array($this->_uid));

			if(empty($user))
			{
				return false;
			} 
			elseif(!password_verify($this->_password, $user['password']))
			{
				return false;
			}

			return $user;
		}

		public function getUser()
		{


			$sql = "SELECT *
					FROM northwind_membership 
					WHERE username = '" . $this->_username ."' LIMIT 1";

			$this->_setSql($sql);

			$user = $this->getRow(array($this->_uid));

			if(empty($user))
			{
				return false;
			}

			return $user;
		}

		public function registerUser()
		{
			$sql = "INSERT INTO northwind_membership (email, username, password, displayName) 
					VALUES (? , ? , ?, ?)"; 

		    $data = array(
		    	$this->_email,
		    	$this->_username,
		    	password_hash($this->_password, PASSWORD_DEFAULT),
		    	$this->_displayName
		    );

			$sth = $this->_db->prepare($sql);

			return $sth->execute($data);
		}

		public function updateUser()
		{
			$sql = "UPDATE northwind_membership SET username = ". $this->_username ." , email = ". $this->_email .
					", passowrd=" . $this->_password . "displayName=" . $this->_displayName." WHERE id = " . $this->_uid;

			$this->_setSql($sql);

			$result = $this->getAll();

			if(empty($result))
			{
				return false;
			}

			return $result;
		}
	}
?>