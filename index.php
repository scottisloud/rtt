<?php
$pageTitle = "Recall These Thoughts";
require_once('inc/header.php'); ?>
<div class="blog">
<?php
// First define a comparison function to be used as a callback
$posts = file_get_contents("posts/2016/03/25/stop-embarrassing-yourself-presentations.php");
echo $posts;


	function post_sort($a, $b){
		if (filemtime($a) === filemtime($b)) return 0;
		return filemtime($a) > filemtime($b) ? -1 : 1;
	}

	$pub_posts = glob("posts/*.php");
	usort($pub_posts, "post_sort");

	foreach ($pub_posts as $pub_posts){
		include $pub_posts;
	}
	?>

</div>
<?php include('inc/footer.php'); ?>
