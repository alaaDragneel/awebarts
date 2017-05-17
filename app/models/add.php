<?php

/*
** ADD CLASS
**nsert he data to the mysql database
*/

class Add extends Awebarts
{
	private $array;
	private $tblName;

	public function __construct($array, $tblName)
	{
		if(is_array($array)){
			$this->array = $array;
			$this->tblName = $tblName;
		} else {
			throw new Exception("Error Processing Request");
		}

		$this->connectToDB();

		//insert the data into the table
		$this->addData($this->array);
		//close
		$this->close();
	}

	//insert the data into the table
	public function addData($array)
	{
		foreach ($array as $key => $value) {
			$keys[] = $key;
			$values[] = $value;
		}

		$tblKeys = implode($keys, ','); //to convert the array to string
		$tblValues ='"'. implode($values, '","') .'"';
		// $pat = "**8*//";
		//
		// $tblValues .= $pat;
		//
		// $tblValues = str_replace(','.$pat, ' ', $sql);

		$add = $this->conn->con->prepare("INSERT INTO $this->tblName($tblKeys) VALUES($tblValues)");
		$execute = $add->execute();
		if($execute) {
			return true;
		} else {
			throw new Exception("Error Processing Request");

		}
	}
}
