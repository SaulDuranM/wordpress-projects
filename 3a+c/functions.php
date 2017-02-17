<?php
/**
 * _tk functions and definitions
 *
 * @package _tk
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 750; /* pixels */

if ( ! function_exists( '_tk_setup' ) ) :
/**
 * Set up theme defaults and register support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function _tk_setup() {
	global $cap, $content_width;

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	/**
	 * Add default posts and comments RSS feed links to head
	*/
	add_theme_support( 'automatic-feed-links' );

	/**
	 * Enable support for Post Thumbnails on posts and pages
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	*/
	add_theme_support( 'post-thumbnails' );

	/**
	 * Enable support for Post Formats
	*/
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	/**
	 * Setup the WordPress core custom background feature.
	*/
	add_theme_support( 'custom-background', apply_filters( '_tk_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
	
	/**
	 * Make theme available for translation
	 * Translations can be filed in the /languages/ directory
	 * If you're building a theme based on _tk, use a find and replace
	 * to change '_tk' to the name of your theme in all the template files
	*/
	load_theme_textdomain( '_tk', get_template_directory() . '/languages' );

	/**
	 * This theme uses wp_nav_menu() in one location.
	*/
	register_nav_menus( array(
		'primary'  => __( 'Header bottom menu', '_tk' ),
	) );

}
endif; // _tk_setup
add_action( 'after_setup_theme', '_tk_setup' );

/**
 * Register widgetized area and update sidebar with default widgets
 */
function _tk_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', '_tk' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', '_tk_widgets_init' );

/**
 * Enqueue scripts and styles
 */
function _tk_scripts() {

	// Import the necessary TK Bootstrap WP CSS additions
	wp_enqueue_style( '_tk-bootstrap-wp', get_template_directory_uri() . '/includes/css/bootstrap-wp.css' );

	// load bootstrap css
	wp_enqueue_style( '_tk-bootstrap', get_template_directory_uri() . '/includes/resources/bootstrap/css/bootstrap.min.css' );

	// load Font Awesome css
	wp_enqueue_style( '_tk-font-awesome', get_template_directory_uri() . '/includes/css/font-awesome.min.css', false, '4.1.0' );
	
	// General Style
	wp_enqueue_style( '_3A+C-Style', get_template_directory_uri() . '/css/main.css' );
	wp_enqueue_style( '_3A+C-Style-fonts', get_template_directory_uri() . '/css/fonts/stylesheet.css' );
	wp_enqueue_style( '_3A+C-GridSter', get_template_directory_uri() . '/css/jquery.gridster.css' );

	// load _tk styles
	wp_enqueue_style( '_tk-style', get_stylesheet_uri() );

	// load bootstrap js
	wp_enqueue_script('_tk-bootstrapjs', get_template_directory_uri().'/includes/resources/bootstrap/js/bootstrap.min.js', array('jquery') );
	
	// General js
	wp_enqueue_script('_3A+C-Script', get_template_directory_uri().'/js/script.js', array('jquery') );
	// wp_enqueue_script('_3A+C-Mobile', get_template_directory_uri().'/js/jquery-mobile.min.js', array('jquery') );
	wp_enqueue_script('_3A+C-GridSter-js', get_template_directory_uri().'/js/jquery.gridster.js', array('jquery') );

	// load bootstrap wp js
	wp_enqueue_script( '_tk-bootstrapwp', get_template_directory_uri() . '/includes/js/bootstrap-wp.js', array('jquery') );

	wp_enqueue_script( '_tk-skip-link-focus-fix', get_template_directory_uri() . '/includes/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_singular() && wp_attachment_is_image() ) {
		wp_enqueue_script( '_tk-keyboard-image-navigation', get_template_directory_uri() . '/includes/js/keyboard-image-navigation.js', array( 'jquery' ), '20120202' );
	}

}
add_action( 'wp_enqueue_scripts', '_tk_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/includes/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/includes/jetpack.php';

/**
 * Load custom WordPress nav walker.
 */
require get_template_directory() . '/includes/bootstrap-wp-navwalker.php';



add_action( 'init', 'custom_post_type', 0 );

function custom_post_type() {

	$labels = array(
		'name'                => _x( 'Proyectos', 'Post Type General Name', '3ac' ),
		'singular_name'       => _x( 'Proyecto', 'Post Type Singular Name', '3ac' ),
		'menu_name'           => __( 'Proyectos', '3ac' ),
		'all_items'           => __( 'Todos los Proyectos', '3ac' ),
		'view_item'           => __( 'Ver Proyecto', '3ac' ),
		'add_new_item'        => __( 'Agregar Proyecto', '3ac' ),
		'add_new'             => __( 'Agregar Proyecto', '3ac' ),
		'edit_item'           => __( 'Editar Proyecto', '3ac' ),
		'update_item'         => __( 'Subir Proyecto', '3ac' ),
		'search_items'        => __( 'Buscar Proyecto', '3ac' ),
		'not_found'           => __( 'Not Found', '3ac' ),
		'not_found_in_trash'  => __( 'Not found in Trash', '3ac' ),
	);
		
	$args = array(
		'label'               => __( 'proyectos', '3ac' ),
		'description'         => __( 'Todos los Proyectos', '3ac' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'taxonomies' => array('category',),
	);
	
	// Registering your Custom Post Type
	register_post_type( 'Proyectos', $args );
}

update_option('image_default_link_type','none');

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

/*--------- Shortcodes ----------*/
function sc_proyecto_ficha_tecnica($atts, $content = null)
{
    return '<div class="row descripcion-proyecto"><div class="line-top"></div><div class="descripcion-header">' . do_shortcode($content) . '</div><div class="line-bottom"></div></div>';
}
add_shortcode('ficha_tecnica', 'sc_proyecto_ficha_tecnica');



function sc_proyecto_descripcion($atts, $content = null)
{
    return '<div class="row descripcion-content"><div class="col-sm-12">' . do_shortcode($content) . '</div></div>';
}
add_shortcode('descripcion', 'sc_proyecto_descripcion');



function sc_proyecto_images($atts, $content = null)
{
    return '<div class="row img-content">' . do_shortcode($content) . '</div>';
}
add_shortcode('imagenes', 'sc_proyecto_images');


function sc_contacto($atts, $content = null)
{
    return '<div class="row content-contacto">' . do_shortcode($content) . '</div>';
}
add_shortcode('contacto', 'sc_contacto');


function sc_contacto_texto($atts, $content = null)
{
    return '<div class="col-xs-12 col-md-6 contacto_texto">' . do_shortcode($content) . '</div>';
}
add_shortcode('contacto_texto', 'sc_contacto_texto');


function sc_proyecto_img_small($atts, $content = null)
{
    return '<div class="col-sm-6"><div class="image-sm">' . do_shortcode($content) . '</div></div>';
}
add_shortcode('imagen_sm', 'sc_proyecto_img_small');


function sc_proyecto_img_to_small($atts, $content = null)
{
    return '<div class="col-sm-3"><div class="image-to-sm">' . do_shortcode($content) . '</div></div>';
}
add_shortcode('imagen_to_sm', 'sc_proyecto_img_to_small');

//IMAGENES 3 Columnas
function sc_proyecto_img_small_3($atts, $content = null)
{
    return '<div class="col-xs-12 col-md-4"><div class="image-to-sm">' . do_shortcode($content) . '</div></div>';
}
add_shortcode('imagen_sm_3', 'sc_proyecto_img_small_3');

function sc_somos_img_small_3($atts, $content = null)
{
    return '<div class="col-xs-12 col-md-4"><div class="image-to-somos-3">' . do_shortcode($content) . '</div></div>';
}
add_shortcode('imagen_somos_3', 'sc_somos_img_small_3');


function sc_proyecto_img_big($atts, $content = null)
{
    return '<div class="col-sm-12"><div class="image-bg">' . do_shortcode($content) . '</div></div>';
}
add_shortcode('imagen_bg', 'sc_proyecto_img_big');



function sc_proyecto_texto($atts, $content = null)
{
    return '<div class="col-sm-6 box-texto"><div class="container-texto"><div class="box-container-texto">' . do_shortcode($content) . '</div></div></div>';
}
add_shortcode('detalle', 'sc_proyecto_texto');


function sc_proyecto_texto_titulo($atts, $content = null)
{
    return '<h3>' . do_shortcode($content) . '</h3>';
}
add_shortcode('detalle_titulo', 'sc_proyecto_texto_titulo');


function sc_proyecto_texto_line($atts, $content = null)
{
    return '<div class="line-top"></div>';
}
add_shortcode('detalle_linea', 'sc_proyecto_texto_line');

//TEXTO Small
function sc_proyecto_texto_sm($atts, $content = null){
    return '<div class="col-xs-6 col-md-4 box-texto"><div class="container-texto"><div class="box-container-texto">' . do_shortcode($content) . '</div></div></div>';
}
add_shortcode('texto_sm', 'sc_proyecto_texto_sm');

function sc_somos_texto_third($atts, $content = null){
    return '<div class="col-xs-12 col-md-4 texto-columna">' . do_shortcode($content) . '</div>';
}
add_shortcode('texto_columna', 'sc_somos_texto_third');

function sc_proyecto_texto_titulo_sm($atts, $content = null){
    return '<h4>' . do_shortcode($content) . '</h4>';
}
add_shortcode('texto_sm_titulo', 'sc_proyecto_texto_titulo_sm');