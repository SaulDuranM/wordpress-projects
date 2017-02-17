<?php
/**
 * Template Name: About
 */
?>
<?php
$post_id = get_the_ID();
while (have_posts()) : the_post();
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post_id));
//FIELDS
$copy = get_field('copy');
$txt = get_field('about');
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
	<div class="content-blk wline">
		<div class="container-fluid">
			<div class="section-title about-title">
				<h1><? the_title(); ?></h1>
			</div>
			<div class="section-content about-content">
				<p><?= $txt; ?></p>
			</div>
		</div>
	</div>
</section>

<section class="about-thenumbers">
	<div class="content-blk">
		<div class="container-fluid">
			<div class="about-thenumbers-title gray"><h2>By The Numbers</h2></div>
			<div class="about-thenumbers-items row">
				<?php while( have_rows('by_the_numbers') ): the_row(); 
		  			$number = get_sub_field('number');
		  			$type = get_sub_field('type');
		  			$description = get_sub_field('description');
		  			$color = get_sub_field('color');
		  		?>
		  		<div class="col-md-4 col-sm-6">
		  			<div class="about-thenumbers-item <?=$color;?>">
			  			<div class="about-thenumbers-item-h <?=$color;?>-bg">
			  				<div class="about-thenumbers-item-number"><?=$number;?></div>
			  				<div class="about-thenumbers-item-type"><?=$type;?></div>
			  			</div>
			  			<div class="about-thenumbers-item-desc"><?=$description;?></div>
		  			</div>
		  		</div>
		  		<?php endwhile; ?>
			</div>
		</div>
	
	</div>
	
</section>

<section>
	<div class="content-blk">
		<div class="container-fluid">
			<div class="about-faqs row">
				<?php while( have_rows('faqs') ): the_row(); 
		  			$qs  = get_sub_field('question');
		  			$ans = get_sub_field('answer');
		  			$ans = preg_replace('/([a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6})/', '<a href="mailto:$1">$1</a>', $ans);
		  		?>
		  		<div class="col-md-6">
		  			<div class="about-faqs-item">
			  			<div class="faq-question"><h2><?=$qs;?></h2></div>
			  			<div class="faq-answer"><?=$ans;?></div>
		  			</div>
		  		</div>
		  		<?php endwhile; ?>
			</div>
		</div>
	</div>
</section>

<section class="about-staff">
	<div class="content-blk">
		<div class="container-fluid">
			<div class="about-staff-title orange"><h2>Executive Staff</h2></div>
			<div class="about-staff-heading"><?=get_field('executive_staff_heading');?></div>
			<div class="about-staff-items row">
				<?php while( have_rows('executive_staff') ): the_row(); 
		  			$position = get_sub_field('position');
		  			$name = get_sub_field('name');
		  			$email = get_sub_field('e-mail');
		  			$class_of = get_sub_field('class_of');
		  			$hometown = get_sub_field('hometown');
		  			$photo = get_sub_field('photo');
		  			$link = get_sub_field('bio_page');
		  		?>
		  		<div class="col-md-6 col-sm-4">
		  			<div class="about-staff-item">
		  				<div class="row">
			  				<div class="col-md-5">
			  					<a href="<?=$link;?>"><div class="about-staff-photo" style="background-image:url(<?= $photo; ?>);"></div></a>
			  				</div>
			  				<div class="col-md-7">
			  					<div class="about-staff-data">
			  						<div class="about-staff-pos"><?=$position;?></div>
			  						<div class="about-staff-name"><a href="<?=$link;?>"><?=$name;?></a></div>
			  						<div class="about-staff-email"><a href="mailto:<?=$email;?>"><?=$email;?></a></div>
			  						<div class="about-staff-class">Class of <?=$class_of;?></div>
			  						<div class="about-staff-home">Hometown: <?=$hometown;?></div>

			  					</div>
			  				</div>
			  			</div>
		  			</div>
		  		</div>
		  		<?php endwhile; ?>
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