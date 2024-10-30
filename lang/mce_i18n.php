<?php
# somewhere in my_plugin.php
# remember to load the plugin textdomain

add_filter( 'mce_external_languages', 'my_mce_localisation' );

/**
 * my_mce_localisation
 *
 * @see wp-admin/includes/post.php line 1474
 * @param array $mce_external_languages
 * @return array $mce_external_languages
 */
 function my_mce_localisation( $mce_external_languages ) {
  $mce_external_languages[ 'myPlugin' ] = plugin_dir_path( __FILE__ ) . 'i18n/mce_locale.php';
  return $mce_external_languages;
}