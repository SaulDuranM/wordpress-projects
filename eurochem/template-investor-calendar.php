<?php
/**
 * Template Name: EuroChem Investor Calendar
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
  	
    <div class="main-banner no-bunnerpp" style="background-image: url('<?= $dist_path_t; ?>/static/img/content/bg-1682-379-1.jpg')">
        <div class="main-banner-i clearfix">
            <div class="main-banner__text">
                <div class="img-w">
                    <img src="<?= $dist_path_t; ?>/static/img/content/icon-calendar.svg" alt=""/>
                </div>
                <h2>Investor calendar</h2>
            </div>
        </div>
    </div>

    <!-- ****** -->
    <!-- EVENTS -->
    <!-- ****** -->
    <div class="investor-calendar">
      <div class="investor-calendar-i">
        
        <div class="years start-scrollto">
          <div class="years-i clearfix">
            <ul>
              <li><a href="#y2016">2016</a></li>
              <li class="active"><a href="#y2015">2015</a></li>
              <li><a href="#y2014">2014</a></li>
              <li><a href="#y2013">2013</a></li>
              <li><a href="#y2012">2012</a></li>
              <li><a href="#y2011">2011</a></li>
              <li><a href="#y2010">2010</a></li>
            </ul>
          </div>
        </div>

        <div class="list">
        <!-- 2016 -->
          <div class="list-item" style="background-image: url('<?= $dist_path_t; ?>/static/img/content/bg-patern.png')">
            <div class="list-item-i">
              
              <div class="year">
                <div class="year-i"><h2 id="y2016">2016</h2></div>
              </div>

              <div class="events-list">
                <div class="events-list-i">
                  <?php if( have_rows('ic_event_r') ):
                  while( have_rows('ic_event_r') ): the_row();
                  $ic_event = get_sub_field('ic_event');
                  $ic_date = DateTime::createFromFormat('Ymd', get_sub_field('ic_date'));
                  $ic_location = get_sub_field('ic_location');
                  $ic_time = get_sub_field('ic_time');
                  if( $ic_date->format('Y') == 2016 ):
                  ?>
                  <div class="item">
                    <div class="item-i">
                      <table>
                        <tr>
                          <td>
                            <h2><?= $ic_date->format('d');?></h2>
                            <p class="month">/ <?= $ic_date->format('M');?></p>
                          </td>
                          <td>
                            <p class="item-title"><a href="#"><?=  $ic_event; ?></a></p>
                            <p><?=  $ic_location; ?></p>
                            <p class="item-date">Time: <?= $ic_time; ?></p>
                          </td>
                          <td>
                            <a href="events/demo.ics" class="add-to-calendar" data-icevent="<?=  $ic_event; ?>" data-icheadline="<?=  $ic_event; ?>" data-iclocation="<?=  $ic_location; ?>" data-icsdate="<?=  $ic_date->format('m/d/Y'); ?>" data-icedate="<?=  $ic_date->format('m/d/Y'); ?>">
                              <svg class="icon-calendar" role="img" title="calendar"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-calendar"/></svg>
                              <span>Add to calendar</span>
                              <svg class="icon-plus-incir" role="img" title="icon-plus-incir"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-plus-incir"/></svg>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <?php endif;?>
                  <?php endwhile; ?>
                  <?php endif;?>

                </div>
                <!--<a href="#y2014" class="scroll-down"></a>-->
              </div>

            </div>
          </div>
          <!-- 2015 -->
          <div class="list-item" style="background-image: url('<?= $dist_path_t; ?>/static/img/content/bg-patern-right.png')">
            <div class="list-item-i">
              
              <div class="year">
                <div class="year-i"><h2 id="y2015">2015</h2></div>
              </div>

              <div class="events-list">
                <div class="events-list-i">
                  <?php if( have_rows('ic_event_r') ):
                  while( have_rows('ic_event_r') ): the_row();
                  $ic_event = get_sub_field('ic_event');
                  $ic_date = DateTime::createFromFormat('Ymd', get_sub_field('ic_date'));
                  $ic_location = get_sub_field('ic_location');
                  $ic_time = get_sub_field('ic_time');
                  if( $ic_date->format('Y') == 2015 ):
                  ?>
                  <div class="item">
                    <div class="item-i">
                      <table>
                        <tr>
                          <td>
                            <h2><?= $ic_date->format('d');?></h2>
                            <p class="month">/ <?= $ic_date->format('M');?></p>
                          </td>
                          <td>
                            <p class="item-title"><a href="#"><?=  $ic_event; ?></a></p>
                            <p><?=  $ic_location; ?></p>
                            <p class="item-date">Time: <?= $ic_time; ?></p>
                          </td>
                          <td>
                            <a href="events/demo.ics" class="add-to-calendar" data-icevent="<?=  $ic_event; ?>" data-icheadline="<?=  $ic_event; ?>" data-iclocation="<?=  $ic_location; ?>" data-icsdate="<?=  $ic_date->format('m/d/Y'); ?>" data-icedate="<?=  $ic_date->format('m/d/Y'); ?>">
                              <svg class="icon-calendar" role="img" title="calendar"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-calendar"/></svg>
                              <span>Add to calendar</span>
                              <svg class="icon-plus-incir" role="img" title="icon-plus-incir"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-plus-incir"/></svg>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <?php endif;?>
                  <?php endwhile; ?>
                  <?php endif;?>

                </div>
                <!--<a href="#y2014" class="scroll-down"></a>-->
              </div>

            </div>
          </div>
          <!-- 2014 -->
          <div class="list-item" style="background-image: url('<?= $dist_path_t; ?>/static/img/content/bg-patern.png')">
            <div class="list-item-i">
              
              <div class="year">
                <div class="year-i"><h2 id="y2014">2014</h2></div>
              </div>

              <div class="events-list">
                <div class="events-list-i">
                  <?php if( have_rows('ic_event_r') ):
                  while( have_rows('ic_event_r') ): the_row();
                  $ic_event = get_sub_field('ic_event');
                  $ic_date = DateTime::createFromFormat('Ymd', get_sub_field('ic_date'));
                  $ic_location = get_sub_field('ic_location');
                  $ic_time = get_sub_field('ic_time');
                  if( $ic_date->format('Y') == 2014 ):
                  ?>
                  <div class="item">
                    <div class="item-i">
                      <table>
                        <tr>
                          <td>
                            <h2><?= $ic_date->format('d');?></h2>
                            <p class="month">/ <?= $ic_date->format('M');?></p>
                          </td>
                          <td>
                            <p class="item-title"><a href="#"><?=  $ic_event; ?></a></p>
                            <p><?=  $ic_location; ?></p>
                            <p class="item-date">Time: <?= $ic_time; ?></p>
                          </td>
                          <td>
                            <a href="events/demo.ics" class="add-to-calendar" data-icevent="<?=  $ic_event; ?>" data-icheadline="<?=  $ic_event; ?>" data-iclocation="<?=  $ic_location; ?>" data-icsdate="<?=  $ic_date->format('m/d/Y'); ?>" data-icedate="<?=  $ic_date->format('m/d/Y'); ?>">
                              <svg class="icon-calendar" role="img" title="calendar"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-calendar"/></svg>
                              <span>Add to calendar</span>
                              <svg class="icon-plus-incir" role="img" title="icon-plus-incir"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-plus-incir"/></svg>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <?php endif;?>
                  <?php endwhile; ?>
                  <?php endif;?>

                </div>
                <!--<a href="#y2014" class="scroll-down"></a>-->
              </div>

            </div>
          </div>
          <!-- 2013 -->
          <div class="list-item" style="background-image: url('<?= $dist_path_t; ?>/static/img/content/bg-patern-right.png')">
            <div class="list-item-i">
              
              <div class="year">
                <div class="year-i"><h2 id="y2013">2013</h2></div>
              </div>

              <div class="events-list">
                <div class="events-list-i">
                  <?php if( have_rows('ic_event_r') ):
                  while( have_rows('ic_event_r') ): the_row();
                  $ic_event = get_sub_field('ic_event');
                  $ic_date = DateTime::createFromFormat('Ymd', get_sub_field('ic_date'));
                  $ic_location = get_sub_field('ic_location');
                  $ic_time = get_sub_field('ic_time');
                  if( $ic_date->format('Y') == 2013 ):
                  ?>
                  <div class="item">
                    <div class="item-i">
                      <table>
                        <tr>
                          <td>
                            <h2><?= $ic_date->format('d');?></h2>
                            <p class="month">/ <?= $ic_date->format('M');?></p>
                          </td>
                          <td>
                            <p class="item-title"><a href="#"><?=  $ic_event; ?></a></p>
                            <p><?=  $ic_location; ?></p>
                            <p class="item-date">Time: <?= $ic_time; ?></p>
                          </td>
                          <td>
                            <a href="events/demo.ics" class="add-to-calendar" data-icevent="<?=  $ic_event; ?>" data-icheadline="<?=  $ic_event; ?>" data-iclocation="<?=  $ic_location; ?>" data-icsdate="<?=  $ic_date->format('m/d/Y'); ?>" data-icedate="<?=  $ic_date->format('m/d/Y'); ?>">
                              <svg class="icon-calendar" role="img" title="calendar"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-calendar"/></svg>
                              <span>Add to calendar</span>
                              <svg class="icon-plus-incir" role="img" title="icon-plus-incir"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-plus-incir"/></svg>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <?php endif;?>
                  <?php endwhile; ?>
                  <?php endif;?>

                </div>
                <!--<a href="#y2014" class="scroll-down"></a>-->
              </div>

            </div>
          </div>

          <!-- 2012 -->
          <div class="list-item" style="background-image: url('<?= $dist_path_t; ?>/static/img/content/bg-patern.png')">
            <div class="list-item-i">
              
              <div class="year">
                <div class="year-i"><h2 id="y2012">2012</h2></div>
              </div>

              <div class="events-list">
                <div class="events-list-i">
                  <?php if( have_rows('ic_event_r') ):
                  while( have_rows('ic_event_r') ): the_row();
                  $ic_event = get_sub_field('ic_event');
                  $ic_date = DateTime::createFromFormat('Ymd', get_sub_field('ic_date'));
                  $ic_location = get_sub_field('ic_location');
                  $ic_time = get_sub_field('ic_time');
                  if( $ic_date->format('Y') == 2012 ):
                  ?>
                  <div class="item">
                    <div class="item-i">
                      <table>
                        <tr>
                          <td>
                            <h2><?= $ic_date->format('d');?></h2>
                            <p class="month">/ <?= $ic_date->format('M');?></p>
                          </td>
                          <td>
                            <p class="item-title"><a href="#"><?=  $ic_event; ?></a></p>
                            <p><?=  $ic_location; ?></p>
                            <p class="item-date">Time: <?= $ic_time; ?></p>
                          </td>
                          <td>
                            <a href="events/demo.ics" class="add-to-calendar" data-icevent="<?=  $ic_event; ?>" data-icheadline="<?=  $ic_event; ?>" data-iclocation="<?=  $ic_location; ?>" data-icsdate="<?=  $ic_date->format('m/d/Y'); ?>" data-icedate="<?=  $ic_date->format('m/d/Y'); ?>">
                              <svg class="icon-calendar" role="img" title="calendar"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-calendar"/></svg>
                              <span>Add to calendar</span>
                              <svg class="icon-plus-incir" role="img" title="icon-plus-incir"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-plus-incir"/></svg>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <?php endif;?>
                  <?php endwhile; ?>
                  <?php endif;?>

                </div>
                <!--<a href="#y2014" class="scroll-down"></a>-->
              </div>

            </div>
          </div>

          <!-- 2011 -->
          <div class="list-item" style="background-image: url('<?= $dist_path_t; ?>/static/img/content/bg-patern-right.png')">
            <div class="list-item-i">
              
              <div class="year">
                <div class="year-i"><h2 id="y2011">2011</h2></div>
              </div>

              <div class="events-list">
                <div class="events-list-i">
                  <?php if( have_rows('ic_event_r') ):
                  while( have_rows('ic_event_r') ): the_row();
                  $ic_event = get_sub_field('ic_event');
                  $ic_date = DateTime::createFromFormat('Ymd', get_sub_field('ic_date'));
                  $ic_location = get_sub_field('ic_location');
                  $ic_time = get_sub_field('ic_time');
                  if( $ic_date->format('Y') == 2011 ):
                  ?>
                  <div class="item">
                    <div class="item-i">
                      <table>
                        <tr>
                          <td>
                            <h2><?= $ic_date->format('d');?></h2>
                            <p class="month">/ <?= $ic_date->format('M');?></p>
                          </td>
                          <td>
                            <p class="item-title"><a href="#"><?=  $ic_event; ?></a></p>
                            <p><?=  $ic_location; ?></p>
                            <p class="item-date">Time: <?= $ic_time; ?></p>
                          </td>
                          <td>
                            <a href="events/demo.ics" class="add-to-calendar" data-icevent="<?=  $ic_event; ?>" data-icheadline="<?=  $ic_event; ?>" data-iclocation="<?=  $ic_location; ?>" data-icsdate="<?=  $ic_date->format('m/d/Y'); ?>" data-icedate="<?=  $ic_date->format('m/d/Y'); ?>">
                              <svg class="icon-calendar" role="img" title="calendar"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-calendar"/></svg>
                              <span>Add to calendar</span>
                              <svg class="icon-plus-incir" role="img" title="icon-plus-incir"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-plus-incir"/></svg>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <?php endif;?>
                  <?php endwhile; ?>
                  <?php endif;?>

                </div>
                <!--<a href="#y2014" class="scroll-down"></a>-->
              </div>

            </div>
          </div>

          <!-- 2010 -->
          <div class="list-item" style="background-image: url('<?= $dist_path_t; ?>/static/img/content/bg-patern.png')">
            <div class="list-item-i">
              
              <div class="year">
                <div class="year-i"><h2 id="y2010">2010</h2></div>
              </div>

              <div class="events-list">
                <div class="events-list-i">
                  <?php if( have_rows('ic_event_r') ):
                  while( have_rows('ic_event_r') ): the_row();
                  $ic_event = get_sub_field('ic_event');
                  $ic_date = DateTime::createFromFormat('Ymd', get_sub_field('ic_date'));
                  $ic_location = get_sub_field('ic_location');
                  $ic_time = get_sub_field('ic_time');
                  if( $ic_date->format('Y') == 2010 ):
                  ?>
                  <div class="item">
                    <div class="item-i">
                      <table>
                        <tr>
                          <td>
                            <h2><?= $ic_date->format('d');?></h2>
                            <p class="month">/ <?= $ic_date->format('M');?></p>
                          </td>
                          <td>
                            <p class="item-title"><a href="#"><?=  $ic_event; ?></a></p>
                            <p><?=  $ic_location; ?></p>
                            <p class="item-date">Time: <?= $ic_time; ?></p>
                          </td>
                          <td>
                            <a href="events/demo.ics" class="add-to-calendar" data-icevent="<?=  $ic_event; ?>" data-icheadline="<?=  $ic_event; ?>" data-iclocation="<?=  $ic_location; ?>" data-icsdate="<?=  $ic_date->format('m/d/Y'); ?>" data-icedate="<?=  $ic_date->format('m/d/Y'); ?>">
                              <svg class="icon-calendar" role="img" title="calendar"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-calendar"/></svg>
                              <span>Add to calendar</span>
                              <svg class="icon-plus-incir" role="img" title="icon-plus-incir"><use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-plus-incir"/></svg>
                            </a>
                          </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <?php endif;?>
                  <?php endwhile; ?>
                  <?php endif;?>

                </div>
                <!--<a href="#y2014" class="scroll-down"></a>-->
              </div>

            </div>
          </div>




          <div class="hiding-posts">
            <a href="investor-calendar-item1.html?page=1"></a>
            <a href="investor-calendar-item2.html?page=1"></a>
            <a href="investor-calendar-item3.html?page=2"></a>
          </div>

        </div>
      </div>
    </div>

    <div class="getintouch-w">
        <div class="getintouch">
            <div class="img-w">
                <img src="<?= $dist_path;?>images/content/icon-inv-cont.svg" alt=""/>
            </div>
            <h2>Can’t find what you are looking for?</h2>
            <p>Get in touch with our staff </p>
            <a href="#" class="btn-round">get in touch
                <svg class="icon-arr-left" role="img" title="share-fb">
                    <use xlink:href="<?= $dist_path;?>images/general/svgdefs.svg#icon-arr-left"/>
                </svg>
            </a>
        </div>
    </div>

    <script type="text/javascript">
    jQuery(document).ready(function($){
      $(".add-to-calendar").click(function(event) {
        event.preventDefault();
        var cal = ics();
        cal.addEvent($(this).data('icevent'), $(this).data('icevent'), $(this).data('iclocation'), $(this).data('icsdate'), $(this).data('icsdate'));
        cal.download('EuroChem-Investor-Calendar')
        //console.log(cal.events());
      });
    });


    </script>


<?php endwhile; ?>	