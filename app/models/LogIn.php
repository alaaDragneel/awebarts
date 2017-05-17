<?php

/*
**log in class
**awebarts
*/


class login
{
	private $userName;
	private $password;
	private $conn;

	public function __construct($userName, $password)
	{
		// set the data
		$this->setData($userName, $password);
		// connect to the DB
		$this->connectToDB();
		// get data
		$this->getData();

		$this->close();
	}
	protected function connectToDB()
	{
		require_once "../models/database.php";
		$vars = "../include/vars.php";
		// get the class object
		$this->conn = new Database($vars);
	}



	private function setData($userName, $password)
	{
		$this->userName = $userName;
		$this->password = sha1($password);
	}

	private function getData()
	{
		// prepare the select
		$query = $this->conn->con->prepare("SELECT * FROM users WHERE userName = ? AND password = ? ");

		$query->execute(array($this->userName, $this->password));

		$count = $query->rowCount();

		if($count > 0){
			return true;
		}else{
			throw new Exception("user name or password is not corrected please try again");

		}
	}

	protected function close()
	{
		$this->conn->close();
	}
}
