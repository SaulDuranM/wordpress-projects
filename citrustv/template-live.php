<?php
/**
 * Template Name: Live
 */
?> 
<?php 
get_template_part('templates/helpers');
?>
<?php while (have_posts()) : the_post(); ?>
<!--<section class="media-item-detail-content">
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-md-12">
		  		<div class="media-item-detail-title orange">
		  			<h1 style="text-align:center; font-size:30px">Live Now - <?= get_field('title');?></h1>
		  		</div>
	  		</div>
  		</div>
  	</div>
</section>-->


<section class="media-item-detail-header">
  	<?php 
  		$yt_video = get_field('video');
		$feat_image = wp_get_attachment_url( get_post_thumbnail_id($media_item->ID) );
		$media_image = '';
		if($feat_image){
			$media_image = $feat_image;
		} elseif($yt_video){
			$media_image = 'http://img.youtube.com/vi/'.$yt_video.'/hqdefault.jpg';
		} else {
			$media_image = '';
		}
  	?>
  	<div class="container-fluid">
  		<div class="media-item-detail-video" style="background-image: url(<?=$media_image;?>)">
  		<?php if($type !== 'articles'):?>
  			<script>
  			var ytplayer;
			function onYouTubeIframeAPIReady() {
				player = new YT.Player('ytplayer', {
					height: '100%',
					width: '100%',
					videoId: '<?=$yt_video;?>',
					playerVars: { 'autoplay': 0, 'modestbranding': 0, 'showinfo': 0, 'rel': 0 },
					events: {
						'onReady': onPlayerReady,
						'onStateChange': onPlayerStateChange
					}
				});
			}
			function onPlayerReady(event) {
				event.target.pauseVideo();
			}
			var done = false;
			function onPlayerStateChange(event) {
		    	if (event.data == YT.PlayerState.PLAYING && !done) {
		    		done = true;
		    	}
		    }
			function stopVideo() {
				player.stopVideo();
			}
			function playVideo() {
				player.playVideo();
			}
			//
			jQuery.noConflict();
			jQuery(document).ready(function($){
			    $(".ytplayerth-btn").click(function(){
			        $(this).hide();
			        $(".ytplayerth").hide();
			        playVideo();
			    });
			});
			//
  			</script>
  			<div class="ytplayerth-btn"></div>
  			<div class="ytplayerth" style="background-image: url(<?=$media_image;?>)"></div>
  			<div id="ytplayer"></div>
	  	<?php endif; ?>
	  	</div>
	  	
  	</div>
</section>

<section class="media-item-detail-content">
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-md-9">
		  		<div class="media-item-detail-title orange">
		  			<h1><?= get_field('title');?></h1>
		  		</div>
		  		<div class="media-item-detail-cont">
		  			<?= get_field('teaser');?>
		  		</div>
	  		</div>
	  		<div class="col-md-3">
	  			<div class="media-item-detail-share">
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
		  			<?php 
		  			if($type == 'clips')
		  				$typeshare = 'CLIP';
		  			else if($type == 'articles')
		  				$typeshare = 'ARTICLE';
		  			else if($type == 'episodes')
		  				$typeshare = 'EPISODE';

		  			?>
		  			<a href="javascript:fbShare('<?=get_the_permalink();?>', 'Share', 'CitrusTV Live', '<?=$shimage;?>', 520, 350)" class="share-fb"></a>
		  			<a href="javascript:ttShare('<?=get_the_permalink();?>', 'Share', 'CitrusTV Live', '<?=$shimage;?>', 520, 350)" class="share-tt"></a>
	  			</div>
	  		</div>
  		</div>
  	</div>
</section>

<?php
$banner = get_field('banner'); 
if($banner)
	include(locate_template('templates/banners.php'));
?>

<?php endwhile; ?>