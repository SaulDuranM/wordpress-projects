<?php
// --- HELPERS --- //
//get_template_part('templates/helpers');
$dist_path = get_template_directory_uri() . '/dist/'; 
?>
<?php
foreach ( $media_items as $media_item ): 
	$yt_video = get_field('yt_id', $media_item->ID);
	$feat_image = wp_get_attachment_url( get_post_thumbnail_id($media_item->ID) );
	$media_image = '';
	if($feat_image){
		$media_image = $feat_image;
	} elseif($yt_video){
		$media_image = 'http://img.youtube.com/vi/'.$yt_video.'/hqdefault.jpg';
	} else {
		$media_image = '';
	}
	//
	$type = ltype($media_item->post_type);
	$typetx = 'Watch';
	if($type == 'article'){$typetx = 'Read';}
	?>
	<div class="col-md-4 col-sm-6">
		<a class="mediaitem" href="<?= get_permalink($media_item->ID) ?>">
			<div class="media-item" style="background-image: url(<?=$media_image;?>)">
				<div class="media-item-hover">
					<div class="media-item-hover-co">
						<div class="media-item-hover-co-co"><?= get_excerpt($media_item->post_content); ?></div>
						<div class="media-item-hover-co-btn">
							<span class="dark<?=$color;?>-bg"><?=$typetx;?> Now</span>
						</div>		
					</div>
					<div class="media-item-hover-bg media-item-hover-<?=$color;?>"></div>
				</div>

				<div class="media-item-detail">
					<div class="row">
						<div class="col-sm-6 col-xs-8">
							<div class="media-item-text">
								<?= $media_item->post_title; ?>
							</div>
						</div>
						<div class="col-sm-6 col-xs-4">
							<div class="media-item-type">
								<span><?= ltype($media_item->post_type); ?></span>
							</div>
						</div>
					</div>
				</div>
				<div class="media-item-overlay" style="background-image: url(<?= $dist_path.'images/common/media_'.ltype($media_item->post_type).'.png';?>);"></div>
				<div class="media-item-overlay-gradient"></div>
			</div>
		</a>
	</div>
	<?
	//include(locate_template('templates/media-items.php'));
endforeach; 
?>
