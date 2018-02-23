<?php
/**
 * Plugin Name:     Africa is a Country Core Functionality
 * Plugin URI:      https://github.com/misfist/aiac-core-functionality
 * Description:     Core functions for the Africa is a Country project.
 * Author:          Pea
 * Author URI:      https://github.com/misfist
 * Text Domain:     aiac-core
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         AIAC_Core_Functionality
 */

 if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Plugin Directory
 *
 * @since 0.1.0
 */
define( 'SITE_CORE_DIR', dirname( __FILE__ ) );
define( 'SITE_CORE_DIR_URI', plugin_dir_url( __FILE__ ) );

require_once( 'includes/security.php' );
require_once( 'includes/performance.php' );

require_once( 'includes/helpers.php' );
require_once( 'includes/template-tags.php' );
require_once( 'includes/custom-post-types.php' );
require_once( 'includes/custom-fields.php' );
require_once( 'includes/customizations.php' );
require_once( 'includes/class-admin.php' );
require_once( 'includes/public.php' );

/**
 * Initialize Classes
 *
 * @since 0.1.0
 */
function core_functionality_init() {
  if( class_exists( 'AIAC_Core_Admin' ) ) {
    $admin = new AIAC_Core_Admin( SITE_CORE_DIR_URI );

    return $admin;
  }
}

core_functionality_init();
