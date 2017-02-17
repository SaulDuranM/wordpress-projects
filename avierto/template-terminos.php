<?php
/**
 * Template Name: Terminos
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php
	$dist_path = get_template_directory_uri() . '/dist/';
	$dist_path_t = get_template_directory_uri();
	?>

	<!-- MENU OVERLAY -->
    <?php get_template_part('templates/menu'); ?>

    <main class="content sections sec_terminos">
    	<!-- MENU -->
    	<?php get_template_part('templates/menuoverlay'); ?>
    	<!-- HOME FULL -->
    	<div class="container">
         <div class="col-xs-12">
            <?php the_content(); ?>
         </div>
        </div>
        
    </main>
    <!-- FOOTER -->

    <?php 
    set_query_var( 'color_bar_1', "color_footer_2");
    set_query_var( 'color_bar_2', "color_footer_2_st");
    get_template_part('templates/footer'); 
    ?>


<?php endwhile; ?>