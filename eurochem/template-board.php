<?php
/**
 * Template Name: EuroChem Board & Managment
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php 
  	
  	$dist_path = get_template_directory_uri() . '/dist/';
  	$dist_path_t = get_template_directory_uri();

  	?>

  	<!-- *********** -->
  	<!-- MAIN BANNER -->
  	<!-- *********** -->
  	<?php 
  	
  	$mb_background =  get_field('mb_background');
  	$mb_icon_heading =  get_field('mb_icon_heading');
  	$mb_heading = get_field('mb_heading');
  	$mb_subheading = get_field('mb_subheading');
  	$mb_pop_image = get_field('mb_pop_image');
  	$mb_pop_heading = get_field('mb_pop_heading');
  	$mb_pop_link = get_field('mb_pop_link');
  	?>

  	<div class="main-banner main-banner-small" style="background-image: url('<?= $mb_background; ?>')">
        <div class="main-banner-i clearfix">
            <div class="main-banner__text">
                <div class="img-w"><img src="<?= $mb_icon_heading; ?>" alt=""/></div>
                <h2><?= $mb_heading; ?></h2>
            </div>
            <a href="<?= $mb_pop_link; ?>" class="main-banner__pop main-banner__pop_blue-bg">
                <p><?= $mb_pop_heading; ?></p>
                <div class="more">
                    <svg class="icon-arr-left" role="img" title="share-fb">
                        <use xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/>
                    </svg>
                </div>
            </a>
        </div>
    </div>

    <!-- ********** -->
  	<!-- BOARD INFO -->
  	<!-- ********** -->
    <div class="board-info">
    	<div class="board-info-i">
            <table>
                <tr>
                	<td>
                        EuroChem has brought together individuals with a wide range of experience in strategic planning,
                        financial control, auditing, human resources management and other key areas of governance.
                    </td>
                    <td>
                        <a href="#" class="btn btn-round">
                            Regulations for each committee
                            <svg class="icon-arr-left" role="img" title="share-fb">
                                <use xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <!-- ************ -->
  	<!-- BOARD PEOPLE -->
  	<!-- ************ -->

    <div class="board">
        <div class="board-controls">
            <div class="board-controls-i">
            	<ul>
                    <li class="active">
                        <a href="#" data-filter=".board">
                            <span>Board</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-filter=".audit">
                           <span>Audit committee</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-filter=".strategy">
                           <span> Strategy committee</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-filter=".nomination">
                            <span>Nomination & RemunerationCommittee</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-filter=".management">
                            <span>Management</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- -->
        <div class="board-list">
            <div class="board-list-i">
            	<?php 
            	$posts = get_posts(array('numberposts' => -1,'post_type' => 'people', 'order' => 'ASC'));
            	foreach ( $posts as $post ) {
            		$peo_position =  get_field('peo_position', $post->ID);
            		$peo_picture =  get_field('peo_picture', $post->ID);
            		$peo_biography =  get_field('peo_biography', $post->ID);
            		$peo_member =  get_field('peo_member', $post->ID);
                $peo_member_obj =  get_field_object('peo_member', $post->ID);
                $labels = '';
                foreach ($peo_member as $peo_mem) {
                   $labels.= urlencode($peo_member_obj['choices'][ $peo_mem ]).',';
                }
            		$vars_item = $dist_path.'|'.urlencode($post->post_title).'|'.urlencode($peo_position).'|'.$peo_picture.'|'.urlencode($peo_biography);
            	?>
            	<div class="item <?= implode(' ', $peo_member);?>">
                    <a href="<?= $dist_path_t; ?>/templates/people.php?path=<?= $vars_item; ?>&member=<?= $labels; ?>&id=<?=$post->ID;?>" rel="board" class="fancybox.ajax" data-people="<?= $dist_path_t; ?>/templates/people.php?path=<?= $vars_item; ?>&member=<?= $labels; ?>&id=<?=$post->ID;?>">
                        <div class="item__i">
                            <div class="img"><img src="<?= $peo_picture; ?>" alt=""/></div>
                            <div class="text">
                                <h2><?= $post->post_title; ?></h2>
                                <p><?= $peo_position; ?></p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php } ?>

            	

            </div>
        </div>    


    </div>    

<?php endwhile; ?>	