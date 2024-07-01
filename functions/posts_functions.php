<?php

function rename_posts_labels( $labels ){

    $new = [
        'name'                  => __('Products', 'asolutions'),
        'singular_name'         => __('Product', 'asolutions'),
        'add_new'               => __('Add Product', 'asolutions'),
        'add_new_item'          => __('Add Product', 'asolutions'),
        'edit_item'             => __('Edit Product', 'asolutions'),
        'new_item'              => __('New Product', 'asolutions'),
        'view_item'             => __('View Product', 'asolutions'),
        'search_items'          => __('Search Products', 'asolutions'),
        'not_found'             => __('No Products found', 'asolutions'),
        'not_found_in_trash'    => __('No Products found in trash', 'asolutions'),
        'all_items'             => __('All Products', 'asolutions'),
        'menu_name'             => __('Products', 'asolutions'),
        'name_admin_bar'        => __('Product', 'asolutions'),
    ];

    return (object) array_merge( (array) $labels, $new );
}
