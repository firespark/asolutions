<?php
function custom_styles_js_files(){
		wp_enqueue_style('swiper_min_css', get_template_directory_uri().'/css/swiper.min.css', [], 1);
        wp_enqueue_style('style_css', get_template_directory_uri().'/css/style.css', [], 45);
        wp_enqueue_style('custom_css', get_template_directory_uri().'/css/custom.css', [], 11);

        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'https://code.jquery.com/jquery-3.7.1.js', [], 3, true);
        //wp_enqueue_script( 'jquery' );
        
        wp_enqueue_script('swiper_bundle_min_js', get_template_directory_uri().'/js/swiper-bundle.min.js', [], 1, true);
        wp_enqueue_script('index_js', get_template_directory_uri().'/js/index.js', [], 16, true);
        wp_enqueue_script('custom_js', get_template_directory_uri().'/js/custom.js', ['jquery'], 15, true);
        wp_localize_script('custom_js', 'adminAjaxObj', [
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        ]);
}

function custom_scripts_admin( $hook_suffix ) {

    if ( ! in_array( $hook_suffix, [ 'toplevel_page_catalogs_view', 'toplevel_page_subscriptions_view' ] ) ) {
        return;
    }

    wp_enqueue_style('bootstrap_min_css', get_template_directory_uri().'/admin/assets/css/bootstrap.min.css', [], 1);
    wp_enqueue_style('admin_css', get_template_directory_uri().'/admin/assets/css/admin.css', [], 6);
    wp_enqueue_script('jquery_js', 'https://code.jquery.com/jquery-3.2.1.min.js', [], 15, true);
    wp_enqueue_script('bootstrap_min_js', get_template_directory_uri().'/admin/assets/js/bootstrap.min.js', ['jquery'], 15, true);
    wp_enqueue_script('admin_js', get_template_directory_uri().'/admin/assets/js/admin.js', ['jquery'], 16, true);
    wp_localize_script('admin_js', 'adminAjaxObj', [
        'ajaxUrl' => admin_url( 'admin-ajax.php' ),
        'textDeletePost' => __('Delete post?', 'asolutions'),
        'textDeletePosts' => __('Delete selected posts?', 'asolutions'),
    ]);
}