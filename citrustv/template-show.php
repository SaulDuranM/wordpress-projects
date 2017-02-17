<?php 

//////////////////
// --- SHOW --- //
//////////////////


$r = $_SERVER['REQUEST_URI']; 
$r = explode('/', $r);
$r = array_filter($r);
$r = array_merge($r, array()); 
$r = preg_replace('/\?.*/', '', $r);
$t = $r[count($r)-1];
if($t == 'episodes' || $t == 'clips' || $t=='articles'){
	$archive = true;
	$url = '../../'.$r[count($r)-2].'/';
} else {
	$archive = false;
	$url = '';
}
//COLOR
$ru = $_SERVER['REQUEST_URI']; 
$color = '';
$breadstart = '';
if(strpos($ru, 'news')){
	$breadstart = 'news';
	$color = 'blue';
} else if(strpos($ru, 'sports')){
	$breadstart = 'sports';
	$color = 'green';
} else if(strpos($ru, 'enter')){
 	$breadstart = 'entertainment';
	$color = 'orange';
}
///////

get_template_part('templates/helpers');
$dist_path = get_template_directory_uri() . '/dist/';

$post_type = get_post_type();
list($dep, $type) = split('[_]', $post_type);
$post_id = get_the_ID();
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post_id));
?>

<?php 
if(!$archive):
?>

<!-- SHOW FEATURE -->
<?php
$feat_teaser = get_field('teaser', $post_id);
$feat_copy = '';
if($feat_teaser){
	$feat_copy = $feat_teaser;
} else {
	$feat_copy = get_the_content();
}
?>	
<section>
	<div class="show-featured" style="background-image:url(<?= $feat_image; ?>);">
		<div class="container-fluid show-featured-copy">
			<div class="show-featured-copy-container">
				<h1 class="show-featured-title"><? the_title(); ?></h1>
				<div class="show-featured-desc"><?=$feat_copy;?></div>
				<div class="show-featured-cta">
					<!--<a href="<?= $slider_link; ?>" class="show-featured-cta-a">Watch Now</a>-->
				</div>
			</div>
		</div>
		<div class="show-featured-cover"></div>
	</div>	
</section>

<?php endif; ?>

<?php 
// FEATURE IMAGE TO DIVIDE NAV MENU FROM HEADER
if ($archive):
?>
<section>
	<div class="featured-xsm" style="background-image:url(<?= $feat_image; ?>);">
		<div class="container-fluid featured-copy">
			<div class="featured-copy-container">
				<h1 class="featured-title"><? the_title(); ?> <?=$t?></h1>
			</div>
		</div>
		<div class="featured-cover"></div>
	</div>	
</section>
<?php endif; ?>
<!-- SUBNAV -->
<section class="media-item-detail-subnav">
	<div class="container-fluid">
		<?php 
		$logo = get_field('logo');
		$col = 2;
		$colxs = 5;
		if($dep == 'enter'){
			$col = 1;
			$colxs = 3;
		}
		?>
		<div class="detail-subnav row">

			<div class="col-md-<?=$col;?> col-xs-3"><a href="<?=$url?>" class="detail-subnav-logo-a"><img class="img-responsive" src="<?=$logo;?>"></a></div>
  			<div class="col-md-1 col-xs-1 col-sm-2 <?=$color;?>"><a href="<?=$url?>episodes/">Episodes</a></div>
  			<div class="col-md-1 col-xs-1 col-sm-2 <?=$color;?>"><a href="<?=$url?>clips/">Clips</a></div>
  			<div class="col-md-1 col-xs-1 col-sm-2 <?=$color;?>"><a href="<?=$url?>articles/">Articles</a></div>
		</div>
		<?php ///// MOBILE ////// ?>
		<div class="detail-subnav-mobile">
			<div class="row ">
				<div class="col-md-<?=$col;?> col-xs-<?=$colxs;?>"><a href="<?=$url?>" class="detail-subnav-logo-a"><img class="img-responsive" src="<?=$logo;?>"></a></div>
			</div>
			<div class="down-arrow">
				<a class="down-arrow-btn" id="down-arrow-btn"></a>
			</div>
		</div>
  	</div>
</section>
<section class="detail-subnav-mobile-links">
	<div class="<?=$color;?>"><a href="<?=$url?>episodes/">Episodes</a></div>
  	<div class="<?=$color;?>"><a href="<?=$url?>clips/">Clips</a></div>
  	<div class="<?=$color;?>"><a href="<?=$url?>articles/">Articles</a></div>
</section>
<?php 
if(!$archive):
?>
<!-- BREADCUMB -->
<section>
	<div class="container-fluid">
		<div class="breadcumb">
			<a href="<?= esc_url(home_url('/')); ?>">Home</a> / <a href="<?= esc_url(home_url('/')); ?><?=$breadstart;?>/"><?=$breadstart;?></a> / <? the_title(); ?>
		</div>
	</div>
</section>

<!-- LAST CLIPS -->
<section class="home-last-videos">
	<?php
	$media_items = get_posts(array( 'posts_per_page' => 6, 'post_type' => $dep.'_clips', 'order'=> 'DESC', 'orderby' => 'date', 'meta_key' => 'show', 'meta_value' => $post_id) );
	if(count($media_items)>0):
	?>
	<div class="container-fluid">
		<div class="media-items-blk">
			<div class="media-items-title <?=$color;?>">Lastest Clips</div>
			<div class="media-items row">
				<?php
				foreach ( $media_items as $media_item ):
					$show = get_post_meta( $media_item->ID, "show", true );
					$yt_video = get_field('yt_id', $media_item->ID);
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($media_item->ID) );
					$media_image = '';
					if($feat_image){
						$media_image = $feat_image;
					} elseif($yt_video){
						$media_image = 'http://img.youtube.com/vi/'.$yt_video.'/hqdefault.jpg';
					} else {
						$media_image = '';
					}
					?>
					<div class="col-md-4 col-sm-6">
						<a class="mediaitem" href="<?= get_permalink($media_item->ID) ?>">
							<div class="media-item" style="background-image: url(<?=$media_image;?>)">
								<div class="media-item-hover">
									<div class="media-item-hover-co">
										<div class="media-item-hover-co-co"><?= get_excerpt($media_item->post_content); ?></div>
										<div class="media-item-hover-co-btn">
											<span class="dark<?=$color;?>-bg">Watch Now</span>
										</div>		
									</div>
									<div class="media-item-hover-bg media-item-hover-<?=$color;?>"></div>
								</div>

								<div class="media-item-detail">
									<div class="row">
										<div class="col-sm-8 col-xs-8">
											<div class="media-item-text">
												<?= $media_item->post_title; ?>
											</div>
										</div>
										<div class="col-sm-4 col-xs-4">
											<div class="media-item-type">
												<span><?= ltype($media_item->post_type); ?></span>
											</div>
										</div>
									</div>
								</div>
								<div class="media-item-overlay" style="background-image: url(<?= $dist_path.'images/common/media_'.ltype($media_item->post_type).'.png';?>);"></div>
								<div class="media-item-overlay-gradient"></div>
							</div>
						</a>
					</div>
				<?
				endforeach;
				?>
			</div>
			<div class="view-all"><a href="<?=$url?>clips/" class="<?=$color;?>"><span>View all</span></a></div>
		</div>
	</div>
	<?php endif; ?>
</section>

<!-- LAST ARTICLES -->
<section class="home-last-videos">
	<?php
	$media_items = get_posts(array( 'posts_per_page' => 6, 'post_type' => $dep.'_articles', 'order'=> 'DESC', 'orderby' => 'date', 'meta_key' => 'show', 'meta_value' => $post_id) );
	if(count($media_items)>0):
	?>
	<div class="container-fluid">
		<div class="media-items-blk">
			<div class="media-items-title <?=$color;?>">Lastest Articles</div>
			<div class="media-items row">
				<?php
				foreach ( $media_items as $media_item ):
					$show = get_post_meta( $media_item->ID, "show", true );
					$yt_video = get_field('yt_id', $media_item->ID);
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($media_item->ID) );
					$media_image = '';
					if($feat_image){
						$media_image = $feat_image;
					} elseif($yt_video){
						$media_image = 'http://img.youtube.com/vi/'.$yt_video.'/hqdefault.jpg';
					} else {
						$media_image = '';
					}
					?>
					<div class="col-md-4 col-sm-6">
						<a class="mediaitem" href="<?= get_permalink($media_item->ID) ?>">
							<div class="media-item" style="background-image: url(<?=$media_image;?>)">
								<div class="media-item-hover">
									<div class="media-item-hover-co">
										<div class="media-item-hover-co-co"><?= get_excerpt($media_item->post_content); ?></div>
										<div class="media-item-hover-co-btn">
											<span class="dark<?=$color;?>-bg">Read Now</span>
										</div>		
									</div>
									<div class="media-item-hover-bg media-item-hover-<?=$color;?>"></div>
								</div>

								<div class="media-item-detail">
									<div class="row">
										<div class="col-sm-8 col-xs-8">
											<div class="media-item-text">
												<?= $media_item->post_title; ?>
											</div>
										</div>
										<div class="col-sm-4 col-xs-4">
											<div class="media-item-type">
												<span><?= ltype($media_item->post_type); ?></span>
											</div>
										</div>
									</div>
								</div>
								<div class="media-item-overlay" style="background-image: url(<?= $dist_path.'images/common/media_'.ltype($media_item->post_type).'.png';?>);"></div>
								<div class="media-item-overlay-gradient"></div>
							</div>
						</a>
					</div>
				<?
				endforeach;
				?>
			</div>
			<div class="view-all"><a href="<?=$url?>articles/" class="<?=$color;?>"><span>View all</span></a></div>
		</div>
	</div>
	<?php endif; ?>
</section>

<!-- LAST EPISODES -->
<section class="home-last-videos">
	<?php
	$media_items = get_posts(array( 'posts_per_page' => 6, 'post_type' => $dep.'_episodes', 'order'=> 'DESC', 'orderby' => 'date', 'meta_key' => 'show', 'meta_value' => $post_id) );
	if(count($media_items)>0):
	?>
	<div class="container-fluid">
		<div class="media-items-blk">
			<div class="media-items-title <?=$color;?>">Lastest Episodes</div>
			<div class="media-items row">
				<?php
				foreach ( $media_items as $media_item ):
					$show = get_post_meta( $media_item->ID, "show", true );
					$yt_video = get_field('yt_id', $media_item->ID);
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($media_item->ID) );
					$media_image = '';
					if($feat_image){
						$media_image = $feat_image;
					} elseif($yt_video){
						$media_image = 'http://img.youtube.com/vi/'.$yt_video.'/hqdefault.jpg';
					} else {
						$media_image = '';
					}

					?>
					<div class="col-md-4 col-sm-6">
						<a class="mediaitem" href="<?= get_permalink($media_item->ID) ?>">
							<div class="media-item" style="background-image: url(<?=$media_image;?>)">
								<div class="media-item-hover">
									<div class="media-item-hover-co">
										<div class="media-item-hover-co-co"><?= get_excerpt($media_item->post_content); ?></div>
										<div class="media-item-hover-co-btn">
											<span class="dark<?=$color;?>-bg">Watch Now</span>
										</div>		
									</div>
									<div class="media-item-hover-bg media-item-hover-<?=$color;?>"></div>
								</div>

								<div class="media-item-detail">
									<div class="row">
										<div class="col-sm-8 col-xs-8">
											<div class="media-item-text">
												<?= $media_item->post_title; ?>
											</div>
										</div>
										<div class="col-sm-4 col-xs-4">
											<div class="media-item-type">
												<span><?= ltype($media_item->post_type); ?></span>
											</div>
										</div>
									</div>
								</div>
								<div class="media-item-overlay" style="background-image: url(<?= $dist_path.'images/common/media_'.ltype($media_item->post_type).'.png';?>);"></div>
								<div class="media-item-overlay-gradient"></div>
							</div>
						</a>
					</div>
				<?
				endforeach;
				?>
			</div>
			<div class="view-all"><a href="<?=$url?>episodes/" class="<?=$color;?>"><span>View all</span></a></div>
		</div>
	</div>
	<?php endif; ?>
</section>

<!-- CAST -->
<?php if( have_rows('cast') ): ?>
<section class="the-cast">
	<div class="container-fluid" style="position: relative; z-index: 9999;">
		<div class="cast-heading <?=$color;?>">Meet <?= get_field('heading'); ?></div>
		<div class="row">
			<?php while( have_rows('cast') ): the_row(); 
	  		$name = get_sub_field('name');
	  		$job_description= get_sub_field('job_description');
	  		$photo = get_sub_field('photo');
	  		$bio_page = get_sub_field('bio_page');
	  		?>
	  		<div class="col-md-3 col-sm-4 cast-col">
	  			<div class="cast-item">
	  		 		<a href="<?=$bio_page;?>"><div class="cast-item-photo" style="background-image: url(<?=$photo;?>)"></div></a>
		  		 	<div class="cast-item-det">
		  		 		<div class="cast-item-name"><a href="<?=$bio_page;?>" class="<?=$color;?>"><h3 class="<?=$color;?>"><?=$name;?></h3></a></div>
		  		 		<div class="cast-item-desc"><?=$job_description;?></div>
		  		 	</div>
	  		 	</div>
	  		</div>
	  		<?php endwhile; ?>
		</div>
	</div>

	<!--<div class="watermark-cast">People<? //get_field('heading'); ?></div>-->
	
</section>
<?php endif; ?>

<?php
$banner = get_field('banner'); 
if($banner)
	include(locate_template('templates/banners.php'));
?>

<?php endif; ?>

<?php 
if($archive):
?>
<section>
	<div class="container-fluid">
		<div class="breadcumb">
			<a href="<?= esc_url(home_url('/')); ?>">Home</a> / <a href="<?= esc_url(home_url('/')); ?><?=$breadstart;?>/"><?=$breadstart;?></a> / <a href="../"><? the_title(); ?></a> / <?=$t;?>
		</div>
	</div>
</section>
<!-- ALL MEDIA -->
<section class="home-last-videos">
	<?php
	$media_items = get_posts(array( 'posts_per_page' => -1, 'post_type' => $dep.'_'.$t, 'order'=> 'DESC', 'orderby' => 'date', 'meta_key' => 'show', 'meta_value' => $post_id) );
	?>
	<div class="container-fluid">
		<div class="media-items-blk">
			<!--<div class="media-items-title-archive <?=$color;?>"><?the_title();?></div>-->
			<div class="media-items row">
				<?php
				foreach ( $media_items as $media_item ):
					$show = get_post_meta( $media_item->ID, "show", true );
					$yt_video = get_field('yt_id', $media_item->ID);
					$feat_image = wp_get_attachment_url( get_post_thumbnail_id($media_item->ID) );
					$media_image = '';
					if($feat_image){
						$media_image = $feat_image;
					} elseif($yt_video){
						$media_image = 'http://img.youtube.com/vi/'.$yt_video.'/hqdefault.jpg';
					} else {
						$media_image = '';
					}
					?>
					<div class="col-md-4 col-sm-6">
						<a class="mediaitem" href="<?= get_permalink($media_item->ID) ?>">
							<div class="media-item" style="background-image: url(<?=$media_image;?>)">
								<div class="media-item-hover">
									<div class="media-item-hover-co">
										<div class="media-item-hover-co-co"><?= get_excerpt($media_item->post_content); ?></div>
										<div class="media-item-hover-co-btn">
											<span class="dark<?=$color;?>-bg">Check out this <?= ltype($media_item->post_type); ?></span>
										</div>		
									</div>
									<div class="media-item-hover-bg media-item-hover-<?=$color;?>"></div>
								</div>

								<div class="media-item-detail">
									<div class="row">
										<div class="col-sm-8 col-xs-8">
											<div class="media-item-text">
												<?= $media_item->post_title; ?>
											</div>
										</div>
										<div class="col-sm-4 col-xs-4">
											<div class="media-item-type">
												<span><?= ltype($media_item->post_type); ?></span>
											</div>
										</div>
									</div>
								</div>
								<div class="media-item-overlay" style="background-image: url(<?= $dist_path.'images/common/media_'.ltype($media_item->post_type).'.png';?>);"></div>
								<div class="media-item-overlay-gradient"></div>
							</div>
						</a>
					</div>
				<?
				endforeach;
				?>
			</div>
		</div>
	</div>
</section>
<?php endif; ?>