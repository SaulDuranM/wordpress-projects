<?php
/**
 * Template Name: Comunidad
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

		<div class="cortina">
			<div class="col-xs-12 logo-head"><img src="<?= $dist_path; ?>images/img-avierto-comunidad.png"></div>
			<div class="col-xs-12 bajar-img"><img src="<?= $dist_path; ?>images/bajar.png"></div>
			<div class="col-xs-12 bajar-txt"> BAJAR </div>
        </div>

        <div class="height-futbol align-in-center">
            <div class="container texto-align-comunidad">
                <div class="col-xs-10 col-xs-offset-1">
                    Últimas noticias
                    <p>Infórmate sobre nuestras actividades, servicios y promociones.</p>
                    <p>Entérate que piensan los clientes Avierto.</p>
                    <p>Conoce a nuestros visitantes distinguidos.</p>
                    <p>Descubre cómo ser vecinos Avierto.</p>
                    <span> <b>La comunidad lo hacemos todos cuando vivimos Avierto</b> </span>
                </div>
            </div>
        </div>

        <!-- CONTENT --> 

        <div class="row">
        	<div class="container anio-nota">
        		<div class="col-sm-12">
        			<h1>2016</h1>
                </div>
            </div>
        </div>

        <?php if( have_rows('comunidad') ): ?>
        <div class="row sec-notas-avierto">
        	<?php while( have_rows('comunidad') ): the_row(); 
        	$com_titulo = get_sub_field('com_titulo');
        	$com_informacion = get_sub_field('com_informacion');
        	$com_imagen = get_sub_field('com_imagen');
        	$com_fecha = get_sub_field('com_fecha');
        	$fecha = explode(",", $com_fecha);
        	$mesdia = explode(" ", $fecha[0]);
        	?>
        	<?php if($com_imagen): ?>
        	<div class="nota-avierto nota-with-image">
                <div class="back-img-nota">
                    <img src="<?=  $com_imagen; ?>">
                </div>
            <?php else: ?>
            <div class="nota-avierto">
            <?php endif; ?>	
                <div class="container">
                    <div class="col-sm-3 day-nota"><?= $mesdia[0]; ?><br><span><?= $mesdia[1]; ?></span></div>
                    <div class="col-sm-9">
                        <div class="title-nota">
                            <h2><?= $com_titulo; ?>
                                <a href="#" class="social-nota">
                                	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                		<path class="social-icon" d="M12,0C5.4,0,0,5.4,0,12s5.4,12,12,12s12-5.4,12-12S18.6,0,12,0z   M14.7,12.5h-2.5v8.2H10v-8.2H7.8l0-1.9H10c0,0,0-1.7,0-2.4C10,4.8,13.3,5,13.3,5h1.6l0,2.2h-1.6c-1.1,0-1,0.9-1,0.9v2.5h3  L14.7,12.5z"/>
                                	</svg>
                                </a>
                                <a href="#" class="social-nota">
                                	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">
                                		<path class="social-icon" d="M12,0C5.4,0,0,5.4,0,12s5.4,12,12,12s12-5.4,12-12S18.6,0,12,0z   M18.3,8.8c0,0.1,0,0.3,0,0.4c0,4.2-3.2,9.2-9.2,9.2c-1.8,0-3.5-0.5-5-1.5c0.2,0,0.5,0,0.8,0c1.5,0,2.9-0.5,4-1.4  c-1.4,0-2.6-0.9-3-2.2c0.2,0,0.4,0.1,0.6,0.1c0.3,0,0.6,0,0.8-0.1c-1.5-0.3-2.6-1.6-2.6-3.2v0c0.4,0.2,0.9,0.4,1.5,0.4  C5.4,9.9,4.8,9,4.8,7.8c0-0.6,0.2-1.1,0.4-1.6c1.6,1.9,4,3.2,6.7,3.4c0-0.2-0.1-0.5-0.1-0.7c0-1.8,1.4-3.2,3.2-3.2  c0.9,0,1.8,0.4,2.4,1c0.7-0.1,1.4-0.4,2-0.8c-0.2,0.8-0.8,1.4-1.4,1.8c0.6-0.1,1.3-0.2,1.8-0.5C19.4,7.8,18.9,8.3,18.3,8.8z"/>
                                	</svg>
                                </a>
                            </h2>
                        </div>
                        <div class="content-nota"><?= $com_informacion; ?></div>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>

        </div>
        <?php endif; ?> 

        <!-- FOOTER -->
        <?php
        set_query_var( 'color_bar_1', "color_footer_5");
        set_query_var( 'color_bar_2', "color_footer_5_st");
        get_template_part('templates/footer'); 
        ?>    

	</main>

<?php endwhile; ?>