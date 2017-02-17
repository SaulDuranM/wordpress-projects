<?php 
$banner_image= get_field('image', $banner->ID);
?>
<section class="banners">
	<div class="container-fluid">
		<div class="banner-item">
			<img class="img-responsive" src="<?=$banner_image;?>">
		</div>
	</div>
	
</section>