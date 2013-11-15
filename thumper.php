<?php
/*
Template Name: Thumper
*/
?>
<?php get_header(); ?>
<div class="thumper">
	<h1><a href="https://github.com/Robdel12/Thumper">Thumper</a></h1>
	<div class="grid one-third topthird">
		<h2>LESS</h2>
		<p><a href="http://lesscss.org/">Less</a> is a CSS Pre-processer that allows you to use things like mixins, variables, functions &amp; variables, and many more things. I chose LESS for Thumper because... <a href="#less">[Read more]</a></p>
	</div><!-- End One thrid -->
	<div class="grid one-third topthird">
		<h2>Light</h2>
		<p>Thumper is super light. This is because Thumper is built to be text only. I've never needed images, sprites, pre-made headers, or anything of the likes. Thumper is meant for custom sites and lightness is the key... <a href="#light">[Read More]</a></p>
	</div><!-- End One thrid -->
	<div class="grid one-third topthird last">
		<h2>Infinite</h2>
		<p>Thumper isn't based on sixths, eighths, tenths, or twelfths. It's (technically) infinite... <a href="#infinite">[Read More]</a></p>
	</div><!-- End One thrid -->
	<div class="clear"></div>
	<h3 id="less">Built with <strike >love</strike> LESS</h3>
	<p><a href="http://lesscss.org/">Less</a> is a CSS Pre-processer that allows you to use things like mixins, variables, functions &amp; variables, and many more things. I chose LESS for Thumper because I prefer the syntax of it over SCSS. They're both strikingly similar, but LESS is just easier to work with on non-rails projects than SCSS is and I prefer the syntax of LESS.</p>
	<p>If you've never had any experience with LESS, then head on over to <a href="http://lesscss.org">lesscss.org</a> and check it out. It's really easy to get started on any website or project. I promise you after building one project in LESS you'll never go back. Plus, it's kind of required to use this awesome framework. ;)</p>
	<p><strong>SCSS in the future?</strong></p>
	<p>If Thumper becomes popular enough, or someone requests (nicely, of course!) I'll convert Thumper over to SCSS. If you feel like SCSS needs to happen now, <a href="http://twitter.com/robdel12">@reply me on Twitter and let me know!</a></p>
	<h3 id="light">Lighter than anything else</h3>
	<p>Thumper is super light. It's actually lighter than anything I've ever used before. This is because Thumper is built to be text only. I've never  needed images, sprites, pre-made headers, or anything of the likes. Not even built in jQuery or any JavaScript. Thumper is meant for custom sites and lightness is the selling point.</p>
	<p>Thumper is so light because it's pretty much a CSS/LESS framework. It makes things super fast to get up and running and you'll love the simplicity of it.</p>
	<p>Don't take simplicity as a negative. If you're a control freak, like I am, you will have complete control of your code and will understand everything thats being used. Unlike other frameworks you might have some weird JS toying with your layout. (I've had that happen once, It wasn't easy to debug!)</p> 
	<h3 id="infinite">Infinite</h3>
	<p>Thumper isn't based on sixths, eighths, tenths, or twelfths. It's (technically) infinite. I say technically because once you get past one-twentieth the gutter (space separating the divs) becomes bigger than the content area.</p>
	<p><strong>Spacer divs</strong></p>
	<p>Thumper has this really cool thing I built into it. It allows you to create spacer divs in your grid. For example if you have a layout that requires two rows of three one-thirds and one row of one one-third and the last one needs to be centered you could just type: "< div class= "grid one-third space" >< / div>" and it'll fill a fourth of the page with empty "padding" area.</p>
	<div class="grid one-third space"></div>
		<div class="grid one-third" style="text-align: center;"><p>Div Centered by spacer divs</p></div>
	<div class="grid one-third last space"></div>
	<div class="clear"></div>
	<p>Check out the example above with your web inspector. It's pretty neat and handy!</p>
</div><!-- End Thumper -->
<?php get_footer(); ?>