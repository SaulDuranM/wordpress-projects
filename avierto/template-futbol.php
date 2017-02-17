<?php
/**
 * Template Name: Futbol
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php
	$dist_path = get_template_directory_uri() . '/dist/';
	$dist_path_t = get_template_directory_uri();
	?>

	<!-- MENU OVERLAY -->
    <?php get_template_part('templates/menu'); ?>

    <main class="content sections sec-futbol">
    	<!-- MENU -->
    	<?php get_template_part('templates/menuoverlay'); ?>
    	<!-- HOME FULL -->
    	<div class="cortina">
            <div class="row cortina-int"> 
                <div class="col-xs-12 logo-head"><img src="<?=$dist_path;?>images/img-avierto-futbol.png"></div>
                <div class="col-xs-12 scroll-futbol">
                    <a href="#scrollTorneos">Torneos</a>
                    <a href="#scrollAcademia">Academia</a>
                </div>
                <div class="col-xs-12 bajar-img bajar-futbol"><img src="<?=$dist_path;?>images/bajar.png"></div>
            </div>
        </div>

        <!-- -->
        <div class="height-futbol align-in-center" id="scrollTorneos">
            <div class="container texto-align-futbol">
                <div class="col-xs-10 col-xs-offset-1">
                    Torneos
                    <p>Participa en nuestros torneos de Fútbol 5.<br>Practica tu deporte favorito en el mejor lugar de la colonia Escandón, en un ambiente único, seguro y divertido.</p>
                    <span> <b>¡No esperes más e inscribe a tu equipo!</b> </span>
                </div>
            </div>
        </div>

        <div class="fullH80 bg-cancha-2">
            <div class="col-xs-12 heigth-100 horarios-fut" style="text-align: center; color: #fff;">
                <div class="info-alineado-1">
                    <div class="info-3-1">Juega Avierto</div>
                </div>
            </div>
            <div class="texto-in-list">
                <h2>Torneos</h2>
                <ul>
                    <li>Varoniles</li>
                    <li>Femeniles</li>
                    <li>Mixtos</li>
                    <li>Empresariales</li>
                    <li style="margin-top:5px;"><a href="contacto.html"><b>¡Inscríbete!</b></a></li>
                </ul>
            </div>
        </div>

        <!--<div class="row prox-torneos">
            <div class="color-fut align-in-center">
                <div class="container">
                    <h3>Varonil</h3>
                </div>
            </div>
            <div class="color-fut-1 align-in-center">
                <div class="container">
                    <h3>Femenil</h3>
                </div>
            </div>
            <div class="color-fut align-in-center">
                <div class="container">
                    <h3>Mixto</h3>
                </div>
            </div>
        </div>

        <div class="row title-section color-fut-3">
            <div class="col-xs-12">Torneos Empresariales</div>
        </div>-->

        <!-- ACADEMIA -->
        <div id="scrollAcademia" class="height-futbol align-in-center">
            <div class="container texto-align-futbol">
                <div class="col-xs-10 col-xs-offset-1">
                   Academia de Fútbol Infantil
                    <p>¿Te gusta el fútbol? ¿Te gustaría que tus hijos aprendan y disfruten este deporte en un ambiente agradable, que estén al día en las mejores técnicas deportivas y desarrollen su potencial? Visita la Academia de fútbol Avierto, platica con nuestros instructores, conoce nuestras instalaciones y forma parte de esta aventura.</p>
                    <span> <b>¡Inscribe a tus hijas e hijos de 6 a 11 años! </b> </span>
                </div>
            </div>
        </div>
        <div class="row info-fut-academia">
        	<div class="col-xs-12 heigth-100 horarios-fut">
        		<div class="info-alineado-1">
        			<div class="info-3-1">
        				Aprende fútbol jugando en Avierto.
        			</div>
        		</div>
        	</div>
        </div>
        <div class="row grid-info-fut color-fut-1">
            <div class="col-sm-4 fut-conocenos">
            	<div class="info-3-1 title-general-info">Conócenos
            		<img src="<?= $dist_path ?>images/line-grid.png">
            	</div>

            	<div class="info-4 ">
                    <span class="subtitle-info"><b>Nuestro objetivo</b></span><br><br>
                    Formar personas integras, que vivan el fútbol como una práctica saludable para su vida.<br><br>
                    <span class="subtitle-info"><b>Nuestra estrategia</b></span><br><br>
                    <ul class="list-bullet" style="text-align:left;">
                        <li>Un modelo de enseñanza del fútbol que integra la técnica deportiva y el desarrollo de valores: respeto, responsabilidad, tolerancia y solidaridad.</li>
                        <li>Personal capacitado y con experiencia en las áreas infantil y juvenil.</li>
                        <li>Entrenamiento dos veces a la semana, 2 horas cada día en una cancha profesional.</li>
                    </ul>
                    
                </div>
            </div>
            <div class="col-sm-4 fut-metodo">
            	<div class="info-3-1 title-general-info">Entrenamientos
            		<img src="<?= $dist_path ?>images/line-grid.png">
            	</div>
            	<div class="info-4 ">
                   Nuestros entrenamientos introducen al alumno al deporte y lo preparan para la práctica del fútbol mediante la aplicación de ejercicios y actividades lúdicas.<br><br>
                   Se diseñan tomando en cuenta los criterios del desarrollo infantil y se estructuran en las siguientes áreas:<br><br>
                   Acondicionamiento físico<br>
                   Coordinación motriz<br>
                   Introducción a la técnica de fútbol<br>
                   Trabajo en equipo<br>
                </div>

            </div>
            <div class="col-sm-4 fut-horario">
            	<div class="info-3-1 title-general-info">
                    Horarios
                    <img src="<?= $dist_path ?>images/line-grid.png">
                </div>
                <div class="canchita">
                    <div class="horarios">Lunes, Martes,<br> Miércoles y Jueves <br> de 4:30 a 6:00 pm.</div>
                </div>
                <span class="subtitle-info calibri-italic"><b>¡Inscribe a tus hijas e hijos de 6 a 11 años!</b></span>
            </div>
        </div>

        <!-- RENTA -->
        <div class="row title-section tit-color">
        	<div class="col-xs-12">Renta</div>
        </div>
        <div class="row info-fut-renta">
            <div class="col-xs-12 heigth-100 horarios-renta">
                <div class="info-alineado-1">
                    <div class="info-3-1">Renta Avierto para tu torneo o cascarita
                    </div> 
                </div>
            </div>
        </div>

        <!-- MURAL / INSTAGRAM -->
        <?php get_template_part('templates/muralinsta'); ?>
        
    </main>
    <!-- FOOTER -->

    <?php 
    set_query_var( 'color_bar_1', "color_footer_2");
    set_query_var( 'color_bar_2', "color_footer_2_st");
    get_template_part('templates/footer'); 
    ?>


<?php endwhile; ?>