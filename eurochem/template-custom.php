<?php
/**
 * Template Name: EuroChem Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <?php $dist_path = get_template_directory_uri() . '/dist/';  ?>

	<div class="main-slider loading">
		<div class="slide-item" style="background-image: url('http://eurochem.instinctif.com/static/img/content/bg-slide.jpg')">
			<div class="slide-text">
				<h1>Feeding the world</h1>
				<p>Lorem ipsum dolor sit amet, consectetur  <br /> adipiscing elit, sed do eiusmod tempor.</p>
			</div>
		</div>
		<div class="slide-item" style="background-image: url('http://eurochem.instinctif.com/static/img/content/bg-slide2.jpg')">
			<div class="slide-text">
				<h1>Feeding the world</h1>
				<p>Lorem ipsum dolor sit amet, consectetur <br /> adipiscing elit, sed do eiusmod tempor.</p>
			</div>
		</div>
		<div class="slide-item" style="background-image: url('http://eurochem.instinctif.com/static/img/content/bg-slide.jpg')">
			<div class="slide-text">
				<h1>Feeding the world</h1>
				<p>Lorem ipsum dolor sit amet, consectetur  <br /> adipiscing elit, sed do eiusmod tempor.</p>
			</div>
		</div>
		<div class="slide-item" style="background-image: url('http://eurochem.instinctif.com/static/img/content/bg-slide2.jpg')">
			<div class="slide-text">
				<h1>Feeding the world</h1>
				<p>Lorem ipsum dolor sit amet, consectetur  <br /> adipiscing elit, sed do eiusmod tempor.</p>
			</div>
		</div>
	</div>





	<!-- NEWS CONTAINER -->
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
					// FOR NOW TEST ... 
					for ($x = 0; $x <= 10; $x++) {
						?>
						<a href="#" class="news-slider__item">
							<h2>A news post <?php echo $x;?></h2>
							<p>Lorem ipsum dolor sit aconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
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
			<div class="promo-tab__item">
				<div class="slider-elem tweeter-slider">
					<?php
					// GET THE TWETTS 
					// FOR NOW TEST ... 
					for ($t = 0; $t <= 10; $t++) {
						?>
						<div class="embedded-tweet">
							<blockquote data-link-color="#55acee" lang="es">
								<p lang="en">just setting up my twttr <?php echo $t;?></p>
								— Jack Dorsey (@jack)
								<a href="https://twitter.com/jack/status/20">marzo 21, 2006</a>
							</blockquote>
						</div>
						<?php
					}
					?>	
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
			</div>
			<!-- YOUTUBE SLIDER -->
			<div class="promo-tab__item">
				<div class="slider-elem youtube-slider">
					<?php 
					// GET THE TWETTS 
					// FOR NOW TEST ... 
					for ($t = 0; $t <= 10; $t++) {
						?>
						<a href="https://www.youtube.com/watch?v=W7xZXN7Fj1Q" class="youtube-slider__item">
							<div class="img-w">
								<div class="btn-play">
									<svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-arr-left"/></svg>
								</div>
								<img src="<?php echo $dist_path; ?>images/general/263x136-ytsl1.jpg" alt=""/>
							</div>
							<div class="text-w">
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem ...</p>
								<p class="autor">by Lorem ipsum</p>
							</div>
							<p class="views"><span>189 views</span>  *  <span>6 months ago</span></p>
						</a>
						<?php
					}
					?>	
				</div>
				<a href="#" class="btn-prev">
					<span><svg class="icon-prev" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-prev-big"/></svg></span>
				</a>
				<a href="#" class="btn-next">
					<span><svg class="icon-prev" role="img" title="share-fb"><use xlink:href="<?php echo $dist_path; ?>images/general/svgdefs.svg#icon-next-big"/></svg></span>
				</a>
			</div>
		</div>
	</div>





	<!--- PRODUCTS -->
	<div class="products-slider">
            <div class="products-slider-i loading">

                <div class="pr-slider__item tabletbg"  data-bgdesc="url('http://eurochem.instinctif.com/static/img/content/bg-994x758-1.jpg')" data-bgtablet="url('static/img/content/bg-500x232-mob.png')">
                    <div class="pr-slider__text">
                        <div class="pr-slider__text-i">
                            <div class="img-w">
                                <img class="icon-shovel" src="http://eurochem.instinctif.com/static/img/content/shovel.svg" alt=""/>
                            </div>
                            <h3>Our products</h3>
                            <p>Lorem ipsum dolor sit aconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
                            <a href="#" class="btn-round">View all
                                <svg class="icon-arr-left" role="img" title="share-fb">
                                    <use xlink:href="static/img/general/svgdefs.svg#icon-arr-left"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>



                

                <div class="pr-slider__item bg-cover" style="background-image: url('http://eurochem.instinctif.com/static/img/content/bg-1682x758-1.jpg')">
                    <div class="pr-slider__text left">
                        <div class="pr-slider__text-i">
                            <div class="img-w">
                                <img class="icon-shovel" src="http://eurochem.instinctif.com/static/img/content/shovel-wh.svg" alt=""/>
                            </div>
                            <h3>Our products</h3>
                            <p>Lorem ipsum dolor sit aconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
                            <a href="#" class="btn-round">View all
                                <svg class="icon-arr-left" role="img" title="share-fb">
                                    <use xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-arr-left"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="pr-slider__item bg-right tabletbg"  data-bgdesc="url('http://eurochem.instinctif.com/static/img/content/bg-994x758-2.jpg')" data-bgtablet="url('http://eurochem.instinctif.com/static/img/content/bg-500x232-2-mob.png')">
                    <div class="pr-slider__text left">
                        <div class="pr-slider__text-i">
                            <div class="img-w">
                                <img class="icon-shovel" src="http://eurochem.instinctif.com/static/img/content/shovel.svg" alt=""/>
                            </div>
                            <h3>Our products</h3>
                            <p>Lorem ipsum dolor sit aconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
                            <a href="#" class="btn-round">View all
                                <svg class="icon-arr-left" role="img" title="share-fb">
                                    <use xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-arr-left"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="pr-slider__item bg-cover" style="background-image: url('http://eurochem.instinctif.com/static/img/content/bg-1682x758-1.jpg')">
                    <div class="pr-slider__text pr-slider__text-left">
                        <div class="pr-slider__text-i">
                            <div class="img-w">
                                <img class="icon-shovel" src="http://eurochem.instinctif.com/static/img/content/shovel-wh.svg" alt=""/>
                            </div>
                            <h3>Our products</h3>
                            <p>Lorem ipsum dolor sit aconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
                            <a href="#" class="btn-round">View all
                                <svg class="icon-arr-left" role="img" title="share-fb">
                                    <use xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-arr-left"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <!-- VALUE CHAIN -->
        <div class="value-chain tabletbg" data-bgdesc="url('http://eurochem.instinctif.com/static/img/content/bg-1682x489.png')" data-bgtablet="url('http://eurochem.instinctif.com/static/img/content/bg-600x197-mob.png')" style="background-image: url(http://eurochem.instinctif.com/static/img/content/bg-1682x489.png);">
        <!--<div class="value-chain bg-cover" style="background-image: url('static/img/content/bg-1682x820-1.jpg')">-->
            <div class="value-chain-i">
                <div class="value-chain__main">
                    <div class="value-chain__text">
                        <div class="img-w">
                            <img src="http://eurochem.instinctif.com/static/img/content/pyram.svg" alt="">
                        </div>
                        <h3>Our value chain</h3>
                        <p>Lorem ipsum dolor sit aconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
                    </div>
                    <ul>
                        <li><a href="#">Raw materials</a></li>
                        <li><a href="#">Production</a></li>
                        <li><a href="#">Distribution</a></li>
                        <li><a href="#">Logistics</a></li>
                        <li><a href="#">Customers</a></li>
                        <li><a href="#">Social responsibility</a></li>
                    </ul>
                    <a href="#" class="btn-round">Find out more
                        <svg class="icon-arr-left" role="img" title="share-fb">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-arr-left"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>



        <!-- INVESMENT CASE -->
        <div class="investment-case tabletbg" data-bgdesc="url('http://eurochem.instinctif.com/static/img/content/bg-1216x600-1.png')" data-bgtablet="url('http://eurochem.instinctif.com/static/img/content/bg-600x243-mob.png')" style="background-image: url(http://eurochem.instinctif.com/static/img/content/bg-1216x600-1.png);">
        <!--<div class="investment-case bg-cover" style="background-image: url('static/img/content/bg-1682x600-1.jpg')" >-->
            <div class="investment-case-i">
                <div class="decor">
                    <svg class="decor_i" preserveAspectRatio="none" version="1.1" viewBox="0 0 100 100" width="100%" xmlns="http://www.w3.org/2000/svg">
                        <path d="M 0, 0 L 100, 0 L 0, 100 Z" stroke-width="0"></path>
                    </svg>
                </div>
                <div class="investment-case__text">
                    <div class="img-w">
                        <img src="http://eurochem.instinctif.com/static/img/content/pocket.svg" alt="">
                    </div>
                    <h3>Investment case</h3>
                    <p>Lorem ipsum dolor sit aconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
                    <a href="#" class="btn-round">Find out more
                        <svg class="icon-arr-left" role="img" title="share-fb">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-arr-left"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>




        <!-- GLOBAL OPERATIONS -->
        <div class="global-operations clearfix">
            <!--<div class="big-img-w">-->
                <!--<img src="static/img/content/big-map2.png"  data-large="static/img/content/big-map.png" alt=""/>-->
            <!--</div>-->
            <a href="media-centre.html" class="big-img-w">
                <div id="mlens_wrapper_0" style="width: 1294px;"><img src="http://eurochem.instinctif.com/static/img/content/big-map2.png" data-large="http://eurochem.instinctif.com/static/img/content/big-map.png" alt="" data-id="mlens_0"></div>
            </a>
            <div class="global-operations__i">
                <div class="global-operations__text clearfix">
                    <div class="img-w">
                        <img src="http://eurochem.instinctif.com/static/img/content/globe.svg" alt="">
                    </div>
                    <h3>Global operations</h3>
                    <p>Lorem ipsum dolor sit aconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
                    <div class="btn-w">
                        <a href="#" class="btn-round">Production assets
                            <svg class="icon-arr-left" role="img" title="share-fb">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-arr-left"></use>
                            </svg>
                        </a>
                        <a href="#" class="btn-round">Offices
                            <svg class="icon-arr-left" role="img" title="share-fb">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-arr-left"></use>
                            </svg>
                        </a>
                        <a href="#" class="btn-round">Logistics
                            <svg class="icon-arr-left" role="img" title="share-fb">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-arr-left"></use>
                            </svg>
                        </a>
                    </div>
                    <div class="img-small-w">
                        <img src="http://eurochem.instinctif.com/static/img/content/loup-296x296.png" alt="">
                    </div>
                </div>
            </div>
        </div>


        <!-- AT GLANCE -->
        <div class="glance">
            <div class="img-w">
                <img src="http://eurochem.instinctif.com/static/img/content/nlo.svg" alt="">
            </div>
            <h3>At a glance</h3>
            <div class="glance__items">
                <a href="#" class="btn-prev">
                    <svg class="icon-prev" role="img" title="share-fb">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-prev-big"></use>
                    </svg>
                </a>
                <a href="#" class="btn-next">
                    <svg class="icon-prev" role="img" title="share-fb">
                        <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-next-big"></use>
                    </svg>
                </a>
                <ul class="clearfix">
                    <li>
                        <div class="glance__item">
                            <p class="big-text">$1.2bill</p>
                            <p class="small-text">turnover in 2014</p>
                        </div>
                    </li>
                    <li>
                        <div class="glance__item">
                            <p class="big-text">98%</p>
                            <p class="small-text">on the worldsknown phosphate resource is owend by EuroChem</p>
                        </div>
                    </li>
                    <li>
                        <div class="glance__item">
                            <p class="big-text">6,300</p>
                            <p class="small-text">employess worldwide</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <!-- SUST / CAR -->
        <div class="sust-careers">
            <div class="sust-careers-i">
                <ul>
                    <li>
                        <div class="sust-careers__coll">
                            <div class="img-w">
                                <img src="http://eurochem.instinctif.com/static/img/content/bee.svg" alt="">
                            </div>
                            <h3>Sustainability</h3>
                            <p>Lorem ipsum dolor sit aconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
                            <a href="#" class="btn-round">Find out more
                                <svg class="icon-arr-left" role="img" title="share-fb">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-arr-left"></use>
                                </svg>
                            </a>
                        </div>
                    </li>
                    <li>
                        <div class="sust-careers__coll">
                            <div class="img-w">
                                <img src="http://eurochem.instinctif.com/static/img/content/career.svg" alt="">
                            </div>
                            <h3>Careers</h3>
                            <p>Lorem ipsum dolor sit aconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
                            <a href="#" class="btn-round">Find out more
                                <svg class="icon-arr-left" role="img" title="share-fb">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-arr-left"></use>
                                </svg>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>


        <!-- REPORT CENTER -->
        <div class="report-centre">
            <div class="report-centre-i">
                <div class="img-w">
                    <img src="http://eurochem.instinctif.com/static/img/content/case.svg" alt="">
                </div>
                <h3>Reporting centre </h3>
                <div class="btn-report-w">
                    <a href="#">
                        <svg role="img" title="share-fb" class="icon-arr-down">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="http://eurochem.instinctif.com/static/img/general/svgdefs.svg#icon-arr-down"></use>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

<?php endwhile; ?>
