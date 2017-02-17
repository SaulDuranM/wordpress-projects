<?php
/**
 * Template Name: Mural
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php
	$dist_path = get_template_directory_uri() . '/dist/';
	$dist_path_t = get_template_directory_uri();  	
	?>
	<!-- MENU OVERLAY -->
    <?php get_template_part('templates/menu'); ?>

	<main class="content sections sec-mural">
		<!-- MENU -->
		<?php get_template_part('templates/menuoverlay'); ?>
		<!-- HOME FULL -->
		<div class="cortina">
            <div class="col-xs-12 logo-head"><img src="<?= $dist_path; ?>images/img-avierto-mural.png"></div>
            <div class="col-xs-12 bajar-img"><img src="<?= $dist_path; ?>images/bajar.png"></div>
            <div class="col-xs-12 bajar-txt"> BAJAR </div>
        </div>
        
        

        <div class="height-futbol align-in-center">
            <div class="container texto-align-actividades">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    Nuestro mural
                    <p>Conoce nuestras actividades, servicios y eventos, en un solo lugar.</p>
                    <span> <b>¡Vive la experiencia de ser Avierto!</b> </span>
                    
                </div>
            </div>
        </div>

        <div class="container-fluid sec-quienes content-quienes">
        	<!-- FILTROS -->
        	<div class="row filtros-sec-mural">
        		<div class="col-xs-2 filter" data-filter="filtro-all">
                    <input id="select-type-all" name="radio-set-1" type="radio" class="selector-type-all" checked="checked" />
                    <label for="select-type-all" class="label-type-all">Todos</label>
                </div>
                <div class="col-xs-2 filter" data-filter="filtro-futbol">
                    <input id="select-type-1" name="radio-set-1" type="radio" class="selector-type-1" />
                    <label for="select-type-1" class="label-type-1"><span>Fútbol</span><span>FÚT</span></label>
                </div>
                <div class="col-xs-2 filter" data-filter="filtro-actividades">
                    <input id="select-type-2" name="radio-set-1" type="radio" class="selector-type-2" />
                    <label for="select-type-2" class="label-type-2"><span>A la Carta</span><span>Carta</span></label>
                </div>
                <div class="col-xs-2 filter" data-filter="filtro-eventos">
                    <input id="select-type-4" name="radio-set-1" type="radio" class="selector-type-4" />
                    <label for="select-type-4" class="label-type-4"><span>Eventos</span><span>Eventos</span></label>
                </div>
                <div class="col-xs-2 filter" data-filter="filtro-promociones">
                    <input id="select-type-3" name="radio-set-1" type="radio" class="selector-type-3" />
                    <label for="select-type-3" class="label-type-3"><span>Promociones</span><span>Promo</span></label>
                </div>
            </div><!-- /row-flitros -->

            <?php if( have_rows('mural') ): ?>
            <div class="row images-sec-mural">
            	<ul class="items-filter">
            		<?php while( have_rows('mural') ): the_row(); 
            		$mur_descripcion = get_sub_field('mur_descripcion');
            		$mur_imagen = get_sub_field('mur_imagen');
            		$mur_tipo = get_sub_field('mur_tipo');
            		?>

            		<li class="col-xs-6 col-sm-4 on filtro-<?= $mur_tipo; ?>"><img class="img-responsive" src="<?= $mur_imagen; ?>"></li>
                   
                   <?php endwhile; ?>
                </ul> 
            </div>
        	<?php endif; ?>   

        </div>
	</main>	
    <!-- FOOTER -->
    <?php 
    set_query_var( 'color_bar_1', "color_footer_4");
    set_query_var( 'color_bar_2', "color_footer_4_st");
    get_template_part('templates/footer'); 
     ?>



<?php endwhile; ?>