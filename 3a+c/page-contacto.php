<?php
/*
Template name: Contacto
*/

get_header();
?>
<div class="container" id="proyecto-template" style="margin-top:140px;">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<div class="row">
			<div class="titulo-proyecto">
				<h1><?php the_title(); ?></h1>
			</div>
		</div><!-- /row titulo -->
	
		<?php the_content(); // Dynamic Content ?>
		
		
	
	<?php endwhile; ?>
	
	<?php endif; ?>
</div>

<div class="container">
    <div class="row"><div id="false"></div></div>
</div>

<div style="position: absolute; right: 0px; top: 26px;">
	<a style="color: rgb(84, 84, 84);" href="http://www.somosunachulada.mx" target="_blank"><img src="<? echo get_template_directory_uri(); ?>/img/chulada_o.png" alt="La Chulada" width="100"></a>
</div>

<?php get_footer(); ?>
