<?php
/**
 * Template Name: Investor/Sustainability
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/content', 'page'); ?>
  <?php 
  	$dist_path = get_template_directory_uri() . '/dist/';
  	$dist_path_t = get_template_directory_uri();
  ?>

  	<!-- *************** -->
  	<!-- HEADING SECTION -->
  	<!-- *************** -->
  	<?php $rule = (get_field('hs_colour') == 'dark')? "color: #333;":'';
  	echo $rule;?>
  	<div class="main-banner main-banner-small" style="background-image: url('<?php echo get_field('hs_background_image')?>'); <?php echo $rule ?>">
  		<div class="main-banner-i clearfix">
  			<div class="main-banner__text">
  				<div class="img-w">
  					<img src="<?php echo get_field('hs_icon')?>" alt="">
  				</div>
  				<h2 style="<?php echo $rule?>"><?php echo get_field('hs_heading')?></h2>
  				<p style="<?php echo $rule?>"><?php echo get_field('hs_subtitle')?></p>
  			</div>
				<?php 
					$type = get_field('hs_cta_type');
					if($type=='link'){
						$link = get_field('hs_cta_link');
					}
					else{
						$link = get_field('hs_cta_download');
					}
				?>
  			<a href="<?php echo $link?>" class="main-banner__pop">
  				<div class="img-w">
  					<img src="<?php echo get_field('hs_cta_icon')?>" alt=""/>
  				</div>
  				<p><?php echo get_field('hs_cta_text')?></p>
  				<div class="more">
  					<svg class="icon-arr-left" role="img" title="share-fb">
  						<use xlink:href="<?php echo $dist_path?>images/general/svgdefs.svg#icon-arr-left"></use>
  					</svg>
  				</div>
  			</a>
  		</div>
  	</div>

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
	<?php if(!get_field('hide_news')):?>
		<?php get_template_part('templates/news', 'news'); ?>	
	<?php endif;?>

	<!-- *********************************** -->
	<!-- INVESTOR THREE COLUMN CONTENT LINKS -->
	<!-- *********************************** -->

	<div class="promo-panel">
		<div class="promo-panel-i clearfix">
			<?php if( have_rows('content_panel') ): ?>
				<?php while( have_rows('content_panel') ): the_row();
				$panel_type = get_sub_field('panel_type');
				?>
				<div class="promo-panel-item" style="height: 334px;">
					<?php if($panel_type == 'Content'):?>
						<?php
						$icon = get_sub_field('investor_link_icon');
						$headline = get_sub_field('investor_link_headline');
						$subtitle = get_sub_field('investor_link_subtitle');
						$link = get_sub_field('investor_link');
						$cta = get_sub_field('investor_cta_text');
						?>
						<div class="img-w">
							<img src="<?php echo $icon ?>" alt="">
						</div>
						<h3><?php echo $headline?></h3>
						<p><?php echo $subtitle?></p>
						<a href="<?php echo $link?>" class="btn-round"><?php echo $cta?>
							<svg class="icon-arr-left" role="img" title="share-fb">
								<use xlink:href="<?php echo $dist_path?>images/general/svgdefs.svg#icon-arr-left"></use>
							</svg>
						</a>
					<?php else:?>
						<div class="pp-share">
							<div class="pp-share__item share-tw">
								<a href="#">
									<svg role="img" title="share-fb" class="icon">
										<use xlink:href="<?php echo $dist_path?>images/general/svgdefs.svg#icon-share-tw2"></use>
									</svg>
									<span>Twitter</span>
								</a>
							</div>
							<div class="pp-share__item share-fb">
								<a href="#">
									<svg role="img" title="share-fb" class="icon">
										<use xlink:href="<?php echo $dist_path?>images/general/svgdefs.svg#icon-share-fb2"></use>
									</svg>
									<span>Facebook</span>
								</a>
							</div>
							<div class="pp-share__item share-in">
								<a href="#">
									<svg role="img" title="share-fb" class="icon">
										<use xlink:href="<?php echo $dist_path?>images/general/svgdefs.svg#icon-share-in2"></use>
									</svg>
									<span>LinkedIn</span>
								</a>
							</div>
							<div class="pp-share__item share-yutube">
								<a href="#">
									<svg role="img" title="share-fb" class="icon">
										<use xlink:href="<?php echo $dist_path?>images/general/svgdefs.svg#icon-share-this2"></use>
									</svg>
									<span>Youtube</span>
								</a>
							</div>
						</div>
					<?php endif;?>
				</div>
			<?php endwhile; ?>
		<?php endif;?>
	</div>
</div>

	<!-- **************************** -->
	<!-- INVESTOR TWO COLUMN CAROUSEL -->
	<!-- **************************** -->
	<div class="projectnews-slider">
		<div class="projectnews-slider-items">
			<?php if( have_rows('investor_carousel_slide') ): ?>
				<?php while( have_rows('investor_carousel_slide') ): the_row();?>
					<div class="projectnews-slider__item">
						<div class="projectnews-slider__item-i clearfix">
							<?php if( have_rows('slide_sections') ): ?>
								<?php while( have_rows('slide_sections') ): the_row();?>
									<?php
									$icon = get_sub_field('icon');
									$headline = get_sub_field('headline');
									$subtitle  = get_sub_field('subtitle');
									$link = get_sub_field('page_link');
									$image = get_sub_field('image');
									?>
									<div class="ns__coll">
										<img src="<?php echo $icon ?>" alt="">
										<p class="ns__coll__title" style="height: 96px;"><?php echo $headline ?></p>
										<p class="ns__coll__title"><?php echo $subtitle ?></p>
										<div class="img-w">
											<img src="<?php echo $image ?>" alt="">
										</div>
									</div>
								<?php endwhile;?>
							<?php endif;?>
						</div>
					</div>
				<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>
	

	<!-- **************************** -->
	<!-- INVESTOR TWO COLUMN DOWNLOAD -->
	<!-- **************************** -->
	<div class="facts">
		<div class="facts-i">
			<div class="facts-main ">
				<?php if( have_rows('investor_download_links') ): ?>
					<?php while( have_rows('investor_download_links') ): the_row();?>
						<?php
						$title = get_sub_field('link_title');
						$image = get_sub_field('link_image');
						$download_link = get_sub_field('download_link');
						$cta_text = get_sub_field('cta_text');
						$cta_link = get_sub_field('cta_link');
						?>
						<div class="facts-main__coll">
							<h3 style="height: 34px;"><?php echo $title?></h3>
							<div class="img-w">
								<img src="<?php echo $image ?>" alt="">
							</div>
							<div class="btn-w">
								<a href="<?php echo $cta_link?>" class="btn-round"><?php echo $cta_text?>
									<svg class="icon-arr-left" role="img" title="share-fb">
										<use xlink:href="<?php echo $dist_path?>images/general/svgdefs.svg#icon-arr-left"></use>
									</svg>
								</a>
								<a href="<?php echo $download_link?>" class="btn-round">Download
									<svg class="icon-arr-down" role="img" title="share-fb">
										<use xlink:href="<?php echo $dist_path?>images/general/svgdefs.svg#icon-arr-down"></use>
									</svg>
								</a>
							</div>
						</div>
					<?php endwhile;?>
				<?php endif;?>
			</div>
		</div>
	</div>

	<!-- ************************** -->
	<!-- INVESTOR FOUR COLUMN MIXED -->
	<!-- ************************** -->

	<div class="dnlbox">
		<div class="dnlbox-i clearfix">
			<a href="#" class="btn-prev">
				<svg class="icon-prev" role="img" title="share-fb">
					<use xlink:href="static/img/general/svgdefs.svg#icon-prev-big"></use>
				</svg>
			</a>
			<a href="#" class="btn-next">
				<svg class="icon-prev" role="img" title="share-fb">
					<use xlink:href="static/img/general/svgdefs.svg#icon-next-big"></use>
				</svg>
			</a>
			<div class="dnlbox__items">
				<?php if(have_rows('investor_mixed_columns')):?>
					<?php while(have_rows('investor_mixed_columns')): the_row();?>
						<?php
							$type = get_sub_field('panel_type');
							$icon = get_sub_field('investor_panel_icon');
							$heading = get_sub_field('investor_panel_heading');
							$cta = get_sub_field('investor_link_cta');
							if($type == 'Email'){
								$cta = 'Sign up';
							}
							if($type == 'Download'){
								$link = get_sub_field('investor_download');
							}
							if($type == 'Link'){
								$link = get_sub_field('investor_link');
							}

						?>
						<div class="dnlbox__item">
							<div class="img-w">
								<img src="<?php echo $icon?>" alt="">
							</div>
							<p><?php echo $heading?></p>
							<?php if($type=='Email'):?>
									<?php gravity_form(1, true, true, false, false, '' ,false);?>
									<style type="text/css">
									.btn-round-gray{
										background-color: white;
									}
									</style>
								<script>
								jQuery(document).ready(function(){
									$('.gform_heading, .gfield_label').remove();
									$('.ginput_container').addClass('input-item');
									$('.ginput_container').parent().addClass('input-row');
									$('.ginput_container input').removeClass('medium').attr('id', 'email').attr('placeholder', 'Your e-mail address');
									$('#gform_submit_button_1').attr('value', 'Sign me up').addClass('btn-round btn-round-gray').parent().removeClass('gform_footer').css({textAlign: 'center'});
								});
								</script>
							<?php else:?>
							<a href="<?php echo $link?>" class="btn-round btn-round-gray"><?php echo $cta?>
								<svg class="icon-arr-down" role="img" title="share-fb">
									<use xlink:href="<?php echo $dist_path?>images/general/svgdefs.svg#icon-arr-down"></use>
								</svg>
							</a>
							<?php endif;?>
						</div>
					<?php endwhile;?>
				<?php endif;?>
			</div>
		</div>
	</div>

	<!-- *************** -->
	<!-- INVESTMENT CASE -->
	<!-- *************** -->
	<?php if(get_field('ic_title')&&get_field('ic_text')):?>
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
<?php endif;?>



	<!-- ***************** -->
	<!-- GLOBAL OPERATIONS -->
	<!-- ***************** -->
	<?php if(get_field('go_title')):?>
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
	<?php endif;?>

	<!-- ****************************** -->
	<!-- SUSTAINABILITY DOUBLE CAROUSEL -->
	<!-- ****************************** -->

	<div class="land-sliders">
		<div class="land-sliders-i clearfix">
			<?php if(have_rows('carousels')):?>
				<?php while(have_rows('carousels')): the_row();?>
					<div class="land-sliders__coll">
						<div class="info-slider">
							<?php if(have_rows('carousel')):?>
								<?php while(have_rows('carousel')): the_row();?>
									<?php 
									$icon = get_sub_field('icon');
									$headline = get_sub_field('headline');
									$subtitle = get_sub_field('subtitle');
									$link = get_sub_field('cta_link');
									$cta = get_sub_field('cta_text');
									?>
									<div class="info-slider__item">
										<div class="img-w">
											<img class="icon-shovel" src="<?php echo $icon?>" alt=""/>
										</div>
										<h3><?php echo $headline?></h3>
										<p><?php echo $subtitle?></p>
										<a href="<?php echo $link?>" class="btn-round"><?php echo $cta?>
											<svg class="icon-arr-left" role="img" title="share-fb">
												<use xlink:href="<?php echo $dist_path?>images/general/svgdefs.svg#icon-arr-left"></use>
											</svg>
										</a>
									</div>
								<?php endwhile;?>
							<?php endif;?>
						</div>
					</div>
				<?php endwhile;?>
			<?php endif;?>
		</div>
	</div>

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


	<?php if(get_field('ov_title')&&get_field('ov_text')): ?>
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

    <?php endif; ?>



	


	<!-- ********* -->
	<!-- AT GLANCE -->
	<!-- ********* -->
	<?php if(get_field('ag_title')):?>

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
<?php endif;?>

	<!-- ********** -->
	<!-- SUST / CAR -->
	<!-- ********** -->
	<?php echo get_field('sust_career_show')?>
	<?php if (get_field('sust_career_show')):?>
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
<?php endif;?>

	<!-- ************* -->
	<!-- REPORT CENTER -->
	<!-- ************* -->
<?php if (get_field('show_report_center')):?>
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
<?php endif;?>

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
	?>
		<div class="content-row <?php echo $ecr_image_align_size; ?> content-row_size_<?php echo $ecr_row_height; ?> " data-bgdesc="url('<?php echo $ecr_feature_image; ?>')" data-bgtablet="url('<?php echo $ecr_feature_image_mobile; ?>'')" style="background-image: url(<?php echo $ecr_feature_image; ?>);">
			<div class="content-row__text content-row__text_a_<?php echo $ecr_content_alignment; ?>">
				<div class="img-w"><img src="<?php echo $ecr_icon; ?>" alt=""></div>
				<h3 class="hc-color-<?php echo $ecr_content_color; ?>" style="font-size:<?php echo $ecr_headline_size; ?>px;"><?php echo $ecr_headline; ?></h3>
				<p class="hc-color-<?php echo $ecr_content_color; ?>" style="font-size:<?php echo $ecr_text_size; ?>px;"><?php echo $ecr_text; ?></p>
				<a class="btn-round hc-btn-round-<?php echo $ic_link_cta_style; ?>" href="#"><?php echo $ic_link_cta; ?>
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