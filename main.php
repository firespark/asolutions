<?php
/*
    Template Name: Main

*/

get_header();
the_post();
$fieldsArr = get_fields();

require_once( __DIR__ . '/inc/main_catalog.php');
require_once( __DIR__ . '/inc/main_about.php');
require_once( __DIR__ . '/inc/main_contacts.php');

get_footer();

?>