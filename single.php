<?php

the_post();

$fieldsArr = get_fields();
get_header();
?>
	
    <section class="page__content">
        <?php custom_breadcrumbs();?>
        <h1><?php the_title();?></h1>
        <?php the_content();?>
        
    </section>

<?php

get_footer();

?>