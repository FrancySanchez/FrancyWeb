<?php
/**
 * Callback functions for comments
 *
 * @since Read More 1.0.0
 *
 * @param $comment
 * @param $args
 * @param $depth
 * @return void
 *
 */
if ( !function_exists('read_more_commment_list') ) :

    function read_more_commment_list($comment, $args, $depth) {
        $GLOBALS['comment'] = $comment;
        extract($args, EXTR_SKIP);
        if ('div' == $args['style']) {
            $tag = 'div';
            $add_below = 'comment';
        }
        else {
            $tag = 'li';
            $add_below = 'div-comment';
        }
        ?>
        <<?php echo $tag ?>
        <?php comment_class(empty($args['has_children']) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
        <?php if ('div' != $args['style']) : ?>
            <div id="div-comment-<?php comment_ID() ?>" class="comment-body clearfix">
        <?php endif; ?>
        <div class="comment-author vcard">
            <?php if ($args['avatar_size'] != 0) echo get_avatar($comment, '64'); ?>
            <?php printf(__('<cite class="fn">%s</cite>', 'read-more' ), get_comment_author_link()); ?>
        </div>
        <?php if ($comment->comment_approved == '0') : ?>
            <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.', 'read-more'); ?></em>
            <br/>
        <?php endif; ?>
        <div class="comment-meta commentmetadata">
            <a href="<?php echo esc_url(get_comment_link($comment->comment_ID)); ?>">
                <i class="fa fa-clock-o"></i>
                <?php
                /* translators: 1: date, 2: time */
                printf(__('%1$s at %2$s', 'read-more'), get_comment_date(), get_comment_time()); ?>
            </a>
            <?php edit_comment_link(__('(Edit)', 'read-more'), '  ', ''); ?>
        </div>
        <?php comment_text(); ?>
        <div class="reply">
            <?php comment_reply_link( array_merge($args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </div>
        <?php if ('div' != $args['style']) : ?>
            </div>
        <?php endif; ?>
        <?php
    }
endif;

/**
 * Select sidebar according to the options saved
 *
 * @since Read More 1.0.0
 *
 * @param null
 * @return string
 *
 */
if ( !function_exists('read_more_sidebar_selection') ) :
    function read_more_sidebar_selection( ) {
        global $read_more_customizer_all_values;
        if(
            'left-sidebar' == $read_more_customizer_all_values['read-more-sidebar-layout'] ||
            'no-sidebar' == $read_more_customizer_all_values['read-more-sidebar-layout']
        ){
            $read_more_body_global_class = $read_more_customizer_all_values['read-more-sidebar-layout'];
        }
        else{
            $read_more_body_global_class= 'right-sidebar';
        }
        return $read_more_body_global_class;
    }
endif;

/**
 * BreadCrumb Settings
 */
if( ! function_exists( 'read_more_breadcrumbs' ) ):
    function read_more_breadcrumbs() {

        if ( ! function_exists( 'breadcrumb_trail' ) ) {
            require read_more_file_directory('acmethemes/library/breadcrumbs/breadcrumbs.php');
        }
        $breadcrumb_args = array(
            'container'   => 'div',
            'show_browse' => false,
            'show_on_front'   => false
        );
        echo "<div id='read-more-breadcrumbs'><div class='breadcrumb-container'>";
        breadcrumb_trail( $breadcrumb_args );
        echo "</div></div>";

    }
endif;

/**
 * Return content of fixed length
 *
 * @since Read More 1.0.0
 *
 * @param string $read_more_content
 * @param int $length
 * @return string
 *
 */
if ( ! function_exists( 'read_more_words_count' ) ) :
    function read_more_words_count( $read_more_content = null, $length = 16 ) {
        $length = absint( $length );
        if ( 0 === $length  ) {
            return '';
        }
        $source_content = preg_replace( '`\[[^\]]*\]`', '', $read_more_content );
        $trimmed_content = wp_trim_words( $source_content, $length, '...' );
        return $trimmed_content;
    }
endif;

/**
 * Generate excerpt.
 *
 * @since Read More 1.1.0
 *
 * @param int     $length Excerpt length in words.
 * @param WP_Post $post_obj WP_Post instance (Optional).
 * @return string Excerpt.
 */
if ( ! function_exists( 'read_more_excerpt' ) ) :
    
    function read_more_excerpt( $length = 50, $post_obj = null ) {

        global $post;
        if ( is_null( $post_obj ) ) {
            $post_obj = $post;
        }

        $length = absint( $length );

        if ( 0 === $length  ) {
            return '';
        }

        $source_content = $post_obj->post_content;
        if ( ! empty( $post_obj->post_excerpt ) ) {
            $source_content = $post_obj->post_excerpt;
        }

        $source_content = preg_replace( '`\[[^\]]*\]`', '', $source_content );
        $trimmed_content = wp_trim_words( $source_content, $length, '...' );
        return $trimmed_content;

    }

endif;