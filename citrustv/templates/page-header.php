<?php use Roots\Sage\Titles; 
$dist_path = get_template_directory_uri() . '/dist/';
?>

<section>
	<div class="featured-sm" style="background-image:url(<?= $dist_path ?>images/studio_pano.jpg);">
		<div class="container-fluid featured-copy">
			<div class="featured-copy-container">
				<h1 class="featured-title"><?= Titles\title(); ?></h1>
			</div>
		</div>
		<div class="featured-cover"></div>
	</div>	
</section>
<!--<div class="page-header">
  <h1><?= Titles\title(); ?></h1>
</div>-->
