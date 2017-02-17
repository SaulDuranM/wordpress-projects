<?php
/* Template Name: Our Value Chain Subpage*/
?>
<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/content', 'page'); ?>
  <?php 
    $dist_path = get_template_directory_uri() . '/dist/';
    $dist_path_t = get_template_directory_uri();
  ?>
  <?php 
  $title = get_field('section_title');
  $subheading = get_field('section_sub_heading');
  $icon = get_field('section_icon');
  $section_body_title = get_field('section_body_title');
  $section_body_subheading = get_field('section_body_subheading');
  ?>
<div class="valuechain">
    <div class="valuechain__title" data-bgimg="/wp-content/themes/eurochem/static/img/content/vch-bgsmall1.jpg">
        <div class="valuechain__title__text">
            <div class="img-w">
                <img class="icon-home" src="<?php echo $icon?>" alt=""/>
            </div>
            <h3><?php echo $title?></h3>
            <p><?php echo $subheading?></p>
        </div>
        <div class="hotspots">
            <?php if( have_rows('subsection') ): ?>
                <?php while( have_rows('subsection') ): the_row();
                $number = get_sub_field('number');
                $number = sprintf("%02d", $number);
                $left = get_sub_field('left_position');
                $top = get_sub_field('top_position');
                ?>
                <a href="#" id="point-<?php echo $number ?>" style="left: <?php echo $left?>px; top: <?php echo $top?>px;" >
                    <span class="outside">
                        <span class="inside"><?php echo $number?></span>
                    </span>
                </a>
                <?php endwhile;?>
            <?php endif;?>
        </div>
    </div>
    <div class="vch-articles-w">
        <div class="vch-articles">
            <a href="https://www.google.com.ua/" class="article-next">
                <svg role="img" title="next">
                    <use xlink:href="/wp-content/themes/eurochem/static/img/general/svgdefs.svg#icon-arr-left"/>
                </svg>
            </a>
            <a href="#" class="article-prev">
                <svg role="img" title="prev">
                    <use xlink:href="/wp-content/themes/eurochem/static/img/general/svgdefs.svg#icon-arr-right"/>
                </svg>
            </a>
            <div class="vch-article-w">
                
                <div class="vch-article active">
                    <h1><?php echo $subsection_body_title?></h1>
                    <h2><?php echo $subsection_body_subheading?></h2>
                    <?php if( have_rows('section_body_sections') ): ?>
                        <?php while( have_rows('section_body_sections') ): the_row();
                        $title = get_sub_field('main_section_title');
                        $text = get_sub_field('main_section_text');
                        $cta = get_sub_field('main_section_call_to_action_text');
                        $link = get_sub_field('main_section_call_to_action');
                        ?>
                        <h3><?php echo $title?></h3>
                        <p><?php echo $text?></p>
                        <a href="<?php echo $link?>" class="btn-round"><?php echo $cta?>
                            <svg class="icon-arr-left" role="img" title="share-fb">
                                <use xlink:href="/wp-content/themes/eurochem/static/img/general/svgdefs.svg#icon-arr-left"/>
                            </svg>
                        </a>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
                <?php if( have_rows('subsection') ): ?>
                    <?php while( have_rows('subsection') ): the_row();
                    $number = get_sub_field('number');
                    $number = sprintf("%02d", $number);
                    $left = get_sub_field('left_position');
                    $top = get_sub_field('top_position');
                    $title = get_sub_field('subsection_title');
                    $text = get_sub_field('subsection_text');
                    ?>
                        <div class="vch-article slideoff-right"  data-point="point-<?php echo $number?>">
                            <p class="number"><?php echo $number?></p>
                            <h1><?php echo $title?></h1>
                            <?php echo $text?>
                        </div>
                    <?php endwhile;?>
                <?php endif;?>
            </div>
        </div>

    </div>
</div>

<?php endwhile; ?>
