<?php
/**
 * Template Name: Promociones
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php
	$dist_path = get_template_directory_uri() . '/dist/';
	$dist_path_t = get_template_directory_uri();  	
	?>

	<!-- MENU OVERLAY -->
    <?php get_template_part('templates/menu'); ?>

    <main class="content sections sec-comunidad">
    	<!-- MENU -->
		<?php get_template_part('templates/menuoverlay'); ?>

		<div class="fullHPromos">
			<div id="promosCarousel" class="carousel slide promos-carousel" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="<?= $dist_path; ?>images/promociones/promo-3.jpg">
						<div class="content-promos">
							<div class="col-xs-12 img-promos"><img class="img-responsive" src="<?= $dist_path; ?>images/img-avierto-promociones.png"></div>
							<div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3  form-promociones">
								<span class="col-xs-12 input" style="padding: 0;">
									<input class="input__field input__field--yoshiko" type="text" id="input-10" />
                                    <label class="input__label input__label--yoshiko" for="input-10">
                                    	<span class="input__label-content input__label-content--yoshiko" data-content="¿Que promociones te gustaría tener en Avierto?">¿Cuéntanos qué promociones te gustaría tener en Avierto?</span>
                                    </label>
                                </span>
                                <span class="col-xs-12 input" style="padding: 0;">
                                    <input class="input__field input__field--yoshiko" type="text" id="input-11" />
                                    <label class="input__label input__label--yoshiko" for="input-11">
                                        <span class="input__label-content input__label-content--yoshiko" data-content="Tu Correo">Tu Correo</span>
                                    </label>
                                </span>
                                <button type="submit" class="col-xs-12 btn btn-promos" id="promos">Enviar</button>
                                <div id="response" style="margin: 5px auto; color: #ffffff; font-size:14px; text-transform: uppercase; font-weight: 600; display: none;"></div>
                            </div><!-- /container -->
                        </div>
                    </div>
                    <?php if( have_rows('promocion') ): ?>
                    <?php while( have_rows('promocion') ): the_row(); 
            		$promo_imagen = get_sub_field('promo_imagen');
            		?>
                    <!-- SLIDER -->
                    <div class="item"><img src="<?= $promo_imagen; ?>"></div>

                    <?php endwhile; ?>
                    <?php endif; ?> 

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#promosCarousel" role="button" data-slide="prev">
                    <span class="s-control-left" aria-hidden="true">
                        <svg width="25" height="50">
                            <line x1="25" y1="0" x2="0" y2="25" style="stroke:rgb(255,255,255);stroke-width:2" />
                            <line x1="25" y1="50" x2="0" y2="24" style="stroke:rgb(255,255,255);stroke-width:2" />
                            Prev
                        </svg>
                    </span>
                </a>
                <a class="right carousel-control" href="#promosCarousel" role="button" data-slide="next">
                    <span class="s-control-right" aria-hidden="true">

                        <svg width="25" height="50">
                          <line x1="0" y1="0" x2="25" y2="25" style="stroke:rgb(255,255,255); stroke-width:2" />
                          <line x1="0" y1="50" x2="25" y2="24"  style="stroke:rgb(255,255,255); stroke-width:2" />
                          Next
                        </svg>
                    </span>
                </a>
            </div>
            
        </div>

    </main>


<?php endwhile; ?>