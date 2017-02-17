<?php 
// VACANCY
?>
<?php while (have_posts()) : the_post(); ?>
	<?php 
  	
  	$dist_path = get_template_directory_uri() . '/dist/';
  	$dist_path_t = get_template_directory_uri();
  	$postid = get_the_ID();

  	//ACF DATA
  	$ca_deadline =  get_field('ca_deadline');
  	$y = substr($ca_deadline, 0, 4);
	$m = substr($ca_deadline, 4, 2);
	$d = substr($ca_deadline, 6, 2);
	$time = strtotime("{$d}-{$m}-{$y}");

	$ca_requirements =  get_field('ca_requirements');
	$ca_estimated_monthly_income =  get_field('ca_estimated_monthly_income');
	$ca_description =  get_field('ca_description');
	$ca_work_experience =  get_field('ca_work_experience');
	$ca_schedule =  get_field('ca_schedule');
	$ca_type_of_employment =  get_field('ca_type_of_employment');
    $ca_application_form =  get_field('ca_application_form');

    $ca_location_map = get_field('ca_location_map');

  	//$ca_deadline = DateTime::createFromFormat('Ymd', get_field('ca_deadline'));
  	?>

	<!-- *********** -->
	<!-- MAIN BANNER -->
	<!-- *********** -->
    <div class="main-banner main-banner-380 main-banner-opacity hidden-banner" style="background-image: url('<?= $dist_path; ?>images/content/bg-1682-291.jpg')"></div>	
	


	<!-- ************** -->
	<!-- VACANCY DETAIL -->
	<!-- ************** -->
	<div class="shift-box shift-box_event">
		<div class="shift-box_i clearfix">
			<div class="shift-box__content">
				<!-- RELATED VACANCIES -->
				<div class="related-articles">
					<h3>RELATED VACANCIES:</h3>
					<div class="related-articles__list clearfix">
						<div class="related-articles__item">
							<a href="#">
								<div class="arrow arrow-left">
									<svg class="icon-prev-big" role="img" title="share-fb">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-arr-right"></use>
									</svg>
								</div>
								<div class="icon">
									<svg class="icon-rel-art" role="img" title="art">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-rel-art"></use>
									</svg>
								</div>
								<div class="text" style="word-wrap: break-word;">
									<h2>Engineer of preproduction</h2>
								</div>
							</a>
						</div>
						<!--related-articles__item end-->
						<div class="related-articles__item">
							<a href="#">
								<div class="arrow arrow-right">
									<svg class="icon-next-big" role="img" title="share-fb">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"></use>
									</svg>
								</div>
								<div class="icon">
									<svg class="icon-rel-art" role="img" title="art">
										<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-rel-art"></use>
									</svg>
								</div>
								<div class="text" style="word-wrap: break-word;">
									<h2>Specialist training department production QOL</h2>
								</div>
							</a>
						</div>
						<!--related-articles__item end-->
					</div>
				</div>
                <!-- RELATED VACANCIES END -->

                <div class="breadcrumbs-w">
                	<div class="breadcrumbs">
                		<a href="">Careers</a>
                		&gt;
                	</div>
                </div>
                <!--breadcrumbs-w end-->

                <div class="article article-no-after">
                	<h1 class="article__title"><?php the_title(); ?></h1>
                	<div class="row clearfix">
                		<p class="article__date">Posted: <?php the_date(); ?></p>
                	</div>


                    <div class="row">
                        <p class="article__subtitle">
                            Deadline for applications: <?= date('dS F Y', $ca_deadline); ?>
                        </p>
                    </div>

                    <div class="article__info  clearfix">
                    	<div class="article__option clearfix">
                    		<div class="social-aside">
                    			<p>Share</p>
                    			<div class="social-preview">
                    				<div class="icon">
                    					<svg role="img" title="share" class="share">
                    						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-share-this"></use>
                    					</svg>
                    					<svg role="img" title="share" class="close">
                    						<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-close-wh"></use>
                    					</svg>
                    				</div>
                    			</div>
                    			<ul>
                    				<li>
                    					<a href="#">
                    						<svg role="img" title="icon-email" class="icon">
                    							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-email"></use>
                    						</svg>
                    					</a>
                    				</li>
                    				<li>
                    					<a href="#">
                    						<svg role="img" title="share-fb" class="icon">
                    							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-share-tw2"></use>
                    						</svg>
                    					</a>
                    				</li>
                    				<li>
                    					<a href="#">
                    						<svg role="img" title="share-fb" class="icon">
                    							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-share-fb2"></use>
                    						</svg>
                    					</a>
                    				</li>
                    				<li>
                    					<a href="#">
                    						<svg role="img" title="share-fb" class="icon">
                    							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-share-in2"></use>
                    						</svg>
                    					</a>
                    				</li>
                    			</ul>
                    		</div>
                            <!--social-aside end-->

                        </div>
                    </div>
                    <!--article__info end-->


                    <div class="vacancy-map-wrap">
                        <div class="vacancy-map" id="vacancy-map" style="position: relative; overflow: hidden; transform: translateZ(0px); background-color: rgb(229, 227, 223);">
                        	
                        </div>
                    </div>
                    <script type="text/javascript">
                        jQuery(function ($) {
                            $(window).load(function() {
                                vacancy_map(<?= $ca_location_map['lat']; ?>, <?= $ca_location_map['lng']; ?>, '<?= $dist_path; ?>');
                            });   
                        });
                        
                        
                    </script>

                    <div class="vacancy-info">
                    	<div class="vacancy-info-i">
                    		<div class="article__tags">
                    			<p>Tags:</p>
                    			<div class="article__tags__list">
                    				<a href="#">Products</a>
                    				<a href="#">Sustainability</a>
                    				<a href="#">Customers</a>
                    			</div>
                    		</div>
                            <!--article__tags end-->
                            <div class="right">
                            	<a href="#" class="article__option__btn">
                            		<span>Print</span>
                            		<svg class="icon-print" role="img" title="print">
                            			<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-print"></use>
                            		</svg>
                            	</a>
                            	<a href="#" class="btn btn-round">Apply now</a>
                            </div>
                        </div>
                    </div>

                    <div class="post">
                    	<h5><b>The requirements:</b></h5>
                    	<p><?= $ca_requirements; ?></p>

                    	<h5><b>Estimated monthly income:</b></h5>
                    	<p><?= $ca_estimated_monthly_income; ?></p>

                    	<h5><b>Description:</b></h5>
                    	<p><?= $ca_description; ?></p>

                    	<h5><b>Work experience:</b></h5>
                    	<p><?= $ca_work_experience; ?></p>

                    	<h5><b>Schedule:</b></h5>
                    	<p><?= $ca_schedule; ?></p>

                    	<h5><b>Type of employment:</b></h5>
                    	<p><?= $ca_type_of_employment; ?></p>
                    </div>
                    <div class="btn-row btn-row-vacancy">
                    	<a href="<?= $ca_application_form; ?>" download class="btn btn-round btn-download">
                    		<span>
                    			<svg class="icon-pdf" role="img" title="icon-pdf">
                    				<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="s<?= $dist_path; ?>images/general/svgdefs.svg#icon-pdf"></use>
                    			</svg>
                    			Download an application form (DOC, 544 kB)
                    		</span>
                    	</a>
                    </div>

                    <div class="apply-form">
                    	<p>or</p>
                    	<h2>Apply online</h2>
                    	<form action="javascript:void(0);" method="post" class="apply-form-i" id="vacancyForm">
                            <div class="row clearfix">
                                <div class="col">
                                    <div class="inp">
                                        <input type="text" placeholder="First name" id="userName">
                                    </div>
                                    <div class="inp">
                                        <input type="text" placeholder="Last name" id="userLName">
                                    </div>
                                    <div class="inp">
                                        <input type="text" placeholder="E-mail address" id="userEmail">
                                    </div>
                                    <div class="inp">
                                        <a href="#" class="btn btn-round btn-upload">
                                            Upload your CV
                                            <svg class="icon-upload" role="img" title="icon-upload">
                                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-upload"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="inp">
                                        <textarea placeholder="Cover information..." id="userCover"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-round">Submit
                                    <svg class="icon-arr-left" role="img" title="share-fb">
                                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<?= $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"></use>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <!--article end-->
        </div>
        <!--shift-box-content end-->
    </div>
    <script type="text/javascript">
        jQuery(document).ready(function($){
            $("#vacancyForm").submit(function(){
                var url = '<?= site_url() ?>/gravityformsapi/forms/2/submissions';
                submitForm( url );

                return(false);
            });
            //SUBMIT
            function submitForm(url){
                var inputValues = {
                    input_1: $("#userName").val(),
                    input_2: $("#userEmail").val(),
                    input_5: $("#userLName").val(),
                    input_4: $("#userCover").val(),
                    input_6: window.location.pathname
                };
                var data = {
                    input_values: inputValues
                };
                $.ajax({
                    url: url,
                    type: 'POST',
                    data: JSON.stringify(data),
                    beforeSend: function (xhr, opts) {
                        //$sending.show();
                    }
                })
                .done(function (data, textStatus, xhr) {
                    //$sending.hide();
                    var response = JSON.stringify(data.response, null, '\t');
                    console.log(response)
                    //$results.val(response);
                })
            }
        });
    </script>


<?php endwhile; ?>		

