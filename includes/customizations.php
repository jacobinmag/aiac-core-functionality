<?php
/**
 * Customization Functions
 *
 * @package    AIAC_Core
 * @subpackage AIAC_Core\Includes
 * @since      0.1.0
 * @license    GPL-2.0+
 */

/**
 * Modify Excerpt More Text
 *
 * @since      0.1.0
 *
 * @param  string $more
 * @return string $more modified
 */
function aiac_core_excerpt_more( $more ) {
  $more = '';
  return $more;
}
add_filter( 'excerpt_more', 'aiac_core_excerpt_more' );

/**
 * Modify Excerpt Length
 *
 * @param  int $length
 * @return int $length modified
 */
function aiac_core_excerpt_length( $length ) {
  if( !is_admin() ) {
    $length = 16;
  }
  return $length;
}
add_filter( 'excerpt_length', 'aiac_core_excerpt_length', 999 );

/**
 * Modify get_the_excerpt()
 *
 *
 * @param  string $text
 * @return string $text modified
 */
function aiac_core_get_the_excerpt( $text ) {
  $excerpt_length = apply_filters( 'excerpt_length', 16 );
  $excerpt_more = apply_filters( 'excerpt_more', '' );
  $text = wp_trim_words( $text, $excerpt_length, $excerpt_more );

  return $text;
}
add_filter( 'get_the_excerpt', 'aiac_core_get_the_excerpt', 999 );
