<?php
/**
 * Template Name: EuroChem Global Operations
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
  $mb_s_image_background =  get_field('mb_s_image_background');
  $mb_s_icon_heading =  get_field('mb_s_icon_heading');
  $mb_s_heading = get_field('mb_s_heading');
  ?>

  <div class="main-banner no-bunnerpp" style="background-image: url('<?= $mb_s_image_background ?>')">
    <div class="main-banner-i clearfix">
      <div class="main-banner__text">
        <div class="img-w">
          <img src="<?= $mb_s_icon_heading; ?>" alt=""/>
        </div>
        <h2><?= $mb_s_heading; ?></h2>
      </div>
    </div>
  </div>
  <!-- ********************** -->
  <!-- GLOBAL OPERATIONS TABS -->
  <!-- ********************** -->
  <div class="main-tabs main-tabs-global">
    <div class="main-tabs-i">
      <ul class="clearfix">
        <li>
          <a href="#" class="btn-assest">
            <div class="main-tabs__icon">
              <div class="icons-w icons-sun">
                <img class="icon-def" src="<?= $dist_path_t; ?>/static/img/content/assets-blue.svg" alt=""/>
                <img class="icon-active" src="<?= $dist_path_t; ?>/static/img/content/assets-white.svg" alt=""/>
              </div>
              <span>Assets</span>
            </div>
          </a>
          <div class="assets-dropdown">
            <span href="#" class="icon-close"><svg role="img" title="close"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-close-wh"/></svg></span>
            <p class="title">Select your desired options</p>
            <div class="checkbox-w">
              <div class="checkbox-row clearfix ">
                <input type="checkbox" id="checkbox1" class="checkboxassest" autocomplete="off" checked="false" data-clusters="mining"/>
                <label for="checkbox1">
                  <span><svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-checkv2"/></svg></span>
                  Mining
                </label>
              </div>
              <div class="checkbox-row clearfix gray">
                <input type="checkbox" id="checkbox2" class="checkboxassest" data-clusters="oil_gas"/>
                <label for="checkbox2">
                  <span><svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-checkv2"/></svg></span>
                  Oil & Gas
                </label>
              </div>
              <div class="checkbox-row clearfix blue">
                <input type="checkbox" id="checkbox3" class="checkboxassest" data-clusters="fertilizers"/>
                <label for="checkbox3">
                  <span><svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-checkv2"/></svg></span>
                  Fertilizers
                </label>
              </div>
              <div class="checkbox-row clearfix green">
                <input type="checkbox" id="checkbox4" class="checkboxassest"  data-clusters="logistics"/>
                <label for="checkbox4">
                  <span><svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-checkv2"/></svg></span>
                  Logistics
                </label>
              </div>
              <div class="checkbox-row clearfix red">
                <input type="checkbox" id="checkbox5" class="checkboxassest"  data-clusters="sales"/>
                <label for="checkbox5">
                  <span><svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-checkv2"/></svg></span>
                  Sales
                </label>
              </div>
            </div>
          </div>
        </li>
        <li>
          <a href="#" class="btn-regions">
            <div class="main-tabs__icon">
              <div class="icons-w icons-news">
                <img class="icon-def" src="<?= $dist_path_t; ?>/static/img/content/regions-blue.svg" alt=""/>
                <img class="icon-active" src="<?= $dist_path_t; ?>/static/img/content/regions-white.svg" alt=""/>
              </div>
              <span>Regions</span>
            </div>
          </a>
        </li>
        <li>
          <a href="#" class="btn-glob-search">
            <div class="main-tabs__icon">
              <div class="icons-w icons-tweet">
                <img class="icon-def"  src="<?= $dist_path_t; ?>/static/img/content/search-blue.svg" alt=""/>
                <img class="icon-active" src="<?= $dist_path_t; ?>/static/img/content/search-white.svg" alt=""/>
              </div>
              <span>Search</span>
            </div>
          </a>
        </li>
      </ul>
    </div>
    <div class="searchdrop-w">
      <a href="#" class="btn-close">
        <svg  role="img" title="share-fb"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-close-wh"/></svg>
      </a>
      <div class="searchdrop-i">
        <div class="searchdrop__header">
          <div class="input-row  clearfix">
            <div class="input-item">
              <input name="search" id="search" type="text" >
              <a href="#" class="btn-search">
                <svg  role="img" title="search"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-loupe-blue"/></svg>
              </a>
            </div>
          </div>
        </div>
        <div class="searchdrop__results">
          <div class="search-title">
            <p>Suggested search:</p>
          </div>
          <div class="search-item">
            <h2>Lithuania</h2>
            <ul>
              <li><a href="#"> <span>Lif</span>osa Sales office</a></li>
              <li><a href="#"> <span>Lif</span>osa Logistics centre</a></li>
              <li><a href="#"> <span>Lif</span>osa contac</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ********************* -->
  <!-- GLOBAL OPERATIONS MAP -->
  <!-- ********************* -->

  <!-- DATA ASSETS / OFFICES / CONTACTS / PROJECTS -->  
  <script>
    var data ={
      "mining":{
        iconPath: '<?= $dist_path_t; ?>/static/img/general/marker-yellow.png',
        iconClasterPath: '<?= $dist_path_t; ?>/static/img/general/cluster-yellow.png',
        coord: [
        <?php
        $contacts = get_posts(array('numberposts' => -1,'post_type' => 'contact', 'order' => 'ASC'));
        foreach ( $contacts as $contact ) {
          $contacttmp = get_post( $contact->ID );
          $contactt = $contacttmp->post_title;
          $goc_name =  get_field('goc_name', $contact->ID); 
          $goc_address =  get_field('goc_address', $contact->ID); 
          $goc_address_map =  get_field('goc_address_map', $contact->ID); 
          $goc_telephone =  get_field('goc_telephone', $contact->ID); 
          $goc_fax =  get_field('goc_fax', $contact->ID); 
          $goc_email =  get_field('goc_email', $contact->ID);
          $assets_category =  get_field('assets_category', $contact->ID);
          if($assets_category == 'mining'): 
        ?>
        {
          "longitude": <?= $goc_address_map['lng']; ?>, "latitude": <?= $goc_address_map['lat']; ?>,
          "infobox": '<div class="infobox-text"><p class="title"><?= $contactt; ?></p><p class="name"><?= $goc_name; ?></p><p class="address"><?= $goc_address; ?></p><p class="tel">Tel: <?= $goc_telephone; ?></p><p class="tel">Fax: <?= $goc_fax; ?></p><p><a class="email" href="mailto:<?= $goc_email; ?>">E-mail: <?= $goc_email; ?></a></p></div>'
        },
        <?php endif; ?>
        <?php } ?>
        <?php
        $projects = get_posts(array('numberposts' => -1,'post_type' => 'project', 'order' => 'ASC'));
        foreach ( $projects as $project ) {
          $projecttmp = get_post( $project->ID );
          $projectt = $projecttmp->post_title;
          $gop_name =  get_field('gop_name', $project->ID); 
          $gop_image =  get_field('gop_image', $project->ID); 
          $gop_link =  get_field('gop_link', $project->ID);
          $gop_category =  get_field('gop_category', $project->ID);
          if($assets_category == 'mining'): 
        ?>
        {
          "longitude": <?= $goc_address_map['lng']; ?>, "latitude": <?= $goc_address_map['lat']; ?>,
          "infobox": '<div class="infobox-img"><p class="title"><?= $projectt; ?></p><p class="name"><?= $gop_name; ?></p><div class="img-w"><img src="<?= $gop_image; ?>" alt=""/></div><a href="<?= $gop_link; ?>" class="btn-round">Find out more<svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-arr-left"/></svg></a></div>'
        },
        <?php endif; ?>
        <?php } ?>
        ]
      },
      "oil_gas":{
        iconPath: '/wp-content/themes/eurochem/static/img/general/marker-gray.png',
        iconClasterPath: '/wp-content/themes/eurochem/static/img/general/cluster-gray.png',
        coord: [
        <?php
        $contacts = get_posts(array('numberposts' => -1,'post_type' => 'contact', 'order' => 'ASC'));
        foreach ( $contacts as $contact ) {
          $contacttmp = get_post( $contact->ID );
          $contactt = $contacttmp->post_title;
          $goc_name =  get_field('goc_name', $contact->ID); 
          $goc_address =  get_field('goc_address', $contact->ID); 
          $goc_address_map =  get_field('goc_address_map', $contact->ID); 
          $goc_telephone =  get_field('goc_telephone', $contact->ID); 
          $goc_fax =  get_field('goc_fax', $contact->ID); 
          $goc_email =  get_field('goc_email', $contact->ID);
          $assets_category =  get_field('assets_category', $contact->ID);
          if($assets_category == 'oil_gas'): 
        ?>
        {
          "longitude": <?= $goc_address_map['lng']; ?>, "latitude": <?= $goc_address_map['lat']; ?>,
          "infobox": '<div class="infobox-text"><p class="title"><?= $contactt; ?></p><p class="name"><?= $goc_name; ?></p><p class="address"><?= $goc_address; ?></p><p class="tel">Tel: <?= $goc_telephone; ?></p><p class="tel">Fax: <?= $goc_fax; ?></p><p><a class="email" href="mailto:<?= $goc_email; ?>">E-mail: <?= $goc_email; ?></a></p></div>'
        },
        <?php endif; ?>
        <?php } ?>
        <?php
        $projects = get_posts(array('numberposts' => -1,'post_type' => 'project', 'order' => 'ASC'));
        foreach ( $projects as $project ) {
          $projecttmp = get_post( $project->ID );
          $projectt = $projecttmp->post_title;
          $gop_name =  get_field('gop_name', $project->ID); 
          $gop_image =  get_field('gop_image', $project->ID); 
          $gop_link =  get_field('gop_link', $project->ID);
          $gop_category =  get_field('gop_category', $project->ID);
          if($assets_category == 'oil_gas'): 
        ?>
        {
          "longitude": <?= $goc_address_map['lng']; ?>, "latitude": <?= $goc_address_map['lat']; ?>,
          "infobox": '<div class="infobox-img"><p class="title"><?= $projectt; ?></p><p class="name"><?= $gop_name; ?></p><div class="img-w"><img src="<?= $gop_image; ?>" alt=""/></div><a href="<?= $gop_link; ?>" class="btn-round">Find out more<svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-arr-left"/></svg></a></div>'
        },
        <?php endif; ?>
        <?php } ?>
        ]
      },
      "fertilizers":{
        iconPath: '/wp-content/themes/eurochem/static/img/general/marker-blue.png',
        iconClasterPath: '/wp-content/themes/eurochem/static/img/general/cluster-blue.png',
        coord: [
        <?php
        $contacts = get_posts(array('numberposts' => -1,'post_type' => 'contact', 'order' => 'ASC'));
        foreach ( $contacts as $contact ) {
          $contacttmp = get_post( $contact->ID );
          $contactt = $contacttmp->post_title;
          $goc_name =  get_field('goc_name', $contact->ID); 
          $goc_address =  get_field('goc_address', $contact->ID); 
          $goc_address_map =  get_field('goc_address_map', $contact->ID); 
          $goc_telephone =  get_field('goc_telephone', $contact->ID); 
          $goc_fax =  get_field('goc_fax', $contact->ID); 
          $goc_email =  get_field('goc_email', $contact->ID);
          $assets_category =  get_field('assets_category', $contact->ID);
          if($assets_category == 'fertilizers'): 
        ?>
        {
          "longitude": <?= $goc_address_map['lng']; ?>, "latitude": <?= $goc_address_map['lat']; ?>,
          "infobox": '<div class="infobox-text"><p class="title"><?= $contactt; ?></p><p class="name"><?= $goc_name; ?></p><p class="address"><?= $goc_address; ?></p><p class="tel">Tel: <?= $goc_telephone; ?></p><p class="tel">Fax: <?= $goc_fax; ?></p><p><a class="email" href="mailto:<?= $goc_email; ?>">E-mail: <?= $goc_email; ?></a></p></div>'
        },
        <?php endif; ?>
        <?php } ?>
        <?php
        $projects = get_posts(array('numberposts' => -1,'post_type' => 'project', 'order' => 'ASC'));
        foreach ( $projects as $project ) {
          $projecttmp = get_post( $project->ID );
          $projectt = $projecttmp->post_title;
          $gop_name =  get_field('gop_name', $project->ID); 
          $gop_image =  get_field('gop_image', $project->ID); 
          $gop_link =  get_field('gop_link', $project->ID);
          $gop_category =  get_field('gop_category', $project->ID);
          if($assets_category == 'fertilizers'): 
        ?>
        {
          "longitude": <?= $goc_address_map['lng']; ?>, "latitude": <?= $goc_address_map['lat']; ?>,
          "infobox": '<div class="infobox-img"><p class="title"><?= $projectt; ?></p><p class="name"><?= $gop_name; ?></p><div class="img-w"><img src="<?= $gop_image; ?>" alt=""/></div><a href="<?= $gop_link; ?>" class="btn-round">Find out more<svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-arr-left"/></svg></a></div>'
        },
        <?php endif; ?>
        <?php } ?>
        ]
      },
      "logistics":{
        iconPath: '/wp-content/themes/eurochem/static/img/general/marker-green.png',
        iconClasterPath: '/wp-content/themes/eurochem/static/img/general/cluster-green.png',
        coord: [
        <?php
        $contacts = get_posts(array('numberposts' => -1,'post_type' => 'contact', 'order' => 'ASC'));
        foreach ( $contacts as $contact ) {
          $contacttmp = get_post( $contact->ID );
          $contactt = $contacttmp->post_title;
          $goc_name =  get_field('goc_name', $contact->ID); 
          $goc_address =  get_field('goc_address', $contact->ID); 
          $goc_address_map =  get_field('goc_address_map', $contact->ID); 
          $goc_telephone =  get_field('goc_telephone', $contact->ID); 
          $goc_fax =  get_field('goc_fax', $contact->ID); 
          $goc_email =  get_field('goc_email', $contact->ID);
          $assets_category =  get_field('assets_category', $contact->ID);
          if($assets_category == 'logistics'): 
        ?>
        {
          "longitude": <?= $goc_address_map['lng']; ?>, "latitude": <?= $goc_address_map['lat']; ?>,
          "infobox": '<div class="infobox-text"><p class="title"><?= $contactt; ?></p><p class="name"><?= $goc_name; ?></p><p class="address"><?= $goc_address; ?></p><p class="tel">Tel: <?= $goc_telephone; ?></p><p class="tel">Fax: <?= $goc_fax; ?></p><p><a class="email" href="mailto:<?= $goc_email; ?>">E-mail: <?= $goc_email; ?></a></p></div>'
        },
        <?php endif; ?>
        <?php } ?>
        <?php
        $projects = get_posts(array('numberposts' => -1,'post_type' => 'project', 'order' => 'ASC'));
        foreach ( $projects as $project ) {
          $projecttmp = get_post( $project->ID );
          $projectt = $projecttmp->post_title;
          $gop_name =  get_field('gop_name', $project->ID); 
          $gop_image =  get_field('gop_image', $project->ID); 
          $gop_link =  get_field('gop_link', $project->ID);
          $gop_category =  get_field('gop_category', $project->ID);
          if($assets_category == 'logistics'): 
        ?>
        {
          "longitude": <?= $goc_address_map['lng']; ?>, "latitude": <?= $goc_address_map['lat']; ?>,
          "infobox": '<div class="infobox-img"><p class="title"><?= $projectt; ?></p><p class="name"><?= $gop_name; ?></p><div class="img-w"><img src="<?= $gop_image; ?>" alt=""/></div><a href="<?= $gop_link; ?>" class="btn-round">Find out more<svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-arr-left"/></svg></a></div>'
        },
        <?php endif; ?>
        <?php } ?>
        ]
      },
      "sales":{
        iconPath: '/wp-content/themes/eurochem/static/img/general/marker-red.png',
        iconClasterPath: '/wp-content/themes/eurochem/static/img/general/cluster-red.png',
        coord: [
        <?php
        $contacts = get_posts(array('numberposts' => -1,'post_type' => 'contact', 'order' => 'ASC'));
        foreach ( $contacts as $contact ) {
          $contacttmp = get_post( $contact->ID );
          $contactt = $contacttmp->post_title;
          $goc_name =  get_field('goc_name', $contact->ID); 
          $goc_address =  get_field('goc_address', $contact->ID); 
          $goc_address_map =  get_field('goc_address_map', $contact->ID); 
          $goc_telephone =  get_field('goc_telephone', $contact->ID); 
          $goc_fax =  get_field('goc_fax', $contact->ID); 
          $goc_email =  get_field('goc_email', $contact->ID);
          $assets_category =  get_field('assets_category', $contact->ID);
          if($assets_category == 'sales'): 
        ?>
        {
          "longitude": <?= $goc_address_map['lng']; ?>, "latitude": <?= $goc_address_map['lat']; ?>,
          "infobox": '<div class="infobox-text"><p class="title"><?= $contactt; ?></p><p class="name"><?= $goc_name; ?></p><p class="address"><?= $goc_address; ?></p><p class="tel">Tel: <?= $goc_telephone; ?></p><p class="tel">Fax: <?= $goc_fax; ?></p><p><a class="email" href="mailto:<?= $goc_email; ?>">E-mail: <?= $goc_email; ?></a></p></div>'
        },
        <?php endif; ?>
        <?php } ?>
        <?php
        $projects = get_posts(array('numberposts' => -1,'post_type' => 'project', 'order' => 'ASC'));
        foreach ( $projects as $project ) {
          $projecttmp = get_post( $project->ID );
          $projectt = $projecttmp->post_title;
          $gop_name =  get_field('gop_name', $project->ID); 
          $gop_image =  get_field('gop_image', $project->ID); 
          $gop_link =  get_field('gop_link', $project->ID);
          $gop_category =  get_field('gop_category', $project->ID);
          if($assets_category == 'sales'): 
        ?>
        {
          "longitude": <?= $goc_address_map['lng']; ?>, "latitude": <?= $goc_address_map['lat']; ?>,
          "infobox": '<div class="infobox-img"><p class="title"><?= $projectt; ?></p><p class="name"><?= $gop_name; ?></p><div class="img-w"><img src="<?= $gop_image; ?>" alt=""/></div><a href="<?= $gop_link; ?>" class="btn-round">Find out more<svg class="icon-arr-left" role="img" title="share-fb"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-arr-left"/></svg></a></div>'
        },
        <?php endif; ?>
        <?php } ?>
        ]
      },

    }
  </script>

  <div class="bigmap-w">
    <div id="map" class="map-container"></div>
    <div class="region-info">
      <div class="region-info-i">
        <a href="#" class="icon-close">
          <svg role="img" title="close"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-close-wh"/></svg>
        </a>
        <?php
        $regions = get_posts(array('numberposts' => -1,'post_type' => 'region', 'order' => 'ASC'));
        foreach ( $regions as $region ) {
          $regiontmp = get_post( $region->ID ); 
          $regiont = $regiontmp->post_title;
          $gor_map =  get_field('gor_map', $region->ID);
          $gor_information =  get_field('gor_information', $region->ID);
          $gor_sales_heading =  get_field('gor_sales_heading', $region->ID);
        ?>
        <!-- REGION INFO ITEM -->
        <div class="region-info__item" data-type="<?= $regiont; ?>">
          <div class="region-info__item-i">
            <div class="region-info__title">
              <h2><?= $regiont; ?></h2>
              <svg role="img" title="arr-down" class="arr-down"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-arr-down"/></svg>
              <svg role="img" title="arr-up" class="arr-up"><use xlink:href="<?= $dist_path_t; ?>/static/img/general/svgdefs.svg#icon-arr-up"/></svg>
            </div>
            <div class="region-info__main">
              <div class="img-map-w"><img src="<?= $gor_map; ?>" alt=""/></div>
              <p><?= $gor_information; ?></p>
              <h3><?= $gor_sales_heading; ?></h3>
              <?php 
              if( have_rows('gor_table_r', $region->ID) ):
              while( have_rows('gor_table_r', $region->ID) ): the_row();
              $gor_table = get_sub_field( 'gor_table' );
              ?>
              <div class="table-w">
                <table>
                  <tr>
                    <?php
                    foreach ( $gor_table['header'] as $th ) {
                    ?>
                    <th><?= $th['c']; ?></th>  
                    <?php } ?>
                  </tr>
                  <?php
                  foreach ( $gor_table['body'] as $tr ) {
                  ?>  
                  <tr>
                    <?php
                    foreach ( $tr as $td ) {
                    ?>
                    <td><?= $td['c']; ?></td>
                    <?php } ?>
                  </tr>
                  <?php } ?>
                </table>
              </div>
              <?php endwhile; ?>
              <?php endif; ?>
            </div>
          </div>
        </div>
        <?php 
        }
        ?>
        <!-- REGION INFO ITEM END-->
      </div>
    </div>
  </div>

  <div class="points-w">
    <div class="points">
      <div class="point-item">
        <img src="<?= $dist_path_t; ?>/static/img/general/marker-yellow.png" alt=""/>
        <p>Mining</p>
      </div>
      <div class="point-item">
        <img src="<?= $dist_path_t; ?>/static/img/general/marker-gray.png" alt=""/>
        <p>Oil & Gas</p>
      </div>
      <div class="point-item">
        <img src="<?= $dist_path_t; ?>/static/img/general/marker-blue.png" alt=""/>
        <p>Fertilizers</p>
      </div>
      <div class="point-item">
        <img src="<?= $dist_path_t; ?>/static/img/general/marker-green.png" alt=""/>
        <p>Logistics</p>
      </div>
      <div class="point-item">
        <img src="<?= $dist_path_t; ?>/static/img/general/marker-red.png" alt=""/>
        <p>Sales</p>
      </div>
    </div>
  </div>

  <div class="contact-bottom">
    <div class="contact-bottom-i">
      <div class="title">
        <div class="img-w">
          <img src="<?= $dist_path_t; ?>/static/img/content/icon-inv-cont.svg" alt=""/>
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