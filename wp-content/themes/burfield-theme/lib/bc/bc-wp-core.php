<?php
/**
* Admin Customisation
*
* functions and tweaks to customise the WP Admin area *
* @package BC Base Theme
* @since BC Base Theme 0.0.0
*/


/**
* Remove The Ability to Edit Plugins via Edit screen
*/
if( !defined( 'DISALLOW_FILE_EDIT' ) || DISALLOW_FILE_EDIT == false )
define( 'DISALLOW_FILE_EDIT', true );


/**
* Remove The Theme Editor
*/
function remove_editor() {
  $page = remove_submenu_page( 'themes.php', 'theme-editor.php' );
}
add_action( 'admin_init', 'remove_editor' );


/**
* Remove Default WP Dashboard Items
*/
//function example_remove_dashboard_widgets() {
  // Globalize the metaboxes array, this holds all the widgets for wp-admin
//  global $wp_meta_boxes;
  //  debug($wp_meta_boxes);
  // 	// Remove the "incomming links"
  // 	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
  //
  // 	// Remove "right now"
  // 	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
  //
  // 	// Remove "Plugins"
  // 	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
  //
  // 	// Remove "Primary Area"
  // 	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
  //
  // 	// Remove "Secondary Area"
  // 	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
//}
//// Hoook into the 'wp_dashboard_setup' action to register our function
//add_action('wp_dashboard_setup', 'example_remove_dashboard_widgets' );


/**
* De-regsiter WP Core Widgets
*
* Removes unwanted/unused WP Core Widgets
*/

//
// function bc_unregister_default_wp_widgets() {
// 	unregister_widget('WP_Widget_Pages');
// 	unregister_widget('WP_Widget_Calendar');
// 	//unregister_widget('WP_Widget_Archives');
// 	unregister_widget('WP_Widget_Links');
// 	unregister_widget('WP_Widget_Meta');
// 	unregister_widget('WP_Widget_Search');
// 	//unregister_widget('WP_Widget_Text');
// 	unregister_widget('WP_Widget_Categories');
// 	unregister_widget('WP_Widget_Recent_Posts');
// 	unregister_widget('WP_Widget_Recent_Comments');
// 	//unregister_widget('WP_Widget_RSS');
// 	unregister_widget('WP_Widget_Tag_Cloud');
// }
// add_action('widgets_init', 'bc_unregister_default_wp_widgets', 1);

/**
* Customize Contact Methods
* @since 1.0.0
*
* @author Bill Erickson
* @link http://sillybean.net/2010/01/creating-a-user-directory-part-1-changing-user-contact-fields/
*
* @param array $contactmethods
* @return array
*/
function bc_remove_contactmethods( $contactmethods ) {
  unset( $contactmethods['aim'] );
  unset( $contactmethods['yim'] );
  unset( $contactmethods['jabber'] );

  return $contactmethods;
}
add_filter( 'user_contactmethods' , 'bc_remove_contactmethods');


/**
* Remove Upgrade Notice
*
* Stops WP Admin from displaying prompt to update WordPress core, so this can be handled by us via status dashboard.
*/

function wphidenag() {
  remove_action( 'admin_notices', 'update_nag', 3 );
}
add_action('admin_menu','wphidenag');


/*
* Enables SVG uploading in the WP upload option
*/
function bc_mime_types( $mimes = array() ){
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'bc_mime_types' );


/*
* Fixes display of svg images when selected as featured image
*/
function bc_fix_svg() {
  echo '<style type="text/css">
  .attachment-post-thumbnail, .thumbnail img {
    width: 100% !important;
    height: auto !important;
  }
  </style>';
}
add_action('admin_head', 'bc_fix_svg');

/*
* Optional comments
*/
function comments() {

  if( function_exists('acf_add_options_page') ) {
    $comments_global = get_field('enable_comments_global', 'option');
    $comments_indiv = get_field('enable_comments');

    if (!isset($comments_global) || !empty($comments_global)) {
      if (!isset($comments_indiv) || !empty($comments_indiv)) {

        comments_template( '', true );

      }
    }
  } else {
    comments_template( '', true ); // comment out/remove if unwanted
  }
}

// Hide admin page
add_action( 'template_redirect', 'author_page_template' );
function author_page_template() {
  if ((is_author() ) && (get_the_author_meta('display_name') == 'bcadmin' || get_the_author_meta('display_name') == 'admin')) {
    wp_redirect( home_url(), 301 );
    exit;
  }
}
