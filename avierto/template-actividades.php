<?php
/**
 * Template Name: Actividades
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php
	$dist_path = get_template_directory_uri() . '/dist/';
	$dist_path_t = get_template_directory_uri();  	
	?>

	<!-- MENU OVERLAY -->
    <?php get_template_part('templates/menu'); ?>

    <main class="content sections sec-actividades">
        <div class="sec-actividades-bck"></div>
    	<!-- MENU -->
		<?php get_template_part('templates/menuoverlay'); ?>

        <!-- HOME FULL -->
        <div class="cortina">
            <div class="col-xs-12 logo-head"><img src="<?= $dist_path; ?>images/actividades-head.png"></div>
                <div class="col-xs-12 bajar-img"><img src="<?= $dist_path; ?>images/bajar.png"></div>
                <div class="col-xs-12 bajar-txt"> BAJAR </div>
        </div>

        <!-- HEADING -->
        <div class="height-futbol align-in-center" id="actividades-intro">
            <div class="container texto-align-actividades">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    Actividades a la Carta
                    <p>En Avierto tenemos la actividad que estás buscando. Consulta nuestra Carta y elige la que más se acomode a tus gustos y necesidades. Visita nuestras instalaciones, conoce a los instructores, solicita una clase prueba y vive una experiencia Avierto.</p>
                    <span> <b>¡Participa, inscríbete y descubre tu potencial!</b> </span>
                </div>
            </div>
        </div>

        <!-- ACTIVIDADES -->
        <?php if( have_rows('av_actividad') ): ?>
        <div class="row actividades-accordion">
            <div class="panel-group style-actividades act-defualt-color" id="accordion-actividades" role="tablist" aria-multiselectable="true">

            	<?php while( have_rows('av_actividad') ): the_row(); 
            	$av_act_actividad = get_sub_field('av_act_actividad');
            	$av_act_descripcion = get_sub_field('av_act_descripcion');
            	$av_act_imagen = get_sub_field('av_act_imagen');
            	$string = preg_replace('/\s+/', '', $av_act_actividad);
            	?>
                <!-- <div style="display:none; width:0; height:0;"> -->
                <div class="img_act_no_back" id="<?= $string; ?>">
                    <img src="<?= $av_act_imagen; ?>">
                </div>
            	<div class="panel panelActividad" data-back="<?= $av_act_imagen; ?>" data-bckcont="<?= $string; ?>">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion-actividades" href="#collapse<?= $string; ?>" aria-expanded="false" aria-controls="collapse<?= $string; ?>">
                        <div class="panel-heading" role="tab" id="heading<?= $string; ?>">
                            <h4 class="panel-title"><?= $av_act_actividad; ?></h4>
                        </div>
                    </a>
                    <div id="collapse<?= $string; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?= $string; ?>">
                        <div class="panel-body"><?= $av_act_descripcion; ?></div>
                    </div>
                </div>
                <?php endwhile; ?>




            </div><!-- /panel-group -->
        </div><!-- /row  -->
        <?php endif; ?>

        <div class="height-futbol align-in-center">
            <div class="container texto-align-actividades">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2">
                    Imparte tus cursos o talleres
                    <p>En Avierto también tenemos un espacio para que impartas tus cursos y talleres.<br>
                        Conoce nuestras instalaciones y pregunta por los horarios disponibles.</p>
                    <span> <b>¡Tú también puedes ser Avierto!</b> </span><br>
                </div>
            </div>
        </div>

        <!-- MURAL / INSTAGRAM -->
        <?php get_template_part('templates/muralinsta'); ?>


    </main>
    <!-- FOOTER -->
    <?php 
    set_query_var( 'color_bar_1', "color_footer_3");
    set_query_var( 'color_bar_2', "color_footer_3_st");
    get_template_part('templates/footer'); 
    ?>


<?php endwhile; ?>