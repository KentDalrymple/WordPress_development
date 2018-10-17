<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp-blog-header.php' );


/**
*   #REST API Developer Endpoint Reference

* Resource	        Base Route
* Posts	            /wp/v2/posts
* Post Revisions	/wp/v2/revisions
* Categories	    /wp/v2/categories
* Tags	            /wp/v2/tags
* Pages	            /wp/v2/pages
* Comments	        /wp/v2/comments
* Taxonomies	    /wp/v2/taxonomies
* Media	            /wp/v2/media
* Users	            /wp/v2/users
* Post Types	    /wp/v2/types
* Post Statuses	    /wp/v2/statuses
* Settings	        /wp/v2/settings

 */