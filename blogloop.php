<?php global $more;  
$more = 0; ?>  
<?php  
/* ID of your 'Breaking News' Category */  
$breaking_cat = "3";  
/* How many posts from above category to display? Default = 3 */  
$breaking_num = "1";  
/* Number of recent posts to display under the Breaking News */  
$latest_num = "0";  
/* IDs of any cats you dont want to include in Recent posts. 
Start each ID with a 'minus' symbol Seperate by a comma. 
EG: $latest_ignore = "7,-6,-8,-1"; 
Posts from the 'Breaking' category are automatically excluded. */  
$latest_ignore = "-1";  
?>  
<!-- Show x Posts from Breaking News -->  
<?php query_posts('showposts='.$breaking_num.'&cat='.$breaking_cat.'');
while (have_posts()) : the_post();  
?>  
<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><img src="<?php echo get_post_meta($post->ID, 'thumbnail',true) ?>" alt="<?php the_title(); ?>" /></a>
<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
<p><?php echo excerpt(25); ?> <a href="<?php the_permalink() ?>">[Read More]</a></p>
<?php endwhile; ?>