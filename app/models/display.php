<?php

/*
** Display the data from the data base
*/

class Display extends Awebarts
{
	private $tblName;
	private $rows;

	public function __construct($tblName)
	{
		$this->tblName = $tblName;
		// connect to the DB
		$this->connectToDB();
	}

	public function getData($idName, $limit='100', $fetch='')
	{
		//start select
		$select = $this->conn->con->prepare("SELECT * FROM $this->tblName ORDER BY $idName DESC LIMIT $limit");
		// execute the query
		$select->execute();
		if(!$select){
			throw new Exception("Error Processing Request");
		} else {
			//start count the rows
			$count = $select->rowCount();
			if($count > 0){
				$this->rows = $select->$fetch();
			}
		}
		return $this->rows;
	}

	public function getEditById($idName, $id, $fetch = 'fetch', $options='')
	{
		$id = is_numeric($id) ? intval($id) : 0;
		//start select
		$select = $this->conn->con->prepare("SELECT * FROM $this->tblName WHERE $idName = ? $options");
		// execute the query
		$select->execute(array($id));
		if(!$select){
			throw new Exception("Error Processing Request");
		} else {
			//start count the rows
			$count = $select->rowCount();
			if($count > 0){
				$this->rows = $select->$fetch();
			}
		}
		return $this->rows;
	}

	public function getAllByStatus($type)
	{
		//start select
		$select = $this->conn->con->prepare("SELECT * FROM $this->tblName WHERE type = ? && status = 1 ORDER BY banner_id DESC");
		// execute the query
		$select->execute(array($type));
		if(!$select){
			throw new Exception("Error Processing Request");
		} else {
			//start count the rows
			$count = $select->rowCount();
			if($count > 0){
				$this->rows = $select->fetchAll();
			}
		}
		return $this->rows;
	}
}
