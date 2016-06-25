<?php
require_once("../../../../inc/config.php");
require_once(ROOT_PATH . "inc/header.php");
//*********
//Adjust these as needed
//*********
$post_title = "TITLE";
$post_date = "DATE"; //date in plain English
$linkpost_url = "URL";
//**********
//Below are variables you do not need to touch
//**********
$pub_date = date("d F Y", strtotime($post_date));
$sort_date = strtotime($post_date);
?>

<div class="post">
	<div class="linkposthead"> <!-- POST HEADER -->
		<h1><a href="<?php echo $linkpost_url ?>" target="_blank" class="linkposttitle"><?php echo $post_title ?></a></h1>
		<p><?php echo $pub_date; ?></p> <!-- POST DATE-->
	</div>
	<div class="postcontent">
		<!-- Post content here -->

		<!--
			<blockquote>
				BLOCK QUOTE CONTENT
				<a href="#" class="blockquote_link" target="_blank">Source</a>
			</blockqoute>
		-->
	</div>
</div>
