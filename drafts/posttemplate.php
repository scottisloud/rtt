<?php
require_once("../../../../inc/config.php");
require_once(ROOT_PATH . "inc/header.php");
//*********
//Adjust these as needed
//*********
$post_title = "TITLE";
$post_date = "DATE"; //date in plain English

//**********
//Below are variables you do not need to touch
//**********
$pub_date = date("d F Y", strtotime($post_date));
$sort_date = strtotime($post_date);
?>

<!--POST BEGINS-->

<div class="post">
	<div class="posthead"> <!-- POST HEADER -->
		<h1><?php echo $post_title; ?></h1>
		<p><?php echo $pub_date; ?></p> <!-- POST DATE-->
	</div>
	<div class="postcontent">
		<!-- Post content here -->
		<p>This is some content</p>
		<!--
			<blockquote>
				BLOCK QUOTE CONTENT
				<a href="#" class="blockquote_link" target="_blank">Source</a>
			</blockquote>
		-->
	</div>
</div>
<?php
if (include_once(ROOT_PATH . "inc/footer.php") == TRUE) {
    continue;
} else {
		include_once(ROOT_PATH . "inc/footer.php");
}
?>
