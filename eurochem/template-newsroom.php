<?php
/**
 * Template Name: EuroChem NewsRoom
 */
?>
<?php while (have_posts()) : the_post(); ?>
	
	<?php 
  	$dist_path = get_template_directory_uri() . '/dist/';
  	$dist_path_t = get_template_directory_uri();
  	?>
  	<!-- *********** -->
  	<!-- MAIN BANNER -->
  	<!-- *********** -->
  	
  	<?php 
  	$mb_s_image_background =  get_field('mb_s_image_background');
  	$mb_s_icon_heading =  get_field('mb_s_icon_heading');
  	$mb_s_heading = get_field('mb_s_heading');
  	?>
  	<div class="main-banner no-bunnerpp main-banner-dark" style="background-image: url('<?php echo $mb_s_image_background; ?>')">
  		<div class="main-banner-i clearfix">
  			<div class="main-banner__text">
  				<div class="img-w"><img src="<?php echo $mb_s_icon_heading; ?>" alt=""/></div>
  				<h2><?php echo $mb_s_heading; ?></h2>
  			</div>
  		</div>
  	</div>


  	<!-- **************** -->
  	<!-- NEWS ROOM HEADER -->
  	<!-- **************** -->

  	<div class="galleries-w">
  		<div class="galleries-header">
  			<div class="main-tabs">
  				<div class="main-tabs-i">
  					<ul class="clearfix">
  						<li data-tab="gallery" class="tab-room active">
  							<a href="#gallery">
  								<div class="main-tabs__icon">
  									<div class="icons-w icons-sun">
  										<img class="icon-def" src="<?php echo $dist_path; ?>images/content/gallery-blue.svg" alt=""/>
  										<img class="icon-active" src="<?php echo $dist_path; ?>images/content/gallery-white.svg" alt=""/>
  									</div>
  									<span>Galleries</span>
  								</div>
  							</a>
  						</li>
  						<li data-tab="news" class="tab-room">
  							<a href="#news">
  								<div class="main-tabs__icon">
  									<div class="icons-w icons-news">
  										<img class="icon-def" src="<?php echo $dist_path; ?>images/content/news-blue.svg" alt=""/>
  										<img class="icon-active" src="<?php echo $dist_path; ?>images/content/news-white.svg" alt=""/>
  									</div>
  									<span>News</span>
  								</div>
  							</a>
  						</li>
  						<li data-tab="tweets" class="tab-room">
  							<a href="#tweets">
  								<div class="main-tabs__icon">
  									<div class="icons-w icons-tweet">
  										<img class="icon-def"  src="<?php echo $dist_path; ?>images/content/tweet-blue.svg" alt=""/>
  										<img class="icon-active" src="<?php echo $dist_path; ?>images/content/tweet-white.svg" alt=""/>
  									</div>
  									<span>Tweets</span>
  								</div>
  							</a>
  						</li>
  						<li data-tab="videos" class="tab-room">
  							<a href="#videos">
  								<div class="main-tabs__icon">
  									<div class="icons-w icons-video">
  										<img class="icon-def" src="<?php echo $dist_path; ?>images/content/youtube-blue.svg" alt=""/>
  										<img class="icon-active" src="<?php echo $dist_path; ?>images/content/youtube-white.svg" alt=""/>
  									</div>
  									<span>Videos</span>
  								</div>
  							</a>
  						</li>
  					</ul>
  				</div>
  			</div>

  			<!-- GALLERY -->
  			<div id="show-gallery" class="tabs-show">
	  			<div class="galleries-filters">
	  				<div class="galleries-filters-i clearfix">
	  					<p class="galleries-filters__title">Collections:</p>
	  					<ul class="galleries-filters__list galleries-sort">
	  						<li class="active"><a href="#" data-filter="*">All</a></li>
	  						<li><a href="#" data-filter=".investors">Investors</a></li>
	  						<li><a href="#" data-filter=".sustainability">Sustainability</a></li>
	  						<li><a href="#" data-filter=".customers">Customers</a></li>
	  						<li><a href="#" data-filter=".mining">Mining</a></li>
	  						<li><a href="#" data-filter=".oilgas">Oil & Gas</a></li>
	  						<li><a href="#" data-filter=".fertilizers">Fertilizers</a></li>
	  						<li><a href="#" data-filter=".logistics">Logistics</a></li>
	  					</ul>
	  				</div>
	  			</div>

	  			<div class="gallery">
	  				<div class="gallery-i clearfix">

	  					<?php 
	  					if( have_rows('mc_gallery_items') ):
						while( have_rows('mc_gallery_items') ): the_row();
						$mc_gitem_image = get_sub_field('mc_gitem_image');
						$mc_gitem_headline = get_sub_field('mc_gitem_headline');
						$mc_gitem_text = get_sub_field('mc_gitem_text');
						$mc_gitem_category = get_sub_field('mc_gitem_category');
						$mc_gitem_cat = '';
						foreach ($mc_gitem_category as &$category) {
						    $mc_gitem_cat .= $category.' ';
						}
						unset($vars_item);
						$vars_item = 'path='.$dist_path.'&image='.$mc_gitem_image.'&headline='.urlencode($mc_gitem_headline).'&desc='.urlencode($mc_gitem_text);
						?>
	  					<div class="gallery__item <?= $mc_gitem_cat; ?>">
	                        <a href="<?= $dist_path_t; ?>/templates/gallery-item.php?<?= $vars_item; ?>" rel="gallery" class="fancybox.ajax">
	                            <div class="hover">
	                                <span href="#" class="btn-round btn-round-white">View Image
	                                    <svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/></svg>
	                                </span>
	                            </div>
	                            <div class="img-w"><img src="<?= $mc_gitem_image; ?>" alt=""/></div>
	                            <div class="text-w">
	                                <p class="date">28 JULY 2015</p>
	                                <h2><?= $mc_gitem_headline; ?></h2>
	                                <p class="text__main"><?= $mc_gitem_text; ?></p>
	                            </div>
	                        </a>
	                    </div>
	                    <?php endwhile; ?>
	                    <?php endif;?>
	  				</div>

	  				<div class="gallery-more">
	                    <p>More</p>
	                    <div class="btn-more">
	                        <a href="#">
	                            <svg role="img" title="more" class="icon-arr-down">
	                                <use xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-arr-down"/>
	                            </svg>
	                        </a>
	                    </div>
	                </div>
	  			</div>
	  		</div><!-- END GALLERY -->

	  		<!-- NEWS -->
	  		<div id="show-news" class="tabs-show">
	  			<div class="galleries-filters">
                    <div class="galleries-filters-i clearfix">
                        <p class="galleries-filters__title">Collections:</p>
                        <ul class="galleries-filters__list galleries-sort">
                            <li class="active"><a href="#" data-filter="*">All</a></li>
                            <li><a href="#" data-filter=".investors">Investors</a></li>
                            <li><a href="#" data-filter=".pressreleases">Press releases</a></li>
                            <li><a href="#" data-filter=".projects">Projects</a></li>
                            <li><a href="#" data-filter=".sustainability ">Sustainability </a></li>
                        </ul>
                    </div>
                </div>

                <div class="news-room-w">
	                <div class="news-room">
	                <?php 
	                $posts = get_posts(array('numberposts' => -1,'post_type' => 'post'));
	                foreach ( $posts as $post ) {
	                	$postdate = mysql2date('j M Y', $post->post_date);
	                	//TAGS
	                	$posttags = get_the_tags($post->ID);


	                	if(get_post_thumbnail_id($post->ID)){
	                	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	
	                ?>
	                	<div class="news-room__item news-room__item-img investors pressreleases">
	                        <a href="<?php echo get_permalink( $post->ID ) ?>" class="news-room__item__img">
	                            <img src="<?php echo $feat_image; ?>" alt=""/>
	                        </a>
	                        <div class="news-room__item__text">
	                            <p class="date" style="text-transform:uppercase;"><?php echo $postdate; ?></p>
	                            <p class="title"><a href="#"><?php echo $post->post_title; ?></a></p>
	                            <p class="text__main"><?php echo $post->post_content; ?></p>
	                            <ul class="current-tags">
	                                <li>Tags:</li>
	                                <?php 
	                                if ($posttags) {
										foreach($posttags as $tag) {
											echo '<li><a href="#">'.$tag->name.'</a></li>';
										}
									}
	                                ?>
	                            </ul>
	                            <a href="<?php echo get_permalink( $post->ID ) ?>" class="btn-round">View
	                                <svg class="icon-arr-left" role="img" title="share-fb">
	                                    <use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/>
	                                </svg>
	                            </a>
	                        </div>
	                    </div>

	                <?php		
	                	} else {
	                ?>
	                	<div class="news-room__item investors pressreleases projects sustainability">
	                        <div class="news-room__item__text">
	                            <p class="date" style="text-transform:uppercase;"><?php echo $postdate; ?></p>
	                            <p class="title"><a href="<?php echo get_permalink( $post->ID ) ?>"><?php echo $post->post_title; ?></a></p>
	                            <p class="text__main"><?php echo $post->post_content; ?></p>
	                            <ul class="current-tags clearfix">
	                                <li>Tags:</li>
	                                <?php 
	                                if ($posttags) {
										foreach($posttags as $tag) {
											echo '<li><a href="#">'.$tag->name.'</a></li>';
										}
									}
	                                ?>
	                            </ul>
	                            <a href="<?php echo get_permalink( $post->ID ) ?>" class="btn-round">View
	                                <svg class="icon-arr-left" role="img" title="share-fb">
	                                    <use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/>
	                                </svg>
	                            </a>
	                        </div>
	                    </div>
	                <?php
	            		}
	                }

	                ?>
	                </div>

	                <div class="gallery-more">
	                    <p>More</p>
	                    <div class="btn-more">
	                        <a href="#">
	                            <svg role="img" title="more" class="icon-arr-down">
	                                <use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-down"/>
	                            </svg>
	                        </a>
	                    </div>
	                </div>
	            </div>

	  		
	  		</div>	<!-- END NEWS -->




  		</div>
  	</div>

  	<!-- ************** -->
	<!-- CONTACT BOTTOM -->
	<!-- ************** -->

	<?php get_template_part('templates/contact', 'contact'); ?>

  	<!-- ************** -->
  	<!-- CHANGE SECTION -->
  	<!-- ************** -->

  	<script>
  	jQuery(document).ready(function($){
  		$(".show-news").hide();

  		$(".tab-room").click(function(event) {
  			event.preventDefault();
  			$(".tabs-show").hide();
  			$(".tab-room").removeClass("active");

  			var tab = $(this).data("tab");
  			$("#show-"+tab).show();
  			$(this).addClass("active")
		});
  	});
  	</script>


<?php endwhile; ?>	