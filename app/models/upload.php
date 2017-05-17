<?php
/*
** class uploads
** used to uploads the files to uploads Directory
*/
/**
 *
 */
class Upload
{
	private $allowedExt;
	private $maxSize;
	private $file;
	private $fileField;
	private $uploadDirectory;
	private $url;
	private $urlArray = array();

	function __construct($file, $allowedExt, $uploadDirectory, $maxSize, $fileField)
	{
		if(is_array($allowedExt) AND is_numeric($maxSize)){
			$this->file = $file;
			$this->allowedExt = $allowedExt;
			$this->uploadDirectory = $uploadDirectory;
			$this->maxSize = $maxSize;
			$this->fileField = $fileField;
		} else {
			throw new Exception("File extensions must be in an array && max size value must be integer value");

		}
	}

	public function uploadFiles()
	{
		$files = $this->file; // array that have all the file [info]
		$allowedExt = $this->allowedExt;
		$maxSize = $this->maxSize;
		$fileField = $this->fileField;
		$uploadDir = $this->uploadDirectory;

		if(count($files) > 0) {
			foreach ($files as $file => $value) { //start loop
				//start error array
				$errors = array();
				//get the file name
				$fileName = $_FILES[$fileField]['name'][$file];
				// get the extension
				$fileType = @strtolower(end(explode('.', $fileName)));
				// encrypt the file name
				$shName = sha1($fileName);
				// set the new encrypt file name
				$hashedFileName = Date('Y-m-d-H-i-s') . "_" . $shName . "." . $fileType;
				// get the file size
				$fileSize = $_FILES[$fileField]['size'][$file];
				// get the file tmp_name
				$fileTmpName = $_FILES[$fileField]['tmp_name'][$file];
				// validtae the extension
				if(in_array($fileType, $allowedExt) === false){
					$errors[] = 'Extension not allowed';
				}
				// validtae the size
				if($fileSize > $maxSize){
					$errors[] = 'the file size must be less than' . $maxSize . 'Kb';
				}
				if(empty($errors)){
					// store the file name
					$this->url = $hashedFileName;
					// write the directory
					$place = $uploadDir . $hashedFileName;
					// move the final file
					move_uploaded_file($fileTmpName, $place);
					$this->urlArray = $this->url;
				}else{

					foreach ($errors as $error) {
						throw new Exception('<div class="text-center"><div class="alert alert-danger" >' . $error . '</div>');
					}
				}
			}
		}

		return TRUE;
	}

	public function getFileUrl()
	{
		return $this->url;
	}

	public function getFilesNames()
	{
		return $this->urlArray;
	}
}
