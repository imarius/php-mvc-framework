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

		public function getUser()
		{
			$sql = "SELECT username, email, displayName from northwind_membership where username = " . $this->_username;

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
			$sql = "INSERT INTO northwind_membership (email, username, password) VALUES (? , ? , ?)";

		    $data = array(
		    	$this->_email,
		    	$this->_username,
		    	$this->_password
		    );

			$sth = $this->_db->prepare($sql);

			return $sth->execute($data);
		}

		public function updateUser()
		{
			$sql = "UPDATE northwind_membership SET username = ". $userData['username'] ." , email = ". $userData['email'] .
					", passowrd=" . $userData['password'] . "displayName=" . $userData["displayName"]." WHERE id = " . $userData["uid"];

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