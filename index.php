<?php get_header(); ?>

<!-- Start the Loop. -->
<div class="blog-roll">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post">
      <div class="blog-left">
        <span class="date">
          <?php the_time('M. j'); ?>
        </span>
      </div>
      <div class="blog-right">
        <div class="titleheader">
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        </div><!-- End Title Entry -->
        <div class="entry">
          <?php the_excerpt('new_excerpt_more'); ?>
        </div><!-- End Entry -->
      </div>
    </div> <!-- End Post -->
  <?php endwhile ?> 
</div>
<div class="loaded-in-posts">
  <!-- Loaded in shiz -->    
</div>
<div class="loading-div" style="display: none;">
  <!-- Need something here -->
</div>
<div class="error-div" style="display: none;">
  <h3>ERRORRR! Something went wrong loading more posts.</h3>
</div>
<!-- Add the pagination functions here. -->
<!-- <div class="nav-previous alignleft"><a href="#" id="prev_page">Older posts</a></div> -->

<?php endif; ?>
<?php get_footer(); ?>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/page_loader.js"></script>