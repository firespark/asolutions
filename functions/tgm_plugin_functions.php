<?php

require_once get_template_directory() . '/tgm-plugin/class-tgm-plugin-activation.php';

function custom_register_required_plugins() {
    
    $plugins = [

        
        [
            'name'      => 'Advanced Custom Fields PRO',
            'slug'      => 'advanced-custom-fields-pro',
            'source'    => 'https://github.com/pronamic/advanced-custom-fields-pro',
        ],


    ];

    
    $config = [
        'id'           => 'custom',                 // Unique ID for hashing notices for multiple instances of TGMPA.
        'default_path' => '',                      // Default absolute path to bundled plugins.
        'menu'         => 'tgmpa-install-plugins', // Menu slug.
        'parent_slug'  => 'themes.php',            // Parent menu slug.
        'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
        'has_notices'  => true,                    // Show admin notices or not.
        'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
        'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
        'is_automatic' => false,                   // Automatically activate plugins after installation or not.
        'message'      => '',                      // Message to output right before the plugins table.

    ];

    tgmpa( $plugins, $config );
}