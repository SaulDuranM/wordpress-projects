<?php
/*
Template name: Products
*/
get_header();
?>
<main id="main" class="site-main" role="main">
	<section class="page-header">
		<div id="banner" class="ux_banner " role="banner">
			<div class="inner inner-wrap animated flipInX start-anim" data-animate="flipInX">
	          <h1 class="entry-title"><?php the_title(); ?></h1>
	         </div> 
		</div>
		<div class="page-header-bottom"></div>	

		<?php if( has_excerpt() ) the_excerpt();?>
	</section> 

	<section class="content-page" id="content" role="main">
		<div class="content-page-content">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; // end of the loop. ?>
		</div>
		<div class="content-page-products">
			<div class="col-xs-4 col-sm-4 col-md-4">
				<div class="product-title">NON-PRIME</div>
				<div class="product-container">
					<div class="product-desc">
						Owner-occupied borrowers at least 2 years past their housing default
					</div>
					<div class="product-button" id="product-button_1">
						<div class="product-button-container">
							<div class="product-button-text">Start Here</div>
							<div class="product-button-icon"></div>
						</div>	
						
					</div>
					<!-- LIGHTBOX -->
					<div id="product-det-1" class="mfp-hide my-mfp-zoom-in lightbox-white" style="max-width:620px;padding:5px; margin: 0 auto;">
					   <div class="product-detail-container">
					   		<div class="product-detail-content">
					   			<div class="product-detail-close">Close</div>
					   			<div class="product-detail-title">NON-PRIME</div>
					   			<div class="product-detail-icon-container">
					   				<div class="product-detail-icon" style="background: url(<?php echo get_template_directory_uri(); ?>/img/_icon_house.png) no-repeat center center;"></div>
					   				<div class="product-detail-desc">
					   					<div class="product-detail-desc-title">Best for:</div>
					   					<div class="product-detail-desc-tx">
					   						<ul>
					   							<li>Consumer credit challenges with consistent housing history</li>
					   							<li>2+ years removed from housing default</li>
					   							<li>Income documented outside of QM – Bank Statements OK</li>
					   						</ul>
					   					</div>
					   					<div class="product-detail-btn-container">
					   						<div class="btn-outline-black">
												REQUEST INFORMATION
											</div>
					   					</div>
					   				</div>
					   			</div>
					   		</div>
					   </div>
					</div>
				</div>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4">
				<div class="product-title">RECENT HOUSING EVENT</div>
				<div class="product-container">
					<div class="product-desc">
						Owner-occupied borrowers with a housing default in the last 2 years
					</div>
					<div class="product-button" id="product-button_2">
						<div class="product-button-container">
							<div class="product-button-text">Start Here</div>
							<div class="product-button-icon"></div>
						</div>	
					</div>
					<!-- LIGHTBOX -->
					<div id="product-det-2" class="mfp-hide my-mfp-zoom-in lightbox-white" style="max-width:620px;padding:5px; margin: 0 auto;">
					   <div class="product-detail-container">
					   		<div class="product-detail-content">
					   			<div class="product-detail-close">Close</div>
					   			<div class="product-detail-title">RECENT HOUSING EVENT</div>
					   			<div class="product-detail-icon-container">
					   				<div class="product-detail-icon" style="background: url(<?php echo get_template_directory_uri(); ?>/img/_icon_house.png) no-repeat center center;"></div>
					   				<div class="product-detail-desc">
					   					<div class="product-detail-desc-title">Best for:</div>
					   					<div class="product-detail-desc-tx">
					   						<ul>
					   							<li>Generally good users of credit </li>
					   							<li>Limited Delinquencies</li>
					   							<li>Negatively impacted by housing crisis with the last 2 years (ie. foreclosure or bankruptcy)</li>
					   						</ul>
					   					</div>
					   					<div class="product-detail-btn-container">
					   						<div class="btn-outline-black">
												REQUEST INFORMATION
											</div>
					   					</div>
					   				</div>
					   			</div>
					   		</div>
					   </div>
					</div>


				</div>
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4">
				<div class="product-title">INVESTMENT PROPERTY</div>
				<div class="product-container">
					<div class="product-desc">
						Investor properties, foreign nationals, and multi-unit properties
					</div>
					<div class="product-button" id="product-button_3">
						<div class="product-button-container">
							<div class="product-button-text">Start Here</div>
							<div class="product-button-icon"></div>
						</div>	
						
					</div>
					<!-- LIGHTBOX -->
					<div id="product-det-3" class="mfp-hide my-mfp-zoom-in lightbox-white" style="max-width:620px;padding:5px; margin: 0 auto;">
					   <div class="product-detail-container">
					   		<div class="product-detail-content">
					   			<div class="product-detail-close">Close</div>
					   			<div class="product-detail-title">INVESTMENT PROPERTY</div>
					   			<div class="product-detail-icon-container">
					   				<div class="product-detail-icon" style="background: url(<?php echo get_template_directory_uri(); ?>/img/_icon_house.png) no-repeat center center;"></div>
					   				<div class="product-detail-desc">
					   					<div class="product-detail-desc-title">Best for:</div>
					   					<div class="product-detail-desc-tx">
					   						<ul>
					   							<li>Outside Agency Investor Guidelines</li>
					   							<li>Prior defaults</li>
					   							<li>10+ properties, LLC ownership, Foreign nationals OK</li>
					   						</ul>
					   					</div>
					   					<div class="product-detail-btn-container">
					   						<div class="btn-outline-black">
												REQUEST INFORMATION
											</div>
					   					</div>
					   				</div>
					   			</div>
					   		</div>
					   </div>
					</div>
				</div>
			</div>
		</div>
		
				
	</section>

	<section class="page-banner">
		<div id="page-banner-image">
			<div class="page-banner-container">
				<div class="page-banner-title">
					<h2>THE DEEPHAVEN PROCESS</h2>
				</div>
				<div class="page-banner-tx">
					Our customer-friendly process is designed to help our partners with the manual underwriting requirement associated with non-prime loans.
					<br><br>
					To learn more, please contact our Scenario Desk by sending an email to scenario@deephavenmortgage.com, or calling 704-628-4100.
				</div>
			</div>
		</div>
	</section>
</main>
 
<?php get_footer(); ?> 