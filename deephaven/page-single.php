<?php
/*
Template name: Single
*/
get_header();
?>
<main id="main" class="site-main" role="main">
	<section class="page-header">
		<div id="banner" class="ux_banner " role="banner">
			<div class="inner inner-wrap animated flipInX start-anim" data-animate="flipInX">
	          <h1 class="entry-title"><?php the_title(); ?></h1>
	         </div> 
		</div>
		<div class="page-single-header-bottom"></div>	

		<?php if( has_excerpt() ) the_excerpt();?>
	</section> 

	<section class="page-single" id="content" role="main">
		<div class="page-single-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
	</section>
</main>
 
<?php get_footer(); ?> 