<?php while (have_posts()) : the_post(); ?>
  <?php
  	$post_type = get_post_type(get_the_ID());
  	switch ($post_type) {
		case "home":
			get_template_part('templates/home', 'page');
		break;
	}	
  ?>
<?php endwhile; ?>
