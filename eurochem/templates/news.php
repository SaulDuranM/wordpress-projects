<?php 
  	$dist_path = get_template_directory_uri() . '/dist/';
  	$dist_path_t = get_template_directory_uri();
?>
<div class="promo">
	<div class="decor-left"></div>
	<div class="decor-right"></div>
	<!-- PROMO CONTROLS -->
	<div class="promo-controls">
		<div class="promo-controls-i">
			<div class="promo-controls__item active">
				<a href="#">
					<div class="icons-w icons-news">
						<img class="icon-def" src="<?php echo $dist_path; ?>images/general/news-blue.svg" alt=""/>
						<img class="icon-hover" src="<?php echo $dist_path; ?>images/general/news-darkblue.svg" alt=""/>
						<img class="icon-active" src="<?php echo $dist_path; ?>images/general/news-gray.svg" alt=""/>
					</div>
					<span>News</span>
				</a>
			</div>
			<div class="promo-controls__item">
				<a href="#">
					<div class="icons-w icons-tweets">
						<img class="icon-def"  src="<?php echo $dist_path; ?>images/general/tweet-blue.svg" alt=""/>
						<img class="icon-hover"  src="<?php echo $dist_path; ?>images/general/tweet-darkblue.svg" alt=""/>
						<img class="icon-active" src="<?php echo $dist_path; ?>images/general/tweet-gray.svg" alt=""/>
					</div>
					<span>Tweets</span>
				</a>
			</div>
			<div class="promo-controls__item">
				<a href="#">
					<div class="icons-w icons-youtube">
						<img class="icon-def" src="<?php echo $dist_path; ?>images/general/youtube-blue.svg" alt=""/>
						<img class="icon-hover" src="<?php echo $dist_path; ?>images/general/youtube-darkblue.svg" alt=""/>
						<img class="icon-active" src="<?php echo $dist_path; ?>images/general/youtube-gray.svg" alt=""/>
					</div>
					<span>Youtube</span>
				</a>
			</div>
		</div>
	</div>
	<!-- END PROMO CONTROLS -->
	<div class="promo-tabs">
		<!-- NEWS SLIDER -->
		<div class="promo-tab__item active">
			<div class="slider-elem news-slider loading">
				<?php 
				// GET THE POSTS
				$postsnews = get_posts(array('numberposts' => -1,'post_type' => 'post'));
				foreach ( $postsnews as $postsnew ) {
				?>
					<a href="<?php echo get_permalink( $post->ID ) ?>" class="news-slider__item">
						<h2><?php echo $postsnew->post_title; ?></h2>
						<p><?php echo $postsnew->post_content; ?></p>
						<div class="more"><span>Read more</span>
							<svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/></svg>
						</div>
					</a>
				<?php
				}
				?>
			</div>
			<!-- CONTROLS LEFT / RIGHT -->
			<a href="#" class="btn-prev">
				<span><svg class="icon-prev" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-prev-big"/></svg></span>
			</a>
			<a href="#" class="btn-next">
				<span><svg class="icon-prev" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-next-big"/></svg></span>
			</a>
		</div>
		<!-- TWITTER SLIDER -->
		<div class="promo-tab__item" id="ec_tt">
			<?php 
				global $wpdb;
				$post_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'twitter'");
				$tt_tweets = get_field('tt_tweets', $post_id);
				$tt_retweets = get_field('tt_retweets', $post_id);
				$tt_messages = get_field('tt_messages', $post_id);
				$twitter_account = get_field('twitter_account', $post_id);
			?>
			<div class="slider-elem tweeter-slider">
					
			</div>
			<a href="#" class="btn-prev">
				<span><svg class="icon-prev" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-prev-big"/></svg></span>
			</a>
			<a href="#" class="btn-next">
				<span><svg class="icon-prev" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-next-big"/></svg></span>
			</a>
			<script>window.twttr = (function(d, s, id) {
				var js, fjs = d.getElementsByTagName(s)[0],
				t = window.twttr || {};
				if (d.getElementById(id)) return t;
				js = d.createElement(s);
				js.id = id;
				js.src = "https://platform.twitter.com/widgets.js";
				//js.src = "<? echo $dist_path; ?>/scripts/separate-js/widgets.js";
				fjs.parentNode.insertBefore(js, fjs);
				t._e = [];
				t.ready = function(f) {
					t._e.push(f);
				};
				return t;
			}(document, "script", "twitter-wjs"));
			</script>


			<script>
				jQuery(document).ready(function($){
					var noTwitt = '<div class="notwitt"><div class="img-w"><img src="<?php echo $dist_path; ?>images/general/bigtwitt.svg" alt=""/></div><h2>Oops! <br /> Something went wrong.</h2><p>While we are working on fixing this, you can always access our latest tweets here: </p><p><a href="http://www.twitter.com/EuroChemGroup">www.twitter.com/EuroChemGroup</a></p></div>';

					$.ajax({
						url: '<?php echo $dist_path_t; ?>/lib/twitter/get_tweets.php?tt_tweets=<?php echo $tt_tweets; ?>&tt_retweets=<?php echo $tt_retweets; ?>&tt_messages=<?php echo $tt_messages; ?>&twitter_account=<?php echo $twitter_account; ?>',
						type: 'GET',
						dataType: 'JSON',
						success: function(response) {
							if (typeof response.errors === 'undefined' || response.errors.length < 1) {
								var $tweets = $('.tweeter-slider');
								$.each(response, function(i, obj) {
									$tweets.append('<div class="embedded-tweet"><blockquote data-link-color="#55acee" lang="es"><p lang="en">' + obj.text + '</p>— Euro Chem (@EuroChemGroup)<a href="https://twitter.com/EuroChemGroup/status/'+obj.id_str+'">tweet</a></blockquote></div>');
								});
							} else {
								$('#ec_tt').find('.tweeter-slider').hide();
								$('#ec_tt').find('.btn-prev').hide();
								$('#ec_tt').find('.btn-next').hide();
								$('#ec_tt').append(noTwitt);
							}
						},
						error: function(errors) {
							$('#ec_tt').find('.tweeter-slider').hide();
							$('#ec_tt').find('.btn-prev').hide();
							$('#ec_tt').find('.btn-next').hide();
							$('#ec_tt').append(noTwitt);
						}
					});
				});

			</script>

		</div>
		<!-- YOUTUBE SLIDER -->
		<div class="promo-tab__item" id="ec_yt">
			<?php 
				global $wpdb;
				$post_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'youtube'");
				$yt_playlist = get_field('yt_playlist', $post_id);
				$yt_max_results = get_field('yt_max_results', $post_id);
				$yt_channel_id = get_field('yt_channel_id', $post_id);
					
			?>
			<div class="slider-elem youtube-slider">
					

			</div>
			<a href="#" class="btn-prev">
				<span><svg class="icon-prev" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-prev-big"/></svg></span>
			</a>
			<a href="#" class="btn-next">
				<span><svg class="icon-prev" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-next-big"/></svg></span>
			</a>
			<script>
				jQuery(document).ready(function($){
					var noYT = '<div class="notwitt"><div class="img-w"><img src="<?php echo $dist_path; ?>images/general/bigtwitt.svg" alt=""/></div><h2>Oops! <br /> Something went wrong.</h2><p>While we are working on fixing this, you can always access our latest videos here: </p><p><a href="https://www.youtube.com/channel/UCRzZnj2urGueOzJbAuXlL6g">EuroChem Group AG</a></p></div>';

					$.ajax({
						url: 'https://www.googleapis.com/youtube/v3/channels?part=snippet%2C+id&id=<?php echo $yt_channel_id; ?>&key=AIzaSyBS_X-rgb-PYF5p7eJOvpN_QR6lBZG9eb8',
						type: 'GET',
						dataType: 'JSON',
						success: function(response) {
							if (response.pageInfo.totalResults > 0) {
							////////////
								$.ajax({
									url: 'https://www.googleapis.com/youtube/v3/playlistItems?part=snippet%2Cid&maxResults=<?php echo $yt_max_results; ?>&playlistId=<?php echo $yt_playlist; ?>&fields=items&key=AIzaSyBS_X-rgb-PYF5p7eJOvpN_QR6lBZG9eb8',
									type: 'GET',
									dataType: 'JSON',
									success: function(response) {
										if (typeof response.errors === 'undefined' || response.errors.length < 1) {
											//console.log(response.items)
											var $ytvideos = $('.youtube-slider');
											$.each(response.items, function(i, obj) {
												var ytdate = obj.snippet.publishedAt;
												var MyDate = new Date(Date.parse(ytdate.replace(/ *\(.*\)/,"")));
												var date_Str = MyDate.getMonth() + 1 + "/" + MyDate.getDate()+ "/"+MyDate.getFullYear();
												$.getJSON('https://www.googleapis.com/youtube/v3/videos?part=statistics&id='+obj.snippet.resourceId.videoId+'&key=AIzaSyBS_X-rgb-PYF5p7eJOvpN_QR6lBZG9eb8', function(data) {
													$ytvideos.append('<a href="https://www.youtube.com/watch?v='+obj.id.videoId+'" class="youtube-slider__item"><div class="img-w"><div class="btn-play"><svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/></svg></div><img src="'+obj.snippet.thumbnails.medium.url+'" alt=""/></div><div class="text-w"><p>'+obj.snippet.title+'</p><p class="autor">by EuroChem Group AG</p></div><p class="views"><span>'+data.items[ 0 ].statistics.viewCount+'Views </span> * <span>'+date_Str+'</span></p></a>');
													//alert ("viewCount: " + data.items[ 0 ].statistics.viewCount);
												});
											});
										} else {
											$('#ec_yt').find('.youtube-slider').hide();
											$('#ec_yt').find('.btn-prev').hide();
											$('#ec_yt').find('.btn-next').hide();
											$('#ec_yt').append(noYT);
										}
									},
									error: function(errors) {
										$('#ec_yt').find('.youtube-slider').hide();
										$('#ec_yt').find('.btn-prev').hide();
										$('#ec_yt').find('.btn-next').hide();
										$('#ec_yt').append(noYT);
									}
								});
							} else {
								$('#ec_yt').find('.youtube-slider').hide();
								$('#ec_yt').find('.btn-prev').hide();
								$('#ec_yt').find('.btn-next').hide();
								$('#ec_yt').append(noYT);
							}
							///////////	
						},
						error: function(errors) {
							$('#ec_yt').find('.youtube-slider').hide();
							$('#ec_yt').find('.btn-prev').hide();
							$('#ec_yt').find('.btn-next').hide();
							$('#ec_yt').append(noYT);
						}
					});
				});

			</script>
		</div>

	</div>
</div>