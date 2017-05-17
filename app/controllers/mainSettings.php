<?php
     
 	if(isset($_POST['submit']) && $_POST['submit'] == 'update') {
		// get the value posts
		//`site_name`, `site_url`, `site_desc`, `site_email`, `site_tags`, `home_panel`, `fb`, `tw`, `yt`, `rss`
		$mainSettings['site_name'] 	= trim( strip_tags( $_POST['site_name']));
		$mainSettings['site_url'] 	= trim( strip_tags( $_POST['site_url']));
		$mainSettings['site_desc']	= trim( strip_tags( $_POST['site_desc']));
		$mainSettings['site_email'] 	= trim( strip_tags( $_POST['site_email']));
		$mainSettings['site_tags'] 	= trim( strip_tags( $_POST['site_tags']));
		$mainSettings['home_panel'] 	= trim( strip_tags( $_POST['home_panel']));
		$mainSettings['fb'] 		= trim( strip_tags( $_POST['fb']));
		$mainSettings['tw'] 		= trim( strip_tags( $_POST['tw']));
		$mainSettings['yt'] 		= trim( strip_tags( $_POST['yt']));
		$mainSettings['rss'] 		= trim( strip_tags( $_POST['rss']));
		$mainSettings['userName'] 	= trim( strip_tags( $_POST['userName']));

		try {
			include "models/Awebarts.php";
			include "models/add.php";
			$addSettings = new Add($mainSettings, 'main_settings');
			if($addSettings == true){
				echo '<div class="container text-center" style="margin-top: 50px;"><div class="alert alert-success" >the data successfully inserted</div></div>';
			}
		} catch (Exception $e) {
			echo $e->getMessage();
		}


	}else{
		try {
			include "models/Awebarts.php";
			include "models/display.php";
			$display = new Display('main_settings');
			$rows = $display->getData('id', 1,'fetch');

		} catch (Exception $e) {
			echo $e->getMessage();
		}

		include 'views/mainSettingsView.php';
	}
