<?php

$fieldsArr = get_fields();

get_header();

?>
	
    <section class="page__content">
        <div class="error-page-wrapper">
            <h1 class=error-page__header>404</h1>
            <p class=error-page__text><?php _e('Oops... Page not found', 'asolutions');?></p>
            <a class=error-page__button href="/"><?php _e('Go to main page', 'asolutions');?></a>
        </div>
    </section>