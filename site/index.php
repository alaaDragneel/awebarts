<?php

	if(@$_GET['page']){
		$url = $_GET['page'] . ".php";
		if(is_file($url)){
			include $url;
		} else{
			echo "<div class='alert alert-warning text-center'>
			The Requested File Is Not Found</div>";
		}
	} else{

		// header file
		require_once "header.php";
		// contents start
		echo '<div id="contents">';
		//sidebar.php
		require_once "sidebar.php";
		// conts starts
		echo '<div id="conts">';
		// slider.php
		require_once 'slider.php';
		//body.php
		require_once "body.php";
		//end conts
		echo '</div>';
		// contents end
		echo '</div>';
		//footer.php
		require_once "footer.php";
	}
?>
