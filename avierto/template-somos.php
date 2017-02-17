<?php
/**
 * Template Name: Somos
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php
	$dist_path = get_template_directory_uri() . '/dist/';
	$dist_path_t = get_template_directory_uri();  	
	?>

    <!-- MENU OVERLAY -->
    <?php get_template_part('templates/menu'); ?>


	<main class="content sections sec-quienes">
		<!-- MENU -->
		<?php get_template_part('templates/menuoverlay'); ?>

        <!-- HOME FULL -->
        <div class="cortina">
            <div class="col-xs-12 logo-head"><img src="<?= $dist_path; ?>images/img-avierto-somos.png"></div>
            <div class="col-xs-12 bajar-img"><img src="<?= $dist_path; ?>images/bajar.png"></div>
            <div class="col-xs-12 bajar-txt"> BAJAR </div>
        </div> 

        <!-- CONTENIDO -->
        <div class="container-fluid sec-quienes content-quienes">
            <div class="fullH bg-cancha-1 align-in-center">
                <div class="container texto-somos">
                    La Victoria es de todos cuando juegas aVierto
                </div>
            </div>
            
            <div class="fullH80 bg-cancha-2">
                <div class="texto-in-list">
                    <h2>Organizamos para ti</h2>
                    <ul>
                        <li>Torneos varoniles</li>
                        <li>Torneos femeniles</li>
                        <li>Torneos mixtos</li>
                        <li>Torneos empresariales</li>
                        <li>Cascaritas</li>
                        <li style="margin-top:5px;"><a href="contacto.html"><b>¡Inscríbete!</b></a></li>
                    </ul>
                </div>
            </div>
            
            <!-- SLIDER 1 -->
            <div id="somosCarousel" class="carousel slide somos-carousel" data-ride="carousel">
                <div class="texto-in-list">
                    <h2>Nuestras instalaciones</h2>
                    <ul>
                        <li>Cancha de futbol5</li>
                        <li>Pasto sintético monfilamento<br> de última generación</li>
                        <li>Lámparas LEDS</li>
                    </ul>
                </div>

                <div class="carousel-inner" role="listbox">
                    <div class="item active"><img src="<?= $dist_path; ?>images/somos/img-slide-1.jpg"></div>
                    <div class="item"><img src="<?= $dist_path; ?>images/somos/img-slide-2.jpg"></div>
                    <div class="item"><img src="<?= $dist_path; ?>images/somos/img-slide-3.jpg"></div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#somosCarousel" role="button" data-slide="prev">
                    <span class="s-control-left" aria-hidden="true">
                        <svg height="90" width="35">
                          <line x1="35" y1="0" x2="0" y2="45" style="stroke:rgb(255,255,255);stroke-width:2" />
                          <line x1="35" y1="90" x2="0" y2="44" style="stroke:rgb(255,255,255);stroke-width:2" />
                          Prev
                        </svg>
                    </span>
                </a>
                <a class="right carousel-control" href="#somosCarousel" role="button" data-slide="next">
                    <span class="s-control-right" aria-hidden="true">
                        <svg height="90" width="35">
                          <line x1="0" y1="0" x2="35" y2="45" style="stroke:rgb(255,255,255); stroke-width:2" />
                          <line x1="0" y1="90" x2="35" y2="44"  style="stroke:rgb(255,255,255); stroke-width:2" />
                          Next
                        </svg>
                    </span>
                </a>
            </div>
            
            <!-- END SLIDER 1 -->

            <div class="fullH bg-escalera align-in-center">
                <div class="container texto-somos">
                    El juego es esencial para compartir Avierto
                </div>
            </div>

            <div class="fullH80 bg-vestidores align-in-center">
                <div class="container texto-somos">
                    Todos los servicios a tu alcance en el mismo lugar
                </div>
                <div class="col-xs-6 texto-somos txt-left">
                    <h3>Área de calentamiento</h3>
                </div>
                <div class="col-xs-6 texto-somos txt-right">
                    <h3>Vestidores</h3>                    
                </div>
            </div>

            <div class="fullH bg-rest-1 align-in-center">
                <div class="container texto-somos">
                    Celebra la victoria con la mejor compañía
                </div>
            </div>

            <div class="fullH80 bg-rest-2 align-in-center">
                <div class="col-xs-6 texto-somos txt-left pos-absolute-l">
                    <h3>
                        Transmisión directa de nuestros torneos en vivo
                    </h3>
                </div>
                <div class="col-xs-6 texto-somos txt-right pos-absolute-r">
                    <h3>Los mejores eventos deportivos a tu alcance</h3>                    
                </div>
            </div>

            <!-- SLIDER 2 -->
            <div id="restCarousel" class="carousel slide somos-carousel" data-ride="carousel">
                 <div class="texto-flotante">
                    Visita nuestro Restaurante
                </div>

                <div class="carousel-inner" role="listbox">
                    <div class="item active"><img src="<?= $dist_path; ?>images/somos/img-rest-s-1.jpg"></div>
                    <div class="item"><img src="<?= $dist_path; ?>images/somos/img-rest-s-2.jpg"></div>
                    <div class="item"><img src="<?= $dist_path; ?>images/somos/img-rest-s-4.jpg"></div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#restCarousel" role="button" data-slide="prev">
                    <span class="s-control-left" aria-hidden="true">
                        <svg height="90" width="35">
                          <line x1="35" y1="0" x2="0" y2="45" style="stroke:rgb(255,255,255);stroke-width:2" />
                          <line x1="35" y1="90" x2="0" y2="44" style="stroke:rgb(255,255,255);stroke-width:2" />
                          Prev
                        </svg>
                    </span>
                </a>
                <a class="right carousel-control" href="#restCarousel" role="button" data-slide="next">
                    <span class="s-control-right" aria-hidden="true">
                        <svg height="90" width="35">
                          <line x1="0" y1="0" x2="35" y2="45" style="stroke:rgb(255,255,255); stroke-width:2" />
                          <line x1="0" y1="90" x2="35" y2="44"  style="stroke:rgb(255,255,255); stroke-width:2" />
                          Next
                        </svg>
                    </span>
                </a>
            </div>
            <!-- END SLIDER 2 -->

            <!-- <div class="fullH bg-reja align-in-center">
                <div class="container texto-somos">
                    Descubre avierto
                </div>
            </div> -->
            

            <div class="fullH bg-pasillo align-in-center">
                <div class="container texto-somos">
                    La diversidad es vital para disfrutar avierto
                </div>
            </div>

            <div class="fullH bg-salon align-in-center">
                <div class="container texto-somosyparrafo">
                    <h3>Avierto para los que buscan más que fútbol</h3>
                    <p>Tenemos una oferta diversa de actividades para que aprendas, entrenes y compartas avierto</p>
                    <a href="actividades.html"><b>¡Participa, inscríbete y descubre tu potencial!</b></a>
                </div>
            </div>


            <div class="fullH80 bg-krav align-in-center">
                <div class="col-xs-6 texto-somos txt-left pos-absolute-l">
                    <h3>
                        Aprende nuevas técnicas de entrenamiento físico<br>
                        Explora tu potencial<br>
                        Entrena con los mejores profesores<br>
                    </h3>
                </div>
                <div class="col-xs-6 texto-somos txt-right pos-absolute-r">
                    <h3>Inscribe a tus hijas e hijos<br>
                    en alguna de nuestras actividades</h3>                    
                </div>
            </div>

            

            

            <div class="fullH bg-renta align-in-center">
                <div class="container texto-somosyparrafo">
                    <h3>¡Renta Avierto!</h3>
                    <p>Tenemos el espacio que necesitas para organizar tus torneos o cascaritas de fútbol, hacer de tus reuniones y eventos una experiencia única y original, celebrar las fechas importanes o realizar tus cursos o talleres.</p>
                    <a href="contacto.html"><b>¡Vive la experiencia Avierto!</b></a>
                </div>
            </div>
            
            <div class="fullH bg-estacionamiento">
                <div class="texto-in-list">
                    <h2>Cuídamos tu auto</h2>
                    <ul>   
                        <li>Pregunta por nuestros servicios:</li>
                        <li>Estacionamiento techado*</li>
                        <li>Pensiones Diurnas y Nocturnas</li>
                        <li style="font-size:10px;">*Tu auto está protegido (asegurado) en caso de
                        <br>imprevistos: inundaciones, terremotos, etc</li>
                    </ul>
                </div>
            </div>

            <div class="fullH bg-fachada align-in-center">
                <div class="container">
                    <img class="img-responsive" style="margin: 0 auto;" src="<?= $dist_path; ?>images/somos/img-bienvenidos.png" alt="¡Bienvenidos! Avierto, ¡Pase!">
                </div>
            </div>

            <div class="height-futbol align-in-center" style="height: auto !important; padding: 36px 0;">
                <div class="container texto-align-futbol">
                    <div class="col-xs-10 col-xs-offset-1">
                       Somos Avierto
                        <p>Somos un grupo de emprendedores que compartimos la aventura de revivir un espacio en la colonia Escandón para quienes buscamos salir de lo ordinario y vivir la pasión que tenemos por el fútbol en un ambiente agradable, divertido y único.</p>
                        <p>Cuando pensamos Avierto imaginamos un diseño arquitectónico que por sus características nos permite vivir experiencias increíbles y de gran calidad.</p>
                        <p>Cuando pensamos Avierto ideamos la posibilidad de poner al alcance de la comunidad diferentes propuestas para la práctica deportiva y artística, además de ofrecer todos los servicios en un solo lugar para  crear un punto de reunión que nos permita convivir, compartir y encontrarnos con la familia y amigos.</p>
                        
                        <span> <b>¡Te esperamos, conoce, disfruta, vive Avierto! </b> </span>
                    </div>
                </div>
            </div>


        </div>
	</main>
    <!-- FOOTER -->
    <?php 
    set_query_var( 'color_bar_1', "color_footer_1");
    set_query_var( 'color_bar_2', "color_footer_1_st");
    get_template_part('templates/footer'); 
    ?>


<?php endwhile; ?>