<?php
namespace Roots\Sage\ByTheNumbers;
///////////////////////////////////
// BY THE NUMBERS ---  SHORTCODE //
///////////////////////////////////
function bythenumbers($atts) {
  $about = get_page_by_title( 'About' );
  ob_start();
  ?>

<div class="donate-thenumbers">
  <div class="content-blk">
      <div class="about-thenumbers-title gray"><h2>By The Numbers</h2></div>
      <div class="about-thenumbers-items row">
        <?php while( have_rows('by_the_numbers', $about->ID) ): the_row(); 
            $number = get_sub_field('number');
            $type = get_sub_field('type');
            $description = get_sub_field('description');
            $color = get_sub_field('color');
          ?>
          <div class="col-md-4 col-sm-6">
            <div class="about-thenumbers-item <?=$color;?>">
              <div class="about-thenumbers-item-h <?=$color;?>-bg">
                <div class="about-thenumbers-item-number"><?=$number;?></div>
                <div class="about-thenumbers-item-type"><?=$type;?></div>
              </div>
              <div class="about-thenumbers-item-desc"><?=$description;?></div>
            </div>
          </div>
          <?php endwhile; ?>
      </div>
  </div>
  
</div>

<?php  
  $content = ob_get_contents();
    ob_end_clean();
    return $content;
}
add_shortcode('bytn', __NAMESPACE__ . '\\bythenumbers');
?>