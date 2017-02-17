<?php 

////////////////////////////////////////////////////////////
// --- VIEW MEDIA DETAILS --> EPISODES / CLIPS / ARTICLES //
////////////////////////////////////////////////////////////
get_template_part('templates/helpers');
$post_type = get_post_type();
list($dep, $type) = split('[_]', $post_type);
$media_items = get_posts(array( 'posts_per_page' => 6, 'post_type' => $post_type, 'order'=> 'DESC', 'orderby' => 'date', 'exclude' => get_the_ID() ) );
$dist_path = get_template_directory_uri() . '/dist/';

//GET SHOW BREADCUMB
$r = $_SERVER['REQUEST_URI']; 
$r = explode('/', $r);
$r = array_filter($r);
$r = array_merge($r, array()); 
$r = preg_replace('/\?.*/', '', $r);
$t = $r[count($r)-3];

//COLOR
$ru = $_SERVER['REQUEST_URI'];
$color = '';
$breadstart = '';
if(strpos($ru, 'news')){
	$breadstart = 'news';	
	$b = 'news';
	$color = 'blue';
}
if(strpos($ru, 'sports')){
	$breadstart = 'sports';
	$b = 'sports';
	$color = 'green';
} 
if(strpos($ru, 'enter')){
 	$breadstart = 'entertainment';
 	$b = 'enter';
	$color = 'orange';
}
$args = array('name' => $t, 'post_type' => $b.'_shows', 'post_status' => 'publish','numberposts' => 1);
$p = get_posts($args);
/////// 
// IMAGE SHARER //
$shimage = '';
///////
?>
<!-- HEADER -->			
<?php if($type !== 'articles'):?>
<section class="media-item-detail-header">
  	<?php 
  		$yt_video = get_field('yt_id');
		$feat_image = wp_get_attachment_url( get_post_thumbnail_id($media_item->ID) );
		$media_image = '';
		if($feat_image){
			$media_image = $feat_image;
		} elseif($yt_video){
			$media_image = 'http://img.youtube.com/vi/'.$yt_video.'/maxresdefault.jpg';
			$file_headers = @get_headers($media_image);
			if($file_headers[0] == 'HTTP/1.0 404 Not Found')
				$media_image = 'http://img.youtube.com/vi/'.$yt_video.'/hqdefault.jpg';
		} else {
			$media_image = '';
		}


		$shimage = $media_image;
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
				event.target.stopVideo();
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
				//setTimeout(function(){ console.log("again"); player.playVideo(); }, 3000);
				
			}
			//
			var iOS = /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
			jQuery.noConflict();
			jQuery(document).ready(function($){
			    $(".ytplayerth-btn").click(function(){
			        playVideo();
			        $(this).hide();
			        $(".ytplayerth").hide();
			        
			    });

			    if(iOS){
					$(".ytplayerth-btn").hide();
					$(".ytplayerth").hide();
				};
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
<?php endif; ?>

<?php if($type == 'articles'):?>
<?php $feat_image = wp_get_attachment_url( get_post_thumbnail_id($media_item->ID) ); $shimage = $feat_image;?>	
<section>
	<div class="featured-xsm" style="background-image:url(<?= $feat_image; ?>);">
		<div class="container-fluid featured-copy">
			<div class="featured-copy-container">
				<h1 class="featured-title"><? the_title(); ?></h1>
			</div>
		</div>
		<div class="featured-cover"></div>
	</div>	
</section>
<?php endif; ?>

<!-- SUBNAV -->
<section class="media-item-detail-subnav">
	<div class="container-fluid">
		<?php
		
		$showid = get_field('show', get_the_id());
		$logo = get_field('logo', $showid->ID);
		$col = 2;
		$colxs = 5;
		if($dep == 'enter'){
			$col = 1;
			$colxs = 3;
		}
		//$logo = get_field('logo');
		?>
		<div class="detail-subnav row">
			<div class="col-md-<?=$col;?> col-xs-3"><a href="../../" class="detail-subnav-logo-a"><img class="img-responsive" src="<?=$logo;?>"></a></div>
  			<div class="col-md-1 col-xs-1 col-sm-2 <?=$color;?>"><a href="../../episodes/">Episodes</a></div>
  			<div class="col-md-1 col-xs-1 col-sm-2 <?=$color;?>"><a href="../../clips/">Clips</a></div>
  			<div class="col-md-1 col-xs-1 col-sm-2 <?=$color;?>"><a href="../../articles/">Articles</a></div>
		</div>
		<?php ///// MOBILE ////// ?>
		<div class="detail-subnav-mobile">
			<div class="row ">
				<div class="col-md-<?=$col;?> col-xs-<?=$colxs;?>"><a href="<?= get_permalink($p[0]->ID);?>" class="detail-subnav-logo-a"><img class="img-responsive" src="<?=$logo;?>"></a></div>
			</div>
			<div class="down-arrow">
				<a class="down-arrow-btn" id="down-arrow-btn">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar mb0"></span>
				</a>
			</div>
		</div>
  	</div>
</section>
<section class="detail-subnav-mobile-links">
	<div class="<?=$color;?>"><a href="../../episodes/">Episodes</a></div>
  	<div class="<?=$color;?>"><a href="../../clips/">Clips</a></div>
  	<div class="<?=$color;?>"><a href="../../articles/">Articles</a></div>
</section>

<!-- BREADCUMB -->
<section>
	<div class="container-fluid">
		<div class="breadcumb">
			<a href="<?= esc_url(home_url('/')); ?>">Home</a> / <a href="<?= esc_url(home_url('/')); ?><?=$breadstart;?>/"><?=$breadstart;?></a> / <a href="<?= get_permalink($p[0]->ID);?>"><?= get_the_title($p[0]->ID);?></a> / <? the_title(); ?>
		</div>
	</div>
</section>

<!-- DETAIL -->
<section class="media-item-detail-content">
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-md-9">
  				<div class="media-item-detail-time <?=$color;?>" style="background-image:url(<?= $dist_path.'images/common/_clock_'.$color.'.png';?>)"><?= get_the_date('l, M d, Y'); ?> at <?= get_the_time(); ?></div>
		  		<div class="media-item-detail-title <?=$color;?>">
		  			<h1><?php the_title();?></h1>
		  		</div>
		  		<div class="media-item-detail-cont">

		  			<?php while (have_posts()) : the_post(); the_content(); endwhile;?>
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
		  			<a href="javascript:fbShare('<?=get_the_permalink();?>', 'Share', '<?= get_the_title();?>', '<?=$shimage;?>', 520, 350)" class="share-fb"></a>
		  			<a href="javascript:ttShare('<?=get_the_permalink();?>', 'Share', '<?= get_the_title();?>', '<?=$shimage;?>', 520, 350)" class="share-tt"></a>
	  			</div>
	  		</div>
  		</div>
  	</div>
</section>

<!-- RELATED -->
<section class="media-item-related">
  	<div class="container-fluid">
  		<div class="media-item-related-t <?=$color;?>"><h2>Related</h2></div>
  		<div class="media-items-blk">
			<div class="media-items row">
				<?php
				include(locate_template('templates/media-items.php'));
				?>
			</div>
		</div>
  	</div>
</section>

<!-- BANNER -->
<?php
$banner = get_field('banner'); 
if($banner)
	include(locate_template('templates/banners.php'));
?>