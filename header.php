<?php
global $optionsArr;
$fieldsArr = get_fields();
$isFrontPage = is_front_page();
//$header_menu = wp_get_nav_menu_items(2);

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
   
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/images/favicons/favicon-16x16.png" />
    <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();?>/images/favicons/favicon.ico" />

    <?php wp_head();?>
    
</head>

<body <?php body_class() ?>>
    <?php wp_body_open(); ?>
    <header class="header<?php if(!$isFrontPage) echo ' headerShort';?>">
        <div class="header__wrapper">
            <a href="/">
                <img class="logo logo-primary" src="<?php echo get_template_directory_uri();?>/images/logo-hight-resolution.png" alt="">
                <img class="logo logo-black" src="<?php echo get_template_directory_uri();?>/images/logo-hight-resolution-black.png" alt="">
            </a>

            <?php require_once( __DIR__ . '/inc/header_menu.php'); ?>
      
            
        </div>
        <button class="menu-button">
            <span class="menu-button__line"></span>
        </button>
        <?php
        if($isFrontPage) {

            require_once( __DIR__ . '/inc/main_slider.php');
        }
        ?>
        
    </header>
