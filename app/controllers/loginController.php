<?php
/*
** awebarts::loginController
*/
	if($_POST) {
		// login
		if(isset($_POST['submit']) AND $_POST['submit'] == 'login'){
			// get post value
			$userName = $_POST['userName'];
			$password = $_POST['password'];

			try {
				include "../models/Awebarts.php";
				include '../models/LogIn.php';
				$login = new login($userName, $password);

				if($login == true){
					session_start();
					$_SESSION['userName'] = $userName;
					header("Location:../index.php");
				}

			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}

		// reigeter
		if(isset($_POST['submit']) AND $_POST['submit'] == 'Register'){
			// get post value
			$data['name'] = trim( strip_tags( $_POST['name']));
			$data['userName'] = trim( strip_tags( $_POST['userName']));
			$data['password'] = trim( strip_tags( $_POST['password']));
			$data['email'] = trim( strip_tags( $_POST['email']));

			try {
				include "../models/Awebarts.php";
				include '../models/register.php';
				$register = new Register($data);

			} catch (Exception $e) {
				echo $e->getMessage();
			}
		}
	} else {
		header("Location: ../views/login.php");
		die();
	}






?>
