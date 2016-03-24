<?php

namespace Roots\Sage\Extras;

use Roots\Sage\Setup;

/**
 * Add <body> classes
 */
function body_class($classes) {
  // Add page slug if it doesn't exist
  if (is_single() || is_page() && !is_front_page()) {
    if (!in_array(basename(get_permalink()), $classes)) {
      $classes[] = basename(get_permalink());
    }
  }

  // Add class if sidebar is active
  if (Setup\display_sidebar()) {
    $classes[] = 'sidebar-primary';
  }

  return $classes;
}
add_filter('body_class', __NAMESPACE__ . '\\body_class');

/**
 * Clean up the_excerpt()
 */
function excerpt_more() {
  return ' &hellip; <p><a href="' . get_permalink() . ' " class="btn btn-primary-outline">' . __('Lire', 'sage') . ' &rarr;</a></p>';
}
add_filter('excerpt_more', __NAMESPACE__ . '\\excerpt_more');

function list_child_pages() { 

global $post; 

if ( is_page() && $post->post_parent )

  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
else
  $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );

if ( $childpages ) {

  $string = '<ul>' . $childpages . '</ul>';
}

return $string;

}

/**
 * Disable Emojicons()
 */

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

}

add_action( 'init', __NAMESPACE__ . '\\disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
    return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
    return array();
  }
}

// Custom logo on login page
function custom_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            width: 80px;
            height: 80px;
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo-rb.png);
            background-size: 100%;
        }
    </style>
<?php }

add_action( 'login_enqueue_scripts',  __NAMESPACE__ . '\\custom_login_logo' );

// rename post to actus
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Actualités';
    $submenu['edit.php'][5][0] = 'Actualités';
    $submenu['edit.php'][10][0] = 'Ajouter une actualité';
    echo '';
}
add_action( 'admin_menu', __NAMESPACE__ . '\\change_post_menu_label' );

// hide admin bar
function my_function_admin_bar() {
    return false;
}
add_filter( 'show_admin_bar' , __NAMESPACE__ . '\\my_function_admin_bar');