<?php
$post_id = get_the_ID();
//while (have_posts()) : the_post();
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post_id));
$copy = get_field('copy');
$content = get_field('content');
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

<section>
	<div class="content-blk">
		<div class="container-fluid page-content">
			<div class="row">
				<div class="col-md-12">
				<? the_content();?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
$banner = get_field('banner'); 
if($banner)
	include(locate_template('templates/banners.php'));
?>


<?php //endwhile; ?> 

<?php //the_content(); ?>
<?php //wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
