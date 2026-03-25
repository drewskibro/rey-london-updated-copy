<?php
/**
 * ACF Options Pages
 *
 * @package Rey_London
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( function_exists( 'acf_add_options_page' ) ) {
    acf_add_options_page( array(
        'page_title' => 'Pharmacy Settings',
        'menu_title' => 'Pharmacy Settings',
        'menu_slug'  => 'pharmacy-settings',
        'capability' => 'edit_posts',
        'redirect'   => false,
        'icon_url'   => 'dashicons-heart',
        'position'   => 2,
    ) );
}
