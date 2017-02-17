<?php
    $dist_path = get_template_directory_uri() . '/dist/';
    $dist_path_t = get_template_directory_uri();
?>
<div class="overlay overlay-scale">
    <div class="container-fluid avierto-main-container">
        
        <?php if( have_rows('menu_secciones_top', 'option') ): 
            while( have_rows('menu_secciones_top', 'option') ): the_row();
        ?>

            <div class="col-xs-6 col-sm-4 avierto-<?= get_sub_field('menu_color') ?>">
                <a class="menu-ov" href="<?= get_sub_field('menu_link') ?>">
                    <div class="grid-container">
                        <div class="box-content">
                            <h1><?= get_sub_field('menu_seccion') ?></h1>
                        </div>
                    </div>
                </a>
            </div>

        <?php endwhile; endif; ?>

        <?php if( have_rows('menu_secciones_bottom', 'option') ): 
            while( have_rows('menu_secciones_bottom', 'option') ): the_row();
        ?>
        
            <div class="col-xs-6 col-sm-4 avierto-<?= get_sub_field('menu_color') ?>">
                <a class="menu-ov" href="<?= get_sub_field('menu_link') ?>">
                    <div class="grid-container">
                        <div class="box-content">
                            <h1><?= get_sub_field('menu_seccion') ?></h1>
                        </div>
                    </div>
                </a>
            </div>

        <?php endwhile; endif; ?>
       
    </div>

    <!-- Footer -->

    <div class="footer_menu">
        <div class="container-fluid">
            <?php
                $count = count( get_field('menu_secciones_footer', 'option') );
                $col = 12/$count;
            ?>
            <div class="row">
                <?php if( have_rows('menu_secciones_footer', 'option') ):
                    while( have_rows('menu_secciones_footer', 'option') ): the_row();
                ?>
                    <div class="col-xs-<?php echo esc_attr( $col ); ?>">
                        <a class="menu-ov_fo" href="<?= get_sub_field('menu_link_footer') ?>" target="_blank">
                            <?php 

                            $image = get_sub_field('menu_footer_imagen');

                            if( !empty($image) ): ?>

                                <img class="iconos-footer" src="<?php echo $image['url']; ?>" />

                            <?php endif; ?>
                        </a>
                    </div>
                
                <?php endwhile; endif; ?>
            </div>

        </div>
    </div>
</div>