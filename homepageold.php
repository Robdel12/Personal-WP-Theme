<?php
/*
Template Name: Homepage OLD
*/
?>
<?php get_header(); ?>
<div class="homepage">
	<div class="homeblog">
		<?php include('blogloop.php'); ?>		
	</div><!-- End Blog -->
	<div class="grid one-third">
		<h2><a href="/about">About</a></h2>
		<p>Since his first contact with computers, Robert has been a genius. For the past several years he has been building websites for both fun and profit that take the latest front end technologies to their limits... <a href="/about">[Read more]</a></p>
	</div><!-- End One Third -->
	<div class="grid one-third">
		<h2><a href="/portfolio">Portfolio</a></h2>
		<p>Check out some of the awesome responsive web work I have been putting out! <a href="/portfolio">[Check it out!]</a></p>
	</div><!-- End one-third -->
	<div class="grid one-third last">
		<h2><a href="/thumper">Thumper</a></h2>
		<p>Thumper is a responsive framework I built using LESS. <a href="/thumper">Click here to find out why you should be using it!</a></p>
	</div><!-- End One Third -->
</div><!-- End Homepage -->
<div class="clear"></div>
<?php get_footer(); ?>