<?php
global $optionsArr;

?>

    <footer class="footer-wrapper">
        <div class="footer">
            <a href="/">
                <img class="logo" src="<?php echo get_template_directory_uri();?>/images/logo-hight-resolution.png" alt="" />
            </a>
            <div class="footer-info-wrapper">
                <div class="title"><a href="tel:+<?php echo get_numbers_from_str($optionsArr['main_phone']);?>" target="_blank"><?php echo $optionsArr['main_phone'];?></a></div>
                <p><?php echo $optionsArr['main_timetable'];?></p>
                <?php if($optionsArr['main_whatsapp']):?>
                <a class="footer__whatsapp" href="<?php echo $optionsArr['main_whatsapp'];?>" target="_blank"></a>
                <?php endif;?>
            </div>
            <nav class="nav">
                <a class="nav__link" href="#catalog"><?php _e('Catalog', 'asolutions');?></a>
                <a class="nav__link company-information-link" href="#about-company"><?php _e('About', 'asolutions');?></a>
                <a class="nav__link contacts-link" href="#contacts"><?php _e('Contacts', 'asolutions');?></a>
                <a class="nav__link prices-link catalog-link" href="#"><?php _e('Price list', 'asolutions');?></a>
            </nav>
            <?php require_once( __DIR__ . '/inc/footer_subscribe.php');?>
            
        </div>
    </footer>

    <?php require_once( __DIR__ . '/inc/main_modal.php');?>
    <?php require_once( __DIR__ . '/inc/catalog_modal.php');?>
    <?php require_once( __DIR__ . '/inc/confirm_modal.php');?>

    <?php wp_footer();?>
</body>

</html>