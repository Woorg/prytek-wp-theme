<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package prytek
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function prytek_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'prytek_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function prytek_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'prytek_pingback_header' );








// ACF

if (function_exists('acf_add_options_page')) {

  acf_add_options_page(
    array(
      'page_title'  => 'Настройки PRYTEK',
      'menu_title'  => 'Настройки PRYTEK',
      'menu_slug'   => 'theme-settings',
      'capability'  => 'edit_posts',
      'icon_url'    => 'dashicons-admin-settings',
      'redirect'    => false
    )
  );

}





// Contacts form 7

add_filter('wpcf7_form_elements', function($content) {
  $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

  return $content;
});




//add support for async and defer params
add_filter( 'script_loader_tag', function($tag, $handle){
    if ( wp_scripts()->get_data( $handle, 'defer' ) ) {
        $tag = str_replace( '></', ' defer></', $tag );
    }
    if ( wp_scripts()->get_data( $handle, 'async' ) ) {
        $tag = str_replace( '></', ' async></', $tag );
    }
    return $tag;
}, 10, 2 );



// Change wp nav item classes

add_filter( 'nav_menu_css_class', 'prytek_nav_menu_css_class', 10, 4 );
function prytek_nav_menu_css_class( $classes, $item, $args, $depth ){
  // var_dump($item)
  if (in_array('current-menu-item', $classes) ){
    // $classes[] = 'current ';
  }

  // $classes[] = 'nav__item';
  return $classes;

}



// Change wp nav link classes
add_filter( 'nav_menu_link_attributes', 'prytek_filter_nav_menu_link_attributes', 10, 4 );
function prytek_filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
  if ( $item->current ) {
    $atts['class'] .= 'current';
  }
  return $atts;
}



function prytek_remove_wp_block_library_css(){
 wp_dequeue_style( 'wp-block-library' );
 wp_dequeue_style( 'wp-block-library-theme' );
}
add_action( 'wp_enqueue_scripts', 'prytek_remove_wp_block_library_css' );


add_filter( 'post_thumbnail_html', 'prytek_remove_width_attribute', 10 );
add_filter( 'image_send_to_editor', 'prytek_remove_width_attribute', 10 );

function prytek_remove_width_attribute( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}





