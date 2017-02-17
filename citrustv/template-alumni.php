<?php
/**
 * Template Name: Alumni
 */
?>
<?php
$post_id = get_the_ID();
while (have_posts()) : the_post();
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post_id));
$copy = get_field('copy');
?>
<!-- SHOW FEATURE -->	
<section>
	<div class="featured" style="background-image:url(<?= $feat_image; ?>);">
		<div class="container-fluid featured-copy">
			<div class="featured-copy-container">
				<h1 class="featured-title"><?= $copy; ?></h1>
			</div>
		</div>
		<div class="featured-cover"></div>
	</div>	
</section>

<?php endwhile; ?> 