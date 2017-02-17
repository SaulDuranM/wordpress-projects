<?php $dist_path = get_template_directory_uri() . '/dist/'; ?>  
<!-- Breaking NEWS -->
<?php $bna = get_field('active', 'option'); 
if($bna):
?>
<section class="breaking-news">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-8 col-md-9">
        <div style="padding: 7px 0;">
            <span>BREAKING NEWS:</span> <?php the_field('breaking_news', 'option'); ?>
        </div>
      </div>
      <div class="col-sm-4 col-md-3">
        <a href="<?php the_field('link', 'option'); ?>"><?php the_field('title_link', 'option'); ?></a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<header>
  <!-- SECONDARY MENU -->
  <div class="secondary-menu">
    <div class="container-fluid">
      
      <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6">
          
          <!-- SOCIAL -->
          <div class="social">
            <a class="social-tt" href="https://twitter.com/citrustv" target="_blank"></a>
            <a class="social-fb" href="https://www.facebook.com/citrustv" target="_blank"></a>
            <a class="social-yt" href="https://www.youtube.com/citrustv" target="_blank"></a>
          </div>
          <!-- WATCH / JOIN US -->
          <div class="buttons">
            <a href="<?=get_site_url()?>/live" class="ctv-watch">WATCH LIVE •</a>
            <a href="<?=get_site_url()?>/join" class="ctv-join">JOIN US</a>
          </div>
          <!-- SEARCH -->
          <div class="search">
            <?php include (TEMPLATEPATH . '/templates/search-form.php'); ?>
          </div>

        </div>
      </div>

    </div>
  </div>
  <!-- MAIN MENU -->
  <div class="main-menu">
    <a class="btn-navbar active" id="menu-dropdown" href="#"><!-- /switch id to sidebarButton to use offcanvas -->
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar mb0"></span>
    </a>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-2">
          <div class="logo">
            <a href="<?= esc_url(home_url('/')); ?>">
              <img class="img-responsive" src="<?= $dist_path; ?>images/citrustv-logo.png" />
            </a>
          </div>
        </div>
        <div class="col-md-9 col-sm-10">
          <nav class="nav-primary">
            <?php if (has_nav_menu('primary_navigation')) :
              wp_nav_menu(['theme_location' => 'primary_navigation', 'container_id' => 'main-nav', 'walker'  => new CSS_Menu_Maker_Walker()]);
            endif; ?>
          </nav>
        </div>
      </div>

    </div>
  </div>

  <div class="main-menu-mobile">
    <div class="secondary-menu-mobile">
      <!-- WATCH / JOIN US -->
        <div class="buttons">
          <a href="<?=get_site_url()?>/live" class="ctv-watch">WATCH LIVE <span>•</span></a>
          <a href="<?=get_site_url()?>/join" class="ctv-join">JOIN US</a>
        </div>
        <!-- SOCIAL -->
        <div class="social">
          <a class="social-tt" href="https://twitter.com/citrustv" target="_blank"></a>
          <a class="social-fb" href="https://www.facebook.com/citrustv" target="_blank"></a>
          <a class="social-yt" href="https://www.youtube.com/citrustv" target="_blank"></a>
        </div>
    </div>


    
    <?php if (has_nav_menu('primary_navigation')) :
    wp_nav_menu(['theme_location' => 'primary_navigation']); 
    endif; ?> 

    <div class="search-mobile">
      <!-- SEARCH -->
      <div class="search">
        <?php include (TEMPLATEPATH . '/templates/search-form.php'); ?>
      </div>
    </div>

  </div>
</header>


