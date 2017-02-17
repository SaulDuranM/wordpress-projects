<?php
/**
 * Template Name: EuroChem DownloadCentre
 */
?>
<?php while (have_posts()) : the_post(); ?>
	<?php
	function create_zip($files = array(),$destination = '',$overwrite = true) {
		if(file_exists($destination) && !$overwrite) { return false; }
		$valid_files = array();
		if(is_array($files)) {
			foreach($files as $file) {
				if(file_exists($file)) {
					$valid_files[] = $file;
				}
			}
		}
		if(count($valid_files)) {

			$zip = new ZipArchive();
			if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
				return false;
			}
			foreach($valid_files as $file) {
				//echo "File".$file;
				$zip->addFile($file,basename($file));
			}
			$zip->close();
			return file_exists($destination);
		} else {
			return false;
		}
	}

	$files_to_zip = [];
	?>
	
	<?php 
  	$dist_path = get_template_directory_uri() . '/dist/';
  	$dist_path_t = get_template_directory_uri();
  	?>

  	<!-- *********** -->
  	<!-- MAIN BANNER -->
  	<!-- *********** -->
  	<?php 
  	$mb_s_image_background =  get_field('mb_s_image_background');
  	$mb_s_icon_heading =  get_field('mb_s_icon_heading');
  	$mb_s_heading = get_field('mb_s_heading');
  	$mb_s_subheading = get_field('mb_s_subheading');
  	
  	?>
  	
  	<div class="main-banner no-bunnerpp" style="background-image: url('<?php echo $mb_s_image_background; ?>')">
  		<div class="main-banner-i clearfix">
  			<div class="main-banner__text">
  				<div class="img-w"><img src="<?php echo $mb_s_icon_heading; ?>" alt=""/></div>
  				<h2><?php echo $mb_s_heading; ?></h2>
  				<p><?php echo $mb_s_subheading; ?></p>
  			</div>
  		</div>
  	</div>

  	<!-- ********************** -->
  	<!-- DOWNLOAD CENTRE HEADER -->
  	<!-- ********************** -->

  	<div class="main-tabs main-tabs_type-2">
  		<div class="main-tabs-i">
  			<ul class="clearfix">
  				<li data-tab="financial" class="tab-room active">
  					<a href="#">
  						<div class="main-tabs__icon">
  							<div class="icons-w icons-sun">
  								<img class="icon-def" src="<? echo $dist_path; ?>images/content/fin-results-blue.svg" alt=""/>
  								<img class="icon-active" src="<? echo $dist_path; ?>images/content/fin-results-white.svg" alt=""/>
  							</div>
  							<span>Financial results</span>
  						</div>
  					</a>
  				</li>
  				<li data-tab="annual" class="tab-room">
  					<a href="#">
  						<div class="main-tabs__icon">
  							<div class="icons-w icons-news">
  								<img class="icon-def" src="<? echo $dist_path; ?>images/content/reports-blue.svg" alt=""/>
  								<img class="icon-active" src="<? echo $dist_path; ?>images/content/reports-white.svg" alt=""/>
  							</div>
  							<span>Annual reports</span>
  						</div>
  					</a>
  				</li>
  				<li data-tab="social" class="tab-room">
  					<a href="#">
  						<div class="main-tabs__icon">
  							<div class="icons-w icons-tweet">
  								<img class="icon-def" src="<? echo $dist_path; ?>images/content/soc-reports-blue.svg" alt=""/>
  								<img class="icon-active" src="<? echo $dist_path; ?>images/content/soc-reports-white.svg" alt=""/>
  							</div>
  							<span>Social reports</span>
  						</div>
  					</a>
  				</li>
  				<li data-tab="company" class="tab-room">
  					<a href="#">
  						<div class="main-tabs__icon">
  							<div class="icons-w icons-video">
  								<img class="icon-def" src="<? echo $dist_path; ?>images/content/company-present-blue.svg" alt=""/>
  								<img class="icon-active" src="<? echo $dist_path; ?>images/content/company-present-white.svg" alt=""/>
  							</div>
  							<span>Company presentations</span>
  						</div>
  					</a>
  				</li>
  			</ul>
  		</div>
  	</div>

  	<!-- ***************** -->
  	<!-- FINANCIAL REPORTS -->
  	<!-- ***************** -->

  	<?php 
  	$dc_key_financial_data =  get_field('dc_key_financial_data');
  	$sizefile = filesize(get_attached_file( $dc_key_financial_data )) / 1024;
  	$filetype = wp_check_filetype(get_attached_file( $dc_key_financial_data ));
  	$link = wp_get_attachment_url( $dc_key_financial_data );
  	?>
  	<div class="download-centre tabs-show" id="financial">
  		<div class="download-centre-i">
  			<div class="row row_pb49 row_centered">
  				<a href="<?php echo $link; ?>" class="btn-round btn-download">Download key financial data (<span style="text-transform: uppercase;"><?php echo $filetype['ext']; ?></span>, <?php echo round($sizefile); ?> kB)
  					<svg class="icon-pdf" role="img" title="icon-pdf">
  						<use xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-pdf"/>
  					</svg>
  				</a>
  			</div>

  			<!-- DOWNLOAD LIST -->
  			<div class="download-list">
                <div class="download-list-i">
                	<?php 
                	if( have_rows('dc_financial_result') ):
                	while( have_rows('dc_financial_result') ): the_row();
                	$dc_financial_result_year = get_sub_field('dc_financial_result_year');
                	//FILES
                	$files = [];
                	$listfilesq1 = '';
                	$listfilesq2 = '';
                	$listfilesq3 = '';
                	$listfilesq4 = '';
                	// Q1
					if( have_rows('dc_financial_result_q1') ):
						while( have_rows('dc_financial_result_q1') ): the_row();
						$dc_financial_result_item = get_sub_field('dc_financial_result_item');
						$dc_financial_result_file = get_sub_field('dc_financial_result_file');
						$sizefile = filesize(get_attached_file( $dc_financial_result_file )) / 1024;
						$filetype = wp_check_filetype(get_attached_file( $dc_financial_result_file ));
						$link = wp_get_attachment_url( $dc_financial_result_file );
						$files[] = get_attached_file($dc_financial_result_file);
						$listfilesq1 .= '<li>
							<a href="'.$link.'" target="_blank">
								<svg class="icon-pdf" role="img" title="icon-pdf">
									<use xlink:href="'.$dist_path.'images/general/svgdefs.svg#icon-pdf"/>
								</svg>
								'.$dc_financial_result_item.'
								<span style="text-transform: uppercase;">'.$filetype['ext'].', '.round($sizefile).'KB</span>
							</a>
							</li>';
						endwhile;
					endif;
					// Q2
					if( have_rows('dc_financial_result_q2') ):
						while( have_rows('dc_financial_result_q2') ): the_row();
						$dc_financial_result_item = get_sub_field('dc_financial_result_item');
						$dc_financial_result_file = get_sub_field('dc_financial_result_file');
						$sizefile = filesize(get_attached_file( $dc_financial_result_file )) / 1024;
						$filetype = wp_check_filetype(get_attached_file( $dc_financial_result_file ));
						$link = wp_get_attachment_url( $dc_financial_result_file );
						$files[] = get_attached_file($dc_financial_result_file);
						$listfilesq2 .= '<li>
							<a href="'.$link.'" target="_blank">
								<svg class="icon-pdf" role="img" title="icon-pdf">
									<use xlink:href="'.$dist_path.'images/general/svgdefs.svg#icon-pdf"/>
								</svg>
								'.$dc_financial_result_item.'
								<span style="text-transform: uppercase;">'.$filetype['ext'].', '.round($sizefile).'KB</span>
							</a>
							</li>';
						endwhile;
					endif;
					// Q3
					if( have_rows('dc_financial_result_q3') ):
						while( have_rows('dc_financial_result_q3') ): the_row();
						$dc_financial_result_item = get_sub_field('dc_financial_result_item');
						$dc_financial_result_file = get_sub_field('dc_financial_result_file');
						$sizefile = filesize(get_attached_file( $dc_financial_result_file )) / 1024;
						$filetype = wp_check_filetype(get_attached_file( $dc_financial_result_file ));
						$link = wp_get_attachment_url( $dc_financial_result_file );
						$files[] = get_attached_file($dc_financial_result_file);
						$listfilesq3 .= '<li>
							<a href="'.$link.'" target="_blank">
								<svg class="icon-pdf" role="img" title="icon-pdf">
									<use xlink:href="'.$dist_path.'images/general/svgdefs.svg#icon-pdf"/>
								</svg>
								'.$dc_financial_result_item.'
								<span style="text-transform: uppercase;">'.$filetype['ext'].', '.round($sizefile).'KB</span>
							</a>
							</li>';
						endwhile;
					endif;
					// Q4
					if( have_rows('dc_financial_result_q4') ):
						while( have_rows('dc_financial_result_q4') ): the_row();
						$dc_financial_result_item = get_sub_field('dc_financial_result_item');
						$dc_financial_result_file = get_sub_field('dc_financial_result_file');
						$sizefile = filesize(get_attached_file( $dc_financial_result_file )) / 1024;
						$filetype = wp_check_filetype(get_attached_file( $dc_financial_result_file ));
						$link = wp_get_attachment_url( $dc_financial_result_file );
						$files[] = get_attached_file($dc_financial_result_file);
						$listfilesq4 .= '<li>
							<a href="'.$link.'" target="_blank">
								<svg class="icon-pdf" role="img" title="icon-pdf">
									<use xlink:href="'.$dist_path.'images/general/svgdefs.svg#icon-pdf"/>
								</svg>
								'.$dc_financial_result_item.'
								<span style="text-transform: uppercase;">'.$filetype['ext'].', '.round($sizefile).'KB</span>
							</a>
							</li>';
						endwhile;
					endif;

					$files_to_zip[] = $files;
					$dest = 'downloads/financial_results_all_'.$dc_financial_result_year.'.zip';
					$zip_all = create_zip($files_to_zip[0], $dest);
					?>
                	<!-- DOWNLOAD ITEM Q-->
                	<div class="list-item">
                		<div class="item">
                			<div class="item-i">
                				<table>
                					<tr>
                						<td>
                							<div class="cell-inner cell-inner_main">
                								<h2 class="title"><?php echo $dc_financial_result_year; ?></h2>
                								<a href="/<?php echo $dest; ?>" class="download-all">
                									<span>Download all</span>
                									<span>
                										<svg class="icon-pdf" role="img" title="icon-pdf">
                											<use xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-pdf"/>
                										</svg>
                									</span>
                								</a>
                								<div class="line line_bottom"></div>
                							</div>
                						</td>
                						<!-- Q1 -->
                						<td>
                							<div class="cell-inner">
                								<h2 class="title">Q1</h2>
                								<div class="file-list">
                									<div class="file-list-i">
                										<ul>
                											<?php 
										                		echo $listfilesq1;
										                	?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <!-- Q2 -->
                                        <td>
                                        	<div class="cell-inner">
                                        		<h2 class="title">Q2</h2>
                                        		<div class="file-list">
                                        			<div class="file-list-i">
                                        				<ul>
                                        					<?php 
										                		echo $listfilesq2;
										                	?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <!-- Q3 -->
                                        <td>
                                        	<div class="cell-inner">
                                        		<h2 class="title">Q3</h2>
                                        		<div class="file-list">
                                        			<div class="file-list-i">
                                        				<ul>
                                        					<?php 
										                		echo $listfilesq3;
										                	?>
                                        				</ul>
                                        			</div>
                                        		</div>
                                        	</div>
                                        </td>
                                        <!-- Q4 -->
                                        <td>
                                        	<div class="cell-inner">
                                        		<h2 class="title">Q4</h2>
                                        		<div class="file-list">
                                        			<div class="file-list-i">
                                        				<ul>
                                        					<?php 
										                		echo $listfilesq4;
										                	?>
                                        				</ul>
                                        			</div>
                                        		</div>
                                        	</div>
                                        </td>

                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- END DOWNLOAD ITEM Q -->
                    <?php endwhile; ?>
					<?php endif;?>
                </div>
            </div>
            <!-- END DOWNLOAD LIST -->
		</div>
	</div>

	<!-- ************** -->
	<!-- ANNUAL REPORTS -->
	<!-- ************** -->

	<?php 
	if( have_rows('dc_annual_reports')):
	?>	
	<div class="reports tabs-show" id="annual" style="opacity: 0;">
		<div class="reports-i">
			<div class="list">
				<?php 
				while( have_rows('dc_annual_reports') ): the_row();
				$dc_ar_report = get_sub_field('dc_ar_report');
				$dc_ar_thumbnail = get_sub_field('dc_ar_thumbnail');
				$dc_ar_file = get_sub_field('dc_ar_file');

				$filesize = filesize(get_attached_file( $dc_ar_file )) / 1024;
				$filetype = wp_check_filetype(get_attached_file( $dc_ar_file ));
				$link = wp_get_attachment_url( $dc_ar_file );

				?>
				<!-- ANNUAL REPORT ITEM -->
				<div class="item">
					<div class="item-i">
						<div class="img">
							<div class="img-i"><img src="<?php echo $dc_ar_thumbnail; ?>" alt=""/></div>
						</div>
						<div class="text">
							<div class="text-i">
								<p><?php echo $dc_ar_report; ?>
									<span><?php echo $filetype['ext'] ?> <?php echo round($filesize); ?>KB</span>
								</p>
							</div>
						</div>
						<!-- HOVER -->
						<div class="hover">
							<div class="hover-i">
								<div class="row">
									<a href="<?= $link; ?>" class="btn-round btn-round-whitebg" download>
										Download pdf
										<svg class="icon-arr-nav-left" role="img" title="icon-arr-nav-left">
											<use xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-nav-left"/>
										</svg>
									</a>
								</div>
								<div class="row">
									<a href="<?= $link; ?>" class="btn-round btn-round-whitebg" target="_blank">
										View online
										<svg class="icon-arr-nav-left" role="img" title="icon-arr-nav-left">
											<use xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-nav-left"/>
										</svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- END ANNUAL REPORT ITEM -->
				<?php endwhile; ?>
            </div>

        </div>
    </div>
    <?php endif;?>


	<!-- ************** -->
	<!-- CONTACT BOTTOM -->
	<!-- ************** -->

	<?php get_template_part('templates/contact', 'contact'); ?>

	<!-- ************** -->
  	<!-- CHANGE SECTION -->
  	<!-- ************** -->

  	<script>
  	jQuery(document).ready(function($){
  		//$("#annual").delay(4000).hide();
  		//$('.item').delay(2000).height("100%");
  		setTimeout(function(){$("#annual").hide();}, 2000);

  		$(".tab-room").click(function(event) {
  			event.preventDefault();
  			$(".tabs-show").hide();
  			$(".tab-room").removeClass("active");

  			var tab = $(this).data("tab");
  			$("#"+tab).css('opacity', 1);
  			$("#"+tab).show();
  			$(this).addClass("active")
		});
  	});
  	</script>


<?php endwhile; ?>	