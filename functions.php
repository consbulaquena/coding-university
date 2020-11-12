<?php
//gina import ang css/javascript to be used in page
// bundle of function, bunch of WP hooks

// E sal-ot ini nga lines to existing Wordpress
// This is declare, microtime to diable caching
//new script new style must have ID like 'university_main_styles'
function university_files() {
    wp_enqueue_script('main-bootcamp-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
    wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('university_main_styles', get_stylesheet_uri() , NULL, microtime());
}


//hooks to call other wordpress function to integrate scripts above to WP as addition
//add_action=hook
// this is RUN
add_action('wp_enqueue_scripts', 'university_files');
