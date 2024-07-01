<section class="about-wrapper" id="about-company">
    <div class="about-content">
    <div class="about">
        <?php if($fieldsArr['about_title1']):?>
        <h2><?php echo $fieldsArr['about_title1'];?></h2>
        <?php endif;?>
        <?php if($fieldsArr['about_description1']):?>
        <p><?php echo $fieldsArr['about_description1'];?></p>
        <?php endif;?>
        
        <?php if($fieldsArr['about_title2']):?>
        <h2><?php echo $fieldsArr['about_title2'];?></h2>
        <?php endif;?>
        <?php if($fieldsArr['about_description2']):?>
        <p><?php echo $fieldsArr['about_description2'];?></p>
        <?php endif;?>

    </div>
    <img class="about__big-logo" src="<?php echo get_template_directory_uri();?>/images/about-big-logo.png" alt="">
    <img class="about__small-logo" src="<?php echo get_template_directory_uri();?>/images/about-small-logo.png" alt="">
        </div>
    </section>