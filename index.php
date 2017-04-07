<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>grid</title>
	<link type="text/css" href="/media/css/style.css" rel="stylesheet">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- bxSlider Javascript file -->
	<script src="lib/jquery.bxslider.min.js"></script>
	<!-- bxSlider CSS file -->
	<link href="lib/jquery.bxslider.css" rel="stylesheet"/>
</head>
<body>
<?php include "classes/database.class.php";
$DB = new Database();
$DB->connect();

$sql = "SELECT ID FROM `wp_posts` LIMIT 0, 100";

$DB->sql( $sql );

$dv_varD = $DB->getResult();


?>
<div class="main-wrapper" id="main-page-wrapper">
	<div class="site-content-container">
		<div class="row grid-system">
			<div class="inner-box menu">
				<ul class="menu-wrapper">
					<li class="menu-item active">first -item</li>
					<li class="menu-item">first -item</li>
					<li class="menu-item">first -item</li>
					<li class="menu-item">first -item</li>
				</ul>
			</div>
		</div>
		<div class="row grid-system">
			<div class="inner-box grid-system column-6 "></div>
			<div class="inner-box grid-system column-6"></div>
		</div>
		<div class="row grid-system">
			<div class="inner-box grid-system slider">

				<ul class="bxslider">
					<li><img src="image/pr1.jpg"/></li>
					<li><img src="image/pr2.jpg"/></li>
					<li><img src="image/pr3.jpg"/></li>
				</ul>

			</div>
		</div>
		<div class="row grid-system">
			<div class="inner-box grid-system video">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
		<div class="row grid-system">
			<div class="inner-box grid-system column-4 x-social-info"></div>
			<div class="inner-box grid-system column-8"></div>
		</div>
			<div class="row grid-system">
			<div class="inner-box grid-system column-4-2">
				<div class="time-news"></div>
				<div class="hot-news"></div>
				<div class="form"></div>
			</div>
			<div class=" inner-box grid-system column-8-2"></div>
		</div>
	</div>
</div>
</body>
<footer>
	<script type="text/javascript">
		$('.bxslider').bxSlider({
			auto: true,
			autoControls: true
		});
	</script>
</footer>
</html>
