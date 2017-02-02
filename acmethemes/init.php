<?php
/**
 * Main include functions ( to support child theme ) that child theme can override file too
 *
 * @since Read More 1.0.0
 *
 * @param string $file_path, path from the theme
 * @return string full path of file inside theme
 *
 */
if( !function_exists('read_more_file_directory') ){

    function read_more_file_directory( $file_path ){
        if( file_exists( trailingslashit( get_stylesheet_directory() ) . $file_path) ) {
            return trailingslashit( get_stylesheet_directory() ) . $file_path;
        }
        else{
            return trailingslashit( get_template_directory() ) . $file_path;
        }
    }
}

/*
* file for customizer theme options
*/
require read_more_file_directory('acmethemes/customizer/customizer.php');

/*
* file for additional functions files
*/
require read_more_file_directory('acmethemes/functions.php');

/*
* files for hooks
*/
require read_more_file_directory('acmethemes/hooks/front-page.php');

require read_more_file_directory('acmethemes/hooks/slider-selection.php');

require read_more_file_directory('acmethemes/hooks/header.php');

require read_more_file_directory('acmethemes/hooks/social-links.php');

require read_more_file_directory('acmethemes/hooks/dynamic-css.php');

require read_more_file_directory('acmethemes/hooks/footer.php');

require read_more_file_directory('acmethemes/hooks/comment-forms.php');

require read_more_file_directory('acmethemes/hooks/excerpts.php');

require read_more_file_directory('acmethemes/hooks/related-posts.php');

/*
* file for sidebar and widgets
*/

require read_more_file_directory('acmethemes/sidebar-widget/acme-col-posts.php');

require read_more_file_directory('acmethemes/sidebar-widget/acme-feature-col-posts.php');

require read_more_file_directory('acmethemes/sidebar-widget/acme-ad.php');

require read_more_file_directory('acmethemes/sidebar-widget/acme-author.php');

require read_more_file_directory('acmethemes/sidebar-widget/sidebar.php');

/*
* file for core functions imported from functions.php while downloading Underscores
*/
require read_more_file_directory('acmethemes/core.php');