<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

  // Enable plugins to manage the document title
  // http://codex.wordpress.org/Function_Reference/add_theme_support#Title_Tag
  add_theme_support('title-tag');

  // Register wp_nav_menu() menus
  // http://codex.wordpress.org/Function_Reference/register_nav_menus
  register_nav_menus([
    'primary_navigation' => __('Primary Navigation', 'sage')
  ]);

  // Enable post thumbnails
  // http://codex.wordpress.org/Post_Thumbnails
  // http://codex.wordpress.org/Function_Reference/set_post_thumbnail_size
  // http://codex.wordpress.org/Function_Reference/add_image_size
  add_theme_support('post-thumbnails');

  // Enable post formats
  // http://codex.wordpress.org/Post_Formats
  add_theme_support('post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'video', 'audio']);

  // Enable HTML5 markup support
  // http://codex.wordpress.org/Function_Reference/add_theme_support#HTML5
  add_theme_support('html5', ['caption', 'comment-form', 'comment-list', 'gallery', 'search-form']);

  // Use main stylesheet for visual editor
  // To add custom styles edit /assets/styles/layouts/_tinymce.scss
  add_editor_style(Assets\asset_path('styles/main.css'));
}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Register sidebars
 */
function widgets_init() {
  register_sidebar([
    'name'          => __('Primary', 'sage'),
    'id'            => 'sidebar-primary',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<span class="hidden">',
    'after_title'   => '</span>'
  ]);

  register_sidebar([
    'name'          => __('Footer', 'sage'),
    'id'            => 'sidebar-footer',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
  ]);
}
add_action('widgets_init', __NAMESPACE__ . '\\widgets_init');

/**
 * Determine which pages should NOT display the sidebar
 */
function display_sidebar() {
  static $display;

  isset($display) || $display = !in_array(true, [
    // The sidebar will NOT be displayed if ANY of the following return true.
    // @link https://codex.wordpress.org/Conditional_Tags
    is_404(),
    is_front_page(),
    is_page_template('template-custom.php'),
  ]);

  return apply_filters('sage/display_sidebar', $display);
}

/**
 * Theme assets
 */
function assets() {
  wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);

  if (is_single() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }

  wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
  wp_enqueue_script('sage/lightslider', Assets\asset_path('scripts/lightslider.js'), ['jquery'], null, false);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);


/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page() {
    add_menu_page(__( 'News', 'textdomain' ), 'News', 'read','post.php?post=7&action=edit','',Assets\asset_path( 'images/common/icons/news.png' ),6);
    add_menu_page(__( 'Sports', 'textdomain' ), 'Sports', 'read','post.php?post=9&action=edit','',Assets\asset_path( 'images/common/icons/sports.png' ),7);
    add_menu_page(__( 'Entertainment', 'textdomain' ), 'Entertainment', 'read','post.php?post=11&action=edit','',Assets\asset_path( 'images/common/icons/entertainment.png' ),8);
}
add_action( 'admin_menu', __NAMESPACE__ . '\\wpdocs_register_my_custom_menu_page' );


///////////////////////////////////////////////////////////////
// CUSTOM POST TYPES ---  SHOW / EPISODES / CLIPS / ARTICLES //
///////////////////////////////////////////////////////////////

add_action('init', __NAMESPACE__ . '\\ne_add_rewrite_rules');
add_filter('post_type_link', __NAMESPACE__ . '\\kw_custom_permalink', 10, 3);

function ne_add_rewrite_rules(){
  
  add_rewrite_tag("%news_shows%", '([^/]+)', "news_shows=");
  add_permastruct('news_shows', '/news/%news_shows%', false);
  if($post->post_type === 'news_episodes'){
    add_rewrite_tag("%news_episodes%", '([^/]+)', "news_episodes=");
    add_permastruct('news_episodes', '/news/%news_shows%/%news_episodes%', false);

    //add_rewrite_tag("%archive_episodes%", '([^/]+)', "archive_episodes=");
    //add_permastruct('archive_episodes', '/news/%news_shows%/%news_episodes%/archive', false);
  }
  if($post->post_type === 'news_clips'){
    add_rewrite_tag("%news_clips%", '([^/]+)', "news_clips=");
    add_permastruct('news_clips', '/news/%news_shows%/%news_clips%', false);
  }
  if($post->post_type === 'news_articles'){
    add_rewrite_tag("%news_articles%", '([^/]+)', "news_articles=");
    add_permastruct('news_articles', '/news/%news_shows%/%news_articles%', false);
  }



  //SPORTS
  add_rewrite_tag("%sports_shows%", '([^/]+)', "sports_shows=");
  add_permastruct('sports_shows', '/sports/%sports_shows%', false);
  if($post->post_type === 'sport_episodes'){
    add_rewrite_tag("%sports_episodes%", '([^/]+)', "sports_episodes=");
    add_permastruct('sports_episodes', '/sports/%sports_shows%/%sport_episodes%', false);
  }
  if($post->post_type === 'sports_clips'){
    add_rewrite_tag("%sports_clips%", '([^/]+)', "sports_clips=");
    add_permastruct('sports_clips', '/sports/%sports_shows%/%sports_clips%', false);
  }
  if($post->post_type === 'sports_articles'){
    add_rewrite_tag("%sports_articles%", '([^/]+)', "sports_articles=");
    add_permastruct('sports_articles', '/sports/%sports_shows%/%sports_articles%', false);
  }
  //ENTER
  add_rewrite_tag("%enter_shows%", '([^/]+)', "enter_shows=");
  add_permastruct('enter_shows', '/entertainment/%enter_shows%', false);
  if($post->post_type === 'enter_episodes'){
    add_rewrite_tag("%enter_episodes%", '([^/]+)', "enter_episodes=");
    add_permastruct('enter_episodes', '/entertainment/%enter_shows%/%enter_episodes%', false);
  }
  if($post->post_type === 'enter_clips'){
    add_rewrite_tag("%enter_clips%", '([^/]+)', "enter_clips=");
    add_permastruct('enter_clips', '/entertainment/%enter_shows%/%enter_clips%', false);
  }
  if($post->post_type === 'enter_articles'){
    add_rewrite_tag("%enter_articles%", '([^/]+)', "enter_articles=");
    add_permastruct('enter_articles', '/entertainment/%enter_shows%/%enter_articles%', false);
  }
}

function kw_custom_permalink($permalink, $post, $leavename) {

  if ( '' != $permalink && !in_array($post->post_status, array('draft', 'pending', 'auto-draft')) ) {
    $news_shows='';
    $news_episodes='';
    $news_clips='';
    $news_articles='';
    $sports_shows='';
    $sports_episodes='';
    $sports_clips='';
    $sports_articles='';
    $enter_shows='';
    $enter_episodes='';
    $enter_clips='';
    $enter_articles='';

    if ( strpos($permalink, '%news_shows%') !== false ) {
      $showpost = get_post( get_post_meta( $post->ID, "show", true ) );
      $news_shows = $showpost->post_name;
    }
    if ( strpos($permalink, '%news_episodes%') !== false ) {
      $showpost = get_post( get_post_meta( $post->ID, "show", true ) );
      $news_shows = $showpost->post_name;
      $news_episodes = $post->post_name;
    }
    if ( strpos($permalink, '%news_clips%') !== false ) {
      $showpost = get_post( get_post_meta( $post->ID, "show", true ) );
      $news_shows = $showpost->post_name;
      $news_clips = $post->post_name;
    }
    if ( strpos($permalink, '%news_articles%') !== false ) {
      $showpost = get_post( get_post_meta( $post->ID, "show", true ) );
      $news_shows = $showpost->post_name;
      $news_articles = $post->post_name;
    }
    //SPORTS
    if ( strpos($permalink, '%sports_shows%') !== false ) {
      $showpost = get_post( get_post_meta( $post->ID, "show", true ) );
      $sports_shows = $showpost->post_name;
    }
    if ( strpos($permalink, '%sports_episodes%') !== false ) {
      $showpost = get_post( get_post_meta( $post->ID, "show", true ) );
      $sports_shows = $showpost->post_name;
      $sports_episodes = $post->post_name;
    }
    if ( strpos($permalink, '%sports_clips%') !== false ) {
      $showpost = get_post( get_post_meta( $post->ID, "show", true ) );
      $sports_shows = $showpost->post_name;
      $sports_clips = $post->post_name;
    }
    if ( strpos($permalink, '%sports_articles%') !== false ) {
      $showpost = get_post( get_post_meta( $post->ID, "show", true ) );
      $sports_shows = $showpost->post_name;
      $sports_articles = $post->post_name;
    }
    //ENTER
    if ( strpos($permalink, '%enter_shows%') !== false ) {
      $showpost = get_post( get_post_meta( $post->ID, "show", true ) );
      $enter_shows = $showpost->post_name;
    }
    if ( strpos($permalink, '%enter_episodes%') !== false ) {
      $showpost = get_post( get_post_meta( $post->ID, "show", true ) );
      $enter_shows = $showpost->post_name;
      $enter_episodes = $post->post_name;
    }
    if ( strpos($permalink, '%enter_clips%') !== false ) {
      $showpost = get_post( get_post_meta( $post->ID, "show", true ) );
      $enter_shows = $showpost->post_name;
      $enter_clips = $post->post_name;
    }
    if ( strpos($permalink, '%enter_articles%') !== false ) {
      $showpost = get_post( get_post_meta( $post->ID, "show", true ) );
      $enter_shows = $showpost->post_name;
      $enter_articles = $post->post_name;
    }

    // TEST



    $permalink = str_replace(
      array(
        $leavename? '' : '%postname%',
        '%post_id%',
        '%news_shows%',
        '%news_episodes%',
        '%news_clips%',
        '%news_articles%',
        '%sports_shows%',
        '%sports_episodes%',
        '%sports_clips%',
        '%sports_articles%',
        '%enter_shows%',
        '%enter_episodes%',
        '%enter_clips%',
        '%enter_articles%',
        $leavename? '' : '%pagename%',
        ), 
      array(
        $post->post_name,
        $post->ID,
        $news_shows,
        $news_episodes,
        $news_clips,
        $news_articles,
        $sports_shows,
        $sports_episodes,
        $sports_clips,
        $sports_articles,
        $enter_shows,
        $enter_episodes,
        $enter_clips,
        $enter_articles,
        $post->post_name,
        ), 
      $permalink
    );

  }
  flush_rewrite_rules();
  return $permalink;
}

/////////////////////////////////////
// CUSTOM POST TYPES ---  TEMPLATE //
/////////////////////////////////////
add_filter( 'template_include', function( $template ) {
    $my_types = array( 'news_episodes', 'news_clips', 'news_articles', 'sports_episodes', 'sports_clips', 'sports_articles', 'enter_episodes', 'enter_clips', 'enter_articles' );
    if ( is_post_type_archive(  $my_types ) ){
        return get_template_directory() . '/archive-viewmedia.php';
    } else if ( is_singular( $my_types ) ){
        return get_template_directory() . '/template-viewmedia.php';
    } else {
        return $template;
    }
});
add_filter( 'template_include', function( $template ) {
    $my_types = array( 'news_shows', 'sports_shows', 'enter_shows');
    if ( is_post_type_archive(  $my_types ) ){
        return get_template_directory() . '/archive-show.php';
    } else if ( is_singular( $my_types ) ){
        return get_template_directory() . '/template-show.php';
    } else {
        return $template;
    }
});

// CUSTOM COLUMN
/*add_action('manage_edit-news_episodes_column',  __NAMESPACE__ . '\\news_episodes_custom_columns');
add_filter('manage_edit-news_episodes_columns', __NAMESPACE__ . '\\news_episodes_edit_columns');

function news_episodes_edit_columns($columns){
  $columns['show'] = __('Show');
  return $columns;
}
function news_episodes_custom_columns($column, $post_id){
  global $post;
  switch ($column) {
    case 'show':
      //$show = get_field('show', $id);
      //$custom = get_post_custom();
      echo 'Aqui va';
      break;
  }
}*/



/*add_filter( 'manage_edit-news_episodes_columns', __NAMESPACE__ . '\\set_custom_edit_book_columns' );
add_action( 'manage_edit-news_episodes_custom_column' , __NAMESPACE__ . '\\custom_book_column', 10, 2 );

function set_custom_edit_book_columns($columns) {
    unset( $columns['episode_show'] );
    $columns['episode_show'] = __( 'Show' );

    return $columns;
}

function custom_book_column( $column, $post_id ) {
    switch ( $column ) {

        case 'episode_show' :
            $terms = get_the_term_list( $post_id , 'book_author' , '' , ',' , '' );
            if ( is_string( $terms ) )
                echo $post_id;
           else
                _e( 'Unable to get author(s)', 'your_text_domain' );
            break;

        case 'publisher' :
            echo get_post_meta( $post_id , 'publisher' , true ); 
            break;

    }
}*/








