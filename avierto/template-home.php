<?php
/**
 * Template Name: Home
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php
	$dist_path = get_template_directory_uri() . '/dist/';
	$dist_path_t = get_template_directory_uri();
	?>
	
	<!-- MENU OVERLAY -->
    <?php get_template_part('templates/menu'); ?>


	<main class="container-fluid index">
		<div class="open-overlay-menu">
			<nav>
				<div id="four-link" class="menu-btn">
					<div id="trigger-overlay" class="nav-open-menu">
						<a><span>MENU</span></a>
					</div>
				</div>
			</nav>
		</div>
		
		<div class="container">
            <div class="home_content">
                <img class="img-responsive" src="<?= $dist_path ?>images/logo_avierto.png" alt="Logo Oficial Avierto">
                <div class="frase-home">Pasión y vitalidad en un solo espacio</div>
            </div>
            <div style="position: absolute; width: 100%; height: 100vh; background: rgba(0, 0, 0, 0.1); left: 0; top: 0;"></div>
        </div>
		
		<video loop id="bgvid">
			<source src="<?= $dist_path ?>images/media/_home.webm" type="video/webm">
			<source src="<?= $dist_path ?>images/media/_home.mp4" type="video/mp4">
		</video>

		<!-- MOVILE -->
		<div class="homemov cortina" style="background: url(<?= $dist_path ?>images/media/movil.jpg) no-repeat center center; -webkit-background-size: cover; background-size: cover;"></div>
	</main>



<?php endwhile; ?>