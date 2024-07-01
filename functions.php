<?php
require_once(__DIR__ . '/functions/common_functions.php');
require_once(__DIR__ . '/functions/styles_js_files.php');
require_once(__DIR__ . '/functions/posts_functions.php');
require_once(__DIR__ . '/functions/ajax_functions.php');
require_once(__DIR__ . '/functions/admin_functions.php');
require_once(__DIR__ . '/functions/tgm_plugin_functions.php');

add_action( 'after_setup_theme', 'custom_theme_setup');

// Main settings
$optionsArr = get_fields('options');

// Styles and js files
add_action('wp_enqueue_scripts','custom_styles_js_files');
add_action( 'admin_enqueue_scripts', 'custom_scripts_admin' );


add_filter('post_type_labels_post', 'rename_posts_labels');

add_filter( 'upload_mimes', 'upload_allow_types' );


// Ajax
// Public
add_action( 'wp_ajax_send_subscription', 'custom_send_subscription_ajax' );
add_action( 'wp_ajax_nopriv_send_subscription', 'custom_send_subscription_ajax' );

// Authorised
add_action( 'wp_ajax_admin_remove_subscription', 'admin_remove_subscription' );
add_action( 'wp_ajax_admin_remove_many_subscriptions', 'admin_remove_many_subscriptions' );




// Admin panel

add_action('admin_menu', 'admin_subscriptions_view');

add_action('admin_menu', 'admin_catalogs_view');


// Tgm Plugin (List of required plugins for this theme)
add_action( 'tgmpa_register', 'custom_register_required_plugins' );



