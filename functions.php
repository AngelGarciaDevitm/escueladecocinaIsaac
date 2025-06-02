<?php
/*
*  Carga los Scripts y CSS del theme
*/

function edc_scripts() {
    /**Styles */
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.css', false, '4.1.3');
}
add_action('wp_enqueue_scripts', 'edc_scripts' );
