<?php //get_template_part('templates/page', 'header'); 
$dist_path = get_template_directory_uri() . '/dist/';
?>
<section>
	<div class="featured-sm" style="background-image:url(<?= $dist_path ?>images/studio_pano.jpg);">
		<div class="container-fluid featured-copy">
			<div class="featured-copy-container">
				<h1 class="featured-title">Search Results</h1>
			</div>
		</div>
		<div class="featured-cover"></div>
	</div>	
</section>

<section>
	<div class="container-fluid">
		<?php if (!have_posts()) : ?>
		<div class="search-no-found">
			<?php _e('Sorry, no results were found.', 'sage'); ?>	
		</div>
		<div class="search-input">
			<?php get_search_form(); ?>
		</div>
		<?php endif; ?>
		<!-- -->
		<?php while (have_posts()) : the_post(); ?>
			<?php get_template_part('templates/content', 'search'); ?>
		<?php endwhile; ?>
		<?php the_posts_navigation(); ?>
	</div>
	
</section>


