<?php
/**
 * Template Name: Schedule
 */
?> 
<?php
$dist_path = get_template_directory_uri() . '/dist/';
$home = get_page_by_title( 'Home' );
?>
<section>
	<div class="featured-sm" style="background-image:url(<?= $dist_path ?>images/studio_pano.jpg);">
		<div class="container-fluid featured-copy">
			<div class="featured-copy-container">
				<h1 class="featured-title">Schedule</h1>
			</div>
		</div>
		<div class="featured-cover"></div>
	</div>	
</section>

<section class="schedule-page">
	<div class="container-fluid schedule-container">
	<?php $days = array('monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday');?>
	<?php foreach ($days as $day):?>
		<div class="row schedule-row">
  			<div class="col-xs-6 col-sm-3 col-md-1">
  				<div class="schedule-nav-title">
  					<h3><?=$day;?></h3>
  				</div>
  			</div>

  			<div class="col-xs-6 col-sm-9 col-md-11">
  				<?php if( have_rows($day.'_schedule', $home->ID) ): ?>
  					<div class="row schedule-slider">
  						<?php while( have_rows($day.'_schedule', $home->ID) ): the_row();
  						$showTime = get_sub_field('show_time');
  						$time = get_sub_field('time');
  						$show = get_sub_field('show');
  						$showid = $show->ID;
  						$tfield = get_sub_field_object('time');
  						$tlabel = $tfield['choices'][ $time ];
  						?>
  						<div class="col-md-2">
              				<div class="schedule_nav_item">
                  				<time><?=$showTime; ?> <?=$tlabel; ?></time>
                  				<small><a href="<?=esc_url( get_permalink($showid) );?>"><?=get_the_title($showid); ?></a></small>
              				</div>
            			</div>
            			<?php endwhile; ?>
            		</div>
            	<?php endif; ?>
            </div>
        </div>
    <?php endforeach; ?>
	</div>
</section>

<?php
$banner = get_field('banner'); 
if($banner)
  include(locate_template('templates/banners.php'));
?>
