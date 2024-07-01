<?php

function admin_subscriptions_display() {
    admin_get_subscriptions_by_type('subscribe');
    
}

function admin_catalogs_display() {
    admin_get_subscriptions_by_type('catalog');
    
}


// Subscriptions
function admin_get_subscriptions_by_type($type){
    global $wpdb;

  
    $results_per_page = 100;
    $admin_title = ($type === 'catalog') ? __('Catalog Applications', 'asolutions') : __('Subscriptions', 'asolutions');
    $searchInputPage = ($type === 'catalog') ? 'catalogs_view' : 'subscriptions_view';

    if(isset($_GET['search']) && $_GET['search']){
        $search = $_GET['search'];
        $total_pages = $wpdb->get_var("SELECT COUNT(*) FROM " . $wpdb->prefix . "subscription_emails 
            WHERE type = '" . $type . "' AND email LIKE '%" . $search . "%'");
    
        $total_pages = ceil($total_pages/$results_per_page);
        $get_par = '';
        if($total_pages > 1){

            if ($_GET["paged"]) $paged  = $_GET["paged"];
            else $paged=1; 
            $start_from = ($paged-1) * $results_per_page;
            $subscriptions = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "subscription_emails 
                WHERE type = '" . $type . "' AND email LIKE '%" . $search . "%'
            LIMIT $start_from, $results_per_page");
            $navi = pagination_admin_panel('subscriptions_view', $paged, $get_par, $total_pages);
        }
        else {
            $subscriptions = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "subscription_emails 
                WHERE type = '" . $type . "' AND 
                email LIKE '%" . $search . "%'");
            $navi = '';

        }
    }
    
    else {

        $total_pages = $wpdb->get_var("SELECT COUNT(*) FROM " . $wpdb->prefix . "subscription_emails WHERE type = '" . $type . "'");
        
        $total_pages = ceil($total_pages/$results_per_page);
        $get_par = '';
        if($total_pages > 1){

            if ($_GET["paged"]) $paged  = $_GET["paged"];
            else $paged=1; 
            $start_from = ($paged-1) * $results_per_page;
            $subscriptions = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "subscription_emails WHERE type = '" . $type . "' LIMIT $start_from,$results_per_page");
            $navi = pagination_admin_panel('subscriptions_view', $paged, $get_par, $total_pages);
        }
        else {
            $subscriptions = $wpdb->get_results("SELECT * FROM " . $wpdb->prefix . "subscription_emails WHERE type = '" . $type . "'");
            $navi = '';
        }
    }
    require_once(__DIR__ . '/../admin/subscriptions_file.php');
 
    
}

function admin_subscriptions_view(){
    $page_title = __('Subscriptions', 'asolutions');
    $menu_title = __('Subscriptions', 'asolutions');
    $capability = 'edit_posts';
    $menu_slug = 'subscriptions_view';
    $function = 'admin_subscriptions_display';
    $icon_url = 'dashicons-email';
    $position = 23.1;

    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);
}

function admin_catalogs_view(){
    $page_title = __('Catalog-Applications', 'asolutions');
    $menu_title = __('Catalog-Applications', 'asolutions');
    $capability = 'edit_posts';
    $menu_slug = 'catalogs_view';
    $function = 'admin_catalogs_display';
    $icon_url = 'dashicons-buddicons-pm';
    $position = 23.2;

    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position);
}