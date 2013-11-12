<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orange County Register</title>

  <link href="styles.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,500,600,700,900' rel='stylesheet' type='text/css'>

  <script src="http://code.jquery.com/jquery.js"></script>

</head>
<body>
<div id="page-wrapper">
	
	<?php include 'includes/header.php' ?>

	<div id="dont-miss-bar">
		<ul>
			<li class="label"><a href="#">Orange Buzz:</a></li>
			<li><a href="#">Should pit bulls be sterilized?</a></li>
			<li><a href="#">BlizzCon back in Anaheim</a></li>
			<li><a href="#">Best of Orange County</a></li>
			<li><a href="#">Veterans Day in O.C.</a></li>
			<li class="weather"><a href="#">68&deg;</a></li>
		</ul>
	</div>

	<div id="content-wrapper">
		<div id="left-column">
			<div class="box">
				<div id="lead-rail">
					<div class="headline-wrapper">
						<h2><a href="story.php">Student scores among lowest in the nation</a></h2>
						<p class="posted">Posted 3 minutes ago</p>
						<p class="tease">The tease for this story right here. The tease for this story right here. The tease for this story. The tease for this lead story.</p>
					</div>
					<div class="headline-wrapper">
						<h3><a href="story.php">UCLA: Alford's past paints blurry portrait</a></h3>
						<p class="posted">Posted 32 minutes ago</p>
					</div>
					<div class="headline-wrapper">
						<h3><a href="story.php">Still warm, but cooler weather is coming</a></h3>
						<p class="posted">Posted 50 minutes ago</p>
					</div>
					<div class="headline-wrapper">
						<h3><a href="story.php">'Vaping' industry faces cloud of uncertainty</a></h3>
						<p class="posted">Posted at 11:15 a.m.</p>
					</div>
				</div>
				<div id="lead-story">
					<a href="story.php">
						<img src="lead.png" />
						<h1>Officials hit the breaks on I-405 toll vote</h1>
					</a>
					<p class="posted">Posted at 9:30 a.m.</p>
					<p class="tease">The tease for this story right here. The tease for this story right here. The tease for this story. The tease for this lead story. The tease for this story. The tease for this lead story.</p>
				</div>
			</div>
		</div>
		<div id="right-column">
			<div class="box">
				<div class="ad-title">Advertisement</div>
				<img src="ad01.png" />
			</div>
			<!-- MOST POPULAR -->
			<div class="box">
				<ol class="most-popular">
					<div class="box-title"><h6>Most popular</h6></div>
					<li class="homepage">
						<a href="story.php" class="lead">
							<h3>Clippers rally to down the Rockets in Houston</h3>
						</a>
					</li>
					<li class="homepage">
						<a href="story.php">
							<h3>Authorities identify motorcyclist killed on Ortega Highway</h3>
						</a>
					</li>
					<li class="homepage">
						<a href="story.php">
							<h3>Report: O.C. home prices up 21.5% over last year</h3>
						</a>
					</li>
					<li class="homepage">
						<a href="story.php">
							<h3>Johnson: Did she mention that she loves to talk?</h3>
						</a>
					</li>
					<li class="homepage">
						<a href="story.php">
							<h3>USC routs Cal, keeps winning in November</h3>
						</a>
					</li>
				</ol>
			</div><!-- end most popular -->
		</div>
	</div><!-- end #content-wrapper -->
</div><!-- end #page-wrapper -->


<!-- STICKY NAV BAR -->
<script>
    $(document).ready(function() {
        var $window = $(window),
            $nav = $('#nav'),
            $navAnchor = $('#nav-anchor'),
            $mainContent = $('#content-wrapper'),
            $subnav = $('#dont-miss-bar'),
            $subnavAnchor = $('#subnav-anchor');

        // Run this on scroll events
        $window.scroll(function() {
            var window_top = $window.scrollTop();
            var nav_top = $navAnchor.offset().top;
            var subnav_top = $subnavAnchor.offset().top;
            if (window_top > nav_top) {
                // Make the div sticky.
                $nav.addClass('stick-top');
                $navAnchor.height($nav.height());
            }
            else {
                $nav.removeClass('stick-top');
                $navAnchor.height(0);
            }
            if (nav_bottom >= subnav_top) {
            	// Make the div sticky.
            	$subnav.addClass('stick');
            	$subnavAnchor.height($subnav.height());
            }
            else {
            	$subnav.removeClass('stick');
            	$subnavAnchor.height(0);
            }
        });
    });
  </script><!-- sticky nav bar -->

</body>
</html>
