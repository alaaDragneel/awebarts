<?php
	// include the init file
	require_once 'init.php';
	// display the main site information
	try {
		// display the main setting
		include MODELS."Awebarts.php";
		include MODELS."display.php";
		$display = new Display('main_settings');
		$siteInfo = $display->getData('id', 1,'fetch');
		// end display the main settings

		// start display the sections
		$tableName = "sections";
		$displaySide = new Display($tableName);
		$sideDisplay = $displaySide->getData('section_id', 10, 'fetchAll');
		// end display the sections

		// start display the latest projects pages
		$tableName = "pages";
		$displayPage = new Display($tableName);
		$pageDisplay = $displayPage->getEditById('section_id', 12, 'fetchAll', 'ORDER BY page_id DESC LIMIT 10');
		// end diaplay the latest projects pages

		// start display the project by id this function founs and used in page.php
		/*$tableName = "pages";
		$displayPageById = new Display($tableName);
		$pageDisplaybyId = $displayPageById->getEditById('page_id', $idPage);*/
		// end display the project by id

		// start display banners type slider
		$tblName =  'banners';
		$displayBanner = new Display($tblName);
		$bannerDisplay = $displayBanner->getAllByStatus('slider');
		//end display banners type slider

	} catch (Exception $e) {
		echo $e->getMessage();
	}
