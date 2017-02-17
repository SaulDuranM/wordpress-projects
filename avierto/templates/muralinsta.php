<!-- MURAL -->
<div class="row title-section tit-color">
        <div class="col-xs-12">Mural</div>
</div>
<div class="row mural-content">
        <?php $muralid = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'mural'");?>
        <?php if( have_rows('mural', $muralid) ): $muritem = 0;?>
        <?php while( have_rows('mural', $muralid) ): the_row();
        $mur_imagen = get_sub_field('mur_imagen');
        if($muritem < 3):
        ?>
        <div class="col-xs-4"> <img class="img-responsive" src="<?= $mur_imagen; ?>"> </div>
        <?php endif; ?> 
        <?php $muritem++; endwhile; ?>
        <?php endif; ?> 
</div>
<!-- INSTAGRAM -->
<!-- 5773172.b15d1a4.966aa378aaae426dbb6dff6d1a474b57 /// 20269764 /// 640806256-->
<div class="row title-section tit-color">
        <div class="col-xs-12">
                <i class="fa fa-instagram"></i>
                Instagram
        </div>
</div>
<div class="row insta-avierto">
        <div class="insta-content">

        </div>
</div> <!-- /row insta-avierto -->