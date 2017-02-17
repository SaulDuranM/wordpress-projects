<?php //get_template_part('templates/page', 'header'); 
$dist_path = get_template_directory_uri() . '/dist/';
?>
<section>
	<div class="featured-sm" style="background-image:url(<?= $dist_path ?>images/studio_pano.jpg);">
		<div class="container-fluid featured-copy">
			<div class="featured-copy-container">
				<h1 class="featured-title">Not Found</h1>
			</div>
		</div>
		<div class="featured-cover"></div>
	</div>	
</section>

<section>
	<div class="container-fluid">
		<div class="search-no-found">
		 	<?php _e('Sorry, but the page you were trying to view does not exist.', 'sage'); ?>
		 		
		</div>
		<div class="search-input">
			<?php get_search_form(); ?>
		</div>
	</div>
</section>
