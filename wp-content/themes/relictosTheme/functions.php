<?php

require_once('library/shortcodes.php');
require_once('library/cpt/cpt-noticias.php');
require_once('library/cpt/cpt-arboles.php');
require_once('library/cpt/cpt-bosques.php');
require_once('library/cpt/cpt-huertas.php');
require_once('library/cpt/cpt-relictos.php');
require_once('library/cpt/cpt-vegetacion.php');
require_once('library/cpt/cpt-flora.php');
require_once('library/cpt/cpt-fauna.php');
require_once('library/cpt/cpt-cultivadas.php');

require_once('library/cpt/cpt-objetos.php');
require_once('library/cpt/cpt-leyes.php');
require_once('library/cpt/cpt-documentos.php');
require_once('library/admin-custom.php');
require_once('library/meta-boxes.php');

/************* THUMBNAIL SIZE OPTIONS *************/

add_theme_support( 'post-thumbnails' );

// Thumbnail sizes
add_image_size( '1000-500', 1000, 500, true );
add_image_size( '900-600', 900, 600, true );
add_image_size( '900-450', 900, 450, true );
add_image_size( '900-300', 900, 300, true );
add_image_size( '800-800', 800, 800, true );
add_image_size( '600-800', 600, 800, true );
add_image_size( '700-800', 700, 800, true );
add_image_size( '300-200', 300, 200, true );
add_image_size( '300-150', 300, 150, true );
add_image_size( '300-100', 300, 100, true );
add_image_size( '300-300', 300, 300, true );
add_image_size( '300-400', 300, 400, true );
add_image_size( '350-400', 350, 400, true );

set_user_setting('image_default_link_type', 'file' );

function themes_dir_add_rewrites() {

  $theme_name = next(explode('/themes/', get_stylesheet_directory()));

  global $wp_rewrite;
  $new_non_wp_rules = array(
    'css/(.*)'       => 'wp-content/themes/'. $theme_name . '/stylesheets/$1',
    'js/(.*)'        => 'wp-content/themes/'. $theme_name . '/javascripts/$1',
    'images/(.*)'    => 'wp-content/themes/'. $theme_name . '/images/$1',
    'library/(.*)'    => 'wp-content/themes/'. $theme_name . '/library/$1',
  );
  $wp_rewrite->non_wp_rules += $new_non_wp_rules;
  
}
add_action('generate_rewrite_rules', 'themes_dir_add_rewrites');

/************* ENQUEUE CSS AND JS *****************/

function kew_scripts(){

    // ---- Register Styles ----
    
    // Bring in Open Sans from Google fonts
    wp_register_style( 'open-sans', 'http://fonts.googleapis.com/css?family=Open+Sans:300,800');
    wp_register_style( 'flex-style', '/library/flex/flexslider.css' );
    wp_register_style( 'lightbox-style', '/library/lightbox/css/jquery.fancybox.css' );
    wp_register_style( 'kew-css', '/css/kew.css', array(), '', 'all' );
    // This is the compiled css file from SCSS
    
    // ---- Enqueue Styles ----

    wp_enqueue_style( 'open-sans' );
    wp_enqueue_style( 'flex-style' );
    wp_enqueue_style( 'lightbox-style' );
    wp_enqueue_style( 'kew-css' );

    // ---- Register Scripts ----

    // jQuery is loaded using the same method from HTML5 Boilerplate:
    // Grab Google CDN's latest jQuery with a protocol relative URL; fallback to local if offline
    // It's kept in the header instead of footer to avoid conflicts with plugins.
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js', false, null, false);
        add_filter('script_loader_src', 'kew_jquery_local_fallback', 10, 2); // See "kew_jquery_local_fallback" for local fallback
    }
        
    wp_register_script('modernizr', '/js/foundation/modernizr.foundation.js', false, null, false);

    wp_register_script( 'fancybox', '/library/lightbox/js/jquery.fancybox.pack.js', false, true );
    wp_register_script( 'lightbox', '/library/lightbox/js/lightbox.js', array( 'fancybox' ), false, true );

    wp_register_script( 'foundation-reveal', '/js/foundation/jquery.reveal.js', 'jQuery', '1.1', true ); 
    wp_register_script( 'foundation-orbit', '/js/foundation/jquery.orbit-1.4.0.js', 'jQuery', '1.4.0', true ); 
    wp_register_script( 'foundation-custom-forms', '/js/foundation/jquery.customforms.js', 'jQuery', '1.0', true ); 
    wp_register_script( 'foundation-placeholder', '/js/foundation/jquery.placeholder.min.js', 'jQuery', '2.0.7', true  ); 
	wp_register_script( 'foundation-tooltips', '/js/foundation/jquery.tooltips.js', 'jQuery', '2.0.1', true ); 
    wp_register_script( 'foundation-app', '/js/app.js', 'jQuery', '1.0', true ); 
    wp_register_script( 'foundation-off-canvas', '/js/foundation/off-canvas.js', 'jQuery', '1.0', true ); 
    wp_register_script( 'flexslider', '/library/flex/jquery.flexslider-min.js', '', '', true ); 
    //wp_register_script( 'slidePanel', '/js/jquery.slidepanel.js', 'jQuery', '1.4.0', true);
    wp_register_script( 'easing', '/js/jquery.easing.js', '', '', true ); 
    wp_register_script( 'mousewheel', '/js/jquery.mousewheel.js', '', '', true ); 

    wp_register_script( 'wp-foundation-js', '/library/js/scripts.js', 'jQuery', '1.0', true);

    // ---- Enqueue Scripts ----

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'modernizr' );

    wp_enqueue_script( 'fancybox' );
    wp_enqueue_script( 'lightbox' );

    wp_enqueue_script( 'foundation-reveal' );
    wp_enqueue_script( 'foundation-orbit' );
    wp_enqueue_script( 'foundation-custom-forms' );
    wp_enqueue_script( 'foundation-placeholder');
    wp_enqueue_script( 'foundation-tooltips' );
    wp_enqueue_script( 'foundation-app' );
    wp_enqueue_script( 'foundation-off-canvas' );
    //wp_enqueue_script( 'slidePanel' );
    wp_enqueue_script( 'flexslider' );
    wp_enqueue_script( 'easing' );
    wp_enqueue_script( 'mousewheel' );

    wp_enqueue_script( 'wp-foundation-js' );

}
add_action('wp_enqueue_scripts', 'kew_scripts', 100);

// http://wordpress.stackexchange.com/a/12450
function kew_jquery_local_fallback($src, $handle) {
    static $add_jquery_fallback = false;

    if ($add_jquery_fallback) {
        echo '<script>window.jQuery || document.write(\'<script src="' . '/js/jquery.min.js"><\/script>\')</script>' . "\n";
        $add_jquery_fallback = false;
    }

    if ($handle === 'jquery') {
        $add_jquery_fallback = true;
    }

    return $src;
}

// Remove height/width attributes on images so they can be responsive
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

// change the standard class that wordpress puts on the active menu item in the nav bar
//Deletes all CSS classes and id's, except for those listed in the array below
function custom_wp_nav_menu($var) {
        return is_array($var) ? array_intersect($var, array(
                //List of allowed menu classes
                'current_page_item',
                'current_page_parent',
                'current_page_ancestor',
                'first',
                'last',
                'vertical',
                'horizontal'
                )
        ) : '';
}
add_filter('nav_menu_css_class', 'custom_wp_nav_menu');
add_filter('nav_menu_item_id', 'custom_wp_nav_menu');
add_filter('page_css_class', 'custom_wp_nav_menu');
 
//Replaces "current-menu-item" with "active"
function current_to_active($text){
        $replace = array(
                //List of menu item classes that should be changed to "active"
                'current_page_item' => 'active',
                'current_page_parent' => 'active',
                'current_page_ancestor' => 'active',
        );
        $text = str_replace(array_keys($replace), $replace, $text);
                return $text;
        }
add_filter ('wp_nav_menu','current_to_active');
 
//Deletes empty classes and removes the sub menu class
function strip_empty_classes($menu) {
    $menu = preg_replace('/ class=""| class="sub-menu"/','',$menu);
    return $menu;
}
add_filter ('wp_nav_menu','strip_empty_classes');

function is_tree($pid) {      // $pid = The ID of the page we're looking for pages underneath
    global $post;         // load details about this page
    if(is_page()&&($post->post_parent==$pid||is_page($pid))) 
               return true;   // we're at the page or at a sub page
    else 
               return false;  // we're elsewhere
};

?>