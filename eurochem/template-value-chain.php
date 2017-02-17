<?php
/**
 * Template Name: Our Value Chain
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php //get_template_part('templates/content', 'page'); ?>
  <?php
    $language = pll_current_language('slug');
  	$dist_path = get_template_directory_uri() . '/dist/';
  	$dist_path_t = get_template_directory_uri();
  ?>

  	<div class="valuechain__nav">
            <ul>
                <li class="active home"><a href="#" data-left="2173" data-top="674" data-src="/<?php echo $language?>/vch-home.html"><img class="icon-home" src="/wp-content/themes/eurochem/static/img/content/icon-home-dark.svg" alt=""/></a></li>
                <li><a href="#" data-left="2173" data-top="674" data-src="/<?php echo $language?>/vch-mining" >Mining</a></li>
                <li><a href="#" data-left="3007" data-top="755" data-src="/<?php echo $language?>/vch-oil">Oil & Gas</a></li>
                <li><a href="#" data-left="3766" data-top="1294" data-src="/<?php echo $language?>/vch-logist">Logistics</a></li>
                <li><a href="#" data-left="4491" data-top="967" data-src="/<?php echo $language?>/vch-sales">Sales</a></li>
                <li><a href="#" data-left="5064" data-top="919" data-src="/<?php echo $language?>/vch-fert">Fertilizers</a></li>
            </ul>
        </div>
        <div class="valuechain__nav__mob">
            <ul class="clearfix">
                <li class="active"><a href="#" data-src="vch-home.html"><img src="/wp-content/themes/eurochem/static/img/content/icon-home-blue.svg" alt=""/></a></li>
                <li><a href="#" data-src="vch-mining.html"><img src="/wp-content/themes/eurochem/static/img/content/icon-mining-blue.svg" alt=""/></a></li>
                <li><a href="#" data-src="vch-oil.html"><img src="/wp-content/themes/eurochem/static/img/content/icon-oil-blue.svg" alt=""/></a></li>
                <li><a href="#" data-src="vch-logist.html"><img src="/wp-content/themes/eurochem/static/img/content/icon-logist-blue.svg" alt=""/></a></li>
                <li><a href="#" data-src="vch-sales.html"><img src="/wp-content/themes/eurochem/static/img/content/icon-sales-blue.svg" alt=""/></a></li>
                <li><a href="#" data-src="vch-fert.html"><img src="/wp-content/themes/eurochem/static/img/content/icon-fertil-blue.svg" alt=""/></a></li>
            </ul>

        </div>
        <div class="header-bigimage-w">
            <div class="header-bigimage" >
                <img src="/wp-content/themes/eurochem/static/img/general/big-vch2.jpg" data-srctablet="/wp-content/themes/eurochem/static/img/general/big-vch-tablet.jpg" alt=""/>
            </div>
        </div>

        <div class="loader-w">
            <div class="loader loader-vch">
                <div class="loader__i">
                    <img src="/wp-content/themes/eurochem/static/img/content/loader.svg">
                </div>
            </div>
        </div>

        <div class="valuechain-w valuechain-home">
            <div class="valuechain">
                <div class="valuechain__title show" data-bgimg="/wp-content/themes/eurochem/static/img/content/vch-bgsmall1.jpg">
                    <div class="valuechain__title__text">
                        <div class="img-w">
                            <img class="icon-home" src="/wp-content/themes/eurochem/static/img/content/icon-home.svg" alt=""/>
                        </div>
                        <h3>Our value chain</h3>
                        <p>Lorem ipsum dolor sit aconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labo</p>
                    </div>
                </div>
                <div class="vch-articles-w">
                    <div class="vch-articles">
                        <a href="#" class="article-next">
                            <svg role="img" title="next">
                                <use xlink:href="/wp-content/themes/eurochem/static/img/general/svgdefs.svg#icon-arr-left"/>
                            </svg>
                        </a>
                        <a href="#" class="article-prev">
                            <svg role="img" title="prev">
                                <use xlink:href="/wp-content/themes/eurochem/static/img/general/svgdefs.svg#icon-arr-right"/>
                            </svg>
                        </a>
                        <div class="vch-article-w">
                            <div class="vch-article active">
                                <h1>Adding value through low-cost vertical integration</h1>
                                <h2>Our world-class reserves underpin advanced, cost-efficient and flexible production
                                    capacity, allied to logistics and distribution assets that provide distinct
                                    cost advantages and economies of scale.</h2>
                                <h3>Raw materials</h3>
                                <p>Our reserve base includes natural gas, apatite ore, iron ore and potash.</p>
                                <p>Natural gas is the key constituent of ammonia, the primary component of nitrogen-based
                                    fertilizers. We buy some 75% of our gas requirements from the market and have acquired
                                    our own operator, Severneft-Urengoy, to produce the remaining 25% of our total
                                    annual needs. The weakening of the Russian rouble has considerably lowered the
                                    cost of Severneft-Urengoy gas in US dollar terms. Delivered to Novomoskovskiy Azot,
                                    as of January 2015, the cost of natural gas from Severneft-Urengoy had decreased
                                    to approximately $1.80/mmBtu.</p>
                                <p>We have access to significant reserves of magnetite-apatite ores (high quality phosphate
                                    rock) in Russia and phosphate rock in Kazakhstan. As a considerable addition to our
                                    phosphate segment performance, we also extract baddeleyite and iron ore concentrates
                                    as coproducts of apatite beneficiation. We well both these products on the market,
                                    historically to Asian to Russian customers. We have invested in some of the world’s
                                    biggest reserves of potash in Russia. When our two main sites come on stream, we will
                                    be one of only four fertilizer producers globally to produce nitrogen, phosphate
                                    and potash based fertilizers.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="contact-bottom">
            <div class="contact-bottom-i">
                <div class="title">
                    <div class="img-w">
                        <img src="/wp-content/themes/eurochem/static/img/content/icon-inv-cont.svg" alt=""/>
                    </div>
                    <h3>Contact us</h3>
                </div>
                <div class="contact-bottom__colls">
                    <div class="coll">
                        <p class="name">EuroChem Group Head Office</p>
                        <p class="address">Alpenstrasse 9, 6300 Zug, Switzerland</p>
                        <p class="tel">Tel: + 41 41 710 5006</p>
                    </div>
                    <div class="coll">
                        <p class="name">Moscow Office</p>
                        <p class="address">Dubininskaya Street, 53, p. 6 <br /> 115054 Moscow,</p>
                        <p class="tel">Tel: + 41 41 710 5006</p>
                        <p class="tel">+7 (495) 795-25-27</p>
                        <p class="tel">+7 (495) 663-10-20</p>
                        <p class="tel">Fax: +7 (495) 795-25-32</p>
                        <a class="email" href="mailto:info@eurochem.ru">E-mail: info@eurochem.ru</a>
                    </div>
                    <div class="coll">
                        <p class="name">Olivier Harvey</p>
                        <p class="address">Head of Investor Relations</p>
                        <p class="tel">Tel: +7 (495) 545-39-69</p>
                        <a class="email" href="mailto:ir@eurochemgroup.com">E-mail: ir@eurochemgroup.com</a>
                    </div>
                </div>
            </div>
        </div>





<?php endwhile; ?>
