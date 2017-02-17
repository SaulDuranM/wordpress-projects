<?php

get_header();

//GET HASH
$filter = htmlspecialchars($_GET["f"]);
$subtitleNext;
$subtitlePrev;
$subtitle;


switch ($filter) {
	case 'crono':
		$filtro = 'post_date';

		$next_post = next_post_link_plus( array('order_by' => $filtro, 'order_2nd' => 'DESC', 'format' => '%link', 'return' => 'id'));
		$prev_post = previous_post_link_plus( array('order_by' => $filtro, 'order_2nd' => 'DESC', 'format' => '%link', 'return' => 'id'));

		$subtitleNext = get_the_time('Y', $next_post );
		$subtitlePrev = get_the_time('Y', $prev_post );

		$subtitle = get_the_time('Y');

	break;
	case 'alfa':
		$filtro = 'post_title';

		$next_post = next_post_link_plus( array('order_by' => $filtro, 'order_2nd' => 'ASC', 'format' => '%link', 'return' => 'id'));
		$prev_post = previous_post_link_plus( array('order_by' => $filtro, 'order_2nd' => 'ASC', 'format' => '%link', 'return' => 'id'));

		$subtitleNext = " ";
		$subtitlePrev = " ";
		$subtitle = " ";
	break;
	case 'programa':
		$filtro = 'post_category';
		
		$next_post = next_post_link_plus( array('order_by' => $filtro, 'order_2nd' => 'ASC', 'format' => '%link', 'return' => 'id'));
		$prev_post = previous_post_link_plus( array('order_by' => $filtro, 'order_2nd' => 'ASC', 'format' => '%link', 'return' => 'id'));

		$categoriesN = get_the_category($next_post);
		$categoriesP = get_the_category($prev_post);
		$cat = get_the_category();
		


		$subtitleNext = $categoriesN[0]->cat_name;
		$subtitlePrev = $categoriesP[0]->cat_name;

		$subtitle = $cat[0]->cat_name;
	break;
}


?>
	
<div class="container" id="proyecto-template">
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
	<div class="row">
		<div class="navigation-proyects">
			
			<div class="col-xs-4 nav-proyect-next">
				<? $ln = previous_post_link_plus( array('order_by' => $filtro, 'order_2nd' => 'DESC', 'format' => '%link', 'return' => 'href'));?>
				<span>&lt;</span><a href=<?echo $ln.'?f='.$filter; ?>><?php echo previous_post_link_plus( array('order_by' => $filtro, 'order_2nd' => 'DESC', 'format' => '%link', 'return' => 'title') ); ?></a>
				<!--<span>&lt;</span><?php next_post_link( '<strong>%link</strong>' ); ?>-->
				<div class="proyect-year"><?php echo $subtitlePrev; ?></div>
			</div>
			
			<div class="col-xs-4 nav-proyect-same">
				<div class="proyect-rotate"><a id="spnTop" href="">&lt;</a></div><strong style="display: inherit;"><a id="back-top" href=""><?php the_title(); ?></a></strong>
				<div class="proyect-year"><?php echo $subtitle; ?></div>
			</div>
			
			<div class="col-xs-4 nav-proyect-prev">
				<? $lp = next_post_link_plus( array('order_by' => $filtro, 'order_2nd' => 'DESC', 'format' => '%link', 'return' => 'href'));?>
				<a href=<?echo $lp.'?f='.$filter; ?>><?php echo next_post_link_plus( array('order_by' => $filtro, 'order_2nd' => 'DESC', 'format' => '%link','return' => 'title') ); ?></a><span>&gt;</span>
				<div class="proyect-year"><?php echo $subtitleNext; ?></div>
			</div>
		</div>
	</div>
</div>
<div class="container">
    <div class="row"><div id="false"></div></div>
</div>


<?php get_footer(); ?>