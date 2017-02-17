<?php 
$post_id = get_the_ID();
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post_id));
?>
<?php while (have_posts()) : the_post();

$all_posts = get_posts( array( 'posts_per_page' => 6, 'post_type' => 'post', 'order'=> 'DESC', 'orderby' => 'date' ) );
?>


<!-- POST FEATURE -->
<section>
  <div class="single-post-featured" style="background-image:url(<?= $feat_image; ?>);">
    <div class="container-fluid single-post-featured-copy">
      <div class="blog-post-date">
        <div class="blog-post-date-month-day"><?= get_the_date('M d', $latest_post->ID); ?></div>
        <div class="blog-post-date-day-year"><?= get_the_date('l, Y', $latest_post->ID); ?></div>
      </div>
    </div>
    <!--<div class="featured-cover"></div>-->
  </div>  
</section>

<!-- POST DETAIL -->
<section class="single-post">
  <div class="container-fluid single-post-detail">
    <div class="row">
      <div class="col-md-9">
        <div class="single-post-title">
          <h1><?php the_title(); ?></h1>
        </div>
        
        <div class="single-post-meta">
          <? $categories = get_the_category($post_id);
            foreach( $categories as $category ): ?>
            <a href="<?= esc_url( get_category_link( $post_id ) ); ?>"><?= esc_html( $category->name );?></a>
            <?php endforeach; ?> | by <?= get_the_author($post_id); ?>
        </div>

        <div class="single-post-content">
          <?php the_content(); ?>
        </div>
        <!-- tags -->
        <div class="single-post-meta-content">
          <span>Tags:</span>
          <? $categories = get_the_category($post_id);
            foreach( $categories as $category ): ?>
            <a href="<?= esc_url( get_category_link( $post_id ) ); ?>"><?= esc_html( $category->name );?></a>
            <?php endforeach; ?>
        </div>

      </div>
      <!-- SIDEBAR -->
      <div class="col-md-3">
        <div class="single-post-widget">
          <div>
            <?php dynamic_sidebar( 'sidebar-primary' ); ?>
          </div>
          <div class="single-post-share">
            <script type="text/javascript">
              //SHARE
                function fbShare(url, title, descr, image, winWidth, winHeight) {
                  var winTop = (screen.height / 2) - (winHeight / 2);
                  var winLeft = (screen.width / 2) - (winWidth / 2);
                  window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
                }
                function ttShare(url, title, descr, image, winWidth, winHeight) {
                  var winTop = (screen.height / 2) - (winHeight / 2);
                  var winLeft = (screen.width / 2) - (winWidth / 2);
                  window.open('http://twitter.com/share?url='+ url +'&amp;text='+ descr +'&amp;hashtags=citrustv', 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
                }
            </script>
            <!--<a href="https://www.facebook.com/sharer/sharer.php?u=<?=get_the_permalink();?>" target="_blank" class="share-fb"></a>
            <a href="https://twitter.com/home?status=<?=get_the_permalink();?>" target="_blank" class="share-tt"></a>-->

            <a href="javascript:fbShare('<?=get_the_permalink();?>', 'Share', '<?= get_the_title();?>', '<?=$shimage;?>', 520, 350)" class="share-fb"></a>
            <a href="javascript:ttShare('<?=get_the_permalink();?>', 'Share', '<?= get_the_title();?>', '<?=$shimage;?>', 520, 350)" class="share-tt"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ALL POSTS -->
<!--<section class="blog-posts-single">
  <div class="container-fluid single-post-detail">
    <div class="blog-lastest-posts row">
    <?php foreach ( $all_posts as $all_post ):
      $post_th = wp_get_attachment_url( get_post_thumbnail_id($all_post->ID) );     
    ?>
      <div class="col-md-4 col-sm-6">
        <div class="blog-post">
          <a href="<?= get_permalink($all_post->ID) ?>">
            <div class="blog-post-th" style="background-image: url(<?=$post_th;?>)">
              <div class="blog-post-date">
                <div class="blog-post-date-month-day"><?= get_the_date('M d', $all_post->ID); ?></div>
                <div class="blog-post-date-day-year"><?= get_the_date('l, Y', $all_post->ID); ?></div>
              </div>
            </div>
          </a>
          <div class="blog-post-data blog-post-data-sm">
            <div class="blog-post-title">
              <h2><a href="<?= get_permalink($all_post->ID) ?>"><?= $all_post->post_title; ?></a></h2>
            </div>
            <div class="blog-post-footer">
              <?php
              $categories = get_the_category($all_post->ID);
              ?>
              <div class="blog-post-cat-author">
                <? foreach( $categories as $category ): ?>
                  <a href="<?= esc_url( get_category_link( $category->term_id ) ); ?>"><?= esc_html( $category->name );?></a>
                <?php endforeach; ?> | by <?= get_the_author($all_post->ID); ?>
              </div>
              <div class="blog-post-arrow">
                <a href="<?= get_permalink($all_post->ID) ?>" class="blog-post-arrow-b"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
  </div>
  
</section>-->

<section class="blog-posts-single">
  <!--<div class="container-fluid single-post-detail">-->
    <ul class="blog-lastest-posts" id="blog-lastest-posts-slider">
    <?php foreach ( $all_posts as $all_post ):
      $post_th = wp_get_attachment_url( get_post_thumbnail_id($all_post->ID) );     
    ?>
      <li>
        <div class="blog-post">
          <a href="<?= get_permalink($all_post->ID) ?>">
            <div class="blog-post-th" style="background-image: url(<?=$post_th;?>)">
              <div class="blog-post-date">
                <div class="blog-post-date-month-day"><?= get_the_date('M d', $all_post->ID); ?></div>
                <div class="blog-post-date-day-year"><?= get_the_date('l, Y', $all_post->ID); ?></div>
              </div>
            </div>
          </a>
          <div class="blog-post-data blog-post-data-sm">
            <div class="blog-post-title">
              <h2><a href="<?= get_permalink($all_post->ID) ?>"><?= $all_post->post_title; ?></a></h2>
            </div>
            <div class="blog-post-footer">
              <?php
              $categories = get_the_category($all_post->ID);
              ?>
              <div class="blog-post-cat-author">
                <? foreach( $categories as $category ): ?>
                  <a href="<?= esc_url( get_category_link( $category->term_id ) ); ?>"><?= esc_html( $category->name );?></a>
                <?php endforeach; ?> | by <?= get_the_author($all_post->ID); ?>
              </div>
              <div class="blog-post-arrow">
                <a href="<?= get_permalink($all_post->ID) ?>" class="blog-post-arrow-b"></a>
              </div>
            </div>
          </div>
        </div>
      </li>
    <?php endforeach; ?>
    </ul>
  <!--</div>-->
  
</section>

<?php
$banner = get_field('banner'); 
if($banner)
  include(locate_template('templates/banners.php'));
?>

<?php endwhile; ?>