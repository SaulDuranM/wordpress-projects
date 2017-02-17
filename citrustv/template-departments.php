<?php
/**
 * Template Name: Departments
 */
?> 
<?php 
while (have_posts()) : the_post(); 
get_template_part('templates/helpers'); 
$dist_path = get_template_directory_uri() . '/dist/';

$post_id 	= get_the_ID();
$fimage 	= get_field('image');
$ftitle 	= get_field('title');
$fteaser	= get_field('teaser');
$banner 	= get_field('banner'); 
//COLOR
$ru = $_SERVER['REQUEST_URI']; 
$color = '';
if(strpos($ru, 'news'))
	$color = 'blue';
else if(strpos($ru, 'sports'))
	$color = 'green';
 else if(strpos($ru, 'enter'))
	$color = 'orange';
///////

?>

<!-- MAIN FEATURED -->
<section>
	<div class="show-featured" style="background-image:url(<?= $fimage; ?>);">
		<div class="container-fluid show-featured-copy">
			<div class="show-featured-copy-container">
				<h1 class="show-featured-title"><?= $ftitle; ?></h1>
				<div class="show-featured-desc"><?= $fteaser; ?></div>
				<div class="show-featured-cta">
					<!--<a href="<?= $slider_link; ?>" class="show-featured-cta-a">Watch Now</a>-->
				</div>
			</div>
		</div>
		<div class="show-featured-cover"></div>
	</div>	
</section>

<!-- LATEST EPISODES AND CLIPS -->
<section class="department-last-videos" style="background-image:url(<?= $dist_path.'/images/common/_'.dtype(get_the_title()).'_bg.png' ?>);">
	<?php
	$news_episodes = get_posts( array( 'posts_per_page' => 9, 'post_type' => dtype(get_the_title()).'_episodes', 'order'=> 'DESC', 'orderby' => 'date' ) );
	$news_clips = get_posts(array( 'posts_per_page' => 9, 'post_type' => dtype(get_the_title()).'_clips', 'order'=> 'DESC', 'orderby' => 'date' ) );
	$news_articles = get_posts(array( 'posts_per_page' => 9, 'post_type' => dtype(get_the_title()).'_articles', 'order'=> 'DESC', 'orderby' => 'date' ) );

	$media_items = array_merge($news_episodes, $news_clips, $news_articles);
	usort( $media_items, create_function('$a,$b', 'return strcmp($b->post_date, $a->post_date);') );
	$media_items = array_slice($media_items, 0, 9);
	?>
	<div class="container-fluid">
		<div class="media-items-blk">
			<div class="media-items-title <?=$color;?>">Latest</div>
			<div class="media-items row">
				<?php
					include(locate_template('templates/media-items.php'));
				?>
			</div>
		</div>
	</div>
</section>

<!-- SHOWS -->
<section class="home-last-videos">
	<?php
	$show_items = get_posts(array( 'posts_per_page' => -1, 'post_type' => dtype(get_the_title()).'_shows', 'order'=> 'ASC', 'orderby' => 'menu_order') );
	?>
	<div class="container-fluid">
		<div class="show-items-blk">
			<div class="show-items-title <?=$color;?>">Shows</div>
			<div class="show-items row">
				<?php foreach ( $show_items as $show_item ):
				$show_image = wp_get_attachment_url( get_post_thumbnail_id($show_item->ID) );
				?>
				<div class="col-md-4 col-sm-6">
					<a class="showitem" href="<?= get_permalink($show_item->ID) ?>">
						<div class="show-item">
							<div class="show-item-fimage" style="background-image: url(<?=$show_image;?>)">
								<div class="show-item-fimage-cover"></div>
								<div class="show-item-fimage-cover-h <?=$color;?>-transparency-bg">
									<div class="show-item-cta <?=$color;?>"><span>Watch Now</span></div>
								</div>
							</div>
							<div class="show-item-data-container">
								<div class="show-item-data">
									<div class="show-item-title <?=$color;?>"><?= $show_item->post_title;?></div>
									<div class="show-item-teaser"><?= $show_item->post_content;?></div>
								</div>
								<div class="show-item-data-h <?=$color;?>-bg">
									<div class="show-item-title"><?= $show_item->post_title;?></div>
									<div class="show-item-teaser"><?= $show_item->post_content;?></div>
									
									
								</div>
							</div>
						</div>
					</a>
				</div>	
				<?php endforeach;?>
			</div>
		</div>
	</div>
</section>

<?php 
if($banner)
	include(locate_template('templates/banners.php'));
?>



<?php endwhile; ?>