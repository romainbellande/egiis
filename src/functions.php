<?php // ==== FUNCTIONS ==== //

// Load the configuration file for this installation; all options are set here
if ( is_readable( trailingslashit( get_stylesheet_directory() ) . 'functions-config.php' ) )
  require_once( trailingslashit( get_stylesheet_directory() ) . 'functions-config.php' );

// Load configuration defaults for this theme; anything not set in the custom configuration (above) will be set here
require_once( trailingslashit( get_stylesheet_directory() ) . 'functions-config-defaults.php' );

// An example of how to manage loading front-end assets (scripts, styles, and fonts)
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/assets.php' );

// Required to demonstrate WP AJAX Page Loader (as WordPress doesn't ship with simple post navigation functions)
require_once( trailingslashit( get_stylesheet_directory() ) . 'inc/navigation.php' );

// Only the bare minimum to get the theme up and running
function voidx_setup() {

  // Language loading
  load_theme_textdomain( 'voidx', trailingslashit( get_template_directory() ) . 'languages' );

  // HTML5 support; mainly here to get rid of some nasty default styling that WordPress used to inject
  add_theme_support( 'html5', array( 'search-form', 'gallery' ) );

  // Automatic feed links
  add_theme_support( 'automatic-feed-links' );

  // $content_width limits the size of the largest image size available via the media uploader
  // It should be set once and left alone apart from that; don't do anything fancy with it; it is part of WordPress core
  global $content_width;
  if ( !isset( $content_width ) || !is_int( $content_width ) )
    $content_width = (int) 960;

  // Register header and footer menus
  register_nav_menu( 'header', __( 'Header menu', 'voidx' ) );
  register_nav_menu( 'footer', __( 'Footer menu', 'voidx' ) );

}
add_action( 'after_setup_theme', 'voidx_setup', 11 );

// Sidebar declaration
function voidx_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Main sidebar', 'voidx' ),
    'id'            => 'sidebar-main',
    'description'   => __( 'Appears to the right side of most posts and pages.', 'voidx' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget'  => '</aside>',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
  ) );
}
add_action( 'widgets_init', 'voidx_widgets_init' );

// Ajouter les images à la une sur les articles
add_theme_support( 'post-thumbnails' );

// Créer des Custom Post Type
add_action( 'init', 'create_post_type' );
function create_post_type() {
    // Dupliquer le register_post_type pour ajouter d'autres CPT
    register_post_type('titles',
        array(
            'labels' => array(
                'name' => 'Titres',
                'singular_name' => 'Titres'
            ),
            'public' => true,
            'supports' => array('title')
        )
    );
    register_post_type('home',
        array(
            'labels' => array(
                'name' => 'Accueil',
                'singular_name' => 'Accueil'
            ),
            'public' => true,
            'supports' => array('editor', 'title')
        )
    );
    register_post_type('about',
        array(
            'labels' => array(
                'name' => 'A propos',
                'singular_name' => 'A propos'
            ),
            'public' => true,
            'supports' => array('editor', 'title')
        )
    );
    register_post_type('team',

        array(
            'labels' => array(
                'name' => 'Equipe',
                'singular_name' => 'Equipe'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
    register_post_type('data',
        array(
            'labels' => array(
                'name' => 'Gestion de données',
                'singular_name' => 'Gestion de données'
            ),
            'public' => true,
            'supports' => array('editor', 'title')
        )
    );
    register_post_type('products',
        array(
            'labels' => array(
                'name' => 'Produits',
                'singular_name' => 'Produit'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
    register_post_type('contact',
        array(
            'labels' => array(
                'name' => 'Contact',
                'singular_name' => 'Contact'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );

    register_post_type('divers',
        array(
            'labels' => array(
                'name' => 'Divers',
                'singular_name' => 'Divers'
            ),
            'public' => true,
            'supports' => array('thumbnail', 'editor', 'title')
        )
    );
    



}
