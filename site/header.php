<?php
	require_once '../includes/function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<meta name="description" content="<?php echo $siteInfo['site_desc'];?>">
	<meta name="keywords" content="<?php echo $siteInfo['site_tags'];?>">
	<title><?php echo $siteInfo['site_name'];?></title>

	<link href="style/reset-min.css" rel="stylesheet" type="text/css">
	<link href="style/fonts-min.css" rel="stylesheet" type="text/css">
	<link href="style/style.css.css" rel="stylesheet" type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'>

	<!-- Use jQuery for best compatibility with other CSS3 enabled browsers -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js" type="text/javascript" charset="utf-8"></script>

	<script src="js/flux.js" type="text/javascript" charset="utf-8"></script>

	<script type="text/javascript" charset="utf-8">
		$(function(){
			if(!flux.browser.supportsTransitions)
				alert("Flux Slider requires a browser that supports CSS3 transitions");

			window.f = new flux.slider('#slider', {
				pagination: false,
				controls: false,
				transitions: ['explode', 'tiles3d', 'bars3d', 'cube', 'turn'],
				autoplay: true
			});

			$('.transitions').click(function(event){
				event.preventDefault();
				window.f.next($(event.target).data('transition'), $(event.target).data('params'));
			});
		});
	</script>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo"><img height="129" src="images/logo.png.png" width=
			"297"></div>
			<div id="menu">
				<ul>
					<li><a href="<?php echo SITE;?>">home page</a></li>
					<li><a href="">our sevices</a></li>
					<li><a href="">portfolio</a></li>
					<li><a href="">contact us</a></li>
				</ul>
				<h1>call us:+01124928786</h1>
				<div id="slinks">
					<h1>follow us:</h1>
					<a href="<?php echo $siteInfo['yt'];?>">
						<img height="32" src="images/yt.png.png" width="39">
					</a>
					<a href="<?php echo $siteInfo['fb'];?>">
						<img height="32" src="images/fb.png.png" width="32">
					</a>
					<a href="<?php echo $siteInfo['tw'];?>">
						<img height="31" src="images/tw.png.png" width="31">
					</a>
					<a href="<?php echo $siteInfo['rss'];?>">
						<img height="35" src="images/sb.png.png" width="35">
					</a>
				</div>
			</div>
		</div>
