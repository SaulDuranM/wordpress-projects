<?php
/**
 * Template Name: Blog
 */
?>
<?php 
get_template_part('templates/helpers');
while (have_posts()) : the_post();
$all_posts = get_posts( array( 'posts_per_page' => -1, 'post_type' => 'post', 'order'=> 'DESC', 'orderby' => 'date' ) );
$latest_posts = array_slice($all_posts, 0, 2);

?>
<section class="blog-header">
	<div class="container-fluid">
		<div class="blog-title">
			<h1>CitrusTV Blog</h1>
		</div>
		<!-- LATEST POSTS -->
		<div class="blog-lastest-posts row">
		<?php foreach ( $latest_posts as $latest_post ):
			$post_th = wp_get_attachment_url( get_post_thumbnail_id($latest_post->ID) );			
		?>
			<div class="col-md-6 col-sm-6">
				<div class="blog-post">
					<a href="<?= get_permalink($latest_post->ID) ?>">
						<div class="blog-post-th" style="background-image: url(<?=$post_th;?>)">
							<div class="blog-post-date">
								<div class="blog-post-date-month-day"><?= get_the_date('M d', $latest_post->ID); ?></div>
								<div class="blog-post-date-day-year"><?= get_the_date('l, Y', $latest_post->ID); ?></div>
							</div>
						</div>
					</a>
					<div class="blog-post-data blog-post-data-big">
						<div class="blog-post-title">
							<h2><a href="<?= get_permalink($latest_post->ID) ?>"><?= $latest_post->post_title; ?></a></h2>
						</div>
						<div class="blog-post-content">
							<p><?= get_excerpt_b($latest_post->post_content); ?></p>
						</div>
						<div class="blog-post-footer">
							<?php
							$categories = get_the_category($latest_post->ID);
							?>
							<div class="blog-post-cat-author">
								<? foreach( $categories as $category ): ?>
									<a href="<?= esc_url( get_category_link( $category->term_id ) ); ?>"><?= esc_html( $category->name );?></a>
								<?php endforeach; $recent_author = get_user_by( 'ID', $latest_post->post_author );?> | by <?= $recent_author->display_name;?>
							</div>
							<div class="blog-post-arrow">
								<a href="<?= get_permalink($latest_post->ID) ?>" class="blog-post-arrow-b"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
</section>

<!-- ALL POSTS -->
<section class="blog-posts">
	<div class="container-fluid">
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
								<?php endforeach; $recent_author = get_user_by( 'ID', $all_post->post_author );?> | by <?= $recent_author->display_name; ?>
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
	
</section>

<?php
$banner = get_field('banner'); 
if($banner)
	include(locate_template('templates/banners.php'));
?>

<?php endwhile; ?> 