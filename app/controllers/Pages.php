<?php

	if($_POST || @$_GET['action']){
		if(isset($_GET['action']) && $_GET['action'] == 'add'){
			if(isset($_POST['submit']) && $_POST['submit'] == 'add'){
				// get the post values
				//, `page_name`, `page_content`, `page_status`, `page_visits`, `section_id`, `page_image`, `page_date`
				$newPage['page_name'] 		= trim(strip_tags($_POST['page_name']));
				$newPage['page_content'] 	= trim(strip_tags($_POST['page_content']));
				$newPage['page_status'] 		= trim(strip_tags($_POST['page_status']));
				$newPage['section_id'] 		= intval($_POST['section_id']);
				$newPage['page_visits'] 		= 0;
				$newPage['userName'] 		=  trim(strip_tags($_POST['userName']));

				try{
					require_once "models/upload.php";
					// file name
					$file  = $_FILES['page_image']['error'];
					// file field
					$fileField = 'page_image';
					// allowed ext.
					$allowedExt = array('jpg', 'jpeg', 'png', 'gif');
					// upload directory
					$uploadDirectory = 'resources/uploads/';
					//max size
					$maxSize = 4000000;
					//start uploda
					$upload = new Upload($file, $allowedExt, $uploadDirectory, $maxSize, $fileField);
					// run upload function
					$upload->uploadFiles();
					// get the file new name
					$newPage['page_image'] = $upload->getFileUrl();
				} catch(Exception $e){
					echo $e->getMessage();
				}

				// start array error
				$pageError = array();
				if(empty($newPage['page_name'] )){$pageError[] = "Please fill the page name Field";	}
				if(empty($newPage['page_content'] )){$pageError[] = "Please fill the page content Fields";	}
				if(empty($newPage['section_id'] )){$pageError[] = "Please choose the section";	}
				if(empty($newPage['page_image'] )){$pageError[] = "Please choose the image";	}
				if(empty($newPage['page_status'] )){$pageError[] = "Please choose the page status";	}

				if(!empty($pageError)){
					foreach($pageError as $err){
						echo '<div class="text-center errorMassage"><div class="alert alert-danger" >'. $err .'</div></div>';
					}
				}else {
					$tableName = 'pages';
					try {
						include "models/Awebarts.php";
						include "models/add.php";
						$addNewPage = new Add($newPage, $tableName);
						if($addNewPage == true){
							echo '<div class="text-center"><div class="alert alert-success" >the data successfully inserted</div></div>';
							header("refresh: 3;url=". $_SERVER["HTTP_REFERER"]);
						}

					} catch (Exception $e) {
						echo $e->getMessage();
					}
				}
			} else {
				try {
					include "models/Awebarts.php";
					include "models/display.php";
					$tableName = "sections";
					$display = new Display($tableName);
					$rows = $display->getData('section_id', 100, 'fetchAll');

				} catch (Exception $e) {
					echo $e->getMessage();
				}
				include "views/addNewPage.php";
			}
		}

		// start delete controller
		if(isset($_GET['action']) && $_GET['action'] == 'delete'){
			try {
				include "models/Awebarts.php";
				include "models/delete.php";
				$tableName = "pages";
				$id = $_GET['id'];
				$deleteSec = new Delete($tableName);
				$deleteSec->DeleteById('page_id', $id);
				if($deleteSec == true) {
					echo '<div class="container text-center" style="margin-top: 50px;"><div class="alert alert-success" >the data successfully Deleted</div></div>';
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}

		}
		// end delete controller

		// start edit controller

		if(isset($_GET['action']) && $_GET['action'] == 'edit'){

			if(isset($_POST['submit']) && $_POST['submit'] == 'update'){
				// get the post values
				$editPage['page_name'] 		= trim(strip_tags($_POST['page_name']));
				$editPage['page_content'] 	= trim(strip_tags($_POST['page_content']));
				$editPage['page_status'] 	= trim(strip_tags($_POST['page_status']));
				$editPage['section_id'] 		= intval($_POST['section_id']);
				$tableName = 'pages';

				try{
					require_once "models/upload.php";
					// file name
					$file = $_FILES['page_image']['name'];
					// file field
					$fileField = 'page_image';
					// allowed ext.
					$allowedExt = array('jpg', 'jpeg', 'png', 'gif');
					// upload directory
					$uploadDirectory = 'resources/uploads/';
					//max size
					$maxSize = 4000000;
					//start uploda
					$upload = new Upload($file, $allowedExt, $uploadDirectory, $maxSize, $fileField);
					// run upload function
					$upload->uploadFiles();
					// get the file new name
					$editPage['page_image'] = $upload->getFileUrl();
				} catch(Exception $e){
					echo $e->getMessage();
				}

				// start array error
				$pageErrors = array();
				if(empty($editPage['page_name'] )){$pageErrors[] = "Please fill the page name Field";	}
				if(empty($editPage['page_content'] )){$pageErrors[] = "Please fill the page content Fields";	}
				if(empty($editPage['section_id'] )){$pageErrors[] = "Please choose the section";	}
				if(empty($editPage['page_status'] )){$pageErrors[] = "Please choose the page status";	}

				if(!empty($pageErrors)){
					foreach($pageErrors as $err){
						echo '<div class="text-center"><div class="alert alert-danger" >'. $err .'</div></div>';
					}
				}else {
					try {

						require_once "models/Awebarts.php";
						include "models/update.php";
						$id = $_GET['id'];
						$tableName = 'pages';
						$pageEdit = new Update($editPage, $tableName);
						$pageEdit->editData('page_id', $id);
						if($pageEdit == true){
							echo '
							<div class="container text-center" style="margin-top: 50px;">
								<div class="alert alert-success" >
									the data successfully updated
								</div>
							</div>';
							header("refresh: 3;url=". $_SERVER["HTTP_REFERER"]);
						}

					} catch (Exception $e) {
						echo $e->getMessage();
					}
				}
			}else {
				try{
					require_once "models/Awebarts.php";
					include "models/display.php";
					$tableName = "pages";
					$id = $_GET['id'];
					$display = new Display($tableName);
					$editRows = $display->getEditById('page_id', $id);

					$tableName = "sections";
					$displaySections = new Display($tableName);
					$rows = $displaySections->getData('section_id', 100, 'fetchAll');
				} catch(Exception $e){
					echo $e->getMessage();
				}

				include "views/editPage.php";

			}
		}
		// end edit controller

	} else {
		try {
			include "models/Awebarts.php";
			include "models/display.php";
			$tableName = "pages";
			$display = new Display($tableName);
			$rows = $display->getData('page_id', 100, 'fetchAll');


		} catch (Exception $e) {
			echo $e->getMessage();
		}
		include "views/pages.php";
	}
