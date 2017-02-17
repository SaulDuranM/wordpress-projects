<?php
get_header();
?>
<div class="page-header">
	<div id="banner" class="ux_banner " role="banner">
		
		<div class="inner inner-wrap animated flipInX start-anim" data-animate="flipInX">
          <h1 class="entry-title"><?php the_title(); ?></h1>
         </div> 

	</div>	

	<?php if( has_excerpt() ) the_excerpt();?>
</div> 
<div class="content-page" id="content" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile; // end of the loop. ?>
			
</div>
 
<?php get_footer(); ?> 