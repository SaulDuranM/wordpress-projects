<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      $load = !(get_page_template_slug()=='template-vch.php');
      if($load){
        do_action('get_header');
        get_template_part('templates/header');
      }

      include Wrapper\template_path();
      
      if($load){
        do_action('get_footer');
        get_template_part('templates/footer');
        wp_footer();
      }
    ?>
  </body>
</html>
