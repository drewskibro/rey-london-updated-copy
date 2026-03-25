<?php
/**
 * ACF Options Pages
 *
 * Registers the Pharmacy Settings admin page and sub-pages.
 *
 * @package Rey_London
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register ACF options pages on acf/init.
 */
function rl_register_options_pages() {
    if ( ! function_exists( 'acf_add_options_page' ) ) {
        return;
    }

    acf_add_options_page( array(
        'page_title' => 'Pharmacy Settings',
        'menu_title' => 'Pharmacy Settings',
        'menu_slug'  => 'pharmacy-settings',
        'capability' => 'edit_posts',
        'redirect'   => true,
        'icon_url'   => 'dashicons-heart',
        'position'   => 2,
    ) );

    acf_add_options_sub_page( array(
        'page_title'  => 'Contact & Locations',
        'menu_title'  => 'Contact & Locations',
        'menu_slug'   => 'contact-locations',
        'parent_slug' => 'pharmacy-settings',
        'capability'  => 'edit_posts',
    ) );

    acf_add_options_sub_page( array(
        'page_title'  => 'Registration & Compliance',
        'menu_title'  => 'Registration & Compliance',
        'menu_slug'   => 'registration-compliance',
        'parent_slug' => 'pharmacy-settings',
        'capability'  => 'edit_posts',
    ) );

    acf_add_options_sub_page( array(
        'page_title'  => 'Social Media',
        'menu_title'  => 'Social Media',
        'menu_slug'   => 'social-media',
        'parent_slug' => 'pharmacy-settings',
        'capability'  => 'edit_posts',
    ) );

    acf_add_options_sub_page( array(
        'page_title'  => 'Branding',
        'menu_title'  => 'Branding',
        'menu_slug'   => 'branding',
        'parent_slug' => 'pharmacy-settings',
        'capability'  => 'edit_posts',
    ) );

    acf_add_options_sub_page( array(
        'page_title'  => 'Navigation',
        'menu_title'  => 'Navigation',
        'menu_slug'   => 'navigation',
        'parent_slug' => 'pharmacy-settings',
        'capability'  => 'edit_posts',
    ) );
}
add_action( 'acf/init', 'rl_register_options_pages' );
