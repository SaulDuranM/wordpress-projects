<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _tk
 */

get_header(); ?>

	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
	<div class="main-content">
		<div class="container" id="proyecto-template">
		
			<div class="row">
				<div class="titulo-proyecto">
					<h1>Error 404</h1>
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-12">
					<div class="container-404">
						<h4>Los sentimos la página que buscas no existe.</h4>
						<!-- <p><?php _e( 'Nothing could be found at this location. Maybe try a search?', '_tk' ); ?></p>

						<?php get_search_form(); ?> -->
					</div>
				</div>
			</div>

			<div class="container">
		    	<div class="row">
		    		<div id="false"></div>
		    	</div>
		    </div>
		</div>

	</div>

<?php get_footer(); ?>