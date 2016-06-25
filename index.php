<?php
$pageTitle = "Recall These Thoughts";
require_once("config.php");
include("header.php");
 ?>
<div class="blog">

	<div class="post">
		<div class="posthead"> <!-- POST HEADER -->
			<h1>May: Official Listeria Monocytogenes Month!</h1>
			<p><?php echo date ("d F Y", filemtime("/")); ?></p> <!-- POST DATE-->
		</div>
		<div class="postcontent">
			Okay, so perhaps not precisely the month of May, but starting in late April there's been a spat of recalls attributable to Listeria in Canada and the United States. Looking at the CFIA recall listings for the first 10 days of May:</p>
			<ul>
				<li>
					<a href="http://www.inspection.gc.ca/about-the-cfia/newsroom/food-recall-warnings/complete-listing/2016-05-09b/eng/1462850202306/1462850205064">Food Recall Warning - Ajinomoto brand Yakitori Chicken with Japanese-Style Fried Rice recalled due to Listeria monocytogenes</a>
				</li>
				<li>
					<a href="http://www.inspection.gc.ca/about-the-cfia/newsroom/food-recall-warnings/complete-listing/2016-05-07/eng/1462667105675/1462667109404">Food Recall Warning - Harmonie brand, IGA brand, Co-op brand, Western Family brand and unbranded frozen vegetable products recalled due to Listeria monocytogenes</a>
				</li>
				<li>
					<a href="http://www.inspection.gc.ca/about-the-cfia/newsroom/food-recall-warnings/complete-listing/2016-05-06/eng/1462587217154/1462587221070">Food Recall Warning - Cookin' Greens Organic brand A Blend of Kale, Sweet Corn &amp; Peas recalled due to Listeria monocytogenes</a>
				</li>
				<li>
					<a href="http://www.inspection.gc.ca/about-the-cfia/newsroom/food-recall-warnings/complete-listing/2016-05-06/eng/1462593110816/1462593113719">Food Recall Warning - Stahlbush Island Farms brand Cut Green Beans recalled due to Listeria monocytogenes</a>
				</li>
			</ul>
				<p>And if we look into the last week of April we also get:</p>
				<ul>
				<li><a href="http://www.inspection.gc.ca/about-the-cfia/newsroom/food-recall-warnings/complete-listing/2016-04-23e/eng/1461458494788/1461458498163">Food Recall Warning - Organic by Nature brand frozen Organic Sweet Peas recalled due to Listeria monocytogenes</a></li>
			</ul>
			<p>Needless to say, for the last two weeks Listeria has had a field day in Canada. The United States is not exempt! In what <a href="http://link.springer.com/article/10.1023%2FA%3A1022416727626">Juska et al (2003)</a> refer to as the &quot;amplification&quot; of food safety threats, or what Stericycle call the <a href="http://www.stericycleexpertsolutions.com/multiplier-effect-strikes/">&quot;multiplier effect&quot;</a>, listeria contamination from SunOpta Inc., a sunflower seed supplier has <a href="http://www.foodsafetynews.com/2016/05/sunflower-seed-listeria-threat-causes-recalls-of-salad-trail-mix/">resulted in a massive cascade of recalls across the United States</a>.<br>
			This series of recalls includes Sunflower Seed Snacks, trail mix, protein bars, Brown and Haley Chocolate snacks, and perhaps most stunningly 17 tons of Trader Joe's salad.</p>
			<p>Similarly, frozen vegetables from CRF Foods in Pasco Washington were recalled on <a href="http://www.fda.gov/Safety/Recalls/ucm497297.htm">April 23rd</a> and subsequently expanded on <a href="http://www.fda.gov/Safety/Recalls/ucm498841.htm">May 2</a> to include over 42 brands and 358 products (notably, just in time for Listeria Month!)</p>
			<p>It is rather stunning how far an error at a single supplier can reach in the contemporary food system. It almost seems as if we are reaching a level of consolidation and concentration in which the industry is too big to fail. The last two weeks has seen <em>tens of tons</em> of food pulled from the market and destroyed as a result of mistakes made by only a few companies... and this is only the beginning of Listeria Month!</p>
		</div>
	</div>

<?php
// First define a comparison function to be used as a callback
// $posts = file_get_contents("posts/2016/03/25/stop-embarrassing-yourself-presentations.php");
// echo $posts;
//
//
// 	function post_sort($a, $b){
// 		if (filemtime($a) === filemtime($b)) return 0;
// 		return filemtime($a) > filemtime($b) ? -1 : 1;
// 	}
//
// 	$pub_posts = glob("posts/*.php");
// 	usort($pub_posts, "post_sort");
//
// 	foreach ($pub_posts as $pub_posts){
// 		include $pub_posts;
// 	}
// 	?>

</div>
<?php include('inc/footer.php'); ?>
