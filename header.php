<?php
require_once("config.php"); ?>
<html>
	<head>
	<title><?php echo $pageTitle; ?></title>
	<link rel="stylesheet" href="<?php echo BASE_URL . "css/normalize.css";?>" type="text/css">
	<link rel="stylesheet" href="<?php echo BASE_URL . "css/style.css";?>" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Hind:400,300|Raleway:400,500,700' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="favicon.ico">
	<script async src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
	<?php echo "base url = " . BASE_URL; ?><br />
	<?php echo "root path = " . ROOT_PATH; ?>
		<div class="site">
			<div class="header">
				<a href="<?php echo BASE_URL; ?>"><img class="logo" src="<?php echo BASE_URL . "img/logo.png"; ?>" alt="Recall These Thoughts"></a>
				<p class="site_title">Recall These Thoughts</p>
				<p class="site_subtitle">Food, Food Safety, and other nonsense</p>
				<div class="menu"> <!--Menu for desktop -->
					<ul>
						<a href="<?php echo BASE_URL?>"><li>Blog</li></a>
						<a href="<?php echo BASE_URL . "cv.php"; ?>"><li>Curriculum Vitae</li></a>
						<a href="<?php echo BASE_URL . "publications.php"; ?>"><li>Publications</li></a>
						<a href="<?php echo BASE_URL . "links.php"?>; "><li>Links</li></a>
						<a href="<?php echo BASE_URL . "about.php"?>; "><li>About</li></a>
					</ul>
				</div>
				<div class="dropdown"> <!--Menu for mobile/small displays-->
					<div class="dropbutton"><a href="javascript:window.location.reload(true)"> <!--php script to display page title unless page title is "Recall These Thoughts"–then display "blog"-->
						<?php
					  	if ($pageTitle !== "Recall These Thoughts") {
						echo $pageTitle;}
					  	else {
						echo "Blog";}
						?><span class="menu_arrow">  &#9660;</span></a>
					</div>
					<div class="dropdown-content" data-role="collapsible">
						<a href="<?php echo BASE_URL; ?>">Blog</a>
						<a target="_blank" href="<?php echo BASE_URL . "img/cv-04-16.pdf"; ?>">Curriculum Vitae</a>
						<a href="<?php echo BASE_URL . "publications.php"; ?>">Publications</a>
						<a href="<?php echo BASE_URL . "links.php"; ?>">Links</a>
						<a href="<?php echo BASE_URL . "about.php"; ?>">About</a>
					</div>
				</div>
			</div>
