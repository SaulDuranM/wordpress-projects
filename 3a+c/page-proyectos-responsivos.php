<?php
/*
Template name: Proyectos Responsivos
*/

get_header();
?>

<div class="container" id="proyectos-responsivos">
	<div class="row">
		<div class="titulo-proyecto titulo-proyectos-responsivos">
			<h1>Proyectos</h1>
		</div>
		<div class="line-top"></div>
	</div><!-- /row titulo -->
	
	<div class="row content-proyectos-responsivos">
	
	<?php $loop = new WP_Query( array( 'post_type' => 'proyectos', 'posts_per_page' => -1 ) ); ?> 
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="col-xs-6">
			<a href="<?php the_permalink(); ?>">
				<img class="img-responsive" src="<? echo wp_get_attachment_url(get_post_thumbnail_id());?>">
				<div class="title-proyecto-container">
					<div class="title-proyecto-content">
						<h2><?php the_title(); ?></h2>
						<span class="title-mas-proyecto">+</span>
					</div>
				</div>
			</a>
		</div>
		
	<?php endwhile; wp_reset_query(); ?>
	</div>
</div>

<div class="container" id="proyectos-responsivos">
	<div class="row">
		<div class="titulo-proyecto titulo-proyectos-responsivos">
			<h1>Proyectos</h1>
		</div>
		<div class="line-top"></div>
	</div><!-- /row titulo -->
	
	<div class="row content-proyectos-responsivos">
	
	<?php $loop = new WP_Query( array( 'post_type' => 'proyectos', 'posts_per_page' => -1 ) ); ?> 
		<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
		<div class="col-xs-6">
			<a href="<?php the_permalink(); ?>">
				<img class="img-responsive" src="<? echo wp_get_attachment_url(get_post_thumbnail_id());?>">
				<div class="title-proyecto-container">
					<div class="title-proyecto-content">
						<h2><?php the_title(); ?></h2>
						<span class="title-mas-proyecto">+</span>
					</div>
				</div>
			</a>
		</div>
		
	<?php endwhile; wp_reset_query(); ?>
	</div>
</div>

<div class="container">
    <div class="row"><div id="false"></div></div>
</div>

<?php get_footer(); ?>
