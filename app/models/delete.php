<?php

/*
** delete  the requested id
*/

class Delete extends Awebarts
{
	private $tableName;

	public function __construct($tableName)
	{
		$this->tableName = $tableName;
		// connect to thwe database
		$this->connectToDB();

	}

	public function DeleteById($idName,$id)
	{
		$id = is_numeric($id) ? intval($id) : 0;
		$delete = $this->conn->con->prepare("DELETE FROM $this->tableName WHERE $idName = :del");

		$delete->bindParam('del', $id);

		$delete->execute();

		if(!$delete){
			throw new Exception("the itme didn't deleted");
		} else{
			return true;
		}
	}
}
