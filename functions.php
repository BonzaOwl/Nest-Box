<?php
/**
 * Next Box functions and definitions
 *
 */

add_theme_support( 'title-tag' );

// Add scripts and stylesheets
function nestbox_scripts() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '3.3.6' );
	wp_enqueue_style( 'feathers', get_template_directory_uri() . '/css/feathers.css' );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
    wp_enqueue_style( 'FontAwesome', get_template_directory_uri() . '/vendor/fontawesome/css/all.css');
}

add_action( 'wp_enqueue_scripts', 'nestbox_scripts' );

// Add Google Fonts
function nestbox_google_fonts() {
    wp_register_style('GoogleFont', 'http://fonts.googleapis.com/css?family=Nunito|Roboto:400,600,700,800');
    wp_enqueue_style( 'GoogleFont');
}

add_action('wp_print_styles', 'nestbox_google_fonts');

//Remove WordPress admin bar
function remove_admin_bar() {
    remove_action( 'wp_head', '_admin_bar_bump_cb' );
}
add_action( 'get_header', 'remove_admin_bar' );

//Remove all dashboard widgets
function remove_dashboard_widgets() {
    global $wp_meta_boxes;
    
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_drafts'] );
    unset( $wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments'] );
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_primary'] );
    unset( $wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary'] );

    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
}
add_action( 'wp_dashboard_setup', 'remove_dashboard_widgets' );


 //Remove WP embed script 
function speed_stop_loading_wp_embed() {
	if (!is_admin()) {
		wp_deregister_script('wp-embed');
	}
}
add_action('init', 'speed_stop_loading_wp_embed');

//Remove Query String from Static Resources 
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
    $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );

//Filter search
 
function exclude_pages($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
        return $query;
    }
    add_filter('pre_get_posts','exclude_pages');

/**
 * Responsive Images
 */

function bootstrap_responsive_images( $html )
{
    $classes = 'img-fluid'; // separated by spaces, e.g. 'img image-link'
    
    // check if there are already classes assigned to the anchor
    
    if ( preg_match('/<img.*? class="/', $html) ) 
    {
      $html = preg_replace('/(<img.*? class=".*?)(".*?\/>)/', '$1 ' . $classes . ' $2', $html);
    } 
    
    else 
    {
      $html = preg_replace('/(<img.*?)(\/>)/', '$1 class="' . $classes . '" $2', $html);
    }
    
    // remove dimensions from images,, does not need it!
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
  }

  add_filter( 'the_content','bootstrap_responsive_images',10 );
  add_filter( 'post_thumbnail_html', 'bootstrap_responsive_images', 10 );