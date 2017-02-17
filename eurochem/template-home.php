<?php
/**
 * Template Name: EuroChem Template Home
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php 
  	
  	$dist_path = get_template_directory_uri() . '/dist/';
  	$dist_path_t = get_template_directory_uri();
  	
  	global $wpdb;
	global $post;

	// TRANSLATION & HOME VARS
	$translations = pll_the_languages(array('raw'=>1));
	$home = get_field('ec_opt_home_version', 'options');
	$hversion = 'home';

	if($translations[1]['current_lang']){
		// SELECT HOME
		if($home == 'home_v1') $hversion = 'Home DE';
		if($home == 'home_v2') $hversion = 'Home V2 DE';
	}
	if($translations[2]['current_lang']){
		// SELECT HOME
		if($home == 'home_v1') $hversion = 'Home RU';
		if($home == 'home_v2') $hversion = 'Home V2 RU';
	} 
	if($translations[0]['current_lang']){
		// SELECT HOME
		if($home == 'home_v1') $hversion = 'Home';
		if($home == 'home_v2') $hversion = 'Home V2';
	}

	$str = "SELECT $wpdb->posts.* FROM $wpdb->posts WHERE post_title = '$hversion'";
	$result = $wpdb->get_results($str);
	foreach($result as $post):
		setup_postdata($post);
	endforeach;
	?>

  	<!-- *********** -->
  	<!-- MAIN SLIDER -->
  	<!-- *********** -->

	<?php if( have_rows('main_slider') ): ?>
		<div class="main-slider loading">

			<?php while( have_rows('main_slider') ): the_row(); 
			// vars
			$ms_image = get_sub_field('ms_image');
			$ms_text = get_sub_field('ms_text');
			$ms_title = get_sub_field('ms_title');
			$ms_title_font_size = get_sub_field('ms_title_font_size');
			$ms_text_font_size = get_sub_field('ms_text_font_size');
			?>

			<div class="slide-item" style="background-image: url('<?php echo $ms_image; ?>')">
		  		<div class="slide-text">
		  			<h1 style="font-size:<?php echo $ms_title_font_size; ?>px;"><?php echo $ms_title; ?></h1>
		  			<p style="font-size:<?php echo $ms_text_font_size; ?>px;"><?php echo $ms_text; ?></p>
		  		</div>
		  	</div>

			<?php endwhile; ?>
		</div>
	<?php endif; ?>


	<!-- ************** -->
	<!-- NEWS CONTAINER -->
	<!-- ************** -->

	<?php get_template_part('templates/news', 'news'); ?>	

	<!-- *************** -->
	<!-- PRODUCTS SLIDER -->
	<!-- *************** -->

	<?php if( have_rows('products_slider') ): ?>
		<div class="products-slider">
			<div class="products-slider-i loading">
			
				<?php while( have_rows('products_slider') ): the_row(); 
				// vars
				$ps_image_desktop = get_sub_field('ps_image_desktop');
				$ps_image_tablet = get_sub_field('ps_image_tablet');
				$ps_image_position = get_sub_field('ps_image_position');
				$ps_text_alignment = get_sub_field('ps_text_alignment');
				$ps_icon = get_sub_field('ps_icon');
				$ps_title = get_sub_field('ps_title');
				$ps_text = get_sub_field('ps_text');
				$ps_link = get_sub_field('ps_link');
				$ps_link_text = get_sub_field('ps_link_text');

				$ps_title_size = get_sub_field('ps_title_size');
				$ps_text_size = get_sub_field('ps_text_size');

				?>
				
				<?php if($ps_image_position === 'left') { ?>
				<div class="pr-slider__item tabletbg"  data-bgdesc="url('<?php echo $ps_image_desktop; ?>')" data-bgtablet="url('<?php echo $ps_image_tablet; ?>')">
				<?php } ?>

				<?php if($ps_image_position === 'cover') { ?>
				<div class="pr-slider__item bg-cover" style="background-image: url('<?php echo $ps_image_desktop; ?>')">
				<?php } ?>	

				<?php if($ps_image_position === 'right') { ?>
				<div class="pr-slider__item bg-right tabletbg"  data-bgdesc="url('<?php echo $ps_image_desktop; ?>')" data-bgtablet="url('<?php echo $ps_image_tablet; ?>')">
				<?php } ?>	

                    <div class="pr-slider__text <?php echo $ps_text_alignment; ?>">
                        <div class="pr-slider__text-i">
                            <div class="img-w">
                                <img class="icon-shovel" src="<?php echo $ps_icon; ?>" alt=""/>
                            </div>
                            <h3 style="font-size:<?php echo $ps_title_size; ?>px;"><?php echo $ps_title; ?></h3>
                            <p style="font-size:<?php echo $ps_text_size; ?>px;"><?php echo $ps_text; ?></p>
                            <a href="<?php echo $ps_link; ?>" class="btn-round"><?php echo $ps_link_text; ?>
                                <svg class="icon-arr-left" role="img" title="share-fb">
                                    <use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>


				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>


	<!-- *************** -->
	<!-- OUR VALUE CHAIN -->
	<!-- *************** -->


	<?php //if(get_field('field_name')): ?>
		<?php
		$ov_content_alignment =  get_field('ov_content_alignment');
		$ov_icon = get_field('ov_icon');
		$ov_title = get_field('ov_title');
		$ov_text = get_field('ov_text');
		$ov_title_size = get_sub_field('ov_title_size');
		$ov_text_size = get_sub_field('ov_text_size');
		//LINKS
		$ov_links_alignment = get_field('ov_links_alignment');
		//BACKGROUND
		$ov_image_size = get_field('ov_image_size');
		$ov_image_desktop = get_field('ov_image_desktop');
		$ov_image_mobile = get_field('ov_image_mobile');

		?>

		<div class="value-chain <?php echo $ov_image_size; ?>" data-bgdesc="url('<?php echo $ov_image_desktop; ?>')" data-bgtablet="url('<?php echo $ov_image_mobile; ?>')" style="background-image: url(<?php echo $ov_image_desktop; ?>);">
        <!--<div class="value-chain bg-cover" style="background-image: url('static/img/content/bg-1682x820-1.jpg')">-->
            <div class="value-chain-i">
                <div class="value-chain__main hc-content-alignment-<?php echo $ov_content_alignment; ?>">
                    <div class="value-chain__text">
                        <div class="img-w">
                            <img src="<?php echo $ov_icon; ?>" alt="">
                        </div>
                        <h3 style="font-size:<?php echo $ov_title_size; ?>px;"><?php echo $ov_title; ?></h3>
                        <p style="font-size:<?php echo $ov_text_size; ?>px;"><?php echo $ov_text; ?></p>
                    </div>

                    <?php if( have_rows('ov_links') ): ?>
					<ul class="hc-li-alignment-<?php echo $ov_links_alignment; ?>">
						<?php while( have_rows('ov_links') ): the_row(); 
						// vars
						$ov_link_text = get_sub_field('ov_link_text');
						$ov_link = get_sub_field('ov_link');
						?>
						<li><a href="<?php echo $ov_link; ?>"><?php echo $ov_link_text; ?></a></li>
						<?php endwhile; ?>
					</ul>
					<?php endif; ?>

                    <a href="#" class="btn-round">Find out more
                        <svg class="icon-arr-left" role="img" title="share-fb">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    <?php //endif; ?>







    <!-- *************** -->
	<!-- INVESTMENT CASE -->
	<!-- *************** -->
	<?php 
		$ic_icon = get_field('ic_icon');
		$ic_title = get_field('ic_title');
		$ic_text = get_field('ic_text');

		$ic_title_size = get_field('ic_title_size');
		$ic_text_size = get_field('ic_text_size');
		$ic_link_cta = get_field('ic_link_cta');
		$ic_diagonal_overlay = get_field('ic_diagonal_overlay');
		$ic_content_color = get_field('ic_content_color');
		$ic_link_cta_style = get_field('ic_link_cta_style');
		//BACKGROUND
		$ic_image_size = get_field('ic_image_size');
		$ic_image_desktop = get_field('ic_image_desktop');
		$ic_image_mobile = get_field('ic_image_mobile');
	?>
	<div class="investment-case <?php echo $ic_image_size; ?>" data-bgdesc="url('<?php echo $ic_image_desktop; ?>')" data-bgtablet="url('<?php echo $ic_image_mobile; ?>'')" style="background-image: url(<?php echo $ic_image_desktop; ?>);">
		<!--<div class="investment-case bg-cover" style="background-image: url('static/img/content/bg-1682x600-1.jpg')" >-->
		<div class="investment-case-i hc-diagonal-overlay-<?php echo $ic_diagonal_overlay; ?>">
			<div class="decor">
				<svg class="decor_i hc-diagonal-overlay-<?php echo $ic_diagonal_overlay; ?>-path" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
					<path d="M 0, 0 L 100, 0 L 0, 100 Z" stroke-width="0"></path>
				</svg>
			</div>
			<div class="investment-case__text">
				<div class="img-w"><img src="<?php echo $ic_icon; ?>" alt=""></div>
				<h3 class="hc-color-<?php echo $ic_content_color; ?>" style="font-size:<?php echo $ic_title_size; ?>px;"><?php echo $ic_title; ?></h3>
				<p class="hc-color-<?php echo $ic_content_color; ?>" style="font-size:<?php echo $ic_text_size; ?>px;"><?php echo $ic_text; ?></p>
				<a class="btn-round hc-btn-round-<?php echo $ic_link_cta_style; ?>" href="#"><?php echo $ic_link_cta; ?>
					<svg class="icon-arr-left" role="img" title="share-fb">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>


	<!-- ***************** -->
	<!-- GLOBAL OPERATIONS -->
	<!-- ***************** -->
	<?php
		$go_background_alignment =  get_field('go_background_alignment');
		$go_align = '';
		if($go_background_alignment == "left"){
			$go_align = 'gl-right';
		}
		$go_image_lens_1 = get_field('go_image_lens_1');
		$go_image_lens_2 = get_field('go_image_lens_2');
		$go_loup = get_field('go_loup');
		
		$go_content_alignment = get_field('go_content_alignment');	
		$go_icon = get_field('go_icon');
		$go_title = get_field('go_title');
		$go_text = get_field('go_text');

		$go_title_size = get_sub_field('go_title_size');
		$go_text_size = get_sub_field('go_text_size');
	?>
	<div class="global-operations <?php echo $go_align; ?> clearfix">
		<a href="media-centre.html" class="big-img-w">
			<div id="mlens_wrapper_0" style="width: 1226px;"><img src="<?php echo $go_image_lens_2; ?>" data-large="<?php echo $go_image_lens_1; ?>" alt="" data-id="mlens_0"></div>
		</a>
		<div class="global-operations__i hc-content-alignment-go-<?php echo $go_content_alignment; ?>">
			<div class="global-operations__text clearfix">
				<div class="img-w">
					<img src="<?php echo $go_icon; ?>" alt="">
				</div>
				<h3 style="font-size:<?php echo $go_title_size; ?>px;"><?php echo $go_title; ?></h3>
				<p style="font-size:<?php echo $go_text_size; ?>px;"><?php echo $go_text; ?></p>

				<?php if( have_rows('go_buttons') ): ?>
				<div class="btn-w">
					<?php while( have_rows('go_buttons') ): the_row(); 
					// vars
					$go_button = get_sub_field('go_button');
					$go_button_link = get_sub_field('go_button_link');
					?>
					<a href="<?php echo $go_button_link; ?>" class="btn-round"><?php echo $go_button; ?>
						<svg class="icon-arr-left" role="img" title="share-fb">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"></use>
						</svg>
					</a>
					<?php endwhile; ?>
				</div>
				<?php endif; ?>
				<div class="img-small-w">
					<img src="<?php echo $go_loup; ?>" alt="">
				</div>
			</div>
		</div>
	</div>


	<!-- ********* -->
	<!-- AT GLANCE -->
	<!-- ********* -->

	<?php 
		$ag_title = get_field('ag_title');
		$ag_icon = get_field('ag_icon');
		$ag_title_size = get_sub_field('ag_title_size');
	?>
	<div class="glance">
		<div class="img-w"><img src="<?php echo $ag_icon; ?>" alt=""></div>
		<h3 style="font-size:<?php echo $ag_title_size; ?>px;"><?php echo $ag_title; ?></h3>
		<div class="glance__items">
			<a href="#" class="btn-prev">
				<svg class="icon-prev" role="img" title="share-fb">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-prev-big"></use>
				</svg>
			</a>
			<a href="#" class="btn-next">
				<svg class="icon-prev" role="img" title="share-fb">
					<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-next-big"></use>
				</svg>
			</a>
			<?php if( have_rows('ag_columns') ): ?>
			<ul class="clearfix">
				<?php while( have_rows('ag_columns') ): the_row(); 
					// varr
				$ag_column_title = get_sub_field('ag_column_title');
				$ag_column_text = get_sub_field('ag_column_text');
				?>
				<li>
					<div class="glance__item">
						<p class="big-text"><?php echo $ag_column_title; ?></p>
						<p class="small-text"><?php echo $ag_column_text; ?></p>
					</div>
				</li>

				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>

	<!-- ********** -->
	<!-- SUST / CAR -->
	<!-- ********** -->
	<div class="sust-careers">
		<div class="sust-careers-i">
			<?php if( have_rows('suc_columns') ): ?>
			<ul>
				<?php while( have_rows('suc_columns') ): the_row(); 
					// varr
				$suc_column_title = get_sub_field('suc_column_title');
				$suc_column_text = get_sub_field('suc_column_text');
				$suc_column_icon = get_sub_field('suc_column_icon');
				$suc_column_button_link = get_sub_field('suc_column_button_link');
				$suc_title_size = get_sub_field('suc_title_size');
				$suc_text_size = get_sub_field('suc_text_size');

				?>
				<li>
					<div class="sust-careers__coll">
						<div class="img-w"><img src="<?php echo $suc_column_icon; ?>" alt=""></div>
						<h3 style="font-size:<?php echo $suc_title_size; ?>px;"><?php echo $suc_column_title; ?></h3>
						<p style="font-size:<?php echo $suc_text_size; ?>px;"><?php echo $suc_column_text; ?></p>
						<a href="<?php echo $suc_column_button_link; ?>" class="btn-round">Find out more
							<svg class="icon-arr-left" role="img" title="share-fb">
								<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"></use>
							</svg>
						</a>
					</div>
				</li>

				<?php endwhile; ?>
			</ul>
			<?php endif; ?>
		</div>
	</div>

	<!-- ************* -->
	<!-- REPORT CENTER -->
	<!-- ************* -->

	<div class="report-centre">
		<div class="report-centre-i">
			<div class="img-w"><img src="http://eurochem.instinctif.com/static/img/content/case.svg" alt=""></div>
			<h3>Reporting centre </h3>
			<div class="btn-report-w">
				<a href="#">
					<svg role="img" title="share-fb" class="icon-arr-down">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-down"></use>
					</svg>
				</a>
			</div>
		</div>
	</div>


	<!-- *********** -->
	<!-- CONTENT ROW -->
	<!-- *********** -->

	<?php if( have_rows('ec_content_row') ): ?>

	<?php 
		while( have_rows('ec_content_row') ): the_row(); 
			$ecr_feature_image = get_sub_field('ecr_feature_image');
			$ecr_feature_image_mobile = get_sub_field('ecr_feature_image_mobile');
			$ecr_feature_image_alignment = get_sub_field('ecr_feature_image_alignment');
			$ecr_image_align_size = '';
			if($ecr_feature_image_alignment == "left"){
				$ecr_image_align_size = 'bg-left tabletbg';
				$ecr_diagonal_overlay_align = 'left';
			}
			if($ecr_feature_image_alignment == "right"){
				$ecr_image_align_size = 'bg-right tabletbg';
			}
			if($ecr_feature_image_alignment == "bg-cover"){
				$ecr_image_align_size = 'bg-cover';
			}
			// CONTENT
			$ecr_icon = get_sub_field('ecr_icon');
			$ecr_headline = get_sub_field('ecr_headline');
			$ecr_text = get_sub_field('ecr_text');
			$ecr_content_alignment = get_sub_field('ecr_content_alignment');
			// DIAGONAL OVERLAY
			$ecr_diagonal_overlay = get_sub_field('ecr_diagonal_overlay');
			$ecr_diagonal_overlay_path = 'M 0, 0 L 100, 0 L 0, 100 Z';
			$ecr_diagonal_overlay_align = 'left';
			if($ecr_content_alignment == 'left'){
				$ecr_diagonal_overlay_align = 'left';
			}
			if($ecr_content_alignment == 'right'){
				$ecr_diagonal_overlay_path = 'M 0, 0 L 100, 0 L 100, 100 Z';
				$ecr_diagonal_overlay_align = 'right';
			}

			$ecr_headline_size = get_sub_field('ecr_headline_size');
			$ecr_text_size = get_sub_field('ecr_text_size');
			$ecr_content_color = get_sub_field('ecr_content_color');
			$ecr_row_height = get_sub_field('ecr_row_height');
			$ecr_cta_link =  get_sub_field('ecr_cta_link');
	?>
		<div class="content-row <?php echo $ecr_image_align_size; ?> content-row_size_<?php echo $ecr_row_height; ?> " data-bgdesc="url('<?php echo $ecr_feature_image; ?>')" data-bgtablet="url('<?php echo $ecr_feature_image_mobile; ?>'')" style="background-image: url(<?php echo $ecr_feature_image; ?>);">
			<div class="content-row__text content-row__text_a_<?php echo $ecr_content_alignment; ?>">
				<div class="img-w"><img src="<?php echo $ecr_icon; ?>" alt=""></div>
				<h3 class="hc-color-<?php echo $ecr_content_color; ?>" style="font-size:<?php echo $ecr_headline_size; ?>px;"><?php echo $ecr_headline; ?></h3>
				<p class="hc-color-<?php echo $ecr_content_color; ?>" style="font-size:<?php echo $ecr_text_size; ?>px;"><?php echo $ecr_text; ?></p>
				<a class="btn-round hc-btn-round-<?php echo $ic_link_cta_style; ?>" href="#"><?php echo $ecr_cta_link; ?>
					<svg class="icon-arr-left" role="img" title="share-fb">
						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"></use>
					</svg>
				</a>
			</div>
			<div class="content-row-i hc-diagonal-overlay-<?php echo $ecr_diagonal_overlay; ?> hc-diagonal-overlay-align-<?php echo $ecr_diagonal_overlay_align;?>">
				<div class="decor">
					<svg class="decor_i hc-diagonal-overlay-<?php echo $ecr_diagonal_overlay; ?>-path" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
						<path d="<?php echo $ecr_diagonal_overlay_path; ?>" stroke-width="0"></path>
					</svg>
				</div>
			</div>
		</div>		

	<?php 
	endwhile;	
	endif; ?>


<?php endwhile; ?>