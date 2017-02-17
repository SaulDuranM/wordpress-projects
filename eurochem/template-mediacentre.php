<?php
/**
 * Template Name: EuroChem MediaCentre
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

	<div class="main-banner" style="background-image: url('<?php echo $mb_background; ?>')">
		<div class="main-banner-i clearfix">
			<div class="main-banner__text">
				<div class="img-w"><img src="<?php echo $mb_icon_heading; ?>" alt=""/></div>
				<h2><?php echo $mb_heading; ?></h2>
				<p><?php echo $mb_subheading; ?></p>
			</div>
			<a href="<?php echo $mb_pop_link; ?>" class="main-banner__pop">
				<div class="img-w"><img src="<?php echo $mb_pop_image; ?>" alt=""/></div>
				<p><?php echo $mb_pop_heading; ?></p>
				<div class="more">
					<svg class="icon-arr-left" role="img" title="share-fb">
						<use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/>
					</svg>
				</div>
			</a>
		</div>
	</div>

	<!-- ************** -->
	<!-- NEWS CONTAINER -->
	<!-- ************** -->

	<?php get_template_part('templates/news', 'news'); ?>



	<!-- *********** -->
	<!-- PROMO PANEL -->
	<!-- *********** -->

	<?php if( have_rows('prpn_panel_column') ): ?>
	<div class="promo-panel">
		<div class="promo-panel-i clearfix">

			<?php
			while( have_rows('prpn_panel_column') ): the_row();
				$panel_type = get_sub_field('prpn_panel_type');
				switch ($panel_type) {
				    case "item":
				    	 // vars
						$prpn_item_icon = get_sub_field('prpn_item_icon');
						$prpn_item_heading = get_sub_field('prpn_item_heading');
						$prpn_item_subheading = get_sub_field('prpn_item_subheading');
						$prpn_item_cta = get_sub_field('prpn_item_cta');
						?>
						<div class="promo-panel-item">
							<div class="img-w"><img src="<?php echo $prpn_item_icon; ?>" alt=""/></div>
							<h3><?php echo $prpn_item_heading; ?></h3>
							<p><?php echo $prpn_item_subheading; ?></p>
							<a href="#" class="btn-round"><?php echo $prpn_item_cta; ?>
								<svg class="icon-arr-left" role="img" title="share-fb">
									<use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/>
								</svg>
							</a>
						</div>
					<?php					
				    break;
				    case "contact":
				    	// vars
						$prpn_contact_name = get_sub_field('prpn_contact_name');
						$prpn_contact_post = get_sub_field('prpn_contact_post');
						$prpn_contact_email = get_sub_field('prpn_contact_email');
						$prpn_contact_phone = get_sub_field('prpn_contact_phone');
				    ?>
				    	<div class="promo-panel-item">
							<div class="img-w"><img src="<?php echo $dist_path; ?>images/general/icon-inv-cont.svg" alt=""/></div>
							<h3>Media contact</h3>
							<p class="name"><?php echo $prpn_contact_name; ?></p>
							<p class="post"><?php echo $prpn_contact_post; ?></p>
							<p class="email"><a href="mailto:<?php echo $prpn_contact_email; ?>">E-mail: <?php echo $prpn_contact_email; ?></a></p>
							<p class="tel">Tel: <?php echo $prpn_contact_phone; ?></p>
						</div>

				    <?php
				    break;
				    case "social":
				    ?>
				    	<div class="promo-panel-item">
							<div class="pp-share">
								<div class="pp-share__item share-tw">
									<a href="#"><svg role="img" title="share-fb" class="icon"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-share-tw2"/></svg><span>Twitter</span></a>
								</div>
								<div class="pp-share__item share-fb">
									<a href="#"><svg role="img" title="share-fb" class="icon"><use xlink:href="<?php echo $dist_path; ?>images/svgdefs.svg#icon-share-fb2"/></svg><span>Facebook</span></a>
								</div>
								<div class="pp-share__item share-in">
									<a href="#"><svg role="img" title="share-fb" class="icon"><use xlink:href="<?php echo $dist_path; ?>images/svgdefs.svg#icon-share-in2"/></svg><span>LinkedIn</span></a>
								</div>
								<div class="pp-share__item share-yutube">
									<a href="#"><svg role="img" title="share-fb" class="icon"><use xlink:href="<?php echo $dist_path; ?>images/svgdefs.svg#icon-share-this2"/></svg><span>Youtube</span></a>
								</div>
							</div>
						</div>

				    <?php
				    break;
				}
				?>	
			<?php endwhile; ?>
		</div>
	</div>
	<?php endif;?>

	<!-- ************ -->
	<!-- PROJECT NEWS -->
	<!-- ************ -->

	<?php //if( get_field('mc_pn_background_image') ): ?>
	<?php 
  	
  	$mc_pn_background_image =  get_field('mc_pn_background_image');
  	$mc_pn_background_image_mobile = get_field('mc_pn_background_image_mobile');
  	$mc_pn_heading_icon =  get_field('mc_pn_heading_icon');
  	$mc_pn_heading = get_field('mc_pn_heading');
  	$mc_pn_content_heading = get_field('mc_pn_content_heading');
  	?>
	<div class="projectnews tabletbg" data-bgdesc="url('<?php echo $mc_pn_background_image; ?>')" data-bgtablet="url('<?php echo $mc_pn_background_image_mobile; ?>')">
		<div class="projectnews-i">
			<div class="land__title">
				<div class="img-w"><img src="<?php echo $mc_pn_heading_icon; ?>" alt=""/></div>
				<h3><?php echo $mc_pn_heading; ?></h3>
			</div>
			<div class="projectnews__text">
				<h4><?php echo $mc_pn_content_heading; ?></h4>
				<div class="btn-w">
					<?php if( have_rows('mc_pn_ctas') ):
					while( have_rows('mc_pn_ctas') ): the_row(); 
					$mc_pn_cta_heading = get_sub_field('mc_pn_cta_heading');
					$mc_pn_cta_link = get_sub_field('mc_pn_cta_link');
					?>
					<a href="<?php echo $mc_pn_cta_link; ?>" class="btn-round btn-round-white"><?php echo $mc_pn_cta_heading; ?>
						<svg class="icon-arr-left" role="img" title="share-fb">
							<use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/>
						</svg>
					</a>
					<?php endwhile; ?>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
	<?php //endif;?>


	<!-- ***** -->
	<!-- FACTS -->
	<!-- ***** -->

	<?php //if( get_field('mc_ff_heading_icon') ): ?>
	<?php 
  	
  	$mc_ff_heading_icon =  get_field('mc_ff_heading_icon');
  	$mc_ff_heading = get_field('mc_ff_heading');
  	$mc_ff_columns =  get_field('mc_ff_columns');

  	?>
	<div class="facts">
		<div class="facts-i">
			<div class="land__title">
				<div class="img-w"><img src="<?php echo $mc_ff_heading_icon;?>" alt=""/></div>
				<h3><?php echo $mc_ff_heading;?></h3>
			</div>
			<div class="facts-main ">
				<?php
				if( have_rows('mc_ff_columns') ):
				while( have_rows('mc_ff_columns') ): the_row(); 
				$mc_ff_col_heading = get_sub_field('mc_ff_col_heading');
				$mc_ff_col_th = get_sub_field('mc_ff_col_th');
				?>

				<div class="facts-main__coll">
					<h3><?php echo $mc_ff_col_heading;?></h3>
					<div class="img-w"><img src="<?php echo $mc_ff_col_th;?>" alt=""/></div>
					<div class="btn-w">
						<?php
						if( have_rows('mc_ff_col_ctas') ):
						while( have_rows('mc_ff_col_ctas') ): the_row(); 
						$mc_ff_col_ctas_type = get_sub_field('mc_ff_col_ctas_type');
						$mc_ff_col_ctas_heading = get_sub_field('mc_ff_col_ctas_heading');
						switch ($mc_ff_col_ctas_type) {
				    	case "link":
					    	$mc_ff_col_ctas_link = get_sub_field('mc_ff_col_ctas_link');
							?>
							<a href="<?php echo $mc_ff_col_ctas_link; ?>" class="btn-round"><?php echo $mc_ff_col_ctas_heading;?>
								<svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/></svg>
							</a>
						<?php 
						 break;
						 case "download":
							 $mc_ff_col_ctas_file = get_sub_field('mc_ff_col_ctas_file');
							 ?>
							 <a href="<?php echo $mc_ff_col_ctas_file; ?>" class="btn-round"><?php echo $mc_ff_col_ctas_heading;?>
								<svg class="icon-arr-down" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-down"/></svg>
							</a>
						 <?php
						 break;
						}	
						?>
						<?php endwhile; ?>
						<?php endif;?>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif;?>
			</div>
		</div>
	</div>
	<?php //endif;?>

    <!-- ******* -->
	<!-- DNL BOX -->
	<!-- ******* -->    

	<?php if( have_rows('mc_db_columns') ): ?>
    <div class="dnlbox">
    	<div class="dnlbox-i clearfix">
    		<a href="#" class="btn-prev">
    			<svg class="icon-prev" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-prev-big"/></svg>
    		</a>
    		<a href="#" class="btn-next">
    			<svg class="icon-prev" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-next-big"/></svg>
    		</a>
    		<div class="dnlbox__items">
    			<?php
				while( have_rows('mc_db_columns') ): the_row();
				$mc_db_heading_icon = get_sub_field('mc_db_heading_icon');
				$mc_db_heading = get_sub_field('mc_db_heading');
				$mc_db_file = get_sub_field('mc_db_file');
				?>
    			<div class="dnlbox__item">
    				<div class="img-w"><img src="<?php echo $mc_db_heading_icon; ?>" alt=""/></div>
    				<p><?php echo $mc_db_heading; ?></p>
    				<a href="<?php echo $mc_db_file; ?>" class="btn-round btn-round-gray">Download
    					<svg class="icon-arr-down" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-down"/></svg>
    				</a>
    			</div>
    			<?php endwhile; ?>
    		</div>
    	</div>
    </div>
    <?php endif;?>    




<?php endwhile; ?>	