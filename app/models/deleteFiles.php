<?php

/*
** delete the library files
*/

class DeleteFiles
{
	private $files;

	public function __construct($files)
	{
		if(is_array($files)){
			$this->files = $files;
		} else {
			throw new Exception("the data must be an array");

		}
	}
	// delete files function
	public function DeleteFiles()
	{
		$files = $this->files;

		foreach($files as $file){
			if(file_exists($file)){
				unlink($file);
			} else {
				throw new Exception("this File is Not found");
			}
		}
		return true;
	}
}
