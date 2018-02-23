<?php
/**
 * Core Admin Functions
 *
 * @package    AIAC_Core
 * @subpackage AIAC_Core\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

class AIAC_Core_Admin {

  /**
   * Path
   * @var string $plugin_path
   */
  private $plugin_path;

  /**
   * Construct
   *
   * @since 0.1.0
   *
   * @param  string $plugin_path
   * @return void
   */
  public function __construct( $plugin_path = null ) {
    $this->plugin_path = $plugin_path;

    $this->init();
  }

  /**
   * Initialize all the things
   *
   * @since 0.1.0
   *
   * @return void
   */
  public function init() {}

  /**
   * Ennqueue the scripts
   *
   * @since 0.1.0
   *
   * @return void
   */
  public function enqueue_scripts( $hook ) {
    wp_enqueue_script( 'core-admin', $this->plugin_path . 'assets/js/admin.js', array( 'jquery' ), false, true );
  }

  /**
   * Customizer Settings
   * Global customizer settings stored in `wp_options`
   *
   * @uses Theme_Customization_API
   * @link https://codex.wordpress.org/Theme_Customization_API
   *
   * @param  object $wp_customize
   * @return void
   */
  public function customize_register( $wp_customize ) {}

}
