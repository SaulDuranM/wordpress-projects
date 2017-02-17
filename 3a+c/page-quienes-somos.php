<?php
/*
Template name: Quienes Somos
*/

get_header(); ?>

<div class="container-fluid">
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	
		<?php the_content(); // Dynamic Content ?>
	
	<?php endwhile; ?>
	
	<?php endif; ?>
</div>

<div class="container">
    <div class="row"><div id="false"></div></div>
</div>

<?php get_footer(); ?>
