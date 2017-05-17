<?php

/*
** data base class
*/

class Database
{
	private $host;
	private $user;
	private $password;
	private $database;
	public $con;

	public function __construct($fileName)
	{
		if(is_file($fileName)){ include $fileName; }
		else{ throw new Exception("Error Processing Request"); }

		$this->host 	 = $host; // host
		$this->user 	 = $user; // user name
		$this->password = $password; //password
		$this->database = $database; //database


		$this->connect(); //start connect
	}

	private function connect()
	{
		// host name and db name
		$dsn = "mysql:host=".$this->host.";dbname=".$this->database.";";
		// user name
		$user = $this->user;
		// passowrd if found
		$pass = $this->password;
		// options
		$option = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
		);

		try{// try to connect
			// connect with PDO
			$this->con = new PDO($dsn, $user, $pass, $option);
			// check if there are errors
			$this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}
		// catch the error if found
		catch(PDOException $e){
			// echo the error
			echo 'field to connect' . $e->getMessage();
		}
	}

	public function close()
	{
		$this->con = null;
	}
}
