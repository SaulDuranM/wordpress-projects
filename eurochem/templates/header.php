<? $dist_path = get_template_directory_uri() . '/dist/'; ?>

<!-- REGIONAL PRESENCE -->
<?php get_template_part('templates/presence', 'presence'); ?>
<div class="wrapper">
  <?php 
    $translations = pll_the_languages(array('raw'=>1));
    //$mainmenu = get_field('ec_opt_main_menu', 'options');
    //var_dump($mainmenu)
  ?>
  <header>
    <div class="topbar">
      <!-- SECONDARY TOP BAR -->
      <div class="topbar-i clearfix">
        <a href="#" class="logo-mob">
          <h1 style="background-image: url('<? echo $dist_path; ?>images/general/logo-mob.svg')">EuroChem</h1>
        </a>
        <div class="topbar-i__right">
          <a href="/careers/" class="btn-careers active">Careers</a>
          <a href="#" class="btn-regional">Regional presence</a>
          <ul class="infobar">
            <li class="icon-tel-w">
              <a href="#"><svg class="icon-tel" role="img" title="icon-tel"> <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-tel-darkblue"></use></svg></a>
            </li>
            <li class="icon-serch-w">
              <a href="#"><svg class="icon-serch" role="img" title="share-fb"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-lupe-darkblue"></use></svg></a>
              <!-- SEARCH -->
              <?php get_template_part('templates/search', 'search'); ?>
              
            </li>
            <li><a href="#" class="help">?</a></li>
          </ul>
          <!-- LANG -->
          <ul class="lang">
            <li class="de-w <?php if($translations[1]['current_lang']) echo "active";?>">
              <a href="<?php echo $translations[1]['url']; ?>">DE<svg class="icon-decor" role="img" title="share-fb"><use xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-nav-decor"/></svg></a>
            </li>
            <li class="ru-w <?php if($translations[2]['current_lang']) echo "active";?>">
              <a href="<?php echo $translations[2]['url']; ?>">RU<svg class="icon-decor" role="img" title="share-fb"><use xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-nav-decor"/></svg></a>
            </li>
            <li class="en-w <?php if($translations[0]['current_lang']) echo "active";?>">
              <a href="<?php echo $translations[0]['url']; ?>">EN<svg class="icon-decor" role="img" title="share-fb"><use xlink:href="<? echo $dist_path; ?>images/general/svgdefs.svg#icon-nav-decor"/></svg></a>
            </li>
          </ul>
          <!-- END LANG -->
        </div>
      </div>
      <!-- END SECONDARY TOP BAR -->
    </div>
    
    <!-- MAIN NAV -->
    <nav>
      <div class="nav-i clearfix">
        <a href="#" class="logo">
          <h1 style="background-image: url('<? echo $dist_path; ?>images/general/logo.svg')">EuroChem</h1>
          <h1 class="dark" style="background-image: url('<? echo $dist_path; ?>images/general/logo-dark.svg')" ></h1>
        </a>

        <div class="nav">
          <ul class="nav__list">
            <?php 
            if( have_rows('ec_opt_main_menu', 'options') ):
            $tmp = 0; 
            while( have_rows('ec_opt_main_menu', 'options') ): the_row();
            $main_menu_section = get_sub_field('main_menu_section');
            $main_menu_link = get_sub_field('main_menu_link');
            ?>
            <?php  if($tmp == 0){ ?> 
            <li class="btn-whoweare"><a href="<?php echo $main_menu_link;?>"><?php echo $main_menu_section;?></a>
              <?php get_template_part('templates/whoweare', 'whoweare'); ?>  
            </li>
            <?php } else { ?>
            <li><a href="<?php echo $main_menu_link;?>"><?php echo $main_menu_section;?></a></li>
            <?php } $tmp++; ?>
            <?php endwhile; ?>
            <?php endif;?>
          </ul>
        </div>
    </nav>
  </header>
