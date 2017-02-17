<?php
/**
 * Template Name: EuroChem History
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php 
  	
  	$dist_path = get_template_directory_uri() . '/dist/';
  	$dist_path_t = get_template_directory_uri();

  	?>

  	<!-- *********** -->
  	<!-- MAIN BANNER -->
  	<!-- *********** -->
    <?php 
    $mb_s_image_background =  get_field('mb_s_image_background');
    $mb_s_icon_heading =  get_field('mb_s_icon_heading');
    $mb_s_heading = get_field('mb_s_heading');
    ?>
  	<div class="main-banner main main-banner-380 no-bunnerpp" style="background-image: url('<?= $mb_s_image_background ?>')">
      <div class="main-banner-i">
        <div class="main-banner__text">
          <div class="img-w"><img src="<?= $mb_s_icon_heading; ?>" alt="icon"/></div>
          <h2><?= $mb_s_heading; ?></h2>
        </div>
      </div>
    </div>

    <!-- ******* -->
    <!-- HISTORY -->
    <!-- ******* -->
    <?php
    $posts_a = []; 
    $posts = get_posts(array('numberposts' => -1,'post_type' => 'history', 'order' => 'ASC'));
    foreach ( $posts as $post ) {
      $h_year =  get_field('h_year', $post->ID);
      $posts_a[$h_year] = [];
    }
    foreach ( $posts as $post ) {
      $h_year =  get_field('h_year', $post->ID);
      array_push($posts_a[$h_year],[$post->ID, $h_year]);
    }
    ?>

    <div class="timeline">
      <div class="timeline_i">
        <?php
        $t = 0;
        foreach ( $posts_a as $posth ) {
        ?>
        <div class="timeline__box-wr">
          <div class="timeline__year">
            <div class="timeline__year_i">
              <span><?= $posth[0][1]; ?></span>
            </div>
          </div>
          <!-- timeline__box__item -->
          <div class="timeline__box">
          <?php
          $n = 0;  
          foreach ( $posth as $posh ) {
            $h_body =  get_field('h_body', $posh[0]);
            $h_image =  get_field('h_featured_image', $posh[0]);
            $post_h = get_post($posh[0]); 
            $h_title = $post_h->post_title;
            $pos = 'left';
            if($n % 2 == 0) {
              $pos = 'right';
            }
            $n++;
          ?>
            <div class="timeline__box__item <?= $pos; ?>-item item-img clearfix <?php if($t > 0) { ?>float-effect<?php } ?>">
              <div class="timeline__box__item_i">
                <span class="connector"></span>
                <?php if( $h_image ):?>
                <div class="img">
                  <span class="img_i">
                    <img src="<?= $h_image; ?>" alt="image"/>
                    <div class="icon-toggle-plus"></div>
                  </span>
                </div>
                <? endif; ?>
                <h2><?= $h_title; ?></h2>
                <p><?= $h_body; ?></p>
                <div class="btn-close">
                  <div class="icon-toggle-plus"></div>
                </div>
              </div>
            </div>
            <!--timeline__box__item end-->
          <? } ?>
          </div>
          <!--timeline__box end-->
        </div>
        <?php $t++; } ?>

      </div>
    </div>


<?php endwhile; ?>	