<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Acme Themes
 * @subpackage Read More
 */

/**
 * read_more_action_before_head hook
 * @since Read More 1.0.0
 *
 * @hooked read_more_set_global -  0
 * @hooked read_more_doctype -  10
 */
do_action( 'read_more_action_before_head' );?>
	<head>

		<?php
		/**
		 * read_more_action_before_wp_head hook
		 * @since Read More 1.0.0
		 *
		 * @hooked read_more_before_wp_head -  10
		 */
		do_action( 'read_more_action_before_wp_head' );

		wp_head();
		?>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-74397074-1', 'auto');
		  ga('send', 'pageview');

		</script>

	</head>
<body <?php body_class();?>>


<?php
/**
 * read_more_action_before hook
 * @since Read More 1.0.0
 *
 * @hooked read_more_site_start - 20
 */
do_action( 'read_more_action_before' );

/**
 * read_more_action_before_header hook
 * @since Read More 1.0.0
 *
 * @hooked read_more_skip_to_content - 10
 */
do_action( 'read_more_action_before_header' );

/**
 * read_more_action_header hook
 * @since Read More 1.0.0
 *
 * @hooked read_more_header - 10
 */
do_action( 'read_more_action_header' );

/**
 * read_more_action_after_header hook
 * @since Read More 1.0.0
 *
 * @hooked null
 */
do_action( 'read_more_action_after_header' );

/**
 * read_more_action_before_content hook
 * @since Read More 1.0.0
 *
 * @hooked null
 */
do_action( 'read_more_action_before_content' );