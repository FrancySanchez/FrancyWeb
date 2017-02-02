<?php
/**
 * Read More functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Acme Themes
 * @subpackage Read More
 */

/**
 * Require init.
 */
require trailingslashit( get_template_directory() ).'acmethemes/init.php';

function add_custom_scripts() {

   wp_enqueue_script( 'skill-bars', get_template_directory_uri() . '/assets/js/skill-bars.js', array (), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );