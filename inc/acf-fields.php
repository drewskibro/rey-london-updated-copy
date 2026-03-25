<?php
/**
 * ACF Field Group Definitions
 *
 * Registers all ACF field groups for the Rey London theme.
 *
 * @package Rey_London
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

if ( ! function_exists( 'acf_add_local_field_group' ) ) {
    return;
}

// =============================================================================
// HOMEPAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_homepage',
    'title'    => 'Homepage Sections',
    'fields'   => array(

        // ── HERO SECTION ──
        array(
            'key'   => 'field_rl_hero_tab',
            'label' => 'Hero Section',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_hero_title_line1',
            'label'         => 'Hero Title Line 1',
            'name'          => 'hero_title_line1',
            'type'          => 'text',
            'default_value' => 'Healthcare that puts',
        ),
        array(
            'key'           => 'field_rl_hero_title_line2',
            'label'         => 'Hero Title Line 2 (Gradient)',
            'name'          => 'hero_title_line2',
            'type'          => 'text',
            'default_value' => 'you first',
        ),
        array(
            'key'           => 'field_rl_hero_subtitle',
            'label'         => 'Hero Subtitle',
            'name'          => 'hero_subtitle',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => 'Expert prescriptions, travel health, and weight management across South East London. Two Chislehurst locations ready to help.',
        ),
        array(
            'key'          => 'field_rl_hero_services',
            'label'        => 'Service Cards',
            'name'         => 'hero_services',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Service Card',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_hero_service_title',
                    'label' => 'Title',
                    'name'  => 'title',
                    'type'  => 'text',
                ),
                array(
                    'key'           => 'field_rl_hero_service_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_hero_service_url',
                    'label' => 'Link URL',
                    'name'  => 'url',
                    'type'  => 'url',
                ),
            ),
        ),

        // ── DESTINATIONS SECTION ──
        array(
            'key'   => 'field_rl_destinations_tab',
            'label' => 'Destinations',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_destinations_title',
            'label'         => 'Section Title',
            'name'          => 'destinations_title',
            'type'          => 'text',
            'default_value' => 'Search Vaccines by Destination',
        ),
        array(
            'key'           => 'field_rl_destinations_desc',
            'label'         => 'Description',
            'name'          => 'destinations_description',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => 'At Rey London, we provide expert travel health services across South East London. Find the vaccines you need for your next adventure.',
        ),
        array(
            'key'          => 'field_rl_destinations_stats',
            'label'        => 'Stats',
            'name'         => 'destinations_stats',
            'type'         => 'repeater',
            'layout'       => 'table',
            'button_label' => 'Add Stat',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_dest_stat_number',
                    'label' => 'Number',
                    'name'  => 'number',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_dest_stat_label',
                    'label' => 'Label',
                    'name'  => 'label',
                    'type'  => 'text',
                ),
            ),
        ),
        array(
            'key'          => 'field_rl_destinations_cards',
            'label'        => 'Destination Cards',
            'name'         => 'destinations_cards',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Destination',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_dest_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'           => 'field_rl_dest_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_dest_vaccines',
                    'label' => 'Vaccines Text',
                    'name'  => 'vaccines_text',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_dest_url',
                    'label' => 'Link URL',
                    'name'  => 'url',
                    'type'  => 'url',
                ),
            ),
        ),

        // ── LOCATIONS SECTION ──
        array(
            'key'   => 'field_rl_locations_tab',
            'label' => 'Locations',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_locations',
            'label'        => 'Locations',
            'name'         => 'locations',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Location',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_loc_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'           => 'field_rl_loc_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_loc_address',
                    'label' => 'Address',
                    'name'  => 'address',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_loc_phone',
                    'label' => 'Phone',
                    'name'  => 'phone',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_loc_hours',
                    'label' => 'Opening Hours',
                    'name'  => 'hours',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_loc_directions_url',
                    'label' => 'Directions URL',
                    'name'  => 'directions_url',
                    'type'  => 'url',
                ),
            ),
        ),

        // ── SERVICES SECTION ──
        array(
            'key'   => 'field_rl_services_tab',
            'label' => 'Services',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_services_title',
            'label'         => 'Section Title',
            'name'          => 'services_title',
            'type'          => 'text',
            'default_value' => 'Comprehensive healthcare services for you',
        ),
        array(
            'key'          => 'field_rl_services_cards',
            'label'        => 'Service Benefit Cards',
            'name'         => 'services_cards',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Service',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_svc_title',
                    'label' => 'Title',
                    'name'  => 'title',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_svc_description',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 3,
                ),
                array(
                    'key'           => 'field_rl_svc_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_svc_url',
                    'label' => 'Link URL',
                    'name'  => 'url',
                    'type'  => 'url',
                ),
            ),
        ),

        // ── TESTIMONIALS SECTION ──
        array(
            'key'   => 'field_rl_testimonials_tab',
            'label' => 'Testimonials',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_testimonials_title',
            'label'         => 'Section Title',
            'name'          => 'testimonials_title',
            'type'          => 'text',
            'default_value' => 'What Our Patients Say',
        ),
        array(
            'key'          => 'field_rl_testimonials',
            'label'        => 'Testimonials',
            'name'         => 'testimonials',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Testimonial',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_test_quote',
                    'label' => 'Quote',
                    'name'  => 'quote',
                    'type'  => 'textarea',
                    'rows'  => 4,
                ),
                array(
                    'key'   => 'field_rl_test_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_test_initials',
                    'label' => 'Initials',
                    'name'  => 'initials',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_test_location',
                    'label' => 'Branch/Location',
                    'name'  => 'location',
                    'type'  => 'text',
                ),
                array(
                    'key'           => 'field_rl_test_stars',
                    'label'         => 'Star Rating (1-5)',
                    'name'          => 'stars',
                    'type'          => 'number',
                    'default_value' => 5,
                    'min'           => 1,
                    'max'           => 5,
                ),
            ),
        ),
        array(
            'key'          => 'field_rl_trust_stats',
            'label'        => 'Trust Stats',
            'name'         => 'trust_stats',
            'type'         => 'repeater',
            'layout'       => 'table',
            'button_label' => 'Add Trust Stat',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_trust_number',
                    'label' => 'Number',
                    'name'  => 'number',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_trust_label',
                    'label' => 'Label',
                    'name'  => 'label',
                    'type'  => 'text',
                ),
            ),
        ),

        // ── HOW IT WORKS SECTION ──
        array(
            'key'   => 'field_rl_hiw_tab',
            'label' => 'How It Works',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_hiw_title',
            'label'         => 'Section Title',
            'name'          => 'hiw_title',
            'type'          => 'text',
            'default_value' => 'How it works',
        ),
        array(
            'key'           => 'field_rl_hiw_subtitle',
            'label'         => 'Subtitle',
            'name'          => 'hiw_subtitle',
            'type'          => 'textarea',
            'rows'          => 2,
            'default_value' => 'Getting started with Rey London is simple',
        ),
        array(
            'key'          => 'field_rl_hiw_steps',
            'label'        => 'Steps',
            'name'         => 'hiw_steps',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Step',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_hiw_step_title',
                    'label' => 'Title',
                    'name'  => 'title',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_hiw_step_desc',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 3,
                ),
            ),
        ),

        // ── TEAM SECTION ──
        array(
            'key'   => 'field_rl_team_tab',
            'label' => 'Team',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_pharmacist_name',
            'label'         => 'Lead Pharmacist Name',
            'name'          => 'pharmacist_name',
            'type'          => 'text',
            'default_value' => 'Sumeet Banker',
        ),
        array(
            'key'           => 'field_rl_pharmacist_title',
            'label'         => 'Pharmacist Title',
            'name'          => 'pharmacist_title',
            'type'          => 'text',
            'default_value' => 'Superintendent Pharmacist & Owner',
        ),
        array(
            'key'           => 'field_rl_pharmacist_bio',
            'label'         => 'Pharmacist Bio',
            'name'          => 'pharmacist_bio',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => 'With over 15 years of experience, Sumeet leads our team in providing exceptional pharmaceutical care to the South East London community.',
        ),
        array(
            'key'           => 'field_rl_pharmacist_image',
            'label'         => 'Pharmacist Photo',
            'name'          => 'pharmacist_image',
            'type'          => 'image',
            'return_format' => 'url',
        ),
        array(
            'key'          => 'field_rl_team_stats',
            'label'        => 'Team Stats',
            'name'         => 'team_stats',
            'type'         => 'repeater',
            'layout'       => 'table',
            'button_label' => 'Add Stat',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_team_stat_number',
                    'label' => 'Number',
                    'name'  => 'number',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_team_stat_label',
                    'label' => 'Label',
                    'name'  => 'label',
                    'type'  => 'text',
                ),
            ),
        ),

        // ── PRODUCTS SECTION ──
        array(
            'key'   => 'field_rl_products_tab',
            'label' => 'Products',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_products_title',
            'label'         => 'Section Title',
            'name'          => 'products_title',
            'type'          => 'text',
            'default_value' => 'Featured Products & Treatments',
        ),
        array(
            'key'          => 'field_rl_products',
            'label'        => 'Products',
            'name'         => 'products',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Product',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_prod_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_prod_description',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 2,
                ),
                array(
                    'key'           => 'field_rl_prod_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_prod_price',
                    'label' => 'Price',
                    'name'  => 'price',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_prod_badge',
                    'label' => 'Badge Text',
                    'name'  => 'badge',
                    'type'  => 'text',
                    'instructions' => 'e.g. "Most Popular", "New"',
                ),
                array(
                    'key'   => 'field_rl_prod_url',
                    'label' => 'Link URL',
                    'name'  => 'url',
                    'type'  => 'url',
                ),
            ),
        ),

        // ── FOOTER CTA SECTION ──
        array(
            'key'   => 'field_rl_cta_tab',
            'label' => 'Footer CTA',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_cta_title',
            'label'         => 'CTA Title',
            'name'          => 'cta_title',
            'type'          => 'text',
            'default_value' => 'Ready to take control of your health?',
        ),
        array(
            'key'           => 'field_rl_cta_subtitle',
            'label'         => 'CTA Subtitle',
            'name'          => 'cta_subtitle',
            'type'          => 'textarea',
            'rows'          => 2,
            'default_value' => 'Book a consultation with our expert pharmacists today',
        ),
        array(
            'key'           => 'field_rl_cta_button_text',
            'label'         => 'Button Text',
            'name'          => 'cta_button_text',
            'type'          => 'text',
            'default_value' => 'Book Consultation',
        ),
        array(
            'key'   => 'field_rl_cta_button_url',
            'label' => 'Button URL',
            'name'  => 'cta_button_url',
            'type'  => 'url',
        ),
    ),
    'location'  => array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-home.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position'   => 'normal',
    'style'      => 'default',
    'label_placement' => 'top',
) );
