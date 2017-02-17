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
    'before_title'  => '<h3>',
    'after_title'   => '</h3>'
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

  //wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
  //wp_enqueue_script('sage/js', Assets\asset_path('scripts/fe/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\assets', 100);



add_action('after_setup_theme',__NAMESPACE__ . '\\remove_admin_bar');
function remove_admin_bar() {
  //if (!current_user_can('administrator') && !is_admin()) {
    show_admin_bar(false);
  //}
}

// YOUTUBE NEWS
function my_acf_update_value( $value, $post_id, $field  ) {
  $value = "Custom value";
  echo $value;
  return $value;
}
function my_acf_load_field( $field ) {
  global $wpdb;
  $post_id = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = 'youtube'");

    // https://www.googleapis.com/youtube/v3/playlists?part=snippet%2Cid&channelId=UC0tug237S8aLSDqulD8yKRA&maxResults=20&fields=items&key=AIzaSyBS_X-rgb-PYF5p7eJOvpN_QR6lBZG9eb8
    $yt_channel_id = get_field('yt_channel_id');
    //FIELD
    $field['choices'] = array();

    $apiURL = 'https://www.googleapis.com/youtube/v3/playlists?part=snippet%2Cid&channelId='.$yt_channel_id.'&maxResults=20&fields=items&key=AIzaSyBS_X-rgb-PYF5p7eJOvpN_QR6lBZG9eb8';
    $options = array(
      CURLOPT_RETURNTRANSFER => 1,
      CURLOPT_URL  => $apiURL,
      CURLOPT_USERAGENT => "EuroChem Group"
    );

    $ch = curl_init();
    curl_setopt_array($ch, $options);
    $json = curl_exec($ch) or die( curl_error($ch) );
    curl_close($ch);

    //DECODE
    $resObj = json_decode($json);

    if(isset($resObj->items)){
      $itemsArray = $resObj->items;
      $choices = array();
      foreach ($itemsArray as &$item) {
        $field['choices'][ $item->id ] = $item->snippet->title;
      }
      return $field;
    } else {

    }
    
}


//if(isset($_GET['post']) && $_GET['post'] == 411){
if(isset($_GET['post']) && $_GET['post'] == 304){
  add_filter('acf/load_field/name=yt_playlist', __NAMESPACE__ . '\\my_acf_load_field'); 
}

//SEARCH
function add_search_func() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'jquery-ui-autocomplete' );

  wp_register_style( 'jquery-ui-styles','http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css' );
  wp_enqueue_style( 'jquery-ui-styles' );

}
//add_action( 'wp_enqueue_scripts', 'add_search_func' );




function twentyfifteen_search_form_modify( $html ) {
  return str_replace( 'class="search-submit"', 'class="search-submit screen-reader-text"', $html );
}
add_filter( 'get_search_form', __NAMESPACE__ . '\\twentyfifteen_search_form_modify' );


//REMOVE OPTIONS - GLOBAL OPERATIONS
add_action( 'admin_menu', __NAMESPACE__ . '\\adjust_the_wp_menu', 999 );
function adjust_the_wp_menu() {
  $page = remove_submenu_page( 'edit.php?post_type=globaloperations', 'edit.php?post_type=globaloperations' );
  $pagen = remove_submenu_page( 'edit.php?post_type=globaloperations', 'post-new.php?post_type=globaloperations' );
  //http://192.241.165.210/wp-admin/post-new.php?post_type=globaloperations
}

?>










