<?php
/**
 * Register The Composer Auto Loader
 *
 */

require_once __DIR__ . '/vendor/autoload.php';




/**
 * Customize wp-content path
 *
 */
$url = "http" . (($_SERVER['SERVER_PORT'] == 443) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'];
$dir = basename(__DIR__);

define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content' );
define( 'WP_CONTENT_URL', $url . '/' . $dir . '/wp-content' );
// define( 'WP_PLUGIN_DIR', dirname(__FILE__) . '/wp-content/plugins' );
// define( 'WP_PLUGIN_URL', $url . '/' . $dir . '/wp-content/plugins' );
// define( 'UPLOADS', $url . '/' . $dir . '/wp-content/uploads' );


/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );

/** Loads the WordPress Environment and Template */
require __DIR__ . '/wordpress/wp-blog-header.php';
