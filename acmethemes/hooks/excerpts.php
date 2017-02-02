<?php
add_filter('excerpt_length', 'read_more_alter_excerpt');

/**
 * Add ... for more view
 *
 * @since Read More 1.0.0
 *
 * @param null
 * @return null
 *
 */

if ( !function_exists('read_more_excerpt_more') ) :
    function read_more_excerpt_more($more) {
        return '...';
    }
endif;
add_filter('excerpt_more', 'read_more_excerpt_more');