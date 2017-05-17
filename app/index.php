<?php
	session_start();
	if(!isset($_SESSION['userName'])){
		header("Location: controllers/loginController.php");
		die();
	}
	// include the init file
	require_once '../includes/init.php';
	include "include/header.php";
?>

		<div class="container">
			<header>
				<img class="pull-left" src="resources/images/logo.png.png" alt="logo" />
				<h2 class="pull-right">Welcom <?php echo $_SESSION['userName'] . " <a href='controllers/logout.php'>logOut</a>"; ?></h2>
			</header>
			<div class="clearfix"></div>
			<div id="contents">
				<aside>
					<nav>
						<a class="btn-danger <?php if(@!$_GET['page'] == 'mainSettings')
												{echo 'active';}else{echo'';}?>" href="index.php" >Home Page</a>
						<a class="btn-danger <?php if(@$_GET['page'] == 'mainSettings')
												{echo 'active';}else{echo'';}?>" href="?page=mainSettings" >Main Settings</a>
						<a class="btn-danger <?php if(@$_GET['page'] == 'sections')
												{echo 'active';}else{echo'';}?>" href="?page=sections" >Sections</a>
						<a class="btn-danger <?php if(@$_GET['page'] == 'Pages')
												{echo 'active';}else{echo'';}?>" href="?page=Pages" >Pages</a>
						<a class="btn-danger <?php if(@$_GET['page'] == 'comments')
												{echo 'active';}else{echo'';}?>" href="?page=comments" >Comments</a>
						<a class="btn-danger <?php if(@$_GET['page'] == 'Library')
												{echo 'active';}else{echo'';}?>" href="?page=Library" >Library</a>
						<a class="btn-danger <?php if(@$_GET['Banners'] == 'Banners')
												{echo 'active';}else{echo'';}?>" href="?page=Banners" >Banners</a>
					</nav>
				</aside>
				<section id="page">
					<?php
						if(@$_GET['page']){
							$url = "controllers/" . $_GET['page'] . ".php";
							if(is_file($url)){
								include $url;
							} else{
								echo "<div class='alert alert-warning text-center'>
								The Requested File Is Not Found</div>";
							}
						} else{
							include "./main.php";
						}
					?>
				</section>
			</div>
			<div class="clearfix"></div>
<?php include "include/footer.php"; ?>
