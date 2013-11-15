<?php get_header(); ?>
<!-- Start the Loop. -->
<div class="single-post">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="post">
		<div class="post-header">
			<header class="titleheader">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
			</header><!-- End Title Entry -->
			<div class="meta">
				<span class="date"><?php the_time('M. j'); ?></span>
			</div>
		</div>
		<div class="entry">
			<?php the_content(); ?>
		</div><!-- End Entry -->
		<div class="comment-wrap">
			<?php comments_template(); ?>
		</div><!-- End COmment Wrap -->
	</div> <!-- End Post -->
	<?php endwhile; endif; ?>
</div>
<?php get_footer(); ?>