<?php

/*
** register class
**awebarts
*/
class Register
{
	private $name;
	private $userName;
	private $password;
	private $email;
	private $coon;
	public function __construct($data)
	{
		if(is_array($data)){
			//set the data
			$this->setData($data);
		}else{
			throw new Exception("Error");

		}
		// connect to thwe database
		$this->connectToDB();
		//insert the user data
		$this->registerUser();

		$this->close();
	}
	protected function connectToDB()
	{
		require_once "../models/database.php";
		$vars = "../include/vars.php";
		// get the class object
		$this->conn = new Database($vars);
	}

	private function setData($data)
	{
		$this->name = $data['name'];
		$this->userName = $data['userName'];
		$this->password = sha1($data['password']);
		$this->email = $data['email'];
		$error = array();
		if(empty($this->name)) { $error[] = "the name field can't be empty";}
		if(empty($this->userName)) { $error[] ="the user name field can't be empty";}
		if(empty($this->password)) { $error[] ="the password field can't be empty";}
		if(empty($this->email)) { $error[] ="the email field can't be empty";}

		if(!empty($error)){
			foreach($error as $err){
				echo '<div class="container text-center" style="margin-top: 50px;"><div class="alert alert-danger" >'. $err .'</div></div>';
			}
			die();
		}
	}

	private function registerUser()
	{
		// prepare the select
		$insertUser = $this->conn->con->prepare("INSERT INTO
												users(name, userName, password, email)
											VALUES(:uName, :uUserName, :uPassword, :uEmail)
		");

		$insertUser->execute(array(
			'uName' => $this->name,
			'uUserName' => $this->userName,
			'uPassword' => $this->password,
			'uEmail' => $this->email
		));

		if($insertUser){
			echo '<div class="container text-center" style="margin-top: 50px;"><div class="alert alert-success" >you now a member with our web site the registration success</div></div>';
			header("refresh: 3;url=../index.php");
		}else{
			throw new Exception('<div class="container text-center" style="margin-top: 50px;"><div class="alert alert-danger" >Error the proccess fialds try in another time</div></div>');
		}
	}
	protected function close()
	{
		$this->conn->close();
	}
}
?>
<link rel="stylesheet" type="text/css" href="resources/css/bootstrap.min.css">
