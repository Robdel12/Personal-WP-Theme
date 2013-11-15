<!DOCTYPE html> 
<html>
<head>
	<title><?php wp_title(); ?></title>
	<!-- CSS -->
	<link  href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,300,700' rel='stylesheet' type='text/css'>	
	<!-- Meta -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<meta property="og:title" content="Robert DeLuca Front End Developer" />
	<meta property="og:site_name" content="Robert DeLuca" />
	<meta property="og:description" content="Robert DeLuca is a Front End Web Development Genius. He has been working with websites since he was in diapers and can turn out one mean responsive site! Robert is the creator of the responsive grid Thumper." />
	<meta name="generator" content="wordpress <?php bloginfo('version'); ?>" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="<?php bloginfo('stylesheet_directory'); ?>/js/scripts.js"></script>
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
	  ga('create', 'UA-40802317-1', 'robert-deluca.com');
	  ga('send', 'pageview');
	</script>
</head>
<body>
	<nav class="main-navigation">
		<ul>
			<?php wp_nav_menu(array('theme_location' => 'primaryNav')); ?>
		</ul>
	</nav>
	<section class="hero">
		<header>
			<h1>Hi, I'm Robert.</h1>
			<p>And I create online awesome</p>
		</header>
	</section>
	<section class="container">