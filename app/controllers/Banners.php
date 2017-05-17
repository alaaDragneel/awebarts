<?php

	if($_POST || @$_GET['action']){

		// start delete controller
		if(isset($_GET['action']) && $_GET['action'] == 'delete'){
			try {
				//get the banner url by id to unlink the files

				require_once  "models/Awebarts.php";
				include "models/display.php";
				$tableName = "banners";
				$id = $_GET['id'];
				$getBanner = new Display($tableName);
				$bannerUrl = $getBanner->getEditById('banner_id', $id);
			 	$url = $bannerUrl['banner_url'];

				// delete from the library
				$filesToDelete[] = $url;

				include 'models/deleteFiles.php';
				$fileDelete = new DeleteFiles($filesToDelete);
				$fileDelete->DeleteFiles();

				if($fileDelete == true){
					echo '<div class="text-center"><div class="alert alert-success" >the files successfully deleted</div></div>';
					header("refresh: 5;url=". $_SERVER["HTTP_REFERER"]);
				}

				// delete from the library

				// delete from database banner table

				include "models/delete.php";
				$deleteSec = new Delete($tableName);
				$deleteSec->DeleteById('banner_id', $id);

				if($deleteSec == true) {
					echo '<div class="container text-center" style="margin-top: 50px;"><div class="alert alert-success" >the data successfully Deleted</div></div>';
				}

				// delete from database banner table
			} catch (Exception $e) {
				echo $e->getMessage();
			}

		}
		// end delete controller

		if(isset($_POST['submit']) && $_POST['submit'] == 'Upload'){
			if(isset($_FILES)){
				try{
					require_once "models/upload.php";

					$file  = $_FILES['image']['name'];
					$fileField = 'image';
					$allowedExt = array('jpg', 'jpeg', 'png','gif');
					$uploadDirectory = 'resources/uploads/';
					$maxSize = 4000000;
					$upload = new Upload($file, $allowedExt, $uploadDirectory, $maxSize, $fileField);
					$upload->uploadFiles();
					$hashedFileName = $upload->getFilesNames();
					if($upload == true){
						echo '<div class="text-center"><div class="alert alert-success" >the File Uploaded Successfully</div>';
						//header("refresh: 3;url=". $_SERVER["HTTP_REFERER"]);
					}

					require_once 'models/Awebarts.php';
					require_once "models/add.php";
					$tblName = 'banners';

					//foreach($hashedFileName as $fil){
					 	$fileNames['banner_name'] = $hashedFileName;
						$fileNames['banner_url'] = $uploadDirectory.$hashedFileName;
						$fileNames['status'] = 1;
						$fileNames['createdBy'] = $_SESSION['userName'];
						$fileNames['type'] = trim(strip_tags($_POST['type']));

						$bannerAdd = new Add($fileNames, $tblName);
					//}



				} catch(Exception $e){
					echo $e->getMessage();
					header("refresh: 3;url=". $_SERVER["HTTP_REFERER"]);
				}
			}
		}

	} else {

		try {
			// add new banner view
			include 'views/addNewFile.php';
			// display banner view
			require_once 'models/Awebarts.php';
			require_once 'models/display.php';
			$tblName =  'banners';
			$bannerDisplay = new Display($tblName);
			$rowsBanners = $bannerDisplay->getData('banner_id', 100, 'fetchAll');
		} catch (Exception $e) {
			echo $e->getMessage();
		}


		include "views/banners.php";
	}
