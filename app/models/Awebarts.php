<?php

/*
**include the main methods and attr
*/


class Awebarts
{
	protected $conn;

	protected function connectToDB()
	{
		require_once MODELS."database.php";
		$vars = APP."include/vars.php";
		// get the class object
		$this->conn = new Database($vars);
	}


	protected function close()
	{
		$this->conn->close();
	}
}
