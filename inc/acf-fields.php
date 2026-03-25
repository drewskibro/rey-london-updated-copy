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

// =============================================================================
// WEIGHT LOSS PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_weight_loss',
    'title'    => 'Weight Loss Page',
    'fields'   => array(

        // ── HERO ──
        array(
            'key'   => 'field_rl_wl_hero_tab',
            'label' => 'Hero Section',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_wl_hero_badge',
            'label'         => 'Hero Badge Text',
            'name'          => 'wl_hero_badge',
            'type'          => 'text',
            'default_value' => 'Medical Weight Loss · London',
        ),
        array(
            'key'           => 'field_rl_wl_hero_title',
            'label'         => 'Hero Title',
            'name'          => 'wl_hero_title',
            'type'          => 'textarea',
            'rows'          => 3,
            'default_value' => 'Lose 10–20% of your body weight in 12 months — with prescription support at your local London pharmacy',
        ),
        array(
            'key'           => 'field_rl_wl_hero_subtitle',
            'label'         => 'Hero Subtitle',
            'name'          => 'wl_hero_subtitle',
            'type'          => 'textarea',
            'rows'          => 4,
            'default_value' => 'Mounjaro and Wegovy prescriptions from our South East London pharmacists. No GP referral. No long waits. Expert face-to-face care at Chislehurst and Pond End — from people who know your name.',
        ),
        array(
            'key'           => 'field_rl_wl_hero_image_main',
            'label'         => 'Hero Main Image',
            'name'          => 'wl_hero_image_main',
            'type'          => 'image',
            'return_format' => 'url',
        ),
        array(
            'key'           => 'field_rl_wl_hero_image_secondary',
            'label'         => 'Hero Secondary Image',
            'name'          => 'wl_hero_image_secondary',
            'type'          => 'image',
            'return_format' => 'url',
        ),

        // ── TREATMENTS / PRODUCTS ──
        array(
            'key'   => 'field_rl_wl_treatments_tab',
            'label' => 'Treatments',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_wl_treatments',
            'label'        => 'Treatment Cards',
            'name'         => 'wl_treatments',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Treatment',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_wl_treat_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_treat_description',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 2,
                ),
                array(
                    'key'           => 'field_rl_wl_treat_image',
                    'label'         => 'Image',
                    'name'          => 'image',
                    'type'          => 'image',
                    'return_format' => 'url',
                ),
                array(
                    'key'   => 'field_rl_wl_treat_price',
                    'label' => 'Price',
                    'name'  => 'price',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_treat_badge',
                    'label' => 'Badge',
                    'name'  => 'badge',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_treat_url',
                    'label' => 'Link URL',
                    'name'  => 'url',
                    'type'  => 'url',
                ),
            ),
        ),

        // ── TESTIMONIALS ──
        array(
            'key'   => 'field_rl_wl_testimonials_tab',
            'label' => 'Testimonials',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_wl_testimonials',
            'label'        => 'Testimonials',
            'name'         => 'wl_testimonials',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Testimonial',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_wl_test_quote',
                    'label' => 'Quote',
                    'name'  => 'quote',
                    'type'  => 'textarea',
                    'rows'  => 4,
                ),
                array(
                    'key'   => 'field_rl_wl_test_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_test_initials',
                    'label' => 'Initials',
                    'name'  => 'initials',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_test_detail',
                    'label' => 'Detail (e.g. "Lost 18kg in 4 months")',
                    'name'  => 'detail',
                    'type'  => 'text',
                ),
                array(
                    'key'           => 'field_rl_wl_test_stars',
                    'label'         => 'Star Rating',
                    'name'          => 'stars',
                    'type'          => 'number',
                    'default_value' => 5,
                    'min'           => 1,
                    'max'           => 5,
                ),
            ),
        ),

        // ── FAQ ──
        array(
            'key'   => 'field_rl_wl_faq_tab',
            'label' => 'FAQs',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_wl_faqs',
            'label'        => 'FAQs',
            'name'         => 'wl_faqs',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add FAQ',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_wl_faq_question',
                    'label' => 'Question',
                    'name'  => 'question',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_wl_faq_answer',
                    'label' => 'Answer',
                    'name'  => 'answer',
                    'type'  => 'wysiwyg',
                    'toolbar' => 'basic',
                    'media_upload' => 0,
                ),
            ),
        ),

        // ── CTA ──
        array(
            'key'   => 'field_rl_wl_cta_tab',
            'label' => 'Footer CTA',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_wl_cta_title',
            'label'         => 'CTA Title',
            'name'          => 'wl_cta_title',
            'type'          => 'text',
            'default_value' => 'Ready to start your weight loss journey?',
        ),
        array(
            'key'           => 'field_rl_wl_cta_subtitle',
            'label'         => 'CTA Subtitle',
            'name'          => 'wl_cta_subtitle',
            'type'          => 'textarea',
            'rows'          => 2,
        ),
        array(
            'key'           => 'field_rl_wl_cta_button_text',
            'label'         => 'CTA Button Text',
            'name'          => 'wl_cta_button_text',
            'type'          => 'text',
            'default_value' => 'Book Free Consultation',
        ),
    ),
    'location'  => array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-weight-loss.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position'   => 'normal',
    'style'      => 'default',
    'label_placement' => 'top',
) );

// =============================================================================
// HAIR LOSS PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_hair_loss',
    'title'    => 'Hair Loss Page',
    'fields'   => array(

        // ── HERO ──
        array(
            'key'   => 'field_rl_hl_hero_tab',
            'label' => 'Hero Section',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_hl_hero_title',
            'label'         => 'Hero Title',
            'name'          => 'hl_hero_title',
            'type'          => 'text',
            'default_value' => 'Hair Loss Treatment in South East London',
        ),
        array(
            'key'           => 'field_rl_hl_hero_subtitle',
            'label'         => 'Hero Subtitle',
            'name'          => 'hl_hero_subtitle',
            'type'          => 'textarea',
            'rows'          => 4,
            'default_value' => 'Regain your confidence with clinically proven treatments. Private consultations, prescription finasteride, minoxidil, and expert pharmacist support to stop hair loss and stimulate regrowth — at both Chislehurst locations.',
        ),
        array(
            'key'           => 'field_rl_hl_hero_image',
            'label'         => 'Hero Image',
            'name'          => 'hl_hero_image',
            'type'          => 'image',
            'return_format' => 'url',
        ),

        // ── TREATMENTS ──
        array(
            'key'   => 'field_rl_hl_treatments_tab',
            'label' => 'Treatments',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_hl_treatments',
            'label'        => 'Treatment Options',
            'name'         => 'hl_treatments',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Treatment',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_hl_treat_name',
                    'label' => 'Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_hl_treat_type',
                    'label' => 'Type (e.g. Oral Tablet, Topical)',
                    'name'  => 'type',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_hl_treat_description',
                    'label' => 'Description',
                    'name'  => 'description',
                    'type'  => 'textarea',
                    'rows'  => 3,
                ),
                array(
                    'key'   => 'field_rl_hl_treat_price',
                    'label' => 'Price',
                    'name'  => 'price',
                    'type'  => 'text',
                ),
                array(
                    'key'          => 'field_rl_hl_treat_features',
                    'label'        => 'Key Features',
                    'name'         => 'features',
                    'type'         => 'repeater',
                    'layout'       => 'table',
                    'button_label' => 'Add Feature',
                    'sub_fields'   => array(
                        array(
                            'key'   => 'field_rl_hl_treat_feature_text',
                            'label' => 'Feature',
                            'name'  => 'text',
                            'type'  => 'text',
                        ),
                    ),
                ),
            ),
        ),

        // ── PRICING ──
        array(
            'key'   => 'field_rl_hl_pricing_tab',
            'label' => 'Pricing',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_hl_pricing',
            'label'        => 'Pricing Cards',
            'name'         => 'hl_pricing',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add Pricing Card',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_hl_price_name',
                    'label' => 'Treatment Name',
                    'name'  => 'name',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_hl_price_price',
                    'label' => 'Price',
                    'name'  => 'price',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_hl_price_period',
                    'label' => 'Period (e.g. per month)',
                    'name'  => 'period',
                    'type'  => 'text',
                ),
                array(
                    'key'          => 'field_rl_hl_price_includes',
                    'label'        => 'Includes',
                    'name'         => 'includes',
                    'type'         => 'repeater',
                    'layout'       => 'table',
                    'button_label' => 'Add Item',
                    'sub_fields'   => array(
                        array(
                            'key'   => 'field_rl_hl_price_include_text',
                            'label' => 'Item',
                            'name'  => 'text',
                            'type'  => 'text',
                        ),
                    ),
                ),
            ),
        ),

        // ── FAQ ──
        array(
            'key'   => 'field_rl_hl_faq_tab',
            'label' => 'FAQs',
            'type'  => 'tab',
        ),
        array(
            'key'          => 'field_rl_hl_faqs',
            'label'        => 'FAQs',
            'name'         => 'hl_faqs',
            'type'         => 'repeater',
            'layout'       => 'block',
            'button_label' => 'Add FAQ',
            'sub_fields'   => array(
                array(
                    'key'   => 'field_rl_hl_faq_question',
                    'label' => 'Question',
                    'name'  => 'question',
                    'type'  => 'text',
                ),
                array(
                    'key'   => 'field_rl_hl_faq_answer',
                    'label' => 'Answer',
                    'name'  => 'answer',
                    'type'  => 'wysiwyg',
                    'toolbar' => 'basic',
                    'media_upload' => 0,
                ),
            ),
        ),

        // ── CTA ──
        array(
            'key'   => 'field_rl_hl_cta_tab',
            'label' => 'Footer CTA',
            'type'  => 'tab',
        ),
        array(
            'key'           => 'field_rl_hl_cta_title',
            'label'         => 'CTA Title',
            'name'          => 'hl_cta_title',
            'type'          => 'text',
            'default_value' => 'Ready to take the first step?',
        ),
        array(
            'key'           => 'field_rl_hl_cta_subtitle',
            'label'         => 'CTA Subtitle',
            'name'          => 'hl_cta_subtitle',
            'type'          => 'textarea',
            'rows'          => 2,
        ),
    ),
    'location'  => array(
        array(
            array(
                'param'    => 'page_template',
                'operator' => '==',
                'value'    => 'page-templates/page-hair-loss.php',
            ),
        ),
    ),
    'menu_order' => 0,
    'position'   => 'normal',
    'style'      => 'default',
    'label_placement' => 'top',
) );

// =============================================================================
// TRAVEL HEALTH PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_travel_health',
    'title'    => 'Travel Health Page',
    'fields'   => array(
        array( 'key' => 'field_rl_th_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_th_hero_title', 'label' => 'Hero Title', 'name' => 'th_hero_title', 'type' => 'text', 'default_value' => 'South East London\'s Trusted Travel Health Clinic' ),
        array( 'key' => 'field_rl_th_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'th_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'From yellow fever certification to malaria prevention – protect yourself with expert travel vaccinations before your next adventure.' ),
        array( 'key' => 'field_rl_th_hero_image', 'label' => 'Hero Image', 'name' => 'th_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_th_vaccines_tab', 'label' => 'Vaccinations', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_th_vaccines', 'label' => 'Vaccination Cards', 'name' => 'th_vaccines', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Vaccination',
            'sub_fields' => array(
                array( 'key' => 'field_rl_th_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_vax_description', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_th_vax_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_vax_doses', 'label' => 'Doses Info', 'name' => 'doses', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_vax_url', 'label' => 'Link URL', 'name' => 'url', 'type' => 'url' ),
            ),
        ),
        array( 'key' => 'field_rl_th_destinations_tab', 'label' => 'Destinations', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_th_destinations', 'label' => 'Destination Cards', 'name' => 'th_destinations', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Destination',
            'sub_fields' => array(
                array( 'key' => 'field_rl_th_dest_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_dest_image', 'label' => 'Image', 'name' => 'image', 'type' => 'image', 'return_format' => 'url' ),
                array( 'key' => 'field_rl_th_dest_vaccines', 'label' => 'Vaccines Required', 'name' => 'vaccines', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_dest_url', 'label' => 'Link URL', 'name' => 'url', 'type' => 'url' ),
            ),
        ),
        array( 'key' => 'field_rl_th_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_th_faqs', 'label' => 'FAQs', 'name' => 'th_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_th_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_th_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-travel-health.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// THAILAND PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_thailand',
    'title'    => 'Thailand Travel Health Page',
    'fields'   => array(
        array( 'key' => 'field_rl_thai_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_thai_hero_title', 'label' => 'Hero Title', 'name' => 'thai_hero_title', 'type' => 'text', 'default_value' => 'Thailand Travel Vaccinations in South East London' ),
        array( 'key' => 'field_rl_thai_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'thai_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Expert travel health advice and essential vaccines for your Thailand trip. Same-day appointments available at our Chislehurst and Pond End clinics.' ),
        array( 'key' => 'field_rl_thai_vaccines_tab', 'label' => 'Vaccines', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_thai_vaccines', 'label' => 'Recommended Vaccines', 'name' => 'thai_vaccines', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Vaccine',
            'sub_fields' => array(
                array( 'key' => 'field_rl_thai_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_thai_vax_rec', 'label' => 'Recommendation', 'name' => 'recommendation', 'type' => 'select', 'choices' => array( 'required' => 'Required', 'recommended' => 'Recommended', 'consider' => 'Consider' ) ),
                array( 'key' => 'field_rl_thai_vax_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_thai_vax_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_thai_vax_doses', 'label' => 'Doses/Schedule', 'name' => 'doses', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_thai_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_thai_faqs', 'label' => 'FAQs', 'name' => 'thai_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_thai_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_thai_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-thailand.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// HEPATITIS VACCINE PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_hepatitis',
    'title'    => 'Hepatitis Vaccine Page',
    'fields'   => array(
        array( 'key' => 'field_rl_hep_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hep_hero_title', 'label' => 'Hero Title', 'name' => 'hep_hero_title', 'type' => 'text', 'default_value' => 'Hepatitis A & B Vaccines London: Complete Liver Protection in Chislehurst' ),
        array( 'key' => 'field_rl_hep_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'hep_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'GPhC-registered pharmacy offering hepatitis A and hepatitis B vaccinations for travel, work, and lifelong health protection.' ),
        array( 'key' => 'field_rl_hep_hero_image', 'label' => 'Hero Image', 'name' => 'hep_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_hep_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_hep_pricing', 'label' => 'Pricing Cards', 'name' => 'hep_pricing', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Pricing Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hep_price_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_hep_price_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_hep_price_doses', 'label' => 'Doses', 'name' => 'doses', 'type' => 'text' ),
                array( 'key' => 'field_rl_hep_price_protection', 'label' => 'Protection Duration', 'name' => 'protection', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_hep_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_hep_faqs', 'label' => 'FAQs', 'name' => 'hep_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hep_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_hep_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-hepatitis.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// HPV VACCINE PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_hpv',
    'title'    => 'HPV Vaccine Page',
    'fields'   => array(
        array( 'key' => 'field_rl_hpv_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_hero_title', 'label' => 'Hero Title', 'name' => 'hpv_hero_title', 'type' => 'text', 'default_value' => 'HPV Vaccine London: Protect Against Cancer-Causing HPV' ),
        array( 'key' => 'field_rl_hpv_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'hpv_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Private Gardasil 9 vaccination for men and women aged 9–45+. Same-day appointments available at our South East London clinics. No GP referral needed.' ),
        array( 'key' => 'field_rl_hpv_hero_image', 'label' => 'Hero Image', 'name' => 'hpv_hero_image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Upload to replace the default shield illustration' ),
        array( 'key' => 'field_rl_hpv_hero_eyebrow', 'label' => 'Hero Eyebrow Text', 'name' => 'hpv_hero_eyebrow', 'type' => 'text', 'default_value' => 'Cancer Prevention  |  HPV Vaccination' ),
        array(
            'key' => 'field_rl_hpv_hero_trust_badges', 'label' => 'Hero Trust Badges', 'name' => 'hpv_hero_trust_badges', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Badge',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_trust_badge_text', 'label' => 'Badge Text', 'name' => 'text', 'type' => 'text' ),
            ),
        ),

        // ── KEY FACTS / AT A GLANCE ──
        array( 'key' => 'field_rl_hpv_keyfacts_tab', 'label' => 'Key Facts', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_keyfacts_pill', 'label' => 'Pill Label', 'name' => 'hpv_keyfacts_pill', 'type' => 'text', 'default_value' => 'At a Glance' ),
        array( 'key' => 'field_rl_hpv_keyfacts_title', 'label' => 'Section Title', 'name' => 'hpv_keyfacts_title', 'type' => 'text', 'default_value' => 'Key Facts About the HPV Vaccine' ),
        array(
            'key' => 'field_rl_hpv_keyfacts_cards', 'label' => 'Stat Cards', 'name' => 'hpv_keyfacts_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Stat Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_kf_stat', 'label' => 'Stat Number/Text', 'name' => 'stat', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_kf_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
            ),
        ),

        // ── UNDERSTANDING HPV ──
        array( 'key' => 'field_rl_hpv_understanding_tab', 'label' => 'Understanding HPV', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_understanding_image', 'label' => 'Section Image', 'name' => 'hpv_understanding_image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Upload to replace the default SVG illustration' ),
        array( 'key' => 'field_rl_hpv_understanding_eyebrow', 'label' => 'Eyebrow', 'name' => 'hpv_understanding_eyebrow', 'type' => 'text', 'default_value' => 'The Problem' ),
        array( 'key' => 'field_rl_hpv_understanding_heading', 'label' => 'Heading', 'name' => 'hpv_understanding_heading', 'type' => 'text', 'default_value' => 'What is HPV, and Why Does It Matter?' ),
        array( 'key' => 'field_rl_hpv_understanding_body', 'label' => 'Body Content', 'name' => 'hpv_understanding_body', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'default_value' => '<p>Human papillomavirus (HPV) is one of the most common sexually transmitted infections globally. <strong>Over 70% of sexually active people</strong> will contract HPV at some point in their lives.</p><p>Most HPV infections clear naturally without symptoms. But for some people, persistent HPV infection can lead to serious health consequences years or even decades later.</p>' ),
        array( 'key' => 'field_rl_hpv_understanding_callout', 'label' => 'Callout Text', 'name' => 'hpv_understanding_callout', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'HPV causes 99% of cervical cancers and contributes to thousands of other cancers each year in the UK.' ),
        array( 'key' => 'field_rl_hpv_understanding_body2', 'label' => 'Body Content (below callout)', 'name' => 'hpv_understanding_body2', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'default_value' => '<p>HPV spreads through skin-to-skin contact, including sexual activity. Because most people with HPV show no symptoms, it transmits easily without anyone realising.</p><p><strong>The good news:</strong> vaccination provides strong protection against the HPV types most likely to cause cancer and genital warts.</p>' ),

        // ── GARDASIL 9 / THE SOLUTION ──
        array( 'key' => 'field_rl_hpv_gardasil_tab', 'label' => 'Gardasil 9', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_gardasil_image', 'label' => 'Section Image', 'name' => 'hpv_gardasil_image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Upload to replace the default SVG illustration' ),
        array( 'key' => 'field_rl_hpv_gardasil_eyebrow', 'label' => 'Eyebrow', 'name' => 'hpv_gardasil_eyebrow', 'type' => 'text', 'default_value' => 'The Solution' ),
        array( 'key' => 'field_rl_hpv_gardasil_heading', 'label' => 'Heading', 'name' => 'hpv_gardasil_heading', 'type' => 'text', 'default_value' => 'Gardasil 9: The Most Comprehensive HPV Protection Available' ),
        array( 'key' => 'field_rl_hpv_gardasil_body', 'label' => 'Body Content', 'name' => 'hpv_gardasil_body', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'default_value' => '<p>Gardasil 9 is the HPV vaccine used by REY London Pharmacy. It\'s the most advanced HPV vaccine available, protecting against nine HPV types:</p><p><strong>High-Risk Types (Cancer-Causing):</strong> HPV 16, 18, 31, 33, 45, 52, and 58</p><p><strong>Low-Risk Types (Genital Warts):</strong> HPV 6 and 11</p><p>Together, these nine types are responsible for:</p>' ),
        array(
            'key' => 'field_rl_hpv_gardasil_stats', 'label' => 'Protection Stats List', 'name' => 'hpv_gardasil_stats', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Stat',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_gard_stat_text', 'label' => 'Stat Text', 'name' => 'text', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_gardasil_highlight', 'label' => 'Highlight Box Text', 'name' => 'hpv_gardasil_highlight', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'default_value' => 'Clinical trials show Gardasil 9 is nearly <strong>100% effective</strong> at preventing infections and pre-cancers caused by the HPV types it targets when given before exposure.' ),

        // ── WHO SHOULD GET VACCINATED ──
        array( 'key' => 'field_rl_hpv_who_tab', 'label' => 'Who Should Get Vaccinated', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_who_title', 'label' => 'Section Title', 'name' => 'hpv_who_title', 'type' => 'text', 'default_value' => 'Who Should Get the HPV Vaccine in London?' ),
        array( 'key' => 'field_rl_hpv_who_subtitle', 'label' => 'Section Subtitle', 'name' => 'hpv_who_subtitle', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'The HPV vaccine provides the most benefit when given before exposure. However, even if you\'re sexually active, you can still benefit from vaccination.' ),
        array(
            'key' => 'field_rl_hpv_who_cards', 'label' => 'Eligibility Cards', 'name' => 'hpv_who_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_who_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_who_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
                array(
                    'key' => 'field_rl_hpv_who_card_bullets', 'label' => 'Bullet Points', 'name' => 'bullets', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Bullet',
                    'sub_fields' => array(
                        array( 'key' => 'field_rl_hpv_who_bullet_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ),
                    ),
                ),
                array( 'key' => 'field_rl_hpv_who_card_cta', 'label' => 'CTA Text', 'name' => 'cta_text', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_who_card_cta_url', 'label' => 'CTA URL', 'name' => 'cta_url', 'type' => 'url' ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_who_info_box', 'label' => 'Info Box Text', 'name' => 'hpv_who_info_box', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Men who have sex with men (MSM) aged 45 and under may be eligible for free HPV vaccination through the NHS at sexual health clinics. Contact your local clinic for information.' ),

        // ── DOSING SCHEDULE ──
        array( 'key' => 'field_rl_hpv_dosing_tab', 'label' => 'Dosing Schedule', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_dosing_title', 'label' => 'Section Title', 'name' => 'hpv_dosing_title', 'type' => 'text', 'default_value' => 'How Many Doses Do You Need?' ),
        array( 'key' => 'field_rl_hpv_dosing_subtitle', 'label' => 'Section Subtitle', 'name' => 'hpv_dosing_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'The number of doses depends on your age when you receive your first vaccination and your immune system status.' ),
        array(
            'key' => 'field_rl_hpv_dosing_cards', 'label' => 'Dose Cards', 'name' => 'hpv_dosing_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Dose Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_dose_number', 'label' => 'Dose Number', 'name' => 'dose_number', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_dose_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_dose_who', 'label' => 'Who (Age Range)', 'name' => 'who', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_dose_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_hpv_dose_note', 'label' => 'Timing Note', 'name' => 'note', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_dose_recommended', 'label' => 'Recommended?', 'name' => 'recommended', 'type' => 'true_false', 'default_value' => 0 ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_dosing_info_box', 'label' => 'Info Box Text', 'name' => 'hpv_dosing_info_box', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Your consultation with our pharmacist will determine the right schedule for you based on your age and medical history. We\'ll book all necessary appointments to ensure you complete your course.' ),

        // ── PROTECTION SECTION ──
        array( 'key' => 'field_rl_hpv_protection_tab', 'label' => 'Protection', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_protection_title', 'label' => 'Section Title', 'name' => 'hpv_protection_title', 'type' => 'text', 'default_value' => 'Cancer Prevention: What Gardasil 9 Protects Against' ),
        array( 'key' => 'field_rl_hpv_protection_subtitle', 'label' => 'Section Subtitle', 'name' => 'hpv_protection_subtitle', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'HPV vaccination is one of the most effective cancer prevention tools available. Here\'s what protection against nine HPV types means for your long-term health.' ),
        array(
            'key' => 'field_rl_hpv_protection_cards', 'label' => 'Protection Cards', 'name' => 'hpv_protection_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Protection Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_prot_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_prot_stat', 'label' => 'Stat Line', 'name' => 'stat', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_prot_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_protection_warning', 'label' => 'Warning Box Text', 'name' => 'hpv_protection_warning', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'default_value' => '<strong>Important:</strong> The HPV vaccine does not replace cervical screening. Women should continue regular cervical screening (smear tests) as recommended, regardless of vaccination status.' ),

        // ── HOW IT WORKS ──
        array( 'key' => 'field_rl_hpv_hiw_tab', 'label' => 'How It Works', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_hiw_title', 'label' => 'Section Title', 'name' => 'hpv_hiw_title', 'type' => 'text', 'default_value' => 'How the HPV Vaccine Works' ),
        array( 'key' => 'field_rl_hpv_hiw_image', 'label' => 'Photo', 'name' => 'hpv_hiw_image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Photo of pharmacist administering vaccine' ),
        array( 'key' => 'field_rl_hpv_hiw_badge_text', 'label' => 'Photo Badge Text', 'name' => 'hpv_hiw_badge_text', 'type' => 'text', 'default_value' => 'GPhC-Registered Pharmacists' ),
        array( 'key' => 'field_rl_hpv_hiw_eyebrow', 'label' => 'Mechanism Eyebrow', 'name' => 'hpv_hiw_eyebrow', 'type' => 'text', 'default_value' => 'Vaccine Mechanism' ),
        array( 'key' => 'field_rl_hpv_hiw_body', 'label' => 'Mechanism Body', 'name' => 'hpv_hiw_body', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0, 'default_value' => '<p>Gardasil 9 is a recombinant vaccine made from virus-like particles (VLPs) that mimic the outer shell of HPV.</p><p><strong>Important: The vaccine does NOT contain live virus or viral DNA. It cannot cause HPV infection.</strong></p><p>When you receive the vaccine, your immune system recognises these particles as foreign and creates antibodies. If you\'re later exposed to real HPV, your body already has the antibodies ready to neutralise the virus before it can establish infection.</p>' ),
        array( 'key' => 'field_rl_hpv_hiw_callout', 'label' => 'Callout Text', 'name' => 'hpv_hiw_callout', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Nearly 100% effective at preventing persistent infection and pre-cancers when given before HPV exposure.' ),
        array( 'key' => 'field_rl_hpv_hiw_steps_eyebrow', 'label' => 'Steps Eyebrow', 'name' => 'hpv_hiw_steps_eyebrow', 'type' => 'text', 'default_value' => 'Your Appointment' ),
        array(
            'key' => 'field_rl_hpv_hiw_steps', 'label' => 'Appointment Steps', 'name' => 'hpv_hiw_steps', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Step',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_hiw_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_hiw_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_hiw_total_time', 'label' => 'Total Time Text', 'name' => 'hpv_hiw_total_time', 'type' => 'text', 'default_value' => 'Total time: approximately 20–30 minutes' ),

        // ── SIDE EFFECTS / SAFETY ──
        array( 'key' => 'field_rl_hpv_safety_tab', 'label' => 'Side Effects / Safety', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_safety_banner_image', 'label' => 'Safety Banner Image', 'name' => 'hpv_safety_banner_image', 'type' => 'image', 'return_format' => 'url', 'instructions' => 'Wide banner photo for safety section' ),
        array( 'key' => 'field_rl_hpv_safety_banner_title', 'label' => 'Banner Title', 'name' => 'hpv_safety_banner_title', 'type' => 'text', 'default_value' => 'Trusted Globally Since 2014' ),
        array( 'key' => 'field_rl_hpv_safety_banner_text', 'label' => 'Banner Subtitle', 'name' => 'hpv_safety_banner_text', 'type' => 'text', 'default_value' => 'Used safely in 300+ million doses worldwide' ),
        array( 'key' => 'field_rl_hpv_safety_title', 'label' => 'Section Title', 'name' => 'hpv_safety_title', 'type' => 'text', 'default_value' => 'Side Effects and Safety Information' ),
        array( 'key' => 'field_rl_hpv_safety_subtitle', 'label' => 'Section Subtitle', 'name' => 'hpv_safety_subtitle', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Gardasil 9 has been extensively studied in clinical trials involving over 15,000 participants and has been used safely in millions of people worldwide since 2014.' ),
        array( 'key' => 'field_rl_hpv_safety_common_title', 'label' => 'Common Side Effects Title', 'name' => 'hpv_safety_common_title', 'type' => 'text', 'default_value' => 'Common Side Effects (Usually Mild & Temporary)' ),
        array(
            'key' => 'field_rl_hpv_safety_common_list', 'label' => 'Common Side Effects', 'name' => 'hpv_safety_common_list', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Side Effect',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_safety_common_item', 'label' => 'Side Effect', 'name' => 'text', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_safety_common_note', 'label' => 'Common Side Effects Note', 'name' => 'hpv_safety_common_note', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'These side effects typically resolve within 1–2 days and can be managed with over-the-counter pain relief if needed.' ),
        array( 'key' => 'field_rl_hpv_safety_serious_title', 'label' => 'Serious Side Effects Title', 'name' => 'hpv_safety_serious_title', 'type' => 'text', 'default_value' => 'Serious Side Effects (Very Rare)' ),
        array( 'key' => 'field_rl_hpv_safety_serious_text', 'label' => 'Serious Side Effects Text', 'name' => 'hpv_safety_serious_text', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Serious allergic reactions are extremely rare (less than 1 in 1,000,000 doses) but possible with any vaccine. This is why we observe all patients for 15 minutes after vaccination. Our pharmacists are trained to recognise and treat allergic reactions immediately.' ),
        array( 'key' => 'field_rl_hpv_safety_contra_title', 'label' => 'Contraindications Title', 'name' => 'hpv_safety_contra_title', 'type' => 'text', 'default_value' => 'Who Should Not Get the Vaccine' ),
        array(
            'key' => 'field_rl_hpv_safety_contra_list', 'label' => 'Contraindications', 'name' => 'hpv_safety_contra_list', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Contraindication',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_safety_contra_item', 'label' => 'Contraindication', 'name' => 'text', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_safety_contra_note', 'label' => 'Contraindications Note', 'name' => 'hpv_safety_contra_note', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Breastfeeding is safe — the vaccine does not pass into breast milk.' ),
        array( 'key' => 'field_rl_hpv_safety_box', 'label' => 'Safety Summary Box', 'name' => 'hpv_safety_box', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Safety monitoring by the MHRA and WHO continues to confirm HPV vaccines have a favourable safety profile. Over 160 studies confirm the vaccine\'s safety and effectiveness.' ),

        // ── WHY CHOOSE US ──
        array( 'key' => 'field_rl_hpv_why_tab', 'label' => 'Why Choose Us', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_why_title', 'label' => 'Section Title', 'name' => 'hpv_why_title', 'type' => 'text', 'default_value' => 'Why Choose REY London for Your HPV Vaccination' ),
        array(
            'key' => 'field_rl_hpv_why_cards', 'label' => 'Feature Cards', 'name' => 'hpv_why_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Feature Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_why_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_why_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),

        // ── LOCATIONS ──
        array( 'key' => 'field_rl_hpv_locations_tab', 'label' => 'Locations', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_locations_title', 'label' => 'Section Title', 'name' => 'hpv_locations_title', 'type' => 'text', 'default_value' => 'Visit Us at Our South East London Locations' ),
        array(
            'key' => 'field_rl_hpv_locations', 'label' => 'Location Cards', 'name' => 'hpv_locations', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Location',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_loc_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_loc_address', 'label' => 'Address', 'name' => 'address', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_loc_phone', 'label' => 'Phone', 'name' => 'phone', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_loc_hours', 'label' => 'Opening Hours', 'name' => 'hours', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_loc_directions_url', 'label' => 'Directions URL', 'name' => 'directions_url', 'type' => 'url' ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_locations_serving', 'label' => 'Serving Areas Text', 'name' => 'hpv_locations_serving', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Conveniently located to serve patients across Chislehurst, Bromley, Orpington, Sidcup, Bexley, Eltham, and surrounding South East London areas. Free parking available at both locations.' ),

        array( 'key' => 'field_rl_hpv_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_pricing_title', 'label' => 'Pricing Section Title', 'name' => 'hpv_pricing_title', 'type' => 'text', 'default_value' => 'Transparent Pricing — HPV Vaccine London' ),
        array( 'key' => 'field_rl_hpv_pricing_subtitle', 'label' => 'Pricing Subtitle', 'name' => 'hpv_pricing_subtitle', 'type' => 'text', 'default_value' => 'No hidden fees. No consultation charges. The price you see is the price you pay.' ),
        array( 'key' => 'field_rl_hpv_price_per_dose', 'label' => 'Price Per Dose', 'name' => 'hpv_price_per_dose', 'type' => 'text', 'default_value' => '£150', 'instructions' => 'Shown on all pricing cards' ),
        array(
            'key' => 'field_rl_hpv_pricing', 'label' => 'Pricing Options (override)', 'name' => 'hpv_pricing', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Pricing Option', 'instructions' => 'Leave empty to use the hardcoded pricing cards',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_price_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_price_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_price_doses', 'label' => 'Doses', 'name' => 'doses', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_hpv_cta_tab', 'label' => 'Footer CTA', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hpv_cta_title', 'label' => 'CTA Title', 'name' => 'hpv_cta_title', 'type' => 'text', 'default_value' => 'Protect your future health today' ),
        array( 'key' => 'field_rl_hpv_cta_subtitle', 'label' => 'CTA Subtitle', 'name' => 'hpv_cta_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Book your private HPV vaccination at REY London Pharmacy — South East London\'s trusted clinic. No GP referral needed, same-day appointments available.' ),
        array( 'key' => 'field_rl_hpv_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_hpv_faqs', 'label' => 'FAQs', 'name' => 'hpv_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-hpv.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// YELLOW FEVER VACCINE PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_yellow_fever',
    'title'    => 'Yellow Fever Vaccine Page',
    'fields'   => array(
        // ── HERO ──
        array( 'key' => 'field_rl_yf_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_hero_title', 'label' => 'Hero Title', 'name' => 'yf_hero_title', 'type' => 'text', 'default_value' => 'Yellow Fever Vaccine London: Official Vaccination Centre in Chislehurst' ),
        array( 'key' => 'field_rl_yf_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'yf_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Registered Yellow Fever Vaccination Centre serving South East London. Lifetime protection with official International Certificate included.' ),
        array( 'key' => 'field_rl_yf_hero_image', 'label' => 'Hero Image', 'name' => 'yf_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_hero_eyebrow', 'label' => 'Eyebrow Text', 'name' => 'yf_hero_eyebrow', 'type' => 'text', 'default_value' => 'NaTHNaC Registered  |  Yellow Fever Vaccination Centre' ),
        array(
            'key' => 'field_rl_yf_hero_trust_badges', 'label' => 'Trust Badges', 'name' => 'yf_hero_trust_badges', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Badge',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_trust_badge_text', 'label' => 'Badge Text', 'name' => 'text', 'type' => 'text' ),
            ),
        ),

        // ── KEY FACTS ──
        array( 'key' => 'field_rl_yf_keyfacts_tab', 'label' => 'Key Facts', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_keyfacts_pill', 'label' => 'Pill Label', 'name' => 'yf_keyfacts_pill', 'type' => 'text', 'default_value' => 'At a Glance' ),
        array( 'key' => 'field_rl_yf_keyfacts_title', 'label' => 'Section Title', 'name' => 'yf_keyfacts_title', 'type' => 'text', 'default_value' => 'Key Facts About the Yellow Fever Vaccine' ),
        array(
            'key' => 'field_rl_yf_keyfacts_cards', 'label' => 'Stat Cards', 'name' => 'yf_keyfacts_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Stat Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_kf_stat', 'label' => 'Stat', 'name' => 'stat', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_kf_label', 'label' => 'Label', 'name' => 'label', 'type' => 'text' ),
            ),
        ),

        // ── UNDERSTANDING YELLOW FEVER ──
        array( 'key' => 'field_rl_yf_understanding_tab', 'label' => 'Understanding YF', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_understanding_eyebrow', 'label' => 'Eyebrow', 'name' => 'yf_understanding_eyebrow', 'type' => 'text', 'default_value' => 'What You Need to Know' ),
        array( 'key' => 'field_rl_yf_understanding_heading', 'label' => 'Heading', 'name' => 'yf_understanding_heading', 'type' => 'text', 'default_value' => 'What is Yellow Fever?' ),
        array( 'key' => 'field_rl_yf_understanding_body', 'label' => 'Body Content', 'name' => 'yf_understanding_body', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
        array(
            'key' => 'field_rl_yf_understanding_stats', 'label' => 'Stat Boxes', 'name' => 'yf_understanding_stats', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Stat',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_und_stat_num', 'label' => 'Number', 'name' => 'number', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_und_stat_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_yf_understanding_image', 'label' => 'Section Image', 'name' => 'yf_understanding_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_understanding_badge', 'label' => 'Image Badge Text', 'name' => 'yf_understanding_badge', 'type' => 'text', 'default_value' => '50%+ mortality rate in severe cases' ),

        // ── WHY YOU NEED IT ──
        array( 'key' => 'field_rl_yf_why_need_tab', 'label' => 'Why You Need It', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_why_need_title', 'label' => 'Section Title', 'name' => 'yf_why_need_title', 'type' => 'text', 'default_value' => 'Why You Need the Yellow Fever Vaccine' ),
        array( 'key' => 'field_rl_yf_why_need_subtitle', 'label' => 'Subtitle', 'name' => 'yf_why_need_subtitle', 'type' => 'textarea', 'rows' => 2, 'default_value' => 'Three compelling reasons why yellow fever vaccination is essential for travel to affected regions — not optional.' ),
        array(
            'key' => 'field_rl_yf_why_need_cards', 'label' => 'Reason Cards', 'name' => 'yf_why_need_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Reason',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_need_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_need_body', 'label' => 'Body', 'name' => 'body', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),

        // ── LIFESTYLE BANNERS ──
        array( 'key' => 'field_rl_yf_banners_tab', 'label' => 'Banners', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_banner1_image', 'label' => 'Banner 1 Image', 'name' => 'yf_banner1_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_banner1_title', 'label' => 'Banner 1 Title', 'name' => 'yf_banner1_title', 'type' => 'text', 'default_value' => '40+ Countries Require Certification' ),
        array( 'key' => 'field_rl_yf_banner1_text', 'label' => 'Banner 1 Subtitle', 'name' => 'yf_banner1_text', 'type' => 'text', 'default_value' => 'Protect yourself before exploring Africa & South America' ),
        array( 'key' => 'field_rl_yf_banner2_image', 'label' => 'Banner 2 Image', 'name' => 'yf_banner2_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_banner2_title', 'label' => 'Banner 2 Title', 'name' => 'yf_banner2_title', 'type' => 'text', 'default_value' => 'Professional Travel Health Service' ),
        array( 'key' => 'field_rl_yf_banner2_text', 'label' => 'Banner 2 Subtitle', 'name' => 'yf_banner2_text', 'type' => 'text', 'default_value' => 'GPhC-registered pharmacists · Consultation + vaccine + certificate in 20 minutes' ),

        // ── RISK AREAS ──
        array( 'key' => 'field_rl_yf_risk_tab', 'label' => 'Risk Areas', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_risk_pill', 'label' => 'Pill Label', 'name' => 'yf_risk_pill', 'type' => 'text', 'default_value' => 'Risk Areas' ),
        array( 'key' => 'field_rl_yf_risk_title', 'label' => 'Section Title', 'name' => 'yf_risk_title', 'type' => 'text', 'default_value' => 'Yellow Fever Risk Areas' ),
        array( 'key' => 'field_rl_yf_risk_subtitle', 'label' => 'Subtitle', 'name' => 'yf_risk_subtitle', 'type' => 'textarea', 'rows' => 3 ),
        array( 'key' => 'field_rl_yf_risk_africa_body', 'label' => 'Africa Description', 'name' => 'yf_risk_africa_body', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_rl_yf_risk_africa_list', 'label' => 'Africa Countries', 'name' => 'yf_risk_africa_list', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
        array( 'key' => 'field_rl_yf_risk_americas_body', 'label' => 'South America Description', 'name' => 'yf_risk_americas_body', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_rl_yf_risk_americas_list', 'label' => 'South America Countries', 'name' => 'yf_risk_americas_list', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
        array( 'key' => 'field_rl_yf_risk_transit_warning', 'label' => 'Transit Warning', 'name' => 'yf_risk_transit_warning', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),

        // ── WHO SHOULD GET VACCINATED ──
        array( 'key' => 'field_rl_yf_who_tab', 'label' => 'Who Should Get', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_who_title', 'label' => 'Section Title', 'name' => 'yf_who_title', 'type' => 'text', 'default_value' => 'Who Should Get the Yellow Fever Vaccine?' ),
        array( 'key' => 'field_rl_yf_who_subtitle', 'label' => 'Subtitle', 'name' => 'yf_who_subtitle', 'type' => 'textarea', 'rows' => 3 ),
        array(
            'key' => 'field_rl_yf_who_cards', 'label' => 'Eligibility Cards', 'name' => 'yf_who_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_who_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_who_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),
        array( 'key' => 'field_rl_yf_who_info_box', 'label' => 'Info Box', 'name' => 'yf_who_info_box', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),

        // ── VACCINATION PROCESS ──
        array( 'key' => 'field_rl_yf_process_tab', 'label' => 'Vaccination Process', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_process_title', 'label' => 'Section Title', 'name' => 'yf_process_title', 'type' => 'text', 'default_value' => 'What to Expect at Your Appointment' ),
        array( 'key' => 'field_rl_yf_process_subtitle', 'label' => 'Subtitle', 'name' => 'yf_process_subtitle', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_rl_yf_process_image', 'label' => 'Photo', 'name' => 'yf_process_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_process_badge', 'label' => 'Photo Badge Text', 'name' => 'yf_process_badge', 'type' => 'text', 'default_value' => 'GPhC-Registered Pharmacists' ),
        array(
            'key' => 'field_rl_yf_process_steps', 'label' => 'Steps', 'name' => 'yf_process_steps', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Step',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_step_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_step_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),
        array( 'key' => 'field_rl_yf_process_time', 'label' => 'Total Time Text', 'name' => 'yf_process_time', 'type' => 'text', 'default_value' => 'Allow 20 minutes total · Book at least 10 days before travel' ),

        // ── ICVP CERTIFICATE ──
        array( 'key' => 'field_rl_yf_cert_tab', 'label' => 'Certificate', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_cert_pill', 'label' => 'Pill Label', 'name' => 'yf_cert_pill', 'type' => 'text', 'default_value' => 'The Yellow Card' ),
        array( 'key' => 'field_rl_yf_cert_title', 'label' => 'Section Title', 'name' => 'yf_cert_title', 'type' => 'text', 'default_value' => 'Your Official Yellow Fever Certificate' ),
        array( 'key' => 'field_rl_yf_cert_subtitle', 'label' => 'Subtitle', 'name' => 'yf_cert_subtitle', 'type' => 'textarea', 'rows' => 3 ),
        array(
            'key' => 'field_rl_yf_cert_items', 'label' => 'Certificate Items', 'name' => 'yf_cert_items', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Item',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_cert_item_text', 'label' => 'Item', 'name' => 'text', 'type' => 'text' ),
            ),
        ),
        array(
            'key' => 'field_rl_yf_cert_bring', 'label' => 'Bring to Appointment', 'name' => 'yf_cert_bring', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Item',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_cert_bring_text', 'label' => 'Item', 'name' => 'text', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_yf_cert_validity', 'label' => 'Validity Note', 'name' => 'yf_cert_validity', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),

        // ── SIDE EFFECTS / SAFETY ──
        array( 'key' => 'field_rl_yf_safety_tab', 'label' => 'Safety', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_safety_banner_image', 'label' => 'Safety Banner Image', 'name' => 'yf_safety_banner_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_safety_banner_title', 'label' => 'Banner Title', 'name' => 'yf_safety_banner_title', 'type' => 'text', 'default_value' => '600+ Million Doses Administered Worldwide' ),
        array( 'key' => 'field_rl_yf_safety_banner_text', 'label' => 'Banner Subtitle', 'name' => 'yf_safety_banner_text', 'type' => 'text', 'default_value' => 'WHO-prequalified vaccine · Over 80 years of safety record' ),
        array( 'key' => 'field_rl_yf_safety_title', 'label' => 'Section Title', 'name' => 'yf_safety_title', 'type' => 'text', 'default_value' => 'Side Effects & Safety Information' ),
        array( 'key' => 'field_rl_yf_safety_subtitle', 'label' => 'Subtitle', 'name' => 'yf_safety_subtitle', 'type' => 'textarea', 'rows' => 3 ),
        array( 'key' => 'field_rl_yf_safety_common_title', 'label' => 'Common Title', 'name' => 'yf_safety_common_title', 'type' => 'text', 'default_value' => 'Common Side Effects (Affecting 1 in 3 People)' ),
        array(
            'key' => 'field_rl_yf_safety_common_list', 'label' => 'Common Side Effects', 'name' => 'yf_safety_common_list', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add',
            'sub_fields' => array( array( 'key' => 'field_rl_yf_safety_common_item', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),
        array( 'key' => 'field_rl_yf_safety_common_note', 'label' => 'Common Note', 'name' => 'yf_safety_common_note', 'type' => 'textarea', 'rows' => 2 ),
        array( 'key' => 'field_rl_yf_safety_serious_title', 'label' => 'Serious Title', 'name' => 'yf_safety_serious_title', 'type' => 'text', 'default_value' => 'Serious Side Effects (Very Rare)' ),
        array( 'key' => 'field_rl_yf_safety_serious_text', 'label' => 'Serious Text', 'name' => 'yf_safety_serious_text', 'type' => 'textarea', 'rows' => 3 ),
        array( 'key' => 'field_rl_yf_safety_contra_title', 'label' => 'Contra Title', 'name' => 'yf_safety_contra_title', 'type' => 'text', 'default_value' => 'Who Should NOT Receive Yellow Fever Vaccine' ),
        array(
            'key' => 'field_rl_yf_safety_contra_list', 'label' => 'Contraindications', 'name' => 'yf_safety_contra_list', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add',
            'sub_fields' => array( array( 'key' => 'field_rl_yf_safety_contra_item', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),
        array( 'key' => 'field_rl_yf_safety_precautions_title', 'label' => 'Precautions Title', 'name' => 'yf_safety_precautions_title', 'type' => 'text', 'default_value' => 'Special Precautions' ),
        array(
            'key' => 'field_rl_yf_safety_precautions', 'label' => 'Precautions', 'name' => 'yf_safety_precautions', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add',
            'sub_fields' => array( array( 'key' => 'field_rl_yf_safety_prec_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),
        array( 'key' => 'field_rl_yf_safety_box', 'label' => 'Safety Summary', 'name' => 'yf_safety_box', 'type' => 'textarea', 'rows' => 3 ),

        // ── PRICING ──
        array( 'key' => 'field_rl_yf_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_pricing_title', 'label' => 'Section Title', 'name' => 'yf_pricing_title', 'type' => 'text', 'default_value' => 'Transparent Yellow Fever Vaccine Pricing' ),
        array( 'key' => 'field_rl_yf_pricing_subtitle', 'label' => 'Subtitle', 'name' => 'yf_pricing_subtitle', 'type' => 'text', 'default_value' => 'All-inclusive price. No hidden fees. No consultation charges.' ),
        array( 'key' => 'field_rl_yf_price_amount', 'label' => 'Price Amount', 'name' => 'yf_price_amount', 'type' => 'text', 'default_value' => '85' ),
        array( 'key' => 'field_rl_yf_price_badge', 'label' => 'Price Badge Text', 'name' => 'yf_price_badge', 'type' => 'text', 'default_value' => 'All-Inclusive · Everything Included' ),
        array(
            'key' => 'field_rl_yf_price_includes', 'label' => 'Includes List', 'name' => 'yf_price_includes', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Item',
            'sub_fields' => array( array( 'key' => 'field_rl_yf_price_include_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),
        array( 'key' => 'field_rl_yf_pricing_info', 'label' => 'Pricing Info Box', 'name' => 'yf_pricing_info', 'type' => 'textarea', 'rows' => 3 ),
        array( 'key' => 'field_rl_yf_pricing_note', 'label' => 'Pricing Note', 'name' => 'yf_pricing_note', 'type' => 'textarea', 'rows' => 2 ),

        // ── WHY CHOOSE US ──
        array( 'key' => 'field_rl_yf_why_tab', 'label' => 'Why Choose Us', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_why_title', 'label' => 'Section Title', 'name' => 'yf_why_title', 'type' => 'text', 'default_value' => 'Official Yellow Fever Vaccination Centre' ),
        array( 'key' => 'field_rl_yf_why_subtitle', 'label' => 'Subtitle', 'name' => 'yf_why_subtitle', 'type' => 'textarea', 'rows' => 3 ),
        array(
            'key' => 'field_rl_yf_why_cards', 'label' => 'Feature Cards', 'name' => 'yf_why_cards', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Card',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_why_card_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_why_card_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 3 ),
            ),
        ),

        // ── LOCATIONS ──
        array( 'key' => 'field_rl_yf_locations_tab', 'label' => 'Locations', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_locations_title', 'label' => 'Section Title', 'name' => 'yf_locations_title', 'type' => 'text', 'default_value' => 'Visit Our Yellow Fever Vaccination Centres in Chislehurst' ),
        array(
            'key' => 'field_rl_yf_locations', 'label' => 'Location Cards', 'name' => 'yf_locations', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Location',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_loc_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_loc_address', 'label' => 'Address', 'name' => 'address', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_loc_phone', 'label' => 'Phone', 'name' => 'phone', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_loc_hours', 'label' => 'Hours', 'name' => 'hours', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_loc_parking', 'label' => 'Parking Info', 'name' => 'parking', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_loc_directions_url', 'label' => 'Directions URL', 'name' => 'directions_url', 'type' => 'url' ),
                array( 'key' => 'field_rl_yf_loc_cta_text', 'label' => 'CTA Text', 'name' => 'cta_text', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_yf_locations_serving', 'label' => 'Serving Areas Text', 'name' => 'yf_locations_serving', 'type' => 'textarea', 'rows' => 2 ),

        // ── FOOTER CTA ──
        array( 'key' => 'field_rl_yf_cta_tab', 'label' => 'Footer CTA', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_cta_title', 'label' => 'CTA Title', 'name' => 'yf_cta_title', 'type' => 'text', 'default_value' => 'Protect Yourself Before You Travel' ),
        array( 'key' => 'field_rl_yf_cta_subtitle', 'label' => 'CTA Subtitle', 'name' => 'yf_cta_subtitle', 'type' => 'textarea', 'rows' => 2 ),
        array(
            'key' => 'field_rl_yf_cta_badges', 'label' => 'CTA Badges', 'name' => 'yf_cta_badges', 'type' => 'repeater', 'layout' => 'table', 'button_label' => 'Add Badge',
            'sub_fields' => array( array( 'key' => 'field_rl_yf_cta_badge_text', 'label' => 'Text', 'name' => 'text', 'type' => 'text' ) ),
        ),

        // ── COUNTRIES (existing) ──
        array( 'key' => 'field_rl_yf_countries_tab', 'label' => 'Countries', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_yf_countries', 'label' => 'Country Cards', 'name' => 'yf_countries', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Country',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_country_name', 'label' => 'Country Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_country_requirement', 'label' => 'Requirement Level', 'name' => 'requirement', 'type' => 'select', 'choices' => array( 'required' => 'Required', 'recommended' => 'Recommended', 'risk' => 'Risk Areas Only' ) ),
                array( 'key' => 'field_rl_yf_country_flag', 'label' => 'Flag Image', 'name' => 'flag', 'type' => 'image', 'return_format' => 'url' ),
            ),
        ),

        // ── FAQs (existing) ──
        array( 'key' => 'field_rl_yf_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_yf_faqs', 'label' => 'FAQs', 'name' => 'yf_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-yellow-fever.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// CONTACT PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_contact',
    'title'    => 'Contact Page',
    'fields'   => array(
        array( 'key' => 'field_rl_ct_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_ct_hero_title', 'label' => 'Hero Title', 'name' => 'ct_hero_title', 'type' => 'text', 'default_value' => 'Contact Rey London Pharmacy' ),
        array( 'key' => 'field_rl_ct_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'ct_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'We\'re here to help with prescriptions, travel vaccinations, specialist consultations, and any health questions. Two Chislehurst locations, walk-ins welcome.' ),
        array( 'key' => 'field_rl_ct_locations_tab', 'label' => 'Locations', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_ct_locations', 'label' => 'Location Cards', 'name' => 'ct_locations', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Location',
            'sub_fields' => array(
                array( 'key' => 'field_rl_ct_loc_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_ct_loc_address', 'label' => 'Address', 'name' => 'address', 'type' => 'text' ),
                array( 'key' => 'field_rl_ct_loc_phone', 'label' => 'Phone', 'name' => 'phone', 'type' => 'text' ),
                array( 'key' => 'field_rl_ct_loc_email', 'label' => 'Email', 'name' => 'email', 'type' => 'email' ),
                array( 'key' => 'field_rl_ct_loc_hours', 'label' => 'Opening Hours', 'name' => 'hours', 'type' => 'textarea', 'rows' => 3 ),
                array( 'key' => 'field_rl_ct_loc_map_url', 'label' => 'Google Maps Embed URL', 'name' => 'map_url', 'type' => 'url' ),
                array( 'key' => 'field_rl_ct_loc_directions', 'label' => 'Directions URL', 'name' => 'directions_url', 'type' => 'url' ),
            ),
        ),
        array( 'key' => 'field_rl_ct_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_ct_faqs', 'label' => 'FAQs', 'name' => 'ct_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_ct_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_ct_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-contact.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// MEET THE TEAM PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_team',
    'title'    => 'Meet the Team Page',
    'fields'   => array(
        array( 'key' => 'field_rl_mt_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_mt_hero_title', 'label' => 'Hero Title', 'name' => 'mt_hero_title', 'type' => 'text', 'default_value' => 'People Behind Your Exceptional Care' ),
        array( 'key' => 'field_rl_mt_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'mt_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Our team of GPhC-registered pharmacists, independent prescribers, and healthcare professionals are dedicated to delivering personalised, evidence-based care.' ),
        array( 'key' => 'field_rl_mt_members_tab', 'label' => 'Team Members', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_mt_members', 'label' => 'Team Members', 'name' => 'mt_members', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Team Member',
            'sub_fields' => array(
                array( 'key' => 'field_rl_mt_member_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_mt_member_role', 'label' => 'Role', 'name' => 'role', 'type' => 'text' ),
                array( 'key' => 'field_rl_mt_member_bio', 'label' => 'Bio', 'name' => 'bio', 'type' => 'textarea', 'rows' => 4 ),
                array( 'key' => 'field_rl_mt_member_photo', 'label' => 'Photo', 'name' => 'photo', 'type' => 'image', 'return_format' => 'url' ),
                array( 'key' => 'field_rl_mt_member_gphc', 'label' => 'GPhC Number', 'name' => 'gphc', 'type' => 'text' ),
                array( 'key' => 'field_rl_mt_member_qualifications', 'label' => 'Qualifications', 'name' => 'qualifications', 'type' => 'text' ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-team.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// HEALTH HUB PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_health_hub',
    'title'    => 'Health Hub Page',
    'fields'   => array(
        array( 'key' => 'field_rl_hh_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_hh_hero_title', 'label' => 'Hero Title', 'name' => 'hh_hero_title', 'type' => 'text', 'default_value' => 'Expert insights on weight loss, travel health, and living your healthiest life' ),
        array( 'key' => 'field_rl_hh_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'hh_hero_subtitle', 'type' => 'textarea', 'rows' => 3, 'default_value' => 'Trusted advice from our GPhC-registered pharmacists. Evidence-based guidance to help you make informed health decisions across South East London.' ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-health-hub.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// PRESCRIPTION SERVICES PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_prescriptions',
    'title'    => 'Prescription Services Page',
    'fields'   => array(
        array( 'key' => 'field_rl_rx_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_rx_hero_title', 'label' => 'Hero Title', 'name' => 'rx_hero_title', 'type' => 'text', 'default_value' => 'NHS & Private Prescription Services in South East London' ),
        array( 'key' => 'field_rl_rx_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'rx_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Free delivery, online ordering, and automatic refills. Your prescriptions delivered to your door with expert care from our GPhC-registered pharmacists.' ),
        array( 'key' => 'field_rl_rx_services_tab', 'label' => 'Services', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_rx_services', 'label' => 'Service Cards', 'name' => 'rx_services', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Service',
            'sub_fields' => array(
                array( 'key' => 'field_rl_rx_svc_title', 'label' => 'Title', 'name' => 'title', 'type' => 'text' ),
                array( 'key' => 'field_rl_rx_svc_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_rx_svc_icon', 'label' => 'Icon Class', 'name' => 'icon', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_rx_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_rx_faqs', 'label' => 'FAQs', 'name' => 'rx_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_rx_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_rx_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-prescription-services.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// VITAMIN B12 PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_vitamin_b12',
    'title'    => 'Vitamin B12 Page',
    'fields'   => array(
        array( 'key' => 'field_rl_b12_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_b12_hero_title', 'label' => 'Hero Title', 'name' => 'b12_hero_title', 'type' => 'text', 'default_value' => 'Vitamin B12 Injections in South East London' ),
        array( 'key' => 'field_rl_b12_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'b12_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Boost your energy, lift brain fog, and address B12 deficiency with a fast-acting intramuscular injection. No GP referral needed. Walk-ins welcome at both Chislehurst pharmacies.' ),
        array( 'key' => 'field_rl_b12_hero_image', 'label' => 'Hero Image', 'name' => 'b12_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_b12_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_b12_pricing', 'label' => 'Pricing Options', 'name' => 'b12_pricing', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Pricing Option',
            'sub_fields' => array(
                array( 'key' => 'field_rl_b12_price_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_b12_price_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_b12_price_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_b12_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_b12_faqs', 'label' => 'FAQs', 'name' => 'b12_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_b12_faq_q', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_b12_faq_a', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-vitamin-b12.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// INDIA TRAVEL HEALTH PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_india',
    'title'    => 'India Travel Health Page',
    'fields'   => array(
        array( 'key' => 'field_rl_india_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_india_hero_title', 'label' => 'Hero Title', 'name' => 'india_hero_title', 'type' => 'text', 'default_value' => 'India Travel Vaccinations in South East London' ),
        array( 'key' => 'field_rl_india_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'india_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Expert travel health advice and essential vaccines for your India trip. Same-day appointments available at our Chislehurst and Pond End clinics.' ),
        array( 'key' => 'field_rl_india_vaccines_tab', 'label' => 'Vaccines', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_india_vaccines', 'label' => 'Recommended Vaccines', 'name' => 'india_vaccines', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Vaccine',
            'sub_fields' => array(
                array( 'key' => 'field_rl_india_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_india_vax_rec', 'label' => 'Recommendation', 'name' => 'recommendation', 'type' => 'select', 'choices' => array( 'required' => 'Required', 'recommended' => 'Recommended', 'consider' => 'Consider' ) ),
                array( 'key' => 'field_rl_india_vax_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_india_vax_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_india_vax_doses', 'label' => 'Doses/Schedule', 'name' => 'doses', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_india_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_india_faqs', 'label' => 'FAQs', 'name' => 'india_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_india_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_india_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-india.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );

// =============================================================================
// GAMBIA TRAVEL HEALTH PAGE FIELDS
// =============================================================================
acf_add_local_field_group( array(
    'key'      => 'group_rl_gambia',
    'title'    => 'Gambia Travel Health Page',
    'fields'   => array(
        array( 'key' => 'field_rl_gambia_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_gambia_hero_title', 'label' => 'Hero Title', 'name' => 'gambia_hero_title', 'type' => 'text', 'default_value' => 'Gambia Travel Vaccinations in South East London' ),
        array( 'key' => 'field_rl_gambia_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'gambia_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Expert travel health advice and essential vaccines for your Gambia trip. Same-day appointments available at our Chislehurst and Pond End clinics.' ),
        array( 'key' => 'field_rl_gambia_vaccines_tab', 'label' => 'Vaccines', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_gambia_vaccines', 'label' => 'Recommended Vaccines', 'name' => 'gambia_vaccines', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Vaccine',
            'sub_fields' => array(
                array( 'key' => 'field_rl_gambia_vax_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_gambia_vax_rec', 'label' => 'Recommendation', 'name' => 'recommendation', 'type' => 'select', 'choices' => array( 'required' => 'Required', 'recommended' => 'Recommended', 'consider' => 'Consider' ) ),
                array( 'key' => 'field_rl_gambia_vax_desc', 'label' => 'Description', 'name' => 'description', 'type' => 'textarea', 'rows' => 2 ),
                array( 'key' => 'field_rl_gambia_vax_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_gambia_vax_doses', 'label' => 'Doses/Schedule', 'name' => 'doses', 'type' => 'text' ),
            ),
        ),
        array( 'key' => 'field_rl_gambia_faq_tab', 'label' => 'FAQs', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_gambia_faqs', 'label' => 'FAQs', 'name' => 'gambia_faqs', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add FAQ',
            'sub_fields' => array(
                array( 'key' => 'field_rl_gambia_faq_question', 'label' => 'Question', 'name' => 'question', 'type' => 'text' ),
                array( 'key' => 'field_rl_gambia_faq_answer', 'label' => 'Answer', 'name' => 'answer', 'type' => 'wysiwyg', 'toolbar' => 'basic', 'media_upload' => 0 ),
            ),
        ),
    ),
    'location' => array( array( array( 'param' => 'page_template', 'operator' => '==', 'value' => 'page-templates/page-gambia.php' ) ) ),
    'menu_order' => 0, 'position' => 'normal', 'style' => 'default', 'label_placement' => 'top',
) );
