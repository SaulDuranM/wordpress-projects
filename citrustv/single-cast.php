<?php while (have_posts()) : the_post(); ?>

<section>
	<div class="content-blk">
		<div class="container-fluid page-content">
			<div class="row staff">
				<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id(get_the_id())); ?>
				<div class="col-md-5">
					<div class="staff-photo" style="background-image:url(<?= $feat_image; ?>);"></div>
				</div>
				<div class="col-md-7">
					<div class="staff-data">
						<?php
						$position = get_field('position');
						$email = get_field('email');
						$classof = get_field('classof');
						$hometown = get_field('hometown');
						?>
			  			<div class="staff-name"><? the_title(); ?></div>
			  			<div class="staff-pos"><?=$position;?></div>
			  			<div class="staff-email"><a href="mailto:<?=$email;?>"><?=$email;?></a></div>
			  			<div class="staff-class">Class of <?=$classof;?></div>
			  			<div class="staff-home">Hometown: <?=$hometown;?></div>
			  			<div class="staff-bio"><? the_content();?></div>

			  		</div>
				
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




<?php endwhile; ?>