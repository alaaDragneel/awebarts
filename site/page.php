<?php

	// header file
	require_once "header.php";
	// contents start
	echo '<div id="contents">';
	//sidebar.php
	require_once "sidebar.php";
	// conts starts
	echo '<div id="conts">';

	echo '<div id="page">';

	// start display the project by id
	/*
	** id = $_GET['id'];
	**
	**
	*/
	$tableName = "pages";
	$idPage = $_GET['id'];
	$displayPageById = new Display($tableName);
	$pageDisplaybyId = $displayPageById->getEditById('page_id', $idPage);
?>
	<div class="pagesView">
		<h1><?php echo $pageDisplaybyId['page_name']; ?></h1>
		<div class="imgPage">
			<img src="<?php echo UPLOADS.$pageDisplaybyId['page_image']; ?>" alt="" />
		</div>
		<p><?php echo $pageDisplaybyId['page_content'];?></p>
	</div>
<?php

	// end display the project by id

	echo '</div>';
	//end conts
	echo '</div>';
	// contents end
	echo '</div>';
	//footer.php
	require_once "footer.php";

?>
