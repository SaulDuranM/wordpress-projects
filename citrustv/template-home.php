<?php
/**
 * Template Name: Home
 */
?> 
<?php
$post_id = get_the_ID();

get_template_part('templates/helpers');
$dist_path = get_template_directory_uri() . '/dist/';
?>
<section class="home_slider_container">
  	<?php if( have_rows('slider') ): ?>

  		<ul class="home_slider" id="home_slider">
  		<?php while( have_rows('slider') ): the_row(); 
  			$slider_image = get_sub_field('image');
  			$slider_title= get_sub_field('title');
  			$slider_teaser = get_sub_field('teaser');
  			$slider_link = get_sub_field('link');
  			$slider_olink = get_sub_field('external_link');

  			$link = '#';
  			if($slider_link){
  				$link = $slider_link;
  			} else if($slider_olink !== ''){
  				$link = $slider_olink;
  			}
  			 
  		?>
	  		<li>
	  			<section class="hero_home_item" style="background-image:url(<?= $slider_image; ?>);">
	  				<div class="container-fluid hero_home_item_copy">
	  					<div class="hero_home_item_copy_container">
	  						<h1 class="hero_home_item_title"><?= $slider_title; ?></h1>
	  						<div class="hero_home_item_desc"><?= $slider_teaser; ?></div>
	  						<div class="hero_home_item_cta">
	  							<a href="<?= $link; ?>" class="hero_home_item_cta-a">Watch</a>
	  						</div>
	  						<!--<a href="<?php echo $panel_link; ?>" class="hero_button btn ctv-white">Watch Now <img src="<?php bloginfo('template_directory'); ?>/library/images/arrow__circle.png" /></a>-->
	  					</div>
	  				</div>
	  				<div class="hero_home_item_cover"></div>
	  			</section>

	  		</li>
  		<?php endwhile; ?>
  		</ul>

  	<?php endif; ?>
</section>
<!-- SCHEDULE -->
<section class="today-schedule">

  	<div class="container-fluid today-schedule-container">
  		<div class="row">
  			<div class="col-xs-6 col-sm-3 col-md-2">
  				<div class="toda-schedule-nav-title">
  					<h3>Today's Schedule</h3>
  					<small><a href="<?= esc_url(home_url('/')); ?>schedule/">FULL SCHEDULE</a></small>
  				</div>
  			</div>

  			<div class="col-xs-6 col-sm-9 col-md-10">
  				<?php $daysch=strtolower(date('l'));?>
  				<?php if( have_rows($daysch.'_schedule') ): ?>
  					<ul class="today-schedule-slider">
  						<?php while( have_rows($daysch.'_schedule') ): the_row();
  						$showTime = get_sub_field('show_time');
  						$time = get_sub_field('time');
  						$show = get_sub_field('show');
  						$showid = $show->ID;
  						$tfield = get_sub_field_object('time');
  						$tlabel = $tfield['choices'][ $time ];
  						?>
  						<li>
              				<div class="schedule_nav_item">
                  				<time><?=$showTime; ?> <?=$tlabel; ?></time>
                  				<small><a href="<?=esc_url( get_permalink($showid) );?>"><?=get_the_title($showid); ?></a></small>
              				</div>
            			</li>
            			<?php endwhile; ?>
            		</ul>
            	<?php endif; ?>
            </div>
        </div>
        <!--<a class="schedule_next">NEXT</a>-->
  	</div>

</section>
<!-- NEWS -->
<section class="home-last-videos">
	<?php
	$news_episodes = get_posts( array( 'posts_per_page' => 6, 'post_type' => 'news_episodes', 'order'=> 'DESC', 'orderby' => 'date' ) );
	$news_clips = get_posts(array( 'posts_per_page' => 6, 'post_type' => 'news_clips', 'order'=> 'DESC', 'orderby' => 'date' ) );
	$news_articles = get_posts(array( 'posts_per_page' => 6, 'post_type' => 'news_articles', 'order'=> 'DESC', 'orderby' => 'date' ) );

	$media_items = array_merge($news_episodes, $news_clips, $news_articles);
	usort( $media_items, create_function('$a,$b', 'return strcmp($b->post_date, $a->post_date);') );
	$media_items = array_slice($media_items, 0, 6);
	?>
	<div class="container-fluid">
		<div class="media-items-blk">
			<div class="media-items-title lightblue"><a href="news/">News</a></div>
			<div class="media-items row">
				<?php
				foreach ( $media_items as $media_item ): 
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
					//
					$type = ltype($media_item->post_type);
					$typetx = 'Watch';
					if($type == 'article'){$typetx = 'Read';}
					?>
					<div class="col-sm-4">
						<a class="mediaitem" href="<?= get_permalink($media_item->ID) ?>">
							<div class="media-item" style="background-image: url(<?=$media_image;?>)">
								<div class="media-item-hover">
									<div class="media-item-hover-co">
										<div class="media-item-hover-co-co"><?= get_excerpt($media_item->post_content); ?></div>
										<div class="media-item-hover-co-btn">
											<span class="darkblue-bg"><?=$typetx;?> Now</span>
										</div>		
									</div>
									<div class="media-item-hover-bg media-item-hover-blue"></div>
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
			<div class="view-all"><a href="news/" class="blue">View all</a></div>
		</div>
	</div>
</section>

<!-- SPORTS -->
<section class="home-last-videos">
	<?php
	$sports_episodes = get_posts( array( 'posts_per_page' => 6, 'post_type' => 'sports_episodes', 'order'=> 'DESC', 'orderby' => 'date' ) );
	$sports_clips = get_posts(array( 'posts_per_page' => 6, 'post_type' => 'sports_clips', 'order'=> 'DESC', 'orderby' => 'date' ) );
	$sports_articles = get_posts(array( 'posts_per_page' => 6, 'post_type' => 'sports_articles', 'order'=> 'DESC', 'orderby' => 'date' ) );

	$media_items = array_merge($sports_episodes, $sports_clips, $sports_articles);
	usort( $media_items, create_function('$a,$b', 'return strcmp($b->post_date, $a->post_date);') );
	$media_items = array_slice($media_items, 0, 6);
	?>
	<div class="container-fluid">
		<div class="media-items-blk">
			<div class="media-items-title green"><a href="sports/">Sports</a></div>
			<div class="media-items row">
				<?php
				foreach ( $media_items as $media_item ): 
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
					//
					$type = ltype($media_item->post_type);
					$typetx = 'Watch';
					if($type == 'article'){$typetx = 'Read';}
					?>
					<div class="col-sm-4">
						<a class="mediaitem" href="<?= get_permalink($media_item->ID) ?>">
							<div class="media-item" style="background-image: url(<?=$media_image;?>)">
								<div class="media-item-hover">
									<div class="media-item-hover-co">
										<div class="media-item-hover-co-co"><?= get_excerpt($media_item->post_content); ?></div>
										<div class="media-item-hover-co-btn">
											<span class="darkgreen-bg"><?=$typetx;?> Now</span>
										</div>		
									</div>
									<div class="media-item-hover-bg media-item-hover-green"></div>
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
			<div class="view-all"><a href="sports/" class="green">View all</a></div>
		</div>
	</div>
</section>

<!-- ENTERTAINMENT -->
<section class="home-last-videos">
	<?php
	$enter_episodes = get_posts( array( 'posts_per_page' => 6, 'post_type' => 'enter_episodes', 'order'=> 'DESC', 'orderby' => 'date' ) );
	$enter_clips = get_posts(array( 'posts_per_page' => 6, 'post_type' => 'enter_clips', 'order'=> 'DESC', 'orderby' => 'date' ) );
	$enter_articles = get_posts(array( 'posts_per_page' => 6, 'post_type' => 'enter_articles', 'order'=> 'DESC', 'orderby' => 'date' ) );

	$media_items = array_merge($enter_episodes, $enter_clips, $enter_articles);
	usort( $media_items, create_function('$a,$b', 'return strcmp($b->post_date, $a->post_date);') );
	$media_items = array_slice($media_items, 0, 6);
	?>
	<div class="container-fluid">
		<div class="media-items-blk">
			<div class="media-items-title orange"><a href="enter/">Entertainment</a></div>
			<div class="media-items row">
				<?php
				foreach ( $media_items as $media_item ): 
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
					//
					$type = ltype($media_item->post_type);
					$typetx = 'Watch';
					if($type == 'article'){$typetx = 'Read';}
					?>
					<div class="col-sm-4">
						<a class="mediaitem" href="<?= get_permalink($media_item->ID) ?>">
							<div class="media-item" style="background-image: url(<?=$media_image;?>)">
								<div class="media-item-hover">
									<div class="media-item-hover-co">
										<div class="media-item-hover-co-co"><?= get_excerpt($media_item->post_content); ?></div>
										<div class="media-item-hover-co-btn">
											<span class="darkorange-bg"><?=$typetx;?> Now</span>
										</div>		
									</div>
									<div class="media-item-hover-bg media-item-hover-orange"></div>
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
				//include_once(locate_template('templates/media-items.php'));
				?>
			</div>
			<div class="view-all"><a href="enter/" class="orange">View all</a></div>
		</div>
	</div>
</section>