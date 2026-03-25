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
        array( 'key' => 'field_rl_hpv_hero_image', 'label' => 'Hero Image', 'name' => 'hpv_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_hpv_pricing_tab', 'label' => 'Pricing', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_hpv_pricing', 'label' => 'Pricing', 'name' => 'hpv_pricing', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Pricing Option',
            'sub_fields' => array(
                array( 'key' => 'field_rl_hpv_price_name', 'label' => 'Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_price_price', 'label' => 'Price', 'name' => 'price', 'type' => 'text' ),
                array( 'key' => 'field_rl_hpv_price_doses', 'label' => 'Doses', 'name' => 'doses', 'type' => 'text' ),
            ),
        ),
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
        array( 'key' => 'field_rl_yf_hero_tab', 'label' => 'Hero Section', 'type' => 'tab' ),
        array( 'key' => 'field_rl_yf_hero_title', 'label' => 'Hero Title', 'name' => 'yf_hero_title', 'type' => 'text', 'default_value' => 'Yellow Fever Vaccine London: Official Vaccination Centre in Chislehurst' ),
        array( 'key' => 'field_rl_yf_hero_subtitle', 'label' => 'Hero Subtitle', 'name' => 'yf_hero_subtitle', 'type' => 'textarea', 'rows' => 4, 'default_value' => 'Registered Yellow Fever Vaccination Centre serving South East London. Lifetime protection with official International Certificate included.' ),
        array( 'key' => 'field_rl_yf_hero_image', 'label' => 'Hero Image', 'name' => 'yf_hero_image', 'type' => 'image', 'return_format' => 'url' ),
        array( 'key' => 'field_rl_yf_countries_tab', 'label' => 'Countries', 'type' => 'tab' ),
        array(
            'key' => 'field_rl_yf_countries', 'label' => 'Country Cards', 'name' => 'yf_countries', 'type' => 'repeater', 'layout' => 'block', 'button_label' => 'Add Country',
            'sub_fields' => array(
                array( 'key' => 'field_rl_yf_country_name', 'label' => 'Country Name', 'name' => 'name', 'type' => 'text' ),
                array( 'key' => 'field_rl_yf_country_requirement', 'label' => 'Requirement Level', 'name' => 'requirement', 'type' => 'select', 'choices' => array( 'required' => 'Required', 'recommended' => 'Recommended', 'risk' => 'Risk Areas Only' ) ),
                array( 'key' => 'field_rl_yf_country_flag', 'label' => 'Flag Image', 'name' => 'flag', 'type' => 'image', 'return_format' => 'url' ),
            ),
        ),
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
