<?php 

function register_my_menus() {
  register_nav_menus(
    array( 'primaryNav' => __( 'Primary Nav' ))
  );
}
add_action( 'init', 'register_my_menus' );

 if ( function_exists ('register_sidebar')) { 
	register_sidebar ('blog'); 
    register_sidebar ('custom'); 
} 
// Puts link in excerpts more tag
function new_excerpt_more($more) {
       global $post;
	return ' <a class="moretag" href="'. get_permalink($post->ID) . '">[Read More]</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

function excerpt($limit) {
      $excerpt = explode(' ', get_the_excerpt(), $limit);
      if (count($excerpt)>=$limit) {
        array_pop($excerpt);
        $excerpt = implode(" ",$excerpt).'...';
      } else {
        $excerpt = implode(" ",$excerpt);
      } 
      $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
      return $excerpt;
    }

    function content($limit) {
      $content = explode(' ', get_the_content(), $limit);
      if (count($content)>=$limit) {
        array_pop($content);
        $content = implode(" ",$content).'...';
      } else {
        $content = implode(" ",$content);
      } 
      $content = preg_replace('/\[.+\]/','', $content);
      $content = apply_filters('the_content', $content); 
      $content = str_replace(']]>', ']]&gt;', $content);
      return $content;
    }
?>
