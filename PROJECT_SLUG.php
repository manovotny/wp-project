<?php
/**
 * @package PROJECT_PACKAGE
 *
 * @wordpress-plugin
 * Plugin Name: PROJECT_NAME
 * Plugin URI: http://project-url.com
 * Description: PROJECT_DESCRIPTION
 * Version: 0.0.0
 * Author: AUTHOR_NAME
 * Author URI: http://author-url.com
 * License: GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.html
 * Domain Path: /TRANSLATIONS_PATH
 * Text Domain: TRANSLATIONS_DOMAIN
 * GitHub Plugin URI: http://project-url.com
 */

/* Access
---------------------------------------------------------------------------------- */

if ( ! defined( 'WPINC' ) ) {

    die;

}

/* Composer
---------------------------------------------------------------------------------- */

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {

    require __DIR__ . '/vendor/autoload.php';

}

/* Initialization
---------------------------------------------------------------------------------- */

