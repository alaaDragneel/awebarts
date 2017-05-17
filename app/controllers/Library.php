<?php

	if($_POST ){
		if(isset($_POST['submit']) && $_POST['submit'] == 'Upload'){
			if(isset($_FILES)){

				try{
					require_once "models/upload.php";

					$file  = $_FILES['image']['error'];
					$fileField = 'image';
					$allowedExt = array('jpg', 'jpeg', 'png');
					$uploadDirectory = 'resources/uploads/';
					$maxSize = 4000000;
					$upload = new Upload($file, $allowedExt, $uploadDirectory, $maxSize, $fileField);
					$upload->uploadFiles();
					if($upload == true){
						echo '<div class="text-center"><div class="alert alert-success" >the File Uploaded Successfully</div>';
						header("refresh: 3;url=". $_SERVER["HTTP_REFERER"]);
					}
				} catch(Exception $e){
					echo $e->getMessage();
					header("refresh: 3;url=". $_SERVER["HTTP_REFERER"]);
				}
			}
		}
	if(isset($_POST['submit']) && $_POST['submit'] == 'Delete'){
		try {
			// make array to store the posts value
			@$filesToDelete = $_POST['imgCheck'];
			if(empty($filesToDelete)){
				echo '<div class="text-center"><div class="alert alert-danger" >you didn\'t choose any files</div>';
			}else{

				include 'models/deleteFiles.php';
				$fileDelete = new DeleteFiles($filesToDelete);
				$fileDelete->DeleteFiles();
				if($fileDelete == true){
					echo '<div class="text-center"><div class="alert alert-success" >the files successfully deleted</div></div>';
					header("refresh: 5;url=". $_SERVER["HTTP_REFERER"]);
				}
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}

	}

	}else {
		include 'views/addNewFile.php';
		echo "<div class='clearfix'></div>";
		echo "<hr/>";
		// get the files path
		$uploadDirectory = 'resources/uploads/';
		//  get the files by scandir(path Hrer)
		$directoryScan = scandir($uploadDirectory);
		// remove the windowes problem by remove a small array from a big array($directoryScan)
		$scDir = array_diff($directoryScan, array('..', '.'));
		//loop for the flies to display
		echo "<div class='imgScan'>
			<form action='' method='post'>
			<div class='form-group'>

				<input type='submit' name='submit' value='Delete' class=\"btn btn-danger confirm\" />

			</div>
		";
		foreach($scDir as $value){
			// the file path And Name in img src
			echo"
			<p>
				<input type='checkbox' class='checkBox' name='imgCheck[]' value='$uploadDirectory$value'/>
				<img class='img-responsive img-thumbnail' src='$uploadDirectory$value' />
			</p>
			";

		}
		echo "</form></div>";


	}

?>
