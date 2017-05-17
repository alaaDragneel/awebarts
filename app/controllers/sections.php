<?php

	if($_POST || @$_GET['action']){
		// add page
		if(isset($_GET['action']) && $_GET['action'] == 'add'){
			include "views/addSection.php";
		}

		if(isset($_POST['submit']) && $_POST['submit'] == 'add'){
			// get the post values
			$addSection['section_name'] 		= trim(strip_tags($_POST['section_name']));
			$addSection['sectionStatus'] 		= trim(strip_tags($_POST['sectionStatus']));
			$addSection['sectionLocation'] 	= trim(strip_tags($_POST['sectionLocation']));
			$addSection['sec_desc'] 			= trim(strip_tags($_POST['sec_desc']));
			$addSection['userName'] 			= trim(strip_tags($_POST['userName']));
			$error = array();
			if(empty($addSection['section_name'])) 		{ $error[] = "please fill all the fields";}
			if(empty($addSection['sectionStatus']))		{ $error[] = "please fill all the fields";}
			if(empty($addSection['sectionLocation'])) 	{ $error[] = "please fill all the fields";}
			if(empty($addSection['sec_desc'])) 		{ $error[] = "please fill all the fields";}

			if(!empty($error)){
				foreach($error as $err){
					echo '<div class="text-center"  style="z-index:3; position: absolute; top: 75%; left: 50%;"><div class="alert alert-danger" >'. $err .'</div></div>';
				}
			} else{

				$tableName = "sections";
				try {
					include "models/Awebarts.php";
					include "models/add.php";
					$addSection = new Add($addSection, $tableName);
					if($addSection == true){
						echo '<div class="container text-center" style="margin-top: 50px;"><div class="alert alert-success" >the data successfully inserted</div></div>';
					}

				} catch (Exception $e) {
					echo $e->getMessage();
				}
			}
		}
		// start delete controller
		if(isset($_GET['action']) && $_GET['action'] == 'delete'){
			try {
				include "models/Awebarts.php";
				include "models/delete.php";
				$tableName = "sections";
				$id = $_GET['id'];
				$deleteSec = new Delete($tableName);
				$deleteSec->DeleteById('section_id', $id);
				if($deleteSec == true) {
					echo '<div class="container text-center" style="margin-top: 50px;"><div class="alert alert-success" >the data successfully Deleted</div></div>';
				}
			} catch (Exception $e) {
				echo $e->getMessage();
			}

		}
		// end delete controller

		// start edit controller
		if(isset($_POST['submit']) && $_POST['submit'] == 'update'){
			// get the post values
			$EditSection['section_name'] 			= trim(strip_tags($_POST['section_name']));
			$EditSection['sectionStatus'] 		= trim(strip_tags($_POST['sectionStatus']));
			$EditSection['sectionLocation'] 		= trim(strip_tags($_POST['sectionLocation']));
			$EditSection['sec_desc'] 			= trim(strip_tags($_POST['sec_desc']));
			$EditSection['userName'] 			= $_SESSION['userName'];
			$formErrors = array();
			if(empty($EditSection['section_name'])) 		{ $formErrors[] = "please fill all the fields";}
			if(empty($EditSection['sectionStatus']))		{ $formErrors[] = "please fill all the fields";}
			if(empty($EditSection['sectionLocation'])) 	{ $formErrors[] = "please fill all the fields";}
			if(empty($EditSection['sec_desc'])) 		{ $formErrors[] = "please fill all the fields";}

			if(!empty($formErrors)){
				foreach($formErrors as $err){
					echo '<div class="text-center"  style="z-index:3; position: absolute; top: 75%; left: 50%;"><div class="alert alert-danger" >'. $err .'</div></div>';
				}
			} else{

				$tableName = "sections";
				try {
					require_once "models/Awebarts.php";
					include "models/update.php";
					$tableName = "sections";
					$id = $_GET['id'];
					$sectionEdit = new Update($EditSection, $tableName);
					$sectionEdit->editData('section_id', $id);
					if($sectionEdit == true){
						echo '<div class="container text-center" style="margin-top: 50px;"><div class="alert alert-success" >the data successfully updated</div></div>';
						header("refresh: 3;url=". $_SERVER["HTTP_REFERER"]);
					}

				} catch (Exception $e) {
					echo $e->getMessage();
				}
			}

		}else{

			if(isset($_GET['action']) && $_GET['action'] == 'edit'){

				include "models/Awebarts.php";
				include "models/display.php";
				$tableName = "sections";
				$id = $_GET['id'];
				$display = new Display($tableName);
				$editRows = $display->getEditById('section_id', $id);

				include "views/editSection.php";


			}
			// end edit controller
		}
	} else {

		try {
			include "models/Awebarts.php";
			include "models/display.php";
			$tableName = "sections";
			$display = new Display($tableName);
			$rows = $display->getData('section_id', 10, 'fetchAll');

		} catch (Exception $e) {
			echo $e->getMessage();
		}

		include "views/sectionDisplay.php";
	}

?>
