<?php
/**
 * File: 
 *  theme-functions/styles.php 
 * 
 * This file contains all the CSS files needed for the theme.
 * 
 */



/**
 * Loads all the main CSS files needed for the theme, all the general styles are here.
 * 
 */
function load_styles() {
    wp_enqueue_style('main', get_template_directory_uri() . '/style/main.css');
}
add_action('wp_enqueue_scripts', 'load_styles');




/**
 * Only loads CSS files needed for the Homepage (templates/homepage.php)
 * 
 */
function load_homepage_styles() {
    // Check if we are in the homepage
    if (is_page_template('templates/page-home.php')) {
        wp_enqueue_style('home', get_template_directory_uri() . '/style/templates/home.css');
    }
}
add_action('wp_enqueue_scripts', 'load_homepage_styles');