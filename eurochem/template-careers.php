<?php
/**
 * Template Name: EuroChem Careers
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
  	
  	$mb_background =  get_field('mb_background');
  	$mb_icon_heading =  get_field('mb_icon_heading');
  	$mb_heading = get_field('mb_heading');
  	$mb_subheading = get_field('mb_subheading');
  	$mb_pop_image = get_field('mb_pop_image');
  	$mb_pop_heading = get_field('mb_pop_heading');
  	$mb_pop_link = get_field('mb_pop_link');
  	?>

    <div class="main-banner main-banner-small" style="background-image: url('<?= $mb_background; ?>')">
        <div class="main-banner-i clearfix">
            <div class="main-banner__text">
                <div class="img-w"><img src="<?= $mb_icon_heading; ?>" alt=""/></div>
                <h2><?= $mb_heading; ?></h2>
                <p><?= $mb_subheading; ?></p>
            </div>
            <a href="<?= $mb_pop_link; ?>" class="main-banner__pop main-banner__pop_blue-bg">
                <p><?= $mb_pop_heading; ?></p>
                <div class="more">
                    <svg class="icon-arr-left" role="img" title="share-fb">
                        <use xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>


	<div class="search-results">
		<div class="search-results-i clearfix">
			<a href="#" class="show-filter">
				<svg class="icon-filter" role="img" title="icon-filter"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-filter"></use></svg>
            </a>
            <!-- FILTER / SEARCH COLUMN -->
            <div class="filter">
            	<div class="filter-i">
            		<div class="filter-top">
            			<p>REFINE YOUR SEARCH:
            				<a href="#" class="clear">CLEAR ALL
            					<svg class="icon-close-wh" role="img" title="icon-close-wh"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-close-wh"></use></svg>
            				</a>
            			</p>
            		</div>
                    <div class="filter-main">
                    	<div class="col">
                    		<div class="list">
                    			<h4 class="filter-title">Region</h4>
                    			<ul>
                    				<li class="active">
                    					<a href="#">All  (105)
                    						<svg class="icon-close-wh" role="img" title="icon-close-wh">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                    	<a href="#">CIS  (30)
                                            <svg class="icon-close-wh" role="img" title="icon-close-wh">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                    	<a href="#">Europe  (40)
                                    		<svg class="icon-close-wh" role="img" title="icon-close-wh">
                                    			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                                    		</svg>
                                    	</a>
                                    </li>
                                    <li>
                                    	<a href="#">Asia / Pacific  (25)
                                    		<svg class="icon-close-wh" role="img" title="icon-close-wh">
                                    			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                                    		</svg>
                                    	</a>
                                    </li>
                                    <li>
                                    	<a href="#">Americas / Atlantic  (5)
                                    		<svg class="icon-close-wh" role="img" title="icon-close-wh">
                                    			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                                    		</svg>
                                    	</a>
                                    </li>
                                    <li>
                                    	<a href="#">Africa  (5)
                                    		<svg class="icon-close-wh" role="img" title="icon-close-wh">
                                    			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                                    		</svg>
                                    	</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="list">
                            	<h4 class="filter-title">Categories</h4>
                            	<ul>
                            		<li>
                            			<a href="#">All  (105)
                            				<svg class="icon-close-wh" role="img" title="icon-close-wh">
                            					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                            				</svg>
                            			</a>
                            		</li>
                            		<li>
                            			<a href="#">Engineering  (20)
                            				<svg class="icon-close-wh" role="img" title="icon-close-wh">
                            					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                            				</svg>
                            			</a>
                            		</li>
                            		<li>
                            			<a href="#">Chemistry  (30)
                            				<svg class="icon-close-wh" role="img" title="icon-close-wh">
                            					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                            				</svg>
                            			</a>
                            		</li>
                            		<li>
                            			<a href="#">Mining  (15)
                            				<svg class="icon-close-wh" role="img" title="icon-close-wh">
                            					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                            				</svg>
                            			</a>
                            		</li>
                            		<li>
                            			<a href="#">Oil &amp; Gas (5)
                            				<svg class="icon-close-wh" role="img" title="icon-close-wh">
                            					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                            				</svg>
                            			</a>
                            		</li>
                            		<li>
                            			<a href="#">Fertilizers  (10)
                            				<svg class="icon-close-wh" role="img" title="icon-close-wh">
                            					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                            				</svg>
                            			</a>
                            		</li>
                            		<li>
                            			<a href="#">Logistics (15)
                            				<svg class="icon-close-wh" role="img" title="icon-close-wh">
                            					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                            				</svg>
                            			</a>
                            		</li>
                            		<li>
                            			<a href="#">Sales (3)
                            				<svg class="icon-close-wh" role="img" title="icon-close-wh">
                            					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                            				</svg>
                            			</a>
                            		</li>
                            		<li>
                            			<a href="#">Administration (2)
                            				<svg class="icon-close-wh" role="img" title="icon-close-wh">
                            					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                            				</svg>
                            			</a>
                            		</li>
                            	</ul>
                            </div>
                        </div>

                        <div class="col">
                        	<div class="list">
                        		<h4 class="filter-title">Business unit</h4>
                        		<ul>
                        			<li>
                        				<a href="#">All  (105)
                        					<svg class="icon-close-wh" role="img" title="icon-close-wh">
                        						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                        					</svg>
                        				</a>
                        			</li>
                        			<li>
                        				<a href="#"> EuroChem Agro  (40)
                        					<svg class="icon-close-wh" role="img" title="icon-close-wh">
                        						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                        					</svg>
                        				</a>
                        			</li>
                        			<li>
                        				<a href="#">   Lifosa  (20)
                        					<svg class="icon-close-wh" role="img" title="icon-close-wh">
                        						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                        					</svg>
                        				</a>
                        			</li>
                        			<li>
                        				<a href="#">  EuroChem Logistics  (10)
                        					<svg class="icon-close-wh" role="img" title="icon-close-wh">
                        						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                        					</svg>
                        				</a>
                        			</li>
                        			<li>
                        				<a href="#"> Projects  (15)
                        					<svg class="icon-close-wh" role="img" title="icon-close-wh">
                        						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                        					</svg>
                        				</a>
                        			</li>
                        			<li>
                        				<a href="#"> Repair &amp; Construction  (10)
                        					<svg class="icon-close-wh" role="img" title="icon-close-wh">
                        						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                        					</svg>
                        				</a>
                        			</li>
                        			<li>
                        				<a href="#"> Logistics  (10)
                        					<svg class="icon-close-wh" role="img" title="icon-close-wh">
                        						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                        					</svg>
                        				</a>
                        			</li>
                        		</ul>
                        	</div>

                        	<div class="mobile-clear">
                        		<a href="#" class="clear">CLEAR ALL
                        			<svg class="icon-close-wh" role="img" title="icon-close-wh">
                        				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="static/img/general/svgdefs.svg#icon-close-wh"></use>
                        			</svg>
                        		</a>
                        	</div>
                        </div>
                    </div>
                </div>
            </div><!-- END FILTER / SEARCH COLUMN -->

            <!-- END FILTER / SEARCH RESULTS -->
            <div class="results-list results-list-load">
            	<div class="news-room-w">
            		<div class="news-room" style="min-height: 878px; position: relative; height: 1344px;">
            			
            			<?php 
            			$posts = get_posts(array('numberposts' => -1,'post_type' => 'vacancy'));
            			foreach ( $posts as $post ) {
            				//TAGS
            				$posttags = get_the_tags($post->ID);

            				$ca_location =  get_field('ca_location', $post->ID);
            				$ca_description =  get_field('ca_description', $post->ID);
            				$ca_link =  get_permalink($post->ID);
            			?>

                        <div class="news-room__item">
                            <div class="news-room__item__text">
                                <p class="location">LOCATION: <?php echo $ca_location; ?></p>
                                <p class="title"><a href="<?php echo $ca_link; ?>"><?php echo $post->post_title; ?></a></p>
                                <p class="text__main"><?php echo $ca_description; ?></p>
                                <div class="current-tags-w">
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
                                </div>
                                <a href="<?php echo $ca_link; ?>" class="btn-round">View
                                    <svg class="icon-arr-left" role="img" title="share-fb">
                                        <use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
            			<?php	
            			}
            			?>

            		</div>
            	</div>
            </div><!-- END FILTER / SEARCH RESULTS -->


        </div>
    </div>

    <!-- ************** -->
    <!-- CONTACT BOTTOM -->
    <!-- ************** -->

    <?php get_template_part('templates/contact', 'contact'); ?>




<?php endwhile; ?>	