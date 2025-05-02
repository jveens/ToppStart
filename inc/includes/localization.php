<?php
/**
 * Localization strings.
 *
 * @package toppstart
 */

namespace ToppStart;

add_filter( 'air_helper_pll_register_strings', function() {
  $strings = [
    // 'Key: String' => 'String',
  ];

  /**
   * Uncomment if you need to have default toppstart accessibility strings
   * translatable via Polylang string translations.
   */
  // foreach ( get_default_localization_strings( get_bloginfo( 'language' ) ) as $key => $value ) {
  // $strings[ "Accessibility: {$key}" ] = $value;
  // }

  return apply_filters( 'topp_start_translations', $strings );
} );

function get_default_localization_strings( $language = 'en' ) {
  $strings = [
    'en'  => [
      'Add a menu'                                   => __( 'Add a menu', 'toppstart' ),
      'Open main menu'                               => __( 'Open main menu', 'toppstart' ),
      'Close main menu'                              => __( 'Close main menu', 'toppstart' ),
      'Main navigation'                              => __( 'Main navigation', 'toppstart' ),
      'Back to top'                                  => __( 'Back to top', 'toppstart' ),
      'Open child menu for'                          => __( 'Open child menu for', 'toppstart' ),
      'Close child menu for'                         => __( 'Close child menu for', 'toppstart' ),
      'Skip to content'                              => __( 'Skip to content', 'toppstart' ),
      'Skip over the carousel element'               => __( 'Skip over the carousel element', 'toppstart' ),
      'External site'                                => __( 'External site', 'toppstart' ),
      'opens in a new window'                        => __( 'opens in a new window', 'toppstart' ),
      'Page not found.'                              => __( 'Page not found.', 'toppstart' ),
      'The reason might be mistyped or expired URL.' => __( 'The reason might be mistyped or expired URL.', 'toppstart' ),
      'Search'                                       => __( 'Search', 'toppstart' ),
      'Block missing required data'                  => __( 'Block missing required data', 'toppstart' ),
      'This error is shown only for logged in users' => __( 'This error is shown only for logged in users', 'toppstart' ),
      'No results found for your search'             => __( 'No results found for your search', 'toppstart' ),
      'Edit'                                         => __( 'Edit', 'toppstart' ),
      'Previous slide'                               => __( 'Previous slide', 'toppstart' ),
      'Next slide'                                   => __( 'Next slide', 'toppstart' ),
      'Last slide'                                   => __( 'Last slide', 'toppstart' ),
    ],
  ];

  return ( array_key_exists( $language, $strings ) ) ? $strings[ $language ] : $strings['en'];
} // end get_default_localization_strings

function get_default_localization( $string ) { // phpcs:ignore Universal.NamingConventions.NoReservedKeywordParameterNames.stringFound
  // if ( function_exists( 'ask__' ) && array_key_exists( "Accessibility: {$string}", apply_filters( 'air_helper_pll_register_strings', [] ) ) ) {
  //   return ask__( "Accessibility: {$string}" );
  // }

  return esc_html( get_default_localization_translation( $string ) );
} // end get_default_localization

function get_default_localization_translation( $string ) { // phpcs:ignore Universal.NamingConventions.NoReservedKeywordParameterNames.stringFound
  $language = get_bloginfo( 'language' );
  // if ( function_exists( 'pll_the_languages' ) ) {
  //   $language = pll_current_language();
  // }

  $translations = get_default_localization_strings( $language );

  return ( array_key_exists( $string, $translations ) ) ? $translations[ $string ] : '';
} // end get_default_localization_translation
