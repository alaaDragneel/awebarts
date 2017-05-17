<?php

/*
** used to update the data
*/

class Update extends Awebarts
{
	private $tableName;
	private $array;

	public function __construct($array, $tableName)
	{
		if(is_array($array)){
			$this->array  = $array;
		}
		$this->tableName = $tableName;
		//get connection
		$this->connectToDB();
	}
	//, $section_name, $sectionStatus, $sectionLocation, $sec_desc
	public function editData($idName, $id)
	{
		$id = is_numeric($id) ? intval($id) : 0;

		$sql = "UPDATE $this->tableName SET ";

		foreach ($this->array as $key => $value) {
			$sql .= "`". $key ."` = " . "'". $value ."' ,";
		}

		$pat = "**8*//";

		$sql .= $pat;

		$sql = str_replace(','.$pat, ' ', $sql);

		$sql.= " WHERE $idName = $id";
		$edit = $this->conn->con->prepare($sql);
		$edit->execute();

		if(!$edit) {
			throw new Exception("Error the update faild");

		} else {
			return true;
		}

	}
}
