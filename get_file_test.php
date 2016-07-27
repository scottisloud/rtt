<?php
$pageTitle = "Recall These Thoughts";
include("inc/header.php");
 ?>
<div class="blog">
<?php
$post = file_get_contents("posts/2015/09/18/Sep 18 2015.php");
echo $post;
?>

</div>
<?php include('inc/footer.php'); ?>
